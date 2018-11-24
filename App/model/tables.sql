-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2018 at 04:52 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT
= 0;
START TRANSACTION;
SET time_zone
= "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `batchrepresentative`
--

CREATE TABLE `batchrepresentative`
(
  `batch` int
(4) NOT NULL,
  `rep_id` int
(11) NOT NULL,
  `rep_name` text NOT NULL,
  `rep_phone` varchar
(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batchrepresentative`
--

INSERT INTO `batchrepresentative` (`
batch`,
`rep_id
`, `rep_name`, `rep_phone`) VALUES
(2012, 81, 'Joy Julian Gomes', '01824134362');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments`
(
  `regid` int
(11) NOT NULL,
  `trxID` int
(11) NOT NULL,
  `amount` int
(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo`
(
  `regid` int
(11) NOT NULL,
  `batch` int
(11) NOT NULL,
  `batch_repid` int
(11) NOT NULL,
  `name` text NOT NULL,
  `fat_name` text NOT NULL,
  `mot_name` text NOT NULL,
  `gender` text NOT NULL,
  `mat_state` int
(1) NOT NULL,
  `occupation` text NOT NULL,
  `designation` text NOT NULL,
  `spouse_attendee` int
(11) NOT NULL,
  `child_attendee` int
(11) NOT NULL,
  `total_amount` double NOT NULL,
  `paid_amount` double NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batchrepresentative`
--
ALTER TABLE `batchrepresentative`
ADD PRIMARY KEY
(`batch`),
ADD UNIQUE KEY `rep_id`
(`rep_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
ADD PRIMARY KEY
(`regid`),
ADD UNIQUE KEY `trxID`
(`trxID`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
ADD PRIMARY KEY
(`regid`),
ADD KEY `batch`
(`batch`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `regid` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=507;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY
(`regid`) REFERENCES `userinfo`
(`regid`);

--
-- Constraints for table `userinfo`
--
ALTER TABLE `userinfo`
ADD CONSTRAINT `userinfo_ibfk_1` FOREIGN KEY
(`batch`) REFERENCES `batchrepresentative`
(`batch`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
