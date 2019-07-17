-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2019 at 04:38 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yochat`
--

-- --------------------------------------------------------

--
-- Table structure for table `msgs`
--

CREATE TABLE `msgs` (
  `sno` int(11) NOT NULL,
  `msg` text NOT NULL,
  `room` text NOT NULL,
  `ip` text NOT NULL,
  `stime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msgs`
--

INSERT INTO `msgs` (`sno`, `msg`, `room`, `ip`, `stime`) VALUES
(1, 'First message!', 'rachel', '124', '2019-07-17 10:37:24'),
(2, 'hello rashi', 'rashi', '::1', '2019-07-17 16:53:40'),
(3, 'hello rashi', 'rashi', '::1', '2019-07-17 16:53:44'),
(4, 'hello', 'rashi', '::1', '2019-07-17 16:53:53'),
(5, 'hello', '', '::1', '2019-07-17 16:55:33'),
(6, 'sanya hi', '', '::1', '2019-07-17 16:56:06'),
(7, '', 'faruk', '::1', '2019-07-17 17:00:18'),
(8, 'hi rahul', 'rahul', '::1', '2019-07-17 17:03:34'),
(9, 'hi rahul', '', '::1', '2019-07-17 17:07:48'),
(40, 'hi souji', 'souji', '::1', '2019-07-17 18:07:17'),
(71, 'hello', 'souji', '::1', '2019-07-17 18:36:27'),
(72, 'hi', 'souji', '::1', '2019-07-17 18:36:31'),
(73, 'hello', 'souji', '::1', '2019-07-17 18:39:30'),
(74, 'how are you', 'souji', '::1', '2019-07-17 18:40:43'),
(75, 'i am fine', 'souji', '::1', '2019-07-17 18:40:52'),
(76, 'how is life?', 'souji', '::1', '2019-07-17 18:41:14'),
(77, 'cool', 'souji', '::1', '2019-07-17 18:41:35'),
(78, 'sup?', 'souji', '::1', '2019-07-17 18:45:32'),
(79, 'cool', 'souji', '::1', '2019-07-17 18:50:54'),
(80, '', 'souji', '::1', '2019-07-17 18:52:03'),
(81, 'hello how are you', 'letschat', '::1', '2019-07-17 18:53:55'),
(82, 'great how are you?', 'letschat', '::1', '2019-07-17 18:54:17'),
(83, 'Good', 'letschat', '::1', '2019-07-17 18:54:23'),
(84, 'ok bye', 'letschat', '::1', '2019-07-17 18:54:29'),
(85, 'bye', 'letschat', '::1', '2019-07-17 18:54:36');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `sno` int(11) NOT NULL,
  `room_name` text NOT NULL,
  `stime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`sno`, `room_name`, `stime`) VALUES
(1, 'rachel', '2019-07-16 21:14:36'),
(2, 'monica', '2019-07-16 21:22:05'),
(3, 'ross', '2019-07-16 21:22:29'),
(4, 'joey', '2019-07-16 21:24:40'),
(5, 'pheobe', '2019-07-16 21:28:32'),
(6, 'chandler', '2019-07-16 21:29:38'),
(7, 'rama', '2019-07-16 21:45:55'),
(8, 'shiva', '2019-07-16 21:49:41'),
(9, 'ganga', '2019-07-16 21:53:12'),
(10, 'simba', '2019-07-16 21:54:59'),
(11, 'karuna', '2019-07-17 10:45:52'),
(12, 'rashi', '2019-07-17 16:49:09'),
(13, 'sanya', '2019-07-17 16:55:56'),
(14, 'faruk', '2019-07-17 17:00:16'),
(15, 'nina', '2019-07-17 17:11:05'),
(16, 'savya', '2019-07-17 17:30:13'),
(17, 'shanaya', '2019-07-17 17:45:28'),
(18, 'surabhi', '2019-07-17 17:45:57'),
(19, 'guru', '2019-07-17 18:00:42'),
(20, 'souji', '2019-07-17 18:07:06'),
(21, 'letschat', '2019-07-17 18:52:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msgs`
--
ALTER TABLE `msgs`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msgs`
--
ALTER TABLE `msgs`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
