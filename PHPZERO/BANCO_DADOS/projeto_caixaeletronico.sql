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


-- Copiando estrutura do banco de dados para projeto_caixaeletronico
CREATE DATABASE IF NOT EXISTS `projeto_caixaeletronico` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projeto_caixaeletronico`;

-- Copiando estrutura para tabela projeto_caixaeletronico.contas
CREATE TABLE IF NOT EXISTS `contas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titular` varchar(100) NOT NULL DEFAULT '0',
  `agencia` int(11) NOT NULL DEFAULT '0',
  `conta` int(11) NOT NULL DEFAULT '0',
  `senha` varchar(32) NOT NULL DEFAULT '0',
  `saldo` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_caixaeletronico.contas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `contas` DISABLE KEYS */;
/*!40000 ALTER TABLE `contas` ENABLE KEYS */;

-- Copiando estrutura para tabela projeto_caixaeletronico.historico
CREATE TABLE IF NOT EXISTS `historico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_conta` int(11) NOT NULL DEFAULT '0',
  `tipo` tinyint(1) NOT NULL DEFAULT '0',
  `valor` float NOT NULL DEFAULT '0',
  `data_operacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK1_conta` (`id_conta`),
  CONSTRAINT `FK1_conta` FOREIGN KEY (`id_conta`) REFERENCES `contas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_caixaeletronico.historico: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `historico` DISABLE KEYS */;
/*!40000 ALTER TABLE `historico` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
