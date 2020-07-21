-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2020 at 05:18 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `type` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `contact`, `type`) VALUES
(4, 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', '01521231285', 1),
(5, 'saif', 'saif@gmail.com', '202cb962ac59075b964b07152d234b70', '01824489294', 2);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `logo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `logo`) VALUES
(1, 'LAVA', 'png'),
(9, 'Aarong', 'gif'),
(10, 'Hp', ''),
(11, 'Samsung', ''),
(12, 'Apple', ''),
(13, 'Richman', 'png'),
(14, 'Dorjibari', 'png'),
(15, 'Oppo', ''),
(16, 'KHAZANA', ''),
(17, 'Xiaomi', ''),
(18, 'Dell ', ''),
(19, 'Lenovo ', ''),
(20, ' HP ', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(4, 'Cloth'),
(3, 'Electronic'),
(2, 'Food'),
(5, 'Mens fashion'),
(1, 'Sports'),
(6, 'Womans fashion');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `country_id` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `country_id`) VALUES
(1, 'Comilla', 1),
(2, 'Dhaka', 1),
(3, 'Islamabad', 3),
(4, 'Rangpur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`) VALUES
(1, 'Black'),
(4, 'Blue'),
(5, 'Red'),
(6, 'Yellow');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'Bangladesh'),
(2, 'India'),
(4, 'Nepal'),
(3, 'Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `gender` tinyint(3) UNSIGNED NOT NULL,
  `age` tinyint(3) UNSIGNED NOT NULL,
  `address` varchar(255) NOT NULL,
  `city_id` smallint(5) UNSIGNED NOT NULL,
  `country_id` tinyint(3) UNSIGNED NOT NULL,
  `picture` varchar(4) NOT NULL,
  `type` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `contact`, `gender`, `age`, `address`, `city_id`, `country_id`, `picture`, `type`) VALUES
(6, 'customer', 'customer@gmail.com', '202cb962ac59075b964b07152d234b70', '01824489294', 0, 22, 'Cantontment', 1, 1, 'jpg', 3),
(7, 'babu', 'babu@gmail.com', '202cb962ac59075b964b07152d234b70', '01943166842', 0, 25, 'islamabad', 3, 3, 'jpg', 3),
(8, 'Mamun', 'mamun@gmail.com', '202cb962ac59075b964b07152d234b70', '015489635474', 0, 25, 'Ahmedbad', 3, 3, 'jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `orderdate` datetime NOT NULL,
  `delivery_date` datetime NOT NULL,
  `payment_method_id` tinyint(3) UNSIGNED NOT NULL,
  `payment_info` varchar(255) NOT NULL,
  `shipping_status` varchar(100) NOT NULL,
  `shippings_id` tinyint(3) UNSIGNED NOT NULL,
  `total_amount` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderdate`, `delivery_date`, `payment_method_id`, `payment_info`, `shipping_status`, `shippings_id`, `total_amount`) VALUES
(63, '2020-01-06 12:24:50', '2020-01-11 00:00:00', 1, '1523', '1', 61, 124.00),
(64, '2020-01-06 12:29:09', '2020-01-11 00:00:00', 2, '5459', '1', 62, 586.00),
(65, '2020-01-07 17:15:03', '2020-01-12 00:00:00', 1, '14523', '1', 63, 2714.00),
(66, '2020-01-07 17:16:26', '2020-01-12 00:00:00', 3, '5412', '1', 64, 24.00);

-- --------------------------------------------------------

--
-- Table structure for table `order_dtails`
--

CREATE TABLE `order_dtails` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_stock_id` smallint(5) UNSIGNED NOT NULL,
  `quantity` tinyint(3) UNSIGNED NOT NULL,
  `vat` tinyint(3) UNSIGNED NOT NULL,
  `discount` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_dtails`
--

INSERT INTO `order_dtails` (`id`, `order_id`, `product_stock_id`, `quantity`, `vat`, `discount`) VALUES
(42, 63, 371, 2, 10, 0),
(43, 64, 428, 2, 15, 0),
(44, 65, 359, 2, 15, 2),
(45, 66, 383, 2, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `details` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`id`, `name`, `details`) VALUES
(1, 'Cash', 'lll'),
(2, 'Bank transfers', 'Bank'),
(3, 'Paypal', 'PayPal charges transaction fees both into and out '),
(4, 'Bkash', 'bKash is a mobile financial service in Bangladesh ');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` float(8,2) NOT NULL,
  `discount` tinyint(4) UNSIGNED DEFAULT NULL,
  `vat` tinyint(4) UNSIGNED NOT NULL,
  `unit_id` tinyint(3) UNSIGNED NOT NULL,
  `brand_id` smallint(5) UNSIGNED NOT NULL,
  `subcategory_id` mediumint(8) UNSIGNED NOT NULL,
  `picture1` varchar(4) DEFAULT NULL,
  `picture2` varchar(4) DEFAULT NULL,
  `picture3` varchar(4) DEFAULT NULL,
  `picture4` varchar(4) DEFAULT NULL,
  `picture5` varchar(4) DEFAULT NULL,
  `default_picture` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `discount`, `vat`, `unit_id`, `brand_id`, `subcategory_id`, `picture1`, `picture2`, `picture3`, `picture4`, `picture5`, `default_picture`) VALUES
