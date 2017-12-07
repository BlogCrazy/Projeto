CREATE TABLE `categorias` (
 `id_categoria` int(2) NOT NULL AUTO_INCREMENT,
 `titulo_categoria` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

CREATE TABLE `usuarios` (
 `id_usuario` int(2) NOT NULL AUTO_INCREMENT,
 `nome_usuario` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 `senha_usuario` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 `nome_usuario_md5` varchar(150) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 `senha_usuario_md5` varchar(150) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 `idade_usuario` varchar(10) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

CREATE TABLE `artigos` (
 `id_artigo` int(2) NOT NULL AUTO_INCREMENT,
 `titulo_artigo` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 `categoria_artigo` int(2) DEFAULT NULL,
 `autor_categoria` int(2) DEFAULT NULL,
 `data_post` varchar(50) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
 PRIMARY KEY (`id_artigo`),
 KEY `categoria_artigo` (`categoria_artigo`),
 KEY `autor_categoria` (`autor_categoria`),
 CONSTRAINT `artigos_ibfk_1` FOREIGN KEY (`categoria_artigo`) REFERENCES `categorias` (`id_categoria`),
 CONSTRAINT `artigos_ibfk_2` FOREIGN KEY (`autor_categoria`) REFERENCES `usuarios` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

INSERT INTO `categorias` (`id_categoria`, `titulo_categoria`) VALUES (NULL, 'Informatica');
INSERT INTO `categorias` (`id_categoria`, `titulo_categoria`) VALUES (NULL, 'HTML');
INSERT INTO `categorias` (`id_categoria`, `titulo_categoria`) VALUES (NULL, 'Ajax');
INSERT INTO `categorias` (`id_categoria`, `titulo_categoria`) VALUES (NULL, 'CSS');
INSERT INTO `categorias` (`id_categoria`, `titulo_categoria`) VALUES (NULL, 'JAvascript');
INSERT INTO `categorias` (`id_categoria`, `titulo_categoria`) VALUES (NULL, 'Bootstrap');