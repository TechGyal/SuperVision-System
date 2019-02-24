-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2019 at 08:18 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attachment_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `national_id` varchar(255) NOT NULL,
  `secret_code` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `admin_name`, `email`, `phone_number`, `national_id`, `secret_code`, `password`, `created_at`) VALUES
(1, ' TechGyal', 'admin@test.com', '0713255791', '12345678', '0CECADDFE7', '25d55ad283aa400af464c76d713c07ad', '2019-01-27 05:37:22');

-- --------------------------------------------------------

--
-- Table structure for table `attachment_table`
--

CREATE TABLE `attachment_table` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `section` varchar(255) NOT NULL,
  `supervisor_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attachment_table`
--

INSERT INTO `attachment_table` (`id`, `student_id`, `start_date`, `end_date`, `section`, `supervisor_id`, `created_at`) VALUES
(1, 1, '2019-02-23', '2019-04-23', 'ICT', 1, '2019-02-23 07:57:41');

-- --------------------------------------------------------

--
-- Table structure for table `hub_table`
--

CREATE TABLE `hub_table` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `learn` longtext NOT NULL,
  `skill` longtext NOT NULL,
  `comment` longtext,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hub_table`
--

INSERT INTO `hub_table` (`id`, `student_id`, `learn`, `skill`, `comment`, `created_at`) VALUES
(1, 1, 'Java', 'Learned about java FX', '', '2019-02-23 03:11:14'),
(2, 1, 'Java', 'Learned about java FX', '', '2019-02-23 03:11:14'),
(3, 1, 'Java', 'Learned about java FX', '', '2019-02-23 03:11:14'),
(4, 1, 'Java', 'Learned about java FX', 'supervisor_comment', '2019-02-23 03:11:14'),
(5, 1, 'Java', 'Learned about java FX', '$comment', '2019-02-23 03:11:14'),
(6, 1, 'Java', 'Learned about java FX', '', '2019-02-23 03:11:14'),
(7, 1, 'Java', 'Learned about java FX', '', '2019-02-23 03:11:14'),
(8, 1, 'Java', 'Learned about java FX', '', '2019-02-23 03:11:14'),
(9, 1, 'Java', 'Learned about java FX', '', '2019-02-23 03:11:14'),
(10, 1, 'Java', 'Learned about java FX', '', '2019-02-23 03:11:14'),
(11, 1, 'Java', 'Learned about java FX', '', '2019-02-23 03:11:14'),
(12, 1, 'Java', 'Learned about java FX', '', '2019-02-23 03:11:14'),
(13, 1, 'Java', 'Learned about java FX', '', '2019-02-23 03:11:14'),
(14, 1, 'Java', 'Learned about java FX', '', '2019-02-23 03:11:14'),
(15, 2, 'Java', 'Learned about java FX', '', '2019-02-23 03:11:14'),
(16, 2, 'Java', 'Learned about java FX', '', '2019-02-23 03:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `notification_table`
--

CREATE TABLE `notification_table` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `supervisor_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification_table`
--

INSERT INTO `notification_table` (`id`, `admin_id`, `supervisor_id`, `student_id`, `subject`, `message`, `status`, `created_at`) VALUES
(1, 0, 1, 0, 'My Account', 'Your account secret code is DA826AEFFF', 1, '2019-02-23 07:54:19'),
(2, 1, 0, 0, 'New Supervisor', 'Added new supervisor known as TechGuy', 1, '2019-02-23 07:54:19'),
(3, 0, 1, 0, 'New Student', 'Assigned new student with registration number EB3/17613/14', 1, '2019-02-23 07:57:41'),
(4, 1, 0, 0, 'New Student', 'Added new student known as Vincent Ososi', 1, '2019-02-23 07:57:41'),
(5, 0, 0, 1, 'My Account', 'Assigned new student with registration number EB3/17613/14', 0, '2019-02-23 07:57:41'),
(6, 0, 0, 1, 'Java Task', 'Mysql and SQLite.', 0, '2019-02-23 09:07:27'),
(7, 0, 0, 1, 'Java Task', 'Mysql and SQLite.', 0, '2019-02-23 09:08:37'),
(8, 0, 0, 1, 'Java Task', '31407936', 0, '2019-02-23 09:15:12'),
(9, 0, 0, 0, 'Java Task', ' echo \'<script type=\"text/javascript\">\';\r\n        echo \"setTimeout(function () { swal(\'Task Assignment\',\'Successfully assigned task to \'$name.,\'success\');\";\r\n        echo \'}, 100);</script>\';\r\n        mysqli_close($connection);', 0, '2019-02-23 09:15:55'),
(10, 0, 0, 1, 'Java Task', '$student_id', 1, '2019-02-23 09:17:40'),
(11, 0, 0, 1, 'HTML TASK', '31407936', 0, '2019-02-23 09:21:42'),
(12, 0, 0, 1, 'Java', 'Learned about java FX', 0, '2019-02-23 03:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `national_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `secret_code` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`id`, `student_name`, `phone_number`, `national_id`, `email`, `address`, `gender`, `secret_code`, `password`, `created_at`) VALUES
(1, 'Vincent Ososi', '0713255791', '31407936', 'ososiportal@gmail.com', '1316', 'Male', 'ACE9FDBF4D', '92694dc0110c1f528bac20f07d964b49', '2019-02-23 07:57:41'),
(2, 'TTTTT', '0713255791', '12345678', 'ososiportal@gmail.com', '1316', 'Male', 'ACE9FDBF4D', '92694dc0110c1f528bac20f07d964b49', '2019-02-23 07:57:41');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor_table`
--

CREATE TABLE `supervisor_table` (
  `id` int(11) NOT NULL,
  `supervisor_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `national_id` varchar(255) NOT NULL,
  `secret_code` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor_table`
--

INSERT INTO `supervisor_table` (`id`, `supervisor_name`, `email`, `phone_number`, `national_id`, `secret_code`, `password`, `created_at`) VALUES
(1, 'TechGuy', 'dev.techguy@gmail.com', '0713255791', '31407936', 'DA826AEFFF', '92694dc0110c1f528bac20f07d964b49', '2019-02-23 07:54:19');

-- --------------------------------------------------------

--
-- Table structure for table `task_table`
--

CREATE TABLE `task_table` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `supervisor_id` int(11) NOT NULL,
  `task_type` text NOT NULL,
  `task_description` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task_table`
