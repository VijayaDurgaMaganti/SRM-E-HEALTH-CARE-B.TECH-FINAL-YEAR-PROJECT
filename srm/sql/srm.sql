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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `sl_no` bigint(250) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `l_name` varchar(250) NOT NULL,
  `position` varchar(250) NOT NULL,
  `email_id` varchar(250) NOT NULL,
  `adid` varchar(250) NOT NULL,
  `pswd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`sl_no`, `f_name`, `l_name`, `position`, `email_id`, `adid`, `pswd`) VALUES
(1, 'Admin', 'Srm', 'Developer', 'admin@srm.com', 'ADMIN123', '12345'),
(2, 'Manager', 'Srm', 'Manager', 'manager@srm.com', 'MANAGER123', '55555'),
(3, 'Chairmen', 'Srm\r\n', 'Chairmen', 'chairmen@srm.com', 'CHAIRMEN123', '66666');

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

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE `emergency` (
  `sl_no` bigint(250) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `l_name` varchar(250) NOT NULL,
  `age` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `landmark` varchar(250) NOT NULL,
  `phone_no` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`sl_no`, `f_name`, `l_name`, `age`, `city`, `address`, `landmark`, `phone_no`) VALUES
(1, 'Test1', 'a', '45', 'Asd', 'AA SSdd', 'AAA', '7897897898');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `sl_no` bigint(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `age` bigint(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `symptoms` varchar(250) NOT NULL,
  `doctor` varchar(250) NOT NULL,
  `tablet1` varchar(250) NOT NULL,
  `t_morning` varchar(250) NOT NULL,
  `t_afternoon` varchar(250) NOT NULL,
  `t_night` varchar(250) NOT NULL,
  `quantity1` varchar(100) NOT NULL,
  `syrup1` varchar(250) NOT NULL,
  `s_morning` varchar(250) NOT NULL,
  `s_afternoon` varchar(250) NOT NULL,
  `s_night` varchar(250) NOT NULL,
  `quantity2` varchar(100) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`sl_no`, `username`, `age`, `date`, `symptoms`, `doctor`, `tablet1`, `t_morning`, `t_afternoon`, `t_night`, `quantity1`, `syrup1`, `s_morning`, `s_afternoon`, `s_night`, `quantity2`, `message`) VALUES
(1, 'Test123', 24, '2022-03-29', 'cold', 'Dr. M Santhi - Pediatrician', 'Paracetamol ', 'Yes', 'No', 'Yes', '650mg', 'SOLVIN', 'Yes', 'Yes', 'Yes', '5ml', 'Get Well Soon'),
(2, 'TestA', 32, '2022-04-02', 'wound', 'Dr. Krishna Kumar - General physician', 'Dyclofinac', 'No', 'No', 'Yes', '10mg', '-', 'No', 'No', 'No', '-', 'Heal up soon'),
(3, 'FinalTest', 32, '2022-03-31', 'Chest pain', 'Dr. A Lakshman - Cardiologist', 'Isosorbide', 'No', 'No', 'Yes', '250mg', 'Erythrityl Tetranitrate', 'Yes', 'No', 'Yes', '3ml', 'Get Well Soon'),
(4, 'FinalTest', 34, '2022-04-01', 'Tooth ache', 'Dr. B Sandhya - Dentist', 'Ibuprofen', 'No', 'Yes', 'Yes', '10mg', 'Ambrodil', 'Yes', 'Yes', 'No', '6ml', 'Get well Soon'),
(5, 'FinalTest', 57, '2022-04-10', 'Trouma', 'Dr. Gopal Krishna - Psychiatrist', 'Celexa ', 'No', 'No', 'Yes', '500mg', '-', 'No', 'No', 'No', '-', 'Meet again after 1 week.'),
(6, 'FinalTest', 57, '2022-04-10', 'Trouma', 'Dr. Gopal Krishna - Psychiatrist', 'sdas', 'Yes', 'Yes', 'Yes', '12mg', 'asdas', 'No', 'No', 'Yes', '5ml', 'dfsd'),
(7, 'FinalTest', 57, '2022-04-10', 'Trouma', 'Dr. Gopal Krishna - Psychiatrist', 'sdas', 'Yes', 'Yes', 'Yes', '12mg', 'asdas', 'No', 'No', 'Yes', '5ml', 'dfsd');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `sl_no` bigint(250) NOT NULL,
  `Email_ID` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`sl_no`, `Email_ID`) VALUES
(1, 'testa@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `clientlogins`
--
ALTER TABLE `clientlogins`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `emergency`
--
ALTER TABLE `emergency`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `sl_no` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `sl_no` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `clientlogins`
--
ALTER TABLE `clientlogins`
  MODIFY `sl_no` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `sl_no` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `emergency`
--
ALTER TABLE `emergency`
  MODIFY `sl_no` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `sl_no` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `sl_no` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
