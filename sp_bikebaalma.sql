-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2025 at 04:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp_bikebaalma`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `SN` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bannedaccount` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userid`, `username`, `email`, `password`, `bannedaccount`) VALUES
(1, 'trossard', 'trossard@gmail.com', '123', 0),
(2, 'Saka', 'saka@gmail.com', '321', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicleinfo`
--

CREATE TABLE `vehicleinfo` (
  `vehicleid` int(11) NOT NULL,
  `vehiclename` varchar(255) NOT NULL,
  `vehicletype` varchar(100) NOT NULL,
  `cc` int(11) DEFAULT NULL,
  `mileage` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `availability` varchar(10) DEFAULT NULL,
  `datein` date DEFAULT NULL,
  `dateout` date DEFAULT NULL,
  `renteduser` varchar(255) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `totalprice` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicleinfo`
--

INSERT INTO `vehicleinfo` (`vehicleid`, `vehiclename`, `vehicletype`, `cc`, `mileage`, `price`, `availability`, `datein`, `dateout`, `renteduser`, `contact`, `email`, `photo1`, `photo2`, `photo3`, `photo4`, `totalprice`) VALUES
(2, 'vr150', 'Moterbike', 150, 35, 150.00, 'Booked', '2025-03-03', '2025-03-04', 'Saka', '1111111111', 'trossard@gmail.com', 'vr1.jpeg', 'vr2.jpeg', 'vr3.jpeg', 'vr4.jpeg', 3600.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `vehicleinfo`
--
ALTER TABLE `vehicleinfo`
  ADD PRIMARY KEY (`vehicleid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicleinfo`
--
ALTER TABLE `vehicleinfo`
  MODIFY `vehicleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
