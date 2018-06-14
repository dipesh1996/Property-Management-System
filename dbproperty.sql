-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 09, 2015 at 07:59 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbproperty`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblarea`
--

CREATE TABLE IF NOT EXISTS `tblarea` (
  `areaid` int(10) NOT NULL AUTO_INCREMENT,
  `areaname` varchar(50) NOT NULL,
  `cityid` int(10) NOT NULL,
  PRIMARY KEY (`areaid`),
  KEY `cityid` (`cityid`),
  KEY `cityid_2` (`cityid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tblarea`
--

INSERT INTO `tblarea` (`areaid`, `areaname`, `cityid`) VALUES
(6, 'bapunagar', 5),
(5, 'Nikol', 6),
(8, 'Panchvati', 2),
(9, 'Vastrapur', 1),
(11, 'Vastrapur', 2),
(12, 'bapunagar', 2),
(13, 'bapunagar', 2),
(14, 'Nikol', 2),
(18, 'bapunagar', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblbroker`
--

CREATE TABLE IF NOT EXISTS `tblbroker` (
  `brokerid` int(4) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `areaid` int(4) NOT NULL,
  `cityid` int(4) NOT NULL,
  `stateid` int(4) NOT NULL,
  `pincode` decimal(6,0) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` decimal(10,0) NOT NULL,
  `fax` decimal(11,0) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `loginid` int(4) NOT NULL,
  PRIMARY KEY (`brokerid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `tblbroker`
--

INSERT INTO `tblbroker` (`brokerid`, `firstname`, `lastname`, `address`, `areaid`, `cityid`, `stateid`, `pincode`, `email`, `mobile`, `fax`, `gender`, `loginid`) VALUES
(12, 'dipesh', 'patel', 'navjivan hospital', 1, 4, 1, '384265', 'dipeshrafalia@gmail.com', '7878343487', '12', 'male', 0),
(11, 'Imran', 'Khan', 'navjivan hospital', 1, 4, 1, '384265', 'imrankhan@gmail.com', '7802078220', '12', '', 0),
(13, 'chintal', 'patel', 'navjivan hospital', 1, 4, 1, '384265', 'chintal3838@gmail.com', '7802078220', '12345', 'male', 0),
(14, 'manthan', 'patel', 'navjivan', 1, 2, 1, '383705', 'manthan78@gmail.com', '7600431124', '123', 'male', 0),
(15, 'chintu1', 'patel1', 'navjivan', 4, 4, 1, '384265', 'chintu8383@gmail.com', '2147483647', '78787878', '', 24),
(16, 'soni', 'hardik', 'vastrapur', 4, 2, 2, '382702', 'hgranpura@gmail.com', '7600431124', '12345', 'male', 19),
(18, 'hardik', 'ranpura', 'vastrapur', 3, 4, 1, '384265', 'hgranpura@gmail.com', '9601777369', '23568965', 'male', 29),
(19, 'chirag', 'patel', 'baroda', 4, 1, 1, '323050', 'cvr@gmail.com', '7777777777', '5568687', 'male', 33),
(20, 'cvr', 'patel', 'ahmedabad', 3, 1, 7, '797809', 'cvr@gmail.com', '7687857475', '446547', 'male', 33),
(21, 'piyu', 'patel', 'ahmedabad', 4, 2, 1, '382350', 'pp@gmail.com', '760065377', '5568687', 'female', 34);

-- --------------------------------------------------------

--
-- Table structure for table `tblbuilder`
--

CREATE TABLE IF NOT EXISTS `tblbuilder` (
  `builderid` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `areaid` int(4) NOT NULL,
  `cityid` int(4) NOT NULL,
  `stateid` int(4) NOT NULL,
  `pincode` decimal(6,0) NOT NULL,
  `fax` decimal(11,0) NOT NULL,
  `mobile` decimal(10,0) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `loginid` int(4) NOT NULL,
  PRIMARY KEY (`builderid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tblbuilder`
--

INSERT INTO `tblbuilder` (`builderid`, `username`, `firstname`, `lastname`, `address`, `areaid`, `cityid`, `stateid`, `pincode`, `fax`, `mobile`, `email`, `website`, `loginid`) VALUES
(1, 'chintu8383', 'Gopinath', 'Builders', 'a-123', 14, 2, 1, '646464', '221501', '987615222', 'demo@gmail.com', 'chiab@13.com', 24),
(2, 'maulik8273', 'maulik', 'patel', 'krishnanagar', 1, 4, 1, '384265', '1334', '7802078220', 'maulikpatel1112@yahoo.com', 'maulik.in.com', 21),
(3, 'manthan12', 'manthan', 'patel', 'krishnanagar', 1, 2, 1, '384265', '12345', '7802078220', 'manthan78@gmail.com', 'maulik.in.com', 22),
(4, 'manthan12', 'manthan', 'patel', 'krishnanagar', 1, 4, 1, '384265', '12345', '7802078220', 'manthan78@gmail.com', 'maulik.in.com', 23),
(11, 'y', 'y', 'y', 'y', 8, 2, 3, '980890', '9087778', '9925542536', 'u@gmail.com', 'http://www.sdsdq.com', 111),
(10, 'test1', 'test', 'patel', 'sdsdf', 5, 2, 1, '382350', '221501', '9876543210', 'WDS2@fgnm.cm', 'http:/cvr.com', 107);

-- --------------------------------------------------------

--
-- Table structure for table `tblbuyer`
--

CREATE TABLE IF NOT EXISTS `tblbuyer` (
  `buyerid` int(4) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `areaid` int(4) NOT NULL,
  `cityid` int(4) NOT NULL,
  `stateid` int(4) NOT NULL,
  `pincode` decimal(6,0) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` decimal(10,0) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `loginid` int(4) NOT NULL,
  PRIMARY KEY (`buyerid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tblbuyer`
--

INSERT INTO `tblbuyer` (`buyerid`, `firstname`, `lastname`, `address`, `areaid`, `cityid`, `stateid`, `pincode`, `email`, `mobile`, `gender`, `loginid`) VALUES
(2, 'piyu', 'patel', 'naroda', 9, 0, 8, '67679', 'piyu@gmail.com', '4335435434', 'female', 31);

-- --------------------------------------------------------

--
-- Table structure for table `tblcity`
--

CREATE TABLE IF NOT EXISTS `tblcity` (
  `cityid` int(4) NOT NULL AUTO_INCREMENT,
  `cityname` varchar(50) NOT NULL,
  `stateid` int(4) NOT NULL,
  PRIMARY KEY (`cityid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tblcity`
--

INSERT INTO `tblcity` (`cityid`, `cityname`, `stateid`) VALUES
(1, 'Baroda', 1),
(2, 'ahmedabad', 1),
(5, 'Kalol', 1),
(7, 'Patan', 1),
(6, 'Surat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblinquiry`
--

CREATE TABLE IF NOT EXISTS `tblinquiry` (
  `inquiryid` int(4) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` decimal(10,0) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`inquiryid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbllogin`
--

CREATE TABLE IF NOT EXISTS `tbllogin` (
  `loginid` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `securityquestion` varchar(200) NOT NULL,
  `securityanswer` varchar(100) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  PRIMARY KEY (`loginid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112 ;

--
-- Dumping data for table `tbllogin`
--

INSERT INTO `tbllogin` (`loginid`, `username`, `password`, `securityquestion`, `securityanswer`, `usertype`) VALUES
(25, 'broker', 'broker', 'how r u', 'fine', 'broker'),
(24, 'builder', 'builder', 'b', 'b', 'builder'),
(23, 'maulik827', '12345', 'how r u', 'fine', 'builder'),
(22, 'seller', 'seller', '', '', 'seller'),
(19, 'soni', 'soni', 'how r u', 'fine', 'broker'),
(29, 'hardik', 'hardik', 'how r u?', 'fine', 'broker'),
(30, 'admin', 'admin', 'how r u', 'fine', 'admin'),
(31, 'buyer', 'buyer', 'piyu', 'piyu', 'buyer'),
(111, 'y', 'y', 'y', 'y', 'builder');

-- --------------------------------------------------------

--
-- Table structure for table `tblproject`
--

CREATE TABLE IF NOT EXISTS `tblproject` (
  `projectid` int(4) NOT NULL AUTO_INCREMENT,
  `projecttitle` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `projectimage` varchar(100) NOT NULL,
  `projectdescription` varchar(1000) NOT NULL,
  `loginid` int(4) NOT NULL,
  PRIMARY KEY (`projectid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tblproject`
--

INSERT INTO `tblproject` (`projectid`, `projecttitle`, `address`, `projectimage`, `projectdescription`, `loginid`) VALUES
(1, 'Balkeswar Avenue', 'Vastrapur', '1.jpg', 'Good Location', 0),
(2, 'Balkeswar Avenue', 'Vastrapur', '2.jpg', 'Good Location', 0),
(3, 'Balkeswar Avenue', 'Vastrapur', 'article-0-0E583F4100000578-106_634x419.jpg', 'Good Location', 0),
(4, 'Balkeswar Avenue', 'Vastrapur', '3.jpg', 'Good Location', 0),
(5, 'madhav Avenue', 'Nikol', 'beautiful-property.jpg', 'Good Location and House', 24),
(7, 'galaxy height', 'ahmedabad', 'images.jpg', 'good location', 24),
(11, 'Sukan Heights', 'ahmedabad', 'download1.jpg', 'awesome home..with swimming pool', 24);

-- --------------------------------------------------------

--
-- Table structure for table `tblproperty`
--

CREATE TABLE IF NOT EXISTS `tblproperty` (
  `propertyid` int(4) NOT NULL AUTO_INCREMENT,
  `propertyfor` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `areaid` int(4) NOT NULL,
  `pincode` int(6) NOT NULL,
  `loginid` int(4) NOT NULL,
  `postdate` date NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `plotarea` decimal(10,0) NOT NULL,
  `carpetarea` decimal(10,0) NOT NULL,
  `builduparea` decimal(10,0) NOT NULL,
  `typeid` decimal(4,0) NOT NULL,
  `furniture` varchar(100) NOT NULL,
  `totalbedroom` int(4) NOT NULL,
  `totalbathroom` int(4) NOT NULL,
  `images` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`propertyid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tblproperty`
--

INSERT INTO `tblproperty` (`propertyid`, `propertyfor`, `address`, `areaid`, `pincode`, `loginid`, `postdate`, `price`, `plotarea`, `carpetarea`, `builduparea`, `typeid`, `furniture`, `totalbedroom`, `totalbathroom`, `images`, `status`) VALUES
(23, 'Rent', 'ahmedabad', 14, 646464, 25, '2015-03-27', '500000', '3000', '3000', '2000', '2', '0', 4, 4, 'goa-villa.jpg', 'confirm'),
(20, 'Rent', 'ahmedabad', 11, 382350, 25, '2015-03-16', '200000', '4500', '3500', '6000', '8', '0', 3, 3, 'goan house.JPG', 'confirm');

-- --------------------------------------------------------

--
-- Table structure for table `tblpropertyimage`
--

CREATE TABLE IF NOT EXISTS `tblpropertyimage` (
  `imageid` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `propertyid` int(4) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`imageid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblpropertyrequirement`
--

CREATE TABLE IF NOT EXISTS `tblpropertyrequirement` (
  `requirementid` int(4) NOT NULL AUTO_INCREMENT,
  `postdate` date NOT NULL,
  `loginid` int(4) NOT NULL,
  `minimumarea` decimal(10,0) NOT NULL,
  `maximumarea` decimal(10,0) NOT NULL,
  `minimumprice` decimal(10,0) NOT NULL,
  `maximumprice` decimal(10,0) NOT NULL,
  `furniture` varchar(500) NOT NULL,
  `requirementfor` varchar(50) NOT NULL,
  `typeid` int(4) NOT NULL,
  `totalbedroom` int(4) NOT NULL,
  `totalbathroom` int(4) NOT NULL,
  PRIMARY KEY (`requirementid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tblpropertyrequirement`
--

INSERT INTO `tblpropertyrequirement` (`requirementid`, `postdate`, `loginid`, `minimumarea`, `maximumarea`, `minimumprice`, `maximumprice`, `furniture`, `requirementfor`, `typeid`, `totalbedroom`, `totalbathroom`) VALUES
(7, '2015-03-16', 31, '3000', '2000', '250000', '300000', 'yes', 'buy', 3, 3, 3),
(5, '2015-03-12', 25, '8000', '2000000', '3000000', '300000', 'yes', 'Rent', 1, 5, 4),
(6, '2015-03-12', 31, '2000', '3000', '250000', '300000', 'yes', 'Rent', 1, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tblpropertytype`
--

CREATE TABLE IF NOT EXISTS `tblpropertytype` (
  `propertytypeid` int(4) NOT NULL AUTO_INCREMENT,
  `propertytypename` varchar(50) NOT NULL,
  PRIMARY KEY (`propertytypeid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tblpropertytype`
--

INSERT INTO `tblpropertytype` (`propertytypeid`, `propertytypename`) VALUES
(2, 'Tenament'),
(3, 'Bungalow');

-- --------------------------------------------------------

--
-- Table structure for table `tblscheme`
--

CREATE TABLE IF NOT EXISTS `tblscheme` (
  `schemeid` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `facilities` varchar(500) NOT NULL,
  `images` varchar(100) NOT NULL,
  `brochure` varchar(100) NOT NULL,
  `schemepackageid` int(4) NOT NULL,
  `builderid` int(4) NOT NULL,
  PRIMARY KEY (`schemeid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblschemeimage`
--

CREATE TABLE IF NOT EXISTS `tblschemeimage` (
  `imageid` int(4) NOT NULL AUTO_INCREMENT,
  `schemeid` int(4) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`imageid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblschemepackage`
--

CREATE TABLE IF NOT EXISTS `tblschemepackage` (
  `schemepackageid` int(4) NOT NULL AUTO_INCREMENT,
  `packagetitle` varchar(50) NOT NULL,
  `totalmonth` int(4) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  PRIMARY KEY (`schemepackageid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblseller`
--

CREATE TABLE IF NOT EXISTS `tblseller` (
  `sellerid` int(4) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `areaid` int(4) NOT NULL,
  `cityid` int(4) NOT NULL,
  `stateid` int(4) NOT NULL,
  `pincode` decimal(6,0) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` decimal(10,0) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `loginid` int(4) NOT NULL,
  PRIMARY KEY (`sellerid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tblseller`
--

INSERT INTO `tblseller` (`sellerid`, `firstname`, `lastname`, `address`, `areaid`, `cityid`, `stateid`, `pincode`, `email`, `mobile`, `gender`, `loginid`) VALUES
(2, 'ankit', 'nai', 'vastrapur', 3, 4, 1, '384265', 'chintal3838@gmail.com', '7802078220', 'male', 22),
(3, 'piyu', 'patel', 'ahmedabad', 3, 2, 1, '382350', 'rafaliyapiyu25@gmail.com', '9876543210', 'female', 33);

-- --------------------------------------------------------

--
-- Table structure for table `tblstate`
--

CREATE TABLE IF NOT EXISTS `tblstate` (
  `stateid` int(4) NOT NULL AUTO_INCREMENT,
  `statename` varchar(30) NOT NULL,
  PRIMARY KEY (`stateid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tblstate`
--

INSERT INTO `tblstate` (`stateid`, `statename`) VALUES
(1, 'Gujarat'),
(2, 'Rajastan'),
(3, 'Goa'),
(6, 'Kerala'),
(7, 'Punjab'),
(8, 'Maharashtra'),
(9, 'UP');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
