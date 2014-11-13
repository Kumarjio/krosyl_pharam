-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2014 at 09:17 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

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
-- Table structure for table `blocks`
--

CREATE TABLE IF NOT EXISTS `blocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`id`, `title`, `image`, `description`, `timestamp`) VALUES
(4, 'product 1', '01d13b4f40cbbe2a0cc5978f72f22363.jpg', 'product 1', '2014-11-06 12:36:17'),
(5, 'product 2', '908f1eb8049e1519d5b4e2ab6795b01d.jpg', '<p><br></p>', '2014-11-13 16:16:08'),
(6, 'product 3', 'f16da14655c6679b38077364e931200e.jpg', '<p><br></p>', '2014-11-13 16:16:29');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `timestamp`) VALUES
(1, 'Antibiotics', NULL, '2014-11-06 18:22:37'),
(2, 'Analgesics', NULL, '2014-11-06 18:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE IF NOT EXISTS `certificates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `certificatetitle` varchar(255) NOT NULL,
  `certificateimage` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `certificatetitle`, `certificateimage`, `timestamp`) VALUES
(1, 'certificate 1', '9cf4f02fc40aa9c5ba86c27a68203762.jpg', '2014-11-13 17:22:44'),
(2, 'certificate 1', '9cf4f02fc40aa9c5ba86c27a68203762.jpg', '2014-11-13 17:22:44'),
(3, 'certificate 1', '9cf4f02fc40aa9c5ba86c27a68203762.jpg', '2014-11-13 17:22:44'),
(4, 'certificate 1', '9cf4f02fc40aa9c5ba86c27a68203762.jpg', '2014-11-13 17:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `type`, `title`, `image`, `description`, `timestamp`) VALUES
(1, 'about_us', 'About Us', '5a94e14ad6fa8cfb9c7cdedc9d41ac6e.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2014-11-06 11:13:44'),
(2, 'our_vision', 'Our Vision', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2014-11-06 11:13:44'),
(3, 'our_mission', 'Our Mission', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2014-11-06 11:13:44');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `market` char(5) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `generic_name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `market`, `brand_name`, `generic_name`, `image`, `description`, `timestamp`) VALUES
(1, 2, 'D,I', 'Metsul 1', 'MetFromin 500 / 800 / 1000 mg', '8b151a35cb57aa035dd605370a275fc1.jpg', '<p style="margin-bottom: 14px; padding: 0px;"><span style="line-height: 1.428571429;">Nam ullamcorper diam et laoreet auctor. Vestibulum sapien tortor, auctor tincidunt posuere nec, interdum mollis lorem. Vestibulum vulputate lorem lacinia dolor pharetra molestie a id nisi. Aliquam odio nisl, commodo a purus non, accumsan aliquam eros. Nullam eget mattis quam. Praesent venenatis metus vestibulum tellus efficitur, sagittis ultricies lectus vulputate. Maecenas ornare sit amet erat eu convallis. In efficitur tempus dignissim. Nulla facilisi. Vivamus eros velit, tincidunt id posuere ac, lobortis vel libero. Fusce bibendum nisi vel sapien efficitur, ut sagittis nisi hendrerit. In luctus augue sed nisl facilisis, non ornare ipsum ornare. Proin pulvinar, nulla vel euismod accumsan, turpis odio gravida nulla, at pretium quam mauris vitae turpis. Phasellus sem ligula, fringilla quis mauris et, tincidunt fringilla justo. Aenean lacus arcu, mattis ultricies convallis et, gravida sed magna.</span><br></p><p style="margin-bottom: 14px; padding: 0px;">Aenean ut nibh non augue consequat rutrum at at sapien. Duis non orci purus. Proin vulputate ac odio sit amet varius. Duis rutrum tempor neque venenatis vestibulum. Integer ac pharetra tortor, ut lacinia urna. Sed magna nibh, placerat eget interdum vel, aliquam consectetur massa. Quisque volutpat dui diam, eu euismod ligula efficitur sed. Proin non ultrices quam. Cras aliquet ultricies metus, at commodo magna.</p><p style="margin-bottom: 14px; padding: 0px;">Praesent ornare feugiat nunc a semper. Phasellus tempor lacus quis ipsum rutrum gravida. Sed id urna eu mi sagittis sollicitudin sit amet vel turpis. Suspendisse interdum est et ligula bibendum suscipit. In aliquet, ante id varius tincidunt, diam nunc fringilla purus, ac sagittis nulla ex eu orci. Sed eros dolor, venenatis id dolor vel, suscipit viverra lacus. In hac habitasse platea dictumst. Donec a aliquet mi. Phasellus sagittis orci nec turpis facilisis varius. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin eget purus sed odio dignissim luctus in vitae risus. Sed nisi libero, efficitur non mauris ut, congue tempor lacus.</p><p style="margin-bottom: 14px; padding: 0px;">Phasellus rutrum dui ut urna pharetra, sed aliquam nunc vehicula. Aenean id turpis a nisi accumsan fermentum et vel lectus. Sed eget facilisis metus. Nunc porta nunc vitae lorem porta gravida. Mauris tincidunt faucibus pulvinar. Proin dignissim diam pellentesque nibh placerat varius. Vivamus lacinia nunc et metus volutpat, et luctus magna lobortis.</p>', '2014-11-06 18:23:45'),
(2, 2, 'D,I', 'Vogsul', 'Voglibase', 'e2ac5ca90fcc3bef98b179060b370a81.png', '<p style="margin-bottom: 14px; padding: 0px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec dui justo. Maecenas faucibus, est a ultricies tincidunt, erat augue maximus risus, in dignissim ex lacus vel est. Proin at enim vel ipsum tempor pellentesque vel ut metus. Donec tempor augue pharetra, malesuada libero facilisis, bibendum dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec risus dolor, condimentum id erat quis, porta eleifend est. Integer vitae nisl in felis finibus efficitur. Nullam eleifend lorem a ligula rhoncus, at sollicitudin odio volutpat. Quisque a est ut nunc interdum pretium. Cras id lobortis orci. Donec at mauris non velit consequat imperdiet et in eros. Pellentesque quis tempus quam, elementum facilisis turpis. Pellentesque ac mauris turpis.</p><p style="margin-bottom: 14px; padding: 0px;">Nam ullamcorper diam et laoreet auctor. Vestibulum sapien tortor, auctor tincidunt posuere nec, interdum mollis lorem. Vestibulum vulputate lorem lacinia dolor pharetra molestie a id nisi. Aliquam odio nisl, commodo a purus non, accumsan aliquam eros. Nullam eget mattis quam. Praesent venenatis metus vestibulum tellus efficitur, sagittis ultricies lectus vulputate. Maecenas ornare sit amet erat eu convallis. In efficitur tempus dignissim. Nulla facilisi. Vivamus eros velit, tincidunt id posuere ac, lobortis vel libero. Fusce bibendum nisi vel sapien efficitur, ut sagittis nisi hendrerit. In luctus augue sed nisl facilisis, non ornare ipsum ornare. Proin pulvinar, nulla vel euismod accumsan, turpis odio gravida nulla, at pretium quam mauris vitae turpis. Phasellus sem ligula, fringilla quis mauris et, tincidunt fringilla justo. Aenean lacus arcu, mattis ultricies convallis et, gravida sed magna.</p><p style="margin-bottom: 14px; padding: 0px;">Aenean ut nibh non augue consequat rutrum at at sapien. Duis non orci purus. Proin vulputate ac odio sit amet varius. Duis rutrum tempor neque venenatis vestibulum. Integer ac pharetra tortor, ut lacinia urna. Sed magna nibh, placerat eget interdum vel, aliquam consectetur massa. Quisque volutpat dui diam, eu euismod ligula efficitur sed. Proin non ultrices quam. Cras aliquet ultricies metus, at commodo magna.</p><p style="margin-bottom: 14px; padding: 0px;">Praesent ornare feugiat nunc a semper. Phasellus tempor lacus quis ipsum rutrum gravida. Sed id urna eu mi sagittis sollicitudin sit amet vel turpis. Suspendisse interdum est et ligula bibendum suscipit. In aliquet, ante id varius tincidunt, diam nunc fringilla purus, ac sagittis nulla ex eu orci. Sed eros dolor, venenatis id dolor vel, suscipit viverra lacus. In hac habitasse platea dictumst. Donec a aliquet mi. Phasellus sagittis orci nec turpis facilisis varius. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin eget purus sed odio dignissim luctus in vitae risus. Sed nisi libero, efficitur non mauris ut, congue tempor lacus.</p><p style="margin-bottom: 14px; padding: 0px;">Phasellus rutrum dui ut urna pharetra, sed aliquam nunc vehicula. Aenean id turpis a nisi accumsan fermentum et vel lectus. Sed eget facilisis metus. Nunc porta nunc vitae lorem porta gravida. Mauris tincidunt faucibus pulvinar. Proin dignissim diam pellentesque nibh placerat varius. Vivamus lacinia nunc et metus volutpat, et luctus magna lobortis.</p>', '2014-11-06 18:39:03');

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
(1, 'kp_contact', 'google_address', 'http://regiohelden.de/google-maps/map_en.php?hl=en&q=vadodara%20india+(RegioHelden%20GmbH)&ie=UTF8&t=&z=14&iwloc=A&output=embed', '2014-11-05 19:28:09'),
(2, 'kp_contact', 'address', '9, Vrundan colony,<br />\r\n001-Rajeshwar apartment,<br />\r\nopp. Aishwarya apartment,<br />\r\nEllora park, Vadodara<br />\r\n390-007', '2014-11-05 19:29:35'),
(3, 'kp_contact', 'mail_1', 'info@rootitsolutions.com', '2014-11-05 19:30:41'),
(4, 'kp_contact', 'mail_2', 'info@rootitsolutions.com', '2014-11-05 19:31:03'),
(5, 'kp_contact', 'mail_3', 'info@rootitsolutions.com', '2014-11-05 19:31:21'),
(6, 'kp_contact', 'mail_4', 'info@rootitsolutions.com', '2014-11-05 19:31:42'),
(7, 'kp_contact', 'mail_5', 'info@rootitsolutions.com', '2014-11-05 19:31:42'),
(8, 'kp_contact', 'landline', '02651234567', '2014-11-05 19:31:42'),
(9, 'kp_contact', 'mobile_1', '1234567890', '2014-11-05 19:31:42'),
(10, 'kp_contact', 'mobile_2', '1234567890', '2014-11-05 19:31:42'),
(11, 'kp_contact', 'fax', '1234567890', '2014-11-05 19:31:42'),
(13, 'ct_contact', 'address', '9, Vrundan colony,<br />\r\n001-Rajeshwar apartment,<br />\r\nopp. Aishwarya apartment,<br />\r\nEllora park, Vadodara<br />\r\n390-007', '2014-11-05 19:29:35'),
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
