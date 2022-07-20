-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 08:18 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `article_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `Id` int(11) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Content` text NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Id`, `Title`, `Content`, `Category`, `Created_date`, `Updated_date`, `Status`) VALUES
(123250, 'Pengertian Front-End', 'Text here', 'Teknologi', '2022-07-20 05:22:19', '2022-07-20 05:22:19', 'Published'),
(123251, 'asadasdasd', 'asdasd', 'sasad', '2022-07-20 05:22:43', '2022-07-20 05:22:43', 'Draft'),
(123252, 'asd', 'sdsdsd', 'sd', '2022-07-20 05:25:09', '2022-07-20 05:25:09', 'Trashed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123254;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
