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
	
	/* 
Insert data into directors table
*/

INSERT INTO DIRECTORS (first_name, last_name, date_of_birth, nationality) VALUES ('Tomas','Alfredson','1965-04-01','Swedish'),
('Paul','Anderson','1970-06-26','American'),
('Wes','Anderson','1969-05-01','American'),
('Richard','Ayoade','1977-06-12','British'),
('Luc','Besson','1959-03-18','French'),
('James','Cameron','1954-08-16','American'),
('Guillermo','del Toro','1964-10-09','Mexican'),
('Victor','Fleming','1889-02-23','American'),
('Francis','Ford Coppola','1939-04-07','American'),
('Kinji','Fukasaku','1930-07-03','Japanese'),
('Florian ','Henckel von Donnersmarck','1973-05-02','German'),
('Terry','Jones','1942-02-01','British'),
('Stanley','Kubrick','1928-07-26','American'),
('John','Lasseter','1957-01-12','American'),
('Ang','Lee','1954-10-23','Chinese'),
('Bruce','Lee','1940-11-27','Chinese'),
('George','Lucas','1944-05-14','American'),
('Martin','McDonagh','1970-03-26','British'),
('James','McTeigue','1967-12-29','Australian'),
('Fernando','Meirelles','1955-11-09','Brazilian'),
('Hayao ','Miyazaki','1941-01-05','Japanese'),
('Paulo','Morelli','1966-03-10','Brazilian'),
('Chan-wook','Park','1963-08-23','South Korean'),
('Sam','Raimi','1959-10-23','American'),
('Mark','Romanek','1959-09-18','American'),
('Martin','Scorsese','1942-11-17','American'),
('Ridley','Scott','1937-11-30','British'),
('Tony','Scott','1944-06-21','British'),
('Zack','Snyder','1966-03-01','American'),
('Sion','Sono','1961-12-18','Japanese'),
('Steven','Spielberg','1946-12-18','American'),
('Robert','Stevenson','1905-03-31','British'),
('Quentin','Tarantino','1963-03-27','American'),
('Robert','Wise','1914-09-10','American'),
('Kar Wai','Wong','1958-07-17','Chinese'),
('Robert','Zemeckis','1952-05-14','American'),
('Yimou','Zhang','1950-04-02','Chinese');

select * from directors;

INSERT INTO actors (first_name, last_name, gender, date_of_birth) VALUES ('Malin','Akerman','F','1978-05-12'),
('Tim','Allen','M','1953-06-13'),
('Julie','Andrews','F','1935-10-01'),
('Ivana','Baquero','F','1994-06-11'),
('Lorraine','Bracco','F','1954-10-02'),
('Alice','Braga','F','1983-04-15'),
('Marlon','Brando','M','1924-04-03'),
('Adrien','Brody','M','1973-04-14'),
('Peter','Carlberg','M','1950-12-08'),
('Gemma','Chan','F','1982-11-29'),
('Chen','Chang','M','1976-10-14'),
('Graham','Chapman','M','1941-01-08'),
('Pei-pei','Cheng','F','1946-12-04');

select * from actors;

