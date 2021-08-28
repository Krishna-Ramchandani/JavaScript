-- Database: projects_users_db

-- DROP DATABASE projects_users_db;

CREATE DATABASE projects_users_db
    WITH 
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'English_India.1252'
    LC_CTYPE = 'English_India.1252'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;

-- creating tables 
create table projects (
	project_id serial primary key,
	project_title varchar(50) unique not null,
	project_description varchar(80)
);
select * from projects;

create table modules(
	module_id serial primary key,
	module_title varchar(50) unique not null,
	module_description varchar(80),
	project_id int references projects(project_id)
);
select * from modules;

create table apis(
	api_id serial primary key,
	api_url varchar(30) unique,
	api_title varchar(30) unique not null,
	api_method varchar(20) not null,
	api_request boolean not null,
	api_response boolean not null,
	module_id int references modules(module_id)
);
alter table apis alter column api_url type varchar(60);
select * from apis;

create table users(
	user_id serial primary key,
	user_first_name varchar(30) not null,
	user_last_name varchar(30),
	user_gender varchar(1)
);
select * from users;
alter table users add column user_email varchar(30) unique not null;

create table user_address(
	user_address_line1 varchar(30) not null,
	user_address2_line2 varchar(30) not null,
	user_city varchar(20),
	user_state varchar(30) not null,
	user_pincode int not null,
	user_country varchar(20),
	user_id int references users(user_id)
);
select * from user_address;

create table project_users (
	project_id int references projects (project_id),
	user_id int references users (user_id),
	primary key (project_id,user_id )
);
select * from project_users;

--inserting data into projects table 
select* from projects; 
insert into projects (project_title,project_description)
values ('Electricity Saving','Save Daily Electricity'),
('Image Processing','Identify Image'),
('Data Analysis','Identify Data Pattern'),
('Security','Provide System Security'),
('Data Storage','Store Data on Cloud'),
('Library Project','Library Management System'),
('Online Exam','Online Exam System'),
('Pollution Project','Pollution Management System');
--insert in modules table
select * from modules;
insert into modules (module_title,module_description,project_id)
values ('Create Electric Board','Create Electric Board Layout',1),
('Upload Images','Upload Images and Store',2),
('Upload Data','Upload Data on Remote',3),
('Hash Function','Add list of Hash Functions',4),
('Path','Create Data Path',5),
('Book List','Add Books Available',6),
('Login and Signup','Provide Login and Signup options',7),
('Locations','Add Location having pollutions',8),
('Switch','Add switch in board',1),
('Process','Process Images and find required data',2),
('Pattern Recognition','Identify data pattern',3),
('Store','Store security hash function',4),
('Accessories','Load Accessories and upload',5),
('Receiver','Provide Book to receiver',6),
('Test','Create test from Admin panel',7),
('Direction','Provide Shortest route to manage pollution',8);
-- insert in apis table
select * from apis;
insert into apis (api_url,api_title,api_method,api_request,api_response,module_id)
values ('weather.google.com','Weather api','Post','1','1',8),
('supply.test.com','Supply Electricity api','get','0','0',1),
('store.data.com','Store api','post','1','1',2),
('uploadapi.da.com','Upload api','patch','1','1',3),
('hashapi.security.com','hash api','post','1','1',4),
('pathapi.ds.com','path api','update','1','1',5),
('listapi.google.com','list api','patch','1','1',6),
('account.google.com','account api','post','1','1',7),
('forecast.google.com','forecast api','post','1','1',8),
('bottons.elec.in','button api','get','1','1',1),
('recognise.pattern.com','recognition api','patch','1','1',3),
('save.google.com','save api','post','1','1',4),
('accessories.google.com','accessories api','post','1','1',5),
('receiver.radio.com','receiver api','get','1','1',6),
('test.online.com','test api','post','1','1',7),
('download.google.com','download api','patch','1','1',4),
('authenticate.yahoo.com','authentication api','post','1','1',7),
('results.test.com','results api','get','1','1',7),
('quantity.poll.com','quantity api','post','1','1',8),
('pattern.data.com','pattern api','get','1','1',3),
('maps.google.com','map api','post','1','1',8);

select * from apis;

--inserting data into users table;
select * from users;
insert into users (user_first_name,user_last_name,user_gender,user_email)
values ('Bhushan','Kumar','M','bhushan@gmail.com'),
('Ajay','Rathod','M','ajay@gmail.com'),
('Krishna','Murthy','M','krishna@gmail.com'),
('Yash','Vijay','M','yash@gmail.com'),
('Dilip','Kumar','M','dilip@gmail.com'),
('Mukesh','Arvind','M','mukesh@gmail.com'),
('Nitin','Bankar','M','nitin@gmail.com'),
('Isha','Matthew','F','isha@gmail.com'),
('Jitendra','Bharat','M','jitendra@gmail.com'),
('Prisha','Kumari','F','prisha@gmail.com'),
('Vijay','Devanand','M','vijay@gmail.com'),
('Rajni','Banerjee','F','rajni@gmail.com'),
('Khushi','Singh','F','khushi@gmail.com'),
('Akansha','Bhagwat','F','akansha@gmail.com'),
('Veer','Thakur','M','veer@gmail.com');

