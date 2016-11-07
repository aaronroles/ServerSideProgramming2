-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2016 at 03:07 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopping`
--
CREATE DATABASE IF NOT EXISTS `shopping` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `shopping`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `productId` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(30) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productDesc` varchar(100) NOT NULL,
  `productImg` varchar(120) NOT NULL,
  PRIMARY KEY (`productId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `productName`, `productPrice`, `productDesc`, `productImg`) VALUES
(1, 'Men''s Outfit', 75, 'This full outfit includes jacket, shirt, trousers and shoes. ', 'https://static.pexels.com/photos/165226/pexels-photo-165226-medium.jpeg'),
(2, 'Men''s Shirt', 15, 'This red and black chequered shirt is also available in blue and black. ', 'https://static.pexels.com/photos/24257/pexels-photo-24257-medium.jpg'),
(3, 'Women''s Summer Dress', 30, 'Also available in yellow. ', 'https://static.pexels.com/photos/160826/girl-dress-bounce-nature-160826-medium.jpeg'),
(4, 'Men''s Ties', 10, 'Wide range of ties.', 'https://static.pexels.com/photos/63580/neckties-cravats-ties-fashion-63580-medium.jpeg'),
(5, 'Women''s Shirts', 18, 'Short sleeved or long sleeved options.', 'https://static.pexels.com/photos/58592/pexels-photo-58592-medium.jpeg'),
(6, 'Women''s Winter Outfit', 50, 'Jacket, jumper, gloves and scarf.', 'https://static.pexels.com/photos/54202/pexels-photo-54202-medium.jpeg'),
(7, 'Gold and White Watch', 40, 'Luxurious gold and white round watch.', 'https://static.pexels.com/photos/24006/pexels-photo-24006-medium.jpg'),
(8, 'Owl Key Chain', 5, 'Pink, gold and silver owl keychain with diamond accessory.', 'https://static.pexels.com/photos/69463/sowa-key-ring-keychain-key-ring-pendant-69463-medium.jpeg'),
(9, 'Speakers', 30, 'Bluetooth multimedia speakers.', 'https://static.pexels.com/photos/191877/pexels-photo-191877-medium.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `password`, `email`, `firstName`, `lastName`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '', 'Admin', 'User'),
(2, 'aroles', '2f0c45013479e3bec40d22d0ebf078c5a9f62ac7', 'aroles@mail.com', 'Aaron', 'Roles'),
(3, 'sineadcooney', '3b4e0e7deef2de1782874b6e14b8659d096a9f1e', 'sineadc@gmail.com', 'Sinead', 'Cooney'),
(4, 'herrera', 'f42d27c2fcaedfff2d78cd61a7678143c532f75c', 'herrera@gmail.com', 'Ander', 'Herrera'),
(6, 'mata8', 'f05a56811055218bff95d14ba319faeef905d3f0', 'jmata@gmail.com', 'Juan', 'Mata');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
