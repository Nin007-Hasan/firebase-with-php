-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2018 at 07:03 AM
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
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 2, 3, 'Hi', '2018-12-24 02:58:56', 0),
(2, 3, 2, 'Hello', '2018-12-24 02:59:08', 0),
(3, 3, 2, 'Hey', '2018-12-24 02:59:14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp(5) NOT NULL DEFAULT CURRENT_TIMESTAMP(5)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `email`, `comment`, `created_at`) VALUES
(1, 'pantho@gmail.com', 'Hi', '2018-12-25 05:49:51.23258'),
(2, 'pantho@gmail.com', 'hello', '2018-12-25 05:52:36.38276'),
(3, 'pantho@gmail.com', 'this is comment', '2018-12-25 05:52:50.05043'),
(4, 'probal@probal.com', 'Hi', '2018-12-25 06:03:21.86218');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_add`
--

CREATE TABLE `doctor_add` (
  `id` int(255) NOT NULL,
  `patient` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `add_doc` varchar(255) NOT NULL,
  `created_at` timestamp(5) NOT NULL DEFAULT CURRENT_TIMESTAMP(5)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_add`
--

INSERT INTO `doctor_add` (`id`, `patient`, `doctor`, `add_doc`, `created_at`) VALUES
(9, 'pantho@gmail.com', 'pROBAL', '', '2018-12-25 05:24:42.19981');

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
(5, '', 'hnadim34@gmail.com', '123456', '01737512549', '123456', 'true', 'hg', '1234', 'jjh', '2018-12-04 05:34:37.86741'),
(6, 'Doctor', 'probal@probal.com', '123', '01897', 'tyu', 'true', 'pROBAL', '1234', 'Skin', '2018-12-04 09:37:18.73051'),
(7, 'skdnfnkq', 'y@y.com', 'snsn', '01737512549', 'sdsknd', 'true', 'Hasan Al Mamun', '123456', 'Child ENT', '2018-12-08 12:07:47.57063');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`) VALUES
(1, 'johnsmith', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(2, 'peterParker', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(3, 'davidMoore', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 1, '2018-12-24 02:58:26', 'no'),
(2, 2, '2018-12-24 08:03:55', 'no'),
(3, 3, '2018-12-24 07:57:44', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `patient_profile`
--

CREATE TABLE `patient_profile` (
  `patient_no` int(255) NOT NULL,
  `patient_email` varchar(255) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_password` varchar(255) NOT NULL,
  `patient_phone` varchar(255) NOT NULL,
  `spouse_name` varchar(255) NOT NULL,
  `patient_age` varchar(255) NOT NULL,
  `created_at` timestamp(5) NOT NULL DEFAULT CURRENT_TIMESTAMP(5)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_profile`
--

INSERT INTO `patient_profile` (`patient_no`, `patient_email`, `patient_name`, `patient_password`, `patient_phone`, `spouse_name`, `patient_age`, `created_at`) VALUES
(1, '', '', '', '', '', '', '2018-12-05 05:29:45.37193'),
(2, 'unifoxdigital.hihasan@gmail.com', '$patient_name', '1234', '017', 'hasan', '12', '2018-12-05 05:41:50.48381'),
(3, 'hasan@hihasan.com', 'hasan4', '123456', '01737512549', ' hihasan', '28', '2018-12-05 05:42:25.99158'),
(4, 'pantho@gmail.com', 'Pantho', '123456', '01742', 'kmfnfn', '23', '2018-12-05 09:19:17.66917'),
(5, '', '', '', '', '', '', '2018-12-07 17:46:36.28426'),
(6, 'hello@hello.vom', 'test', '123456', '01789', ' ghj', '23', '2018-12-09 06:50:04.43464'),
(7, 'nafi@gmail.com', 'Priya', '123456', '087533', ' Mushfiq', '26', '2018-12-12 15:13:31.12179');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_add`
--
ALTER TABLE `doctor_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_profile`
--
ALTER TABLE `doctor_profile`
  ADD PRIMARY KEY (`doctor_sl`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor_add`
--
ALTER TABLE `doctor_add`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctor_profile`
--
ALTER TABLE `doctor_profile`
  MODIFY `doctor_sl` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
