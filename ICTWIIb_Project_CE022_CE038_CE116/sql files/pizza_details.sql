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
-- Table structure for table `pizza_details`
--

CREATE TABLE `pizza_details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(233) NOT NULL,
  `description` text NOT NULL,
  `regular` int(11) NOT NULL,
  `medium` int(11) NOT NULL,
  `large` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pizza_details`
--

INSERT INTO `pizza_details` (`id`, `name`, `img`, `description`, `regular`, `medium`, `large`) VALUES
(1, 'Tomato', 'https://www.dominos.co.in/files/items/pizza_mania_tomato.png', 'juicy tomato in a flavourful combination with cheese I tangy sauce.', 59, 140, 210),
(2, 'VegLoaded', 'https://www.dominos.co.in/files/items/PrimeLoadedL.jpg', 'Tomato | Grilled Mushroom |Jalapeno |Golden Corn | Beans in a fresh pan crust', 135, 199, 275),
(3, 'Cheesy', 'https://www.dominos.co.in/files/items/PrimeCheesyL.jpg', 'Orange Cheddar Cheese I Mozzarella', 99, 160, 220),
(4, 'Capcicum', 'https://www.dominos.co.in/files/items/CapsicumVeg.jpg', 'Capcicum', 75, 110, 180),
(5, 'Onion', 'https://www.dominos.co.in/files/items/onion_veg.jpg', 'Onion', 59, 99, 130),
(6, 'GoldenCorn', 'https://www.dominos.co.in/files/items/golden_corn_veg.jpg', 'Golden Corn', 79, 130, 199),
(7, 'PaneerAndOnion', 'https://www.dominos.co.in/files/items/Paneer_Special.jpg', 'Creamy Paneer I Onion', 95, 140, 220),
(8, 'CheeseAndTomato', 'https://www.dominos.co.in/files/items/cheese_and_tomato.png', 'A delectable combination of cheese and juicy tomato', 99, 170, 215),
(9, 'Margherita', 'https://www.dominos.co.in/files/items/Margherit.jpg', 'A hugely popular margherita, with a deliciously tangy single cheese topping', 99, 199, 395),
(10, 'DoubleCheeseMargherita', 'https://feenix.co.in/wp-content/uploads/2018/02/double_cheese_margherita.jpg', 'The ever-popular Margherita - loaded with extra cheese... oodies of it!', 185, 335, 535),
(11, 'FarmHouse', 'https://www.dominos.co.in/files/items/Farmhouse.jpg', 'A pizza that goes ballistic on veggies! Check out this mouth watering overload of crunchy, crisp capsicum, succulent mushrooms and fresh tomatoes', 215, 395, 595),
(12, 'PeppyPaneer', 'https://www.dominos.co.in/files/items/Peppy_Paneer.jpg', 'Chunky paneer with crisp capsicum and spicy red pepper - quite a mouthful!', 215, 595, 395),
(13, 'MexicanGreenWave', 'https://5.imimg.com/data5/TJ/GN/MY-29540739/mexican-green-wave-500x500.png', 'A pizza loaded with crunchy onions, crisp capsicum, juicy tomatoes and jalapeno with a liberal sprinkling of exotic Mexican herbs.', 215, 395, 595),
(14, 'DeluxeVeggie', 'https://www.dominos.co.in/files/items/Deluxe_Veggie.jpg', 'For a vegetarian looking for a BIG treat that goes easy on the spices, this one\'s got it all.. The onions, the capsicum, those delectable mushrooms - with paneer and golden corn to top it all.', 235, 450, 695),
(15, 'VegExtravaganza', 'https://www.dominos.co.in/files/items/Veg_Extravaganz.jpg', 'A pizza that decidedly staggers under an overload of golden corn, exotic black olives, crunchy onions, crisp capsicum, succulent mushrooms, juicyfresh tomatoes and jalapeno - with extra cheese to go all around.', 235, 450, 695),
(16, 'CheeseAndOnion', 'https://www.dominos.co.in/files/items/Corn_&_Cheese.jpg', 'Cheese I Golden Corn', 165, 305, 495),
(17, 'PaneerMakhani', 'https://www.dominos.co.in/files/items/Paneer_Makhni.jpg', 'Paneer and Capsicum on Makhani Sauce', 215, 395, 595),
(18, 'VeggieParadise', 'https://www.dominos.co.in/files/items/Digital_Veggie_Paradise_olo_266x265.jpg', 'Goldern Corn, Black Olives, Capsicum & Red Paprika', 215, 395, 595),
(19, 'FreshVeggie', 'https://www.dominos.co.in/files/items/Fresh_Veggie.jpg', 'Onion I Capsicum', 185, 335, 535),
(20, 'TandooriPaneer', 'https://feenix.co.in/wp-content/uploads/2019/03/IndianTandooriPaneer.jpg', 'It is hot. It is spicy. It is oh-so-Indian. Tandoori paneer with capsicum I red paprika I mint mayo', 235, 450, 695),
(21, 'PepperChicken', 'https://feenix.co.in/wp-content/uploads/2018/02/PepperBarbequeChickenC-1.jpg', 'Pepper Barbecue Chicken I Cheese', 215, 350, 480),
(22, 'ChickenSausage', 'https://www.dominos.co.in/files/items/Chicken_Sausage.jpg', 'Chicken Sausage I Cheese', 225, 380, 445),
(23, 'ChickenGoldenDelight', 'https://www.dominos.co.in/files/items/Chicken_Golden_Delight.jpg', 'Mmm! Barbeque chicken with a topping of golden corn loaded with extra cheese. Worth its weight in gold!', 275, 399, 678),
(24, 'NonVegSupreme', 'https://chefchoice.com.np/wp-content/uploads/2020/07/Non-Veg_Supreme.jpg', 'Bite into supreme delight of Black Olives, Onions, Grilled Mushrooms, Pepper BBQ Chicken, Peri-Peri Chicken, Grilled Chicken Rashers.', 199, 278, 368),
(25, 'ChickenDominator', 'https://5.imimg.com/data5/DM/ES/MY-29540739/chicken-dominator-500x500.png', 'Treat your taste buds with Double Pepper Barbecue Chicken, Peri-Peri Chicken, Chicken Tikka & Grilled Chicken Rashers.', 210, 380, 499),
(26, 'BarbecueAndOnion', 'https://www.dominos.co.in/files/items/Pepper_Barbeque_&_Onion.jpg', 'Pepper Barbecue Chicken I Onion.', 175, 240, 350),
(27, 'ChickenFiesta', 'https://www.dominos.co.in/files/items/chunky-chicken.png', 'Grilled Chicken Rashers I Peri-Peri Chicken I Onion I Capsicum.', 199, 278, 450),
(28, 'ChickenTikka', 'https://feenix.co.in/wp-content/uploads/2019/03/IndianTandooriChickenTikka.jpg', 'The wholesome flavour of tandoori masala with Chicken tikka I onion I red paprika I mint mayo.', 169, 225, 335),
(29, 'Pepperoni', 'https://www.dominos.co.in/files/items/Pepperoni.jpg', 'dried oregano, dried basil, crushed red pepper flakes, salt, and pepper.', 215, 450, 695);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pizza_details`
--
ALTER TABLE `pizza_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pizza_details`
--
ALTER TABLE `pizza_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
