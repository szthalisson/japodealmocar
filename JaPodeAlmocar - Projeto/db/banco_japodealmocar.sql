-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/06/2024 às 03:26
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
-- Banco de dados: `banco_japodealmocar`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `conta`
--

CREATE TABLE `conta` (
  `id_conta` int(11) NOT NULL,
  `id_mesa_conta` int(11) NOT NULL,
  `estado_conta` int(11) NOT NULL DEFAULT 1,
  `total_conta` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `garcom`
--

CREATE TABLE `garcom` (
  `id_garcom` int(11) NOT NULL,
  `nome_garcom` varchar(60) NOT NULL,
  `dataNascimento_garcom` varchar(60) NOT NULL,
  `sexo_garcom` varchar(60) NOT NULL,
  `email_garcom` varchar(80) NOT NULL,
  `senha_garcom` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `garcom`
--

INSERT INTO `garcom` (`id_garcom`, `nome_garcom`, `dataNascimento_garcom`, `sexo_garcom`, `email_garcom`, `senha_garcom`) VALUES
(1, 'miguel', '14/05/2004', 'Masculino', 'miguel@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estrutura para tabela `gerente`
--

CREATE TABLE `gerente` (
  `id_gerente` int(11) NOT NULL,
  `nome_gerente` varchar(60) NOT NULL,
  `dataNascimento_gerente` varchar(60) NOT NULL,
  `sexo_gerente` varchar(60) NOT NULL,
  `email_gerente` varchar(60) NOT NULL,
  `senha_gerente` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `gerente`
--

INSERT INTO `gerente` (`id_gerente`, `nome_gerente`, `dataNascimento_gerente`, `sexo_gerente`, `email_gerente`, `senha_gerente`) VALUES
(1, 'felipe', '14/05/2004', 'Masculino', 'felipe@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estrutura para tabela `mesa`
--

CREATE TABLE `mesa` (
  `id_mesa` int(11) NOT NULL,
  `num_mesa` int(11) NOT NULL,
  `id_produto_mesa` int(11) NOT NULL,
  `quantidade_produto_mesa` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(60) NOT NULL,
  `porcao_produto` varchar(60) NOT NULL,
  `valor_produto` float NOT NULL,
  `categoria_produto` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome_produto`, `porcao_produto`, `valor_produto`, `categoria_produto`) VALUES
(1, 'Pizza', 'Pequena', 10, 'Massas'),
(3, 'Batata Frita', 'Pequena', 5, 'Massas'),
(4, 'Pizza Calabresa', 'Média', 20.99, 'Massas');

-- --------------------------------------------------------

--
-- Estrutura para tabela `proprietario`
--

CREATE TABLE `proprietario` (
  `id_proprietario` int(11) NOT NULL,
  `nome_proprietario` varchar(60) NOT NULL,
  `email_proprietario` varchar(80) NOT NULL,
  `senha_proprietario` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `proprietario`
--

INSERT INTO `proprietario` (`id_proprietario`, `nome_proprietario`, `email_proprietario`, `senha_proprietario`) VALUES
(1, 'roger', 'roger@gmail.com', '1234');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `conta`
--
ALTER TABLE `conta`
  ADD PRIMARY KEY (`id_conta`);

--
-- Índices de tabela `garcom`
--
ALTER TABLE `garcom`
  ADD PRIMARY KEY (`id_garcom`);

--
-- Índices de tabela `gerente`
--
ALTER TABLE `gerente`
  ADD PRIMARY KEY (`id_gerente`);

--
-- Índices de tabela `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`id_mesa`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices de tabela `proprietario`
--
ALTER TABLE `proprietario`
  ADD PRIMARY KEY (`id_proprietario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `conta`
--
ALTER TABLE `conta`
  MODIFY `id_conta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `garcom`
--
ALTER TABLE `garcom`
  MODIFY `id_garcom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `gerente`
--
ALTER TABLE `gerente`
  MODIFY `id_gerente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `mesa`
--
ALTER TABLE `mesa`
  MODIFY `id_mesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `proprietario`
--
ALTER TABLE `proprietario`
  MODIFY `id_proprietario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
