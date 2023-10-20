-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 20-Out-2023 às 01:16
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `padariacamargo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbproduto`
--

DROP TABLE IF EXISTS `tbproduto`;
CREATE TABLE IF NOT EXISTS `tbproduto` (
  `idProduto` int(11) NOT NULL AUTO_INCREMENT,
  `produto` varchar(100) DEFAULT NULL,
  `descrProduto` varchar(1000) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `dtCadastro` date DEFAULT NULL,
  `foto` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`idProduto`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbproduto`
--

INSERT INTO `tbproduto` (`idProduto`, `produto`, `descrProduto`, `valor`, `dtCadastro`, `foto`) VALUES
(5, 'HotDog', 'pão com salsicha', '5.00', '2023-10-19', '1d17e9450485ca7bc728f23e0d1cb539.jpeg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbvenda`
--

DROP TABLE IF EXISTS `tbvenda`;
CREATE TABLE IF NOT EXISTS `tbvenda` (
  `idVenda` int(11) NOT NULL AUTO_INCREMENT,
  `idProduto` int(11) DEFAULT NULL,
  `qtdProduto` int(11) DEFAULT NULL,
  PRIMARY KEY (`idVenda`),
  KEY `idProduto` (`idProduto`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbvenda`
--

INSERT INTO `tbvenda` (`idVenda`, `idProduto`, `qtdProduto`) VALUES
(1, 1, 5),
(2, 1, 2),
(3, 2, 8),
(4, 1, 7),
(5, 3, 4),
(6, 3, 9),
(7, 1, 2),
(8, 2, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
