-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/11/2026 às 16:36
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `empresa`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(100) NOT NULL,
  `EMAIL` varchar(200) DEFAULT NULL,
  `CARGO` varchar(50) NOT NULL,
  `SALARIO` decimal(10,2) NOT NULL,
  `DATA_ADIMISSAO` date NOT NULL,
  `ATIVO` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `funcionario`
--

INSERT INTO `funcionario` (`ID`, `NOME`, `EMAIL`, `CARGO`, `SALARIO`, `DATA_ADIMISSAO`, `ATIVO`) VALUES
(6, 'GUSTAVO DOMINGUES DA SILVA', 'GUSTAVO@GMAIL.COMM', 'DBA', 5000.00, '2023-01-01', 1),
(7, 'GUSTAVO DOMINGUES DA SILVA', 'GUSTAVO@GMAIL.COMM', 'SENHOR DO TEMPO', 5000.00, '2023-01-01', 1),
(8, 'Ramon dino', 'clipada@gmail.com', 'Fortin', 67.00, '2026-11-04', 1),
(10, 'Cesa', 'ceza@gmail.com', 'cezador', 666.00, '2026-11-01', 1),
(12, 'Não ativo', 'naoativo@gmail.com', 'Não ativo', 987.00, '1526-05-06', 1),
(13, 'Gamer', 'gamer@gmail.com', 'gamer', 6545.00, '2004-04-21', 0),
(14, 'gamergamer', 'gamergamer@gmail.com', 'gamergamer', 9845.00, '2005-05-11', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
