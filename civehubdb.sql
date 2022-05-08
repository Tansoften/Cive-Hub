-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2021 at 10:12 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `civehubdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catID` varchar(20) NOT NULL,
  `catName` varchar(30) NOT NULL,
  `catDesc` text DEFAULT NULL,
  `userID` varchar(20) NOT NULL,
  `addedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catID`, `catName`, `catDesc`, `userID`, `addedAt`, `updatedAt`) VALUES
('Cat_001', 'Entertainment', 'It involves music and fashion in our college', 'UID_002', '2021-03-04 20:32:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `cID` varchar(15) NOT NULL,
  `userID` varchar(20) NOT NULL,
  `rank` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `idlogs`
--

CREATE TABLE `idlogs` (
  `userID` int(11) DEFAULT NULL,
  `progID` int(11) DEFAULT NULL,
  `catID` int(11) DEFAULT NULL,
  `roomID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `progID` varchar(10) NOT NULL,
  `progAbbr` varchar(10) NOT NULL,
  `progName` varchar(30) NOT NULL,
  `progyears` int(11) NOT NULL,
  `addedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `roleID` int(11) NOT NULL,
  `roleName` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleID`, `roleName`) VALUES
(1, 'Admin'),
(2, 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `roomID` varchar(20) NOT NULL,
  `roomTitle` varchar(30) NOT NULL,
  `roomDesc` text DEFAULT NULL,
  `userID` varchar(20) NOT NULL,
  `catID` varchar(20) NOT NULL,
  `addedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomID`, `roomTitle`, `roomDesc`, `userID`, `catID`, `addedAt`, `updatedAt`) VALUES
('Room_001', ' HipHop Music', 'For people who like the bass beats', 'UID_002', 'Cat_001', '2021-03-04 20:34:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roommsg`
--

CREATE TABLE `roommsg` (
  `msgID` int(11) NOT NULL,
  `userID` varchar(20) NOT NULL,
  `roomID` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `attachments` varchar(255) DEFAULT NULL,
  `addedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roommsg`
--

INSERT INTO `roommsg` (`msgID`, `userID`, `roomID`, `message`, `attachments`, `addedAt`) VALUES
(162, 'UID_002', 'Room_001', 'hey there', '', '2021-03-04 20:35:21'),
(163, 'UID_001', 'Room_001', 'yes wassp\r\n', '', '2021-03-04 20:46:04'),
(164, 'UID_001', 'Room_001', 'Mr Beni Hi', '', '2021-03-04 20:46:52'),
(165, 'UID_002', 'Room_001', 'Oya niambie mwanangu', '', '2021-03-04 20:50:29'),
(166, 'UID_001', 'Room_001', 'unamjua jz', '', '2021-03-04 20:50:43'),
(167, 'UID_002', 'Room_001', 'Yule mchizi mkali kinyama', '', '2021-03-04 20:51:03'),
(168, 'UID_001', 'Room_001', 'niggas in paris man\r\n', '', '2021-03-04 20:51:49'),
(169, 'UID_001', 'Room_001', 'ana piga vitu kinoma mzee', '', '2021-03-04 20:54:17'),
(170, 'UID_002', 'Room_001', 'Amna kitu pale amzid akon', '', '2021-03-04 20:55:09'),
(171, 'UID_001', 'Room_001', 'akon mchawi tu yule hana chochote', '', '2021-03-04 20:55:40'),
(172, 'UID_002', 'Room_001', '', 'VID_20210304_23562120210304090323.mp4', '2021-03-04 20:56:23');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `userID` varchar(20) NOT NULL,
  `YoS` int(11) NOT NULL,
  `progID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lasttName` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` char(1) NOT NULL,
  `roleID` int(11) NOT NULL,
  `addedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `password`, `firstName`, `lasttName`, `email`, `phone`, `gender`, `roleID`, `addedAt`, `updatedAt`) VALUES
('UID_001', 'ambokile', 'BARAKA', 'AMBOKILE', 'ambokile@gmail.com', '0712044251', '', 2, '2021-03-04 20:42:48', NULL),
('UID_002', 'admin', 'BENI', 'JOHN', 'benivurunya3@gmail.com', '0712541604', '', 1, '2021-03-04 20:43:13', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD PRIMARY KEY (`cID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`progID`),
  ADD UNIQUE KEY `progName` (`progName`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `catID` (`catID`);

--
-- Indexes for table `roommsg`
--
ALTER TABLE `roommsg`
  ADD PRIMARY KEY (`msgID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `roomID` (`roomID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD KEY `userID` (`userID`),
  ADD KEY `progID` (`progID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `roleID` (`roleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `roleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roommsg`
--
ALTER TABLE `roommsg`
  MODIFY `msgID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD CONSTRAINT `coordinator_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `room_ibfk_2` FOREIGN KEY (`catID`) REFERENCES `category` (`catID`);

--
-- Constraints for table `roommsg`
--
ALTER TABLE `roommsg`
  ADD CONSTRAINT `roommsg_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `roommsg_ibfk_2` FOREIGN KEY (`roomID`) REFERENCES `room` (`roomID`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`progID`) REFERENCES `program` (`progID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`roleID`) REFERENCES `role` (`roleID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
