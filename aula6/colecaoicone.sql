create database if not exists colecaoicones;
use colecaoicones;
create table bancoicones(

id int primary key auto_increment,
icone varchar(255) not null,
titulo varchar(255) not null,
descricao text not null);

insert into bancoicones (icone,titulo,descricao) values
('bi-collection','Fresh new layout','trabalhando com php'),
('bi-cloud-download','Free to download','O PHP ajuda na otmização da página'),
('bi-card-heading','Jumbotron hero header','Quanto mais pratica, mais aperfeiçoado fica!'),
('bi-bootstrap','Featuredescricao boxes','A página começa a ficar cada vez melhor!'),
('bi-code','Simple clean code','Só não parar de praticar que as habilidades se aperfeiçoam!'),
('bi-patch-check','A name you trust','Programando e estudando para elevar o nível de conhecimento');