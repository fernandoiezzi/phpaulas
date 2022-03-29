create database if not exists dadosphp;
use dadosphp;
create table bancodedados(

id int primary key auto_increment,
icone varchar(255) not null,
titulo varchar(255) not null,
descricao text not null);

create table bemvindo(
id int primary key auto_increment,
titulo varchar(255) not null,
descricao varchar(255) not null,
botao varchar(255) not null);

insert into bancodedados (icone,titulo,descricao) values
('bi-collection','Fresh new layout','trabalhando com php'),
('bi-cloud-download','Free to download','O PHP ajuda na otmização da página'),
('bi-card-heading','Jumbotron hero header','Quanto mais pratica, mais aperfeiçoado fica!'),
('bi-bootstrap','Featuredescricao boxes','A página começa a ficar cada vez melhor!'),
('bi-code','Simple clean code','Só não parar de praticar que as habilidades se aperfeiçoam!'),
('bi-patch-check','A name you trust','Programando e estudando para elevar o nível de conhecimento');

insert into bemvindo (titulo, descricao, botao) values
('Boas vindas','Utilizando o banco de dados em PHP!','Chamando uma ação');

