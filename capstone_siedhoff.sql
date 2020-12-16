-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 01:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone_siedhoff`
--

-- --------------------------------------------------------

--
-- Table structure for table `dance`
--

CREATE TABLE `dance` (
  `id` int(11) NOT NULL,
  `UserIdFK` int(11) NOT NULL,
  `Dance` varchar(20) COLLATE utf8_bin NOT NULL,
  `FigureName` varchar(50) COLLATE utf8_bin NOT NULL,
  `Fig` int(11) NOT NULL,
  `FP` int(11) NOT NULL,
  `T` int(11) NOT NULL,
  `LF` int(11) NOT NULL,
  `S` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `dance`
--

INSERT INTO `dance` (`id`, `UserIdFK`, `Dance`, `FigureName`, `Fig`, `FP`, `T`, `LF`, `S`) VALUES
(2, 6, 'Foxtrot', 'Basic', 0, 0, 0, 0, 0),
(3, 6, 'Foxtrot', 'Promenade', 0, 0, 0, 0, 0),
(4, 6, 'Foxtrot', 'Rock Turn to Left', 0, 0, 0, 0, 0),
(5, 6, 'Foxtrot', 'Rock Turn to Right', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `user_type` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(5, 'Admin', 'admin@admin.com', 'admin', '32d48f55497d0c4eff24de00fddafe7c'),
(6, 'User', 'user@user.com', 'user', '32d48f55497d0c4eff24de00fddafe7c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dance`
--
ALTER TABLE `dance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserIdFK` (`UserIdFK`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dance`
--
ALTER TABLE `dance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dance`
--
ALTER TABLE `dance`
  ADD CONSTRAINT `UserIdFK` FOREIGN KEY (`UserIdFK`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
