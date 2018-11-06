-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2018 at 03:16 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommercecapstone2`
--

-- --------------------------------------------------------

--
-- Table structure for table `Categories`
--

CREATE TABLE `Categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Categories`
--

INSERT INTO `Categories` (`id`, `name`) VALUES
(1, 'Mods'),
(2, 'Juice'),
(3, 'Accessories'),
(4, 'Atomizers');

-- --------------------------------------------------------

--
-- Table structure for table `Items`
--

CREATE TABLE `Items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `price` decimal(18,2) NOT NULL,
  `category_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Items`
--

INSERT INTO `Items` (`id`, `name`, `description`, `image_path`, `price`, `category_id`) VALUES
(1, 'Aegis Legend Mod', 'Mod', '../assets/images/aegis.jpg', '2300.00', 1),
(2, 'Silvisworks', 'Juice', '../assets/images/silvisworks.jpg', '250.00', 2),
(3, 'iClouds', 'juice', '../assets/images/iclouds.jpg', '300.00', 2),
(4, 'Coil kit', 'Complete tools for coiling', '../assets/images/coilkit.jpg', '350.00', 3),
(5, 'Wismec Active', 'Wismec Active with bluetooth speaker', '../assets/images/wismecactive.jpg', '2500.00', 1),
(6, 'VapeBreedV2', 'Atomizer', '../assets/images/vapebreedv2.jpg', '300.00', 4),
(7, 'Minifit Pod', 'Chill vaping now made affordable', '../assets/images/minifitpods.jpg', '800.00', 1),
(8, 'Nitro Juice', 'NFS Nitro', '../assets/images/nfsnitrojuice.jpg', '300.00', 2),
(9, 'Sony VTC Batteries', '1 Pair', '../assets/images/sonyvtc.jpg', '300.00', 3),
(10, 'US1 V2 RDA', 'Available in RAINBOW color', '../assets/images/us1v2rda.jpg', '500.00', 4),
(11, 'Goon RDA', 'Gold, Silver & Black', '../assets/images/goonrda.jpg', '250.00', 4),
(12, 'Ceramic Tweezers', 'Make your coiling and wicking life easier', '../assets/images/ceramictweezers.jpg', '250.00', 3),
(13, 'Limitless RDTA', 'Tank / Dripper Hybrid', '../assets/images/limitlessrdta.jpg', '1500.00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_code` varchar(255) NOT NULL,
  `purchase_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status_id` int(255) NOT NULL,
  `payment_mode_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Orders_item`
--

CREATE TABLE `Orders_item` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_modes`
--

CREATE TABLE `payment_modes` (
  `id` int(11) NOT NULL,
  `namr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Statuses`
--

CREATE TABLE `Statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `address`) VALUES
(1, 'bvera', '$2y$10$5ocCQk4gpC2xctCYjUnha.l0WdyvCXdWqylFyd7TxUmZvRX5e6hJK', 'Brandon', 'Vera', 'test@mail.com', '1234 Test'),
(2, 'bvera2', '$2y$10$Vmfxhv.epm3zkGr9GYap9e7VNv0HG18Rgyi4o7lPqrHsoQxVzGQc6', 'Brandon', 'Vera', 'test@mail.com', '1234 Test'),
(3, 'annieareyouokay', '$2y$10$Td65M9iVIxP5KhVpGd.CCObKc/RWCR/oxAkNWQ1Ei4pqUE1cqUn.G', 'test123', 'test123', 'test123@test.com', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Items`
--
ALTER TABLE `Items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Orders_item`
--
ALTER TABLE `Orders_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_modes`
--
ALTER TABLE `payment_modes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Statuses`
--
ALTER TABLE `Statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Categories`
--
ALTER TABLE `Categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Items`
--
ALTER TABLE `Items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `Orders_item`
--
ALTER TABLE `Orders_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



create table orders_items (
    id int NOT NULL AUTO_INCREMENT,
    order_id int,
    item_id int,
    quantity int,
    price decimal(18,2),
    primary key (id),
    foreign key (order_id) references orders (id) on delete restrict on update cascade,
    foreign key (item_id) references Items (id) on delete restrict on update cascade
)