-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Tempo de geração: 27/04/2024 às 16:02
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
-- Estrutura para tabela `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `CRE`
--

CREATE TABLE `CRE` (
  `id` int(11) NOT NULL,
  `cre` varchar(255) NOT NULL,
  `unidade` varchar(60) NOT NULL,
  `status_lotacao` enum('ATUAL','ANTIGO') NOT NULL,
  `dt_inicio` date NOT NULL,
  `dt_fim` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `DadosProfissionais`
--

CREATE TABLE `DadosProfissionais` (
  `id` int(11) NOT NULL,
  `idRegime` int(11) NOT NULL,
  `matricula` varchar(255) NOT NULL,
  `dt_admissao` date NOT NULL,
  `funcao` varchar(255) NOT NULL,
  `salario_referencia` decimal(10,2) NOT NULL,
  `carga_horaria_semanal` int(11) NOT NULL,
  `pcd` tinyint(1) NOT NULL,
  `reducao_carga_horaria` int(11) NOT NULL,
  `readaptado` tinyint(1) NOT NULL,
  `nivel_ep` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `DadosProfissionais`
--

INSERT INTO `DadosProfissionais` (`id`, `idRegime`, `matricula`, `dt_admissao`, `funcao`, `salario_referencia`, `carga_horaria_semanal`, `pcd`, `reducao_carga_horaria`, `readaptado`, `nivel_ep`) VALUES
(10, 1, 'xxx', '2024-04-02', 'Cargo', 3.00, 3, 1, 3, 1, '2'),
(11, 1, 'xxx', '2024-04-10', 'Cargo', 20.00, 3, 1, 3, 1, '2');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Educacao`
--

CREATE TABLE `Educacao` (
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
  `id` int(11) NOT NULL,
  `formacao` varchar(20) NOT NULL,
  `cursando` tinyint(1) NOT NULL,
  `semestre` varchar(2) NOT NULL,
  `concluido` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Endereco`
--

CREATE TABLE `Endereco` (
  `Estado` varchar(50) DEFAULT NULL,
  `Endereco` varchar(255) DEFAULT NULL,
  `Bairro` varchar(100) DEFAULT NULL,
  `Cidade` varchar(100) DEFAULT NULL,
  `UF_de_Residencia` varchar(2) DEFAULT NULL,
  `CEP` varchar(9) DEFAULT NULL,
  `Telefone_Residencial` varchar(15) DEFAULT NULL,
  `Telefone_Celular` varchar(15) DEFAULT NULL,
  `Telefone_Comercial` varchar(15) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Lotacao`
--

CREATE TABLE `Lotacao` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_04_13_050415_create_categories_table', 1),
(5, '2024_04_16_212302_create_f_cadastros_table', 1),
(6, '2024_04_16_212547_create_f_funcionals_table', 1),
(7, '2024_04_18_160740_create_fichas_table', 1),
(8, '2024_04_24_093149_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('plaays50@gmail.com', '$2y$12$LDQibse1t5NBNMUb3gCa8O5yGR5c4fPoPxxOzoFXA2EH2.I6gS6X.', '2024-04-25 08:46:52');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Perfil`
--

CREATE TABLE `Perfil` (
  `idPerfil` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Pessoa`
--

CREATE TABLE `Pessoa` (
  `id` int(11) NOT NULL,
  `Apelido` varchar(100) DEFAULT NULL,
  `Naturalidade` varchar(50) DEFAULT NULL,
  `RG` varchar(20) DEFAULT NULL,
  `DtNascimento` date DEFAULT NULL,
  `Sexo` varchar(10) DEFAULT NULL,
  `DtEmissao_RG` date DEFAULT NULL,
  `CPF` varchar(11) DEFAULT NULL,
  `Titulo_Eleitor` varchar(12) DEFAULT NULL,
  `Zona_Eleitoral` varchar(4) DEFAULT NULL,
  `UF_RG` varchar(2) DEFAULT NULL,
  `Orgao_RG` varchar(20) DEFAULT NULL,
  `Secao_Eleitoral` varchar(4) DEFAULT NULL,
  `Estado_Civil` varchar(15) DEFAULT NULL,
  `Nome_Conjuge` varchar(100) DEFAULT NULL,
  `Nome_Pai` varchar(100) DEFAULT NULL,
  `Nome_Mae` varchar(100) DEFAULT NULL,
  `UF_Naturalidade` varchar(2) DEFAULT NULL,
  `PIS_PASEP` varchar(11) DEFAULT NULL,
  `Nacionalidade` varchar(50) DEFAULT NULL,
  `Cor_Raca` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Regime`
--

CREATE TABLE `Regime` (
  `id` int(11) NOT NULL,
  `periodo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `Regime`
--

INSERT INTO `Regime` (`id`, `periodo`) VALUES
(1, '20'),
(2, '30'),
(3, '40');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_dUnidade_Primaria`
--

CREATE TABLE `tb_dUnidade_Primaria` (
  `Unidade_Primary` varchar(255) DEFAULT NULL,
  `CRE_Unidade_Administrativa_Primary` varchar(255) DEFAULT NULL,
  `Lotacao_Unidade_Primary` varchar(255) DEFAULT NULL,
  `Turno_Primary` varchar(100) DEFAULT NULL,
  `Atuacao_Primary` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'plaays50@gmail.com', NULL, '$2y$12$6qgP/lQ2FCiOKuAv5TVTxeeHfvdTI1tpNvmhmRkkjd50ehxgd/1fS', NULL, '2024-04-26 09:51:47', '2024-04-26 09:51:47');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Índices de tabela `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `CRE`
--
ALTER TABLE `CRE`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `DadosProfissionais`
--
ALTER TABLE `DadosProfissionais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Regime` (`idRegime`);

--
-- Índices de tabela `Educacao`
--
ALTER TABLE `Educacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `Endereco`
--
ALTER TABLE `Endereco`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices de tabela `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Índices de tabela `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `Lotacao`
--
ALTER TABLE `Lotacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices de tabela `Perfil`
--
ALTER TABLE `Perfil`
  ADD PRIMARY KEY (`idPerfil`);

--
-- Índices de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices de tabela `Pessoa`
--
ALTER TABLE `Pessoa`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `Regime`
--
ALTER TABLE `Regime`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Índices de tabela `tb_dUnidade_Primaria`
--
ALTER TABLE `tb_dUnidade_Primaria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_dUnidade_Secundaria`
--
ALTER TABLE `tb_dUnidade_Secundaria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `CRE`
--
ALTER TABLE `CRE`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `DadosProfissionais`
--
ALTER TABLE `DadosProfissionais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `Educacao`
--
ALTER TABLE `Educacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `Endereco`
--
ALTER TABLE `Endereco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `Lotacao`
--
ALTER TABLE `Lotacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `Perfil`
--
ALTER TABLE `Perfil`
  MODIFY `idPerfil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `Pessoa`
--
ALTER TABLE `Pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `Regime`
--
ALTER TABLE `Regime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_dUnidade_Primaria`
--
ALTER TABLE `tb_dUnidade_Primaria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_dUnidade_Secundaria`
--
ALTER TABLE `tb_dUnidade_Secundaria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `DadosProfissionais`
--
ALTER TABLE `DadosProfissionais`
  ADD CONSTRAINT `FK_Regime` FOREIGN KEY (`idRegime`) REFERENCES `Regime` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
