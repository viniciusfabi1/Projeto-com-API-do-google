-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 31-Mar-2020 às 21:46
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `denuncia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `registroassalto`
--

DROP TABLE IF EXISTS `registroassalto`;
CREATE TABLE IF NOT EXISTS `registroassalto` (
  `denuncia` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `dat` date DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `bairro` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `cep` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `rua` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `priority` varchar(15) COLLATE utf8_swedish_ci DEFAULT NULL,
  `mensagem` varchar(999) COLLATE utf8_swedish_ci DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `registroassaltoarmado`
--

DROP TABLE IF EXISTS `registroassaltoarmado`;
CREATE TABLE IF NOT EXISTS `registroassaltoarmado` (
  `denuncia` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `dat` date DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `bairro` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `cep` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `rua` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `priority` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `mensagem` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `registrofurto`
--

DROP TABLE IF EXISTS `registrofurto`;
CREATE TABLE IF NOT EXISTS `registrofurto` (
  `denuncia` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `nome` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `dat` date DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `bairro` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `cep` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `rua` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `priority` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `mensagem` varchar(999) CHARACTER SET utf8 DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `registroroubocarro`
--

DROP TABLE IF EXISTS `registroroubocarro`;
CREATE TABLE IF NOT EXISTS `registroroubocarro` (
  `denuncia` varchar(20) COLLATE utf8_swedish_ci DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `dat` date DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `bairro` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `cep` varchar(15) COLLATE utf8_swedish_ci DEFAULT NULL,
  `rua` varchar(99) COLLATE utf8_swedish_ci DEFAULT NULL,
  `priority` varchar(25) COLLATE utf8_swedish_ci DEFAULT NULL,
  `mensagem` varchar(999) COLLATE utf8_swedish_ci DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `registrorouboestabelecimento`
--

DROP TABLE IF EXISTS `registrorouboestabelecimento`;
CREATE TABLE IF NOT EXISTS `registrorouboestabelecimento` (
  `denuncia` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `dat` date DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `bairro` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `cep` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `rua` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `priority` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `mensagem` varchar(999) COLLATE utf8_swedish_ci DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `registrotraficointenso`
--

DROP TABLE IF EXISTS `registrotraficointenso`;
CREATE TABLE IF NOT EXISTS `registrotraficointenso` (
  `denuncia` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `dat` date DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `bairro` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `cep` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `rua` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `priority` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `mensagem` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
