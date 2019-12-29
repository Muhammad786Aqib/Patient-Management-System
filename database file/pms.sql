-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2013 at 05:15 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `app`
--

CREATE TABLE IF NOT EXISTS `app` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `cnic` varchar(50) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`p_id`),
  UNIQUE KEY `cnic` (`cnic`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `app`
--

INSERT INTO `app` (`p_id`, `name`, `fname`, `age`, `sex`, `cnic`, `dname`, `date`) VALUES
(65, 'Inamullah', 'kaleem ullah', '22', 'male', '54', '', '0000-00-00'),
(66, 'Inamullah', 'kaleem ullah', '22', 'male', '546546465465465', 'Doct. Inam-ullah', '0000-00-00'),
(67, 'amir nazir', 'nazir', '22', 'male', '36126768453434', 'Capt. Usman', '0000-00-00'),
(68, 'dsjbkb ', ';jkbk k', '54', 'male', '68465446', '', '0000-00-00'),
(51, 'Aurangzeb tareen', 'Farrukh Tareen', '22', 'male', '3620358965478', 'Doctor Sufyan', '0000-00-00'),
(69, 'dsjbkb ', ';jkbk k', '54', 'male', '68465447', '', '0000-00-00'),
(70, 'dsjbkb ', ';jkbk k', '54', 'male', '68465444', '', '0000-00-00'),
(71, 'dsjbkb ', ';jkbk k', '54', 'male', '684654', '', '0000-00-00'),
(72, 'dsjbkb ', ';jkbk k', '54', 'male', '6846', '', '0000-00-00'),
(73, 'dsjbkb ', ';jkbk k', '54', 'male', '684', '', '0000-00-00'),
(74, 'dsjbkb ', ';jkbk k', '54', 'male', '68', '', '0000-00-00'),
(75, 'mmmmmmm', 'jjjjjjjjjjjjjj', '444', 'male', '456', 'Doctor Sufyan', '0000-00-00'),
(64, 'Muhammad Aamir Nazir', 'Nazir Ahmad', '22', 'male', '3620358978472', 'Capt. Usman', '0000-00-00'),
(63, 'Muhammad Gulzar', 'Muhammad Yaseen', '23', 'male', '3840272556803', 'Dr. Ghulam Haider Qaisrani', '0000-00-00'),
(62, 'name', 'fname', '12', 'male', '335454', 'hgz', '0000-00-00'),
(61, 'Muhammad Aamir Nazir', 'Nazir Ahmad', '22', 'male', '3620358978471', 'Doctor Amir', '0000-00-00'),
(76, 'Muhammad Aamir Nazir', 'Nazir Ahmad', '22', 'male', '36203545646546', 'Doctor Usman', '0000-00-00'),
(77, 'shajee khan', 'ghazanfar abbas', '22', 'male', '3213212', 'Doctor Shaji', '0000-00-00'),
(78, 'shajee', 'ghazanfar abbas', '22', 'male', '54654654654', 'Doctor Amir', '0000-00-00'),
(79, 'sfg', '', '', '', '', '---select---', '2013-09-03'),
(80, 'rana mahmod', 'fida hussain', '23', 'male', '3620358978444', 'Doctor Sufyan', '2013-09-05');

-- --------------------------------------------------------

--
-- Table structure for table `authentication`
--

CREATE TABLE IF NOT EXISTS `authentication` (
  `auth_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(11) NOT NULL,
  `dept` varchar(20) NOT NULL,
  PRIMARY KEY (`auth_id`),
  UNIQUE KEY `code` (`code`),
  UNIQUE KEY `dept` (`dept`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `authentication`
--

INSERT INTO `authentication` (`auth_id`, `code`, `dept`) VALUES
(6, 'pres', 'prescription'),
(5, 'app', 'appointment'),
(8, 'roo', 'room_allotment'),
(9, 'roos', 'room_services'),
(10, 'pha', 'pharmacy'),
(11, 'lab', 'laboratory'),
(12, 'bill', 'billing'),
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `bill_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `total` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  PRIMARY KEY (`bill_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `date`, `total`, `p_id`, `payment`) VALUES
(20, '2013-05-30', 13182, 51, 0),
(21, '2013-05-31', 15182, 51, 0),
(22, '2013-05-31', 50000, 63, 0),
(23, '2013-07-05', 588039, 66, 0),
(24, '2013-07-05', 14160, 61, 0),
(25, '2013-09-06', 1477, 80, 1477),
(26, '2013-09-06', 1477, 80, 1477),
(27, '2013-09-06', 1477, 80, 1477),
(28, '2013-09-06', 1477, 80, 1477),
(29, '2013-09-06', 1477, 80, 1477),
(30, '2013-09-06', 1477, 80, 1477),
(31, '2013-09-06', 1477, 80, 1477),
(32, '2013-09-06', 1477, 80, 1477),
(33, '2013-09-06', 1477, 80, 1477),
(34, '2013-09-06', 1477, 80, 1477),
(35, '2013-09-06', 1477, 80, 1477),
(36, '2013-09-06', 1477, 80, 1477),
(37, '2013-09-06', 1477, 80, 1477),
(38, '2013-09-06', 1477, 80, 1477),
(39, '2013-09-06', 1477, 80, 1477),
(40, '2013-09-06', 1477, 80, 1477),
(41, '2013-09-06', 1477, 80, 1477),
(42, '2013-09-06', 1477, 80, 1477),
(43, '2013-09-06', 1477, 80, 1477),
(44, '2013-09-06', 1477, 80, 1477),
(45, '2013-09-06', 1477, 80, 1477),
(46, '2013-09-06', 1477, 80, 1477);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `d_no` int(11) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(15) NOT NULL,
  `d_fee` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`d_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`d_no`, `d_name`, `d_fee`, `date`) VALUES
(1, 'Doctor Sufyan', 500, '0000-00-00'),
(2, 'Doctor Usman', 700, '0000-00-00'),
(3, 'Doctor Ameer Gh', 800, '0000-00-00'),
(4, 'Doctor Amir', 1000, '0000-00-00'),
(5, 'Doctor Shaji', 50, '0000-00-00'),
(7, 'Doctor Shahid', 1000, '0000-00-00'),
(8, 'Doctor Inaam', 10, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `executive_room`
--

CREATE TABLE IF NOT EXISTS `executive_room` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `room_no` int(11) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `executive_room`
--

INSERT INTO `executive_room` (`sr_no`, `room_no`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `general_room`
--

CREATE TABLE IF NOT EXISTS `general_room` (
  `sr.no` int(11) NOT NULL AUTO_INCREMENT,
  `room_no` int(11) NOT NULL,
  PRIMARY KEY (`sr.no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `general_room`
--

INSERT INTO `general_room` (`sr.no`, `room_no`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `laboratory`
--

CREATE TABLE IF NOT EXISTS `laboratory` (
  `lab_id` int(11) NOT NULL AUTO_INCREMENT,
  `test_type` varchar(20) NOT NULL,
  `p_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `photo` varchar(30) NOT NULL,
  PRIMARY KEY (`lab_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `laboratory`
--

INSERT INTO `laboratory` (`lab_id`, `test_type`, `p_id`, `date`, `photo`) VALUES
(54, 'complete bloud check', 61, '2013-07-16', 'Lighthouse.jpg'),
(55, 'complete bloud check', 61, '2013-07-16', 'Penguins.jpg'),
(56, 'complete bloud check', 61, '2013-07-16', 'Hydrangeas.jpg'),
(57, 'complete bloud check', 61, '2013-07-16', 'Tulips.jpg'),
(58, 'complete bloud check', 61, '2013-07-16', 'Chrysanthemum.jpg'),
(59, 'complete bloud check', 61, '2013-07-16', 'Koala.jpg'),
(60, 'complete bloud check', 61, '2013-07-16', '1.jpg'),
(61, 'nill', 77, '2013-07-15', ''),
(62, 'complete bloud check', 77, '2013-07-15', ''),
(63, 'nill', 61, '2013-09-04', 'amir.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_name` varchar(10) NOT NULL,
  `m_price` int(10) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`m_id`, `m_name`, `m_price`) VALUES
(2, 'chintoo', 420),
(3, 'panadol', 10),
(4, 'eitarex', 25),
(5, 'regix', 45),
(6, 'Abatacept ', 500),
(7, 'Abarelix (', 350),
(8, '', 0),
(9, 'Abilify (A', 450),
(10, 'Acamprosat', 370),
(11, 'Acetazolam', 780),
(12, 'Acticin (P', 650);

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE IF NOT EXISTS `pharmacy` (
  `pharmacy_id` int(11) NOT NULL AUTO_INCREMENT,
  `price` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`pharmacy_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`pharmacy_id`, `price`, `payment`, `p_id`, `date`) VALUES
(48, 10, 20, 61, '2013-09-05'),
(28, 40, 40, 61, '0000-00-00'),
(51, 10, 10, 61, '2013-09-05'),
(50, 444, 444, 61, '2013-09-05'),
(49, 40, 40, 62, '2013-09-05'),
(38, 420, 420, 77, '2013-07-15'),
(39, 420, 420, 77, '2013-07-15'),
(40, 420, 420, 77, '2013-07-15'),
(41, 420, 0, 61, '2013-07-15'),
(42, 420, 0, 77, '2013-07-15'),
(43, 420, 0, 77, '2013-07-15'),
(44, 0, 500, 61, '2013-09-05'),
(45, 400, 500, 61, '2013-09-05'),
(46, 0, 200, 61, '2013-09-05'),
(47, 0, 60, 61, '2013-09-05');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `pres_id` int(11) NOT NULL AUTO_INCREMENT,
  `symptoms` varchar(100) NOT NULL,
  `prescription` varchar(20) NOT NULL,
  `remark` varchar(50) NOT NULL,
  `p_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `test` varchar(20) NOT NULL,
  PRIMARY KEY (`pres_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`pres_id`, `symptoms`, `prescription`, `remark`, `p_id`, `date`, `test`) VALUES
(23, 'symp', '0000-00-00', 'hjkhj', 59, '0000-00-00', ''),
(24, 'having temprature for 3 days', '0000-00-00', 'fever', 61, '0000-00-00', ''),
(25, 'dshgsdg', '0000-00-00', 'mvnvn', 62, '0000-00-00', ''),
(26, 'Fever', '0000-00-00', 'Clear', 63, '0000-00-00', ''),
(27, 'temprature,feeling weakness', '0000-00-00', 'Fever', 64, '0000-00-00', ''),
(28, 'sghaiusgfg', '0000-00-00', 'adkgfzdkv', 66, '0000-00-00', ''),
(29, 'yjryjf', '0000-00-00', 'utkut', 67, '0000-00-00', ''),
(30, 'kaefkajb', 'khfdgkfvk', 'kdhfdkhv', 61, '2013-07-13', ''),
(31, 'wrkgh', 'pjhj', 'khb', 61, '2013-07-13', 'test type'),
(32, 'lekgjskl', 'kjdba', 'kjbkjb', 61, '2013-07-13', 'nill'),
(33, 'adjbfkdbv', '', 'fever', 61, '2013-07-13', 'ECG'),
(34, 'lsfkfl', 'name', 'fever', 61, '2013-07-13', 'blood group test'),
(35, 'lsfjb', 'chintoo', '.dfgn.d', 61, '2013-07-13', 'Maleria test'),
(36, ';djv', 'panadol', ';kn', 61, '2013-07-14', 'complete bloud check'),
(37, '', 'chintoo', 'kjkj', 61, '2013-07-14', 'blood group screenin'),
(38, 'cough,temprature', 'panadol', 'Looking fever', 76, '2013-07-15', 'Maleria test'),
(39, 'kjghk', 'panadol', 'kjb', 76, '2013-07-15', 'Maleria test'),
(40, 'high fever, cold, cough.', 'chintoo', 'he is ok now !!!', 77, '2013-07-15', 'nill'),
(41, '', 'panadol', '', 77, '2013-07-15', 'complete bloud check'),
(42, '', 'name', '', 61, '2013-09-04', 'nill'),
(43, 'ngchch', 'chintoo', 'khgg', 61, '2013-09-05', 'blood group test'),
(44, 'sssss', 'ssssss', 'ssssss', 80, '2013-09-05', 'blood group screenin');

-- --------------------------------------------------------

--
-- Table structure for table `reserved_room`
--

CREATE TABLE IF NOT EXISTS `reserved_room` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `room_no` int(11) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `reserved_room`
--

INSERT INTO `reserved_room` (`sr_no`, `room_no`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `room_allotment`
--

CREATE TABLE IF NOT EXISTS `room_allotment` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(30) NOT NULL,
  `room_type` varchar(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `contact` int(11) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `room_allotment`
--

INSERT INTO `room_allotment` (`room_id`, `address`, `room_type`, `room_no`, `p_id`, `date`, `contact`) VALUES
(34, '', 'general', 2, 66, '2013-07-05', 0),
(33, '', 'general', 1, 64, '2013-07-04', 0),
(32, '', 'executive', 5, 63, '2013-05-31', 0),
(31, '', 'general', 8, 62, '2013-05-31', 0),
(29, '', 'executive', 1, 58, '2013-05-30', 0),
(28, '', 'vip', 1, 56, '2013-05-29', 0),
(27, '', 'vip', 2, 51, '2013-05-29', 0),
(35, 'hjvhjvvjg', 'general', 3, 61, '2013-07-13', 44545654),
(36, 'k.n.n.n', 'general', 4, 64, '0000-00-00', 335443),
(37, 'n;k.nnk;.', 'general', 6, 64, '2013-07-13', 31313),
(38, 'ljsnajlfh', 'reserved', 4, 61, '2013-07-14', 564644),
(39, '', 'general', 1, 61, '2013-07-15', 0),
(40, 'kl;', 'general', 7, 77, '2013-07-15', 0),
(42, '545454', 'general', 5, 80, '2013-09-05', 54);

-- --------------------------------------------------------

--
-- Table structure for table `room_price`
--

CREATE TABLE IF NOT EXISTS `room_price` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `room_type` varchar(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `room_price`
--

INSERT INTO `room_price` (`sr_no`, `room_type`, `price`) VALUES
(1, 'general', 500),
(2, 'reserved', 1000),
(3, 'vip', 2000),
(4, 'executive', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `room_services`
--

CREATE TABLE IF NOT EXISTS `room_services` (
  `r_services_id` int(11) NOT NULL AUTO_INCREMENT,
  `symptoms` varchar(100) NOT NULL,
  `present` varchar(100) NOT NULL,
  `prescription` varchar(100) NOT NULL,
  `rcharges` int(11) NOT NULL,
  `charges` varchar(100) NOT NULL,
  `temprature` int(11) NOT NULL,
  `bp` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`r_services_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `room_services`
--

INSERT INTO `room_services` (`r_services_id`, `symptoms`, `present`, `prescription`, `rcharges`, `charges`, `temprature`, `bp`, `p_id`, `date`) VALUES
(33, 'hmdgdhf', 'ghhdfd', 'hdghgd', 656454, 'fnxgfgfdxg', 5465, 6646, 66, '0000-00-00'),
(32, 'temprature,feeling waekness', 'normal temprature', 'Panadol', 4000, 'price detail', 100, 120, 64, '0000-00-00'),
(31, 'Still Fever', 'Still Fever', 'Panadol', 1200, 'kaparu \r\nadfasf,n', 41, 120, 63, '0000-00-00'),
(30, 'having normal temprature', 'good', 'panadol', 100, 'tea', 98, 80, 61, '0000-00-00'),
(29, 'nice condition', 'looking good', 'Go to pharmacy', 100, 'waja', 100, 80, 58, '0000-00-00'),
(28, 'new', 'new', 'new new', 5000, 'new', 12, 21, 56, '0000-00-00'),
(27, 'new', 'new', 'new2', 500, 'new', 12, 21, 0, '0000-00-00'),
(26, 'aaa', 'bbb', 'ppppp', 5555, 'hhh\r\n', 333, 222, 51, '2013-07-14'),
(34, 'cough', 'less temprature', 'panadol', 1000, 'bedsheets changing  etc', 100, 120, 76, '2013-07-15'),
(38, 'kgkghg', 'khjkh', 'jhjhjhjh', 477, ',jb,jb,', 777, 77, 80, '2013-09-05');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE IF NOT EXISTS `sign_up` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `dept` varchar(20) NOT NULL,
  PRIMARY KEY (`sr_no`),
  UNIQUE KEY `pass` (`pass`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`sr_no`, `user_name`, `pass`, `dept`) VALUES
(17, 'amir', 'admin', 'admin'),
(16, 'amir', 'pharmacy', 'pharmacy'),
(9, 'gulzar6155', '123456', 'prescription'),
(10, 'amir', 'khan', 'billing'),
(11, 'shajee', 'shajee', 'appointment'),
(12, 'amir', 'lab', 'laboratory'),
(13, 'amir', 'billing', 'billing'),
(14, 'amir', 'allotment', 'room_allotment'),
(15, 'amir', 'services', 'room_services');

-- --------------------------------------------------------

--
-- Table structure for table `test_types`
--

CREATE TABLE IF NOT EXISTS `test_types` (
  `test_id` int(11) NOT NULL AUTO_INCREMENT,
  `test_type` varchar(20) NOT NULL,
  `rate` int(11) NOT NULL,
  PRIMARY KEY (`test_id`),
  UNIQUE KEY `test_type` (`test_type`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `test_types`
--

INSERT INTO `test_types` (`test_id`, `test_type`, `rate`) VALUES
(1, 'sugar check', 100),
(7, 'ECG', 800),
(3, 'blood group test', 100),
(4, 'blood group screenin', 500),
(5, 'Maleria test', 150),
(6, 'typhoid test', 150),
(8, 'Urine test', 500),
(9, 'Ultra sound', 2000),
(10, 'X RAY', 400),
(11, 'complete bloud check', 700),
(12, 'TEFI DOT', 900),
(13, 'Typhidot Test', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `vip_room`
--

CREATE TABLE IF NOT EXISTS `vip_room` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `room_no` int(11) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `vip_room`
--

INSERT INTO `vip_room` (`sr_no`, `room_no`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
