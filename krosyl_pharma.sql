-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 15, 2014 at 05:19 PM
-- Server version: 5.1.61-rel13.2-log
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rootigfk_krosyl_pharma`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`id`, `title`, `image`, `description`, `timestamp`) VALUES
(5, 'Our Vision', 'c9d647475bd5deb9cd981d8269cfb5e2.jpg', '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec laoreet id nibh a blandit. Nullam felis risus, elementum aliquam diam a, finibus scelerisque justo. Cras sit amet mollis elit. Sed pulvinar nisl varius urna gravida pulvinar. Mauris non purus pellentesque, molestie libero et, pellentesque libero. Nullam hendrerit nec urna in pulvinar. Nam nec orci finibus, placerat ante in, consectetur dui. Aliquam metus lorem, aliquam viverra molestie at, bibendum eget odio. Phasellus rhoncus scelerisque metus, a venenatis metus placerat nec.</span><br></p>', '2014-11-07 20:07:24'),
(6, 'We Promise You', '59d4f930ae85e3a21796bb519a55acbe.jpg', '<p><span style="text-align: justify;">Ut eu justo eu lectus efficitur posuere at sit amet velit. Nunc eu quam in augue dignissim vehicula. Sed dictum nisl sit amet dui vulputate, at pretium erat gravida. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus sollicitudin mollis ornare. Cras aliquam gravida risus, sed ornare nisi vehicula at. Vestibulum in risus id arcu efficitur posuere ut vitae ligula. Proin erat augue, sagittis id vehicula ut, tincidunt eu lorem. Phasellus at ipsum nec tortor molestie tincidunt semper eget libero.</span><br></p>', '2014-11-07 20:08:56'),
(7, 'Innovation', '8b07561635ed6d0036c1e2c623aad113.jpg', '<p><span style="text-align: justify;">Nunc dapibus, nulla vestibulum suscipit faucibus, libero ex varius est, sed rhoncus enim massa at dui. Curabitur nunc enim, tempus in interdum in, commodo et eros. Proin ornare nulla in odio laoreet congue. Quisque ut commodo mauris. Donec consequat molestie justo. Sed quis accumsan ligula. Maecenas elementum ante sit amet sem sodales pulvinar. Etiam facilisis nibh eget tristique vehicula. Phasellus hendrerit tellus vel porttitor sollicitudin. Cras sed mi vel lorem mollis tincidunt eu consectetur nunc. Donec ut metus lacinia, elementum lacus quis, vehicula orci. Aenean posuere tellus id purus posuere convallis. Aenean ut egestas est. Sed lacinia, neque non feugiat aliquet, dolor diam tincidunt risus, eget tempus ipsum neque a felis. Donec porttitor nisi arcu, non condimentum metus sagittis ut.</span><br></p>', '2014-11-07 20:09:39');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `description`, `timestamp`) VALUES
(1, 'Antibiotics', NULL, NULL, '2014-11-06 18:22:37'),
(2, 'Analgesics', NULL, NULL, '2014-11-06 18:22:45'),
(3, 'Cardiovascular Drugs', NULL, '<p><br></p>', '2014-11-08 17:30:13'),
(4, 'Antidiabetic Drugs', NULL, '', '2014-11-08 17:31:18'),
(5, 'Central Nervous System Drugs', NULL, '<p><br></p>', '2014-11-08 17:32:13'),
(6, 'Erectile Dysfunction', NULL, '<p><br></p>', '2014-11-08 17:32:42'),
(7, 'Antiemetic', NULL, '<p><br></p>', '2014-11-13 17:36:00'),
(8, 'Antimalarial', NULL, '<p><br></p>', '2014-11-13 17:39:40'),
(9, 'Gastro Intestinal', NULL, '<p><br></p>', '2014-11-13 17:40:21'),
(10, 'Expectorants', NULL, '<p><br></p>', '2014-11-13 17:41:34');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `type`, `title`, `image`, `description`, `timestamp`) VALUES
(1, 'about_us', 'About Us', 'e0b6098fc24bf10accf38eff874c88fb.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2014-11-06 11:13:44'),
(2, 'our_vission', 'Our Vision', '49e235b05507ed0fde7dfd5f0a9f1a7c.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2014-11-06 11:13:44'),
(3, 'our_mission', 'Our Mission', '3cb18e16ce5f7cbcb54031b13e9bf0ab.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2014-11-06 11:13:44'),
(4, 'domestic_content', 'Domestic Market', '8c034ec58134066fa51f740fb88baa59.jpg', '<p style="margin-bottom: 14px; padding: 0px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec laoreet id nibh a blandit. Nullam felis risus, elementum aliquam diam a, finibus scelerisque justo. Cras sit amet mollis elit. Sed pulvinar nisl varius urna gravida pulvinar. Mauris non purus pellentesque, molestie libero et, pellentesque libero. Nullam hendrerit nec urna in pulvinar. Nam nec orci finibus, placerat ante in, consectetur dui. Aliquam metus lorem, aliquam viverra molestie at, bibendum eget odio. Phasellus rhoncus scelerisque metus, a venenatis metus placerat nec.</p><p style="margin-bottom: 14px; padding: 0px;">Ut eu justo eu lectus efficitur posuere at sit amet velit. Nunc eu quam in augue dignissim vehicula. Sed dictum nisl sit amet dui vulputate, at pretium erat gravida. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus sollicitudin mollis ornare. Cras aliquam gravida risus, sed ornare nisi vehicula at. Vestibulum in risus id arcu efficitur posuere ut vitae ligula. Proin erat augue, sagittis id vehicula ut, tincidunt eu lorem. Phasellus at ipsum nec tortor molestie tincidunt semper eget libero.</p>', '2014-11-07 20:19:25'),
(5, 'international_content', 'International Market', '0b68dcdbd5068a474435c41c35ed80db.jpg', '<p style="margin-bottom: 14px; padding: 0px;">Nunc dapibus, nulla vestibulum suscipit faucibus, libero ex varius est, sed rhoncus enim massa at dui. Curabitur nunc enim, tempus in interdum in, commodo et eros. Proin ornare nulla in odio laoreet congue. Quisque ut commodo mauris. Donec consequat molestie justo. Sed quis accumsan ligula. Maecenas elementum ante sit amet sem sodales pulvinar. Etiam facilisis nibh eget tristique vehicula. Phasellus hendrerit tellus vel porttitor sollicitudin. Cras sed mi vel lorem mollis tincidunt eu consectetur nunc. Donec ut metus lacinia, elementum lacus quis, vehicula orci. Aenean posuere tellus id purus posuere convallis. Aenean ut egestas est. Sed lacinia, neque non feugiat aliquet, dolor diam tincidunt risus, eget tempus ipsum neque a felis. Donec porttitor nisi arcu, non condimentum metus sagittis ut.</p><p style="margin-bottom: 14px; padding: 0px;">Cras bibendum diam et turpis vestibulum posuere. Cras feugiat felis ac quam vulputate, vel volutpat purus venenatis. Nulla facilisi. Donec at ligula vitae lectus malesuada facilisis. Vestibulum quis malesuada odio. Cras facilisis vel velit eget hendrerit. Sed vehicula, orci nec tempus bibendum, enim nibh feugiat turpis, in posuere mi nunc et libero. Praesent eget bibendum leo. Donec iaculis pretium tortor in tristique. Quisque efficitur non velit id maximus. Suspendisse convallis nunc vel urna pulvinar luctus. Mauris scelerisque nunc id luctus lacinia. Nulla quis diam at tellus cursus varius. Duis sed magna eget erat ornare condimentum. Curabitur varius, leo sit amet maximus auctor, sapien libero venenatis augue, vitae aliquam eros enim vel augue.</p>', '2014-11-07 20:19:25'),
(6, 'chemotech_content', 'Chemotech', NULL, '<p><span style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in ipsum luctus, efficitur erat vitae, tincidunt nibh. Quisque at ullamcorper leo. Duis lobortis et metus vitae finibus. Ut convallis arcu non sem dictum vehicula. Ut lacinia dolor id mollis fermentum. Suspendisse euismod ex nec nisl tincidunt vestibulum.</span><br></p>', '2014-11-09 12:18:35');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `market`, `brand_name`, `generic_name`, `image`, `description`, `timestamp`) VALUES
(1, 4, 'D,I', 'Metsyl', 'Metformin 500 / 800 / 1000 mg', NULL, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. </span></p><p><span style="text-align: justify;"><br></span></p><p><span style="text-align: justify;">Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '2014-11-08 18:51:30'),
(2, 4, 'D,I', 'Metsyl G', 'Metformin (500) + Glimipride (1 mg) ', NULL, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '2014-11-08 18:53:14'),
(3, 4, 'D,I', 'Vogsyl', 'Voglibase', NULL, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '2014-11-08 18:55:13'),
(4, 3, 'D,I', 'Amlosyl', 'Amlodipine 2.5/5 mg', NULL, '<p><span style="color: rgb(68, 68, 68); font-family: franklin_gothic_bookregular; line-height: 24px;">Soluble Paracetamol Tablets BP 500 mg.</span><br style="color: rgb(68, 68, 68); font-family: franklin_gothic_bookregular; line-height: 24px;"><strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(68, 68, 68); font-family: franklin_gothic_bookregular; line-height: 24px;">Strength</strong><br style="color: rgb(68, 68, 68); font-family: franklin_gothic_bookregular; line-height: 24px;"><span style="color: rgb(68, 68, 68); font-family: franklin_gothic_bookregular; line-height: 24px;">Each Effervescent Tablet Contains:</span><br style="color: rgb(68, 68, 68); font-family: franklin_gothic_bookregular; line-height: 24px;"><span style="color: rgb(68, 68, 68); font-family: franklin_gothic_bookregular; line-height: 24px;">Paracetamol BP - 500 mg.</span><br style="color: rgb(68, 68, 68); font-family: franklin_gothic_bookregular; line-height: 24px;"><span style="color: rgb(68, 68, 68); font-family: franklin_gothic_bookregular; line-height: 24px;">Excipients - q.s.&nbsp;</span><br style="color: rgb(68, 68, 68); font-family: franklin_gothic_bookregular; line-height: 24px;"><strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(68, 68, 68); font-family: franklin_gothic_bookregular; line-height: 24px;">Dosage Form</strong><br style="color: rgb(68, 68, 68); font-family: franklin_gothic_bookregular; line-height: 24px;"><span style="color: rgb(68, 68, 68); font-family: franklin_gothic_bookregular; line-height: 24px;">Tablets&nbsp;</span><br style="color: rgb(68, 68, 68); font-family: franklin_gothic_bookregular; line-height: 24px;"><strong style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(68, 68, 68); font-family: franklin_gothic_bookregular; line-height: 24px;">Description</strong><br style="color: rgb(68, 68, 68); font-family: franklin_gothic_bookregular; line-height: 24px;"><span style="color: rgb(68, 68, 68); font-family: franklin_gothic_bookregular; line-height: 24px;">Quick onset of action on FEVER and PAIN due to faster dispersion</span><br></p>', '2014-11-08 18:57:23'),
(5, 3, 'D,I', 'Atrosyl', 'Atorvastatin', NULL, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '2014-11-08 18:59:53'),
(6, 3, 'D,I', 'Atrosyl-T', 'Atorvastatin + Telmisartan', NULL, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '2014-11-08 19:02:32'),
(7, 3, 'D,I', 'ATEN - Syl', 'Atenolol - 50 mg', NULL, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '2014-11-08 19:09:50'),
(8, 1, 'D,I', 'Erisyl', 'Erythromycin 250 / 500 mg', NULL, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '2014-11-08 19:11:57'),
(9, 1, 'D,I', 'Azisyl', 'Azithromycin', NULL, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '2014-11-08 19:13:14'),
(10, 1, 'D,I', 'Cefisyl', 'Cefixime', NULL, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '2014-11-08 19:14:24'),
(11, 1, 'D,I', 'Ceprosyl', 'Ciprofloxacin', NULL, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '2014-11-08 19:20:54'),
(12, 6, 'D,I', 'Sildesyl', 'Sildenafil Citrate 100 mg', NULL, '<p><span style="text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '2014-11-08 19:22:35'),
(14, 2, 'D,I', 'Dpsyl', 'Diclofenal Sod. 50 + PCM 375', '4da48f14060f3b57a882780ec9c53f7d.jpg', '<p><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 25px; text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '2014-11-13 17:52:01'),
(15, 2, 'D,I', 'Parasyl', 'PCM 500 / 650 mg', NULL, '<p><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 25px; text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '2014-11-13 17:52:49'),
(16, 2, 'D,I', 'Diclosyl P', 'Diclofenal Potasium 100 mg', NULL, '<p><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 25px; text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '2014-11-13 17:53:30'),
(17, 4, 'D,I', 'Metsyl P', 'Metformin 500 / 800 mg + Pioglitationzone 15 mg', NULL, '<p><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 25px; text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '2014-11-13 18:27:37'),
(18, 7, 'D,I', 'Domperidone BP 10mg', 'Domperidone BP 10mg', NULL, '<p><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 25px; text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '2014-11-13 18:32:30'),
(19, 8, 'D,I', 'Quinine sulphate USP 600mg', 'Quinine sulphate USP 600mg', NULL, '<p><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 25px; text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '2014-11-13 18:33:04'),
(20, 8, 'D,I', 'Quinine sulphate USP 300mg', 'Quinine sulphate USP 300mg', NULL, '<p><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 25px; text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '2014-11-13 18:35:14'),
(21, 9, 'D,I', 'Omeprazole Capsule', 'Omeprazole Capsule', NULL, '<p><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; line-height: 25px; text-align: justify;">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '2014-11-13 18:36:10');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `system_type` varchar(255) NOT NULL,
  `sequence` int(11) NOT NULL,
  `system_key` varchar(255) NOT NULL,
  `system_value` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `system_type`, `sequence`, `system_key`, `system_value`, `timestamp`) VALUES
(1, 'kp_contact', 1, 'google_address', 'https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d29526.44636808985!2d73.1344962!3d22.3231833!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1415083437789" width="100%"   frameborder="0" style="border:1px solid #d3d3d3', '2014-11-05 19:28:09'),
(2, 'kp_contact', 2, 'address', '9, Vrundan colony,<br />\n001-Rajeshwar apartment,<br />\nopp. Aishwarya apartment,<br />\nEllora park, Vadodara<br />\n390-007', '2014-11-05 19:29:35'),
(3, 'kp_contact', 3, 'mail_1', 'info@rootitsolutions.com', '2014-11-05 19:30:41'),
(4, 'kp_contact', 4, 'mail_2', 'info@rootitsolutions.com', '2014-11-05 19:31:03'),
(5, 'kp_contact', 5, 'mail_3', 'info@rootitsolutions.com', '2014-11-05 19:31:21'),
(6, 'kp_contact', 6, 'mail_4', 'info@rootitsolutions.com', '2014-11-05 19:31:42'),
(7, 'kp_contact', 7, 'mail_5', 'info@rootitsolutions.com', '2014-11-05 19:31:42'),
(8, 'kp_contact', 10, 'landline', '02651234567', '2014-11-05 19:31:42'),
(9, 'kp_contact', 8, 'mobile_1', '1234567890', '2014-11-05 19:31:42'),
(10, 'kp_contact', 9, 'mobile_2', '1234567890', '2014-11-05 19:31:42'),
(11, 'kp_contact', 11, 'fax', '1234567890', '2014-11-05 19:31:42'),
(13, 'ct_contact', 1, 'branch_address', '9, Vrundan colony,<br />001-Rajeshwar apartment,<br />opp. Aishwarya apartment,<br />Ellora park, Vadodara<br />390-007', '2014-11-05 19:29:35'),
(14, 'ct_contact', 2, 'branch_mail', 'info@rootitsolutions.com', '2014-11-05 19:30:41'),
(15, 'ct_contact', 4, 'branch_mobile', '9714785095', '2014-11-05 19:31:42'),
(17, 'smtp', 1, 'smtp_host', 'mail.rootitsolutions.com', '2014-11-09 10:57:49'),
(18, 'smtp', 1, 'smtp_port', '587', '2014-11-09 10:57:49'),
(19, 'smtp', 1, 'smtp_mail', 'info@rootitsolutions.com', '2014-11-09 10:57:49'),
(20, 'smtp', 1, 'smtp_password', 'rsgroup@2014', '2014-11-09 10:57:49'),
(21, 'smtp', 1, 'smtp_name', 'RooT IT Solutions', '2014-11-09 10:57:49'),
(24, 'ct_contact', 5, 'branch_telephone', '02652355577', '2014-11-05 19:30:41'),
(26, 'ct_contact', 1, 'headoffice_address', '9, Vrundan colony,<br />001-Rajeshwar apartment,<br />opp. Aishwarya apartment,<br />Ellora park, Vadodara<br />390-007', '2014-11-05 19:29:35'),
(28, 'ct_contact', 2, 'headoffice_mail', 'info@rootitsolutions.com', '2014-11-05 19:30:41'),
(29, 'ct_contact', 3, 'headoffice_mobile', '02652355577', '2014-11-05 19:31:42'),
(30, 'ct_contact', 4, 'headoffice_telephone', '9924158849', '2014-11-05 19:30:41');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slidertitle`, `slidertext`, `sliderimage`, `timestamp`) VALUES
(5, 'slider3', 'slider3', '8fa3aa0fe43beefdb83724a9d295fe39.jpg', '2014-11-05 18:46:03'),
(6, 'slider4', 'slider4', 'a2befad57f1a8859f290d7b2b845e644.jpg', '2014-11-05 18:51:07'),
(7, 'slider2', 'slider2', '267c6837cfc29f20a1e497d36ee707e9.jpg', '2014-11-08 16:59:44');

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
