-- Database: movie_data

-- DROP DATABASE movie_data;

CREATE DATABASE movie_data
    WITH 
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'English_India.1252'
    LC_CTYPE = 'English_India.1252'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;
	
	
	
--count aggregate function  
-- count does not counts null values

select count(*) from movie_revenue;

select count(international_takings) from movie_revenue;

select count(*) from movies where movie_lang='English';


--sum aggregate function 
-- summ cannot be functions used on varchar, dates and *
select * from movie_revenue;

select sum(domestic_takings) from movie_revenue;

select sum(international_takings) from movie_revenue
where international_takings<100;

select count(movie_lang), sum(movie_length) from movies
where movie_lang='Chinese' and movie_length>100;

--min max aggregate function 
-- min max works on date and varchar
select max(international_takings) from movie_revenue;

select max(movie_length) from movies;

select min(movie_length) from movies;

select max(movie_length) from movies where movie_lang='Chinese';

select max(release_date),min(release_date) from movies;

select max(movie_name),min(movie_name) from movies;

-- average aggregate function 
select avg(domestic_takings ) from movie_revenue;

select avg (movie_length) from movies;

select avg(movie_length) from movies 
where movie_lang='Spanish';

-- challenge 1 aggregate functions
select count(first_name) from actors 
where date_of_birth>'1970-01-01';

select min(domestic_takings),max(domestic_takings)
from movie_revenue;

select * from movies;

select sum(movie_length) from movies 
where age_certificate='15';

select count(nationality) from directors 
where nationality='Japanese';

select avg(movie_length) from movies
where movie_lang = 'Chinese';

-- grouping data 	(group by)
select movie_lang, count(movie_lang) from movies
group by movie_lang;

select movie_lang, avg(movie_length) from movies
group by movie_lang;

select * from movies;
select movie_name, min(movie_length) from movies
group by movie_name;

select movie_name, movie_lang,min(movie_length) from movies
group by movie_name,movie_lang;

	--where can be added in group by but shere should come before group by
select movie_name, movie_lang,min(movie_length) from movies
where movie_length>120
group by movie_name,movie_lang;

	-- 2 aggregate function in same query
select movie_name, movie_lang,min(movie_length),max(movie_length) from movies
where movie_length>120
group by movie_name,movie_lang;


--having 
	--having clause must come after group by clause
	--aggregate functions not allowed with where clause
select movie_lang,count(movie_lang) from movies
group by movie_lang
having count(movie_lang)>1;
	-- where and having clause can be used together
select movie_lang,count(movie_lang) from movies
where movie_length>120
group by movie_lang
having count(movie_lang)>1;

-- challenge 2 aggregate functions

select * from directors;
select nationality,count(nationality) from directors
group by nationality;

select movie_lang,age_certificate, sum(movie_length) 
from movies
group by movie_lang,age_certificate
order by movie_lang,age_certificate;

select movie_lang,sum(movie_length) from movies
group by movie_lang
having sum(movie_length)>500;

--mathematical operations

select 10 + 20 as addition;
select 10-20 as substraction;
select 16/3 as division;
select 15*9 as multiplication;
select 17%4 as modulus;

select * from ;
select movie_id,(domestic_takings+international_takings) 
as total_takings from movie_revenue
where international_takings is not null and domestic_takings is not null;


