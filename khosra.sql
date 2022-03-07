-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 09:04 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khosra`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `Admin_ID` int(11) NOT NULL,
  `Admin_Name` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `phone_no` char(11) DEFAULT NULL,
  `pass` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`Admin_ID`, `Admin_Name`, `email`, `phone_no`, `pass`) VALUES
(161, 'ADIB', 'adib@gmail.com', '01845381909', 123),
(162, 'Fabliha', 'fab@gmail.com', '01559080736', 456);

-- --------------------------------------------------------

--
-- Table structure for table `applycants`
--

CREATE TABLE `applycants` (
  `applicant_ID` int(10) NOT NULL,
  `applicant_Name` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `phone_no` char(11) DEFAULT NULL,
  `selected` int(10) DEFAULT '0',
  `admin_id` int(11) DEFAULT NULL,
  `qualification` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applycants`
--

INSERT INTO `applycants` (`applicant_ID`, `applicant_Name`, `email`, `phone_no`, `selected`, `admin_id`, `qualification`) VALUES
(254, 'Akib', 'asfasf', '54859987456', 0, NULL, 'Developer'),
(11141256, 'Reza', 'reza@gmail.com', '016547825', 0, NULL, 'implementer'),
(11151254, 'Sheikh Farhan Rahaman', 'freaking.crazy@gmail.com', '01245698753', 0, NULL, 'implementer'),
(11161040, 'Sadia Islam', 'sislam161040@bscse.uiu.ac', '01700864847', 0, NULL, 'implementer');

-- --------------------------------------------------------

--
-- Table structure for table `communication`
--

CREATE TABLE `communication` (
  `message_ID` int(10) NOT NULL,
  `message` text,
  `sender_ID` int(10) DEFAULT NULL,
  `receiver_ID` int(10) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `times` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `communication`
--

INSERT INTO `communication` (`message_ID`, `message`, `sender_ID`, `receiver_ID`, `dates`, `times`) VALUES
(4, 'Adib', 156, 157, '2018-09-16', '16:13:49'),
(5, 'Ekta shomosha dise. Tomra', 156, 201, '2018-09-16', '16:16:50'),
(6, 'Ekta shomosha dise. Tomra', 156, 201, '2018-09-16', '16:18:09'),
(7, 'Ekta shomosha dise. Tomra jodi kaaj na sesh koro amra shuru korte parbo na.', 156, 201, '2018-09-16', '16:19:22'),
(8, 'It\'s done adib', NULL, 157, '2018-09-16', '23:30:11'),
(12, 'Hello', 156, 201, '2018-09-17', '12:07:49'),
(13, 'HI darling', 156, 201, '2018-09-17', '12:21:56'),
(14, 'Still working', 157, 156, '2018-09-17', '12:23:25'),
(15, 'kaj sesh', 157, 201, '2018-09-17', '12:37:15'),
(16, 'kaj sesh', 157, 201, '2018-09-17', '12:46:24'),
(17, 'How are  you', 156, 157, '2018-09-17', '13:51:09'),
(19, 'Need Help', 23, 156, '2019-04-03', '11:35:42'),
(20, 'Hello', 23, 156, '2019-04-03', '11:39:37'),
(21, 'Hello', 23, 156, '2019-04-03', '11:40:00'),
(23, 'Mahfuj kaj kore na', 23, 156, '2019-04-03', '11:42:50');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_ID` int(10) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `phone_num` char(11) DEFAULT NULL,
  `hire_date` date DEFAULT NULL,
  `qualification` varchar(25) DEFAULT NULL,
  `salary` int(10) DEFAULT NULL,
  `sector_ID` int(10) DEFAULT NULL,
  `manager_ID` int(11) DEFAULT '0',
  `pass` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_ID`, `name`, `email`, `phone_num`, `hire_date`, `qualification`, `salary`, `sector_ID`, `manager_ID`, `pass`) VALUES
