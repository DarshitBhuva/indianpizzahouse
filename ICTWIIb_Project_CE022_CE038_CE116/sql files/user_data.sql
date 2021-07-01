-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 04:18 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `no` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(233) NOT NULL,
  `mo_number` bigint(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`no`, `name`, `address`, `mo_number`, `password`, `email`) VALUES
(1, 'Darshit', 'Jetalsar', 2147483647, '$2y$10$vbHhI3hgaH.YGpr//lFREeNvoHqv1dgU0tvycEnxvTlkbikeLs.C.', 'darshitbhuva1@gmail.com'),
(3, 'Pavan', 'Kagvad', 8511433961, 'pavan', 'pavangadhiya86@gmail.com'),
(4, 'Zalak', 'Jetalsar', 1234567890, '$2y$10$SXdLdIxl608yLYUsKhzS/.qwh11xA4fv3ypPr89/jJlDDTiq21miW', 'darshitbhuva1@gmail.com'),
(5, 'vivek', 'Jetalsar', 1234567890, '$2y$10$YZ7sIwNu.jYrnD5dPG.Gxe0GrtrEJJ7V/bvQPmQ5gCnie2bOHtMI2', 'viv1@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
