-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2023 at 10:55 AM
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
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seniorform`
--

CREATE TABLE `seniorform` (
  `id` int(16) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `blood` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `educ` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seniorform`
--

INSERT INTO `seniorform` (`id`, `lastname`, `firstname`, `birthday`, `age`, `sex`, `blood`, `place`, `status`, `address`, `educ`) VALUES
(47, 'Gianan', 'Jarmel Angeloo', '1963-01-16', 60, 'Male', 'A-', 'SILANG', 'Single', 'Tanza', 'ewan'),
(48, 'Chua', 'Gelo', '1963-01-24', 60, 'Male', 'A-', 'SILANG', 'Single', 'belvedere paradahan I tanza cavite', 'Elementary');

-- --------------------------------------------------------

--
-- Table structure for table `soloform`
--

CREATE TABLE `soloform` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `totalmonth` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `educ` varchar(255) NOT NULL,
  `occ` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `soloform`
--

INSERT INTO `soloform` (`id`, `lastname`, `firstname`, `birthday`, `age`, `sex`, `month`, `place`, `totalmonth`, `address`, `educ`, `occ`) VALUES
(19, 'Gianan', 'Janns', '1996-06-14', 27, 'Male', '6,000-10,000', 'SILANG', 'More Than 20,000', 'fwafwa', 'ewan', 'gg');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` enum('user','admin','secretary') NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `password`, `name`) VALUES
(1, 'admin', 'admin', '1073f23070db1c31ac3597ad480eda7d', 'MSWD '),
(2, 'user', 'bucal', 'd4a436e05b27de7ec1eb86d4d43abc4b', 'Barangay Bucal'),
(3, 'secretary', 'bucal secretary', 'fa4cd20d04295a01be155e51172e4b6e', 'Bucal Secretary');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seniorform`
--
ALTER TABLE `seniorform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soloform`
--
ALTER TABLE `soloform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seniorform`
--
ALTER TABLE `seniorform`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `soloform`
--
ALTER TABLE `soloform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
