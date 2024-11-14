-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2024 at 01:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `method` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `memberId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `method`, `details`, `price`, `memberId`) VALUES
(1, 'GCASH', 'gfdgrt', 4999, 11),
(2, 'GCASH', 'gfdgrt', 4999, 11),
(3, 'CREDIT CARD', 'gfdgrt', 3999, 12),
(4, 'CASH', 'gfdgrt', 3999, 12),
(5, 'GCASH', 'uyfhgjyt', 3999, 12);

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `membership` varchar(50) NOT NULL,
  `startDate` varchar(50) NOT NULL,
  `endDate` varchar(50) NOT NULL,
  `annualMem` varchar(50) NOT NULL,
  `UnliSession` varchar(50) NOT NULL,
  `trainAndProg` varchar(50) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `membership`, `startDate`, `endDate`, `annualMem`, `UnliSession`, `trainAndProg`, `userId`) VALUES
(1, 'Bronze', '', '', '', '', '', 1),
(3, 'custom', '2024-11-21', '2024-11-12', '', '', '', 2),
(4, 'Bronze', '', '', '', '', '', 3),
(5, 'custom', '2024-11-12', '2024-11-14', '', '', '', 4),
(6, 'Silver', '', '', '', '', '', 5),
(7, 'Silver', '', '', '', '', '', 6),
(13, 'Silver', '', '', 'Availed', 'Availed', 'Not Availed', 7);

-- --------------------------------------------------------

--
-- Table structure for table `pre_register`
--

CREATE TABLE `pre_register` (
  `id` int(11) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `inquiry` varchar(50) NOT NULL,
  `sched` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reg_form`
--

CREATE TABLE `reg_form` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `bdate` date DEFAULT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `emailAdd` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(150) DEFAULT NULL,
  `height` decimal(5,2) DEFAULT NULL,
  `weight` decimal(5,2) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `emergency_name` varchar(50) DEFAULT NULL,
  `relationship` varchar(50) DEFAULT NULL,
  `Econtact` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg_form`
--

INSERT INTO `reg_form` (`id`, `fname`, `lname`, `bdate`, `gender`, `address`, `emailAdd`, `password`, `contact`, `height`, `weight`, `age`, `emergency_name`, `relationship`, `Econtact`) VALUES
(1, 'Cris', 'Suarez', '2024-11-14', 'MALE', 'asdfrs', 'Cris@gmail.com', '1234', '12312', 43.00, 56.00, 23, 'fweafdf', 'FATHER', '543543'),
(2, 'test', 'Qwer', '2024-11-21', 'MALE', 'gfdgdf', 'tester@gmail.com', 'test', '12312', 43.00, 123.00, 12, 'safaes', 'FATHER', '5435'),
(3, 'Justine', 'Saracanlao', '2024-11-11', 'MALE', 'gfdgdf', 'JC@gmail.com', 'qwer', '12312', 43.00, 56.00, 32, 'fweafdf', 'FATHER', '4324235'),
(4, 'Kristian', 'Sandaga', '2024-11-12', 'FEMALE', 'htfhtd', 'kid@gmail', 'qwer', '12312', 43.00, 56.00, 22, 'safaes', 'WIFE', '543543'),
(6, 'des', 'fdsfs', '2024-11-13', 'FEMALE', 'gfdgdf', 'des@gmail.com', 'des', '4324234', 43.00, 56.00, 22, 'fweafdf', 'FATHER', '654645'),
(7, 'Justine', 'fdsfs', '2024-11-12', 'MALE', 'gfdgdf', '1@gmail', '1', '123', 43.00, 999.99, 12, 'fweafdf', 'FATHER', '4324235');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plansForeignKey` (`userId`);

--
-- Indexes for table `pre_register`
--
ALTER TABLE `pre_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_form`
--
ALTER TABLE `reg_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pre_register`
--
ALTER TABLE `pre_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_form`
--
ALTER TABLE `reg_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `plans`
--
ALTER TABLE `plans`
  ADD CONSTRAINT `plansForeignKey` FOREIGN KEY (`userId`) REFERENCES `reg_form` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
