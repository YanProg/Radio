create database if not exists Radio;
use Radio;
create table if not exists users(
	user_id int auto_increment,
	user_name varchar(20) not null,
	user_email varchar(30) not null,
	primary key(user_id)
);
create table if not exists songs(
	song_id int auto_increment,
	song_name varchar(20) not null,
	song_namepath varchar(30) not null,
	song_duration time not null,
	primary key(song_id)
);