-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 02, 2022 at 05:02 AM
-- Server version: 10.7.3-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `treinamento_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `preco` text NOT NULL,
  `imagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fotos`
--

INSERT INTO `fotos` (`id`, `nome`, `preco`, `imagem`) VALUES
(1, 'blusa', '271.82', 'camisa1.jpg'),
(2, 'camisa', '314.15', 'camisa2.jpg'),
(3, 'blusa preta', '141.42', 'camisa1.jpg'),
(4, 'blusa black', '1234', 'camisa1.jpg'),
(5, 'batmaninho', '1234', 'bat4.1.jpg'),
(6, 'Batman', '12344', 'bat2.jpg'),
(7, 'Liga da Justice', '1343', 'bat4.jpg'),
(8, 'Justice liga', '12', 'bat4.jpg'),
(9, 'Mortal KomBatman', '150', 'bat2.jpg'),
(10, 'Camisa light', '125.50', 'camisa2.jpg'),
(11, 'Conjunto dark', '100', 'conjunto1.jpg'),
(12, 'Cosplay', '100', 'cosplay1.jpg'),
(13, 'Cosplay', '100', 'cosplay2.jpg'),
(14, 'Cosplay', '100', 'cosplay3.jpg'),
(15, 'Moletom', '100', 'moletom1.jpg'),
(16, 'Moletom', '100', 'moletom2.jpg'),
(17, 'Moletom', '100', 'moletom3.jpg'),
(18, 'Moletom', '100', 'moletom4.jpg'),
(19, 'Moletom', '100', 'moletom5.jpg'),
(20, 'Moletom', '100', 'moletom6.jpg'),
(21, 'Moletom', '100', 'moletom7.jpg'),
(22, 'Moletom', '100', 'moletom8.jpg'),
(23, 'Moletom', '100', 'moletom9.jpg'),
(24, 'Moletom', '100', 'moletom10.jpg'),
(25, 'Moletom', '100', 'moletom11.jpg'),
(26, 'Moletom', '100', 'moletom12.jpg'),
(27, 'Moletom', '100', 'moletom13.png'),
(28, 'Moletom', '100', 'moletom14.jpg'),
(29, 'Moletom', '100', 'moletom15.jpg'),
(30, 'camisa legal', '123', 'camisa1.jpg'),
(31, 'camisa show', '321', 'camisa2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `email` text NOT NULL,
  `senha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'gustavara', 'gustavo.ferreira@codejr.com.br', '23_19'),
(8, 'bora treinar krai', 'maromba@gmail.com', 'paradinhas'),
(13, 'oioioioi222', 'gustavo.ferreira@codejr.com.br', 'oooo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
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
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
