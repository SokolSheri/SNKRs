-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 16, 2019 at 02:04 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snkrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `sneaker_id` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cart_item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`sneaker_id`, `user_id`, `cart_item_id`) VALUES
('10NASA', 1, 9),
('8HALLOWEENS', 1, 22),
('8THRONES', 3, 73),
('11WTKD', 3, 74),
('9BREDS', 3, 75),
('10HALLOWEENS', 4, 77),
('10WTKD', 7, 87),
('9NASA', 7, 88);

-- --------------------------------------------------------

--
-- Table structure for table `sneakers_sizes`
--

CREATE TABLE `sneakers_sizes` (
  `sneaker_id` int(11) NOT NULL,
  `sneaker_pic` varchar(15) NOT NULL,
  `sneaker_name` varchar(40) NOT NULL,
  `sneaker_size` int(2) NOT NULL,
  `sneaker_stock` int(3) NOT NULL,
  `sneaker_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sneakers_sizes`
--

INSERT INTO `sneakers_sizes` (`sneaker_id`, `sneaker_pic`, `sneaker_name`, `sneaker_size`, `sneaker_stock`, `sneaker_price`) VALUES
(1, 'mj1.jpg', '8BREDS', 8, 23, 190),
(2, 'mj1.jpg', '9BREDS', 9, 25, 190),
(3, 'mj1.jpg', '10BREDS', 10, 25, 190),
(4, 'mj1.jpg', '11BREDS', 11, 23, 190),
(5, 'lbj1.jpg', '8THRONES', 8, 22, 225),
(6, 'lbj1.jpg', '9THRONES', 9, 25, 225),
(7, 'lbj1.jpg', '10THRONES', 10, 21, 225),
(8, 'lbj1.jpg', '11THRONES', 11, 25, 225),
(9, 'kd1.jpg', '8WTKD', 8, 25, 200),
(10, 'kd1.jpg', '9WTKD', 9, 25, 200),
(11, 'kd1.jpg', '10WTKD', 10, 23, 200),
(12, 'kd1.jpg', '11WTKD', 11, 24, 200),
(13, 'pg1.jpg', '8NASA', 8, 25, 185),
(14, 'pg1.jpg', '9NASA', 9, 25, 185),
(15, 'pg1.jpg', '10NASA', 10, 24, 185),
(16, 'pg1.jpg', '11NASA', 11, 25, 185),
(17, 'kobe1.jpg', '8GALAXY', 8, 23, 280),
(18, 'kobe1.jpg', '9GALAXY', 9, 24, 280),
(19, 'kobe1.jpg', '10GALAXY', 10, 22, 280),
(20, 'kobe1.jpg', '11GALAXY', 11, 25, 280),
(21, 'ky1.jpg', '8HALLOWEENS', 8, 22, 210),
(22, 'ky1.jpg', '9HALLOWEENS', 9, 25, 210),
(23, 'ky1.jpg', '10HALLOWEENS', 10, 23, 210),
(24, 'ky1.jpg', '11HALLOWEENS', 11, 24, 210);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `shoesize` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` char(40) NOT NULL,
  `dob` date NOT NULL,
  `reg_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `gender`, `shoesize`, `email`, `password`, `dob`, `reg_date`) VALUES
(1, 'Ariel', 'Parra', 'Male', 10, 'ariel.parra@baruchmail.cuny.edu', 'hi', '1997-04-25', '2019-05-04 20:12:59'),
(2, 'Sokol', 'Sheri', 'Male', 9, 'sokol.sheri@baruchmail.cuny.edu', 'sokie', '1996-12-12', '2019-05-04 20:12:59'),
(3, 'john', 'snow', 'MALE', 0, 'john@aol.com', 'jjj1', '1990-02-12', '0000-00-00 00:00:00'),
(4, '', '', '', 0, '', '', '0000-00-00', '0000-00-00 00:00:00'),
(5, 's', 's', '', 0, 'so@aol.com', 's', '0000-00-00', '0000-00-00 00:00:00'),
(6, 'jj', 'jj', 'MALE', 0, 'jj@aol.com', 'jj', '1996-02-24', '0000-00-00 00:00:00'),
(7, 'geo', 'ursh', 'MALE', 0, 'geo@aol.com', 'geo1', '1111-11-11', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
