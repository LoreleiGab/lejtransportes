-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Nov-2018 às 14:53
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capac`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `frase_seguranca`
--

CREATE TABLE `frase_seguranca` (
  `id` int(1) NOT NULL,
  `frase_seguranca` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `frase_seguranca`
--

INSERT INTO `frase_seguranca` (`id`, `frase_seguranca`) VALUES
(1, 'Qual a sua cor favorita?'),
(2, 'Qual o nome do seu primeiro animal?'),
(3, 'Qual o nome do seu primeiro professor?'),
(4, 'Qual o nome do seu melhor amigo de infância?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `frase_seguranca`
--
ALTER TABLE `frase_seguranca`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `frase_seguranca`
--
ALTER TABLE `frase_seguranca`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
