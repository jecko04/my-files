-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 08:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rwings`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `additional` varchar(256) NOT NULL,
  `food1` varchar(256) NOT NULL,
  `food2` varchar(256) NOT NULL,
  `flavor` varchar(256) NOT NULL,
  `orderedTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `fullname`, `contact`, `address`, `additional`, `food1`, `food2`, `flavor`, `orderedTime`) VALUES
(98, 'jericho morales', 9123456789, '1547-kapalaran st litex road brgy comm qc.', 'pwede po ba gawing 10pcs yung solo chicken wings add cash na lang po ako. Salamat. :)', '8pc Chicken Wings with Rice', 'none', 'Mango Habanero', '2022-11-08 10:02:46'),
(104, 'asdasd', 9123456789, '1547-kapalaran st litex road brgy comm qc.', 'pwede po ba gawing 10pcs yung solo chicken wings add cash na lang po ako. Salamat. :)', '4pc Chicken Wings with Rice', 'none', 'Sweet Chili', '2022-11-08 12:47:54'),
(105, 'jericho morales', 9123456789, 'doonbanda nakaita', 'pwede po ba gawing 10pcs yung solo chicken wings add cash na lang po ako. Salamat. :)', '8pc Chicken Wings with Rice', 'none', 'Sambal', '2022-11-08 12:50:24'),
(107, 'jericho morales', 9123456789, '1547-kapalaran st litex road brgy comm qc.', 'Pag dating niyo po sa street namin meron kayong makikitang red na gate ', 'none', '8pc Chicken', 'Mango Habanero', '2022-11-08 13:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_first` tinytext NOT NULL,
  `user_last` tinytext NOT NULL,
  `user_email` tinytext NOT NULL,
  `user_pwd` tinytext NOT NULL,
  `user_type` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_first`, `user_last`, `user_email`, `user_pwd`, `user_type`) VALUES
(13, 'Jericho', 'Morales', 'jerichomorales81@gmail.com', '$2y$10$3pDgxnUkC/DEL.cWRN0s9OLwgcT5vui5OpG9Qu/PY0XxnKHqtX2ti', 'Admin'),
(19, 'Jericho', 'Morales', 'jerichomorales6@gmail.com', '$2y$10$NTzRai4UAbFdexZs6JR6C.b9YrAOFpO/yKr2DfI37Ef6BXab36kom', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
