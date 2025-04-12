-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/04/2025 às 17:30
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
-- Banco de dados: `contawatts`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `aparelhos`
--

CREATE TABLE `aparelhos` (
  `apaid` int(11) NOT NULL,
  `apanome` varchar(100) NOT NULL,
  `apapotencia` int(11) NOT NULL,
  `apadiasuso` int(11) NOT NULL,
  `valortarifa` float NOT NULL,
  `apauserid` int(11) NOT NULL,
  `apahorasdia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `aparelhos`
--

INSERT INTO `aparelhos` (`apaid`, `apanome`, `apapotencia`, `apadiasuso`, `valortarifa`, `apauserid`, `apahorasdia`) VALUES
(2, 'geladeira', 20, 30, 0.84, 1, 24);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usernome` varchar(100) NOT NULL,
  `useremail` varchar(200) NOT NULL,
  `usercpf` varchar(12) NOT NULL,
  `usersenha` varchar(16) NOT NULL,
  `userusuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usernome`, `useremail`, `usercpf`, `usersenha`, `userusuario`) VALUES
(1, 'vitor barbosa', 'vitor.vieirab34@gmail.com', '12345678910', '162005vb', 'vieirinha');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `aparelhos`
--
ALTER TABLE `aparelhos`
  ADD PRIMARY KEY (`apaid`),
  ADD KEY `apauserid` (`apauserid`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aparelhos`
--
ALTER TABLE `aparelhos`
  MODIFY `apaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `aparelhos`
--
ALTER TABLE `aparelhos`
  ADD CONSTRAINT `aparelhos_ibfk_1` FOREIGN KEY (`apauserid`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
