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
-- Database: `order_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `no` int(11) NOT NULL,
  `pizza` varchar(50) NOT NULL,
  `User` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` varchar(20) NOT NULL,
  `address` varchar(233) NOT NULL,
  `cardHolder` varchar(30) NOT NULL,
  `card_number` bigint(16) NOT NULL,
  `Payment` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`no`, `pizza`, `User`, `quantity`, `size`, `address`, `cardHolder`, `card_number`, `Payment`, `time`) VALUES
(1, 'Veg Loaded', '', 16, 'large', 'jetalsar, sinchnvav area', 'Darshit Bhuva', 2147483647, 6400, '2021-06-23 15:52:36'),
(2, 'PepperChicken', '', 40, 'large', 'rajkot', 'Darshit Bhuva', 1201201211211314, 16000, '2021-06-23 15:52:36'),
(3, 'Margherita', '', 12, 'medium', 'Ahmdabad', 'Darshit Bhuva', 1234123412341234, 3600, '2021-06-23 15:52:36'),
(4, 'PepperChicken', '', 12, 'medium', 'gg', 'Darshit Bhuva', 1234546123121212, 3600, '2021-06-23 15:52:36'),
(26, 'VegLoaded', '', 2, 'small', 'sdsdsd', 'Darshit Bhuva', 1234432112344321, 400, '2021-06-23 15:52:36'),
(41, 'PeppyPaneer', 'Darshit', 10, 'medium', 'Rajkot', 'Darshit Bhuva', 1234567890123456, 5950, '2021-06-23 16:12:03'),
(42, 'VegLoaded', 'Darshit', 15, 'small', 'Rajkot', 'Darshit Bhuva', 1234123443214321, 2025, '2021-06-23 17:04:21'),
(44, 'Onion', 'Darshit', 2, 'small', 'rgdrf', 'Pavan', 1324564512034567, 118, '2021-06-23 17:21:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
