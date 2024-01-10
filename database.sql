-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 08, 2024 at 02:28 PM
-- Server version: 5.7.37
-- PHP Version: 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `cake`
--

CREATE TABLE `cake` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` decimal(4,2) DEFAULT NULL,
  `product_description` text,
  `product_image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cake`
--

INSERT INTO `cake` (`product_id`, `product_name`, `product_price`, `product_description`, `product_image`) VALUES
(8, 'Ramen', '24.00', 'Beloved Japanese dish that has gained international popularity for its comforting and flavorful appeal.', 'https://www.forkknifeswoon.com/wp-content/uploads/2014/10/simple-homemade-chicken-ramen-fork-knife-swoon-01.jpg'),
(9, 'Paella', '14.00', 'Iconic Spanish dish with saffron-infused rice, seafood, and vibrant flavors in one delectable medley.', 'https://images.immediate.co.uk/production/volatile/sites/30/2020/08/paella-837f12c.jpg?quality=90&resize=440,400'),
(10, 'Pierogi', '19.00', 'Polish dumplings, filled with potatoes, cheese, or meat, boiled or fried for perfection.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Pierogi_z_mas%C5%82em_-_2023.03.31.jpg/640px-Pierogi_z_mas%C5%82em_-_2023.03.31.jpg'),
(11, 'Moussaka', '21.00', 'Layers of eggplant, minced meat, and béchamel; a rich, savory Greek casserole delight.', 'https://www.recipetineats.com/wp-content/uploads/2019/03/Greek-Moussaka_3-re-edited-SQ.jpg'),
(12, 'Eisbein', '26.00', 'German delicacy featuring slow-cooked, crispy pork knuckle, known for its savory, tender indulgence.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Eisbein-2.jpg/1200px-Eisbein-2.jpg'),
(13, 'Moussaka', '21.00', 'Layers of eggplant, minced meat, and béchamel; a rich, savory Greek casserole delight.', 'https://www.recipetineats.com/wp-content/uploads/2019/03/Greek-Moussaka_3-re-edited-SQ.jpg'),
(14, 'FILLET TOWER BURGER', '20.00', 'Savor perfection with our Fillet Tower Burger—succulent fillet, stacked high for an unrivaled taste experience.', 'https://3.bp.blogspot.com/_mPs1GewkiJg/Slz-ZKxURuI/AAAAAAAAAD8/yvJxg_8N_1Y/s320/product-fillet-tower.jpg'),
(15, 'Margherita Pizza', '17.00', 'Thin crust, ripe tomatoes, fresh mozzarella, basil. A timeless, flavorful pizza delight.', 'https://st3.idealista.it/cms/archivie/styles/idcms_large_desktop/public/2019-05/media/image/margherita_wikipedia.jpg?fv=bOcWknfe&itok=9WM7SPJF');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `session_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `username` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`) VALUES
(1, 'admin@gmail.com', '12345678', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cake`
--
ALTER TABLE `cake`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cake`
--
ALTER TABLE `cake`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
