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
	;
	
-- display tables present in databases
select * from information_schema.tables;

--select with where clause
select * from directors where director_id=1;

-- and with select statement
select * from movies where age_certificate='15'
and movie_lang='Chinese';

--logical operators
select movie_name, movie_length from movies where movie_length>100;

select movie_name, movie_length from movies where movie_length>=100;

select movie_name, movie_length from movies where movie_length<100;

select * from movies where release_date>'1999-12-31';

select * from movies where release_date<'1999-12-31';
--returning data alphabetically based on 1st letter
select * from movies where movie_lang>'English';

--challenge 1 select queries
select movie_name,release_date from movies;

select * from directors;
select first_name,last_name from directors where nationality='American';

select * from actors;
select * from actors where gender='M' and date_of_birth>'1970-01-01';

select * from movies;
select movie_name from movies where movie_length>'90' and movie_lang='English';


-- in and not in
select first_name, last_name from actors where first_name='Peter' or first_name='Alice';
--we can add multiple values with in 
select first_name, last_name from actors where first_name in ('Peter','Alice');

--not in
select first_name, last_name from actors where first_name!='Peter' and first_name!='Alice';

select first_name, last_name from actors where first_name not in ('Peter','Alice');

--like 
--for pattern %
--name starting with P, % is used after letter 
select first_name from actors where first_name like 'P%';

-- for particular words having particular length _ is used or followed by particular characters
select first_name from actors where first_name like 'P____';

select first_name from actors where first_name like 'Al___';

--for words ending with P use % first then letter
select first_name from actors where first_name like '%r';

--for any word containing particular words use %a%
select first_name from actors where first_name like '%r%';

--between (between )
select * from movies where release_date between '1995-01-01' and '1999-12-31';

select * from movies where movie_length between '112' and '120';

--challenge 2 select queries 

select movie_name,movie_lang from movies where movie_lang in ('English','Spanish','Korean');

select * from actors;
select first_name,last_name from actors 
where last_name like 'B%' and 
date_of_birth between '1940-01-01' and '1999-12-31';

select * from directors;
select first_name,last_name from directors 
where nationality in ('British','French','German') and
date_of_birth between '1950-01-01' and '1980-12-31';

-- order by 
select * from actors order by date_of_birth desc;

select * from actors order by actor_id ;

select first_name,last_name from actors where gender='F' 
order by date_of_birth;

--limits

select * from movie_revenue;
select * from movie_revenue 
order by domestic_takings asc
limit 5;
--offset skips the 3 starting numbers and returns next 5 numbers
select * from movie_revenue 
order by revenue_id asc
limit 5 offset 3; 

-- using fetch 
select movie_name from movies 
fetch first 1 row only;
 -- returns first 10 rows using fetch 
select movie_name from movies 
fetch first 10 row only;
 -- offset can also be used with fetch but offset will come first 
 select * from movies
 offset 5 
 fetch first 10 row only;
 
 
 -- distinct
 select movie_lang from movies
 order by movie_lang;
 
 select distinct movie_lang from movies
 order by movie_lang;
 
  select distinct movie_lang,age_certificate from movies
 order by movie_lang;
 
 -- challenge 3 select queries
 select * from directors;
 
 select * from directors 
 where nationality = 'American' 
 order by date_of_birth desc;
 
 select distinct nationality from directors ;
 
 select * from actors;
 select first_name, last_name, date_of_birth from actors
   order by date_of_birth desc
 fetch first 10 row only;
 
 
 -- null values
 select * from actors
 where date_of_birth is null;
 
 select * from actors;
 
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
	;
	
-- display tables present in databases
select * from information_schema.tables;

--select with where clause
select * from directors where director_id=1;

-- and with select statement
select * from movies where age_certificate='15'
and movie_lang='Chinese';

--logical operators
select movie_name, movie_length from movies where movie_length>100;

select movie_name, movie_length from movies where movie_length>=100;

select movie_name, movie_length from movies where movie_length<100;

select * from movies where release_date>'1999-12-31';

select * from movies where release_date<'1999-12-31';
--returning data alphabetically based on 1st letter
select * from movies where movie_lang>'English';

--challenge 1 select queries
select movie_name,release_date from movies;

select * from directors;
select first_name,last_name from directors where nationality='American';

