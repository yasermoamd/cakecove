-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 11, 2024 at 12:29 PM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cakecove`
--
CREATE DATABASE IF NOT EXISTS `cakecove` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cakecove`;

-- --------------------------------------------------------

--
-- Table structure for table `cake`
--

CREATE TABLE IF NOT EXISTS `cake` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` decimal(4,2) DEFAULT NULL,
  `product_description` text,
  `product_image` text,
  `categoryID` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`product_id`),
  KEY `categoryID` (`categoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `cake`
--

INSERT INTO `cake` (`product_id`, `product_name`, `product_price`, `product_description`, `product_image`, `categoryID`, `created`, `updated`) VALUES
(1, 'Strawberry Fan Cake', '27.99', 'For ingredients and allergen information, please select all required options.', 'https://www.cakebox.com/media/catalog/product/cache/1cade5dd1d4a7a6857848d8ed97a4fb4/r/d/rd020_1.jpg', 1, '2024-01-11 12:11:52', '2024-01-11 12:11:52'),
(2, 'Colour Theme Photo Cake 2', '28.99', 'For ingredients and allergen information, please select all required options.', 'https://www.cakebox.com/media/catalog/product/cache/1cade5dd1d4a7a6857848d8ed97a4fb4/r/d/rd128_1.jpg', 1, '2024-01-11 12:11:52', '2024-01-11 12:11:52'),
(3, 'Purple Rose Fan Cake', '29.99', 'For ingredients and allergen information, please select all required options.', 'https://www.cakebox.com/media/catalog/product/cache/1cade5dd1d4a7a6857848d8ed97a4fb4/s/q/sq094.jpg', 1, '2024-01-11 12:11:52', '2024-01-11 12:11:52'),
(4, 'Colour Theme Piped Cake', '24.00', 'For ingredients and allergen information, please select all required options.', 'https://www.cakebox.com/media/catalog/product/cache/1cade5dd1d4a7a6857848d8ed97a4fb4/r/d/rd013.jpg', 1, '2024-01-11 12:11:52', '2024-01-11 12:11:52'),
(5, 'Lilac Chocolate Cake', '25.99', 'For ingredients and allergen information, please select all required options.', 'https://www.cakebox.com/media/catalog/product/cache/1cade5dd1d4a7a6857848d8ed97a4fb4/r/d/rd067_4.jpg', 1, '2024-01-11 12:11:52', '2024-01-11 12:11:52'),
(6, 'Hazelnut Cream Crunch Cupcakes', '22.00', 'For ingredients and allergen information, please select all required options.', 'https://www.cakebox.com/media/catalog/product/cache/1cade5dd1d4a7a6857848d8ed97a4fb4/c/c/cc033_1.jpg', 2, '2024-01-11 12:11:52', '2024-01-11 12:11:52'),
(7, 'Graduation Cupcakes', '15.00', 'For ingredients and allergen information, please select all required options.', 'https://www.cakebox.com/media/catalog/product/cache/1cade5dd1d4a7a6857848d8ed97a4fb4/g/r/graduation_cupcakes_1.jpg', 2, '2024-01-11 12:11:52', '2024-01-11 12:11:52'),
(8, 'Hazelnut Cupcakes', '22.00', 'For ingredients and allergen information, please select all required options.', 'https://www.cakebox.com/media/catalog/product/cache/1cade5dd1d4a7a6857848d8ed97a4fb4/c/c/cc034_1.jpg', 2, '2024-01-11 12:11:52', '2024-01-11 12:11:52'),
(9, 'Fruity Five Party Platter', '0.00', '79.99', 'https://www.cakebox.com/media/catalog/product/cache/1cade5dd1d4a7a6857848d8ed97a4fb4/s/q/sq147.jpg', 3, '2024-01-11 12:11:52', '2024-01-11 12:11:52'),
(10, 'Luxury Chocolate Party Platter', '89.99', 'For ingredients and allergen information, please select all required options.', 'https://www.cakebox.com/media/catalog/product/cache/1cade5dd1d4a7a6857848d8ed97a4fb4/s/q/sq148.jpg', 3, '2024-01-11 12:11:52', '2024-01-11 12:11:52'),
(11, 'Classic Cream Three Tier', '99.99', 'Our decadent wedding cakes are the perfect centrepiece for your special day. Each cake will come packed in a separate box for each tier and you will rent (no charge) the cake stand and knife and be required to pay a deposit for them at the store in advance. You will be responsible for setting up the cake on the stand. When the stand and knife are returned undamaged, you will receive a refund for the full deposit. Please return within 5 days. Please allow 4 days for return of deposit.', 'https://www.cakebox.com/media/catalog/product/cache/1cade5dd1d4a7a6857848d8ed97a4fb4/r/d/rd223.jpg', 3, '2024-01-11 12:11:52', '2024-01-11 12:11:52'),
(12, 'Mixed Biskie Box', '26.99', 'A biskie is a fresh, handmade, unique biscuit/cookie/cake creation filled with our special lightened buttercream. The biskie has a unique texture of crisp, soft, chewy and lusciously melty, as well as being a luxurious flavour fiesta in your mouth.', 'https://cutterandsquidge.com/cdn/shop/products/IMG_9332_1000x1000_crop_center.jpg?v=1653398087', 4, '2024-01-11 12:11:52', '2024-01-11 12:11:52'),
(13, 'Squidge Selection Box', '19.99', 'Cant decide? This cake selection box features all of our favourite small bites! Including a mix of our cutest, bite-sized baby biskies in various flavours as well as delish mini cupcakes and macarons, this selection box is great for sharing as canapés at parties, friends gatherings or even as a delicious dessert sampler.', 'https://cutterandsquidge.com/cdn/shop/files/2023_SelectionBox_1000x1000_crop_center.jpg?v=1699549406', 4, '2024-01-11 12:11:52', '2024-01-11 12:11:52'),
(14, 'Happy Birthday Baby Biskie Box', '21.99', 'Bite-sized pockets of bliss, packed with a punch of flavour, (chocolate, caramel or berry, take your pick!); thats the baby biskies for you! They make for a great token of love, and with this stunning happy birthday sleeve, theyre perfect to take that celebration up a notch! Cut that cake, blow out a candle or two and dig in.', 'https://cutterandsquidge.com/cdn/shop/files/babybiskie_newbdaysleeve_1000x1000_crop_center.jpg?v=1701703645', 4, '2024-01-11 12:11:52', '2024-01-11 12:11:52'),
(15, 'Happy Birthday Topper (Rustic)', '1.66', 'Elevate your cake with our Rustic Happy Birthday Topper. The intricate design, combining wood and delicate detailing, adds a touch of rustic elegance to your celebration. Versatile and durable, this topper is the ideal choice for various party themes. Make your birthday cake the center of attention with this visually appealing and premium-quality topper.', 'https://www.cakebox.com/media/catalog/product/cache/1cade5dd1d4a7a6857848d8ed97a4fb4/6/_/6.png', 5, '2024-01-11 12:11:52', '2024-01-11 12:11:52'),
(16, 'Happy Birthday Topper (Pink)', '1.66', 'Add a burst of color and sparkle to your cake with our Pink Happy Birthday Topper, adorned with vibrant pink hues and dazzling glitters. The playful design makes it a versatile addition to various party themes. Crafted with premium materials, this topper ensures both style and durability, making it the perfect choice for an eye-catching and memorable centerpiece for your birthday celebration.', 'https://www.cakebox.com/media/catalog/product/cache/1cade5dd1d4a7a6857848d8ed97a4fb4/8/_/8.png', 5, '2024-01-11 12:11:52', '2024-01-11 12:11:52'),
(17, 'Happy Birthday Topper (Blue)', '1.66', 'Immerse your celebration in elegance with our Blue Happy Birthday Topper. The serene blue tones and intricate detailing make it a versatile addition to various party themes. Crafted with premium materials, this topper ensures both style and durability, creating the perfect centerpiece for your birthday cake. Elevate your celebration and make a splash with the serene beauty of our Blue Happy Birthday Topper.', 'https://www.cakebox.com/media/catalog/product/cache/1cade5dd1d4a7a6857848d8ed97a4fb4/3/_/3.png', 5, '2024-01-11 12:11:52', '2024-01-11 12:11:52');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Cake'),
(2, 'CupCake'),
(3, 'Wedding'),
(4, 'Treats'),
(5, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `username` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`) VALUES
(1, 'admin@gmail.com', '12345678', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
