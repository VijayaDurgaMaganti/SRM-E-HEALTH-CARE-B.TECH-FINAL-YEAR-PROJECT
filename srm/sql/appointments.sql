-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2022 at 04:27 PM
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
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `sl_no` bigint(250) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `l_name` varchar(250) NOT NULL,
  `email_id` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `age` int(250) NOT NULL,
  `time` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `symptoms` varchar(250) NOT NULL,
  `doctor` varchar(250) NOT NULL,
  `other_details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`sl_no`, `f_name`, `l_name`, `email_id`, `username`, `age`, `time`, `date`, `symptoms`, `doctor`, `other_details`) VALUES
(1, 'Test1', 'C', 'testc@gmail.com', 'Test123', 24, 'AM', '2022-03-29', 'cold', 'Dr. M Santhi - Pediatrician', 'testing'),
(10, 'Test', 'B', 'testb@gmail.com', 'TestB', 22, 'PM', '2022-03-30', 'Chest pain', 'Dr. A Lakshman - Cardiologist', 'HI'),
(12, 'Final', 'Test', 'final1@gmail.com', 'FinalTest', 32, 'PM', '2022-03-31', 'Chest pain', 'Dr. A Lakshman - Cardiologist', 'hey'),
(13, 'Final', 'Test2', 'final1@gmail.com', 'FinalTest', 34, 'AM', '2022-04-01', 'Tooth ache', 'Dr. B Sandhya - Dentist', 'Lite pain'),
(14, 'Final', 'Test2', 'final1@gmail.com', 'FinalTest', 57, 'PM', '2022-04-10', 'Trouma', 'Dr. Gopal Krishna - Psychiatrist', 'hi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `sl_no` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
