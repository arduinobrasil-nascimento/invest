-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/03/2026 às 00:09
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
-- Banco de dados: `invest_web2`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cidade`
--

CREATE TABLE `cidade` (
  `codcidade` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `estado` char(2) NOT NULL,
  `codstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cidade`
--

INSERT INTO `cidade` (`codcidade`, `nome`, `estado`, `codstatus`) VALUES
(1, 'Manaus', 'AM', 1),
(2, 'Parintins', 'AM', 1),
(3, 'Itacoatiara', 'AM', 1),
(4, 'Manacapuru', 'AM', 1),
(5, 'Coari', 'AM', 1),
(6, 'Tefé', 'AM', 2),
(7, 'Tabatinga', 'AM', 1),
(8, 'Humaitá', 'AM', 2),
(9, 'São Gabriel da Cachoeira', 'AM', 1),
(10, 'Iranduba', 'AM', 1),
(11, 'Belém', 'PA', 1),
(12, 'Ananindeua', 'PA', 1),
(13, 'Santarém', 'PA', 1),
(14, 'Marabá', 'PA', 2),
(15, 'Altamira', 'PA', 1),
(16, 'Porto Velho', 'RO', 1),
(17, 'Ji-Paraná', 'RO', 1),
(18, 'Ariquemes', 'RO', 2),
(19, 'Vilhena', 'RO', 1),
(20, 'Cacoal', 'RO', 1),
(21, 'Rio Branco', 'AC', 1),
(22, 'Cruzeiro do Sul', 'AC', 1),
(23, 'Sena Madureira', 'AC', 2),
(24, 'Tarauacá', 'AC', 1),
(25, 'Feijó', 'AC', 1),
(26, 'Boa Vista', 'RR', 1),
(27, 'Rorainópolis', 'RR', 1),
(28, 'Caracaraí', 'RR', 2),
(29, 'Mucajaí', 'RR', 1),
(30, 'Pacaraima', 'RR', 1),
(31, 'Macapá', 'AP', 1),
(32, 'Santana', 'AP', 1),
(33, 'Laranjal do Jari', 'AP', 2),
(34, 'Oiapoque', 'AP', 1),
(35, 'Mazagão', 'AP', 1),
(36, 'Palmas', 'TO', 1),
(37, 'Araguaína', 'TO', 1),
(38, 'Gurupi', 'TO', 1),
(39, 'Porto Nacional', 'TO', 2),
(40, 'Paraíso do Tocantins', 'TO', 1),
(41, 'São Paulo', 'SP', 1),
(42, 'Campinas', 'SP', 1),
(43, 'Santos', 'SP', 1),
(44, 'Sorocaba', 'SP', 2),
(45, 'Ribeirão Preto', 'SP', 1),
(46, 'Rio de Janeiro', 'RJ', 1),
(47, 'Niterói', 'RJ', 1),
(48, 'Petrópolis', 'RJ', 2),
(49, 'Volta Redonda', 'RJ', 1),
(50, 'Campos dos Goytacazes', 'RJ', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`codcidade`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cidade`
--
ALTER TABLE `cidade`
  MODIFY `codcidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
