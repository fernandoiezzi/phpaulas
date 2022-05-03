create database login;
use login;

create table usuario(
id int primary key auto_increment,
usuario varchar(200) not null,
senha varchar(32) not null);

insert into usuario (usuario, senha) values ('fernandosenac', md5('senha123'));