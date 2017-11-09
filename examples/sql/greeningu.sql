create database greeningu;

use greeningu;

-- DROPS
DROP TABLE IF EXISTS comentario;
DROP TABLE IF EXISTS voto;
DROP TABLE IF EXISTS post;
DROP TABLE IF EXISTS usuario_comunidade;
DROP TABLE IF EXISTS usuario;
DROP TABLE IF EXISTS comunidade;

-- CREATES
CREATE TABLE `comentario` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`data` datetime DEFAULT NULL,
	`texto` varchar(100) DEFAULT NULL,
	`post_id` int(11) DEFAULT NULL,
	`usuario_id` int(11) DEFAULT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `comunidade` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`data` datetime DEFAULT NULL,
	`name` varchar(45) DEFAULT NULL,
	`lider_id` int(11) DEFAULT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `post` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`data` datetime DEFAULT NULL,
	`descricao` varchar(100) DEFAULT NULL,
	`imagem` longtext,
	`titulo` varchar(20) DEFAULT NULL,
	`comunidade_id` int(11) DEFAULT NULL,
	`usuario_id` int(11) DEFAULT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `usuario` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`email` varchar(30) DEFAULT NULL,
	`login` varchar(10) DEFAULT NULL,
	`nome` varchar(20) DEFAULT NULL,
	`pontuacao` int(11) DEFAULT NULL,
	`senha` varchar(12) DEFAULT NULL,
	`sexo` varchar(1) DEFAULT NULL,
	`sobrenome` varchar(30) DEFAULT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `usuario_comunidade` (
	`usuarios_id` int(11) NOT NULL,
	`assinaturas_id` int(11) NOT NULL
);

CREATE TABLE `voto` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`data` datetime DEFAULT NULL,
	`pontos` int(11) DEFAULT NULL,
	`post_id` int(11) DEFAULT NULL,
	`usuario_id` int(11) DEFAULT NULL,
	PRIMARY KEY (`id`)
);

-- ALTERS
ALTER TABLE `comentario` ADD CONSTRAINT `FK5tm5pw9ofhc1dxw2xulc348jg` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`);
ALTER TABLE `comentario` ADD CONSTRAINT `FKixspmid2pb85o8ypsd20jakxg` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);
ALTER TABLE `comunidade` ADD CONSTRAINT `FKsyi2y58soh5hibwfql4khbwm3` FOREIGN KEY (`lider_id`) REFERENCES `usuario` (`id`);
ALTER TABLE `post` ADD CONSTRAINT `FK27q2ean2bp3015mcu7a5ukacn` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);
ALTER TABLE `post` ADD CONSTRAINT `FK2bwtlk26cusreo8lfxskohk14` FOREIGN KEY (`comunidade_id`) REFERENCES `comunidade` (`id`);
ALTER TABLE `usuario_comunidade` ADD CONSTRAINT `FKisvgm67i3vh3iqj5i8pt5mito` FOREIGN KEY (`usuarios_id`) REFERENCES `usuario` (`id`);
ALTER TABLE `usuario_comunidade` ADD CONSTRAINT `FKp2we5sgvbife63a623618n7kt` FOREIGN KEY (`assinaturas_id`) REFERENCES `comunidade` (`id`);
ALTER TABLE `voto` ADD CONSTRAINT `FKi9ulyrisn6f8ccd2lwpsbk382` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);
ALTER TABLE `voto` ADD CONSTRAINT `FKn80k52xdd4ryuilahtgcco5co` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`);

-- INSERTS
INSERT INTO `usuario`
VALUES
	(1, NULL, NULL, 'Frodo', 8, NULL, NULL, 'Baggins'),
	(2, NULL, NULL, 'Frodo 2', 10, NULL, NULL, 'Baggins 2');

INSERT INTO `comunidade`
VALUES
	(1, '2017-10-25 00:00:00', 'Comunidade #1', 1),
	(2, '2017-10-25 00:00:00', 'Comunidade #2', 2);

INSERT INTO `post`
VALUES
	(1, '2017-10-25 00:00:00', 'Lorem ipsum', NULL, 'Post #1', 1, 1),
	(2, '2017-10-25 00:00:00', 'Lorem ipsum', NULL, 'Post #2', 1, 1),
	(3, '2017-10-25 00:00:00', 'Lorem ipsum', NULL, 'Post #3', 1, 2);
