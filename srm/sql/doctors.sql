-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2022 at 04:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srm`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `sl_no` bigint(250) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `l_name` varchar(250) NOT NULL,
  `email_id` varchar(250) NOT NULL,
  `designation` varchar(250) NOT NULL,
  `dr_id` varchar(10) NOT NULL,
  `pswd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`sl_no`, `f_name`, `l_name`, `email_id`, `designation`, `dr_id`, `pswd`) VALUES
(1, 'M', 'Santhi ', 'msanthi@srm.com ', 'Pediatrician', 'MS123', 'santhi123'),
(2, 'Krishna ', 'Kumar', 'krishnakumar@srm.com', 'General physician', 'KK123', 'kumar123'),
(3, 'A', 'Lakshman ', 'alakshman@srm.com ', 'Cardiologist', 'AL123', 'lakshman123'),
(4, 'B', 'Sandhya ', 'bsandhya@srm.com ', 'Dentist', 'BS123', 'sandhya123'),
(5, 'Gopal ', 'Krishna', 'gopalkrishna@srm.com', 'Psychiatrist', 'GK123', 'krishna123'),
(6, 'Rahul ', 'Ramsai', 'rahulramsai@srm.com', 'Pulmonology', 'RR123', 'ramsai123'),
(7, 'C', 'Dharani ', 'cdharani@srm.com ', 'Orthopedic', 'CD123', 'dharani123'),
(8, 'P', 'Jyothi ', 'pjyothi@srm.com ', 'Endocrinologist', 'PJ123', 'jyothi123 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `sl_no` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
