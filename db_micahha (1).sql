-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 12:04 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_micahha`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admins_info`
--

CREATE TABLE `tbl_admins_info` (
  `id` int(11) NOT NULL,
  `first_name` varchar(225) NOT NULL,
  `last_name` varchar(225) DEFAULT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(225) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `image` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_admins_info`
--

INSERT INTO `tbl_admins_info` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `is_active`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, 'admin', 'admin@gmail.com', '$2y$10$dXSb.w9pXqsMZbMdtuvSl.iFpTHUSGbELM.CRcPKfAAuosorZL8em', 1, NULL, '2021-04-24 19:38:30', '2021-05-04 04:37:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admins_info`
--
ALTER TABLE `tbl_admins_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admins_info`
--
ALTER TABLE `tbl_admins_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
