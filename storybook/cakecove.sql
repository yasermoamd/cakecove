-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 24, 2024 at 03:36 PM
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
-- Database: `cakecove`
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
  `product_image` text,
  `categoryID` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `session_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `quantity`, `session_id`) VALUES
(1, 2, 1, '2rplle2on0shibbvgvrggn92td'),
(2, 3, 1, 'qdp699qc1solqj416embv10hll'),
(3, 2, 3, '7e472561hoqim7cmfm6pu49f7j');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
