-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 05:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forget_me_not`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_task`
--

CREATE TABLE `t_task` (
  `id` int(11) NOT NULL,
  `taskTitle` varchar(255) NOT NULL,
  `taskDescription` varchar(2000) DEFAULT NULL,
  `taskDateCreated` datetime DEFAULT current_timestamp(),
  `taskDueDate` datetime DEFAULT NULL,
  `taskStatus` int(11) DEFAULT 1,
  `taskUser` int(11) DEFAULT NULL,
  `taskCategory` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_task`
--

INSERT INTO `t_task` (`id`, `taskTitle`, `taskDescription`, `taskDateCreated`, `taskDueDate`, `taskStatus`, `taskUser`, `taskCategory`) VALUES
(1, 'Task Title 1', 'Test task 1\r\nTest task 1\r\nTest task 1\r\nTest task 1\r\nTest task 1', '2021-01-18 14:14:29', '2021-01-19 00:00:00', NULL, NULL, 'Education'),
(2, 'Title', 'Test task 2\r\ntest task 2\r\ntest task 2', '2021-01-18 14:15:46', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(3, 'Test Title', 'asd', '2021-01-18 14:57:03', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(4, 'test title 2', 'asdasd', '2021-01-18 14:57:42', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(5, 'asd', 'asd', '2021-01-18 15:01:03', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(6, 'test', 'asd', '2021-01-18 15:05:30', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(7, 'asdf', 'asdf', '2021-01-18 15:06:02', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(8, 'asdf', 'asdf', '2021-01-18 15:06:19', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(9, 'qwe', 'qwe', '2021-01-18 15:06:28', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(10, 'asdf', 'asd', '2021-01-18 15:16:53', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(11, 'test 1', 'test 1', '2021-01-18 15:17:14', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(12, 'test 2', 'test 2', '2021-01-18 15:17:29', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(13, 'asdas', 'asd', '2021-01-18 15:20:23', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(14, 'Test Title', 'test description', '2021-01-18 15:28:22', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(15, 'asd', 'asd', '2021-01-18 15:29:17', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(16, 'test', 'test', '2021-01-18 15:31:21', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(17, 'asd2', 'asd2', '2021-01-18 15:32:18', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(18, 'as', 'asdf', '2021-01-18 16:28:27', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(19, 'asd', 'asd', '2021-01-18 16:31:20', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(20, 'asd', 'as', '2021-01-18 16:34:38', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(21, 'tetst', 'sad', '2021-01-18 16:34:46', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(22, 'asd', 'asd', '2021-01-18 16:38:51', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(23, 'asd', 'asd', '2021-01-18 16:39:58', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(24, 'asdf', 'asd', '2021-01-18 16:47:55', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(25, 'asdf', 'asd', '2021-01-18 16:57:36', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(26, 'sd', 'asd', '2021-01-18 16:57:42', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(27, 'asd', 's', '2021-01-18 17:00:44', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(28, 'as', 's', '2021-01-18 17:01:05', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(29, 'as', 'as', '2021-01-18 17:01:31', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(30, 'ss', 'ss', '2021-01-18 17:01:54', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(31, 'as', 's', '2021-01-18 17:02:32', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(32, 'as', 'sa', '2021-01-18 17:03:13', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(33, 'as', 's', '2021-01-18 17:03:28', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(34, 'as', 'sa', '2021-01-18 17:03:54', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(35, 'as', 'as', '2021-01-18 17:04:16', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(36, 'asda', 'asda', '2021-01-18 17:16:48', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(37, 'asdas', 'asdasd', '2021-01-18 17:16:57', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(38, 'asd', 'asd', '2021-01-18 17:18:10', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(39, 'asd', 'sd', '2021-01-18 17:19:32', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(40, 'asd', 'sad', '2021-01-18 17:21:15', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(41, 'as', 'as', '2021-01-18 17:24:49', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(42, 'asdasd', 'asdasd', '2021-01-18 17:25:02', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(43, 'asdasd', 'asdasd', '2021-01-18 17:25:08', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(44, 'asdasd', 'asdsd', '2021-01-18 17:25:13', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(45, 'asd', 'asd', '2021-01-18 17:27:43', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(46, 'asd', 'asd', '2021-01-18 17:28:31', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(47, 'asdasd', 'asdas', '2021-01-18 17:29:24', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(48, 'asdsa', 'asdas', '2021-01-18 17:29:29', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(49, 'Test', 'Test', '2021-01-18 22:45:26', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(50, 'Test', 'Test', '2021-01-18 22:49:04', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(51, 'asd', 'asd', '2021-01-18 22:49:30', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(52, 'asd', 'asd', '2021-01-18 22:49:57', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(53, 'asd', 'sad', '2021-01-18 23:01:00', '2021-01-19 00:00:00', 0, NULL, 'Personal'),
(54, 'asdss', 'asd\r\nasd\r\nasdas\r\nsad\r\nasd\r\nfsadf\r\nsdf\r\nsad\r\nfsda\r\nfsad\r\nfsa\r\ndf\r\nsda\r\nfsadf\r\nsd', '2021-01-18 23:08:20', '2021-01-19 00:00:00', 1, NULL, 'Education'),
(55, 'asd', 'asd', '2021-01-18 23:20:08', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(56, 'new task', 'asd', '2021-01-18 23:39:52', '2021-01-19 00:00:00', 1, NULL, 'Education'),
(57, 'sa', 'as', '2021-01-18 23:40:42', '2021-01-18 00:00:00', 1, NULL, 'Personal'),
(58, 'asd', 'test', '2021-01-19 11:34:30', '2021-01-20 00:00:00', 1, NULL, 'Education'),
(59, 'asdas', 's', '2021-01-19 11:35:42', '0000-00-00 00:00:00', 0, NULL, 'Education'),
(60, 'asd', 'as', '2021-01-19 11:36:35', '2021-01-20 00:00:00', 0, NULL, 'Education'),
(61, 'Test', 'Test', '2021-01-19 11:48:53', '2021-01-21 00:00:00', 1, NULL, 'Education'),
(62, 'asdgdasgsdagsadgdsagdsa', '', '2021-01-19 12:47:03', '2021-01-19 12:46:00', 0, NULL, 'Education'),
(63, 'asddsa', 'asas\r\nasd\r\nasd\r\nas', '2021-01-19 12:47:22', '2021-01-19 00:00:00', 0, NULL, 'Education'),
(64, 'Test', 'asd\r\nasdsa\r\ndasd\r\nasd\r\nasd\r\nsad\r\nasd', '2021-01-19 12:56:13', '2021-01-21 00:00:00', 0, NULL, 'Education'),
(65, 'asd', 'asd', '2021-01-19 13:02:15', '2021-01-19 13:01:00', 1, NULL, 'Education'),
(66, 'asd', 'asd', '2021-01-19 13:02:20', '2021-01-19 13:01:00', 1, NULL, 'Education'),
(67, '', 'asd', '2021-01-19 13:03:31', '2021-01-19 13:03:00', 0, NULL, 'Education'),
(68, 'as', 'as', '2021-01-19 13:08:01', '2021-01-21 13:07:00', 1, NULL, 'Work'),
(69, 'sa', 'as', '2021-01-19 13:09:07', '2021-01-19 13:07:00', 1, NULL, 'Education'),
(70, 'saddsa', 'sad', '2021-01-19 13:09:11', '2021-01-19 13:07:00', 1, NULL, 'Education'),
(71, 'sadsdasd', 'sadsad', '2021-01-19 13:09:15', '2021-01-19 13:07:00', 1, NULL, 'Education');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `userPassword` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_task`
--
ALTER TABLE `t_task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_task_userid` (`taskUser`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_task`
--
ALTER TABLE `t_task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_task`
--
ALTER TABLE `t_task`
  ADD CONSTRAINT `FK_task_userid` FOREIGN KEY (`taskUser`) REFERENCES `t_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
