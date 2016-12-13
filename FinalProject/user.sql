CREATE TABLE USER (
	id int primary key auto_increment,
	userName varchar(255),
	passWord varchar(255)
);

INSERT INTO USER (userName, passWord) VALUES ('test', 'pass');
UPDATE USER SET passWord = sha1(passWord) where id = 1;  

CREATE TABLE MESSAGE (
	name varchar(255),
	email varchar(255) primary key,
	message varchar(255)
);