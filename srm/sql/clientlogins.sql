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
-- Table structure for table `clientlogins`
--

CREATE TABLE `clientlogins` (
  `sl_no` bigint(250) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `l_name` varchar(250) NOT NULL,
  `email_id` varchar(250) NOT NULL,
  `ph_no` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `pincode` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `cr_pswd` varchar(250) NOT NULL,
  `cn_pswd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientlogins`
--

INSERT INTO `clientlogins` (`sl_no`, `f_name`, `l_name`, `email_id`, `ph_no`, `address`, `pincode`, `username`, `cr_pswd`, `cn_pswd`) VALUES
(1, 'Test', 'A', 'testa@gmail.com', '7418529635', 'Abc', '111111', 'TestA', '12345', '12345'),
(2, 'Test', 'B', 'testb@gmail.com', '8528528525', 'Bbb', '222222', 'TestB', '123123', '123123'),
(3, 'Test1', 'C', 'testc@gmail.com', '9870234234', 'Qwe', '121212', 'Test123', '22222', '22222'),
(5, 'Final', 'Test', 'final1@gmail.com', '8787878787', 'FinalTest abcd', '888777', 'FinalTest', '88888', '88888');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientlogins`
--
ALTER TABLE `clientlogins`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientlogins`
--
ALTER TABLE `clientlogins`
  MODIFY `sl_no` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
