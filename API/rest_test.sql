-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2023 at 10:31 AM
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
-- Database: `rest_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_code` varchar(10) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_code`, `subject`, `department`) VALUES
('ARCH101', 'Architecture 101', 'Architecture Department'),
('ART101', 'Art History 101', 'Art Department'),
('ASTRO101', 'Astronomy 101', 'Astronomy Department'),
('BIOL101', 'Biology 101', 'Biology Department'),
('BUS101', 'Business 101', 'Business Department'),
('CHEM101', 'Chemistry 101', 'Chemistry Department'),
('CHEM201', 'Chemistry 201', 'Chemistry Department'),
('CIVIL101', 'Civil Engineering 101', 'Civil Engineering Department'),
('COMPENG101', 'Computer Engineering 101', 'Computer Engineering Department'),
('CS101', 'Computer Science 101', 'Computer Science Department'),
('ECON101', 'Economics 101', 'Economics Department'),
('ELECTRICAL', 'Electrical Engineering 101', 'Electrical Engineering Department'),
('ENG101', 'English 101', 'English Department'),
('ENG201', 'English 201', 'English Department'),
('FINANCE101', 'Finance 101', 'Finance Department'),
('GEOLOGY101', 'Geology 101', 'Geology Department'),
('HIST101', 'History 101', 'History Department'),
('HIST201', 'History 201', 'History Department'),
('HRM101', 'Human Resource Management 101', 'HRM Department'),
('MARKETING1', 'Marketing 101', 'Marketing Department'),
('MATH101', 'Mathematics 101', 'Math Department'),
('MATH201', 'Mathematics 201', 'Math Department'),
('MECHANICAL', 'Mechanical Engineering 101', 'Mechanical Engineering Department'),
('MKT101', 'Market Research 101', 'Market Research Department'),
('MUS101', 'Music Theory 101', 'Music Department'),
('NURSING101', 'Nursing 101', 'Nursing Department'),
('PHARMACY10', 'Pharmacy 101', 'Pharmacy Department'),
('PHIL101', 'Philosophy 101', 'Philosophy Department'),
('PHYS101', 'Physics 101', 'Physics Department'),
('PHYS201', 'Physics 201', 'Physics Department'),
('POLSCI101', 'Political Science 101', 'Political Science Department'),
('PSYCH101', 'Psychology 101', 'Psychology Department'),
('SOC101', 'Sociology 101', 'Sociology Department'),
('STAT101', 'Statistics 101', 'Statistics Department');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
