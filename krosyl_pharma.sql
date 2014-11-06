-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2014 at 09:36 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `krosyl_pharma`
--

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `system_type` varchar(255) NOT NULL,
  `system_key` varchar(255) NOT NULL,
  `system_value` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `system_type`, `system_key`, `system_value`, `timestamp`) VALUES
(1, 'kp_contact', 'google_address', 'http://regiohelden.de/google-maps/map_en.php?hl=en&amp;q=vadodara%20india+(RegioHelden%20GmbH)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=A&amp;output=embed', '2014-11-05 19:28:09'),
(2, 'kp_contact', 'address', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not ', '2014-11-05 19:29:35'),
(3, 'kp_contact', 'mail_1', 'info@rootitsolutions.com', '2014-11-05 19:30:41'),
(4, 'kp_contact', 'mail_2', 'info@rootitsolutions.com', '2014-11-05 19:31:03'),
(5, 'kp_contact', 'mail_3', 'info@rootitsolutions.com', '2014-11-05 19:31:21'),
(6, 'kp_contact', 'mail_4', 'info@rootitsolutions.com', '2014-11-05 19:31:42'),
(7, 'kp_contact', 'mail_5', 'info@rootitsolutions.com', '2014-11-05 19:31:42'),
(8, 'kp_contact', 'landline', '02651234567', '2014-11-05 19:31:42'),
(9, 'kp_contact', 'mobile_1', '1234567890', '2014-11-05 19:31:42'),
(10, 'kp_contact', 'mobile_2', '1234567890', '2014-11-05 19:31:42'),
(11, 'kp_contact', 'fax', '1234567890', '2014-11-05 19:31:42'),
(13, 'ct_contact', 'address', 'Printing and typesetting', '2014-11-05 19:29:35'),
(14, 'ct_contact', 'mail_1', 'info@rootitsolutions.com', '2014-11-05 19:30:41'),
(15, 'ct_contact', 'mobile_1', '1234567890', '2014-11-05 19:31:42'),
(16, 'ct_contact', 'mobile_2', '1234567890', '2014-11-05 19:31:42');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slidertitle` varchar(255) DEFAULT NULL,
  `slidertext` varchar(255) DEFAULT NULL,
  `sliderimage` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slidertitle`, `slidertext`, `sliderimage`, `timestamp`) VALUES
(4, 'slider2', 'slider2', '2404523dbd6e541d09e275f93c5bfc7e.jpg', '2014-11-05 18:31:11'),
(5, 'slider3', 'slider3', '2f56dfa4d863c958340c83a2524940f4.png', '2014-11-05 18:46:03'),
(6, 'slider4', 'slider4', 'f20bcc3bb23f315be720490e16490bfb.jpg', '2014-11-05 18:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` enum('A','U') NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `password`, `fullname`, `email`, `timestamp`) VALUES
(1, 'A', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Krosyl Pharma', 'info@rootitsolutions.com', '2014-11-05 17:01:04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
