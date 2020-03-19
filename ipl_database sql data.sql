-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2020 at 12:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipl_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `batsmen`
--

CREATE TABLE `batsmen` (
  `Player_name` varchar(30) DEFAULT NULL,
  `Team_name` varchar(20) DEFAULT NULL,
  `Nationality` varchar(20) DEFAULT NULL,
  `total_matches` int(10) DEFAULT NULL,
  `runs` int(5) DEFAULT NULL,
  `jersey_number` int(5) DEFAULT NULL,
  `strike_rate` int(5) DEFAULT NULL,
  `fifties` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batsmen`
--

INSERT INTO `batsmen` (`Player_name`, `Team_name`, `Nationality`, `total_matches`, `runs`, `jersey_number`, `strike_rate`, `fifties`) VALUES
('M.S.Dhoni', 'Chennai super kings', 'Indian', 190, 4432, 7, 137, 23),
('Suresh Raina\r\n', 'Chennai super kings', 'Indian', 193, 5368, 3, 137, 38),
('Shane Watson', 'Chennai super kings', 'Australian\r\n', 134, 3575, 33, 139, 19),
('Ravindra Jadeja\r\n', 'Chennai super kings', 'Indian', 170, 1927, 5, 122, 0),
('Ravindra Jadeja\r\n', 'Chennai super kings', 'Indian', 170, 1927, 5, 122, 0),
('Ravindra Jadeja\r\n', 'Chennai super kings', 'Indian', 170, 1927, 5, 122, 0),
('Virat Kohli', 'Royal Challengers', 'Indian', 177, 5412, 18, 131, 36),
('AB deVillers\r\n', 'Royal Challengers', 'South African', 154, 4395, 17, 151, 33),
('Moeen ali', 'Royal Challengers', 'British', 16, 297, 8, 165, 3),
('Shreyas Iyer\r\n', 'Delhi Capitals', 'Indian', 62, 1681, 41, 126, 13),
('Shikhar Dhawan', 'Delhi Capitals', 'Indian', 159, 4597, 25, 124, 37);

-- --------------------------------------------------------

--
-- Table structure for table `bowlers`
--

CREATE TABLE `bowlers` (
  `Player_name` varchar(30) DEFAULT NULL,
  `team_name` varchar(20) DEFAULT NULL,
  `matches_played` int(5) DEFAULT NULL,
  `wickets` int(6) DEFAULT NULL,
  `economy` int(10) DEFAULT NULL,
  `four_wickets` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bowlers`
--

INSERT INTO `bowlers` (`Player_name`, `team_name`, `matches_played`, `wickets`, `economy`, `four_wickets`) VALUES
('Deepak Chahar', 'Chennai super kings', 34, 33, 8, 0),
('Yuzvendra Chahal\r\n', 'Royal Challengers', 84, 100, 8, 2),
('Umesh Yadav', 'Royal Challengers', 119, 119, 8, 2),
('Kagiso Rabada', 'Delhi Capitals', 18, 31, 8, 2),
('Ishant Sharma', 'Delhi Capitals', 89, 72, 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `Name` varchar(20) NOT NULL,
  `no_of_times_champions` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`Name`, `no_of_times_champions`) VALUES
('Chennai Super Kings', 3),
('Delhi Capitals', 0),
('Kings XI Punjab\r\n', 0),
('Kolkata Knight Rider', 2),
('Mumbai Indians\r\n', 4),
('Rajasthan Royals\r\n', 1),
('Royal Challengers ', 0),
('Sunrisers Hyderabad\r', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batsmen`
--
ALTER TABLE `batsmen`
  ADD KEY `Team_name` (`Team_name`);

--
-- Indexes for table `bowlers`
--
ALTER TABLE `bowlers`
  ADD KEY `team_name` (`team_name`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`Name`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `batsmen`
--
ALTER TABLE `batsmen`
  ADD CONSTRAINT `batsmen_ibfk_1` FOREIGN KEY (`Team_name`) REFERENCES `team` (`Name`);

--
-- Constraints for table `bowlers`
--
ALTER TABLE `bowlers`
  ADD CONSTRAINT `bowlers_ibfk_1` FOREIGN KEY (`team_name`) REFERENCES `team` (`Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
