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
	
	
--- inner join 

select movies.movie_name,movies.movie_lang,directors.first_name,
directors.last_name,directors.nationality from movies inner join
directors on movies.director_id=directors.director_id;
	--where clause and order by in inner join
select movies.movie_name,movies.movie_lang,directors.first_name,
directors.last_name,directors.nationality from movies inner join
directors on movies.director_id=directors.director_id
where movies.movie_lang='Chinese'
order by movies.movie_length;

	-- inner join using short form versions (applying alias)
	-- using join keyword in place of inner join is allowed
select mv.movie_name,mv.movie_lang,dir.first_name,
dir.last_name,dir.nationality from movies mv join
directors dir on mv.director_id=dir.director_id
where mv.movie_lang='Chinese'
order by mv.movie_length;	

	--- using 'using' keyword in place of 'on'
	-- also using where clause and order by
	-- using is mostly used when there will be primary key and foreign key references
select mv.movie_name,mr.domestic_takings,mv.age_certificate
from movies mv join movie_revenue mr using (movie_id)
where age_certificate>='15'
order by age_certificate;

--challenge 1 - Joins
select * from directors;
select * from movies;

select dr.first_name,dr.last_name,mv.movie_name,mv.release_date,
mv.movie_lang
from directors dr inner join movies mv 
on dr.director_id=mv.director_id
where (movie_lang = 'Chinese' or movie_lang = 'Korean' or 
	   movie_lang ='Japanese');
	   
select * from movies;
select * from movie_revenue; -- movie_id

select mv.movie_name,mv.release_date,mr.international_takings,
mv.movie_lang
from movies mv inner join movie_revenue mr
on mv.movie_id=mr.movie_id
where mv.movie_lang='English' and international_takings is not null
order by mv.release_date desc;

select mv.movie_name,mr.domestic_takings,mr.international_takings
from movies mv inner join movie_revenue mr
on mv.movie_id=mr.movie_id	
order by mv.movie_name;

-- left joins
select mv.movie_name,mr.domestic_takings from 
movies mv left join movie_revenue mr
on mv.movie_id=mr.movie_id;

select dr.first_name,dr.last_name,mv.movie_name
from directors dr left join movies mv
on dr.director_id=mv.director_id
where dr.nationality='Chinese';

--right joins
select dr.first_name,dr.last_name,mv.movie_name
from directors dr right join movies mv
on dr.director_id=mv.director_id
order by last_name;

--full joins
select * from movies;
select dr.first_name,dr.last_name,mv.movie_name
from directors dr full join movies mv
on dr.director_id=mv.director_id
where mv.movie_length>120
order by mv.release_date desc;


-- challenge 2 Joins
select dr.first_name,dr.last_name,mv.movie_name,mv.release_date
from directors dr left join movies mv 
on dr.director_id=mv.director_id
where dr.nationality='British';

select * from directors;
select * from movies;

select dr.first_name,dr.last_name,count(mv.movie_id)
from directors dr left join movies mv 
on dr.director_id=mv.director_id
group by dr.first_name,dr.last_name;


-- Joining more then 2 tables
select d.first_name,d.last_name,mv.movie_name,
mr.international_takings,mr.domestic_takings
from directors d join movies mv on
d.director_id=mv.director_id join movie_revenue mr
on mr.movie_id=mv.movie_id;

-- challenge 3 joins
select * from actors;
select * from movies;
select * from directors;
select * from movie_actors;
select * from movie_revenue;

select ac.first_name,ac.last_name from actors ac
join movie_actors ma on ac.actor_id=ma.actor_id
join movies mv on ma.movie_id=mv.movie_id
join directors dr on dr.director_id=mv.director_id
where dr.first_name='Wes' and dr.last_name='Anderson';


select dr.first_name,dr.last_name,
sum(mr.domestic_takings) as total_dom_takings 
from directors dr join movies mv 
on dr.director_id=mv.director_id join 
movie_revenue mr on mv.movie_id=mr.movie_id
where mr.domestic_takings is not null
group by dr.first_name,dr.last_name
order by total_dom_takings desc
limit 1;


-- union 
-- in union it should have compatible data types and same numbers of data types
select first_name,last_name from directors
union 
select first_name,last_name from actors;

select first_name,last_name from directors
where nationality='British'
union 
select first_name,last_name from actors
where gender='F';

select first_name,last_name from directors
where nationality='British'
union 
select first_name,last_name from actors
where gender='F'
order by first_name;


-- union all
select first_name from directors
union all
select first_name from actors
order by first_name;

--challenge 4 Joins
select first_name, last_name, date_of_birth from directors
union all
select first_name, last_name, date_of_birth from actors
order by date_of_birth;

select first_name, last_name from directors 
where date_of_birth between '1960-01-01' and '1969-12-31'
union all
select first_name, last_name from actors
where date_of_birth between '1960-01-01' and '1969-12-31'
order by last_name;


-- intersect
select first_name from directors
where nationality='American'
intersect
select first_name from actors
order by first_name;

-- except
select first_name from directors
where nationality in ('American','Chinese')
except
select first_name from actors
order by first_name;

--challenge 5 Joins
select first_name,last_name,date_of_birth from directors
intersect
select first_name,last_name,date_of_birth from actors;

select first_name from actors where gender='M'
except
select first_name from directors where nationality='British';


	