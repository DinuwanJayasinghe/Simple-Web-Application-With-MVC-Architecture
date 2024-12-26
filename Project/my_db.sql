-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 11:41 AM
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
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `unit_price` int(100) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `unit_price`, `qty`) VALUES
(1, 'Pencil', 12, 50),
(2, 'Book', 0, 20),
(3, 'Pen', 0, 50),
(4, 'Pen', 0, 50),
(5, '', 0, 0),
(6, 'Pen', 0, 25),
(7, 'Bag', 0, 50),
(8, 'Bag', 0, 50);

-- --------------------------------------------------------

--
-- Table structure for table `my_user`
--

CREATE TABLE `my_user` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `my_user`
--

INSERT INTO `my_user` (`id`, `name`, `mobile`, `email`, `password`, `date`) VALUES
(8, '', '', 'email@example.com', '12345', '2023-07-08 09:30:11'),
(9, '', '', 'milan@email.com', '12345', '2023-07-08 10:04:39'),
(10, '', '', 'john@example.com', '12345', '2023-07-09 18:16:23'),
(11, 'doe', '7722334455', 'doe@example.com', '12345', '2023-07-09 18:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Error reading structure for table my_db.users: #1932 - Table &#039;my_db.users&#039; doesn&#039;t exist in engine
-- Error reading data for table my_db.users: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `my_db`.`users`&#039; at line 1

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_user`
--
ALTER TABLE `my_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `my_user`
--
ALTER TABLE `my_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
