-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2020 at 11:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_value` int(11) NOT NULL,
  `customer_ID` text COLLATE utf8_unicode_ci NOT NULL,
  `customer_name` text COLLATE utf8_unicode_ci NOT NULL,
  `customer_phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `order_id` int(11) NOT NULL,
  `order_table` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `order_NET` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `time_enter` time NOT NULL,
  `time_exit` time NOT NULL,
  `customer_id` text COLLATE utf8_unicode_ci NOT NULL,
  `product_id` text COLLATE utf8_unicode_ci NOT NULL,
  `staff_id` varchar(7) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `listdetail`
--

CREATE TABLE `listdetail` (
  `detail_id` text COLLATE utf8_unicode_ci NOT NULL,
  `detail_time` time NOT NULL,
  `detail_date` date NOT NULL,
  `product_id` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` text COLLATE utf8_unicode_ci NOT NULL,
  `product_quantity` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `product_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `customer_id` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `q`
--

CREATE TABLE `q` (
  `Q` int(4) NOT NULL,
  `customer_ID` text COLLATE utf8_unicode_ci NOT NULL,
  `queue_date` date NOT NULL,
  `queue_time` time NOT NULL,
  `customer_quantity` varchar(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `RestaurantID` int(11) NOT NULL,
  `restaurantname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`RestaurantID`, `restaurantname`, `fullname`, `username`, `password`, `email`, `address`, `phonenumber`) VALUES
(5, 'milk', 'Milk Wong', 'root', '12345678', 'honey.milky.912@gmail.com', '-', '0902072009'),
(6, 'plao', 'Plao tyr', 'plao', '12345678', 'pl.tanyarat@gmail.com', '-', '0931325232'),
(7, '', '', 'root', '12345678', '', '', ''),
(8, 'MILK_BAR', 'Rawiwan Wongpraserth', 'bar', '12345678', 'honey.milky.912@gmail.com', '-', '0902072009'),
(9, 'phoo', 'Phoo pwn', 'phoo', '000000000', 'ajfucsj', '-', '09kjicjdkfvdv'),
(10, 'Plao-Bar', 'ธัญญรัตน์ ปาลี', 'เพลา', '0987654321', 'pelatyr@gmail.com', '-', '0931325232'),
(11, 'Plao-Bar', 'เพลาาาาาา', 'เพลา', '11111', 'pelatyr@gmail.com', '-', '0931325232'),
(12, '', '', 'blaaaaaa', '1234', '', '', ''),
(13, '', '', 'jbdsbnmd', '00', '', '', ''),
(14, '', '', 'root', '12345678', '', '', ''),
(15, '', '', 'root', '12345678', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `q`
--
ALTER TABLE `q`
  ADD PRIMARY KEY (`Q`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`RestaurantID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `q`
--
ALTER TABLE `q`
  MODIFY `Q` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `RestaurantID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
