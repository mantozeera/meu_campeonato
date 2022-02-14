-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Fev-2022 às 09:43
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `meu_campeonato`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `confronto`
--

CREATE TABLE `confronto` (
  `id` int(11) NOT NULL,
  `fase` varchar(255) NOT NULL,
  `time_a` varchar(255) NOT NULL,
  `time_b` varchar(255) NOT NULL,
  `placar_a` int(11) NOT NULL,
  `placar_b` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `confronto`
--

INSERT INTO `confronto` (`id`, `fase`, `time_a`, `time_b`, `placar_a`, `placar_b`) VALUES
(1, 'quartas', '8', '7', 5, 5),
(2, 'quartas', '3', '1', 0, 2),
(3, 'quartas', '2', '4', 3, 4),
(4, 'quartas', '5', '6', 5, 1),
(5, 'semi-final', '4', '5', 2, 4),
(6, 'semi-final', '1', '7', 0, 3),
(7, 'terceiro_lugar', '4', '1', 2, 4),
(8, 'final', '5', '7', 3, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipes`
--

CREATE TABLE `equipes` (
  `id` int(11) NOT NULL,
  `equipe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `equipes`
--

INSERT INTO `equipes` (`id`, `equipe`) VALUES
(1, 'palmeiras'),
(2, 'bangu'),
(3, 'curitiba'),
(4, 'sao paulo'),
(5, '15 de jau'),
(6, 'paisandu'),
(7, 'moto club'),
(8, 'londrina');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `confronto`
--
ALTER TABLE `confronto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `equipes`
--
ALTER TABLE `equipes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `confronto`
--
ALTER TABLE `confronto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `equipes`
--
ALTER TABLE `equipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
