-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 15, 2020 at 12:38 AM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.3.13-1+ubuntu18.04.1+deb.sury.org+1

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
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attachment_table`
--
ALTER TABLE `attachment_table`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hub_table`
--
ALTER TABLE `hub_table`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification_table`
--
ALTER TABLE `notification_table`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supervisor_table`
--
ALTER TABLE `supervisor_table`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `university_table`
--
ALTER TABLE `university_table`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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

