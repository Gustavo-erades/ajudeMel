create database acessosMel;
use acessosMel;
create table acessos(
	id int not null auto_increment,
	ip longtext not null, 
  navegador longtext not null,
  dia varchar(10) not null,
  hora varchar(10) not null,
  cidade longtext not null,
  regiao longtext not null,
  pais longtext not null,
  org longtext not null,
  loc longtext not null,
  primary key (id)
);
