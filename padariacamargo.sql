-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26-Out-2023 às 19:44
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
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbproduto`
--

INSERT INTO `tbproduto` (`idProduto`, `produto`, `descrProduto`, `valor`, `dtCadastro`, `foto`) VALUES
(1, 'Pão de Forma', 'Pão de forma tradicional', '2.99', '2023-09-10', ''),
(2, 'Bolo de Chocolate', 'Bolo de chocolate com cobertura', '7.99', '2023-09-10', ''),
(3, 'Croissant', 'Croissant fresco e amanteigado', '3.49', '2023-09-10', ''),
(4, 'Leite com Chocolate', 'Leite achocolatado', '1.99', '2023-09-10', ''),
(5, 'Biscoito de Queijo', 'Biscoito de queijo crocante', '2.49', '2023-09-10', ''),
(6, 'Sanduíche de Presunto e Queijo', 'Sanduíche com presunto e queijo', '4.99', '2023-09-10', ''),
(7, 'Rosquinha', 'Rosquinha doce', '1.49', '2023-09-10', ''),
(8, 'Coxinha', 'Coxinha de frango', '2.79', '2023-09-10', ''),
(9, 'Suco de Laranja', 'Suco de laranja natural', '2.29', '2023-09-10', ''),
(10, NULL, NULL, NULL, '2023-09-10', ''),
(11, 'Torta de Frango', 'Torta de frango caseira', '6.99', '2023-09-10', ''),
(12, 'Café Expresso', 'Café expresso forte', '1.99', '2023-09-10', ''),
(13, 'Misto Quente', 'Misto quente com presunto e queijo', '4.49', '2023-09-10', ''),
(14, 'Pão de Queijo', 'Pão de queijo quentinho', '2.29', '2023-09-10', ''),
(15, 'Coxinha de Queijo', 'Coxinha recheada com queijo', '2.79', '2023-09-10', ''),
(16, 'Bolo de Cenoura', 'Bolo de cenoura com cobertura de chocolate', '5.99', '2023-09-10', ''),
(17, 'Pudim', 'Pudim de leite condensado', '3.99', '2023-09-10', ''),
(18, 'Café com Leite', 'Café com leite quente', '2.49', '2023-09-10', ''),
(19, 'Sanduíche de Frango', 'Sanduíche de frango grelhado', '5.49', '2023-09-10', ''),
(20, 'Biscoito de Chocolate', 'Biscoito de chocolate crocante', '1.99', '2023-09-10', ''),
(21, 'Torta de Maçã', 'Torta de maçã fresca', '4.49', '2023-09-10', ''),
(22, 'Salgado de Salsicha', 'Salgado recheado com salsicha', '2.79', '2023-09-10', ''),
(23, 'Café Descafeinado', 'Café descafeinado suave', '2.49', '2023-09-10', ''),
(24, 'Pão Integral', 'Pão integral saudável', '3.29', '2023-09-10', ''),
(25, 'Bolo de Limão', 'Bolo de limão com cobertura de açúcar', '6.49', '2023-09-10', ''),
(26, 'Rosquinha de Canela', 'Rosquinha de canela com açúcar', '1.49', '2023-09-10', ''),
(27, 'Suco de Uva', 'Suco de uva natural', '2.29', '2023-09-10', ''),
(28, 'Torta de Frutas', 'Torta de frutas frescas', '5.99', '2023-09-10', ''),
(29, 'Café Gelado', 'Café gelado com gelo', '2.99', '2023-09-10', ''),
(30, 'Muffin de Blueberry', 'Muffin de blueberry fofinho', '3.79', '2023-09-10', ''),
(31, 'Muffin de Banana', 'Muffin de banana com nozes', '3.79', '2023-09-10', ''),
(32, 'Bolinho de Chuva', 'Bolinho de chuva açucarado', '1.29', '2023-09-10', ''),
(33, 'Pão de Alho', 'Pão de alho para churrasco', '2.49', '2023-09-10', ''),
(34, 'Tapioca', 'Tapioca recheada com queijo', '3.99', '2023-09-10', ''),
(35, 'Cappuccino', 'Cappuccino cremoso', '4.29', '2023-09-10', ''),
(36, 'Bolo de Milho', 'Bolo de milho com cobertura de goiabada', '6.79', '2023-09-10', ''),
(37, 'Cookies', 'Cookies de chocolate e nozes', '2.99', '2023-09-10', ''),
(38, 'Cuscuz', 'Cuscuz com manteiga e queijo', '2.59', '2023-09-10', ''),
(39, 'Empada', 'Empada recheada de frango', '3.49', '2023-09-10', ''),
(40, 'Picolé de Frutas', 'Picolé de frutas tropicais', '1.00', '2023-09-10', '');

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
