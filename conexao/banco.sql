create table cliente (
    id int not null primary key auto_increment,
    nomeFantasia varchar(100) not null,
)ENGINE=InnoDB;


create table projeto(
    id int not null primary key auto_increment, 
    idCliente int not null,
    nomeProjeto varchar(40) not null,
foreign key(idCliente) references cliente(id)
)ENGINE=InnoDB;

CREATE TABLE sqlparatodos (a INT, b CHAR (20)) ENGINE=InnoDB;