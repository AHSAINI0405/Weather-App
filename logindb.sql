-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 05:28 AM
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
-- Database: `logindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `registertb`
--

CREATE TABLE `registertb` (
  `Username` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile_No` varchar(10) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `Confirm_Password` varchar(12) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registertb`
--

INSERT INTO `registertb` (`Username`, `Email`, `Mobile_No`, `Password`, `Confirm_Password`, `time`) VALUES
('Ahsaini222', 'Amitsaini1234@gmail.com', '7082250227', '12345678', '12345678', '2023-12-08 04:10:52.594865'),
('amitsaini', 'Amitsaini123@gmail.com', '9876543210', '12345678', '12345678', '2023-12-08 04:10:52.594865'),
('ram123', 'ram23@gmail.com', '9865741230', '987654321', '987654321', '2023-12-08 04:10:52.594865'),
('Vipin', 'vipi123@gmail.com', '7015490545', 'vipin123', 'vipin123', '2023-12-08 04:11:57.378276');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registertb`
--
ALTER TABLE `registertb`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `Username` (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