--

INSERT INTO `task_table` (`id`, `student_id`, `supervisor_id`, `task_type`, `task_description`, `status`, `created_at`) VALUES
(1, 1, 1, 'Java Task', 'Mysql and SQLite.', 1, '2019-02-23 09:07:27'),
(2, 1, 1, 'Java Task', 'Mysql and SQLite.', 1, '2019-02-23 09:08:37'),
(3, 1, 1, 'Java Task', '31407936', 1, '2019-02-23 09:15:12'),
(4, 1, 1, 'Java Task', ' echo \'<script type=\"text/javascript\">\';\r\n        echo \"setTimeout(function () { swal(\'Task Assignment\',\'Successfully assigned task to \'$name.,\'success\');\";\r\n        echo \'}, 100);</script>\';\r\n        mysqli_close($connection);', 1, '2019-02-23 09:15:55'),
(5, 1, 1, 'Java Task', '$student_id', 1, '2019-02-23 09:17:40'),
(6, 1, 1, 'HTML TASK', '31407936', 1, '2019-02-23 09:21:42'),
(7, 1, 1, 'Java Task', 'Mysql and SQLite.', 1, '2019-02-23 09:07:27'),
(8, 1, 1, 'Java Task', 'Mysql and SQLite.', 1, '2019-02-23 09:08:37'),
(9, 1, 1, 'Java Task', '31407936', 1, '2019-02-23 09:15:12'),
(10, 1, 1, 'Java Task', ' echo \'<script type=\"text/javascript\">\';\r\n        echo \"setTimeout(function () { swal(\'Task Assignment\',\'Successfully assigned task to \'$name.,\'success\');\";\r\n        echo \'}, 100);</script>\';\r\n        mysqli_close($connection);', 1, '2019-02-23 09:15:55'),
(11, 1, 1, 'Java Task', '$student_id', 1, '2019-02-23 09:17:40'),
(12, 1, 1, 'HTML TASK', '31407936', 1, '2019-02-23 09:21:42');

-- --------------------------------------------------------

--
-- Table structure for table `university_table`
--

CREATE TABLE `university_table` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `year_of_study` int(11) NOT NULL,
  `course_of_study` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university_table`
--

INSERT INTO `university_table` (`id`, `student_id`, `name`, `reg_no`, `year_of_study`, `course_of_study`, `created_at`) VALUES
(1, 1, 'Chuka University', 'EB3/17613/14', 5, 'Bsc Applied Computer Science', '2019-02-23 07:57:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `national_id` (`national_id`),
  ADD UNIQUE KEY `secret_code` (`secret_code`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- Indexes for table `attachment_table`
--
ALTER TABLE `attachment_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hub_table`
--
ALTER TABLE `hub_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_table`
--
ALTER TABLE `notification_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisor_table`
--
ALTER TABLE `supervisor_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `national_id` (`national_id`),
  ADD UNIQUE KEY `secret_code` (`secret_code`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- Indexes for table `task_table`
--
ALTER TABLE `task_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `university_table`
--
ALTER TABLE `university_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attachment_table`
--
ALTER TABLE `attachment_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hub_table`
--
ALTER TABLE `hub_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `notification_table`
--
ALTER TABLE `notification_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supervisor_table`
--
ALTER TABLE `supervisor_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `task_table`
--
ALTER TABLE `task_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `university_table`
--
ALTER TABLE `university_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
