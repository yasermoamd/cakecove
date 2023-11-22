CREATE TABLE `products` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(4,2) NOT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `categoryID` INT NOT NULL,
   FOREIGN KEY (categoryID) REFERENCES categories(id),
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `categories` (`id`, `name`) VALUES (1, 'Cake'),(2, 'CupCake'),(3, 'Wedding'),(4, 'Treats'),(5, 'Accessories');

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`, `categoryID`) VALUES
(1, 'Snowballs Caramel(pack of 4)', 6.95, 'Delicious buns, coated Caramel in icing and coconut Caramel and filled with raspberry jam', 'https://frenchvillage.com/cdn/shop/files/snowballimage_720x.jpg', 1),
(2, 'Eton Mess Cake Caramel', 50.00, 'Deeee-licious raspberry & white chocolate sponge with marshmallow buttercream Caramel layers, 100% real irish jam & white chocolate chunks. ', 'https://frenchvillage.com/cdn/shop/products/etonmess_720x.jpg', 2),
(3, 'Kinder Bueno Cake Caramel', 48.50, 'Chocolate cake layered with hazelnut Caramel chocolate ganache and encased in a praline Caramel buttercream icing. ', 'https://frenchvillage.com/cdn/shop/products/Bueno_720x.jpg', 2);
