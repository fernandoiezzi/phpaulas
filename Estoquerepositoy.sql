drop table if exists categoria;
create table if not exists categoria(
id serial PRIMARY KEY,
nome varchar(50) UNIQUE NOT NULL,
CRIADO_EM TIMESTAMP(0) NOT NULL DEFAULT CURRENT_TIMESTAMP);

drop table if exists produto;
create table if not exists produto(
id serial PRIMARY KEY,
nome VARCHAR(255) UNIQUE NOT NULL,
descricao TEXT NOT NULL,
valor_compra NUMERIC(5,2),
valor_venda NUMERIC(5,2),
status INT NOT NULL,
categoria_id int not null,
CRIADO_EM TIMESTAMP(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
foreign key (categoria_id) references categoria(id)
);
drop table if exists estoque;
create table if not exists estoque(
id serial PRIMARY KEY,
data_cadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
qtd_min INT NOT NULL DEFAULT 0,
qtd_max INT NOT NULL DEFAULT 999,
qtd_anual INT NOT NULL,
produto_id int not null,
CRIADO_EM TIMESTAMP(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
foreign key (produto_id) references produto(id)
);

drop table if exists usuario cascade;
create table if not exists usuario(
    id serial primary key,
    nome varchar(150) not null,
    email varchar(150) not null,
    senha varchar(150) not null,
);





