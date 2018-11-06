-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2018 at 07:09 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommercecapstone2palpak`
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
(13, 'Limitless RDTA', 'Tank / Dripper Hybrid', '../assets/images/limitlessrdta.jpg', '1500.00', 4),
(14, 'Aspire Breeze 2', 'New Colors: Gold, Camo and Rainbow', '../assets/images/aspirebreeze2.jpg', '1500.00', 1),
(15, 'Bamskilicious 60ml', '7 Wonders\r\nWaleed\r\nVenom\r\nAntidote\r\nAnti-Venom\r\nCustard', '../assets/images/bamskill.jpg', '400.00', 2),
(16, 'Battery wraps', 'Premium grade', '../assets/images/batterywraps.jpg', '40.00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `transaction_code` varchar(255) NOT NULL,
  `purchase_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status_id` int(255) DEFAULT NULL,
  `payment_mode_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders_items`
--

CREATE TABLE `orders_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_modes`
--

CREATE TABLE `payment_modes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Statuses`
--

CREATE TABLE `Statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Statuses`
--

INSERT INTO `Statuses` (`id`, `name`) VALUES
(1, 'pending');

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
(3, 'annieareyouokay', '$2y$10$Td65M9iVIxP5KhVpGd.CCObKc/RWCR/oxAkNWQ1Ei4pqUE1cqUn.G', 'test123', 'test123', 'test123@test.com', 'test'),
(4, 'Testuser1', '$2y$10$VfRg3G0fwNkDGfpajO6wc.ffOvD49yLm4cT3/yqhn5mnL.IpH0qlq', 'test', 'test', 'test@test.com', 'test'),
(5, 'Admin1234', '$2y$10$zuUm/4yTv9GvDZCRuD21muAKInTcDqr2NzV/ZT6NCk7CQCt1wKQ3i', 'JB', 'Sy', 'colonelspacepenguin@gmail.com', 'Test');

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `payment_mode_id` (`payment_mode_id`);

--
-- Indexes for table `orders_items`
--
ALTER TABLE `orders_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `item_id` (`item_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `orders_items`
--
ALTER TABLE `orders_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`payment_mode_id`) REFERENCES `payment_modes` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `orders_items`
--
ALTER TABLE `orders_items`
  ADD CONSTRAINT `orders_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `Items` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
