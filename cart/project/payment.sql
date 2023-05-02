-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 06:26 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `Full_Name` varchar(255) NOT NULL,
  `Phone_Number` varchar(20) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Zip_code` varchar(10) NOT NULL,
  `Card_Holder_Name` varchar(255) NOT NULL,
  `Credit_Card_Number` varchar(20) NOT NULL,
  `Cvv` int(11) NOT NULL,
  `Expiry_Year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `Full_Name`, `Phone_Number`, `Email`, `Address`, `City`, `Zip_code`, `Card_Holder_Name`, `Credit_Card_Number`, `Cvv`, `Expiry_Year`) VALUES
(1, '', '', '', '', '', '', '', '', 0, 0),
(2, '', '', '', '', '', '', '', '', 0, 0),
(3, '', '', '', '', '', '', '', '', 0, 0),
(4, '', '', '', '', '', '', '', '', 0, 0),
(5, '', '', '', '', '', '', '', '', 0, 0),
(6, '', '', '', '', '', '', '', '', 0, 0),
(7, '', '', '', '', '', '', '', '', 0, 0),
(8, '', '', '', '', '', '', '', '', 0, 0),
(9, '', '', '', '', '', '', '', '', 0, 0),
(10, '', '', '', '', '', '', '', '', 0, 0),
(11, '', '', '', '', '', '', '', '', 0, 0),
(12, '', '', '', '', '', '', '', '', 0, 0),
(13, '', '', '', '', '', '', '', '', 0, 0),
(14, '', '', '', '', '', '', '', '', 0, 0),
(15, '', '', '', '', '', '', '', '', 0, 0),
(16, '', '', '', '', '', '', '', '', 0, 0),
(17, '', '', '', '', '', '', '', '', 0, 0),
(18, '', '', '', '', '', '', '', '', 0, 0),
(19, '', '', '', '', '', '', '', '', 0, 0),
(20, 'Hisham Mohamed', '', 'rahma@gmail.com', '12st39 hadeak helwan', 'Cairo', '11731', 'fffffffffffffffffff', '555555555555555555', 555, 2025),
(21, 'romaMohamed', '', 'roma@gmail.com', '12st39 hadeak helwan', 'Cairo', '11731', 'ssssssssssssssssss', '8888888888888888', 888, 2025);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
