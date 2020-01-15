-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 24, 2019 at 03:21 PM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attachment_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table`
(
    `id`           int(11)      NOT NULL,
    `admin_name`   varchar(255) NOT NULL,
    `email`        varchar(255) NOT NULL,
    `phone_number` varchar(255) NOT NULL,
    `national_id`  varchar(255) NOT NULL,
    `secret_code`  varchar(255) NOT NULL,
    `password`     varchar(255) NOT NULL,
    `created_at`   datetime     NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `admin_name`, `email`, `phone_number`, `national_id`, `secret_code`, `password`,
                           `created_at`)
VALUES (1, ' TechGyal', 'admin@test.com', '0725912502', '12345678', '49498', '25d55ad283aa400af464c76d713c07ad',
        '2018-11-18 05:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `attachment_table`
--

CREATE TABLE `attachment_table`
(
    `id`            int(11)      NOT NULL,
    `student_id`    int(11)      NOT NULL,
    `start_date`    date         NOT NULL,
    `end_date`      date         NOT NULL,
    `section`       varchar(255) NOT NULL,
    `supervisor_id` int(11)      NOT NULL,
    `created_at`    datetime     NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Dumping data for table `attachment_table`
--

-- INSERT INTO `attachment_table` (`id`, `student_id`, `start_date`, `end_date`, `section`, `supervisor_id`, `created_at`) VALUES
-- (1, 1, '2018-11-30', '2019-06-29', 'ICT', 1, '2018-11-18 09:10:48');

-- --------------------------------------------------------

--
-- Table structure for table `hub_table`
--

CREATE TABLE `hub_table`
(
    `id`         int(11)  NOT NULL,
    `student_id` int(11)  NOT NULL,
    `learn`      longtext NOT NULL,
    `skill`      longtext NOT NULL,
    `created_at` datetime NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification_table`
--

CREATE TABLE `notification_table`
(
    `id`            int(11)      NOT NULL,
    `admin_id`      int(11)      NOT NULL,
    `supervisor_id` int(11)      NOT NULL,
    `student_id`    int(11)      NOT NULL,
    `subject`       varchar(255) NOT NULL,
    `message`       varchar(255) NOT NULL,
    `status`        int(11)      NOT NULL,
    `created_at`    datetime     NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table`
(
    `id`           int(11)      NOT NULL,
    `student_name` varchar(255) NOT NULL,
    `phone_number` varchar(255) NOT NULL,
    `national_id`  varchar(255) NOT NULL,
    `email`        varchar(255) NOT NULL,
    `address`      varchar(255) NOT NULL,
    `gender`       varchar(255) NOT NULL,
    `secret_code`  varchar(255) NOT NULL,
    `password`     varchar(255) NOT NULL,
    `created_at`   datetime     NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Dumping data for table `student_table`
--

-- INSERT INTO `student_table` (`id`, `student_name`, `phone_number`, `national_id`, `email`, `address`, `gender`, `secret_code`, `password`, `created_at`) VALUES
-- (1, 'Vincent Ososi', '12345678', '12345678', 'generaloisebe@gmail.com', '1316', 'Male', '13675', '25d55ad283aa400af464c76d713c07ad', '2018-11-18 09:10:48');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor_table`
--

CREATE TABLE `supervisor_table`
(
    `id`              int(11)      NOT NULL,
    `supervisor_name` varchar(255) NOT NULL,
    `email`           varchar(255) NOT NULL,
    `phone_number`    varchar(255) NOT NULL,
    `national_id`     varchar(255) NOT NULL,
    `secret_code`     varchar(255) NOT NULL,
    `password`        varchar(255) NOT NULL,
    `created_at`      datetime     NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Dumping data for table `supervisor_table`
--

-- INSERT INTO `supervisor_table` (`id`, `supervisor_name`, `email`, `phone_number`, `national_id`, `secret_code`, `password`, `created_at`) VALUES
-- (1, 'Vincent', 'generaloisebe@gmail.com', '12345678', '12345678', '30775', '25d55ad283aa400af464c76d713c07ad', '2018-11-18 07:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `university_table`
--

CREATE TABLE `university_table`
(
    `id`              int(11)      NOT NULL,
    `student_id`      int(11)      NOT NULL,
    `name`            varchar(255) NOT NULL,
    `reg_no`          varchar(255) NOT NULL,
    `year_of_study`   int(11)      NOT NULL,
    `course_of_study` varchar(255) NOT NULL,
    `created_at`      datetime     NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Dumping data for table `university_table`
--

-- INSERT INTO `university_table` (`id`, `student_id`, `name`, `reg_no`, `year_of_study`, `course_of_study`, `created_at`) VALUES
-- (1, 1, 'Maasai Mara University', 'EB3/17613/14', 1, 'Bsc Applied Computer Science', '2018-11-18 09:10:48');

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
    ADD PRIMARY KEY (`id`),
    ADD KEY `student_id` (`student_id`),
    ADD KEY `supervisor_id` (`supervisor_id`);

--
-- Indexes for table `hub_table`
--
ALTER TABLE `hub_table`
    ADD PRIMARY KEY (`id`),
    ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `notification_table`
--
ALTER TABLE `notification_table`
    ADD PRIMARY KEY (`id`),
    ADD KEY `admin_id` (`admin_id`),
    ADD KEY `supervisor_id` (`supervisor_id`),
    ADD KEY `student_id` (`student_id`);

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
-- Indexes for table `university_table`
--
ALTER TABLE `university_table`
    ADD PRIMARY KEY (`id`),
    ADD KEY `student_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;

--
-- AUTO_INCREMENT for table `attachment_table`
--
ALTER TABLE `attachment_table`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;

--
-- AUTO_INCREMENT for table `hub_table`
--
ALTER TABLE `hub_table`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification_table`
--
ALTER TABLE `notification_table`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 4;

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;

--
-- AUTO_INCREMENT for table `supervisor_table`
--
ALTER TABLE `supervisor_table`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;

--
-- AUTO_INCREMENT for table `university_table`
--
ALTER TABLE `university_table`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attachment_table`
--
ALTER TABLE `attachment_table`
    ADD CONSTRAINT `attachment_table_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_table` (`id`),
    ADD CONSTRAINT `attachment_table_ibfk_2` FOREIGN KEY (`supervisor_id`) REFERENCES `supervisor_table` (`id`);

--
-- Constraints for table `hub_table`
--
ALTER TABLE `hub_table`
    ADD CONSTRAINT `hub_table_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_table` (`id`);

--
-- Constraints for table `notification_table`
--
ALTER TABLE `notification_table`
    ADD CONSTRAINT `notification_table_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_table` (`id`),
    ADD CONSTRAINT `notification_table_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin_table` (`id`),
    ADD CONSTRAINT `notification_table_ibfk_3` FOREIGN KEY (`supervisor_id`) REFERENCES `supervisor_table` (`id`);

--
-- Constraints for table `university_table`
--
ALTER TABLE `university_table`
    ADD CONSTRAINT `university_table_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_table` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
