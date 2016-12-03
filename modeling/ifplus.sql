
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2016 at 10:47 AM
-- Server version: 10.0.20-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u244818129_ifplu`
--

-- --------------------------------------------------------

--
-- Table structure for table `Aluno`
--

DROP TABLE IF EXISTS `Aluno`;
CREATE TABLE IF NOT EXISTS `Aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_turma` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id_turma`,`id_usuario`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_Aluno_Turma_idx` (`id_turma`),
  KEY `fk_Aluno_Usuario1_idx` (`id_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Aluno`
--

INSERT INTO `Aluno` (`id`, `id_turma`, `id_usuario`) VALUES
(3, 16, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Arquivo`
--

DROP TABLE IF EXISTS `Arquivo`;
CREATE TABLE IF NOT EXISTS `Arquivo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_professor` int(11) NOT NULL,
  `id_turma` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `local` varchar(255) NOT NULL,
  PRIMARY KEY (`id`,`id_professor`,`id_turma`),
  KEY `fk_Arquivo_Professor1_idx` (`id_professor`),
  KEY `fk_Arquivo_Turma1_idx` (`id_turma`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Arquivo`
--

INSERT INTO `Arquivo` (`id`, `id_professor`, `id_turma`, `nome`, `descricao`, `local`) VALUES
(1, 1, 16, 'Grupos Organizacionais', 'PDF para a aula de amanha', '/arquivos/GO.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `Aula`
--

DROP TABLE IF EXISTS `Aula`;
CREATE TABLE IF NOT EXISTS `Aula` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) NOT NULL,
  `numero` varchar(45) NOT NULL,
  `conteudo` varchar(45) NOT NULL,
  `id_Disciplina` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_id_Disciplina` (`id_Disciplina`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Compartilhamento`
--

DROP TABLE IF EXISTS `Compartilhamento`;
CREATE TABLE IF NOT EXISTS `Compartilhamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_turma` int(11) NOT NULL,
  `id_lembrete` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_usuario` (`id_usuario`),
  UNIQUE KEY `id_turma` (`id_turma`),
  UNIQUE KEY `id_lembrete` (`id_lembrete`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Compartilhamento`
--

INSERT INTO `Compartilhamento` (`id`, `id_usuario`, `id_turma`, `id_lembrete`) VALUES
(1, 1, 16, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Disciplina`
--

DROP TABLE IF EXISTS `Disciplina`;
CREATE TABLE IF NOT EXISTS `Disciplina` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `ano` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Disciplina`
--

INSERT INTO `Disciplina` (`id`, `nome`, `ano`) VALUES
(126, 'Redes', 3);

-- --------------------------------------------------------

--
-- Table structure for table `Grade`
--

DROP TABLE IF EXISTS `Grade`;
CREATE TABLE IF NOT EXISTS `Grade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ano` int(11) NOT NULL,
  `curso` varchar(255) NOT NULL,
  `id_Disciplina` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id_Disciplina`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_Grade_Disciplina1_idx` (`id_Disciplina`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Grade`
--

INSERT INTO `Grade` (`id`, `ano`, `curso`, `id_Disciplina`) VALUES
(1, 3, 'InformÃ¡tica', 126),
(2, 2, 'InformÃ¡tica', 126);

-- --------------------------------------------------------

--
-- Table structure for table `Lembrete`
--

DROP TABLE IF EXISTS `Lembrete`;
CREATE TABLE IF NOT EXISTS `Lembrete` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `concluida` tinyint(1) NOT NULL DEFAULT '0',
  `usuario_id_remetente` int(11) NOT NULL,
  PRIMARY KEY (`id`,`usuario_id_remetente`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_Lembrete_Usuario2_idx` (`usuario_id_remetente`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Lembrete`
--

INSERT INTO `Lembrete` (`id`, `titulo`, `descricao`, `data`, `hora`, `concluida`, `usuario_id_remetente`) VALUES
(2, 'sdgf', 'sgsg', '2016-10-13', '05:00:00', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Mensagem`
--

DROP TABLE IF EXISTS `Mensagem`;
CREATE TABLE IF NOT EXISTS `Mensagem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id_destinatario` int(11) NOT NULL,
  `usuario_id_remetente` int(11) NOT NULL,
  `mensagem` mediumtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`usuario_id_destinatario`,`usuario_id_remetente`),
  KEY `fk_Usuario_has_Usuario_Usuario2_idx` (`usuario_id_remetente`),
  KEY `fk_Usuario_has_Usuario_Usuario1_idx` (`usuario_id_destinatario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Mensagem`
--

INSERT INTO `Mensagem` (`id`, `usuario_id_destinatario`, `usuario_id_remetente`, `mensagem`, `status`) VALUES
(3, 2, 1, 'OlÃ¡!', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Ministra`
--

DROP TABLE IF EXISTS `Ministra`;
CREATE TABLE IF NOT EXISTS `Ministra` (
  `id_disciplina` int(11) NOT NULL,
  `id_professor` int(11) NOT NULL,
  PRIMARY KEY (`id_disciplina`,`id_professor`),
  KEY `fk_Disciplina_has_Professor_Professor1_idx` (`id_professor`),
  KEY `fk_Disciplina_has_Professor_Disciplina1_idx` (`id_disciplina`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Ministra`
--

INSERT INTO `Ministra` (`id_disciplina`, `id_professor`) VALUES
(126, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Professor`
--

DROP TABLE IF EXISTS `Professor`;
CREATE TABLE IF NOT EXISTS `Professor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id_usuario`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_Professor_Usuario1_idx` (`id_usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Professor`
--

INSERT INTO `Professor` (`id`, `id_usuario`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `Turma`
--

DROP TABLE IF EXISTS `Turma`;
CREATE TABLE IF NOT EXISTS `Turma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `anofinal` int(11) NOT NULL,
  `anoatual` int(11) NOT NULL,
  `curso` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `Turma`
--

INSERT INTO `Turma` (`id`, `anofinal`, `anoatual`, `curso`) VALUES
(16, 2016, 3, 'InformÃ¡tica');

-- --------------------------------------------------------

--
-- Table structure for table `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
CREATE TABLE IF NOT EXISTS `Usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `sessao` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Usuario`
--

INSERT INTO `Usuario` (`id`, `nome`, `cpf`, `email`, `senha`, `foto`, `sessao`) VALUES
(2, 'Aluno', '12345678012', 'aluno@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', '/fotos/mtheus.png', 0),
(3, 'Professor', '12345678912', 'professor@iftm.edu.br', '950f0129ab240dd16c1d31e377b8f3a7', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
