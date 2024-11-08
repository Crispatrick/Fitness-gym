-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2024 at 07:26 AM
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
(5, 'Luwalhati', 'Sanarelao', '2024-11-19', 'FEMALE', 'gfdgdf', 'Luwalhati@gmail.com', '1234', '123', 43.00, 56.00, 42, 'safaes', 'FATHER', '5435');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg_form`
--
ALTER TABLE `reg_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg_form`
--
ALTER TABLE `reg_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
