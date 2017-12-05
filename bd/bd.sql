create table usuarios(
	id int not null auto_increment PRIMARY KEY,
	nome_user varchar (200) not null,
	user_md5 varchar(200) not null,
	senha_user varchar (200) not null,
	senha_md5 varchar (200) not null	
)engine=innodb default charset=utf8 collate=utf8_general_mysql500_ci;

create table categorias(
	id int not null auto_increment PRIMARY KEY,
	nome_categoria varchar(100)
)engine=innodb default charset=utf8 collate=utf8_general_mysql500_ci;

CREATE TABLE artigos(
    id int not null PRIMARY KEY AUTO_INCREMENT,
    categoria int(2) not null,
    titulo varchar(100) not null,
    conteudo longtext not null,
    data_publicacao varchar (10) not null,
    autor int(2) not null,
    FOREIGN KEY (categoria) REFERENCES categorias(id),
    FOREIGN KEY (autor) REFERENCES usuarios(id)
);