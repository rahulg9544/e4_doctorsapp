-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2020 at 11:53 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koa`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(40) NOT NULL,
  `about_title` varchar(40) NOT NULL,
  `about_description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `contact` (
  `contact_id` int(40) NOT NULL,
  `contact_mail1` varchar(40) NOT NULL,
  `contact_mail2` varchar(40) NOT NULL,
  `contact_phone1` varchar(40) NOT NULL,
  `contact_phone2` varchar(40) NOT NULL,
  `contact_locationsrc` varchar(40) NOT NULL,
  `contact_address` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_mail1`, `contact_mail2`, `contact_phone1`, `contact_phone2`, `contact_locationsrc`, `contact_address`) VALUES
(1, 'g@h.in', 'e@g.com', '345455', '5464546', 'fdgf', 'fdghcgfhghkl'),
(2, 'bg@e.in', 'h@w.in', '43533434', '34343', 'dfgdfhfgh', 'fgfgbvbv');

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `discussion_id` int(10) NOT NULL,
  `discussion_name` varchar(100) NOT NULL,
  `discussion_topic` text NOT NULL,
  `discussion_by` varchar(100) NOT NULL,
  `discussion_status` int(10) NOT NULL,
  `discussion_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`discussion_id`, `discussion_name`, `discussion_topic`, `discussion_by`, `discussion_status`, `discussion_datetime`) VALUES
(1, 'Tes name123', 'Test Discussion topic123', 'admin', 1, '2020-06-20 02:23:55');

-- --------------------------------------------------------

--
-- Table structure for table `disc_comment`
--

CREATE TABLE `disc_comment` (
  `disc_comment_id` int(10) NOT NULL,
  `disc_comment_content` text NOT NULL,
  `disc_comment_user` int(10) NOT NULL,
  `disc_comment_topic` int(10) NOT NULL,
  `disc_comment_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(40) NOT NULL,
  `event_title` varchar(50) NOT NULL,
  `event_description` varchar(10000) NOT NULL,
  `event_venue` varchar(40) NOT NULL,
  `event_date` date NOT NULL,
  `event_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `members` (
  `members_id` int(10) NOT NULL,
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
  `members_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`members_id`, `members_regno`, `members_fname`, `members_mname`, `members_lname`, `members_speciality`, `members_qualify`, `members_dep`, `members_inst`, `members_mail`, `members_password`, `members_street`, `members_city`, `members_dist`, `members_pin`, `members_phone`, `members_fax`, `members_pic`, `members_payment_stat`, `members_payment_id`, `members_date`) VALUES
(1, 'KOA-20200616-59-001', 'Anseb', 'ali', 'anzz', 'Orthopediatrion ', 'FRCS', 'Ortho', 'Gov.medical college Thrissur', 'test@mail.com', '12345678', 'Kalladikkunnath house palappilly', 'Thrissur District', 'Thrissur', '680304', '9747738699', '', '1f4be706bd6af0e2677ca1edf5fec8e7.png', 'on', '', '2020-06-17'),
(3, 'KOA-20200618-40-002', 'Anseb', 'k', 'a', 'Orthopediatrion ', 'asdasd', 'asdasdas', 'dfgsdgsd', 'sdfsdfs', 'sfdfsdf', 'Kalladikkunnath house palappilly', 'Thrissur District', 'Thrissur', '680304', '9747738699', '2313123000', '6d356a75661e5726cddfc771353d0466.jpg', 'on', '', '2020-06-18'),
(4, 'KOA-20200618-36-004', 'Anseb', 'k', 'a', 'Orthopediatrion ', 'asdasd', 'Ortho', 'asdasd', 'testasdsa@mail.com', '12313123', 'Kalladikkunnath house palappilly', 'Thrissur District', 'Kottayam', '680304', '9747738699', '2313132', 'af1c6ae15db08fcc51f4322e92111bcd.png', 'on', '', '2020-06-18'),
(5, 'KOA-20200618-20-005', 'Anseb', 'k', 'a', 'asdasdas', 'asdasd', 'Ortho', 'asdas', 'test@sm1ail.com', 'asdasd2', 'Kalladikkunnath house palappilly', 'Thrissur District', 'Kasaragod', '680304', '9747738699', '23131322', 'd03cc2e50e3982a3171384878aa9acd5.jpg', 'off', '', '2020-06-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`discussion_id`);

--
-- Indexes for table `disc_comment`
--
ALTER TABLE `disc_comment`
  ADD PRIMARY KEY (`disc_comment_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`members_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `discussion_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `disc_comment`
--
ALTER TABLE `disc_comment`
  MODIFY `disc_comment_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `members_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
