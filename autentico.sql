-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2018 at 10:07 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autentico`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sellerId` int(11) NOT NULL,
  `productType` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `imagePath` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `sellerId`, `productType`, `description`, `imagePath`, `price`) VALUES
(1, 'Redmi Y2 (Gold, 4GB RAM, 64GB Storage)', 1, 1, 'Camera: 12+5 MP Dual rear camera with AI-based Beautify 4.0 | 16 MP front AI-Selfie camera with LED selfie light\r\nDisplay: 15.2 centimeters (5.99-inch) HD+ full screen display with 1440x720 pixels and 18:9 aspect ratio\r\nMemory, Storage & SIM: 4GB RAM | 64GB storage expandable up to 256GB with dedicated slot | Dual nano SIM with dual standby (4G+4G)\r\nOperating System and Processor: Android v8.1 Oreo operating system with 2.0 GHz Cortex-A53 Qualcomm MSM8953 Snapdragon 625 Octa-core processor\r\nBatt', 'https://images-na.ssl-images-amazon.com/images/I/81MWLaSqduL._SL1500_.jpg', 10999),
(2, 'Mi A2 (Black, 4GB RAM, 64GB Storage)', 1, 1, 'Camera: 12+20 MP Dual rear camera | 20 MP front camera\r\nDisplay: 15.21 centimetres (5.99-inch) Full HD+ capacitive touchscreen display with 2160x1080 pixels and 403 ppi pixel density | 2.5D Corning Gorilla Glass 5\r\nMemory, Storage & SIM: 4GB RAM | 64GB storage | Dual nano SIM with dual-standby (4G+4G)\r\nOperating System and Processor: Android v8.1 Oreo operating system with 2.2GHz Qualcomm snapdragon 660 octa core processor\r\nBattery: 3010 mAH lithium Polymer battery\r\nWarranty: 1 year manufacturer', 'https://images-na.ssl-images-amazon.com/images/I/91Dh3ec3EFL._SL1500_.jpg', 14999),
(3, 'Redmi 6 Pro (Black, 3GB RAM, 32GB Storage)', 1, 1, '12MP + 5 MP AI dual camera;5MP front camera\r\nDisplay: 14.8 centimetres (5.84-inch) Full HD+ capacitive touchscreen with 2280x1080 pixels and 432 ppi pixel density ,Height: 149.33mm,Width: 71.68mm,Thickness: 8.75mm,Weight: 178g,\r\nMemory, Storage & SIM: 3GB RAM | 32GB storage expandable up to 256GB | Dual nano SIM with dual-standby (4G+4G)\r\nOperating System and Processor: Android v8.1 Oreo operating system with 2.0GHz Qualcomm snapdragon 625 octa core processor\r\nBattery: 4000 mAH lithium Polymer b', 'https://images-na.ssl-images-amazon.com/images/I/81S25dLMS0L._SL1500_.jpg', 10999),
(4, 'Vivo V9Pro (Nebula Purple, 6GB RAM, Snapdragon 660AIE)', 2, 1, 'Camera: 13+2 MP Dual rear camera with Ultra HD, Live Mode, AI Bokeh, HDR, Face Beauty, AR Stickers and many more | 16 MP AI Selfie camera with Face Beauty, AI HDR, Bokeh effect, Group selfie, Live photo, AR stickers\r\nDisplay: 15.51 centimetres (6.3-inch) FHD+ Fullview display 2.0 and 19:9 aspect ratio, 90 percent screen to body ratio\r\nMemory, Storage & SIM: 6GB RAM | 64GB storage expandable up to 256GB | Dual SIM with dual-standby (4G+4G)\r\nOperating System and Processor: Qualcomm Snapdragon 660A', 'https://images-na.ssl-images-amazon.com/images/I/51QqgdZR%2B2L._SL1200_.jpg', 17990),
(5, 'Moto G5s Plus (Lunar Grey, 4GB RAM, 64GB Storage)', 3, 1, 'Camera: 13+13 MP Dual rear camera with LED flash | 8 MP front camera with flash\r\nDisplay: 13.97 centimeters (5.5-inch) Full HD capacitive touchscreen display with 1080x1920 pixels | Gorilla Glass 3 protection\r\nMemory, Storage & SIM: 4GB RAM | 64GB storage expandable up to 128GB | Dual nano hybrid SIM with dual standby (4G+4G)\r\nOperating System and Processor: Android v7.1 Nougat operating system with 2.0GHz Snapdragon 625 octa core processor\r\nBattery: 3000 mAH lithium ion battery with 15W Turbo c', 'https://images-na.ssl-images-amazon.com/images/I/71N5hSP49AL._SL1374_.jpg', 9999),
(6, 'Moto G6 (Indigo Black, 4GB RAM, 64GB Storage)', 3, 1, 'Camera: 12+5 MP Dual rear cameras with Creative camera system | 16 MP front camera with Low light mode and LED flash\r\nDisplay: 14.5 centimeters (5.7-inch) Full HD+ Max vision display with 1080x2160 pixels and 18:9 aspect ratio\r\nMemory, Storage & SIM: 4GB RAM | 64GB storage expandable up to 256GB | Dual nano SIM with dual standby (4G+4G)\r\nOperating System and Processor: Android v8.0 Oreo operating system with Snapdragon 450 1.8GHz octa core processor\r\nBattery: 3000 mAH lithium ion battery with 15', 'https://images-na.ssl-images-amazon.com/images/I/81uvS%2BU0TcL._SL1500_.jpg', 13999);

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `id` int(11) NOT NULL,
  `productType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`id`, `productType`) VALUES
(1, 'Smartphones');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `review` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `userId`, `productId`, `review`) VALUES
(3, 0, 1, 'Awesome product');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `sellerId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`sellerId`, `name`) VALUES
(1, 'Mi'),
(2, 'Vivo'),
(3, 'Moto');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `signUpDate` datetime NOT NULL,
  `profilePic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstName`, `lastName`, `email`, `password`, `signUpDate`, `profilePic`) VALUES
(1, 'Arnab_Basu', 'Arnab', 'Basu', 'Arnabbasu98@gmail.com', '9517cc8a6e52b7fda0cfa01ef7c84433', '2018-10-12 00:00:00', 'assets/images/profile-pics/dp.png'),
(2, 'qwerty', 'Qwerty', 'Ertyu', 'Qwerty@123.com', '3fc0a7acf087f549ac2b266baf94b8b1', '2018-10-30 00:00:00', 'assets/images/profile-pics/dp.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`sellerId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `producttype`
--
ALTER TABLE `producttype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `sellerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
