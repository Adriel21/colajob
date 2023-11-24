-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/11/2023 às 06:26
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
-- Banco de dados: `colajob`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `accept_registrations`
--

CREATE TABLE `accept_registrations` (
  `id` int(11) NOT NULL,
  `accepted` tinyint(4) NOT NULL,
  `date` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `accept_registrations`
--

INSERT INTO `accept_registrations` (`id`, `accepted`, `date`, `user_id`) VALUES
(18, 1, '2023-11-16 13:28:36', 65),
(19, 1, '2023-11-16 13:33:13', 66),
(20, 1, '2023-11-16 13:33:50', 67),
(21, 1, '2023-11-16 13:37:36', 68),
(22, 1, '2023-11-16 13:41:34', 69),
(23, 1, '2023-11-16 13:43:11', 70),
(24, 1, '2023-11-16 13:46:23', 71),
(25, 1, '2023-11-16 14:25:44', 72),
(26, 1, '2023-11-16 14:26:44', 73),
(27, 1, '2023-11-16 14:34:15', 74),
(28, 1, '2023-11-16 15:05:41', 75),
(29, 1, '2023-11-17 15:43:43', 76),
(30, 1, '2023-11-18 14:29:29', 77),
(31, 1, '2023-11-21 13:54:29', 78),
(32, 1, '2023-11-24 04:29:19', 79);

-- --------------------------------------------------------

--
-- Estrutura para tabela `categories`
--

CREATE TABLE `categories` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Desenvolvimento Web'),
(2, 'Desenvolvimento Mobile'),
(4, 'Desenvolvimento Desktop'),
(5, 'Desenvolvimento de Embarcados'),
(6, 'Desenvolvimento de Iot'),
(7, 'WebDesign');

-- --------------------------------------------------------

--
-- Estrutura para tabela `freelancers`
--

CREATE TABLE `freelancers` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `users_id` int(11) NOT NULL,
  `categories_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `freelancers`
--

INSERT INTO `freelancers` (`id`, `titulo`, `descricao`, `users_id`, `categories_id`) VALUES
(5, 'vamo la time', 'jbkbkjbk', 75, 1),
(10, 'teste', 'testeadasadasdasdas', 78, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `projeto`
--

CREATE TABLE `projeto` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `resumo` varchar(150) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `data` date NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `categoria_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `rede`
--

CREATE TABLE `rede` (
  `id` int(11) NOT NULL,
  `website` varchar(50) DEFAULT NULL,
  `linkedin` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `github` varchar(50) DEFAULT NULL,
  `behance` varchar(50) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `profile_pic` varchar(45) DEFAULT NULL,
  `freelancer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `profile_pic`, `freelancer_id`) VALUES
(45, 'teste', 'teste', 'teste', NULL, NULL, NULL),
(46, 'Marc', 'teste@gmail.com', '123456798', NULL, NULL, NULL),
(47, 'wqrewrew', '5t4e54@gmail.com', '$2y$12$bXztMkhYRZW5i2ODBIDXsOqTI5a8AUDx7CQDMjBo9kt10167NkEfC', NULL, NULL, NULL),
(48, 'nknjknk', 'lira@gmail.com', '$2y$12$5aILLja8iotIJI4ToxxniOWF4T87NZCofSaAyKfTCxdlcPnM5D.h.', NULL, NULL, NULL),
(49, 'readef', 'home@gmail.com', '$2y$12$lf6Jm9J22dRgceZAAGdgA.UFySN3WbFuTvGMuzDhpqN/JqCdxeaFG', NULL, NULL, NULL),
(50, 'readef', 'tttt@gmail.com', '$2y$12$EuQG2Gm577RkWTX9Roi2FOcPrurH3k91RM36pYs/AKkzh0jBlqTKq', NULL, NULL, NULL),
(51, 'readef', 'adfdsfdsfsd@gmail.com', '$2y$12$nUkkiSEf0oJnqtoJTbLjEeQenw6y6q3vQFFp2RkHSwudVtLyx2.xO', NULL, NULL, NULL),
(52, 'readef', 'adriel@gmail.com', '$2y$12$VPOGOUyhrzQjsZfmHvA2QO/tgenuaF4lw171d25vFtSczPt1Acf92', NULL, NULL, NULL),
(53, 'fsdfsd', 'cris@lira.com', '$2y$12$LWDVHWRP7ArIwA0GZfQCgu6KaZ29I7.EokEhPmvQ4FdyvJg/BpDMe', NULL, NULL, NULL),
(54, 'er', 'amar@hot.com', '$2y$12$G.oFC5A4qFlBLbtl1kjHbeJi91UMkYoGkDG80Ovt2VBuvfmAyUvmG', NULL, NULL, NULL),
(55, 'fsf', 'beijo@gmail.com', '$2y$12$J3.xtzJPBWw4enxGSFM6Pus5Sel9s0hF1.S5PraUFWZsFGE/CDjHy', NULL, NULL, NULL),
(56, 'asdasd', 'pink@outlook.com', '$2y$12$ioMPxzKRh2iuzwFlrgXQ0eB9bmqABUDaHsAKqxHYpAqILDwjAgbXW', NULL, NULL, NULL),
(57, 'ewrwerew', 'amorlife@gmail.com', '$2y$12$Enx1BPFlmjHssb17rlCNl.FmX2nGuOCqg4wXfR1BIZbSVpwslbxoi', NULL, NULL, NULL),
(58, 'rwerwer', 'hi@gmail.com', '$2y$12$XoHPpGgDMLOKjbY29HVtB.EmPYNhpaO70LPQz/gFda3z2lisUxWNC', NULL, NULL, NULL),
(59, 'rqewrewr', 'hi@outlook.com', '$2y$12$7a/jcMwtZwqHLgFQ1nJJRuivrBBaNtI3nzqAHCrKI2oA1d030.2.m', NULL, NULL, NULL),
(60, 'eqrwrwerwe', 'ha1@outlook.com', '$2y$12$6aSAlTGdfQ4DZ8tAUgc3.OHU8qXDdl5vjlPwQ94.4b34dwJZG39oq', NULL, NULL, NULL),
(61, 'qewqwe', 'wqeqeq@hotmail.com', '$2y$12$MAabSwIJi/4Lh.THtI2pCO9dm2toboOnb0TvJjNTKSyjiZs7MFoHO', NULL, NULL, NULL),
(62, 'wddas', 'asdadad@gmail.com', '$2y$12$Q/3onxx2qS5YQrcdNE3qG.kUV/XB.Q.t/TVpghO6VvkOtmiSmduOe', NULL, NULL, NULL),
(63, 'dasdsadas', 'brenda@gmail.com', '$2y$12$sNnGh1sCF9jhxwiLFWQ7XOS3a8A3fP4ZZaPVu8SJTQFMn4FLVgByW', NULL, NULL, NULL),
(64, 'dasdsadas', '3123123123123@gmail.com', '$2y$12$iNpbXYuonWjrXM6pQhLv8uov1A/ae5WFHQcqihApILcWkA0VGzyF.', NULL, NULL, NULL),
(65, 'dasdsadas', 'agoravai@gmail.com', '$2y$12$5jjgvMklrEMywsatLv5SjufoAGqm7.maCNq8cjxHC8Lr58SbyybHq', NULL, NULL, NULL),
(66, 'qewwqe', 'mateus@gmail.com', '$2y$12$3qT4B18lQ9OjdEz2wDev2OaynrdlySx/blxLu6CWtiNl5NzJBNH.q', NULL, NULL, NULL),
(67, '213131', 'billyjean@gmail.com', '$2y$12$VsGyOZxowubfZSyfetRUE.FH4vaBlNNRJWMd5LygxcXK2GtGQCxR6', NULL, NULL, NULL),
(68, 'braa', 'broa@gmail.com', '$2y$12$bjEGJvDbpgt8mVHth.uEDeX6wjrQbKVgLvRcPPSyUIILjQabpKDqO', NULL, NULL, NULL),
(69, 'braa', 'broaaa@gmail.com', '$2y$12$CejIeGhiNKvwx5XknVpl8.v0dqLeYoFrjXfZ3k4wfLSUyDtznFwH2', NULL, NULL, NULL),
(70, 'braa', 'thiago@gmail.com', '$2y$12$UKHM8oLjJz80Lkjo8m9YDeZUhk4RtPHXF.SsAbETcU7VCkaDjCjl2', NULL, NULL, NULL),
(71, 'adadas', 'batata@gmail.com', '$2y$12$kJtQHfxzs6QignK4tFk5munwXmZOysVL6u9Aih2HptTafGX2Yj3AS', NULL, NULL, NULL),
(72, 'rodrigo', 'rogrido@gmail.com', '$2y$12$mIgNp.wDKQar4ZQJWajnhesALIVZFaIhZw6Rdgky6itS1SfqVIIMu', NULL, NULL, NULL),
(73, 'rodrigo', 'rogridoe@gmail.com', '$2y$12$.Fkoj0nb6sG/lWbdUKgrM.FJJEGduDy3Q6xPL3GUrazXi2fVu4m3S', NULL, NULL, NULL),
(74, 'Adriel Lira', 'adrieldiasdossantoslira@hotmail.com', '$2y$12$WAM198B0hEK.e1Src/SM9utL0RvYU7tNZrnDv8Z9nfgeIh4x54cOS', NULL, NULL, NULL),
(75, 'adriel', 'adriel.slira@gmail.com', '$2y$12$u2U0oGbZfQiYTHLlel6O9ehkolidKBLVbnAvJ0pbCYCZ7loxFGswm', NULL, NULL, NULL),
(76, 'VANESSA DOS SANTOS', 'vanesa@gmail.com', '$2y$12$Ny6OCguBoiSzdGhkcBPkguXAVrmvLXuxlC3cwEGN9hVKeEZ1V0X7e', NULL, NULL, NULL),
(77, 'Brenda', 'brendaoliveira@gmail.com', '$2y$12$uFMwvQmQAnQFrvOg0sSdb.iv76KZjQTlbpMdPcrGChRjtpzip1jA.', NULL, NULL, NULL),
(78, 'Adriel Dias dos Santos Lira', 'adrieldias2001@hotmail.com', '$2y$12$P21ymagnVWQRdxH6.OC4N.zsPeA1q7lALtoxxEQsziCRNeX2oZ51.', NULL, NULL, 10),
(79, 'Gabriel', 'gabrielgenovez@gmail.com', '$2y$12$ZGVeCyo3xygW9e8oUQc5p.oD0TaiPH1KQj1G0tGtXbIocP4i6EjlG', NULL, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `accept_registrations`
--
ALTER TABLE `accept_registrations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- Índices de tabela `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `freelancers`
--
ALTER TABLE `freelancers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_users_id` (`users_id`),
  ADD KEY `fk_freelancers_users` (`users_id`) USING BTREE,
  ADD KEY `fk_freelancers_categories` (`categories_id`) USING BTREE;

--
-- Índices de tabela `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_projeto_categoria` (`categoria_id`),
  ADD KEY `fk_projeto_usuario` (`usuario_id`);

--
-- Índices de tabela `rede`
--
ALTER TABLE `rede`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_users_freelancer` (`freelancer_id`) USING BTREE;

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `accept_registrations`
--
ALTER TABLE `accept_registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `categories`
--
ALTER TABLE `categories`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `freelancers`
--
ALTER TABLE `freelancers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `projeto`
--
ALTER TABLE `projeto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `rede`
--
ALTER TABLE `rede`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `accept_registrations`
--
ALTER TABLE `accept_registrations`
  ADD CONSTRAINT `accept_registrations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Restrições para tabelas `freelancers`
--
ALTER TABLE `freelancers`
  ADD CONSTRAINT `fk_profissao_categoria` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `fk_profissao_usuario` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Restrições para tabelas `projeto`
--
ALTER TABLE `projeto`
  ADD CONSTRAINT `fk_projeto_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `fk_projeto_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`);

--
-- Restrições para tabelas `rede`
--
ALTER TABLE `rede`
  ADD CONSTRAINT `rede_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`);

--
-- Restrições para tabelas `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_usuario_profissao` FOREIGN KEY (`freelancer_id`) REFERENCES `freelancers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
