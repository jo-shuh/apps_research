-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 03:51 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `10essays`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `expdate` varchar(255) NOT NULL,
  `cvv` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `charged_amount` varchar(255) NOT NULL,
  `processor_response` varchar(255) NOT NULL,
  `narration` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `account_id` varchar(255) NOT NULL,
  `first_6digits` int(255) NOT NULL,
  `last_4digits` int(255) NOT NULL,
  `issuer` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `expiry` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `email`, `country`, `expdate`, `cvv`, `amount`, `currency`, `charged_amount`, `processor_response`, `narration`, `status`, `payment_type`, `created_at`, `account_id`, `first_6digits`, `last_4digits`, `issuer`, `type`, `expiry`, `name`, `phone_number`) VALUES
(1, 'me@gmail.com', 'mhnfds', 'expdate', 'cvv', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', ''),
(2, 'me@gmail.com', 'mhnfds', 'expdate', 'cvv', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', ''),
(3, 'hilaruto0@gmail.com', 'Kenya', 'expdate', 'cvv', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', ''),
(4, 'hilaruto0@gmail.com', 'Kenya', 'expdate', 'cvv', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', ''),
(5, 'DAVY@GMAIL.COM', 'Kenya', 'expdate', 'cvv', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', ''),
(6, 'DAVY@GMAIL.COM', 'Kenya', 'expdate', 'cvv', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', ''),
(7, 'DAVY@GMAIL.COM', 'Kenya', 'expdate', 'cvv', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', ''),
(8, 'regina.nguu@gmail.com', 'Kenya', 'expdate', 'cvv', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', ''),
(9, 'regina.nguu@gmail.com', 'Kenya', 'expdate', 'cvv', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', ''),
(10, 'regina.nguu@gmail.com', 'Kenya', 'expdate', 'cvv', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', ''),
(11, 'hillaryruto@gmail.com', 'Kenya', 'expdate', 'cvv', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', ''),
(12, 'isaiahmuigai@gmail.com', 'Kenya', 'expdate', 'cvv', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', ''),
(13, 'hillaryruto@gmail.com', 'Kenya', 'expdate', 'cvv', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', ''),
(14, '', '', 'expdate', 'cvv', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', ''),
(15, '', '', 'expdate', 'cvv', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', ''),
(16, 'isaiahmuigai@gmail.com', 'Kenya', 'expdate', 'cvv', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', ''),
(17, 'francisngugi518@gmail.com', 'US', 'expdate', 'cvv', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', ''),
(18, 'mainwhatsapp@gmail.com', 'US', 'expdate', 'cvv', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', ''),
(19, '', '', 'expdate', 'cvv', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', ''),
(20, 'charitywambui01@gmail.com', 'US', 'expdate', 'cvv', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', ''),
(21, 'jackiesales@gmail.com', '', 'expdate', 'cvv', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', ''),
(22, '', '', 'expdate', 'cvv', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', ''),
(23, '', '', 'expdate', 'cvv', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', ''),
(24, 'joymart@gmail.com', 'US', 'expdate', 'cvv', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
