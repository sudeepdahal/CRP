-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2016 at 04:28 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crpv2`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `bookid` varchar(50) NOT NULL,
  `booktitle` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `description` tinytext NOT NULL,
  `totalbook` int(4) NOT NULL,
  `department` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookid`, `booktitle`, `author`, `description`, `totalbook`, `department`, `category`) VALUES
('1', 'c', 'ram', 'c language', 4, 'computer', 'programming'),
('12', 'fds', 'afds', 'fda', 0, 'computer', 'physics'),
('bid1', 'book1', 'author1', 'description', 10, 'computer', 'programming');

-- --------------------------------------------------------

--
-- Table structure for table `club_member`
--

CREATE TABLE IF NOT EXISTS `club_member` (
`memberid` int(4) NOT NULL,
  `userid` varchar(40) NOT NULL,
  `name` varchar(66) NOT NULL,
  `active_date` date NOT NULL,
  `post` varchar(44) NOT NULL,
  `inactive_date` date NOT NULL,
  `status` binary(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_member`
--

INSERT INTO `club_member` (`memberid`, `userid`, `name`, `active_date`, `post`, `inactive_date`, `status`) VALUES
(1, 'stu', 'Student User', '0000-00-00', 'a', '2016-09-03', 0x30);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` varchar(50) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `credit` int(2) NOT NULL,
  `semester` int(2) NOT NULL,
  `detail` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `credit`, `semester`, `detail`) VALUES
('fdsa', 'afds', 2, 3, '<p>ds</p>\r\n'),
('sd', 'fd', 0, 2, '<p>afds</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `issuebook`
--

CREATE TABLE IF NOT EXISTS `issuebook` (
`issueid` int(4) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `bookid` varchar(60) NOT NULL,
  `issuedate` date NOT NULL,
  `due_date` date NOT NULL,
  `issueddate` date NOT NULL,
  `fine` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuebook`
--

INSERT INTO `issuebook` (`issueid`, `userid`, `bookid`, `issuedate`, `due_date`, `issueddate`, `fine`) VALUES
(1, 'stu', 'bid1', '2016-08-27', '2016-08-03', '2016-08-27', 200);

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
`marksid` int(5) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `teacherid` varchar(50) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `obtainmarks` int(3) NOT NULL,
  `fullmarks` int(3) NOT NULL,
  `passmarks` int(3) NOT NULL,
  `semester` int(2) NOT NULL,
  `term` int(2) NOT NULL,
  `date` date NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
`nid` int(4) NOT NULL,
  `publish_date` date NOT NULL,
  `title` varchar(256) NOT NULL,
  `body` text NOT NULL,
  `type` varchar(77) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `postby` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`nid`, `publish_date`, `title`, `body`, `type`, `userid`, `postby`) VALUES
(1, '2016-08-28', 'aaaa', '', 'all', 'li', 'library'),
(2, '2016-09-01', 'notif1', '<p>dsffsda<strong>dsfa<em>dsfasddsf</em></strong></p>\r\n', 'all', 'ad', 'admin'),
(3, '2016-09-02', 'as', '<p>sdaf</p>\r\n', 'all', 'ac', 'account'),
(4, '2016-09-02', 'wqe', '<p>weq</p>\r\n', 'all', 'ac', 'account'),
(5, '2016-09-02', 'dwq', '<p>sad</p>\r\n', 'all', 'ac', 'account'),
(6, '2016-09-02', 'dwq', '<p>sad</p>\r\n', 'all', 'ac', 'account'),
(7, '2016-09-02', 'dwq', '<p>sad</p>\r\n', 'all', 'ac', 'account'),
(8, '2016-09-02', 'dwq', '<p>sad</p>\r\n', 'all', 'ac', 'account'),
(9, '2016-09-02', 'dwq', '<p>sad</p>\r\n', 'all', 'ac', 'account'),
(10, '2016-09-02', 'dwq', '<p>sad</p>\r\n', 'all', 'ac', 'account'),
(11, '2016-09-02', 'dwq', '<p>sad</p>\r\n', 'all', 'ac', 'account'),
(12, '2016-09-02', 'dwq', '<p>sad</p>\r\n', 'all', 'ac', 'account'),
(13, '2016-09-02', 'dwq', '<p>sad</p>\r\n', 'all', 'ac', 'account'),
(14, '2016-09-02', 'dwq', '<p>sad</p>\r\n', 'all', 'ac', 'account'),
(15, '2016-09-02', 'dwq', '<p>sad</p>\r\n', 'all', 'ac', 'account'),
(16, '2016-09-02', 'dwq', '<p>sad</p>\r\n', 'all', 'ac', 'account'),
(17, '2016-09-02', 'dwq', '<p>sad</p>\r\n', 'all', 'ac', 'account'),
(18, '2016-09-02', 'dwq', '<p>sad</p>\r\n', 'all', 'ac', 'account'),
(19, '2016-09-02', 'dwq', '<p>sad</p>\r\n', 'all', 'ac', 'account'),
(20, '2016-09-02', 'wqe', '', 'all', 'ac', 'account'),
(21, '2016-09-02', 'wqe', '', 'all', 'ac', 'account'),
(22, '2016-09-02', 'wqe', '', 'all', 'ac', 'account'),
(23, '2016-09-02', 'df', '<p>sdf</p>\r\n', 'all', 'ac', 'account'),
(24, '2016-09-03', '342', '<p>fdsa</p>\r\n', 'all', 'li', 'library'),
(25, '2016-09-03', 'sdf', '<p>fdas</p>\r\n', 'all', 'ad', 'admin'),
(26, '2016-09-03', 'sfd', '<p>fsd</p>\r\n', 'all', 'cl', 'Club'),
(27, '2016-09-03', 'fds', '<p>fads</p>\r\n', 'all', 'de', 'department'),
(28, '2016-09-03', 'xfgc', '<p>xcv</p>\r\n', 'all', 'ad', 'admin'),
(29, '2016-09-03', 'fds', '<p>afsd</p>\r\n', 'all', 'cl', 'Club'),
(30, '2016-09-03', 'fds', '<p>fdas</p>\r\n', 'all', 'ad', 'admin'),
(31, '2016-09-03', 'fds', '<p>afds</p>\r\n', 'all', 'sta', 'staff'),
(32, '2016-09-04', 'ds', '<p>fdsa</p>\r\n', 'all', 'cl', 'Club'),
(33, '2016-09-04', 'reqwe', '<p>qwrewerqrqwe</p>\r\n', 'all', 'cl', 'Club'),
(34, '2016-09-04', 'fdsa', '<p>fsda</p>\r\n', 'all', 'ac', 'account'),
(35, '2016-09-04', 'fdsa', '<p>fsda</p>\r\n', 'all', 'ac', 'account');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
`qid` int(4) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `semester` int(2) NOT NULL,
  `term` int(2) NOT NULL,
  `qbody` longtext NOT NULL,
  `fullmarks` int(3) NOT NULL,
  `passmarks` int(3) NOT NULL,
  `date` date NOT NULL,
  `time` int(2) NOT NULL,
  `year` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_account`
--

CREATE TABLE IF NOT EXISTS `staff_account` (
`staffpayid` int(4) NOT NULL,
  `userid` varchar(55) NOT NULL,
  `payeddate` date NOT NULL,
  `payedamount` int(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_account`
--

INSERT INTO `staff_account` (`staffpayid`, `userid`, `payeddate`, `payedamount`) VALUES
(1, 'sta', '2016-08-28', 30000),
(2, 'sta', '2016-09-02', 299),
(3, 'sta', '2016-09-02', 33),
(4, 'sta', '2016-09-02', 33),
(5, 'sta', '2016-09-02', 44),
(6, 'sta', '2016-09-02', 33),
(7, 'sta', '2016-09-02', 44),
(8, 'sta', '2016-09-03', 34);

-- --------------------------------------------------------

--
-- Table structure for table `student_account`
--

CREATE TABLE IF NOT EXISTS `student_account` (
`studentpayid` int(6) NOT NULL,
  `userid` varchar(55) NOT NULL,
  `totalfee` int(8) NOT NULL,
  `payedamount` int(5) NOT NULL,
  `payeddate` date DEFAULT NULL,
  `due` int(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_account`
--

INSERT INTO `student_account` (`studentpayid`, `userid`, `totalfee`, `payedamount`, `payeddate`, `due`) VALUES
(1, 'stu', 500000, 0, NULL, 500000),
(2, 'stu', 500000, 20000, '2016-08-28', 480000),
(3, 'stu', 500000, 80000, '2016-08-28', 400000),
(4, 'stu', 500000, 3488, '2016-08-31', 396512),
(5, '06911', 45546, 0, NULL, 3243),
(6, '06911', 3243, 1200, '2016-08-31', 2043),
(7, '06911', 3243, 2100, '2016-08-31', -57),
(8, '06910', 40000, 0, NULL, 40000),
(9, '06910', 40000, 10000, '2016-08-31', 30000),
(10, '06910', 40000, 5000, '2016-08-31', 25000),
(11, '06910', 40000, 1500, '2016-08-31', 23500),
(12, 'akr', 5000, 0, NULL, 5000),
(13, 'akr', 5000, 1000, '2016-09-01', 4000),
(14, '06911', 3243, -58, '2016-09-03', 1),
(15, '06911', 3243, 1, '2016-09-03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` varchar(50) NOT NULL,
  `password` varchar(22) NOT NULL,
  `name` varchar(66) NOT NULL,
  `usertype` varchar(12) NOT NULL,
  `security_code` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `password`, `name`, `usertype`, `security_code`) VALUES
('06910', 'pass', 'Ram', 'student', ''),
('06911', 'apple', 'Sudeep', 'student', ''),
('ac', 'pass', 'account user', 'account', ''),
('ad', 'pass', 'admin user', 'admin', 'dsf'),
('akr', 'akr', 'akr', 'student', ''),
('cl', 'pass', 'club user', 'club', '23'),
('de', 'pass', 'department user', 'department', 'sd'),
('ex', 'pass', 'exam user', 'exam', 'exs'),
('fd', 'afds', 'fdsa', 'admin', ''),
('li', 'lipass', 'library user', 'library', '12'),
('qq', 'aa', 'lala', 'student', ''),
('ssdf', 'fsda', 'fsda', 'library', ''),
('sss', 'sss', 'sss', 'student', ''),
('sta', 'change', 'Staff User', 'staff', 'sfd'),
('stu', 'pass', 'Student User', 'student', 'sstu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
 ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `club_member`
--
ALTER TABLE `club_member`
 ADD PRIMARY KEY (`memberid`), ADD KEY `userid` (`userid`), ADD KEY `name` (`name`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
 ADD PRIMARY KEY (`course_id`), ADD KEY `course_name` (`course_name`), ADD KEY `semester` (`semester`);

--
-- Indexes for table `issuebook`
--
ALTER TABLE `issuebook`
 ADD PRIMARY KEY (`issueid`), ADD KEY `userid` (`userid`), ADD KEY `bookid` (`bookid`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
 ADD PRIMARY KEY (`marksid`), ADD KEY `course_id` (`course_id`), ADD KEY `userid` (`userid`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
 ADD PRIMARY KEY (`nid`), ADD KEY `userid` (`userid`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
 ADD PRIMARY KEY (`qid`), ADD KEY `teacherid` (`userid`), ADD KEY `course_id` (`course_id`), ADD KEY `course_name` (`course_name`), ADD KEY `semester` (`semester`);

--
-- Indexes for table `staff_account`
--
ALTER TABLE `staff_account`
 ADD PRIMARY KEY (`staffpayid`), ADD KEY `userid` (`userid`);

--
-- Indexes for table `student_account`
--
ALTER TABLE `student_account`
 ADD PRIMARY KEY (`studentpayid`), ADD KEY `userid` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`userid`), ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `club_member`
--
ALTER TABLE `club_member`
MODIFY `memberid` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `issuebook`
--
ALTER TABLE `issuebook`
MODIFY `issueid` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
MODIFY `marksid` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
MODIFY `nid` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
MODIFY `qid` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff_account`
--
ALTER TABLE `staff_account`
MODIFY `staffpayid` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `student_account`
--
ALTER TABLE `student_account`
MODIFY `studentpayid` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `club_member`
--
ALTER TABLE `club_member`
ADD CONSTRAINT `club_member_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`),
ADD CONSTRAINT `club_member_ibfk_2` FOREIGN KEY (`name`) REFERENCES `users` (`name`);

--
-- Constraints for table `issuebook`
--
ALTER TABLE `issuebook`
ADD CONSTRAINT `issuebook_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`),
ADD CONSTRAINT `issuebook_ibfk_2` FOREIGN KEY (`bookid`) REFERENCES `books` (`bookid`);

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
ADD CONSTRAINT `marks_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`),
ADD CONSTRAINT `question_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
ADD CONSTRAINT `question_ibfk_3` FOREIGN KEY (`semester`) REFERENCES `course` (`semester`),
ADD CONSTRAINT `question_ibfk_4` FOREIGN KEY (`course_name`) REFERENCES `course` (`course_name`);

--
-- Constraints for table `staff_account`
--
ALTER TABLE `staff_account`
ADD CONSTRAINT `staff_account_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

--
-- Constraints for table `student_account`
--
ALTER TABLE `student_account`
ADD CONSTRAINT `student_account_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
