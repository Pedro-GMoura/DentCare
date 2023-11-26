-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/11/2023 às 19:52
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dentcaretrabalho`
--
CREATE DATABASE IF NOT EXISTS `dentcaretrabalho` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci;
USE `dentcaretrabalho`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `idcadastro` int(11) NOT NULL,
  `user` varchar(45) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `emailregistro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Despejando dados para a tabela `cadastro`
--

INSERT INTO `cadastro` (`idcadastro`, `user`, `pass`, `emailregistro`) VALUES
(35, 'teste2', '123456', 'pedro@gmail.com'),
(36, 'diegs', '123', 'diegs@u.com'),
(37, 'vitor', '12345', 'vitor@gmail.com'),
(38, 'admin', 'admin', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `consulta`
--

CREATE TABLE `consulta` (
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `tipo_atendimento` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Despejando dados para a tabela `consulta`
--

INSERT INTO `consulta` (`cpf`, `nome`, `data`, `tipo_atendimento`) VALUES
('00000000011', 'Pedro ', '2023-11-06', 'endodontia'),
('12', 'teste', '2023-11-20', 'Ortodontia'),
('123', 'Pedro Henrique', '2023-11-28', 'proteses'),
('12345678900', 'Pedro', '2023-11-27', 'ortodontia'),
('4', 'Pedro Henrique', '2023-11-27', 'endodontia');

-- --------------------------------------------------------

--
-- Estrutura para tabela `formulario`
--

CREATE TABLE `formulario` (
  `idformulario` int(11) NOT NULL,
  `nome_completo` varchar(150) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `mensagem` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Despejando dados para a tabela `formulario`
--

INSERT INTO `formulario` (`idformulario`, `nome_completo`, `telefone`, `email`, `mensagem`) VALUES
(26, 'teste', 'teste', 'teste@gmail.com', 'teste123'),
(27, 'Pedro Henrique', '2323', 'pedronerymoura@gmail.com', 'OIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII'),
(28, 'Pedro', '1234567', 'pedronerymoura@gmail.com', 'oioioioi'),
(29, 'vitor', '12345', 'teste@gmail.com', 'OI tudo bem?'),
(30, 'vitor', '2323', 'teste@gmail.com', 'Oi tudo bem? teste'),
(31, 'teste', '1234567', 'teste@gmail.com', 'Oi');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`idcadastro`);

--
-- Índices de tabela `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices de tabela `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`idformulario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `idcadastro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `formulario`
--
ALTER TABLE `formulario`
  MODIFY `idformulario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
