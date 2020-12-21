-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2020 at 08:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminUser` varchar(50) NOT NULL,
  `adminPass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminUser`, `adminPass`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ans`
--

CREATE TABLE `tbl_ans` (
  `id` int(11) NOT NULL,
  `quesNo` int(11) NOT NULL,
  `rightAns` int(11) NOT NULL DEFAULT 0,
  `ans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ans`
--

INSERT INTO `tbl_ans` (`id`, `quesNo`, `rightAns`, `ans`) VALUES
(128, 1, 0, 'average()'),
(129, 1, 1, 'avg()'),
(130, 1, 0, 'median()'),
(131, 1, 0, 'avg_val()'),
(132, 2, 1, 'Initialize a Laraval application'),
(133, 2, 0, 'Call laravel library functions'),
(134, 2, 0, 'Load the configuration files'),
(135, 2, 0, 'Load laravel classes and models'),
(136, 3, 1, 'clear-compiled'),
(137, 3, 0, 'clear compiled'),
(138, 3, 0, 'compiled:clear'),
(139, 3, 0, 'clear:all'),
(140, 4, 0, 'split()'),
(141, 4, 1, 'chunk()'),
(142, 4, 0, 'explode()'),
(143, 4, 0, 'break()'),
(144, 5, 0, 'cache:flush'),
(145, 5, 1, 'cache:clear'),
(146, 5, 0, 'cache:forget'),
(147, 5, 0, 'cache:remove'),
(148, 6, 0, 'Laravel Framework code'),
(149, 6, 0, 'Assets'),
(150, 6, 1, 'Third-party code'),
(151, 6, 0, 'Configuration files'),
(152, 7, 0, 'app/Http/'),
(153, 7, 1, 'routes/'),
(154, 7, 0, 'urls/'),
(155, 7, 0, 'vendors/'),
(156, 8, 1, '.blade.php'),
(157, 8, 0, '.php '),
(158, 8, 0, '.vue'),
(159, 8, 0, '.blade'),
(160, 9, 0, 'execute() and rollback()'),
(161, 9, 1, 'up() and down()'),
(162, 9, 0, 'run() and delete()'),
(163, 9, 0, 'save() and update()'),
(164, 10, 1, 'For setting environment variables'),
(165, 10, 0, 'For running cron jobs'),
(166, 10, 0, 'For tracking vendors'),
(167, 10, 0, 'None of These');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ques`
--

CREATE TABLE `tbl_ques` (
  `id` int(11) NOT NULL,
  `quesNo` int(11) NOT NULL,
  `ques` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ques`
--

INSERT INTO `tbl_ques` (`id`, `quesNo`, `ques`) VALUES
(40, 1, 'Which method returns the average value of a given key ? '),
(41, 2, 'Bootstrap directory in Laravel is used to'),
(42, 3, 'Which artisan command is used to remove the compiled class file.'),
(43, 4, 'Which method breaks the collection into multiple, smaller collections of a given size'),
(44, 5, 'Artisan command to flush the application cache:'),
(45, 6, 'The vendor directory contains'),
(46, 7, 'Where is the routing file located in Laravel ?'),
(47, 8, 'View files in Laravel end in'),
(48, 9, 'Which of following methods are used in database migrations classes?'),
(49, 10, 'For what do the .env is used?');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userid`, `name`, `username`, `password`, `email`, `status`) VALUES
(8, 'asmaa', 'asmaa', 'e10adc3949ba59abbe56e057f20f883e', 'asmaa@yahoo.com', 0),
(9, 'Ahmed', 'Ahmed', '202cb962ac59075b964b07152d234b70', 'ahmed@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_ans`
--
ALTER TABLE `tbl_ans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ques`
--
ALTER TABLE `tbl_ques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_ans`
--
ALTER TABLE `tbl_ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `tbl_ques`
--
ALTER TABLE `tbl_ques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