(98, 'OPPO F11', 750.00, 5, 15, 2, 15, 1, NULL, NULL, NULL, NULL, NULL, 'jpg'),
(99, 'Leather bag', 10.00, 10, 12, 2, 9, 12, NULL, NULL, NULL, NULL, NULL, 'jpg'),
(100, 'Samsung Galaxy M30s', 650.00, 0, 15, 2, 11, 1, NULL, NULL, NULL, NULL, NULL, 'jpg'),
(102, ' Apple iPhone XR', 850.00, 0, 12, 2, 12, 1, NULL, NULL, NULL, NULL, NULL, 'jpg'),
(103, ' Apple iPhone 11 Pro Max', 1200.00, 2, 15, 2, 12, 1, NULL, NULL, NULL, NULL, NULL, 'jpg'),
(104, 'House of Quirk Toiletry Bag - Navy Blue', 35.00, 0, 5, 2, 14, 12, NULL, NULL, NULL, NULL, NULL, 'jpg'),
(105, ' House of Quirk Travel Shoe Bag Organizer - Navy B', 25.00, 0, 10, 2, 13, 12, NULL, NULL, NULL, NULL, NULL, 'jpg'),
(106, 'Indian Semi Gadowal Saree', 52.00, 0, 10, 2, 16, 16, NULL, NULL, NULL, NULL, NULL, 'jpg'),
(107, 'Indian sari', 20.00, 0, 15, 2, 16, 16, NULL, NULL, NULL, NULL, NULL, 'jpg'),
(108, 'Haf Silk Hand Boutique Tater Saree ', 50.00, 0, 12, 2, 14, 16, NULL, NULL, NULL, NULL, NULL, 'jpg'),
(109, 'Andi Cotton Hand Boutique Tater Saree', 100.00, 0, 12, 2, 14, 16, NULL, NULL, NULL, NULL, NULL, 'jpg'),
(110, 'Khaki Twill Gabardine Pant for Men', 6.00, 0, 10, 2, 13, 15, NULL, NULL, NULL, NULL, NULL, 'jpg'),
(111, 'New Fashion, Mens Twill Gabardine Pants', 10.00, 2, 10, 2, 13, 15, NULL, NULL, NULL, NULL, NULL, 'jpg'),
(112, 'TERRANOVA LADIES WOMENS SKINNY ', 12.00, 0, 12, 2, 14, 15, NULL, NULL, NULL, NULL, NULL, 'jpg'),
(113, 'Fashion Sutra Womens Denim Slim Fit Stretch Jogger', 25.00, 0, 10, 2, 14, 15, NULL, NULL, NULL, NULL, NULL, 'jpg'),
(115, 'Xiaomi Mi A3', 210.00, 10, 15, 2, 17, 1, NULL, NULL, NULL, NULL, NULL, 'jpg'),
(116, 'Dell Vostro 3480', 250.00, 0, 15, 2, 18, 4, NULL, NULL, NULL, NULL, NULL, 'jpg'),
(117, 'Lenovo V145', 350.00, 0, 12, 2, 19, 4, NULL, NULL, NULL, NULL, NULL, 'jpg'),
(119, 'HP Pavilion', 1000.00, 0, 15, 2, 10, 4, NULL, NULL, NULL, NULL, NULL, 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_stock`
--

CREATE TABLE `product_stock` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `product_id` mediumint(8) UNSIGNED NOT NULL,
  `size_id` tinyint(3) UNSIGNED NOT NULL,
  `color_id` tinyint(3) UNSIGNED NOT NULL,
  `stock` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_stock`
--

INSERT INTO `product_stock` (`id`, `product_id`, `size_id`, `color_id`, `stock`) VALUES
(342, 98, 0, 1, 15),
(343, 98, 0, 4, 15),
(344, 98, 0, 5, 15),
(345, 99, 1, 1, 10),
(346, 99, 3, 1, 10),
(347, 99, 1, 4, 10),
(348, 99, 3, 4, 10),
(349, 99, 1, 5, 10),
(350, 99, 3, 5, 10),
(351, 100, 0, 1, 12),
(352, 100, 0, 4, 12),
(353, 101, 0, 1, 10),
(354, 101, 0, 4, 10),
(355, 101, 0, 5, 10),
(356, 102, 0, 1, 10),
(357, 102, 0, 4, 10),
(358, 102, 0, 5, 10),
(359, 103, 0, 1, 10),
(360, 103, 0, 4, 10),
(361, 104, 3, 1, 20),
(362, 104, 4, 1, 20),
(363, 104, 3, 5, 20),
(364, 104, 4, 5, 20),
(365, 105, 3, 1, 25),
(366, 105, 4, 1, 25),
(367, 105, 3, 4, 25),
(368, 105, 4, 4, 25),
(369, 105, 3, 5, 25),
(370, 105, 4, 5, 25),
(371, 106, 0, 1, 25),
(372, 106, 0, 5, 25),
(373, 107, 0, 1, 30),
(374, 107, 0, 4, 30),
(375, 107, 0, 5, 30),
(376, 108, 0, 1, 50),
(377, 108, 0, 4, 50),
(378, 108, 0, 5, 50),
(379, 109, 0, 1, 20),
(380, 109, 0, 4, 20),
(381, 109, 0, 5, 20),
(382, 109, 0, 6, 20),
(383, 110, 5, 1, 20),
(384, 110, 3, 1, 20),
(385, 110, 4, 1, 20),
(386, 110, 5, 5, 20),
(387, 110, 3, 5, 20),
(388, 110, 4, 5, 20),
(389, 110, 5, 6, 20),
(390, 110, 3, 6, 20),
(391, 110, 4, 6, 20),
(392, 111, 0, 1, 25),
(393, 111, 0, 4, 25),
(394, 111, 0, 5, 25),
(395, 111, 0, 6, 25),
(396, 112, 1, 1, 10),
(397, 112, 5, 1, 10),
(398, 112, 3, 1, 10),
(399, 112, 1, 4, 10),
(400, 112, 5, 4, 10),
(401, 112, 3, 4, 10),
(402, 112, 1, 5, 10),
(403, 112, 5, 5, 10),
(404, 112, 3, 5, 10),
(405, 112, 1, 6, 10),
(406, 112, 5, 6, 10),
(407, 112, 3, 6, 10),
(408, 113, 1, 1, 15),
(409, 113, 5, 1, 15),
(410, 113, 3, 1, 15),
(411, 113, 1, 4, 15),
(412, 113, 5, 4, 15),
(413, 113, 3, 4, 15),
(414, 113, 1, 5, 15),
(415, 113, 5, 5, 15),
(416, 113, 3, 5, 15),
(426, 115, 0, 1, 20),
(427, 115, 0, 4, 20),
(428, 116, 0, 0, 15),
(429, 117, 0, 0, 20),
(431, 119, 0, 0, 20);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `product_id` mediumint(8) UNSIGNED NOT NULL,
  `customer_id` smallint(5) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `ratings` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `customer_id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `country` tinyint(4) NOT NULL,
  `address` varchar(255) NOT NULL,
  `payment_methodid` tinyint(4) NOT NULL,
  `transaction_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `customer_id`, `name`, `email`, `contact`, `country`, `address`, `payment_methodid`, `transaction_id`) VALUES
