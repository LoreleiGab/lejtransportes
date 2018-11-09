-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Out-2018 às 02:07
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
-- Database: `lejtransportes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `lista_documento`
--

CREATE TABLE `lista_documento` (
  `idListaDocumento` tinyint(2) NOT NULL,
  `idTipoUpload` tinyint(2) NOT NULL COMMENT '1-OS | 2-Condutor',
  `documento` varchar(200) NOT NULL,
  `sigla` varchar(20) NOT NULL,
  `publicado` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lista_documento`
--

INSERT INTO `lista_documento` (`idListaDocumento`, `idTipoUpload`, `documento`, `sigla`, `publicado`) VALUES
(1, 1, 'O.S. digitalizada', 'osdigital', 1),
(2, 2, 'CNH', 'cnh', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lista_documento`
--
ALTER TABLE `lista_documento`
  ADD PRIMARY KEY (`idListaDocumento`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lista_documento`
--
ALTER TABLE `lista_documento`
  MODIFY `idListaDocumento` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
