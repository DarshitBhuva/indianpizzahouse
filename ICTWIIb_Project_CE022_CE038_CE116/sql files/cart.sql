-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 04:17 AM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pizza` varchar(30) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `regular` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `username`, `pizza`, `img`, `description`, `regular`) VALUES
(13, 'pavan', 'Tomato', 'https://www.dominos.co.in/files/items/pizza_mania_tomato.png', 'juicy tomato in a flavourful combination with cheese I tangy sauce.', 0),
(14, 'pavan', 'Tomato', 'https://www.dominos.co.in/files/items/pizza_mania_tomato.png', 'juicy tomato in a flavourful combination with cheese I tangy sauce.', 0),
(15, 'pavan', 'VegLoaded', 'https://www.dominos.co.in/files/items/PrimeLoadedL.jpg', 'Tomato | Grilled Mushroom |Jalapeno |Golden Corn | Beans in a fresh pan crust', 0),
(46, 'vivek', 'Onion', 'https://www.dominos.co.in/files/items/onion_veg.jpg', 'Onion', 59),
(47, 'vivek', 'Onion', 'https://www.dominos.co.in/files/items/onion_veg.jpg', 'Onion', 59),
(48, 'Darshit', 'Margherita', 'https://www.dominos.co.in/files/items/Margherit.jpg', 'A hugely popular margherita, with a deliciously tangy single cheese topping', 99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
