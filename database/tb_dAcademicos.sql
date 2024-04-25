-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Tempo de geração: 25/04/2024 às 12:59
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
-- Estrutura para tabela `tb_dAcademicos`
--

CREATE TABLE `tb_dAcademicos` (
  `Especialidade_Disciplina_Curso` varchar(255) DEFAULT NULL,
  `Especialidade_Referencia_Salarial` varchar(255) DEFAULT NULL,
  `Habilitacoes_Cadastradas_no_SIGRH` text,
  `Composicao_Curricular_e_Habilitacoes` text,
  `Nome_do_Curso` varchar(255) DEFAULT NULL,
  `Instituicao` varchar(255) DEFAULT NULL,
  `Data_de_Emissao` date DEFAULT NULL,
  `Utilizacao_do_Curso` varchar(255) DEFAULT NULL,
  `Data_de_Conclusao` date DEFAULT NULL,
  `Carga_Horaria` varchar(100) DEFAULT NULL,
  `id_academico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_dAcademicos`
--
ALTER TABLE `tb_dAcademicos`
  ADD PRIMARY KEY (`id_academico`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_dAcademicos`
--
ALTER TABLE `tb_dAcademicos`
  MODIFY `id_academico` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
