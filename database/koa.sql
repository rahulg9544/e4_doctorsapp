-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2020 at 11:58 AM
-- Server version: 5.5.20-log
-- PHP Version: 5.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `koa`
--
CREATE DATABASE IF NOT EXISTS `koa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `koa`;

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `about_id` int(40) NOT NULL AUTO_INCREMENT,
  `about_title` varchar(40) NOT NULL,
  `about_description` varchar(10000) NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about_title`, `about_description`) VALUES
(1, 'Wish', 'hjjkl'),
(2, 'dream', 'rc');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(40) NOT NULL AUTO_INCREMENT,
  `contact_mail1` varchar(40) NOT NULL,
  `contact_mail2` varchar(40) NOT NULL,
  `contact_phone1` varchar(40) NOT NULL,
  `contact_phone2` varchar(40) NOT NULL,
  `contact_locationsrc` varchar(40) NOT NULL,
  `contact_address` varchar(1000) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_mail1`, `contact_mail2`, `contact_phone1`, `contact_phone2`, `contact_locationsrc`, `contact_address`) VALUES
(1, 'g@h.in', 'e@g.com', '345455', '5464546', 'fdgf', 'fdghcgfhghkl'),
(2, 'bg@e.in', 'h@w.in', '43533434', '34343', 'dfgdfhfgh', 'fgfgbvbv');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(40) NOT NULL AUTO_INCREMENT,
  `event_title` varchar(50) NOT NULL,
  `event_description` varchar(10000) NOT NULL,
  `event_venue` varchar(40) NOT NULL,
  `event_date` date NOT NULL,
  `event_image` text NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_title`, `event_description`, `event_venue`, `event_date`, `event_image`) VALUES
(6, 'ioui', '', 'yiu', '2020-06-21', 'e3fd503fa275290938765c1f6c7ab30f.jpg'),
(7, '', '', 'uk', '0000-00-00', 'f2e0760ec3b389b5f73f867df3abaf78.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `members_id` int(10) NOT NULL AUTO_INCREMENT,
  `members_regno` text NOT NULL,
  `members_fname` text NOT NULL,
  `members_mname` text NOT NULL,
  `members_lname` text NOT NULL,
  `members_speciality` text NOT NULL,
  `members_qualify` text NOT NULL,
  `members_dep` text NOT NULL,
  `members_inst` text NOT NULL,
  `members_mail` varchar(100) NOT NULL,
  `members_password` varchar(60) NOT NULL,
  `members_street` text NOT NULL,
  `members_city` text NOT NULL,
  `members_dist` varchar(100) NOT NULL,
  `members_pin` varchar(90) NOT NULL,
  `members_phone` varchar(20) NOT NULL,
  `members_fax` varchar(20) NOT NULL,
  `members_pic` text NOT NULL,
  `members_payment_stat` varchar(90) NOT NULL,
  `members_payment_id` text NOT NULL,
  `members_date` date NOT NULL,
  PRIMARY KEY (`members_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`members_id`, `members_regno`, `members_fname`, `members_mname`, `members_lname`, `members_speciality`, `members_qualify`, `members_dep`, `members_inst`, `members_mail`, `members_password`, `members_street`, `members_city`, `members_dist`, `members_pin`, `members_phone`, `members_fax`, `members_pic`, `members_payment_stat`, `members_payment_id`, `members_date`) VALUES
(1, 'KOA-20200616-59-001', 'Anseb', 'ali', 'anzz', 'Orthopediatrion ', 'FRCS', 'Ortho', 'Gov.medical college Thrissur', 'test@mail.com', '12345678', 'Kalladikkunnath house palappilly', 'Thrissur District', 'Thrissur', '680304', '97477386990', '', '1f4be706bd6af0e2677ca1edf5fec8e7.png', 'on', '', '2020-06-19'),
(3, 'KOA-20200618-40-002', 'Anseb', 'k', 'a', 'Orthopediatrion ', 'asdasd', 'asdasdas', 'dfgsdgsd', 'sdfsdfs', 'sfdfsdf', 'Kalladikkunnath house palappilly', 'Thrissur District', 'Thrissur', '680304', '9747738699', '2313123000', '6d356a75661e5726cddfc771353d0466.jpg', 'on', '', '2020-06-18'),
(4, 'KOA-20200618-36-004', 'Anseb', 'k', 'a', 'Orthopediatrion ', 'asdasd', 'Ortho', 'asdasd', 'testasdsa@mail.com', '12313123', 'Kalladikkunnath house palappilly', 'Thrissur District', 'Kottayam', '680304', '9747738699', '2313132', 'af1c6ae15db08fcc51f4322e92111bcd.png', 'on', '', '2020-06-18'),
(5, 'KOA-20200618-20-005', 'Anseb', 'k', 'a', 'asdasdas', 'asdasd', 'Ortho', 'asdas', 'test@sm1ail.com', 'asdasd2', 'Kalladikkunnath house palappilly', 'Thrissur District', 'Kasaragod', '680304', '9747738699', '23131322', 'd03cc2e50e3982a3171384878aa9acd5.jpg', 'off', '', '2020-06-18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
