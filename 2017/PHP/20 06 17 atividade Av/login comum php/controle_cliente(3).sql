-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/06/2017 às 02:06
-- Versão do servidor: 10.1.19-MariaDB
-- Versão do PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `controle_cliente`
--
CREATE DATABASE IF NOT EXISTS `controle_cliente` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `controle_cliente`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `codcliente` smallint(6) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `telefone` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `cliente`
--

INSERT INTO `cliente` (`codcliente`, `nome`, `telefone`) VALUES
(1, 'maria', '(21)9856-8599'),
(2, 'pedro', '(21)8569-8569'),
(3, 'camila', '(21)9856-8599'),
(4, 'matheus', '(21)8569-859'),
(5, 'guilherme', '(21)5268-8595'),
(6, 'yan', '(21)8596-1452'),
(7, 'thamires', '(21)8569-8569'),
(8, 'pedro paulo', '(21)8569-8569'),
(9, 'gabriel', '(21)9856-8599'),
(10, 'Rafael Costa', '(21)8569-8569'),
(11, 'decio', '(21)2568-8569');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `codusuario` int(11) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`codusuario`, `usuario`, `email`, `senha`, `nivel`) VALUES
(1, 'Fatima Melo', 'fatimabsmelo@gmail.com', '123', 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codcliente`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codusuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codcliente` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `codusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
