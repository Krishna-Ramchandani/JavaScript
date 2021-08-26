-- Database: owners_pets

-- DROP DATABASE owners_pets;

CREATE DATABASE owners_pets
    WITH 
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'English_India.1252'
    LC_CTYPE = 'English_India.1252'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;
	
	
-- create owners table
create table owners(
	id serial primary key,
	first_name varchar(30),
	last_name varchar(30),
	city varchar(30),
	state char(2)
);

select * from owners;
-- create pets table with foreign key
create table pets(
	id serial primary key,
	species varchar(30),
	full_name varchar(30),
	age int,
	owner_id int references owners(id)
);

select * from pets;
-- add column to owners table
alter table owners
add column email varchar(50) unique;

select * from owners;
-- change the data type of last_name in owners table
alter table owners 
alter column last_name type varchar(50);

select * from owners;

--insert data into owners tabe
-- insert single data
insert into owners (id,first_name,last_name,city,state,email) 
values (1,'John','Snow','London','UK','john@gmail.com');

select * from owners;
-- insert multiple data
insert into owners (id,first_name,last_name,city,state,email) 
values (2,'Peter','Parker','England','UK','peter@gmail.com'),
(3,'David','Otunga','Florida','US','david@gmail.com'),
(4,'Dwayne','Johnson','Carolina','US','dwayne@gmail.com');

select * from owners;

-- update data
update owners set email='snow@gmail.com'
where id=1;

select * from owners;

-- updating multiple data
update owners set state='CA'
where state='US';

update owners set first_name='Emily',
email='emily@gmail.com' where id=3;

--order by clause 
select * from owners order by id asc; 

--delete data from table
delete from owners where id=4;

--inserting data in pets table
INSERT INTO pets (species, full_name, age, owner_id)
VALUES ('Dog','Rex',6,1),
('Rabbit','Fluffy',2,3),('Cat','Tom',8,2),('Mouse','Jerry',2,2),
('Dog','Biggles',4,2),('Tortoise','Squirtle',42,3);

--view data of two tables
SELECT * FROM pets,owners;

--update fluffy rabbit age to 3
update pets set age=3 where full_name ='Fluffy';

--left join
select * from owners left join pets on owners.id=pets.owner_id; 

--right join
select email from owners right join pets on owners.id=pets.owner_id; 



