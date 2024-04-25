-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Tempo de geração: 25/04/2024 às 13:00
-- Versão do servidor: 5.7.22
-- Versão do PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `athena`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_dUnidade_Secundaria`
--

CREATE TABLE `tb_dUnidade_Secundaria` (
  `Unidade_Secondary` varchar(255) DEFAULT NULL,
  `CRE_Unidade_Administrativa_Secondary` varchar(255) DEFAULT NULL,
  `Lotacao_Unidade_Secondary` varchar(255) DEFAULT NULL,
  `Turno_Secondary` varchar(100) DEFAULT NULL,
  `Atuacao_Secondary` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_dUnidade_Secundaria`
--
ALTER TABLE `tb_dUnidade_Secundaria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_dUnidade_Secundaria`
--
ALTER TABLE `tb_dUnidade_Secundaria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