INSERT INTO movies (movie_name, movie_length, movie_lang, release_date, age_certificate, director_id) VALUES ('A Clockwork Orange','112','English','1972-02-02','18','13'),
('Apocalypse Now','168','English','1979-08-15','15','9'),
('Battle Royale ','111','Japanese','2001-01-04','18','10'),
('Blade Runner ','121','English','1982-06-25','15','27'),
('Chungking Express','113','Chinese','1996-08-03','15','35'),
('City of God','145','Portuguese','2003-01-17','18','20'),
('City of Men','140','Portuguese','2008-02-29','15','22'),
('Cold Fish','108','Japanese','2010-09-12','18','30'),
('Crouching Tiger Hidden Dragon','139','Chinese','2000-07-06','12','15'),
('Eyes Wide Shut','130','English','1999-07-16','18','13'),
('Forrest Gump','119','English','1994-07-06','PG','36'),
('Gladiator','165','English','2000-05-05','15','27'),
('Gone with the Wind','123','English','1939-12-15','PG','8'),
('Goodfellas','148','English','1990-09-19','15','26'),
('Grand Budapest Hotel','117','English','2014-07-03','PG','3'),
('House of Flying Daggers','134','Chinese','2004-03-12','12','37'),
('In the Mood for Love','124','Chinese','2001-02-02','12','35'),
('Jaws','134','English','1975-06-20','12','31'),
('Leon','123','English','1994-11-18','15','5'),
('Let the Right One In','128','Swedish','2008-10-24','15','1'),
('Life of Brian','126','English','1979-08-17','15','12'),
('Life of Pi','129','English','2012-11-21','PG','15'),
('Mary Poppins','87','English','1964-08-29','U','32'),
('Never Let Me Go','117','English','2010-09-15','15','25'),
('Oldboy','130','Korean','2005-03-25','18','23'),
('Pans Labyrinth','98','Spanish','2006-12-29','PG','7'),
('Ponyo','107','Japanese','2009-08-14','U','21'),
('Pulp Fiction','136','English','1994-10-14','15','33'),
('Raging Bull','132','English','1980-11-14','18','26'),
('Rushmore','104','English','1998-11-12','12','3'),
('Spider-Man','118','English','2002-05-03','PG','24'),
('Spider-Man 2','115','English','2004-06-30','PG','24'),
('Spider-Man 3','112','English','2007-05-04','PG','24'),
('Spirited Away','120','Japanese','2001-06-19','U','21'),
('Star Wars: A New Hope','123','English','1977-05-25','PG','17'),
('Star Wars: Empire Strikes Back','150','English','1980-05-21','PG','17'),
('Star Wars: Return of the Jedi','139','English','1983-05-25','PG','17'),
('Submarine','115','English','2011-06-03','15','4'),
('Taxi Driver','117','English','1976-02-7','15','26'),
('The Darjeeling Limited','119','English','2007-09-29','PG','3'),
('The Fifth Element','149','English','1997-05-09','12','5'),
('The Lives of Others','165','German','2007-02-09','15','11'),
('The Shining','126','English','1980-05-23','18','13'),
('The Sound of Music','91','English','1965-03-02','U','34'),
('The Wizard of Oz','120','English','1939-08-25','U','8'),
('There Will Be Blood','168','English','2007-12-26','15','2');

select * from movies;

INSERT INTO movie_revenue (revenue_id, movie_id, domestic_takings, international_takings) VALUES ('1','45','22.2','1.3'),
('2','13','199.4','201.2'),
('3','23','102.1',null),
('4','44','158.7',null),
('6','1','27.1',null),
('17','18','260.3','210.9'),
('9','39','28.1',null),
('5','35','461.2','314.2'),
('13','2','83.4',null),
('15','21','19.6',null),
('8','36','290.3','247.8'),
('11','43','44.1',null),
('12','29','23.1',null),
('14','4','33.3',null),
('10','37','309.1','166.2'),
('18','14','46.6',null),
('21','11','330.3','348.1'),
('20','28','107.9','106.2'),
('19','19',null,null),
('22','5',null,null),
('25','30','16.9',null),
('26','10','55.7','106.3'),
('30','12','188.2','273.4'),
('28','9','128.1','85.1'),
('29','3',null,null),
('32','17','2.9','10.2'),
('31','34','11.1','265.4'),
('33','31','404.1','418.1'),
('37','6','8.2','23.5'),
('35','16','11.1','82.5'),
('36','32','374.1','410.4'),
('34','25','1.1','13.8'),
('40','26','37.8','46.4'),
('48','42','11.3','66.1'),
('39','33','337','554'),
('51','40','11.9','23.2'),
('41','46','39.9','35.8'),
('42','7','0.3','2.2'),
('49','20','2.1','9.1');

select * from movie_revenue;


INSERT INTO movie_actors (actor_id, movie_id) VALUES 
('3','23'),
('4','26'),
('6','6'),
('7','2'),
('8','40'),
('9','20'),
('10','38'),
('11','9'),
('12','21'),
('13','9');


select * from movie_actors;

