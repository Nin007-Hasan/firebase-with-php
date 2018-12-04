-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 10:40 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `probal`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor_profile`
--

CREATE TABLE `doctor_profile` (
  `doctor_sl` int(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `doctor_email` varchar(255) NOT NULL,
  `doctor_id` varchar(255) NOT NULL,
  `doctor_phone` varchar(255) NOT NULL,
  `hospital_id` varchar(255) NOT NULL,
  `isApproved` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `created_at` timestamp(5) NOT NULL DEFAULT CURRENT_TIMESTAMP(5)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_profile`
--

INSERT INTO `doctor_profile` (`doctor_sl`, `designation`, `doctor_email`, `doctor_id`, `doctor_phone`, `hospital_id`, `isApproved`, `name`, `password`, `specialization`, `created_at`) VALUES
(5, 'Doctor', 'hnadim34@gmail.com', '123456', '01737512549', '123456', 'true', 'Hasan Al Mamun', '12345678', 'Child ENT', '2018-12-04 05:34:37.86741'),
(6, 'Doctor', 'probal@probal.com', '123', '01897', 'tyu', 'true', 'pROBAL', '1234', 'Skin', '2018-12-04 09:37:18.73051');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_profile`
--
ALTER TABLE `doctor_profile`
  ADD PRIMARY KEY (`doctor_sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_profile`
--
ALTER TABLE `doctor_profile`
  MODIFY `doctor_sl` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
