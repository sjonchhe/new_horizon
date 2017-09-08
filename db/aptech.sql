-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2017 at 08:33 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aptech`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutandcontact`
--

CREATE TABLE `aboutandcontact` (
  `firstabout` text NOT NULL,
  `secondabout` text NOT NULL,
  `firstcontact` text NOT NULL,
  `secondcontact` text NOT NULL,
  `contactnumber` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutandcontact`
--

INSERT INTO `aboutandcontact` (`firstabout`, `secondabout`, `firstcontact`, `secondcontact`, `contactnumber`) VALUES
('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue dui', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue dui', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum adipiscing vestibulum sapien, in ultricies tellus dignissim eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', 'Praesent mollis dolor eros, vel facilisis nisi auctor ut. Cras id convallis ipsum. Mauris posuere, ligula ac sodales sollicitudin, risus sapien iaculis libero, ac molestie orci arcu non ante. Fusce est leo, ornare ut porta quis, dictum et mi. Aliquam vel pretium sem', '');

-- --------------------------------------------------------

--
-- Table structure for table `admindetails`
--

CREATE TABLE `admindetails` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindetails`
--

INSERT INTO `admindetails` (`id`, `name`, `contact`, `email`) VALUES
(1, 'abhash', '9843547062', 'abhash_dc99@outlook.com');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `name`, `contact`, `email`, `password`) VALUES
(1, 'abhash', '9843547062', 'abhash_dc99@outlook.com', '44'),
(2, 'abhashdc', 'abhashdc', 'abhashdc@a.com', 'abhashdc'),
(3, 'sjonchhe', '9849128762', 'sjonchhe@outlook.com', 'apple');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(250) NOT NULL,
  `cname` varchar(250) NOT NULL,
  `cemail` varchar(250) NOT NULL,
  `csubject` text NOT NULL,
  `cmessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `cname`, `cemail`, `csubject`, `cmessage`) VALUES
(1, 'ABhash', 'abhash', 'Intern', ' do you guys take in intern?');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` int(11) NOT NULL,
  `cname` varchar(250) NOT NULL,
  `cheader` varchar(250) NOT NULL,
  `clong` text NOT NULL,
  `cimagename` varchar(250) NOT NULL,
  `cimagepath` varchar(250) NOT NULL,
  `cstatus` int(10) NOT NULL,
  `counter` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `cname`, `cheader`, `clong`, `cimagename`, `cimagepath`, `cstatus`, `counter`) VALUES
(1, 'Android', 'This is android', 'This is androidThis is androidThis is androidThis is androidThis is androidThis is androidThis is android', 'popular2.jpg', '../gallery/course/popular2.jpg', 1, '3'),
(2, 'Another ANdroid', 'This is android', 'This is androidThis is androidThis is androidThis is androidThis is androidThis is androidThis is android', 'popular3.png', '../gallery/course/popular3.png', 1, '2'),
(3, 'Python', 'Python', 'Android', 'popular1.jpg', '../gallery/course/popular1.jpg', 1, '3');

-- --------------------------------------------------------

--
-- Table structure for table `happystudents`
--

CREATE TABLE `happystudents` (
  `hid` int(11) NOT NULL,
  `hname` varchar(250) NOT NULL,
  `hcomment` varchar(250) NOT NULL,
  `himagename` text NOT NULL,
  `himagepath` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `happystudents`
--

INSERT INTO `happystudents` (`hid`, `hname`, `hcomment`, `himagename`, `himagepath`) VALUES
(1, 'ABhashh', 'Awesome is aweosme ', 'pro.jpg', '../gallery/happy/pro.jpg'),
(2, 'Sandesh', 'khaudhyfoahdfa', 'pro1.jpg', '../gallery/happy/pro1.jpg'),
(3, 'Ching chang', 'khdfuihfadkjnbadskudbh', 'pic8.jpg', '../gallery/happy/pic8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menuid` int(250) NOT NULL,
  `first` varchar(250) NOT NULL,
  `second` varchar(250) NOT NULL,
  `third` varchar(250) NOT NULL,
  `fourth` varchar(250) NOT NULL,
  `firstaddress` varchar(250) NOT NULL,
  `secondaddress` varchar(250) NOT NULL,
  `thirdaddress` varchar(250) NOT NULL,
  `fourthaddress` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menuid`, `first`, `second`, `third`, `fourth`, `firstaddress`, `secondaddress`, `thirdaddress`, `fourthaddress`) VALUES
(1, 'HOME', 'ABOUT US', 'COURSES AND CERTIFICATION', 'CONTACT', 'index.php', 'about.php', 'courses.php', 'contact.php');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `pid` int(39) NOT NULL,
  `pageview` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`pid`, `pageview`) VALUES
(1, 996);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `sid` int(250) NOT NULL,
  `simagepath` varchar(250) NOT NULL,
  `simagename` varchar(250) NOT NULL,
  `sextension` varchar(250) NOT NULL,
  `sposition` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sid`, `simagepath`, `simagename`, `sextension`, `sposition`) VALUES
(10, '../gallery/slider/banner8.png', 'banner8.png', 'png', 1),
(11, '../gallery/slider/banner7.jpg', 'banner7.jpg', 'jpg', 2),
(12, '../gallery/slider/android.jpg', 'android.jpg', 'jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `startingtext`
--

CREATE TABLE `startingtext` (
  `id` int(10) NOT NULL,
  `header` text NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `startingtext`
--

INSERT INTO `startingtext` (`id`, `header`, `body`) VALUES
(1, 'WHY JOIN NEW HORIZON?', 'We have the most experienced teamavailable to us which is capable of alot of thing. We have our successful students working in many kind of web development activities and teaching.');

-- --------------------------------------------------------

--
-- Table structure for table `teacherdetails`
--

CREATE TABLE `teacherdetails` (
  `tid` varchar(250) NOT NULL,
  `tfname` varchar(250) NOT NULL,
  `tlname` varchar(250) NOT NULL,
  `tcourse` varchar(250) NOT NULL,
  `timagepath` varchar(250) NOT NULL,
  `timage` varchar(250) NOT NULL,
  `tlastlogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `teacherdetails`
--

INSERT INTO `teacherdetails` (`tid`, `tfname`, `tlname`, `tcourse`, `timagepath`, `timage`, `tlastlogin`) VALUES
('1', 'Abhash', 'DC', 'Java', '../gallery/teacher/pro.jpg', 'pro.jpg', '0000-00-00 00:00:00'),
('2', 'Sandesh', 'Pandit', 'Python', '../gallery/teacher/pro1.jpg', 'pro1.jpg', '0000-00-00 00:00:00'),
('3', 'Park', 'jung', 'Android', '../gallery/teacher/pic5.jpg', 'pic5.jpg', '2017-06-21 04:19:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindetails`
--
ALTER TABLE `admindetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `happystudents`
--
ALTER TABLE `happystudents`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menuid`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `startingtext`
--
ALTER TABLE `startingtext`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacherdetails`
--
ALTER TABLE `teacherdetails`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `sid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `startingtext`
--
ALTER TABLE `startingtext`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
