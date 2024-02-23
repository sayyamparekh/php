-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2018 at 05:33 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg_001`
--

CREATE TABLE `reg_001` (
  `id` int(11) NOT NULL,
  `username` varchar(222) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_001`
--

INSERT INTO `reg_001` (`id`, `username`, `name`, `password`) VALUES
(20, 'aprodhania', 'Alamin', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(23, 'alimon', 'Alimon', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(24, 'admin', 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg_001`
--
ALTER TABLE `reg_001`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg_001`
--
ALTER TABLE `reg_001`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
