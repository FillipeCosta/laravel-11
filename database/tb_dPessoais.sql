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
-- Estrutura para tabela `tb_dPessoais`
--

CREATE TABLE `tb_dPessoais` (
  `Data_de_Nascimento` date DEFAULT NULL,
  `Sexo` varchar(10) DEFAULT NULL,
  `Cor_Raca` varchar(50) DEFAULT NULL,
  `Nacionalidade` varchar(50) DEFAULT NULL,
  `UF_de_Naturalidade` varchar(2) DEFAULT NULL,
  `Naturalidade` varchar(50) DEFAULT NULL,
  `Numero_do_RG` varchar(20) DEFAULT NULL,
  `Orgao_Emissor_do_RG` varchar(20) DEFAULT NULL,
  `UF_do_RG` varchar(2) DEFAULT NULL,
  `Data_de_Emissao_do_RG` date DEFAULT NULL,
  `CPF` varchar(11) DEFAULT NULL,
  `PIS_PASEP` varchar(11) DEFAULT NULL,
  `Titulo_de_Eleitor` varchar(12) DEFAULT NULL,
  `Zona_Eleitoral` varchar(4) DEFAULT NULL,
  `Secao_Eleitoral` varchar(4) DEFAULT NULL,
  `Estado_Civil` varchar(15) DEFAULT NULL,
  `Nome_do_Conjuge` varchar(100) DEFAULT NULL,
  `Nome_do_Pai` varchar(100) DEFAULT NULL,
  `Nome_da_Mae` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `tb_dPessoais`
--

INSERT INTO `tb_dPessoais` (`Data_de_Nascimento`, `Sexo`, `Cor_Raca`, `Nacionalidade`, `UF_de_Naturalidade`, `Naturalidade`, `Numero_do_RG`, `Orgao_Emissor_do_RG`, `UF_do_RG`, `Data_de_Emissao_do_RG`, `CPF`, `PIS_PASEP`, `Titulo_de_Eleitor`, `Zona_Eleitoral`, `Secao_Eleitoral`, `Estado_Civil`, `Nome_do_Conjuge`, `Nome_do_Pai`, `Nome_da_Mae`, `id`) VALUES
(NULL, 'h', 'hj', 'hj', NULL, 'hj', NULL, NULL, NULL, NULL, 'j', 'h', NULL, 'hj', 'h', 'jk', NULL, NULL, NULL, 1),
(NULL, 'h', 'hj', 'hj', NULL, 'hj', NULL, NULL, NULL, NULL, 'j', 'h', NULL, 'hj', 'h', 'jk', NULL, NULL, NULL, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_dPessoais`
--
ALTER TABLE `tb_dPessoais`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_dPessoais`
--
ALTER TABLE `tb_dPessoais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
