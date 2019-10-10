-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 10, 2019 at 03:40 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stickersshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Category_Code` int(11) NOT NULL,
  `Category_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category_Code`, `Category_Name`) VALUES
(1, 'Food'),
(2, 'Fantasy'),
(3, 'Animals');

-- --------------------------------------------------------

--
-- Table structure for table `stickers`
--

CREATE TABLE `stickers` (
  `Stickers_Id` int(11) NOT NULL,
  `Stickers_Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Stickers_Category` int(11) NOT NULL,
  `Stickers_Prix` double NOT NULL,
  `Stickers_Image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stickers`
--

INSERT INTO `stickers` (`Stickers_Id`, `Stickers_Name`, `Stickers_Category`, `Stickers_Prix`, `Stickers_Image`) VALUES
(1, 'Tacos', 1, 3, 'tacos.jpg'),
(2, 'Gauffre', 1, 3, 'gauffre.jpg'),
(3, 'Sushi', 1, 3, 'sushi.jpg'),
(4, 'Krokmou', 2, 3, 'krokmou.jpg'),
(5, 'Moon', 2, 3, 'moon.jpg'),
(6, 'Planet', 2, 3, 'planet.jpg'),
(7, 'Crab', 3, 3, 'crab.jpg'),
(8, 'Panda', 3, 3, 'panda.jpg'),
(9, 'Shark', 3, 3, 'shark.jpg'),
(10, 'Rad Cat', 3, 3, 'cat.jpg'),
(11, 'Pizza', 1, 3, 'pizza.jpg'),
(12, 'Ramen', 1, 3, 'ramen.jpg'),
(13, 'Up and Beyond', 2, 3, 'space.jpg'),
(14, 'Subliminal', 2, 3, 'subliminal.jpg'),
(15, 'Whale', 3, 3, 'whales.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Login_Id` int(11) NOT NULL,
  `Login_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Login_Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Login_Pwd` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Login_Id`, `Login_Name`, `Login_Email`, `Login_Pwd`) VALUES
(1, 'Jean Miche', 'jeanmiche@pouet.fr', 'pouetpouet'),
(2, 'Roger Rabbit', 'rogerrabbit@lapin.fr', 'toutoutou');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Category_Code`);

--
-- Indexes for table `stickers`
--
ALTER TABLE `stickers`
  ADD PRIMARY KEY (`Stickers_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Login_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Category_Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stickers`
--
ALTER TABLE `stickers`
  MODIFY `Stickers_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Login_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
