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
	
	
-- create the directors table

create table directors (
	director_id SERIAL PRIMARY KEY,
	first_name VARCHAR(30),
	last_name VARCHAR(30) NOT NULL,
	date_of_birth DATE,
	nationality VARCHAR(20)
);
	
SELECT * FROM directors;	

-- creating actors table

CREATE TABLE actors (
	actor_id SERIAL PRIMARY KEY,
	first_name VARCHAR(30),
	last_name VARCHAR(30),
	gender CHAR(1),
	date_of_birth DATE
);

select * from actors;


create table movies(
	movie_id SERIAL PRIMARY KEY,
	movie_name VARCHAR(50) NOT NULL,
	movie_length INT,
	movie_lang VARCHAR(20),
	release_date DATE,
	age_certificate VARCHAR(5),
	director_id INT REFERENCES directors (director_id)
);
	
	select * from movies;
	
-- creating movie_revenue table 

create table movie_revenue (
	revenue_id serial primary key,
	movie_id int references movies (movie_id),
	domestic_takings numeric(6,2),
	international_takings numeric(6,2)
);

select * from movie_revenue;

-- creating movie actors table

create table movie_actors (
	movie_id int references movies (movie_id),
	actor_id int references actors (actor_id),
	primary key (movie_id,actor_id)
);

select * from movie_actors;




	