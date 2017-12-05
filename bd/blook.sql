-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Dez-2017 às 22:20
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blook`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos`
--

CREATE TABLE `artigos` (
  `id` int(11) NOT NULL,
  `categoria` int(2) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_general_mysql500_ci NOT NULL,
  `conteudo` longtext COLLATE utf8_general_mysql500_ci NOT NULL,
  `data_publicacao` varchar(10) COLLATE utf8_general_mysql500_ci NOT NULL,
  `autor` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome_categoria` varchar(100) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome_user` varchar(200) COLLATE utf8_general_mysql500_ci NOT NULL,
  `user_md5` varchar(200) COLLATE utf8_general_mysql500_ci NOT NULL,
  `senha_user` varchar(200) COLLATE utf8_general_mysql500_ci NOT NULL,
  `senha_md5` varchar(200) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artigos`
--
ALTER TABLE `artigos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria` (`categoria`),
  ADD KEY `autor` (`autor`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artigos`
--
ALTER TABLE `artigos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
