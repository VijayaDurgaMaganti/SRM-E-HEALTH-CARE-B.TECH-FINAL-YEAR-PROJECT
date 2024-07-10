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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `sl_no` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
