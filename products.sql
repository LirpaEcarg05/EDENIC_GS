-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2021 at 10:41 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `created`, `modified`, `status`) VALUES
(1, 'April Grace', 'Diez', 'aprilgracediez@gmail.com', '+639483283180', 'Caputatan Norte, Medellin, Cebu', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(2, 'April Grace', 'Diez', 'aprilgracediez@gmail.com', '+639483283180', 'Caputatan Norte, Medellin, Cebu', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(3, 'Daryll', 'vildosola', 'daryllvildosola165@gmail.com', '0948328318', 'malabuyoc', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(4, 'Jeric', 'Baterna', 'jeric@gmail.com', '0948328318', 'Caputatan Norte, Medellin, Cebu', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `grand_total` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `status` enum('Pending','Completed','Cancelled') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `grand_total`, `created`, `status`) VALUES
(1, 1, 0.00, '2021-05-02 10:34:30', 'Pending'),
(2, 2, 0.00, '2021-05-02 10:48:41', 'Pending'),
(3, 3, 5.00, '2021-05-02 12:53:47', 'Pending'),
(4, 4, 3863.00, '2021-05-02 21:32:10', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(1, 1, 1, 2),
(2, 2, 1, 2),
(3, 3, 2, 1),
(4, 4, 15, 1),
(5, 4, 14, 2),
(6, 4, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'parsley', '3DcAM01', 'img/product-img/herbs/product31.jpg', 1500.00),
(2, 'Mint', 'USB02', 'img/product-img/herbs/product32.jpg', 800.00),
(3, 'Dill', 'CN03', 'img/product-img/herbs/product33.jpg', 300.00),
(4, 'Rosemary', 'LPN45', 'img/product-img/herbs/product34.jpg', 800.00),
(5, 'Lemon Verbana', '3DcAM02', 'img/product-img/herbs/product35.jpg', 1200.00),
(6, 'Money Tree', 'USB01', 'img/product-img/indoor/product21.jpg', 900.00),
(7, 'Fiddle Leaf Fig', 'Sc13', 'img/product-img/indoor/product22.jpg', 500.00),
(8, 'Rubber plant', 'BB46', 'img/product-img/indoor/product23.jpg', 1000.00),
(9, 'Bamboo Palm', 'Bpa24', 'img/product-img/indoor/product24.jpg', 5000.00),
(10, 'Snake Plant', 'Splnt25', 'img/product-img/indoor/product25.jpg', 245.00),
(11, 'Caladium', 'Cldm26', 'img/product-img/outdoor/product26.jpg', 2300.00),
(12, 'Coleus', 'Cls7', 'img/product-img/outdoor/product27.jpg', 1100.00),
(13, 'Tropical Hibiscus', 'THs8', 'img/product-img/outdoor/product28.jpeg', 9065.00),
(14, 'Geranium Plant', 'gPnt9', 'img/product-img/outdoor/product29.jpg', 765.00),
(15, 'Boxwood and Myrtle', 'bAdnM03', 'img/product-img/outdoor/product30.jpg', 1233.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
