-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Dez-2021 às 01:26
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `veiculos_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos_tb`
--

CREATE TABLE `veiculos_tb` (
  `id_carro` int(11) NOT NULL,
  `modelo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano` int(11) NOT NULL,
  `quilometragem` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `veiculos_tb`
--

INSERT INTO `veiculos_tb` (`id_carro`, `modelo`, `ano`, `quilometragem`) VALUES
(4, 'Volkswagen Jetta GLI - 2.0 Turbo - 211cv', 2019, '13594'),
(5, 'Porsche 911 GT3RS - 4.0 Flat-6 PDK', 2016, '37920'),
(6, 'Audi R8 - 5.2 V10 - S-Tronic', 2021, '27'),
(8, 'Nissan GT-R - 3.6 V6 BiTurbo', 2011, '52937');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `veiculos_tb`
--
ALTER TABLE `veiculos_tb`
  ADD PRIMARY KEY (`id_carro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `veiculos_tb`
--
ALTER TABLE `veiculos_tb`
  MODIFY `id_carro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
