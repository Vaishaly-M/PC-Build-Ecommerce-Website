-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 12, 2024 at 05:19 PM
-- Server version: 8.0.21
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nichol_pcbuild`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(500) NOT NULL,
  `admin_password` varchar(200) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `order_Date` datetime NOT NULL,
  `paymnet_id` int NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `TransactionDate` datetime NOT NULL,
  `product_ids` varchar(500) NOT NULL,
  `product_quantity` varchar(500) NOT NULL,
  `Total_Amount` varchar(500) NOT NULL,
  `status` varchar(200) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `pdt_id` int NOT NULL AUTO_INCREMENT,
  `pdt_name` varchar(200) CHARACTER SET utf8mb4,
  `pdt_price` int NOT NULL,
  `pdt_img` varchar(200) CHARACTER SET utf8mb4,
  `pdt_ctg` int NOT NULL,
  `pdt_stock` int NOT NULL,
  `pdt_status` tinyint NOT NULL,
  PRIMARY KEY (`pdt_id`)
) ENGINE=MyISAM AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pdt_id`, `pdt_name`, `pdt_price`, `pdt_img`, `pdt_ctg`, `pdt_stock`, `pdt_status`) VALUES
(7, 'INTEL CELERON G5920', 9050, 'cpu22.png', 2, 5, 1),
(6, 'RYZEN 5 PROCESSOR - AMD 5600X', 9950, 'cpu6.png', 2, 5, 1),
(5, 'RYZEN 5 PROCESSOR', 7500, 'cpu4.png', 2, 5, 1),
(4, 'AMD RYZEN 9 5950X', 8500, 'cpu5.png', 2, 5, 1),
(3, 'AMD RYZEN 5-5600G', 9050, 'cpu4.png', 2, 5, 1),
(1, 'INTEL CORE-i9', 7040, 'cpu1.png', 2, 5, 1),
(2, 'I5 PROCESSOR - INTEL', 7050, 'cpu22.png', 2, 5, 1),
(9, 'I5 PROCESSOR - INTEL 10400F 2.9GHZ', 8050, 'cpu1.png', 2, 5, 1),
(10, 'GeForce RTX 4070 Ti', 9000, 'gpu (1).png', 1, 5, 1),
(12, 'GeForce RTX 3060 Ti', 1047, 'gpu (3).png', 1, 5, 1),
(13, 'GeForce RTX 3080', 7458, 'gpu (4).png', 1, 5, 1),
(14, 'GeForce RTX 3090 Ti', 1050, 'gpu (5).png', 1, 5, 1),
(15, 'GeForce RTX 4090', 6580, 'gpu (6).png', 1, 5, 1),
(16, 'GeForce RTX 3080 12 GB', 90000, 'gpu (7).png', 1, 5, 1),
(17, 'Radeon RX 7900 XTX', 9950, 'gpu (8).png', 1, 5, 1),
(18, 'GeForce RTX 3070 Ti', 8000, 'gpu (9).png', 1, 5, 1),
(19, 'GeForce RTX 3070 Ti', 8000, 'gpu (9).png', 1, 5, 1),
(25, 'Gigabyte A620M Gaming X', 9950, 'MB (6).png', 3, 5, 1),
(24, 'Gigabyte A620M Gaming X AX', 7500, 'MB (5).png', 3, 5, 1),
(23, 'Gigabyte B650M K', 8500, 'MB (4).png', 3, 5, 1),
(22, 'ASUS Pro B650M-CT-CSM', 9050, 'MB (3).png', 3, 5, 1),
(21, 'MicroATX', 7050, 'MB (2).png', 3, 5, 1),
(20, 'MicroATX', 7040, 'MB (1).png', 3, 5, 1),
(26, 'MSI Pro A620M-E', 9050, 'MB (7).png', 3, 5, 1),
(27, 'ASRock A620M-HDV/M.2', 9000, 'MB (8).png', 3, 5, 1),
(28, 'ASRock A620M Pro RS WiFi', 8050, 'MB (9).png', 3, 5, 1),
(29, 'iCUE 4000D RGB Airflow', 7000, 'CASE1 (1).png', 4, 5, 1),
(30, 'iCUE 4000X RGB Tempered', 9000, 'CASE1 (2).png', 4, 5, 1),
(31, 'iCUE 4000X RGB - White', 1150, 'CASE1 (3).png', 4, 5, 1),
(32, '4000D Tempered Glass', 10000, 'CASE1 (4).png', 4, 5, 1),
(33, '000D Airflow Tempered Glass', 7500, 'CASE1 (5).png', 4, 5, 1),
(34, '4000D Airflow- White', 9950, 'CASE1 (6).png', 4, 5, 1),
(35, 'iCUE 4000D RGB AIRFLOW', 9050, 'CASE1 (7).png', 4, 5, 1),
(36, 'CUE 4000D RGB AIRFLOW', 9000, 'CASE1 (8).png', 4, 5, 1),
(37, '4000D Tempered Glass Mid-Tower - Black', 8050, 'CASE1 (9).png', 4, 5, 1),
(38, 'DeepCool LT720 Cooling Kit', 7000, 'COOLING1 (1).png', 5, 5, 1),
(39, 'Lian Li Galahad 360mM Cooling Kit', 9000, 'COOLING1 (2).png', 5, 5, 1),
(40, 'Corsair iCUE H150i ELITE LCD XT', 1150, 'COOLING1 (3).png', 5, 5, 1),
(41, 'DeepCool LT520 Cooling Kit', 10000, 'COOLING1 (4).png', 5, 5, 1),
(42, 'Lian Galahad 360mm Cooling Kit', 7500, 'COOLING1 (5).png', 5, 5, 1),
(43, 'Corsair iCUE H150 CAPELLIX', 9950, 'COOLING1 (6).png', 5, 5, 1),
(44, 'NZXT Kraken 240mm Cooling Kit', 9050, 'COOLING1 (7).png', 5, 5, 1),
(45, 'Corsair iCUE Cooling Kit', 9000, 'COOLING1 (8).png', 5, 5, 1),
(46, '5 stars DeepCool LS520 High-Performance', 8050, 'COOLING1 (9).png', 5, 5, 1),
(47, 'NETAC BASIC 8GB DDR4 3200MHZ', 7000, 'MEMORY1 (1).png', 6, 5, 1),
(48, 'NETAC SHADOW 16GB DDR4 3200MHZ', 9000, 'MEMORY1 (2).png', 6, 5, 1),
(49, 'NETAC SHADOW RGB 16GB(8GB*2)', 1150, 'MEMORY1 (3).png', 6, 5, 1),
(50, 'DDR4 MEMORY - TEAM 4GB ELITE', 10000, 'MEMORY1 (4).png', 6, 5, 1),
(51, 'DDR4 MEMORY - TEAM 8GB ELITE', 7500, 'MEMORY1 (5).png', 6, 5, 1),
(52, 'DDR4 MEMORY - TEAM DELTA R 8GB', 9950, 'MEMORY1 (6).png', 6, 5, 1),
(53, 'DDR4 MEMORY - TEAM 8GB VULCAN', 9050, 'MEMORY1 (7).png', 6, 5, 1),
(54, 'DDR4 MEMORY - TEAM DELTA R 16GB', 9000, 'MEMORY1 (8).png', 6, 5, 1),
(55, 'DDR4 MEMORY - TEAM 16GB VULCAN', 8050, 'MEMORY1 (9).png', 6, 5, 1),
(56, 'DESKTOP HDD - WD 1TB BLUEv (2y)', 7000, 'storeage1 (1).png', 7, 5, 1),
(57, 'DESKTOP HDD - WD 500GB BLUE 2Y', 9000, 'storeage1 (2).png', 7, 5, 1),
(58, 'WD 4TB BLUE DESKTOP (2y)', 1150, 'storeage1 (3).png', 7, 5, 1),
(59, 'DESKTOP HDD - WD 2TB PURPLE(2y)', 10000, 'storeage1 (4).png', 7, 5, 1),
(60, 'HDD - WD 2TB BLUE(2y)', 7500, 'storeage1 (5).png', 7, 5, 1),
(61, 'WD WD60PURZ 6TB HDD PURPLE(3y)', 9950, 'storeage1 (6).png', 7, 5, 1),
(62, 'DESKTOP HDD - WD 4TB PURPLE (3Y)', 9050, 'storeage1 (7).png', 7, 5, 1),
(63, 'WD 4TB PURPLE DESKTOP HDD(2Y)', 9000, 'storeage1 (8).png', 7, 5, 1),
(64, 'WD 1TB PURPLE DESKTOP HDD(2y)', 8050, 'storeage1 (9).png', 7, 5, 1),
(65, 'POWER SUPPLY - GAMEMAX GM-500 500W', 7000, 'psu1 (1).png', 8, 5, 1),
(66, 'POWER SUPPLY - GAMEMAX GE-700 (700W)', 9000, 'psu1 (2).png', 8, 5, 1),
(67, 'POWER SUPPLY - GAMEMAX GM-600G (600W)', 1150, 'psu1 (3).png', 8, 5, 1),
(68, 'POWER SUPPLY - GAMEMAX RGB-550W', 10000, 'psu1 (4).png', 8, 5, 1),
(69, 'POWER SUPPLY - GAMEMAX RGB-850', 7500, 'psu1 (5).png', 8, 5, 1),
(70, 'ASUS ROG-STRIX-750G 750W', 9950, 'psu1 (6).png', 8, 5, 1),
(71, 'SUS TUF GAMING POWER SUPPLY', 9050, 'psu1 (7).png', 8, 5, 1),
(72, 'ASUS TUF-GAMING-550B 550W', 9000, 'psu1 (8).png', 8, 5, 1),
(73, 'WD 1TB PURPLE DESKTOP HDD(2y)', 8050, 'psu1 (9).png', 8, 5, 1),
(74, 'COOLING SYSTEM - GAMEMAX ICEBERG360', 7000, 'fans1 (1).png', 9, 5, 1),
(75, 'ICEBERG120-RAINBOW LIQUID', 9000, 'fans1 (2).png', 9, 5, 1),
(76, 'CHILL120-ARGB LIQUID COOLER', 1150, 'fans1 (3).png', 9, 5, 1),
(77, 'ICEBERG120-RGB LIQUID COOLER', 10000, 'fans1 (4).png', 9, 5, 1),
(78, 'GAMEMAX GAMMA 300 RAINBOW', 7500, 'fans1 (5).png', 9, 5, 1),
(79, 'GAMEMAX Gamma 500-RAINBOW ARGB', 9950, 'fans1 (6).png', 9, 5, 1),
(80, 'COOLING SYSTEM - GAMEMAX ICEBERG240', 9050, 'fans1 (7).png', 9, 5, 1),
(81, 'GAMEMAX ICEBERG240-RAINBOW', 9000, 'fans1 (8).png', 9, 5, 1),
(82, 'GAMEMAX GAMMA 200 RGB', 8050, 'fans1 (9).png', 9, 5, 1),
(83, 'OS SOFTWARE - MICROSOFT WINDOWS 10 PRO', 7000, 'os1 (1).png', 10, 5, 1),
(84, 'Microsoft Windows 11 Pro 64-bit', 9000, 'os1 (2).png', 10, 5, 1),
(85, 'Microsoft Windows 11 Home (USB)', 1150, 'os1 (3).png', 10, 5, 1),
(86, 'Microsoft Windows 11 Pro 64-bit, DVD', 10000, 'os1 (4).png', 10, 5, 1),
(87, 'Microsoft Windows 11 Pro Upgrade', 7500, 'os1 (5).png', 10, 5, 1),
(88, 'Microsoft Windows 11 Pro (USB)', 9950, 'os1 (6).png', 10, 5, 1),
(89, 'Microsoft Windows 11 Professional 64-bit', 9050, 'os1 (7).png', 10, 5, 1),
(90, 'Microsoft Windows 11 Home 64-bit', 9000, 'os1 (8).png', 10, 5, 1),
(91, 'Microsoft Windows 11 Home 64-Bit', 8050, 'os1 (9).png', 10, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

DROP TABLE IF EXISTS `product_category`;
CREATE TABLE IF NOT EXISTS `product_category` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `category_status` int NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`category_id`, `category_name`, `category_status`) VALUES
(1, 'GPU', 1),
(2, 'CPU', 1),
(3, 'Motherboard', 1),
(4, 'CASE', 1),
(5, 'Cooling', 1),
(6, 'Memory', 1),
(7, 'Storage', 1),
(8, 'PSU', 1),
(9, 'FANS', 1),
(10, 'OS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(60) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(60) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(7, 'nich01', 'nishanila930@gmail.com', '456'),
(6, 'Nich', 'nishanila930@gmail.com', '123'),
(4, 'Nicholas ', 'user@gmail.com', '12345'),
(5, 'Nich', 'nichsharvi@gmail.com', '123@#com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