-- inserting data into user_address table;
select * from user_address;
insert into user_address (user_address_line1,user_address2_line2,user_city,user_state,
user_pincode,user_country,user_id) values
('MG Road','Opposite Ashish Theature','Mumbai','Maharashtra','45478','India',5),
('Cerritos Street','Green ave','Mumbai','Maharashtra','400123','India',6),
('Center street','Near Hamilton church','Pune','Maharashtra','785462','India',4),
('Jackson bounty','Ara Mall area','Nashik','Maharashtra','452360','India',3),
('Connecti street','near briz steels','Pune','Maharashtra','924587','India',7),
('Century comms','State road 434','Mumbai','Maharashtra','458213','India',2),
('Green leaf ave','passport street','Nashik','Maharashtra','656984','India',1),
('Garden estate','near kj school','Pune','Maharashtra','787898','India',8),
('Marena bay','sea road','Chennai','Tamil Nadu','525320','India',9),
('Lewis rd','shahid circle','Nashik','Maharashtra','412658','India',10),
('Vidya street','M store factory','Nashik','Maharashtra','565654','India',11),
('Fountain street','church road','Pune','Maharashtra','985412','India',12),
('W college rd','service circle','Nashik','Maharashtra','856412','India',13),
('Lake rd','near law office','Nashik','Maharashtra','220364','India',14),
('Central highway','spring road','Mumbai','Maharashtra','400078','India',15);

-- inserting data into project_users
select * from project_users;
insert into project_users (project_id,user_id) values
('2','1'),
('3','4'),
('4','7'),
('5','8'),
('6','9'),
('7','10'),
('8','11'),
('3','12'),
('5','13'),
('6','14'),
('7','15');

--6 Query to get list of project.
select * from projects;
--Query to get list of module
select * from modules;
--Query to get list API
select * from apis;
---Query to get list for user
select * from users;
--Qery to get list address
select * from user_address;

-- Query to get list of project and its module and API
select pr.project_title,pr.project_description,
mo.module_title,mo.module_description,ap.api_title
from projects pr inner join modules mo
on pr.project_id=mo.project_id inner join apis ap 
on mo.module_id=ap.module_id;

select pr.project_title,pr.project_description,
mo.module_title,mo.module_description,ap.api_title
from projects pr left join modules mo
on pr.project_id=mo.project_id left join apis ap 
on mo.module_id=ap.module_id
where api_title is not null;

select pr.project_title,pr.project_description,
mo.module_title,mo.module_description,ap.api_title
from projects pr right join modules mo
on pr.project_id=mo.project_id right join apis ap 
on mo.module_id=ap.module_id;

--Query to get list of API with project name
select * from projects,apis,modules;
select ap.api_title,pr.project_title 
from projects pr inner join modules mo
on pr.project_id=mo.project_id inner join
apis ap on mo.module_id=ap.module_id;

select ap.api_title,pr.project_title 
from projects pr left join modules mo
on pr.project_id=mo.project_id left join
apis ap on mo.module_id=ap.module_id
where api_title is not null;

select ap.api_title,pr.project_title 
from projects pr right join modules mo
on pr.project_id=mo.project_id right join
apis ap on mo.module_id=ap.module_id;

--Query to get total number of APIs module wise
select * from modules;
select mo.module_title,count(ap.api_id) from 
modules mo left join apis ap on mo.module_id=ap.module_id
group by mo.module_title;

--Query to get total number of APIs project wise
select * from projects;
select pr.project_title,count(ap.api_id) from 
projects pr left join modules mo on pr.project_id=mo.project_id
left join apis ap on mo.module_id=ap.module_id
group by pr.project_title;

--Query to get list of user  with user Address
select * from user_address; 
select us.user_first_name,us.user_last_name,ud.user_address_line1,ud.user_address2_line2,
ud.user_city from users us inner join user_address ud on us.user_id=ud.user_id;

select us.user_first_name,us.user_last_name,ud.user_address_line1,ud.user_address2_line2,
ud.user_city from users us left join user_address ud on us.user_id=ud.user_id;

select us.user_first_name,us.user_last_name,ud.user_address_line1,ud.user_address2_line2,
ud.user_city from users us right join user_address ud on us.user_id=ud.user_id;

--Query to get list of project assigned to particular user

select pr.project_title,us.user_first_name,us.user_last_name
from projects pr join project_users pu on pr.project_id=pu.project_id 
join users us on us.user_id=pu.user_id 
group by pr.project_title,us.user_first_name,us.user_last_name
order by pr.project_title;


-- Query to search project with project title using LIKE
select * from projects;
select project_title from projects where project_title like 'D%';

--Query to get user list who have same country/city
select * from user_address;
select u1.user_first_name,u1.user_last_name,ud.user_city from users u1 inner join
user_address ud on u1.user_id=ud.user_id
group by u1.user_first_name,u1.user_last_name,ud.user_city
order by ud.user_city ;

--Query to get user list by zipcode
select u.user_first_name,u.user_last_name,ud.user_pincode from users u
inner join user_address ud on u.user_id=ud.user_id;

--Query to get list of API whose method is POST
select * from apis where api_method in ('post','Post','POST');

--Query to get list of API whose method is PUT
select * from apis where api_method in ('put','Put','PUT');

--Query to get list of API whose method is DELETE
select * from apis where api_method in ('delete','Delete','DELETE');

--Query to get list of API whose method is GET
select * from apis where api_method in ('get','Get','GET');

--Query to get list of API for specific module
select ap.api_title,mo.module_title from apis ap
inner join modules mo on ap.module_id=mo.module_id
group by ap.api_title,mo.module_title
order by module_title;

--Query to get  list of module for specific project
select mo.module_title,pr.project_title from modules mo
inner join projects pr on mo.project_id=pr.project_id
group by mo.module_title,pr.project_title 
order by project_title;