(21, 'rabeya', 'rab@gmail.com', '01236547896', '2018-07-01', 'software', 20000, 101, 157, 1234),
(22, 'atika', 'ati@gmail.com', '01845381909', '2018-08-07', 'networks', 30000, 102, 156, 1234),
(23, 'sabik', 'sab@gmail.com', '02316454794', '2018-07-12', 'networks', 40000, 102, 156, 1234),
(24, 'sagor', 'sag@gmail.com', '01245796301', '2018-07-18', 'accounting', 20000, 103, 201, 223),
(156, 'Mahfuj', 'mah@gmail.com', '01521212582', '2016-02-01', 'implementer', 400000, 102, 0, 110),
(157, 'Urmee', 'urm@gmail.com', '01683802830', '2016-02-02', 'developer', 400000, 101, 0, 111),
(201, 'Nazia', 'naz@gmail.com', '01869457273', '2016-05-26', 'Accounting', 300000, 103, 0, 112),
(203, 'shil', 'shil@gmail.com', '1234567892', '2015-07-01', 'programmer', 450000, 101, 157, 124);

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE `sector` (
  `sector_ID` int(10) NOT NULL,
  `sector_name` varchar(25) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sector`
--

INSERT INTO `sector` (`sector_ID`, `sector_name`, `description`) VALUES
(101, 'Software_development', 'Software development is the process of conceiving, specifying, designing, programming, documenting, testing, and bug fixing involved in creating and maintaining applications, frameworks, or other software components.'),
(102, 'Networking', 'Networking is a process that fosters the exchange of information and ideas among individuals or groups that share a common interest. It may be for social or business purposes. Professionals connect their business network through a series of symbolic ties '),
(103, 'Sales and Marketing', 'sales and marketing is vital for successful business growth. Selling or making sales consists of interpersonal interaction-the one-on-one meetings, telephone calls and networking-that you engage in with prospects and customers.');

-- --------------------------------------------------------

--
-- Table structure for table `sub_task`
--

CREATE TABLE `sub_task` (
  `subtask_ID` int(10) NOT NULL,
  `subtask` varchar(25) DEFAULT NULL,
  `status` int(10) DEFAULT '0',
  `task_ID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_task`
--

INSERT INTO `sub_task` (`subtask_ID`, `subtask`, `status`, `task_ID`) VALUES
(64, 'c', 1, 66),
(65, 'b', 1, 66),
(66, 'd', 1, 66),
(67, '1', 1, 67),
(68, '2', 1, 67),
(69, '3', 1, 67);

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `task_id` int(10) NOT NULL,
  `task` varchar(50) DEFAULT NULL,
  `deadline` datetime DEFAULT NULL,
  `progress` int(10) DEFAULT '0',
  `pre_requisite` varchar(255) DEFAULT NULL,
  `dependency` varchar(255) DEFAULT NULL,
  `Assigned_to` int(10) DEFAULT NULL,
  `Assigned_by` int(10) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`task_id`, `task`, `deadline`, `progress`, `pre_requisite`, `dependency`, `Assigned_to`, `Assigned_by`, `description`) VALUES
(0, 'dummy', NULL, 100, NULL, NULL, NULL, NULL, NULL),
(66, 'A', '2019-04-26 01:00:00', 100, '', '', 22, 156, 'A'),
(67, 'B', '2019-04-11 01:00:00', 100, '', '', 23, 156, 'B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`Admin_ID`),
  ADD UNIQUE KEY `uq` (`email`);

--
-- Indexes for table `applycants`
--
ALTER TABLE `applycants`
  ADD PRIMARY KEY (`applicant_ID`),
  ADD UNIQUE KEY `uq` (`email`),
  ADD KEY `fk1` (`admin_id`);

--
-- Indexes for table `communication`
--
ALTER TABLE `communication`
  ADD PRIMARY KEY (`message_ID`),
  ADD KEY `fk4` (`sender_ID`),
  ADD KEY `fk5` (`receiver_ID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_ID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk2` (`manager_ID`),
  ADD KEY `fk3` (`sector_ID`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`sector_ID`),
  ADD UNIQUE KEY `uq` (`sector_name`);

--
-- Indexes for table `sub_task`
--
ALTER TABLE `sub_task`
  ADD PRIMARY KEY (`subtask_ID`),
  ADD KEY `fk7` (`task_ID`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `fk6` (`Assigned_to`),
  ADD KEY `fk8` (`Assigned_by`),
  ADD KEY `fk9` (`pre_requisite`),
  ADD KEY `fk10` (`dependency`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `communication`
--
ALTER TABLE `communication`
  MODIFY `message_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sub_task`
--
ALTER TABLE `sub_task`
  MODIFY `subtask_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `task_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applycants`
--
ALTER TABLE `applycants`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`admin_id`) REFERENCES `administrator` (`Admin_ID`);

--
-- Constraints for table `communication`
--
ALTER TABLE `communication`
  ADD CONSTRAINT `fk4` FOREIGN KEY (`sender_ID`) REFERENCES `employees` (`employee_ID`),
  ADD CONSTRAINT `fk5` FOREIGN KEY (`receiver_ID`) REFERENCES `employees` (`employee_ID`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`manager_ID`) REFERENCES `employees` (`employee_ID`),
  ADD CONSTRAINT `fk3` FOREIGN KEY (`sector_ID`) REFERENCES `sector` (`sector_ID`);

--
-- Constraints for table `sub_task`
--
ALTER TABLE `sub_task`
  ADD CONSTRAINT `fk7` FOREIGN KEY (`task_ID`) REFERENCES `works` (`task_id`);

--
-- Constraints for table `works`
--
ALTER TABLE `works`
  ADD CONSTRAINT `fk6` FOREIGN KEY (`Assigned_to`) REFERENCES `employees` (`employee_ID`),
  ADD CONSTRAINT `fk8` FOREIGN KEY (`Assigned_by`) REFERENCES `employees` (`employee_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
