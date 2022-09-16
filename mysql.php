<?php

//MYSQL


//*TABLES

//pag nagawa sa field ng table dapat naka small letters

//name-id, int, lenght-255, null index-primary check ai
//username, varchar, 100 characters
//password, varchar, 100

//*COMMAND PROMPT ACCESS

//CMD next type cd C:\xampp\mysql\bin enter
//mysql -u root -p enter
//password enter
//show databases; enter
//use socialmedia ito ung database ko
//show tables; enter
//SELECT * FROM tbl_account;


//*CRUD SQL

//*SELECT QUERY

SELECT * FROM 'authors' WHERE `id` > 10;
SELECT * FROM 'authors' WHERE `id` >= 10;
SELECT * FROM 'authors' WHERE `id` = 10; - //kukunin ung no 10 lang
SELECT * FROM 'authors' WHERE `id` >= 10 AND `birthdate` > '2000-01-01';

SELECT * FROM 'authors' WHERE `id` > 10 || `birthdate` > '2000-01-01';

SELECT COUNT(*) FROM `authors` WHERE `birthdate` > '2000-01-01'; - //bibilangin ilan may birthdate pataas

SELECT COUNT(*) AS `TOTAL OF 2000 Babies` FROM `authors` WHERE `birthdate` > '2000-01-01'; - //may TOTAL OF 2000 Babies nakalagay

SELECT `first_name`,`last_name` FROM `authors` WHERE `id` > 10; - kukunin first last name sa id 1-10

SELECT * FROM `authors` WHERE `first_name` LIKE 'j%'; - //kukunin lahat firstname na may j

SELECT * FROM `authors` WHERE `first_name` LIKE '%n'; -//lahat nagtatapos sa firstname na n

SELECT * FROM `authors` WHERE `email` LIKE '%w%'; - //lahat ng may w


//*DELETE QUERY

DELETE FROM `authors` WHERE `id` = 1; - //wala na si id 1

//INSERT QUERY

INSERT INTO `authors`(`first_name`,`last_name`,`email`,`birthdate`,`added`) VALUES ('Michael','Garlet','michaelgarlet@gmail.com','1989-11-09',NOW());

//UPDATE QUERY

UPDATE `authors` SET `first_name` = 'Johnny' WHERE `id` = 2;

?>