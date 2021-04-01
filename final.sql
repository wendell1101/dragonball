-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2021 at 10:28 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `username`, `password`, `name`, `image`) VALUES
(1, 'admin', 'admin', 'JURADA', 'fa1839c55070bf5cb53fd4a2e523641cadmin3.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `assessmentID` int(11) NOT NULL,
  `assessmentTitle` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `timer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`assessmentID`, `assessmentTitle`, `faculty`, `timer`) VALUES
(2, 'Assessment', '12', '2700'),
(3, '', '1600155', '0'),
(4, 'GOOGLE MEET', '1600155', '60');

-- --------------------------------------------------------

--
-- Table structure for table `assessmentform`
--

CREATE TABLE `assessmentform` (
  `amcID` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `choice1` varchar(255) NOT NULL,
  `choice2` varchar(255) NOT NULL,
  `choice3` varchar(255) NOT NULL,
  `choice4` varchar(255) NOT NULL,
  `correct` varchar(255) NOT NULL,
  `assessmentID` varchar(255) NOT NULL,
  `roomType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessmentform`
--

INSERT INTO `assessmentform` (`amcID`, `question`, `choice1`, `choice2`, `choice3`, `choice4`, `correct`, `assessmentID`, `roomType`) VALUES
(6, 'MC', 'A', 'B', 'C', 'D', 'C', '2', '1'),
(7, 'T F', 'TRUE', 'FALSE', '', '', 'B', '2', '2'),
(8, 'I', '', '', '', '', 'i', '2', '3'),
(9, 'GOOLET MEE LINK', 'TRUE', 'FALSE', '', '', 'A', '4', '2'),
(10, 'ECOMS          GOOGLE MEET', 'TRUE', 'FALSE', '', '', 'A', '4', '2'),
(11, 'SAD2 5PM/7PM        GOOGLE MEET   http://localhost/pptech/faculty/record.php?ai=4', 'TRUE', 'FALSE', '', '', 'A', '4', '2');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `classID` int(11) NOT NULL,
  `section` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`classID`, `section`, `subject`, `faculty`) VALUES
(2, '2', 'THESIS', '12'),
(6, '2', 'Shabuhan', '666'),
(7, '2', '', '1600155'),
(8, '1', '', '1600155'),
(9, '1', 'fsfdfdfd', '1600155'),
(10, '2', '', '162345'),
(13, '1', '', 'admin1'),
(14, '2', '', 'admin1'),
(15, '7', '', 'TUGADIFACULTY'),
(16, '3', '', 'admin2'),
(17, '1', '', 'admin2'),
(19, '3', '', 'try'),
(22, '1', 'CEDRRRROOOOO', 'try1'),
(23, '2', 'CEDRRRROOOOO', 'try1'),
(24, '7', 'CEDRRRROOOOO', '12-4884-00'),
(34, '1', 'Monday- 7:30-12:30PM ELECT-415', 'faculty3'),
(35, '1', 'Friday- 7:30-12:30PM CS-ELECT-416', 'faculty3'),
(37, '1', 'Monday- 7:30-12:30PM ELECT-415', 'faculty2'),
(39, '2', 'Monday- 7:30-12:30PM ELECT-415', 'faculty2'),
(44, '1', 'Monday- 7:30-12:30PM ELECT-415', '1412'),
(45, '4', 'Friday- 1:00-6:00PM ELECT-414', '2021-CTYA'),
(48, '4', 'Sunday- 8:00-11:AM & 2:00:5:00PM CS-4123L2', 'admin3'),
(49, '4', 'Friday- 1:00-6:00PM ELECT-414', '2021-F-1'),
(66, '1', 'Monday- 7:30-12:30PM ELECT-415', 'f1'),
(67, '3', 'Monday- 7:30-12:30PM ELECT-415', 'f1');

-- --------------------------------------------------------

--
-- Table structure for table `classmember`
--

CREATE TABLE `classmember` (
  `cmID` int(11) NOT NULL,
  `classID` varchar(255) NOT NULL,
  `member` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classmember`
--

INSERT INTO `classmember` (`cmID`, `classID`, `member`, `status`, `active`) VALUES
(2, '2', '1234', '1', '0'),
(3, '2', '123', '1', '0'),
(12, '6', '44', '0', '0'),
(13, '10', '44', '1', '0'),
(17, '10', '161234', '1', '0'),
(25, '14', '44', '1', '0'),
(26, '13', 'monitoring1', '1', '0'),
(27, '14', 'monitoring1', '1', '0'),
(28, '15', 'monitoring1', '1', '0'),
(29, '13', 'user1', '1', '0'),
(30, '14', 'user1', '0', '0'),
(31, '17', '123', '1', '0'),
(32, '17', '12345', '1', '0'),
(33, '17', '161234', '1', '0'),
(34, '17', 'user1', '1', '0'),
(35, '17', 'monitoring1', '1', '0'),
(36, '13', 'user2', '0', '0'),
(37, '16', 'user2', '1', '0'),
(44, '19', 'monitoring2', '1', '0'),
(52, '22', 'b-12-00-11-001', '1', '0'),
(53, '23', 'b-12-00-11-00', '1', '0'),
(54, '22', 'b-12-00-11-00', '1', '0'),
(55, '22', 'user', '1', '0'),
(56, '24', 'b-12345', '1', '0'),
(57, '24', '12-4884-00', '0', '0'),
(78, '34', 'b-12-00-11-001', '1', '0'),
(79, '34', 'user', '1', '0'),
(80, '34', 'b-12345', '1', '0'),
(81, '34', '12-4884-00', '1', '0'),
(82, '35', 'b-12-00-11-001', '1', '0'),
(83, '35', 'user', '1', '0'),
(84, '35', 'b-12345', '1', '0'),
(85, '35', '12-4884-00', '1', '0'),
(90, '37', '12-4884-00', '1', '0'),
(95, '39', 'b-12-00-11-00', '1', '0'),
(104, '44', 'b-12-00-11-001', '1', '0'),
(105, '44', 'user', '1', '0'),
(106, '44', 'b-12345', '1', '0'),
(107, '44', '12-4884-00', '1', '0'),
(108, '44', 'm1', '1', '0'),
(109, '44', 'faculty', '1', '0'),
(116, '44', '1712', '1', '0'),
(117, '45', '1712', '1', '0'),
(125, '48', 'm1', '1', '0'),
(126, '49', '2021-1', '1', '0'),
(131, '37', '2021-1', '1', '0'),
(158, '66', 'b-12-00-11-001', '1', '0'),
(159, '66', 'user', '1', '0'),
(160, '66', 'b-12345', '1', '0'),
(161, '66', '12-4884-00', '1', '0'),
(162, '66', 'faculty', '1', '0'),
(163, '66', 'm1', '1', '0'),
(164, '67', 'm1', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `facultySeqNo` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `facultyID` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`facultySeqNo`, `Firstname`, `Lastname`, `password`, `facultyID`, `status`, `img`) VALUES
(2, 'TEACHER1', 'TEACHER1', '12', '12', '1', '4b77dd47a0fdceb8afde02dd6cae9ddf12.JPG'),
(3, 'Ma', 'Ma', '666', '666', '1', 'tcu_logo.png'),
(4, 'christian', 'tugadi', '1600155', '1600155', '1', '03b92cd507ff5870df0db7f0747288301600155.JPG'),
(5, 'Jon', 'Snow', '1234', '162345', '1', ''),
(6, 'TEACHER1', 'TEACHEAR1', 'admin1', 'admin1', '1', '5c54f5ef5225334b0e62aa40c0ed8001admin1.jpg'),
(7, 'TUGADIFACULTY', 'TUGADIFACULTY', 'TUGADIFACULTY', 'TUGADIFACULTY', '1', ''),
(8, 'admin2', 'admin2', 'admin2', 'admin2', '1', '8df405218a41cf1a167855a647b4b590admin2.jpg'),
(9, 'faculty1', 'faculty1', 'faculty1', 'faculty1', '0', ''),
(10, 'faculty2', 'faculty2', 'faculty2', 'faculty2', '1', 'b6cfba4197cded309b9811c22cfa3d23faculty2.jpg'),
(11, 'try1', 'try1', 'try1', 'FACULTY SCHEDULE', '1', ''),
(12, 'try', 'try', 'try', 'try', '1', ''),
(13, 'MADAM', 'MADAM', 'try1', 'try1', '1', 'e7847a77d33e4a092d8b288610c5a33etry1.jpg'),
(14, 'computer1', 'acma11', 'computer123A', '12-4884-00', '1', 'a8976a5b1dace2a8c1960c1c804018c012-4884-00.jpg'),
(15, 'gracelyn', 'condez', 'facuty3', 'faculty3', '1', '6282cc763ed6aa3ec932be6b8fa13bacfaculty3.jpg'),
(16, 'f1', 'f1', 'f1', 'f1', '1', 'ebc0e1a235ad75d2abe98a58f531792df1.jpg'),
(17, 'GRACE', 'CONDEZ', 'admin3', 'admin3', '1', 'a624873c42ee905ecc113ce243187740admin3.png'),
(18, '2021', '2021', '2021', '2021', '1', ''),
(19, '1412', '1412', '1412', '1412', '1', 'f0fcf351df4eb6786e9bb6fc4e2dee021412.png'),
(20, 'Carl Theodore', 'Acma', '123', '2021-CTYA', '1', 'a372457bfef3916c4b3dbcdcb79397842021-CTYA.png'),
(21, '2021-F-1', '2021-F-1', '2021-F-1', '2021-F-1', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `forumChatID` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `classID` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`forumChatID`, `message`, `sender`, `classID`, `type`) VALUES
(1, 'Awit', '123', '2', '1'),
(2, 'awit lut', '123', '2', '1'),
(3, 'admin', '12', '2', '2'),
(4, 'awit', '123', '2', '1'),
(5, 'nani', '123', '2', '1'),
(6, 'isa pa', '123', '2', '1'),
(7, 'hoho', '123', '2', '1'),
(8, 'galing galing kogn sumayaw galing kong gumalaw', '123', '2', '1'),
(9, 'dat mawawala to', '123', '2', '1'),
(10, 'ulitulit', '123', '2', '1'),
(11, 'game', '123', '2', '1'),
(12, 'oh bakit problema mo ?', '12', '2', '2'),
(13, 'ako ang hari dto', '12', '2', '2'),
(14, 'ok lang un par', '123', '2', '1'),
(15, 'OH TALAGA', '12', '2', '2'),
(16, 'ang baho nyo', '44', '2', '1'),
(17, 'Gusto mo ma kick out ?', '12', '2', '2'),
(18, 'ay sorry sir', '44', '2', '1'),
(19, 'oy anong pinag gagawa gawa nyo dyan ?', '12', '2', '2'),
(20, 'wala po sir', '44', '2', '1'),
(21, 'Ang tahimik ah', '44', '3', '1'),
(22, 'gusto mo nang manahimik ?', '12', '3', '2'),
(23, 'wew', '12', '2', '2'),
(24, 'as', '12', '2', '2'),
(25, 'last', '12', '2', '2'),
(26, 'tangina nyo', '123', '2', '1'),
(27, 's', '123', '2', '1'),
(28, 's', '123', '2', '1'),
(29, 'darfdfdfd', 'user1', '13', '1'),
(30, 'wsdwewews', 'faculty3', '26', '2'),
(31, 'sdsd', 'faculty3', '26', '2'),
(32, 'sdsds', 'faculty3', '26', '2'),
(33, 'wew', 'faculty3', '26', '2'),
(34, 'we', 'faculty3', '26', '2'),
(35, 'we', 'faculty3', '26', '2'),
(36, 'e', 'faculty3', '26', '2'),
(37, 'wew', 'faculty3', '26', '2'),
(38, 'ew', 'faculty3', '26', '2'),
(39, 'SI BAT DINYO PA NA SESEEN TAGAL NA PO', 'faculty2', '37', '2'),
(40, 'SIR PA SEEN NAMAN PO PLEASE', 'faculty2', '37', '2'),
(41, 'SENSYA NA MAAM KUMAEN AKO', '12-4884-00', '37', '1'),
(42, 'SIR TAGAL MO MAG SEEN', 'f1', '40', '2'),
(43, 'SENSYA NA MAAM TOMBOY KA E', '12-4884-00', '40', '1'),
(44, 'maam pa send po sa department naten yung password sa lamat', 'f1', '40', '2'),
(45, 'dsadas', 'm1', '40', '1'),
(46, 'maam ok napo', '1712', '44', '1'),
(47, 'sir pa check po thxx', 'admin3', '48', '2'),
(48, 'd2 napo check na kjita', 'm1', '48', '1'),
(49, 'test', 'faculty2', '37', '2'),
(50, 'hello po', '2021-1', '37', '1'),
(51, 'dsadsadsa]', 'f1', '55', '2'),
(52, 'dsds', 'f1', '55', '2'),
(53, 'sd', 'f1', '55', '2'),
(54, 'ds', 'f1', '55', '2'),
(55, 'ewqed', 'f1', '52', '2'),
(56, 'maam ka musta', 'm1', '67', '1'),
(57, 'wait lang po', 'f1', '67', '2'),
(58, 'wala pa ng 15 stop time end time ko na', 'm1', '67', '1');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `logID` int(11) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `uType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`logID`, `activity`, `user`, `time`, `date`, `uType`) VALUES
(1, 'login', '12', '4:43 am', '11/10/19', 'T'),
(2, 'login', '12', '3:29 pm', '11/15/19', 'T'),
(3, 'login', '12', '2:12 am', '11/16/19', 'T'),
(4, 'login', '12', '4:02 am', '11/16/19', 'T'),
(5, 'login', '12', '4:02 am', '11/16/19', 'T'),
(6, 'login', '123', '4:02 am', '11/16/19', 'S'),
(7, 'login', '123', '4:02 am', '11/16/19', 'S'),
(8, 'login', '123', '4:02 am', '11/16/19', 'S'),
(9, 'login', '666', '4:57 am', '11/16/19', 'T'),
(10, 'login', '44', '4:57 am', '11/16/19', 'S'),
(11, 'login', '12', '6:37 am', '11/16/19', 'T'),
(12, 'login', '123', '6:37 am', '11/16/19', 'S'),
(13, 'login', '12', '10:07 am', '11/16/19', 'T'),
(14, 'login', '44', '10:40 am', '11/16/19', 'S'),
(15, 'login', '12', '10:44 am', '11/16/19', 'T'),
(16, 'login', '123', '8:16 am', '11/27/19', 'S'),
(17, 'login', '12', '8:16 am', '11/27/19', 'T'),
(18, 'login', '12', '1:50 am', '11/28/19', 'T'),
(19, 'login', '123', '5:27 am', '11/28/19', 'S'),
(20, 'login', '12', '7:33 am', '11/28/19', 'T'),
(21, 'login', '12', '7:46 am', '11/28/19', 'T'),
(22, 'login', '123', '7:46 am', '11/28/19', 'S'),
(23, 'login', '12', '3:09 am', '11/29/19', 'T'),
(24, 'login', '12', '4:49 am', '11/29/19', 'T'),
(25, 'login', '123', '4:49 am', '11/29/19', 'S'),
(26, 'login', '12', '7:50 am', '11/29/19', 'T'),
(27, 'login', '123', '8:35 am', '11/29/19', 'S'),
(28, 'login', '12', '9:20 am', '11/29/19', 'T'),
(29, 'login', '12', '9:16 pm', '11/29/19', 'T'),
(30, 'login', '123', '9:49 pm', '11/29/19', 'S'),
(31, 'login', '44', '9:00 am', '11/30/19', 'S'),
(32, 'login', '123', '9:10 am', '11/30/19', 'S'),
(33, 'login', '44', '11:52 am', '10/21/20', 'S'),
(34, 'login', '44', '11:52 am', '10/21/20', 'S'),
(35, 'login', '44', '11:52 am', '10/21/20', 'S'),
(36, 'login', '44', '11:52 am', '10/21/20', 'S'),
(37, 'login', '44', '11:52 am', '10/21/20', 'S'),
(38, 'login', '1600155', '12:24 pm', '10/21/20', 'T'),
(39, 'login', '1600155', '12:24 pm', '10/21/20', 'T'),
(40, 'login', '1600155', '12:24 pm', '10/21/20', 'T'),
(41, 'login', '1600155', '12:24 pm', '10/21/20', 'T'),
(42, 'login', '1600155', '12:24 pm', '10/21/20', 'T'),
(43, 'login', '1600155', '12:24 pm', '10/21/20', 'T'),
(44, 'login', '1600155', '8:35 am', '03/14/21', 'T'),
(45, 'login', '12345', '8:45 am', '03/14/21', 'S'),
(46, 'login', '12345', '8:45 am', '03/14/21', 'S'),
(47, 'login', '161234', '2:18 am', '03/15/21', 'S'),
(48, 'login', '161234', '2:18 am', '03/15/21', 'S'),
(49, 'login', '162345', '2:21 am', '03/15/21', 'T'),
(50, 'login', '162345', '2:21 am', '03/15/21', 'T'),
(51, 'login', 'user1', '4:00 am', '03/15/21', 'S'),
(52, 'login', 'user1', '4:00 am', '03/15/21', 'S'),
(53, 'login', 'user1', '4:00 am', '03/15/21', 'S'),
(54, 'login', 'admin1', '4:01 am', '03/15/21', 'T'),
(55, 'login', 'admin1', '4:01 am', '03/15/21', 'T'),
(56, 'login', 'admin1', '4:01 am', '03/15/21', 'T'),
(57, 'login', 'monitoring1', '4:51 am', '03/15/21', 'S'),
(58, 'login', 'monitoring1', '4:51 am', '03/15/21', 'S'),
(59, 'login', 'monitoring1', '4:51 am', '03/15/21', 'S'),
(60, 'login', 'admin1', '4:59 am', '03/15/21', 'T'),
(61, 'login', 'admin1', '4:59 am', '03/15/21', 'T'),
(62, 'login', 'admin1', '4:59 am', '03/15/21', 'T'),
(63, 'login', 'monitoring1', '5:10 am', '03/15/21', 'S'),
(64, 'login', 'monitoring1', '5:10 am', '03/15/21', 'S'),
(65, 'login', 'monitoring1', '5:10 am', '03/15/21', 'S'),
(66, 'login', 'monitoring1', '5:16 am', '03/15/21', 'S'),
(67, 'login', 'monitoring1', '5:16 am', '03/15/21', 'S'),
(68, 'login', 'monitoring1', '6:16 am', '03/15/21', 'S'),
(69, 'login', 'monitoring1', '6:16 am', '03/15/21', 'S'),
(70, 'login', 'monitoring1', '6:16 am', '03/15/21', 'S'),
(71, 'login', 'monitoring1', '6:20 am', '03/15/21', 'S'),
(72, 'login', 'monitoring1', '6:20 am', '03/15/21', 'S'),
(73, 'login', 'monitoring1', '6:20 am', '03/15/21', 'S'),
(74, 'login', 'monitoring1', '6:21 am', '03/15/21', 'S'),
(75, 'login', 'monitoring1', '6:21 am', '03/15/21', 'S'),
(76, 'login', 'monitoring1', '6:21 am', '03/15/21', 'S'),
(77, 'login', 'monitoring1', '6:22 am', '03/15/21', 'S'),
(78, 'login', 'monitoring1', '6:22 am', '03/15/21', 'S'),
(79, 'login', 'monitoring1', '6:22 am', '03/15/21', 'S'),
(80, 'login', 'admin1', '6:42 am', '03/15/21', 'T'),
(81, 'login', 'admin1', '6:42 am', '03/15/21', 'T'),
(82, 'login', 'TUGADIFACULTY', '6:51 am', '03/15/21', 'T'),
(83, 'login', 'TUGADIFACULTY', '6:51 am', '03/15/21', 'T'),
(84, 'login', 'user1', '7:52 am', '03/15/21', 'S'),
(85, 'login', 'user1', '7:52 am', '03/15/21', 'S'),
(86, 'login', 'user1', '7:52 am', '03/15/21', 'S'),
(87, 'login', 'user1', '7:53 am', '03/15/21', 'S'),
(88, 'login', 'user1', '7:53 am', '03/15/21', 'S'),
(89, 'login', 'user1', '7:53 am', '03/15/21', 'S'),
(90, 'login', 'user1', '9:03 am', '03/15/21', 'S'),
(91, 'login', 'user1', '9:03 am', '03/15/21', 'S'),
(92, 'login', 'user1', '9:03 am', '03/15/21', 'S'),
(93, 'login', 'monitoring1', '9:20 am', '03/15/21', 'S'),
(94, 'login', 'monitoring1', '9:20 am', '03/15/21', 'S'),
(95, 'login', 'monitoring1', '9:20 am', '03/15/21', 'S'),
(96, 'login', 'user1', '11:06 am', '03/15/21', 'S'),
(97, 'login', 'user1', '11:06 am', '03/15/21', 'S'),
(98, 'login', 'user1', '11:06 am', '03/15/21', 'S'),
(99, 'login', 'user1', '11:06 am', '03/15/21', 'S'),
(100, 'login', 'user1', '11:06 am', '03/15/21', 'S'),
(101, 'login', 'user1', '11:06 am', '03/15/21', 'S'),
(102, 'login', 'user1', '11:10 am', '03/15/21', 'S'),
(103, 'login', 'user1', '11:10 am', '03/15/21', 'S'),
(104, 'login', 'admin1', '11:10 am', '03/15/21', 'T'),
(105, 'login', 'admin1', '11:10 am', '03/15/21', 'T'),
(106, 'login', 'user1', '11:17 am', '03/15/21', 'S'),
(107, 'login', 'user1', '11:17 am', '03/15/21', 'S'),
(108, 'login', 'user1', '11:20 am', '03/15/21', 'S'),
(109, 'login', 'user1', '11:20 am', '03/15/21', 'S'),
(110, 'login', 'user2', '11:32 am', '03/15/21', 'S'),
(111, 'login', 'user2', '11:32 am', '03/15/21', 'S'),
(112, 'login', 'user2', '11:32 am', '03/15/21', 'S'),
(113, 'login', 'admin2', '11:32 am', '03/15/21', 'T'),
(114, 'login', 'admin2', '11:32 am', '03/15/21', 'T'),
(115, 'login', 'admin2', '11:32 am', '03/15/21', 'T'),
(116, 'login', 'user2', '12:04 pm', '03/15/21', 'S'),
(117, 'login', 'user2', '12:04 pm', '03/15/21', 'S'),
(118, 'login', 'user2', '12:04 pm', '03/15/21', 'S'),
(119, 'login', 'faculty2', '12:20 pm', '03/15/21', 'T'),
(120, 'login', 'faculty2', '12:20 pm', '03/15/21', 'T'),
(121, 'login', 'monitoring2', '12:21 pm', '03/15/21', 'S'),
(122, 'login', 'monitoring2', '12:21 pm', '03/15/21', 'S'),
(123, 'login', 'faculty2', '12:22 pm', '03/15/21', 'T'),
(124, 'login', 'faculty2', '12:22 pm', '03/15/21', 'T'),
(125, 'login', 'faculty2', '12:22 pm', '03/15/21', 'T'),
(126, 'login', 'user1', '2:47 pm', '03/15/21', 'S'),
(127, 'login', 'user1', '2:47 pm', '03/15/21', 'S'),
(128, 'login', 'user1', '2:47 pm', '03/15/21', 'S'),
(129, 'login', 'user1', '2:47 pm', '03/15/21', 'S'),
(130, 'login', 'user1', '2:47 pm', '03/15/21', 'S'),
(131, 'login', 'try', '4:28 pm', '03/15/21', 'T'),
(132, 'login', 'try', '4:28 pm', '03/15/21', 'T'),
(133, 'login', 'try', '4:28 pm', '03/15/21', 'T'),
(134, 'login', 'user1', '1:05 am', '03/16/21', 'S'),
(135, 'login', 'user1', '1:05 am', '03/16/21', 'S'),
(136, 'login', 'user1', '1:05 am', '03/16/21', 'S'),
(137, 'login', 'user1', '1:32 am', '03/16/21', 'S'),
(138, 'login', 'user1', '1:32 am', '03/16/21', 'S'),
(139, 'login', 'user1', '1:32 am', '03/16/21', 'S'),
(140, 'login', 'user1', '1:40 am', '03/16/21', 'S'),
(141, 'login', 'user1', '1:40 am', '03/16/21', 'S'),
(142, 'login', 'user1', '1:40 am', '03/16/21', 'S'),
(143, 'login', 'user1', '1:43 am', '03/16/21', 'S'),
(144, 'login', 'user1', '1:43 am', '03/16/21', 'S'),
(145, 'login', 'user1', '1:43 am', '03/16/21', 'S'),
(146, 'login', 'user1', '1:50 am', '03/16/21', 'S'),
(147, 'login', 'user1', '1:50 am', '03/16/21', 'S'),
(148, 'login', 'user1', '1:50 am', '03/16/21', 'S'),
(149, 'login', 'user1', '1:55 am', '03/16/21', 'S'),
(150, 'login', 'user1', '1:55 am', '03/16/21', 'S'),
(151, 'login', 'user1', '1:55 am', '03/16/21', 'S'),
(152, 'login', 'user1', '2:02 am', '03/16/21', 'S'),
(153, 'login', 'user1', '2:02 am', '03/16/21', 'S'),
(154, 'login', 'user1', '2:02 am', '03/16/21', 'S'),
(155, 'login', 'user1', '2:06 am', '03/16/21', 'S'),
(156, 'login', 'user1', '2:06 am', '03/16/21', 'S'),
(157, 'login', 'user1', '2:15 am', '03/16/21', 'S'),
(158, 'login', 'user1', '2:15 am', '03/16/21', 'S'),
(159, 'login', 'user1', '2:15 am', '03/16/21', 'S'),
(160, 'login', 'faculty2', '2:15 am', '03/16/21', 'T'),
(161, 'login', 'faculty2', '2:15 am', '03/16/21', 'T'),
(162, 'login', 'faculty2', '2:15 am', '03/16/21', 'T'),
(163, 'login', 'user1', '3:05 am', '03/16/21', 'S'),
(164, 'login', 'user1', '3:05 am', '03/16/21', 'S'),
(165, 'login', 'user1', '3:05 am', '03/16/21', 'S'),
(166, 'login', 'user1', '3:06 am', '03/16/21', 'S'),
(167, 'login', 'user1', '3:06 am', '03/16/21', 'S'),
(168, 'login', 'user1', '3:06 am', '03/16/21', 'S'),
(169, 'login', 'user1', '3:08 am', '03/16/21', 'S'),
(170, 'login', 'user1', '3:08 am', '03/16/21', 'S'),
(171, 'login', 'user1', '3:08 am', '03/16/21', 'S'),
(172, 'login', 'user1', '3:22 am', '03/16/21', 'S'),
(173, 'login', 'user1', '3:22 am', '03/16/21', 'S'),
(174, 'login', 'user1', '3:22 am', '03/16/21', 'S'),
(175, 'login', 'user1', '3:36 am', '03/16/21', 'S'),
(176, 'login', 'user1', '3:36 am', '03/16/21', 'S'),
(177, 'login', 'user1', '3:36 am', '03/16/21', 'S'),
(178, 'login', 'user1', '4:07 am', '03/16/21', 'S'),
(179, 'login', 'user1', '4:07 am', '03/16/21', 'S'),
(180, 'login', 'user1', '4:07 am', '03/16/21', 'S'),
(181, 'login', 'user1', '4:11 am', '03/16/21', 'S'),
(182, 'login', 'user1', '4:11 am', '03/16/21', 'S'),
(183, 'login', 'user1', '4:11 am', '03/16/21', 'S'),
(184, 'login', 'user1', '4:30 am', '03/16/21', 'S'),
(185, 'login', 'user1', '4:30 am', '03/16/21', 'S'),
(186, 'login', 'user1', '4:30 am', '03/16/21', 'S'),
(187, 'login', 'user1', '5:10 am', '03/16/21', 'S'),
(188, 'login', 'user1', '5:10 am', '03/16/21', 'S'),
(189, 'login', 'user1', '5:10 am', '03/16/21', 'S'),
(190, 'login', 'user1', '5:26 am', '03/16/21', 'S'),
(191, 'login', 'user1', '5:26 am', '03/16/21', 'S'),
(192, 'login', 'user1', '5:26 am', '03/16/21', 'S'),
(193, 'login', 'faculty2', '5:58 am', '03/16/21', 'T'),
(194, 'login', 'faculty2', '5:58 am', '03/16/21', 'T'),
(195, 'login', 'faculty2', '5:58 am', '03/16/21', 'T'),
(196, 'login', 'user1', '6:00 am', '03/16/21', 'S'),
(197, 'login', 'user1', '6:00 am', '03/16/21', 'S'),
(198, 'login', 'user1', '6:00 am', '03/16/21', 'S'),
(199, 'login', 'faculty2', '6:00 am', '03/16/21', 'T'),
(200, 'login', 'faculty2', '6:00 am', '03/16/21', 'T'),
(201, 'login', 'faculty2', '6:00 am', '03/16/21', 'T'),
(202, 'login', 'user1', '6:06 am', '03/16/21', 'S'),
(203, 'login', 'user1', '6:06 am', '03/16/21', 'S'),
(204, 'login', 'user1', '6:06 am', '03/16/21', 'S'),
(205, 'login', 'user1', '6:07 am', '03/16/21', 'S'),
(206, 'login', 'user1', '6:07 am', '03/16/21', 'S'),
(207, 'login', 'user1', '6:07 am', '03/16/21', 'S'),
(208, 'login', 'user1', '6:17 am', '03/16/21', 'S'),
(209, 'login', 'user1', '6:17 am', '03/16/21', 'S'),
(210, 'login', 'user1', '6:17 am', '03/16/21', 'S'),
(211, 'login', 'monitoring1', '6:34 am', '03/16/21', 'S'),
(212, 'login', 'monitoring1', '6:34 am', '03/16/21', 'S'),
(213, 'login', 'monitoring1', '6:34 am', '03/16/21', 'S'),
(214, 'login', 'user1', '6:34 am', '03/16/21', 'S'),
(215, 'login', 'user1', '6:34 am', '03/16/21', 'S'),
(216, 'login', 'user1', '6:34 am', '03/16/21', 'S'),
(217, 'login', 'user1', '6:34 am', '03/16/21', 'S'),
(218, 'login', 'user1', '6:34 am', '03/16/21', 'S'),
(219, 'login', 'user1', '6:34 am', '03/16/21', 'S'),
(220, 'login', 'user1', '7:56 am', '03/16/21', 'S'),
(221, 'login', 'user1', '7:56 am', '03/16/21', 'S'),
(222, 'login', 'user1', '7:56 am', '03/16/21', 'S'),
(223, 'login', 'user1', '8:03 am', '03/16/21', 'S'),
(224, 'login', 'user1', '8:03 am', '03/16/21', 'S'),
(225, 'login', 'user1', '8:03 am', '03/16/21', 'S'),
(226, 'login', 'user1', '8:10 am', '03/16/21', 'S'),
(227, 'login', 'user1', '8:10 am', '03/16/21', 'S'),
(228, 'login', 'user1', '8:10 am', '03/16/21', 'S'),
(229, 'login', 'user1', '8:19 am', '03/16/21', 'S'),
(230, 'login', 'user1', '8:19 am', '03/16/21', 'S'),
(231, 'login', 'user1', '8:27 am', '03/16/21', 'S'),
(232, 'login', 'user1', '8:27 am', '03/16/21', 'S'),
(233, 'login', 'user1', '8:27 am', '03/16/21', 'S'),
(234, 'login', 'faculty2', '8:28 am', '03/16/21', 'T'),
(235, 'login', 'faculty2', '8:28 am', '03/16/21', 'T'),
(236, 'login', 'faculty2', '8:28 am', '03/16/21', 'T'),
(237, 'login', 'user1', '11:48 am', '03/16/21', 'S'),
(238, 'login', 'user1', '11:48 am', '03/16/21', 'S'),
(239, 'login', 'user1', '11:48 am', '03/16/21', 'S'),
(240, 'login', 'user1', '2:54 pm', '03/16/21', 'S'),
(241, 'login', 'user1', '2:54 pm', '03/16/21', 'S'),
(242, 'login', 'user1', '2:54 pm', '03/16/21', 'S'),
(243, 'login', 'user1', '2:55 pm', '03/16/21', 'S'),
(244, 'login', 'user1', '2:55 pm', '03/16/21', 'S'),
(245, 'login', 'user1', '2:55 pm', '03/16/21', 'S'),
(246, 'login', 'user1', '4:19 pm', '03/16/21', 'S'),
(247, 'login', 'user1', '4:19 pm', '03/16/21', 'S'),
(248, 'login', 'user1', '4:19 pm', '03/16/21', 'S'),
(249, 'login', 'user1', '4:29 pm', '03/16/21', 'S'),
(250, 'login', 'user1', '4:29 pm', '03/16/21', 'S'),
(251, 'login', 'user1', '4:29 pm', '03/16/21', 'S'),
(252, 'login', 'cedie', '4:30 pm', '03/16/21', 'S'),
(253, 'login', 'cedie', '4:30 pm', '03/16/21', 'S'),
(254, 'login', 'cedie', '4:30 pm', '03/16/21', 'S'),
(255, 'login', 'user1', '4:35 pm', '03/16/21', 'S'),
(256, 'login', 'user1', '4:35 pm', '03/16/21', 'S'),
(257, 'login', 'user1', '4:35 pm', '03/16/21', 'S'),
(258, 'login', 'user1', '4:51 pm', '03/16/21', 'S'),
(259, 'login', 'user1', '4:51 pm', '03/16/21', 'S'),
(260, 'login', 'user1', '4:51 pm', '03/16/21', 'S'),
(261, 'login', 'try1', '5:09 pm', '03/16/21', 'T'),
(262, 'login', 'try1', '5:09 pm', '03/16/21', 'T'),
(263, 'login', 'user1', '5:14 pm', '03/16/21', 'S'),
(264, 'login', 'user1', '5:14 pm', '03/16/21', 'S'),
(265, 'login', 'user1', '5:14 pm', '03/16/21', 'S'),
(266, 'login', 'monitoring2', '6:49 pm', '03/16/21', 'S'),
(267, 'login', 'monitoring2', '6:49 pm', '03/16/21', 'S'),
(268, 'login', 'monitoring2', '6:49 pm', '03/16/21', 'S'),
(269, 'login', 'b-12-00-11-00', '6:52 pm', '03/16/21', 'S'),
(270, 'login', 'b-12-00-11-00', '6:52 pm', '03/16/21', 'S'),
(271, 'login', 'user', '6:58 pm', '03/16/21', 'S'),
(272, 'login', 'user', '6:58 pm', '03/16/21', 'S'),
(273, 'login', 'user', '6:58 pm', '03/16/21', 'S'),
(274, 'login', '12-4884-00', '7:22 pm', '03/16/21', 'T'),
(275, 'login', '12-4884-00', '7:22 pm', '03/16/21', 'T'),
(276, 'login', 'b-12345', '7:23 pm', '03/16/21', 'S'),
(277, 'login', 'b-12345', '7:23 pm', '03/16/21', 'S'),
(278, 'login', 'b-12345', '7:23 pm', '03/16/21', 'S'),
(279, 'login', '12-4884-00', '8:22 pm', '03/16/21', 'T'),
(280, 'login', '12-4884-00', '8:22 pm', '03/16/21', 'T'),
(281, 'login', '12-4884-00', '8:22 pm', '03/16/21', 'T'),
(282, 'login', 'faculty2', '9:05 pm', '03/16/21', 'T'),
(283, 'login', 'faculty2', '9:05 pm', '03/16/21', 'T'),
(284, 'login', 'faculty2', '9:05 pm', '03/16/21', 'T'),
(285, 'login', '12-4884-00', '9:11 pm', '03/16/21', 'S'),
(286, 'login', '12-4884-00', '9:11 pm', '03/16/21', 'S'),
(287, 'login', '12-4884-00', '9:11 pm', '03/16/21', 'S'),
(288, 'login', 'faculty2', '9:12 pm', '03/16/21', 'T'),
(289, 'login', 'faculty2', '9:12 pm', '03/16/21', 'T'),
(290, 'login', 'faculty2', '9:12 pm', '03/16/21', 'T'),
(291, 'login', 'faculty3', '9:17 pm', '03/16/21', 'T'),
(292, 'login', 'faculty3', '9:17 pm', '03/16/21', 'T'),
(293, 'login', 'faculty3', '9:29 pm', '03/16/21', 'T'),
(294, 'login', 'faculty3', '9:29 pm', '03/16/21', 'T'),
(295, 'login', 'faculty2', '2:34 am', '03/17/21', 'T'),
(296, 'login', 'faculty2', '2:34 am', '03/17/21', 'T'),
(297, 'login', 'faculty2', '2:34 am', '03/17/21', 'T'),
(298, 'login', 'faculty2', '2:36 am', '03/17/21', 'T'),
(299, 'login', 'faculty2', '2:36 am', '03/17/21', 'T'),
(300, 'login', 'faculty2', '2:36 am', '03/17/21', 'T'),
(301, 'login', '12-4884-00', '10:06 am', '03/17/21', 'S'),
(302, 'login', '12-4884-00', '10:06 am', '03/17/21', 'S'),
(303, 'login', '12-4884-00', '10:06 am', '03/17/21', 'S'),
(304, 'login', 'f1', '10:09 am', '03/17/21', 'T'),
(305, 'login', 'f1', '10:09 am', '03/17/21', 'T'),
(306, 'login', 'f1', '10:09 am', '03/17/21', 'T'),
(307, 'login', 'f1', '10:21 am', '03/17/21', 'T'),
(308, 'login', 'f1', '10:21 am', '03/17/21', 'T'),
(309, 'login', 'f1', '10:21 am', '03/17/21', 'T'),
(310, 'login', 'f1', '10:25 am', '03/17/21', 'T'),
(311, 'login', 'f1', '10:25 am', '03/17/21', 'T'),
(312, 'login', 'f1', '10:25 am', '03/17/21', 'T'),
(313, 'login', 'f1', '10:28 am', '03/17/21', 'T'),
(314, 'login', 'f1', '10:28 am', '03/17/21', 'T'),
(315, 'login', 'f1', '10:28 am', '03/17/21', 'T'),
(316, 'login', 'm1', '10:31 am', '03/17/21', 'S'),
(317, 'login', 'm1', '10:31 am', '03/17/21', 'S'),
(318, 'login', 'm1', '10:31 am', '03/17/21', 'S'),
(319, 'login', 'm1', '10:59 am', '03/17/21', 'S'),
(320, 'login', 'm1', '10:59 am', '03/17/21', 'S'),
(321, 'login', 'm1', '10:59 am', '03/17/21', 'S'),
(322, 'login', 'f1', '11:18 am', '03/17/21', 'T'),
(323, 'login', 'f1', '11:18 am', '03/17/21', 'T'),
(324, 'login', 'f1', '11:18 am', '03/17/21', 'T'),
(325, 'login', 'm1', '11:18 am', '03/17/21', 'S'),
(326, 'login', 'm1', '11:18 am', '03/17/21', 'S'),
(327, 'login', 'm1', '11:18 am', '03/17/21', 'S'),
(328, 'login', 'f1', '11:24 am', '03/17/21', 'T'),
(329, 'login', 'f1', '11:24 am', '03/17/21', 'T'),
(330, 'login', 'f1', '11:24 am', '03/17/21', 'T'),
(331, 'login', 'f1', '12:02 pm', '03/17/21', 'T'),
(332, 'login', 'f1', '12:02 pm', '03/17/21', 'T'),
(333, 'login', 'f1', '4:48 pm', '03/17/21', 'T'),
(334, 'login', 'f1', '4:48 pm', '03/17/21', 'T'),
(335, 'login', 'f1', '4:48 pm', '03/17/21', 'T'),
(336, 'login', 'f1', '4:50 pm', '03/17/21', 'T'),
(337, 'login', 'f1', '4:50 pm', '03/17/21', 'T'),
(338, 'login', 'f1', '4:50 pm', '03/17/21', 'T'),
(339, 'login', 'f1', '4:53 pm', '03/17/21', 'T'),
(340, 'login', 'f1', '4:53 pm', '03/17/21', 'T'),
(341, 'login', 'f1', '4:53 pm', '03/17/21', 'T'),
(342, 'login', 'f1', '3:21 am', '03/18/21', 'T'),
(343, 'login', 'f1', '3:21 am', '03/18/21', 'T'),
(344, 'login', 'f1', '3:21 am', '03/18/21', 'T'),
(345, 'login', 'f1', '3:22 am', '03/18/21', 'T'),
(346, 'login', 'f1', '3:22 am', '03/18/21', 'T'),
(347, 'login', 'f1', '3:30 am', '03/18/21', 'T'),
(348, 'login', 'f1', '3:30 am', '03/18/21', 'T'),
(349, 'login', 'f1', '3:30 am', '03/18/21', 'T'),
(350, 'login', 'f1', '3:30 am', '03/18/21', 'T'),
(351, 'login', 'f1', '3:30 am', '03/18/21', 'T'),
(352, 'login', 'f1', '3:30 am', '03/18/21', 'T'),
(353, 'login', 'f1', '3:30 am', '03/18/21', 'T'),
(354, 'login', 'f1', '3:31 am', '03/18/21', 'T'),
(355, 'login', 'f1', '3:31 am', '03/18/21', 'T'),
(356, 'login', 'f1', '3:40 am', '03/18/21', 'T'),
(357, 'login', 'f1', '3:40 am', '03/18/21', 'T'),
(358, 'login', 'f1', '3:40 am', '03/18/21', 'T'),
(359, 'login', 'f1', '3:42 am', '03/18/21', 'T'),
(360, 'login', 'f1', '3:42 am', '03/18/21', 'T'),
(361, 'login', 'f1', '3:42 am', '03/18/21', 'T'),
(362, 'login', 'f1', '4:05 am', '03/18/21', 'T'),
(363, 'login', 'f1', '4:05 am', '03/18/21', 'T'),
(364, 'login', 'f1', '4:18 am', '03/18/21', 'T'),
(365, 'login', 'f1', '4:18 am', '03/18/21', 'T'),
(366, 'login', 'f1', '4:25 am', '03/18/21', 'T'),
(367, 'login', 'f1', '4:25 am', '03/18/21', 'T'),
(368, 'login', 'faculty', '6:16 am', '03/18/21', 'S'),
(369, 'login', 'faculty', '6:16 am', '03/18/21', 'S'),
(370, 'login', 'admin3', '6:19 am', '03/18/21', 'T'),
(371, 'login', 'admin3', '6:19 am', '03/18/21', 'T'),
(372, 'login', 'admin3', '6:32 am', '03/18/21', 'T'),
(373, 'login', 'admin3', '6:32 am', '03/18/21', 'T'),
(374, 'login', 'admin3', '6:32 am', '03/18/21', 'T'),
(375, 'login', 'faculty', '6:36 am', '03/18/21', 'S'),
(376, 'login', 'faculty', '6:36 am', '03/18/21', 'S'),
(377, 'login', 'admin3', '6:57 am', '03/18/21', 'T'),
(378, 'login', 'admin3', '6:57 am', '03/18/21', 'T'),
(379, 'login', 'admin3', '6:57 am', '03/18/21', 'T'),
(380, 'login', 'faculty', '6:57 am', '03/18/21', 'S'),
(381, 'login', 'faculty', '6:57 am', '03/18/21', 'S'),
(382, 'login', 'admin3', '11:28 am', '03/18/21', 'T'),
(383, 'login', 'admin3', '11:28 am', '03/18/21', 'T'),
(384, 'login', 'faculty2', '11:28 am', '03/18/21', 'T'),
(385, 'login', 'faculty2', '11:28 am', '03/18/21', 'T'),
(386, 'login', '1712', '1:40 pm', '03/18/21', 'S'),
(387, 'login', '1712', '1:40 pm', '03/18/21', 'S'),
(388, 'login', '1412', '1:43 pm', '03/18/21', 'T'),
(389, 'login', '1412', '1:43 pm', '03/18/21', 'T'),
(390, 'login', '1712', '2:26 pm', '03/18/21', 'S'),
(391, 'login', '1712', '2:26 pm', '03/18/21', 'S'),
(392, 'login', '1712', '2:26 pm', '03/18/21', 'S'),
(393, 'login', '1412', '2:30 pm', '03/18/21', 'T'),
(394, 'login', '1412', '2:30 pm', '03/18/21', 'T'),
(395, 'login', 'admin3', '2:40 pm', '03/18/21', 'T'),
(396, 'login', 'admin3', '2:40 pm', '03/18/21', 'T'),
(397, 'login', 'admin3', '2:40 pm', '03/18/21', 'T'),
(398, 'login', 'admin3', '2:42 pm', '03/18/21', 'T'),
(399, 'login', 'admin3', '2:42 pm', '03/18/21', 'T'),
(400, 'login', 'admin3', '2:42 pm', '03/18/21', 'T'),
(401, 'login', '1712', '2:46 pm', '03/18/21', 'S'),
(402, 'login', '1712', '2:46 pm', '03/18/21', 'S'),
(403, 'login', 'admin3', '2:50 pm', '03/18/21', 'T'),
(404, 'login', 'admin3', '2:50 pm', '03/18/21', 'T'),
(405, 'login', 'admin3', '2:50 pm', '03/18/21', 'T'),
(406, 'login', 'admin3', '2:59 pm', '03/18/21', 'T'),
(407, 'login', 'admin3', '2:59 pm', '03/18/21', 'T'),
(408, 'login', 'admin3', '2:59 pm', '03/18/21', 'T'),
(409, 'login', '1712', '3:09 pm', '03/18/21', 'S'),
(410, 'login', '1712', '3:09 pm', '03/18/21', 'S'),
(411, 'login', '1712', '3:09 pm', '03/18/21', 'S'),
(412, 'login', 'admin3', '3:14 pm', '03/18/21', 'T'),
(413, 'login', 'admin3', '3:14 pm', '03/18/21', 'T'),
(414, 'login', 'admin3', '3:15 pm', '03/18/21', 'T'),
(415, 'login', 'admin3', '3:15 pm', '03/18/21', 'T'),
(416, 'login', 'admin3', '3:15 pm', '03/18/21', 'T'),
(417, 'login', 'admin3', '3:16 pm', '03/18/21', 'T'),
(418, 'login', 'admin3', '3:16 pm', '03/18/21', 'T'),
(419, 'login', 'admin3', '3:16 pm', '03/18/21', 'T'),
(420, 'login', 'admin3', '3:54 pm', '03/18/21', 'T'),
(421, 'login', 'admin3', '3:54 pm', '03/18/21', 'T'),
(422, 'login', 'admin3', '3:54 pm', '03/18/21', 'T'),
(423, 'login', 'admin3', '3:55 pm', '03/18/21', 'T'),
(424, 'login', 'admin3', '3:55 pm', '03/18/21', 'T'),
(425, 'login', 'admin3', '3:55 pm', '03/18/21', 'T'),
(426, 'login', 'admin3', '4:23 pm', '03/18/21', 'T'),
(427, 'login', 'admin3', '4:23 pm', '03/18/21', 'T'),
(428, 'login', 'admin3', '4:23 pm', '03/18/21', 'T'),
(429, 'login', '1712', '4:23 pm', '03/18/21', 'S'),
(430, 'login', '1712', '4:23 pm', '03/18/21', 'S'),
(431, 'login', '1712', '4:23 pm', '03/18/21', 'S'),
(432, 'login', 'admin3', '4:42 pm', '03/18/21', 'T'),
(433, 'login', 'admin3', '4:42 pm', '03/18/21', 'T'),
(434, 'login', 'admin3', '4:42 pm', '03/18/21', 'T'),
(435, 'login', '1712', '4:42 pm', '03/18/21', 'S'),
(436, 'login', '1712', '4:42 pm', '03/18/21', 'S'),
(437, 'login', 'admin3', '9:06 am', '03/22/21', 'T'),
(438, 'login', 'admin3', '9:06 am', '03/22/21', 'T'),
(439, 'login', 'admin3', '9:06 am', '03/22/21', 'T'),
(440, 'login', '2021-CTYA', '9:09 am', '03/22/21', 'T'),
(441, 'login', '1712', '10:19 am', '03/22/21', 'S'),
(442, 'login', '1712', '10:19 am', '03/22/21', 'S'),
(443, 'login', '1712', '11:10 am', '03/22/21', 'S'),
(444, 'login', '1712', '11:10 am', '03/22/21', 'S'),
(445, 'login', 'f1', '5:22 am', '03/23/21', 'T'),
(446, 'login', 'f1', '5:22 am', '03/23/21', 'T'),
(447, 'login', 'm1', '5:23 am', '03/23/21', 'S'),
(448, 'login', 'm1', '5:23 am', '03/23/21', 'S'),
(449, 'login', 'm1', '5:23 am', '03/23/21', 'S'),
(450, 'login', 'm1', '5:42 am', '03/23/21', 'S'),
(451, 'login', 'm1', '5:42 am', '03/23/21', 'S'),
(452, 'login', 'admin3', '10:58 am', '03/23/21', 'T'),
(453, 'login', 'admin3', '10:58 am', '03/23/21', 'T'),
(454, 'login', 'm1', '11:01 am', '03/23/21', 'S'),
(455, 'login', 'm1', '11:01 am', '03/23/21', 'S'),
(456, 'login', '2021-1', '5:00 pm', '03/23/21', 'S'),
(457, 'login', '2021-1', '5:00 pm', '03/23/21', 'S'),
(458, 'login', '2021-1', '5:01 pm', '03/23/21', 'S'),
(459, 'login', '2021-1', '5:01 pm', '03/23/21', 'S'),
(460, 'login', '2021-F-1', '5:02 pm', '03/23/21', 'T'),
(461, 'login', '2021-F-1', '5:02 pm', '03/23/21', 'T'),
(462, 'login', 'f1', '4:14 pm', '03/24/21', 'T'),
(463, 'login', 'f1', '4:14 pm', '03/24/21', 'T'),
(464, 'login', 'f1', '4:14 pm', '03/24/21', 'T'),
(465, 'login', 'f1', '4:16 pm', '03/24/21', 'T'),
(466, 'login', 'f1', '4:16 pm', '03/24/21', 'T'),
(467, 'login', 'f1', '4:16 pm', '03/24/21', 'T'),
(468, 'login', 'm1', '4:16 pm', '03/24/21', 'S'),
(469, 'login', 'm1', '4:16 pm', '03/24/21', 'S'),
(470, 'login', 'm1', '4:16 pm', '03/24/21', 'S'),
(471, 'login', '2021-1', '1:28 pm', '03/25/21', 'S'),
(472, 'login', '2021-1', '1:28 pm', '03/25/21', 'S'),
(473, 'login', '2021-1', '1:28 pm', '03/25/21', 'S'),
(474, 'login', 'faculty2', '1:29 pm', '03/25/21', 'T'),
(475, 'login', 'faculty2', '1:29 pm', '03/25/21', 'T'),
(476, 'login', 'faculty2', '1:29 pm', '03/25/21', 'T'),
(477, 'login', 'm1', '9:30 am', '03/26/21', 'S'),
(478, 'login', 'm1', '9:30 am', '03/26/21', 'S'),
(479, 'login', 'm1', '9:30 am', '03/26/21', 'S'),
(480, 'login', 'f1', '6:24 am', '03/27/21', 'T'),
(481, 'login', 'f1', '6:24 am', '03/27/21', 'T'),
(482, 'login', 'm1', '6:27 am', '03/27/21', 'S'),
(483, 'login', 'm1', '6:27 am', '03/27/21', 'S'),
(484, 'login', 'm1', '6:28 am', '03/27/21', 'S'),
(485, 'login', 'm1', '6:28 am', '03/27/21', 'S'),
(486, 'login', 'm1', '6:28 am', '03/27/21', 'S'),
(487, 'login', 'f1', '6:32 am', '03/27/21', 'T'),
(488, 'login', 'f1', '6:32 am', '03/27/21', 'T'),
(489, 'login', 'f1', '6:33 am', '03/27/21', 'T'),
(490, 'login', 'f1', '6:33 am', '03/27/21', 'T'),
(491, 'login', 'm1', '6:38 am', '03/27/21', 'S'),
(492, 'login', 'm1', '6:38 am', '03/27/21', 'S'),
(493, 'login', 'f1', '6:39 am', '03/27/21', 'T'),
(494, 'login', 'f1', '6:39 am', '03/27/21', 'T'),
(495, 'login', 'f1', '10:56 am', '03/29/21', 'T'),
(496, 'login', 'f1', '10:56 am', '03/29/21', 'T'),
(497, 'login', 'f1', '12:32 pm', '03/29/21', 'T'),
(498, 'login', 'f1', '12:32 pm', '03/29/21', 'T'),
(499, 'login', 'm1', '12:33 pm', '03/29/21', 'S'),
(500, 'login', 'm1', '12:33 pm', '03/29/21', 'S'),
(501, 'login', 'f1', '5:56 am', '03/30/21', 'T'),
(502, 'login', 'f1', '5:56 am', '03/30/21', 'T'),
(503, 'login', 'f1', '5:56 am', '03/30/21', 'T'),
(504, 'login', 'm1', '6:14 am', '03/30/21', 'S'),
(505, 'login', 'm1', '6:14 am', '03/30/21', 'S'),
(506, 'login', 'm1', '6:14 am', '03/30/21', 'S'),
(507, 'login', 'f1', '8:42 am', '03/30/21', 'T'),
(508, 'login', 'f1', '8:42 am', '03/30/21', 'T'),
(509, 'login', 'f1', '8:42 am', '03/30/21', 'T'),
(510, 'login', 'f1', '8:42 am', '03/30/21', 'T'),
(511, 'login', 'f1', '8:42 am', '03/30/21', 'T'),
(512, 'login', 'm1', '8:45 am', '03/30/21', 'S'),
(513, 'login', 'm1', '8:45 am', '03/30/21', 'S'),
(514, 'login', 'f1', '9:08 am', '03/30/21', 'T'),
(515, 'login', 'f1', '9:08 am', '03/30/21', 'T'),
(516, 'login', 'm1', '9:08 am', '03/30/21', 'S'),
(517, 'login', 'm1', '9:08 am', '03/30/21', 'S'),
(518, 'login', 'm1', '9:08 am', '03/30/21', 'S'),
(519, 'login', 'f1', '9:27 am', '03/30/21', 'T'),
(520, 'login', 'f1', '9:27 am', '03/30/21', 'T'),
(521, 'login', 'f1', '9:27 am', '03/30/21', 'T'),
(522, 'login', 'f1', '9:34 am', '03/30/21', 'T'),
(523, 'login', 'f1', '9:34 am', '03/30/21', 'T'),
(524, 'login', 'f1', '9:42 am', '03/30/21', 'T'),
(525, 'login', 'f1', '9:42 am', '03/30/21', 'T'),
(526, 'login', 'f1', '9:47 am', '03/30/21', 'T'),
(527, 'login', 'f1', '9:47 am', '03/30/21', 'T'),
(528, 'login', 'f1', '9:47 am', '03/30/21', 'T'),
(529, 'login', 'm1', '9:56 am', '03/30/21', 'S'),
(530, 'login', 'm1', '9:56 am', '03/30/21', 'S'),
(531, 'login', 'm1', '9:59 am', '03/30/21', 'S'),
(532, 'login', 'm1', '9:59 am', '03/30/21', 'S'),
(533, 'login', 'm1', '9:59 am', '03/30/21', 'S'),
(534, 'login', 'f1', '10:00 am', '03/30/21', 'T'),
(535, 'login', 'f1', '10:00 am', '03/30/21', 'T'),
(536, 'login', 'f1', '10:03 am', '03/30/21', 'T'),
(537, 'login', 'f1', '10:03 am', '03/30/21', 'T'),
(538, 'login', 'f1', '10:03 am', '03/30/21', 'T'),
(539, 'login', 'f1', '10:08 am', '03/30/21', 'T'),
(540, 'login', 'f1', '10:08 am', '03/30/21', 'T'),
(541, 'login', 'f1', '10:10 am', '03/30/21', 'T'),
(542, 'login', 'f1', '10:10 am', '03/30/21', 'T'),
(543, 'login', 'm1', '10:10 am', '03/30/21', 'S'),
(544, 'login', 'm1', '10:10 am', '03/30/21', 'S'),
(545, 'login', 'f1', '10:14 am', '03/30/21', 'T'),
(546, 'login', 'f1', '10:14 am', '03/30/21', 'T'),
(547, 'login', 'm1', '10:16 am', '03/30/21', 'S'),
(548, 'login', 'm1', '10:16 am', '03/30/21', 'S');

-- --------------------------------------------------------

--
-- Table structure for table `monitoring`
--

CREATE TABLE `monitoring` (
  `monitoringSeqNo` int(11) NOT NULL,
  `monitoringID` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `yearLevel` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monitoring`
--

INSERT INTO `monitoring` (`monitoringSeqNo`, `monitoringID`, `firstName`, `middleName`, `lastName`, `section`, `yearLevel`, `password`, `img`) VALUES
(3, 'b-12-00-11-001', 'monitoring1', 'monitoring1', 'monitoring1', '1', '11', 'b-12-00-11-00', '4f32dab86a57fefd770d6a5fe6df3c4fmonitoring2.jpg'),
(6, 'b-12-00-11-00', 'monitoring2', 'monitoring2', 'monitoring2', '2', '11', 'b-12-00-11-00', 'f93d3191aa7bbddab00551d7fe2d486eb-12-00-11-00.jpg'),
(14, 'user', 'user', 'user1', 'user1', '1', '11', 'user', '919a3d4d82e01323fece61073da0dc7fuser.jpg'),
(15, 'b-12345', 'PROFFESOR1', 'theodor1', 'acma', '1', '11', 'computer123a', '45436628087bd0f18d62c3da4d062c85b-12345.jpg'),
(16, '12-4884-00', 'MONITORING', 'JUNE', 'JURADA', '1', '11', 'admin', '77fdd1c15df58e70006d7b4d5d813c7e12-4884-00.jpg'),
(18, 'faculty', 'MONITORING STAFF', 'CARLOS', 'JURADA', '1', '11', 'faculty', '672cf3025399742b1a047c8dc6b1e992faculty.png'),
(19, '1712', '1712', '1712', '1712', '5', '11', '1712', 'd07e70efcfab08731a97e7b91be644de1712.png'),
(20, 'm1', 'm1', 'm1', 'm1', '1', '11', 'm1', '7edccc661418aeb5761dbcdc06ad490cm1.png'),
(21, '2021-1', '2021-1', '2021-1', '2021-1', '4', '11', '2021-1', '263d532e4904460675006ad964948efa2021-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postID` int(11) NOT NULL,
  `post` varchar(5000) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postID`, `post`, `poster`, `date`, `time`, `class`) VALUES
(18, 'The islands in the north are snowy...\nAnd their heads get really cold...\nThey\'re very chilly-chilly...\nThey\'re very willy-nilly...\nAnd they\'re all idiots!', '12', '11/09/19', '3:22 pm', '4'),
(36, 'asd', '12', '11/28/19', '10:47 am', ''),
(65, 'Mwehehe', '12', '11/28/19', '12:13 pm', '2'),
(66, 'Sepagan', '12', '11/28/19', '12:16 pm', '2'),
(68, '', '12', '11/29/19', '9:17 pm', '2'),
(69, '', '12', '11/29/19', '9:50 pm', '2'),
(70, '', '12', '11/30/19', '7:04 am', '2'),
(71, '', '12', '11/30/19', '7:13 am', '2'),
(72, '', '12', '11/30/19', '7:26 am', '2'),
(73, '', '12', '11/30/19', '7:40 am', '2'),
(74, '', '12', '11/30/19', '7:42 am', '2'),
(75, 'DURATION', '1600155', '03/14/21', '8:37 am', '7'),
(76, 'DURATION 5HRS', '1600155', '03/14/21', '8:39 am', '9'),
(77, 'DURATION 3HR', '1600155', '03/14/21', '8:40 am', '9'),
(78, 'ewewewew', '162345', '03/15/21', '2:23 am', '10'),
(79, '', '162345', '03/15/21', '2:23 am', '10'),
(80, 'march/15/2001         DURATION AND GOOGLE LINK TODAY', '162345', '03/15/21', '2:29 am', '10'),
(81, 'SIR PA CHECK', 'admin1', '03/15/21', '4:03 am', '13'),
(82, 'ewewqewqewqewqewq', 'admin1', '03/15/21', '5:26 am', '14'),
(83, 'qwewqewqewqewq', 'admin1', '03/15/21', '5:27 am', '13'),
(84, 'PA CHECK PO SIR', 'admin1', '03/15/21', '6:45 am', '13'),
(85, '', 'admin1', '03/15/21', '6:48 am', '13'),
(86, 'PA CHECK PO', 'TUGADIFACULTY', '03/15/21', '6:54 am', '15'),
(87, 'SIR PA CHECK PO NG DURATION', 'admin1', '03/15/21', '11:16 am', '13'),
(88, 'DEL', 'admin1', '03/15/21', '11:16 am', '13'),
(89, 'SIR MONITORING STAFF PA CHECK PO', 'admin2', '03/15/21', '11:37 am', '16'),
(90, 'http://localhost/thesis/faculty/room.php?qi=13       SIR PA CHECK PO', 'admin2', '03/15/21', '11:42 am', '16'),
(92, 'eqwewq', 'try', '03/15/21', '4:30 pm', '19'),
(100, '', 'try1', '03/16/21', '6:54 pm', '23'),
(101, 'EQWEWQEWQEWQE', 'try1', '03/16/21', '7:10 pm', '22'),
(102, 'DEPARTMENT OF HEALTH', '12-4884-00', '03/16/21', '7:26 pm', '24'),
(112, 'SIR PA CHECK\r\n', 'faculty3', '03/17/21', '1:14 am', '34'),
(113, '', 'faculty3', '03/17/21', '1:16 am', '34'),
(114, 'WEWEWEW', 'faculty3', '03/17/21', '1:18 am', '34'),
(119, '', 'faculty2', '03/17/21', '10:02 am', '37'),
(132, 'March 18, 2021_9:00PM', '1412', '03/18/21', '2:00 pm', '44'),
(135, 'March 23, 2021_6:00PM', 'admin3', '03/23/21', '11:00 am', '48'),
(136, 'MARCH 24, 2021_12:04PM', '2021-F-1', '03/23/21', '5:04 pm', '49'),
(177, '', 'f1', '03/30/21', '9:23 am', '67'),
(182, '', 'f1', '03/30/21', '10:14 am', '66');

-- --------------------------------------------------------

--
-- Table structure for table `postattachment`
--

CREATE TABLE `postattachment` (
  `postAttachementID` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `postID` varchar(255) NOT NULL,
  `ext` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postattachment`
--

INSERT INTO `postattachment` (`postAttachementID`, `type`, `file`, `postID`, `ext`, `title`) VALUES
(5, 'room', '2', '25', '', '1'),
(29, 'Image', '2389ceb16e2cc3941618a5f9055840d0.jpg', '65', '', '1'),
(30, 'Image', '7a4bf9ba2bd774068ad50351fb898076.jpg', '65', '', '1'),
(31, 'Image', '70522cd467f1001ad2c2d009707f61d9.jpg', '65', '', '1'),
(32, 'room', '5', '66', '', '2'),
(33, 'Image', '487976bf707964b166e395eb1cc36196.jpg', '68', '', '1'),
(34, 'room', '5', '69', '', '1'),
(35, 'room', '6', '70', '', '1'),
(36, 'room', '3', '71', '', '1'),
(37, 'room', '6', '72', '', '1'),
(38, 'room', '7', '73', '', '1'),
(39, 'room', '7', '74', '', '1'),
(40, 'room', '8', '79', '', '1'),
(41, 'Image', 'a2ec35c98a4e9f66f3fb3416a1995762.jpg', '79', '', '1'),
(42, 'room', '9', '80', '', '1'),
(43, 'Image', 'fbc73ee8f22e7cbf9e2b7883ce7516bb.jpg', '80', '', '1'),
(44, 'room', '10', '81', '', '1'),
(45, 'room', '10', '82', '', '1'),
(46, 'Image', '2befec3067396af83483e0a9e8d8d3f5.jpg', '82', '', '1'),
(47, 'room', '10', '83', '', '1'),
(48, 'Image', '0e75f46bdf393734d930bb1da32ea378.jpg', '83', '', '1'),
(49, 'room', '11', '84', '', '1'),
(50, 'room', '11', '85', '', '1'),
(51, 'room', '12', '86', '', '1'),
(52, 'room', '10', '87', '', '1'),
(53, 'Image', 'fa516bc66fd00c5b11095737b7f14ebf.jpg', '87', '', '1'),
(54, 'room', '10', '88', '', '1'),
(55, 'Image', 'f688d7b4b5112378f363537d733f29b4.jpg', '88', '', '1'),
(56, 'room', '13', '89', '', '1'),
(57, 'room', '13', '90', '', '1'),
(64, 'room', '20', '100', '', '1'),
(65, 'room', '20', '101', '', '1'),
(66, 'room', '22', '102', '', '1'),
(67, 'room', '24', '103', '', '1'),
(71, 'room', '34', '112', '', '1'),
(72, 'room', '34', '113', '', '1'),
(73, 'room', '34', '114', '', '1'),
(78, 'room', '24', '119', '', '1'),
(86, 'Image', 'e7e0ee9013bfe3cbe02de8a59e286c1e.jpg', '129', '', '1'),
(89, 'room', '41', '132', '', '1'),
(90, 'Image', 'dd409260aea46a90e61b9a69fb9726ef.png', '132', '', '1'),
(93, 'room', '52', '135', '', '1'),
(94, 'Image', 'b38801baf56109a4576501d6c6ec3a81.png', '135', '', '1'),
(95, 'room', '53', '136', '', '1'),
(96, 'Image', '60c530d611f7017ba51093527ac1ee3d.png', '136', '', '1'),
(105, 'Image', '1846568d5a791a321a2b27eb5734dded.png', '170', '', '1'),
(108, 'room', '56', '177', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `roomID` int(11) NOT NULL,
  `roomTitle` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `timer` varchar(255) NOT NULL,
  `test` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomID`, `roomTitle`, `faculty`, `timer`, `test`) VALUES
(2, 'Omae wa', '12', '300', ''),
(3, 'OK', '12', '300', ''),
(4, 'tangina', '12', '300', ''),
(5, 'isapa nga', '12', '300', ''),
(6, 'El Hombre', '12', '300', ''),
(7, 'loki', '12', '60', ''),
(8, 'wewewe', '162345', '240', ''),
(9, 'GOOGLE MEET AND DURATION', '162345', '216000', ''),
(10, 'DURATION', 'admin1', '18000', ''),
(11, 'DURATION1', 'admin1', '18000', ''),
(12, 'SOFT ENG.', 'TUGADIFACULTY', '30000', ''),
(13, 'DURATION', 'admin2', '3600', ''),
(20, 'EWQEWQEWQ', 'try1', '18739279279260', ''),
(21, 'QWEQWEQWEQW', 'try1', '0', ''),
(22, 'PROGRAMMING 1 A2A2', '12-4884-00', '18000', ''),
(23, 'THESIS', '12-4884-00', '12000', ''),
(24, 'THESIS', 'faculty2', '18000', ''),
(34, 'A2019 Monday-2:00-5:00 Comp 2 -Business Software Application-BS Entrep  ', 'faculty3', '73320', ''),
(41, 'Monday- 7:30-12:30 CC 106-Application and Emerging Technology - BSCS ', '1412', '5400', ''),
(52, 'A2019 Monday-2:00-5:00 Comp 2 -Business Software Application-BS Entrep  ', 'admin3', '0', ''),
(53, 'A2019 Monday-2:00-5:00 Comp 2 -Business Software Application-BS Entrep  ', '2021-F-1', '0', ''),
(56, 'Monday- 7:30-12:30 CC 106-Application and Emerging Technology - BSCS ', 'f1', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `roomattendance`
--

CREATE TABLE `roomattendance` (
  `raID` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `choice1` varchar(255) NOT NULL,
  `choice2` varchar(255) NOT NULL,
  `choice3` varchar(255) NOT NULL,
  `choice4` varchar(255) NOT NULL,
  `correct` varchar(255) NOT NULL,
  `roomID` varchar(255) NOT NULL,
  `roomType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomattendance`
--

INSERT INTO `roomattendance` (`raID`, `question`, `choice1`, `choice2`, `choice3`, `choice4`, `correct`, `roomID`, `roomType`) VALUES
(14, 'POGI BA SI JEFF', 'TRUE', 'FALSE', '', '', 'A', '3', '2'),
(15, 'Masaya ka ?', 'TRUE', 'FALSE', '', '', 'B', '3', '2'),
(16, 'ow di nga', 'TRUE', 'FALSE', '', '', 'A', '3', '2'),
(17, 'tigasan ka', 'Knina pa', 'OO nga e', 'jaju', 'manyak', 'A', '3', '1'),
(18, 'ang alamat ng pastil', '', '', '', '', 'peste', '3', '3'),
(19, 'Isapa', '', '', '', '', 'isapa', '3', '3'),
(20, 'Ok lang', '', '', '', '', 'okalng', '4', '3'),
(21, 'gago ka ba?', 'TRUE', 'FALSE', '', '', 'A', '4', '2'),
(22, 'tanga kaab ?', 'a', 'c', 's', 'a', 'C', '4', '1'),
(23, 'asd', 'aaa', 'aaa', 'aa', 'aa', 'C', '5', '1'),
(24, 'wut', 'TRUE', 'FALSE', '', '', 'A', '5', '2'),
(25, 'hmm', '', '', '', '', 'asd', '5', '3'),
(26, 'asd', 'asd', 'asd', 'asd', 'asd', 'A', '6', '1'),
(27, 'z', 'TRUE', 'FALSE', '', '', 'A', '6', '2'),
(28, '2', '', '', '', '', '2', '6', '3'),
(29, 'x', 'x', 'x', 'x', 'x', 'C', '7', '1'),
(30, '', '', '', '', '', 'A', '8', '1'),
(31, '', '', '', '', '', 'C', '8', '1'),
(32, '', 'eqwewewqe', '', '', '', 'C', '8', '1'),
(33, 'SIR PA CHECK', 'TRUE', 'FALSE', '', '', 'B', '10', '2'),
(34, 'http://localhost/thesis/faculty/room.php?qi=11', 'TRUE', 'FALSE', '', '', 'B', '11', '2'),
(35, 'http://localhost/thesis/monitoring/index.php', 'TRUE', 'FALSE', '', '', 'B', '12', '2'),
(36, 'http://localhost/thesis/faculty/room.php?qi=13', 'TRUE', 'FALSE', '', '', 'A', '13', '2'),
(49, '', 'PRESENT', 'ABSENT', '', '', 'A', '20', '2'),
(50, 'GOOGLE MEET', 'PRESENT', 'ABSENT', '', '', 'A', '22', '2'),
(51, '', 'PRESENT', 'ABSENT', '', '', 'A', '22', '2'),
(52, '', 'PRESENT', 'ABSENT', '', '', 'A', '22', '2'),
(53, '', 'PRESENT', 'ABSENT', '', '', 'A', '23', '2'),
(54, 'http://localhost/thesis/faculty/room.php?qi=24', 'PRESENT', 'ABSENT', '', '', 'A', '24', '2'),
(60, 'http://localhost/thesis/faculty/room.php?qi=34', 'PRESENT', 'ABSENT', '', '', 'A', '34', '2'),
(70, 'meet.google/hdsa123', 'PRESENT', 'ABSENT', '', '', 'A', '41', '2'),
(71, 'meet.google.com/hds-231', 'PRESENT', 'ABSENT', '', '', 'A', '52', '2'),
(72, 'meet.google.com/sds321', 'PRESENT', 'ABSENT', '', '', 'A', '53', '2'),
(76, '312321321', 'PRESENT', 'ABSENT', '', '', 'A', '56', '2');

-- --------------------------------------------------------

--
-- Table structure for table `roomresult`
--

CREATE TABLE `roomresult` (
  `resultID` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `roomID` varchar(255) NOT NULL,
  `monitoring` varchar(255) NOT NULL,
  `correct` varchar(255) NOT NULL,
  `questionID` varchar(255) NOT NULL,
  `roomTakeID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomresult`
--

INSERT INTO `roomresult` (`resultID`, `answer`, `roomID`, `monitoring`, `correct`, `questionID`, `roomTakeID`) VALUES
(66, 'okalang', '4', '123', 'okalng', '20', '13'),
(67, 'A', '4', '123', 'A', '21', '13'),
(68, 'B', '4', '123', 'C', '22', '13'),
(69, 'A', '3', '123', 'A', '14', '12'),
(70, 'B', '3', '123', 'B', '15', '12'),
(71, 'A', '3', '123', 'A', '16', '12'),
(72, 'A', '3', '123', 'A', '17', '12'),
(73, 'peste', '3', '123', 'peste', '18', '12'),
(74, 'isapa', '3', '123', 'isapa', '19', '12'),
(78, 'A', '5', '123', 'C', '23', '14'),
(79, 'B', '5', '123', 'A', '24', '14'),
(80, 'hmm', '5', '123', 'asd', '25', '14'),
(81, 'A', '5', '123', 'C', '23', '15'),
(82, 'B', '5', '123', 'A', '24', '15'),
(83, 'sad', '5', '123', 'asd', '25', '15'),
(84, 'A', '5', '123', 'C', '23', '16'),
(85, 'A', '5', '123', 'A', '24', '16'),
(86, 'hmm', '5', '123', 'asd', '25', '16'),
(87, 'A', '6', '123', 'A', '26', '17'),
(88, 'A', '6', '123', 'A', '27', '17'),
(89, '2', '6', '123', '2', '28', '17'),
(90, 'A', '3', '123', 'A', '14', '19'),
(91, 'A', '3', '123', 'B', '15', '19'),
(92, 'A', '3', '123', 'A', '16', '19'),
(93, 'C', '3', '123', 'A', '17', '19'),
(94, 's', '3', '123', 'peste', '18', '19'),
(95, 's', '3', '123', 'isapa', '19', '19'),
(96, 'A', '3', '123', 'A', '14', '19'),
(97, 'A', '3', '123', 'B', '15', '19'),
(98, 'A', '3', '123', 'A', '16', '19'),
(99, 'A', '3', '123', 'A', '17', '19'),
(100, 'a', '3', '123', 'peste', '18', '19'),
(101, 'a', '3', '123', 'isapa', '19', '19'),
(102, 'A', '6', '123', 'A', '26', '20'),
(103, 'A', '6', '123', 'A', '27', '20'),
(104, '2', '6', '123', '2', '28', '20'),
(105, 'B', '10', 'user1', 'B', '33', '25'),
(106, 'B', '10', 'monitoring1', 'B', '33', '26'),
(107, 'B', '10', 'monitoring1', 'B', '33', '27'),
(108, 'B', '11', 'monitoring1', 'B', '34', '28'),
(109, 'A', '13', 'user2', 'A', '36', '31'),
(110, 'A', '13', 'user2', 'A', '36', '32'),
(112, 'A', '10', 'user1', 'B', '33', '34'),
(118, 'A', '20', 'user1', 'A', '49', '38'),
(119, 'A', '20', 'b-12-00-11-00', 'A', '49', '39'),
(120, 'A', '20', 'user', 'A', '49', '40'),
(121, 'A', '22', 'b-12345', 'A', '50', '41'),
(123, 'A', '34', '12-4884-00', 'A', '60', '43'),
(124, 'B', '34', '12-4884-00', 'A', '60', '44'),
(125, 'A', '34', '12-4884-00', 'A', '60', '45'),
(131, 'A', '41', '1712', 'A', '70', '51'),
(132, 'A', '52', 'm1', 'A', '71', '53'),
(139, 'A', '56', 'm1', 'A', '76', '60'),
(140, 'B', '56', 'm1', 'A', '76', '61');

-- --------------------------------------------------------

--
-- Table structure for table `roomtake`
--

CREATE TABLE `roomtake` (
  `roomTakeID` int(11) NOT NULL,
  `roomID` varchar(255) NOT NULL,
  `monitoring` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `postID` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `items` varchar(255) NOT NULL,
  `classID` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomtake`
--

INSERT INTO `roomtake` (`roomTakeID`, `roomID`, `monitoring`, `status`, `postID`, `result`, `items`, `classID`, `time`) VALUES
(12, '3', '123', '2', '26', '0', '100', '2', ''),
(13, '4', '123', '2', '27', '0', '100', '2', ''),
(14, '5', '123', '2', '28', '0', '100', '2', ''),
(15, '5', '123', '2', '66', '0', '100', '2', ''),
(16, '5', '123', '2', '69', '0', '100', '2', ''),
(17, '6', '123', '2', '70', '0', '100', '2', '300'),
(19, '3', '123', '2', '71', '0', '100', '2', '300'),
(20, '6', '123', '2', '72', '0', '100', '2', '270'),
(21, '7', '123', '2', '73', '0', '100', '2', '-60'),
(22, '7', '123', '2', '74', '0', '100', '2', '0'),
(23, '8', '161234', '1', '79', '0', '100', '10', '27'),
(24, '9', '161234', '1', '80', '0', '100', '10', '215589'),
(25, '10', 'user1', '2', '81', '0', '100', '13', '17944'),
(26, '10', 'monitoring1', '2', '83', '0', '100', '13', '17995'),
(27, '10', 'monitoring1', '2', '81', '0', '100', '13', '17996'),
(28, '11', 'monitoring1', '2', '84', '0', '100', '13', '17976'),
(29, '11', 'monitoring1', '1', '85', '0', '100', '13', '17977'),
(30, '12', 'monitoring1', '1', '86', '0', '100', '15', '29966'),
(31, '13', 'user2', '2', '89', '0', '100', '16', '3574'),
(32, '13', 'user2', '2', '90', '0', '100', '16', '3568'),
(34, '10', 'user1', '2', '88', '0', '100', '13', '17991'),
(38, '20', 'user1', '2', '99', '0', '100', '21', '18739279279215'),
(39, '20', 'b-12-00-11-00', '2', '100', '0', '100', '23', '18739279279257'),
(40, '20', 'user', '2', '101', '0', '100', '22', '18739279279258'),
(41, '22', 'b-12345', '2', '102', '0', '100', '24', '17996'),
(43, '34', '12-4884-00', '2', '112', '0', '100', '34', '73188'),
(44, '34', '12-4884-00', '2', '113', '0', '100', '34', '73318'),
(45, '34', '12-4884-00', '2', '114', '0', '100', '34', '73314'),
(51, '41', '1712', '2', '132', '0', '100', '44', '5398'),
(53, '52', 'm1', '2', '135', '0', '100', '48', '10'),
(60, '56', 'm1', '2', '176', '0', '100', '67', '19'),
(61, '56', 'm1', '2', '177', '0', '100', '67', '13');

-- --------------------------------------------------------

--
-- Table structure for table `roomtype`
--

CREATE TABLE `roomtype` (
  `qtID` int(11) NOT NULL,
  `roomType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomtype`
--

INSERT INTO `roomtype` (`qtID`, `roomType`) VALUES
(2, 'PRESENT OR ABSENT');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `sectionID` int(11) NOT NULL,
  `section` varchar(255) NOT NULL,
  `yearLevel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`sectionID`, `section`, `yearLevel`) VALUES
(1, 'COLLEGE OF ARTS AND SCIENCES ', '11'),
(2, 'COLLEGE OF EDUCATION', '11'),
(3, 'COLLEGE OF BUSINESS MANAGEMENT', '11'),
(4, 'COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGY', '11'),
(5, 'COLLEGE OF CRIMINAL JUSTICE                                 ', '11'),
(6, 'COLLEGE OF HOSPITALITY & TOURISM MANAGEMENT', '11'),
(7, 'COLLEGE OF ENGINEERING AND TECHNOLOGY', '11');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjectID` int(11) NOT NULL,
  `subject` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjectID`, `subject`) VALUES
(11, 'Monday- 7:30-12:30PM ELECT-415'),
(12, 'Wednesday- 2:30-5:30PM CS-4124'),
(13, 'Friday- 1:00-6:00PM ELECT-414'),
(14, 'Monday- 2:30-5:30PM CS-413'),
(17, 'Sunday- 8:00-11:AM & 2:00:5:00PM CS-4123L2'),
(18, 'Friday- 7:30-12:30PM CS-ELECT-416'),
(19, 'Monday- 11:00-2:00PM CS-4122');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`assessmentID`);

--
-- Indexes for table `assessmentform`
--
ALTER TABLE `assessmentform`
  ADD PRIMARY KEY (`amcID`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`classID`);

--
-- Indexes for table `classmember`
--
ALTER TABLE `classmember`
  ADD PRIMARY KEY (`cmID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`facultySeqNo`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`forumChatID`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`logID`);

--
-- Indexes for table `monitoring`
--
ALTER TABLE `monitoring`
  ADD PRIMARY KEY (`monitoringSeqNo`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `postattachment`
--
ALTER TABLE `postattachment`
  ADD PRIMARY KEY (`postAttachementID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomID`);

--
-- Indexes for table `roomattendance`
--
ALTER TABLE `roomattendance`
  ADD PRIMARY KEY (`raID`);

--
-- Indexes for table `roomresult`
--
ALTER TABLE `roomresult`
  ADD PRIMARY KEY (`resultID`);

--
-- Indexes for table `roomtake`
--
ALTER TABLE `roomtake`
  ADD PRIMARY KEY (`roomTakeID`);

--
-- Indexes for table `roomtype`
--
ALTER TABLE `roomtype`
  ADD PRIMARY KEY (`qtID`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`sectionID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjectID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `assessmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `assessmentform`
--
ALTER TABLE `assessmentform`
  MODIFY `amcID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `classID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `classmember`
--
ALTER TABLE `classmember`
  MODIFY `cmID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `facultySeqNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `forumChatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=549;

--
-- AUTO_INCREMENT for table `monitoring`
--
ALTER TABLE `monitoring`
  MODIFY `monitoringSeqNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `postattachment`
--
ALTER TABLE `postattachment`
  MODIFY `postAttachementID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `roomID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `roomattendance`
--
ALTER TABLE `roomattendance`
  MODIFY `raID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `roomresult`
--
ALTER TABLE `roomresult`
  MODIFY `resultID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `roomtake`
--
ALTER TABLE `roomtake`
  MODIFY `roomTakeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `roomtype`
--
ALTER TABLE `roomtype`
  MODIFY `qtID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `sectionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subjectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
