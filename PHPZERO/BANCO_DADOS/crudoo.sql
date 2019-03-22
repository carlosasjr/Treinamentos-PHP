-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.14 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para crudoo
CREATE DATABASE IF NOT EXISTS `carlo019_crudoo` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `carlo019_crudoo`;

-- Copiando estrutura para tabela crudoo.contatos
CREATE TABLE IF NOT EXISTS `contatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela crudoo.contatos: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `contatos` DISABLE KEYS */;
INSERT INTO `contatos` (`id`, `nome`, `email`) VALUES
	(1, 'Carlos AntÃ´nio dos Santos JÃºnior', 'carlosasjr@theplace.com.br'),
	(2, 'Maria Eugenia dos Santos', 'maria@theplace.com.br'),
	(3, 'Samuel', 'samuel@theplace.com.br'),
	(7, 'Isabela Gianna dos Santos', 'isabela@hotmail.com'),
	(8, 'Gabriel Henrique dos Santos', 'gabriel@hotmail.com'),
	(10, 'Jaque Morais', 'jaque@theplace.com.br'),
	(11, 'Lilian ', 'lilian@hotmail.com'),
	(12, 'Rosaria', 'rose@rose.com.br');
/*!40000 ALTER TABLE `contatos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