(61, 4, 'Abdul Alim', 'alim@gmail.com', '01881099963', 1, 'Serajgong', 1, '1523'),
(62, 7, 'Mahbub', 'Mahbub@gmail.com', '01881099963', 1, 'Serajgong', 2, '5459'),
(63, 6, 'hasan', 'hasan@gmail.com', '01881099963', 1, 'Khulna', 1, '14523'),
(64, 6, 'Alim', 'alim@gmail.com', '01824489294', 1, 'serajgong', 3, '5412');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`) VALUES
(2, 'L'),
(1, 'M'),
(5, 'S'),
(3, 'XL'),
(4, 'XXL');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `categorie_id` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `categorie_id`) VALUES
(1, 'Mobile', 3),
(2, 'Computer', 3),
(3, 'Drink', 2),
(4, 'Laptop', 3),
(5, 'Cloth', 5),
(8, 'shoe', 5),
(12, 'Bag', 5),
(13, 'T-shirt', 5),
(14, 'Shirt', 5),
(15, 'Pant', 5),
(16, 'Sari', 6),
(17, 'Three piece', 6);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`) VALUES
(1, 'Kg'),
(2, 'Pice');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `country_id` (`country_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_method_id` (`payment_method_id`),
  ADD KEY `shippings_id` (`shippings_id`);

--
-- Indexes for table `order_dtails`
--
ALTER TABLE `order_dtails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_stock_id` (`product_stock_id`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unit_id` (`unit_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `subcategory_id` (`subcategory_id`);

--
-- Indexes for table `product_stock`
--
ALTER TABLE `product_stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `name_2` (`name`),
  ADD UNIQUE KEY `name_3` (`name`),
  ADD KEY `categorie_id` (`categorie_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `order_dtails`
--
ALTER TABLE `order_dtails`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `product_stock`
--
ALTER TABLE `product_stock`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=432;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `customers_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_method` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`shippings_id`) REFERENCES `shippings` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_ibfk_4` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
