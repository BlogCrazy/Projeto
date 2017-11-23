create table usuarios(
	id int not null auto_increment,
	nome_user varchar (200) not null,
	user_md5 varchar(200) not null,
	senha_user varchar (200) not null,
	senha_md5 varchar (200) not null	
)engine=innodb default charset=utf8 collate=utf8_general_mysql500_ci;

create table categorias(
	id int not null auto_increment,
	nome_categoria varchar(100)
)engine=innodb default charset=utf8 collate=utf8_general_mysql500_ci;

create table artigos(
	
)engine=innodb default charset=utf8 collate=utf8_general_mysql500_ci;