select * from actors;
select * from actors where gender='M' and date_of_birth>'1970-01-01';

select * from movies;
select movie_name from movies where movie_length>'90' and movie_lang='English';


-- in and not in
select first_name, last_name from actors where first_name='Peter' or first_name='Alice';
--we can add multiple values with in 
select first_name, last_name from actors where first_name in ('Peter','Alice');

--not in
select first_name, last_name from actors where first_name!='Peter' and first_name!='Alice';

select first_name, last_name from actors where first_name not in ('Peter','Alice');

--like 
--for pattern %
--name starting with P, % is used after letter 
select first_name from actors where first_name like 'P%';

-- for particular words having particular length _ is used or followed by particular characters
select first_name from actors where first_name like 'P____';

select first_name from actors where first_name like 'Al___';

--for words ending with P use % first then letter
select first_name from actors where first_name like '%r';

--for any word containing particular words use %a%
select first_name from actors where first_name like '%r%';

--between (between )
select * from movies where release_date between '1995-01-01' and '1999-12-31';

select * from movies where movie_length between '112' and '120';

--challenge 2 select queries 

select movie_name,movie_lang from movies where movie_lang in ('English','Spanish','Korean');

select * from actors;
select first_name,last_name from actors 
where last_name like 'B%' and 
date_of_birth between '1940-01-01' and '1999-12-31';

select * from directors;
select first_name,last_name from directors 
where nationality in ('British','French','German') and
date_of_birth between '1950-01-01' and '1980-12-31';

-- order by 
select * from actors order by date_of_birth desc;

select * from actors order by actor_id ;

select first_name,last_name from actors where gender='F' 
order by date_of_birth;

--limits

select * from movie_revenue;
select * from movie_revenue 
order by domestic_takings asc
limit 5;
--offset skips the 3 starting numbers and returns next 5 numbers
select * from movie_revenue 
order by revenue_id asc
limit 5 offset 3; 

-- using fetch 
select movie_name from movies 
fetch first 1 row only;
 -- returns first 10 rows using fetch 
select movie_name from movies 
fetch first 10 row only;
 -- offset can also be used with fetch but offset will come first 
 select * from movies
 offset 5 
 fetch first 10 row only;
 
 
 -- distinct
 select movie_lang from movies
 order by movie_lang;
 
 select distinct movie_lang from movies
 order by movie_lang;
 
  select distinct movie_lang,age_certificate from movies
 order by movie_lang;
 
 -- challenge 3 select queries
 select * from directors;
 
 select * from directors 
 where nationality = 'American' 
 order by date_of_birth desc;
 
 select distinct nationality from directors ;
 
 select * from actors;
 select first_name, last_name, date_of_birth from actors
   order by date_of_birth desc
 fetch first 10 row only;
 
 
 -- null values
 select * from actors
 where date_of_birth is null;
 
 select * from actors;
 
  select * from actors
 where date_of_birth is not null;
 
 select * from movie_revenue 
 order by domestic_takings desc;
 
 select * from movie_revenue 
 where domestic_takings is not null
 order by domestic_takings desc;
 
 select * from movie_revenue
 where international_takings is null;
 
 -- column name alias, alias only changes names while fetch result set not in real
 select last_name as surname from directors;
    -- alias cannot be used with where clause
select last_name as surname from directors 
 where last_name ='Lee';
 		-- alias can be used with order by
 select last_name as surname from directors
 where nationality='American'
 order by surname desc;
 
--concatenation 
select 'Krishna' || 'Ramchandani' as new_string;
    	-- for spacing
select 'Krishna' || ' ' || 'Ramchandani' as new_string; 
	-- for concatination use concat function
select concat(first_name,last_name) as full_name from actors;
		--for spacing
select concat(first_name,' ', last_name) as full_name from actors;
	--concat_ws -- user can specify any kind of seperator
select concat_ws(' ',first_name,last_name) as full_name from actors;

-- challenge 4 select queries
select * from movie_revenue;
select * from movie_revenue 
where international_takings is not null
order by international_takings desc 
limit 3;

select concat_ws(' ', first_name,last_name) as full_name
from directors order by full_name desc;

select * from actors;
select * from actors 
where first_name is null and 
date_of_birth is null;




