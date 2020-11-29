-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2020 at 05:38 PM
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
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `q_id` int(10) NOT NULL,
  `q_des` varchar(500) NOT NULL,
  `q_1` varchar(100) NOT NULL,
  `q_2` varchar(100) NOT NULL,
  `q_3` varchar(100) NOT NULL,
  `q_4` varchar(100) NOT NULL,
  `q_ans` int(10) NOT NULL,
  `quiz_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_id`, `q_des`, `q_1`, `q_2`, `q_3`, `q_4`, `q_ans`, `quiz_id`) VALUES
(1, 'What is a correct syntax to output Hello World in C++?', 'cout', 'printf', 'weuih', 'werew', 1, 2),
(2, 'Inside which HTML element do we put the JavaScript?', 'adda', 'qwd', 'dwed', 'wdd', 1, 2),
(3, 'Where is the correct place to insert a JavaScript?', 'adda', 'qwd', 'dwed', 'wdd', 1, 2),
(4, 'What is the correct syntax for referring to an external script called xxx.js?', 'adda', 'qwd', 'dwed', 'wdd', 1, 2),
(5, 'The external JavaScript file must contain the <script> tag.', 'adda', 'qwd', 'dwed', 'wdd', 1, 2),
(6, 'How do you write Hello World in an alert box?', 'adda', 'qwd', 'dwed', 'wdd', 1, 2),
(7, 'How do you create a function in JavaScript?', 'adda', 'qwd', 'dwed', 'wdd', 1, 3),
(8, 'What is XML', 'adda', 'qwd', 'dwed', 'wdd', 1, 3),
(9, 'sihdssiujfirjfn', 'adda', 'qwd', 'dwed', 'wdd', 1, 3),
(10, 'Xmll good', 'adda', 'qwd', 'dwed', 'wdd', 1, 3),
(12, 'ewifuiwreeeeeeeeeeeeerrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrjdfv fdvidfuhvud fviufrebf freiuhfuerv frheruifuierhifuherf', 'rfreafwefearf', 'efuwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwe', 'dwed', 'wdd', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quiz_id` int(10) NOT NULL,
  `quiz_name` varchar(50) NOT NULL,
  `quiz_duration` int(10) NOT NULL,
  `quiz_q_nb` int(10) NOT NULL,
  `quiz_st` int(10) NOT NULL,
  `quiz_et` int(10) NOT NULL,
  `quiz_marks` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quiz_id`, `quiz_name`, `quiz_duration`, `quiz_q_nb`, `quiz_st`, `quiz_et`, `quiz_marks`) VALUES
(2, 'JavaScript', 1, 5, 1491488000, 1691489000, 10),
(3, 'XML', 6, 5, 1491488000, 1691488000, 10),
(5, 'Python', 6, 5, 1491488000, 1691488000, 10),
(6, 'Database', 6, 5, 1491488000, 1581488000, 10),
(7, 'Compiler Design', 6, 5, 1491488000, 1581488000, 10),
(8, 'OPP', 6, 5, 1589987246, 1881488000, 10),
(9, 'Math', 6, 5, 1589988246, 1881488000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `r_id` int(10) NOT NULL,
  `quiz_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `score` int(10) NOT NULL,
  `time` int(10) NOT NULL,
  `taken` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `user_name`, `email`, `pass`) VALUES
(12, 'Marajul', 'islam', 'iammarajul', 'm.marajul@gmail.com', 'M.mokos'),
(13, 'Redowanul', 'Rifat', 'rifat11', 'r.redowanrifat@gmail.com', 'Iamrifat1234'),
(14, 'Redowanul Haq', 'Rifat', 'kabir113', 'rredowan.rifat@yahoo.com', '2'),
(15, 'Sajib', 'Roy', 'sajib1', 'saji5@gmail.com', '1234'),
(16, 'Tusher', 'Ahmed', 'Tusher1', 'tusher@gmail.com', '1234'),
(17, 'Marajul', 'Islam', 'Marajul1', 'mbjhkjhjjm@gmail.com', '1234'),
(18, 'Amit', 'Pal', 'amit1', 'amit@gmail.com', '12345'),
(19, 'Avilash', 'Saha', 'Avilash1', 'avilash@gmail.com', '1234'),
(20, 'hk', 'kjnj', 'yty', 'm.marajul23@gmail.com', '1'),
(21, 'Html', 'Css', 'Valolagena', 'sikbokoitebolen@gmail.com', '1234'),
(22, 'xas', 'sax', 'dwd', 'xsax@scsd.gvd', '1'),
(23, 'Marajul', 'islam', '11', 'marajul@gmail.com', '11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`q_id`),
  ADD KEY `quiz_id` (`quiz_id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `quiz_id` (`quiz_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `q_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quiz_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `r_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
