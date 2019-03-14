-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2019 at 04:54 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `admin_type` varchar(50) NOT NULL,
  `num` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `regdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `phone`, `admin_type`, `num`, `status`, `regdate`) VALUES
(1, 'Administrator', 'admin@homehub.com.ng', '81dc9bdb52d04dc20036dbd8313ed055', '08062165573', 'wgdtcg3yydhcjcjcjcj', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `adm_message`
--

CREATE TABLE `adm_message` (
  `id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `msg` text NOT NULL,
  `user_code` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `msg_date` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `num` varchar(10) NOT NULL,
  `msg_code` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adm_message`
--

INSERT INTO `adm_message` (`id`, `subject`, `name`, `msg`, `user_code`, `email`, `msg_date`, `status`, `num`, `msg_code`) VALUES
(1, '', 'Administrator007', '', '5c18f0efc8857', 'ciwmnig@gmail.com', '21st  December 2018 06:30:18 PM', '0', '1', ''),
(2, '', 'Crespy Edo', '', '5c18f0efc8857', 'ciwmnig@gmail.com', '21st  December 2018 06:33:52 PM', '0', '1', '905866'),
(3, '', 'EMETULU@YAHOO.COM', '', '5c18f0efc8857', 'ciwmnig@gmail.com', '21st  December 2018 06:37:35 PM', '0', '1', '292859'),
(4, '', 'Victoria paul', '', '5c18f0efc8857', 'ciwmnig@gmail.com', '21st  December 2018 06:41:17 PM', '0', '1', '927739'),
(5, '', 'sophia@yahoo.com', '', '5c18f0efc8857', 'ciwmnig@gmail.com', '21st  December 2018 06:47:13 PM', '0', '1', '553079'),
(6, '', 'jss1a@yahoo.com', 'g87tfg7g66g', '5c18f0efc8857', 'ciwmnig@gmail.com', '21st  December 2018 06:49:23 PM', '0', '1', '747298'),
(7, '', 'Aboajah Emmanuel ike', 'fdhdjcjcjccj', '5c18f0efc8857', 'ciwmnig@gmail.com', '22nd  December 2018 07:09:17 AM', '0', '1', '120295'),
(8, '', 'jss1a@yahoo.com', 'gfcyygh', '5c18f0efc8857', 'ciwmnig@gmail.com', '22nd  December 2018 07:53:12 AM', '0', '1', '231571');

-- --------------------------------------------------------

--
-- Table structure for table `google_users`
--

CREATE TABLE `google_users` (
  `google_id` int(12) NOT NULL,
  `clint_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `google_email` varchar(60) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `picture_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `msg` text NOT NULL,
  `user_code` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `msg_date` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `num` varchar(10) NOT NULL,
  `msg_code` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `s_email`, `phone`, `msg`, `user_code`, `email`, `msg_date`, `status`, `num`, `msg_code`) VALUES
(1, 'Administrator007', 'jss1a@yahoo.com', '08062859585', '', '5c18f0efc8857', 'ciwmnig@gmail.com', '21st  December 2018 06:30:18 PM', '0', '1', ''),
(2, 'Crespy Edo', 'jss1a@yahoo.com', '+2348062165573', '', '5c18f0efc8857', 'ciwmnig@gmail.com', '21st  December 2018 06:33:52 PM', '0', '1', '905866'),
(3, 'EMETULU@YAHOO.COM', 'jss1a@yahoo.com', '+2348062165573', '', '5c18f0efc8857', 'ciwmnig@gmail.com', '21st  December 2018 06:37:35 PM', '0', '1', '292859'),
(4, 'Victoria paul', 'jss1a@yahoo.com', '+2348062165573', '', '5c18f0efc8857', 'ciwmnig@gmail.com', '21st  December 2018 06:41:17 PM', '0', '1', '927739'),
(5, 'sophia@yahoo.com', 'jss1a@yahoo.com', '+2348062165573', '', '5c18f0efc8857', 'ciwmnig@gmail.com', '21st  December 2018 06:47:13 PM', '0', '1', '553079'),
(6, 'jss1a@yahoo.com', 'jss1a@yahoo.com', '5555555555555', 'g87tfg7g66g', '5c18f0efc8857', 'ciwmnig@gmail.com', '21st  December 2018 06:49:23 PM', '0', '1', '747298'),
(7, 'Aboajah Emmanuel ike', 'jss1a@yahoo.com', '5555555555555', 'fdhdjcjcjccj', '5c18f0efc8857', 'ciwmnig@gmail.com', '22nd  December 2018 07:09:17 AM', '0', '1', '120295'),
(8, 'jss1a@yahoo.com', 'jss1a@yahoo.com', '+2348062165573', 'gfcyygh', '5c18f0efc8857', 'ciwmnig@gmail.com', '22nd  December 2018 07:53:12 AM', '0', '1', '231571');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `price` varchar(50) NOT NULL,
  `rooms` varchar(50) NOT NULL,
  `bathrooms` varchar(50) NOT NULL,
  `SqFt` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `address` text NOT NULL,
  `pic` text NOT NULL,
  `latitude` text NOT NULL,
  `longitude` text NOT NULL,
  `state` text NOT NULL,
  `lga` text NOT NULL,
  `area` text NOT NULL,
  `property_no` text NOT NULL,
  `fullname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `occupation` varchar(200) NOT NULL,
  `user_code` varchar(100) NOT NULL,
  `ref_id` text NOT NULL,
  `upload_date` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `rent_status` varchar(10) NOT NULL,
  `num` varchar(10) NOT NULL,
  `features007` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `title`, `type`, `purpose`, `price`, `rooms`, `bathrooms`, `SqFt`, `details`, `address`, `pic`, `latitude`, `longitude`, `state`, `lga`, `area`, `property_no`, `fullname`, `email`, `phone`, `occupation`, `user_code`, `ref_id`, `upload_date`, `status`, `view`, `rent_status`, `num`, `features007`) VALUES
(2, '2 Units Of 4 Bedroom Duplex With A Room Boys Quarter At Richmond Estate Road Ikate.', 'rent', '', '70000000', '3', '3', '', '2 units Exquisitely built 4 Bedroom Terrace serviced house with BQ at Jakande Lagos.\r\n\r\nAsking price.. N45,000,000\r\n\r\n\r\n        Ante-Room\r\n        Guest toilet\r\n        All rooms ensuite\r\n        Children lounge\r\n        Study area\r\n        Parking space\r\n        Landscaping\r\n        Outdoor recreation area', 'Delhi, India', 'upload/1545143397-1530889918-4.jpg', '28.68627380000001', '77.22178310000004', 'LAGOS', 'OJO', '', '165280', 'christ imperial', 'ciwmnig@gmail.com', '08062165573', 'Developer', '5c18f0efc8857', '', '18th  December 2018 03:12:27 PM', '1', 1, '1', '1', ''),
(4, 'Beautifully Maintained Two Units Of 3 Bedroom Flat', 'store_room', 'rent', '70000000', '3', '3', '', '2 units Exquisitely built 4 Bedroom Terrace serviced house with BQ at Jakande Lagos.\r\n\r\nAsking price.. N45,000,000\r\n\r\n\r\n        Ante-Room\r\n        Guest toilet\r\n        All rooms ensuite\r\n        Children lounge\r\n        Study area\r\n        Parking space\r\n        Landscaping\r\n        Outdoor recreation area', 'Oyedele Ogunniyi Street, Lagos, Nigeria', 'upload/1545312520-1531824929-5.jpg', '6.5625192', '3.3707550999999967', 'LAGOS', 'IKEJA', '', '759838', 'Christ Imperial', 'ciwmnig@gmail.com', '08062165573', 'Developer', '5c18f0efc8857', '', '20th  December 2018 02:03:03 PM', '1', 54, '1', '1', ''),
(6, '2 Units Of 4 Bedroom Apartment', 'store_room', 'sale', '70000000', '3', '3', '', '2 units Exquisitely built 4 Bedroom Terrace serviced house with BQ at Jakande Lagos.\r\n\r\nAsking price.. N45,000,000\r\n\r\n\r\n        Ante-Room\r\n        Guest toilet\r\n        All rooms ensuite\r\n        Children lounge\r\n        Study area\r\n        Parking space\r\n        Landscaping\r\n        Outdoor recreation area', 'Oyedele Ogunniyi Street, Lagos, Nigeria', 'upload/1545324377-1528205660-house-6.jpg', '6.5625192', '3.3707550999999967', 'LAGOS', 'IKEJA', '', '647082', 'Christ Imperial', 'ciwmnig@gmail.com', '08062165573', 'Developer', '5c18f0efc8857', '', '20th  December 2018 05:44:36 PM', '1', 2, '1', '1', ''),
(7, 'Tastefully Finished 3 Bedroom Flat With BQ ', 'flat', 'sale', '1200000', '9', '10', '', 'rgggrgrvrvrrvr', '9, Isolo streeet', 'upload/1545501086-1533747215-IMG_0268.jpg', '', '', 'ENUGU', 'UDENU', '', '686232', 'Christ Imperial', 'ciwmnig@gmail.com', '', '', '', '', '22nd  December 2018 06:48:45 PM', '1', 2, '1', '1', ''),
(8, 'Units Of 4 Bedroom Duplex With A Room Boys Quarter', 'warehouse', 'rent', '80000000', '9', '9', '', '', '9, Isolo streeet', 'upload/1545777295-christmas-background-with-beautiful-ornaments_1361-824.jpg', '', '', 'KADUNA', 'BIRNIN GWARI', '', '380622', 'Aboajah Emmanuel', 'aboajahemmanuel@gmail.com', '', '', '', '', '25th  December 2018 11:34:31 PM', '1', 4, '1', '1', ''),
(10, 'Units Of 4 Bedroom Duplex With A Room Boys Quarter', 'shop', 'sale', '3500000', '8', '4', '', 'cbn bgn ngngn', 'Lagos, Nigeria', 'upload/1546195631-1545324376-1528205659-house-5.jpg', '', '', 'LAGOS', 'LAGOS ISLAND', '', '660055', '', '', '', '', '', '', '30th  December 2018 07:46:29 PM', '1', 1, '1', '1', ''),
(11, 'Tastefully Finished 3 Bedroom Flat With BQ', 'bungalow', 'rent', '80000000', '9', '7', '', 'iohkhh', 'Houston, TX, USA', '', '29.7604267', '-95.3698028', 'FCT', 'ABAJI', '', '641980', '', '', '', '', '', '', '30th  December 2018 08:21:03 PM', '0', 0, '1', '1', ''),
(12, '5 Units Of 4 Bedroom Full Detached House With Boys Quater', 'bungalow', 'rent', '80000000', '10', '8', '', '', 'Bengaluru, Karnataka, India', '', '', '', 'EBONYI', 'ABAKALIKI', '', '532666', '', '', '', '', '', '', '30th  December 2018 08:29:17 PM', '0', 0, '1', '1', ''),
(13, 'Units Of 4 Bedroom Duplex With A Room Boys Quarter', 'bungalow', 'rent', '3500000', '10', '9', '', '', 'Fggfcm, Casanova Street, Bronx, NY, USA', '', '40.80976179999999', '-73.88908779999997', 'FCT', 'GWAGWALADA', '', '370005', 'Aboajah Emmanuel', 'aboajahemmanuel@gmail.com', '08065594627', '', '5c14868d72bd7', '', '30th  December 2018 08:31:45 PM', '1', 0, '1', '1', ''),
(14, 'Units Of 4 Bedroom Duplex With A Room Boys Quarteryyyyyyyyy', 'bungalow', 'rent', '80000000', '8', '10', '', '', 'Bengaluru, Karnataka, India', '', '12.9715987', '77.59456269999998', 'EDO', 'ORHIONMWONOVIA NORTH EAST', '', '394657', 'Aboajah Emmanuel', 'aboajahemmanuel@gmail.com', '08065594627', '', '5c14868d72bd7', '', '30th  December 2018 08:37:04 PM', '1', 1, '1', '1', ''),
(15, '3 Bedroom Flat', 'Flat', 'Rent', '1000000', '3', '6', '', 'What do you do with a mistake: recognize it, admit it, learn from it, forget it.What do you do with a mistake: recognize it, admit it, learn from it, forget it.What do you do with a mistake: recognize it, admit it, learn from it, forget it.What do you do with a mistake: recognize it, admit it, learn from it, forget it.What do you do with a mistake: recognize it, admit it, learn from it, forget it.', '9, Isolo streeet', 'upload/1548177806-Screenshot_2019-01-22 Iya Ayi- restaurant.jpg', '', '', 'LAGOS', 'AGEGE', '', '566711', 'Christ Imperial', 'ciwmnig@gmail.com', '5555555555555', 'Good Doctor', '5c18f0efc8857', '', '15th  January 2019 02:52:35 PM', '1', 7, '1', '1', ''),
(16, 'STRATEGICALLY LOCATED 151 ROOM HOTEL IN MAITAMA, ABUJA', 'Duplex', 'Rent', '3000000000', '2', '4', '', 'teytyhthghtgtr', '9, Isolo streeet', 'upload/1552495107-WhatsApp Image 2019-03-06 at 5.18.47 PM.jpeg', '', '', 'ADAMAWA', 'DEMSA', '', '132057', 'Lekki', 'lekki@me.com', '09073627352', '', '5c53078479c46', '', '13th  March 2019 05:36:10 PM', '0', 0, '1', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `property_features`
--

CREATE TABLE `property_features` (
  `id` int(11) NOT NULL,
  `property_features` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_features`
--

INSERT INTO `property_features` (`id`, `property_features`) VALUES
(1, 'Ample Parking'),
(2, 'UPS'),
(3, '24hrs standby generators'),
(4, 'Lift'),
(5, 'Dedicated Transformer'),
(6, 'DSTV Connection'),
(7, 'Gym'),
(8, 'WiFi'),
(9, 'Air conditioning'),
(10, 'Security'),
(11, 'Swimming Pool'),
(12, 'Borehole and Water treatment plant');

-- --------------------------------------------------------

--
-- Table structure for table `property_listings`
--

CREATE TABLE `property_listings` (
  `id` bigint(20) NOT NULL,
  `property_title` varchar(300) NOT NULL,
  `property_type` varchar(200) NOT NULL,
  `price` decimal(18,2) NOT NULL,
  `property_rooms` varchar(5) NOT NULL,
  `property_bathrooms` varchar(5) NOT NULL,
  `property_info` text NOT NULL,
  `property_address` text NOT NULL,
  `pics` varchar(300) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `state` varchar(20) NOT NULL,
  `lga` varchar(50) NOT NULL,
  `area` varchar(300) NOT NULL,
  `property_no` varchar(300) NOT NULL,
  `youtube_link` varchar(300) NOT NULL,
  `fullname` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `ref_id` varchar(20) NOT NULL,
  `owner_status` varchar(50) NOT NULL,
  `upload_date` varchar(20) NOT NULL,
  `status` varchar(2) NOT NULL,
  `live_status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_listings`
--

INSERT INTO `property_listings` (`id`, `property_title`, `property_type`, `price`, `property_rooms`, `property_bathrooms`, `property_info`, `property_address`, `pics`, `lat`, `lng`, `state`, `lga`, `area`, `property_no`, `youtube_link`, `fullname`, `email`, `phone`, `ref_id`, `owner_status`, `upload_date`, `status`, `live_status`) VALUES
(1, 'A Mini Flat', 'Apartment', '250000.00', '1', '1', 'This is a nice mini flat', '2 Community Road, Ikeja, Nigeria', '', 6.6011513, 3.3537381999999525, 'LAGOS', 'IKEJA', '', '', '', 'Twocsup Twocsup', 'sup2csoftech@yahoo.com', '08099966545', 'WD905694843', 'Landlord', '2018-05-26', '0', '0'),
(2, 'sdfbbdfsfudbsk', 'Commercial', '3000000.00', '4', '3', 'gooodoiddsjdsjbdsjcdsjdskcsdjbs', 'Fasoro Street, Lagos, Nigeria', '', 6.5167907, 3.3616230000000087, 'LAGOS', 'SURULERE', 'lag', '19,fasoro street', '', 'Aboajah Nduka', 'emmakoko2009@yahoo.com', '08062165573', 'WD652446595', 'Landlord', '2018-05-27', '0', '0'),
(3, 'Osborne Towers', 'Apartment', '15.00', '4', '4', 'The apartment comprises 4 bedroom, luxurious, all en-suite apartments along Osborne road, Ikoyi, Lagos.', 'Osborne Road, Lagos, Nigeria', '', 0, 0, 'LAGOS', 'AGEGE', 'Ikoyi', '', '', 'Victoria Ubak', 'vickyoriall@yahoo.com', '07064759084', 'WD436904570', 'Landlord', '2018-05-27', '0', '0'),
(4, 'sdfbbdfsfudbsk', 'Commercial', '15000.00', '4', '3', 'goo', '19 Fasoro Street, Lagos, Nigeria', '', 6.517525299999999, 3.3617871999999807, 'LAGOS', 'SHOMOLU', '', '19,fasoro street', '', 'Aboajah Emmanuel', 'aboajahemmanuel@gmail.com', '08062165573', 'WD495445929', 'Landlord', '2018-05-28', '0', '0'),
(5, 'A 2-bed room flat', 'Apartment', '500000.00', '2', '2', 'A very nice 2 bedroom', '68 Allen Avenue, Ikeja, Nigeria', 'WD804882614_room2.jpg', 6.603219500000001, 3.3514522000000397, 'LAGOS', 'IKEJA', 'Allen Avenue', '125', '', 'Chidi Uwaleke', '2codename47@gmail.com', '08099966545', 'WD804882614', 'Landlord', '2018-05-29', '2', '0'),
(6, 'gtgtgtgtgtgt', 'House', '444444444.00', '3', '4', 'hghghgghggg', 'LAGOS, Lagos, Nigeria', 'WD113960196_open1.png', 6.5243793, 3.379205700000057, 'KADUNA', 'BIRNIN GWARI', '', '', '', 'Maze Eme', 'guy@e3tech.com.ng', '5555555555555', 'WD113960196', 'Landlord', '2018-05-29', '2', '0'),
(7, 'My Property', 'Apartment', '12000.00', '1', '1', 'This is my property in whom I am well pleased', '5 Chief Collins Uchidiuno Street, Lagos, Nigeria', 'WD451891381_electrical-appliances.gif', 6.4416281, 3.475462900000025, 'LAGOS', 'IBEJU/LEKKI', '', '12345', '', 'Paul Oladimeji', 'pauloladimeji@gmail.com', '08161286594', 'WD451891381', 'Landlord', '2018-05-29', '2', '0'),
(8, 'sdfbbdfsfudbsk', 'Commercial', '12000.00', '5', '3', 'goo', '19,fasoro street', 'WD531622314_0CgRfMt.jpg', 0, 0, 'LAGOS', 'EPE', '', '19,fasoro street', '', 'Aboajah Emmanuel', 'aboajahemmanuel@gmail.com', '08062165573', 'WD531622314', 'Landlord', '2018-05-30', '2', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pro_img`
--

CREATE TABLE `pro_img` (
  `id` int(11) NOT NULL,
  `pic` text NOT NULL,
  `property_no` text NOT NULL,
  `user_code` text NOT NULL,
  `num` varchar(10) NOT NULL DEFAULT '1',
  `status` varchar(10) NOT NULL,
  `upload_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_img`
--

INSERT INTO `pro_img` (`id`, `pic`, `property_no`, `user_code`, `num`, `status`, `upload_date`) VALUES
(183, 'upload/1545052185-WP_20170708_18_40_16_Pro.jpg', '', '', '', '', ''),
(184, 'upload/1545052479-WP_20170708_18_40_16_Pro.jpg', '', '', '', '', ''),
(185, 'upload/1545052556-WP_20170708_17_17_55_Pro.jpg', '', '', '', '', ''),
(186, 'upload/1545052595-1545052479-WP_20170708_18_40_16_Pro.jpg', '', '', '', '', ''),
(187, 'upload/1545052596-1545052185-WP_20170708_18_40_16_Pro.jpg', '', '', '', '', ''),
(188, 'upload/1545052597-1545052556-WP_20170708_17_17_55_Pro.jpg', '', '', '', '', ''),
(189, 'upload/1545053385-WP_20170708_18_39_25_Pro.jpg', '', '', '', '', ''),
(190, 'upload/1545053385-WP_20170708_18_39_29_Pro.jpg', '', '', '', '', ''),
(191, 'upload/1545053386-WP_20170708_18_39_48_Pro.jpg', '', '', '', '', ''),
(192, 'upload/1545053387-WP_20170708_18_40_06_Pro.jpg', '', '', '', '', ''),
(193, 'upload/1545053389-WP_20170708_18_40_12_Pro.jpg', '', '', '', '', ''),
(194, 'upload/1545053391-WP_20170708_18_40_16_Pro.jpg', '', '', '', '', ''),
(195, 'upload/1545055737-WP_20170708_18_40_16_Pro.jpg', '', '', '', '', ''),
(196, 'upload/1545142907-1536128313-37997dce-eb9d-4952-bfb4-b1265c4c5a63.jpg', '', '', '1', '1', '18th  December 2018 03:21:47 PM'),
(197, 'upload/1545142908-1536127952-5.jpg', '', '', '1', '1', '18th  December 2018 03:21:48 PM'),
(198, 'upload/1545142909-1536128312-08d88ec4-e6b0-4ad0-b513-478c03226a81.jpg', '', '', '1', '1', '18th  December 2018 03:21:49 PM'),
(199, 'upload/1545142909-1536128312-449bf4ee-39b6-4843-a741-bd4a110551e9.jpg', '', '', '1', '1', '18th  December 2018 03:21:49 PM'),
(200, 'upload/1545142910-1536128313-1ff19903-8e58-4df6-bf01-8fb337bf30de.jpg', '', '', '1', '1', '18th  December 2018 03:21:50 PM'),
(201, 'upload/1545143397-1530889918-4.jpg', '165280', '', '1', '1', '18th  December 2018 03:29:57 PM'),
(202, 'upload/1545143397-1530889919-5.jpg', '165280', '', '1', '1', '18th  December 2018 03:29:57 PM'),
(203, 'upload/1545143398-1530889920-7.jpg', '165280', '', '1', '1', '18th  December 2018 03:29:58 PM'),
(204, 'upload/1545143398-1530889923-6.jpg', '165280', '', '1', '1', '18th  December 2018 03:29:58 PM'),
(206, 'upload/1545143399-1530889924-WhatsApp Image 2018-07-06 at 1.24.58 PM.jpeg', '165280', '', '1', '1', '18th  December 2018 03:29:59 PM'),
(208, 'upload/1545143400-1530879356-4.jpg', '165280', '', '1', '1', '18th  December 2018 03:30:00 PM'),
(209, 'upload/1545143401-1530879356-WhatsApp Image 2018-07-06 at 12.38.20 PM.jpeg', '165280', '', '1', '1', '18th  December 2018 03:30:01 PM'),
(210, 'upload/1545143401-1530879358-6.jpg', '165280', '', '1', '1', '18th  December 2018 03:30:01 PM'),
(230, 'upload/1545312520-1531824929-5.jpg', '759838', '', '1', '1', '20th  December 2018 02:28:40 PM'),
(231, 'upload/1545312520-1531824929-6.jpg', '759838', '', '1', '1', '20th  December 2018 02:28:40 PM'),
(232, 'upload/1545312521-1531824930-7.jpg', '759838', '', '1', '1', '20th  December 2018 02:28:41 PM'),
(233, 'upload/1545312521-1531824930-8.jpg', '759838', '', '1', '1', '20th  December 2018 02:28:41 PM'),
(236, 'upload/1545312522-1531824927-1.jpg', '759838', '', '1', '1', '20th  December 2018 02:28:42 PM'),
(237, 'upload/1545312523-1531824927-2.jpg', '759838', '', '1', '1', '20th  December 2018 02:28:43 PM'),
(238, 'upload/1545312524-1531824928-3.jpg', '759838', '', '1', '1', '20th  December 2018 02:28:44 PM'),
(248, 'upload/1545324375-1528205662-house-2.jpg', '647082', '', '1', '1', '20th  December 2018 05:46:15 PM'),
(249, 'upload/1545324375-1528205659-house-3.jpg', '647082', '', '1', '1', '20th  December 2018 05:46:15 PM'),
(250, 'upload/1545324376-1528205659-house-4.jpg', '647082', '', '1', '1', '20th  December 2018 05:46:16 PM'),
(251, 'upload/1545324376-1528205659-house-5.jpg', '647082', '', '1', '1', '20th  December 2018 05:46:16 PM'),
(252, 'upload/1545324377-1528205660-house-6.jpg', '647082', '', '1', '1', '20th  December 2018 05:46:17 PM'),
(253, 'upload/1545324378-1528205661-house-1.jpg', '647082', '', '1', '1', '20th  December 2018 05:46:18 PM'),
(254, 'upload/1545324565-1528376477-vitamins.jpg', '647082', '', '1', '1', '20th  December 2018 05:49:25 PM'),
(255, 'upload/1545501085-1533747216-IMG_0257.jpg', '686232', '', '1', '1', '22nd  December 2018 06:51:25 PM'),
(257, 'upload/1545501086-1533747218-IMG_0258.jpg', '686232', '', '1', '1', '22nd  December 2018 06:51:26 PM'),
(258, 'upload/1545501086-1533747215-IMG_0268.jpg', '686232', '', '1', '1', '22nd  December 2018 06:51:26 PM'),
(259, 'upload/1545501086-1533747216-IMG_0256.jpg', '686232', '', '1', '1', '22nd  December 2018 06:51:26 PM'),
(260, 'upload/1545777295-christmas-background-with-beautiful-ornaments_1361-824.jpg', '380622', '', '1', '1', '25th  December 2018 11:34:55 PM'),
(261, 'upload/1545777295-flat-christmas-background_23-2147947479.jpg', '380622', '', '1', '1', '25th  December 2018 11:34:55 PM'),
(262, 'upload/1545777296-hjbbinnnn.jpg', '380622', '', '1', '1', '25th  December 2018 11:34:56 PM'),
(263, 'upload/1545777296-merry-christmas-decorative-vintage-background_23-2147702809.jpg', '380622', '', '1', '1', '25th  December 2018 11:34:56 PM'),
(272, 'upload/1546195626-1545324378-1528205661-house-1.jpg', '660055', '', '1', '1', '30th  December 2018 07:47:06 PM'),
(273, 'upload/1546195626-1545324377-1528205660-house-6.jpg', '660055', '', '1', '1', '30th  December 2018 07:47:06 PM'),
(274, 'upload/1546195627-1546005312-1533216736-IMG_0182.jpg', '660055', '', '1', '1', '30th  December 2018 07:47:07 PM'),
(275, 'upload/1546195628-1545324375-1528205662-house-2.jpg', '660055', '', '1', '1', '30th  December 2018 07:47:08 PM'),
(276, 'upload/1546195629-1545324376-1528205659-house-4.jpg', '660055', '', '1', '1', '30th  December 2018 07:47:09 PM'),
(277, 'upload/1546195631-1545324376-1528205659-house-5.jpg', '660055', '', '1', '1', '30th  December 2018 07:47:11 PM'),
(278, 'upload/1547560409-2.jpg', '566711', '', '1', '1', '15th  January 2019 02:53:29 PM'),
(279, 'upload/1547560410-2019.jpg', '566711', '', '1', '1', '15th  January 2019 02:53:30 PM'),
(280, 'upload/1547560410-46463225_1865562626826052_6085555611427143680_n.jpg', '566711', '', '1', '1', '15th  January 2019 02:53:30 PM'),
(281, 'upload/1547560411-flat-christmas-background_23-2147947479.jpg', '566711', '', '1', '1', '15th  January 2019 02:53:31 PM'),
(282, 'upload/1547560412-flat-elements-new-year-background_23-2148011302.jpg', '566711', '', '1', '1', '15th  January 2019 02:53:32 PM'),
(283, 'upload/1547560412-happy.jpg', '566711', '', '1', '1', '15th  January 2019 02:53:32 PM'),
(284, 'upload/1547560413-imp.jpg', '566711', '', '1', '1', '15th  January 2019 02:53:33 PM'),
(285, 'upload/1547560414-let.jpg', '566711', '', '1', '1', '15th  January 2019 02:53:34 PM'),
(286, 'upload/1548177757-put2.jpg', '566711', '', '1', '1', '22nd  January 2019 06:22:37 PM'),
(287, 'upload/1548177806-Screenshot_2019-01-22 Iya Ayi- restaurant.jpg', '566711', '', '1', '1', '22nd  January 2019 06:23:26 PM'),
(288, 'upload/1552495105-WhatsApp Image 2019-03-06 at 5.18.48 PM (2).jpeg', '132057', '', '1', '1', '13th  March 2019 05:38:25 PM'),
(289, 'upload/1552495106-WhatsApp Image 2019-03-06 at 5.18.48 PM.jpeg', '132057', '', '1', '1', '13th  March 2019 05:38:26 PM'),
(290, 'upload/1552495106-WhatsApp Image 2019-03-06 at 5.18.50 PM (1).jpeg', '132057', '', '1', '1', '13th  March 2019 05:38:26 PM'),
(291, 'upload/1552495106-WhatsApp Image 2019-03-06 at 5.18.45 PM.jpeg', '132057', '', '1', '1', '13th  March 2019 05:38:26 PM'),
(292, 'upload/1552495106-WhatsApp Image 2019-03-06 at 5.18.47 PM (2).jpeg', '132057', '', '1', '1', '13th  March 2019 05:38:26 PM'),
(293, 'upload/1552495107-WhatsApp Image 2019-03-06 at 5.18.47 PM.jpeg', '132057', '', '1', '1', '13th  March 2019 05:38:27 PM'),
(294, 'upload/1552495107-WhatsApp Image 2019-03-06 at 5.18.48 PM (1).jpeg', '132057', '', '1', '1', '13th  March 2019 05:38:27 PM');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `id` int(11) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `owner_phone` varchar(20) NOT NULL,
  `owner_address` text NOT NULL,
  `rent_address` text NOT NULL,
  `rent` varchar(20) NOT NULL,
  `price` varchar(100) NOT NULL,
  `property_type` varchar(50) NOT NULL,
  `tenant_name` varchar(100) NOT NULL,
  `tenant_phone` varchar(20) NOT NULL,
  `receipt_s_d` varchar(20) NOT NULL,
  `receipt_e_d` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `receipt_code` varchar(20) NOT NULL,
  `reg_date` varchar(50) NOT NULL,
  `num` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`id`, `owner_name`, `owner_phone`, `owner_address`, `rent_address`, `rent`, `price`, `property_type`, `tenant_name`, `tenant_phone`, `receipt_s_d`, `receipt_e_d`, `email`, `receipt_code`, `reg_date`, `num`) VALUES
(1, 'Adeoba Mike', '08062165573', 'ewfefeffr', 't5grtgrtgrgrgrgrrrefer', '9', '', 'Shop', 'Ebube Emmanuel', '08062165573', '', '', 'jive@yahoo.com', '988040', 'Monday 24th of December 2018 ', '1'),
(2, 'John', '08062165573', 'sdfdfddd', 'dsgvdsgdsvdd', '5', '', 'Shop', 'Emeka Sodiq', '4444444444', '2018-12-13', '2018-12-12', 'admin@gt.com', '154581', 'Monday 24th of December 2018 ', '1'),
(3, 'Aboajah Emmanuel', '0807733292873', 'jgkjgg', 'nhvjhvj', '9', '', 'Flat', 'Aboajah Emmanue', '4444444444', '2019-01-23', '2019-01-25', 'ciwmnig@gmail.com', '592363', 'Wednesday 2nd of January 2019 ', '1'),
(4, 'Aboajah Emmanuel', '08062165573', 'yjtyjtyhjt', 'dyytktkty', '5', '5000', '', 'Emeka Sodiq', '08062165573', '2019-01-29', '2019-01-31', 'ciwmnig@gmail.com', '762932', 'Wednesday 2nd of January 2019 ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `statelga`
--

CREATE TABLE `statelga` (
  `id` int(11) NOT NULL,
  `state` varchar(100) NOT NULL,
  `lga` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statelga`
--

INSERT INTO `statelga` (`id`, `state`, `lga`) VALUES
(1, 'ABIA', 'ABA NORTH'),
(2, 'ABIA', 'ABA SOUTH'),
(3, 'ABIA', 'AROCHUKWU'),
(4, 'ABIA', 'BENDE'),
(5, 'ABIA', 'IKWUANO'),
(6, 'ABIA', 'ISIALA NGWA NORTH'),
(7, 'ABIA', 'ISIALA NGWA SOUTH'),
(8, 'ABIA', 'ISUIKWUATO'),
(9, 'ABIA', 'OBINGWA'),
(10, 'ABIA', 'OHAFIA'),
(11, 'ABIA', 'OSISIOMA'),
(12, 'ABIA', 'UGWUNAGBO'),
(13, 'ABIA', 'UKWA EAST'),
(14, 'ABIA', 'UKWA WEST'),
(15, 'ABIA', 'UMUAHIA NORTH'),
(16, 'ABIA', 'UMUAHIA SOUTH'),
(17, 'ABIA', 'UMU-NNEOCHI'),
(18, 'ADAMAWA', 'DEMSA'),
(19, 'ADAMAWA', 'FURORE'),
(20, 'ADAMAWA', 'GANYE'),
(21, 'ADAMAWA', 'GEREI'),
(22, 'ADAMAWA', 'GOMBI'),
(23, 'ADAMAWA', 'GUYUK'),
(24, 'ADAMAWA', 'HONG'),
(25, 'ADAMAWA', 'JADA'),
(26, 'ADAMAWA', 'LAMURDE'),
(27, 'ADAMAWA', 'MADAGALI'),
(28, 'ADAMAWA', 'MAIHA'),
(29, 'ADAMAWA', 'MAYO-BELWA'),
(30, 'ADAMAWA', 'MICHIKA'),
(31, 'ADAMAWA', 'MUBI NORTH'),
(32, 'ADAMAWA', 'MUBI SOUTH'),
(33, 'ADAMAWA', 'NUMAN'),
(34, 'ADAMAWA', 'SHELLENG'),
(35, 'ADAMAWA', 'SONG'),
(36, 'ADAMAWA', 'TUNGO'),
(37, 'ADAMAWA', 'YOLA NORTH'),
(38, 'ADAMAWA', 'YOLA SOUTH'),
(39, 'AKWA-IBOM', 'ABAK'),
(40, 'AKWA-IBOM', 'EASTERN OBOLO'),
(41, 'AKWA-IBOM', 'EKET'),
(42, 'AKWA-IBOM', 'ESIT EKET'),
(43, 'AKWA-IBOM', 'ESSIEN UDIM'),
(44, 'AKWA-IBOM', 'ETIM EKPO'),
(45, 'AKWA-IBOM', 'ETINAN'),
(46, 'AKWA-IBOM', 'IBENO'),
(47, 'AKWA-IBOM', 'IBESIKPO/ASUTAN'),
(48, 'AKWA-IBOM', 'IBIONO IBOM'),
(49, 'AKWA-IBOM', 'IKA'),
(50, 'AKWA-IBOM', 'IKONO'),
(51, 'AKWA-IBOM', 'IKOT ABASI'),
(52, 'AKWA-IBOM', 'IKOT EKPENE'),
(53, 'AKWA-IBOM', 'INI'),
(54, 'AKWA-IBOM', 'ITU'),
(55, 'AKWA-IBOM', 'MBO'),
(56, 'AKWA-IBOM', 'MKPAT ENIN'),
(57, 'AKWA-IBOM', 'NSIT ATAI'),
(58, 'AKWA-IBOM', 'NSIT IBOM'),
(59, 'AKWA-IBOM', 'OBOT AKARA'),
(60, 'AKWA-IBOM', 'KOBO'),
(61, 'AKWA-IBOM', 'ONNAA'),
(62, 'AKWA-IBOM', 'ORON'),
(63, 'AKWA-IBOM', 'ORUKANAM'),
(64, 'AKWA-IBOM', 'UDUNG UKO'),
(65, 'AKWA-IBOM', 'UKANAFUN'),
(66, 'AKWA-IBOM', 'URBAN'),
(67, 'AKWA-IBOM', 'URUE OFFONG ORUKO'),
(68, 'AKWA-IBOM', 'UYO'),
(69, 'ANAMBRA', 'AGUATA'),
(70, 'ANAMBRA', 'AYAMELUM'),
(71, 'ANAMBRA', 'ANAMBRA EAST'),
(72, 'ANAMBRA', 'ANAMBRA WEST(MBAMILI)'),
(73, 'ANAMBRA', 'ANAOCHA'),
(74, 'ANAMBRA', 'AWKA NORTH'),
(75, 'ANAMBRA', 'AWKA SOUTH'),
(76, 'ANAMBRA', 'DUNUKOFIA'),
(77, 'ANAMBRA', 'EKWUSIGO'),
(78, 'ANAMBRA', 'IDEMILI NORTH'),
(79, 'ANAMBRA', 'IDEMILI SOUTH'),
(80, 'ANAMBRA', 'IHIALA'),
(81, 'ANAMBRA', 'NJIKOKA'),
(82, 'ANAMBRA', 'NNEWI NORTH'),
(83, 'ANAMBRA', 'NNEWI SOUTH'),
(84, 'ANAMBRA', 'OGBARU'),
(85, 'ANAMBRA', 'ONITSHA NORTH'),
(86, 'ANAMBRA', 'ONITSHA SOUTH'),
(87, 'ANAMBRA', 'ORUMBA NORTH'),
(88, 'ANAMBRA', 'ORUMBA SOUTH'),
(89, 'ANAMBRA', 'OYI'),
(90, 'BAUCHI', 'ALKALERE'),
(91, 'BAUCHI', 'BAUCHI'),
(92, 'BAUCHI', 'BOGORO'),
(93, 'BAUCHI', 'DAMBAM'),
(94, 'BAUCHI', 'DARAZO'),
(95, 'BAUCHI', 'DASS'),
(96, 'BAUCHI', 'GAMAWA'),
(97, 'BAUCHI', 'GANJUWA'),
(98, 'BAUCHI', 'GIADE'),
(99, 'BAUCHI', 'ITAS/GADAU'),
(100, 'BAUCHI', 'JAMA ARE'),
(101, 'BAUCHI', 'KATAGUM'),
(102, 'BAUCHI', 'KIRFI'),
(103, 'BAUCHI', 'MISAU'),
(104, 'BAUCHI', 'NINGI'),
(105, 'BAUCHI', 'SHIRA'),
(106, 'BAUCHI', 'TAFAWA BALEWA'),
(107, 'BAUCHI', 'TORO'),
(108, 'BAUCHI', 'WARJI'),
(109, 'BAUCHI', 'ZAKI'),
(110, 'BAYELSA', 'BRASS'),
(111, 'BAYELSA', 'EKEREMOR'),
(112, 'BAYELSA', 'KOLOKUMA/OPOKUMA'),
(113, 'BAYELSA', 'NEMBE'),
(114, 'BAYELSA', 'OGBIA'),
(115, 'BAYELSA', 'SAGBAMA'),
(116, 'BAYELSA', 'SOUTHERN IJAW'),
(117, 'BAYELSA', 'YENAGOA'),
(118, 'BENUE', 'ADO'),
(119, 'BENUE', 'AGATU'),
(120, 'BENUE', 'APA'),
(121, 'BENUE', 'BURUKU'),
(122, 'BENUE', 'GBOKO'),
(123, 'BENUE', 'GUMA'),
(124, 'BENUE', 'GWER EAST'),
(125, 'BENUE', 'GWER WEST'),
(126, 'BENUE', 'KATSINA-ALA'),
(127, 'BENUE', 'KONSHISHA'),
(128, 'BENUE', 'KWANDE'),
(129, 'BENUE', 'LOGO'),
(130, 'BENUE', 'MAKURDI'),
(131, 'BENUE', 'OBI'),
(132, 'BENUE', 'OGBADIBO'),
(133, 'BENUE', 'OJU'),
(134, 'BENUE', 'OHIMINI'),
(135, 'BENUE', 'OKPOKWU'),
(136, 'BENUE', 'OTUKPO'),
(137, 'BENUE', 'TARKA'),
(138, 'BENUE', 'UKUM'),
(139, 'BENUE', 'USHONGO'),
(140, 'BENUE', 'VENDEIKYA'),
(141, 'BORNO', 'ABADAM'),
(142, 'BORNO', 'ASKIRA/UBA'),
(143, 'BORNO', 'BAMA'),
(144, 'BORNO', 'BAYO'),
(145, 'BORNO', 'BIU'),
(146, 'BORNO', 'CHIBOK'),
(147, 'BORNO', 'DAMBOA'),
(148, 'BORNO', 'DIKWA'),
(149, 'BORNO', 'GUBIO'),
(150, 'BORNO', 'GUZAMALA'),
(151, 'BORNO', 'GWOZA'),
(152, 'BORNO', 'HAWUL'),
(153, 'BORNO', 'JERE'),
(154, 'BORNO', 'KAGA'),
(155, 'BORNO', 'KALA BALGE'),
(156, 'BORNO', 'KONDUGA'),
(157, 'BORNO', 'KUKAWA'),
(158, 'BORNO', 'KWAYA KUSAR'),
(159, 'BORNO', 'MAFA'),
(160, 'BORNO', 'MAGUMERI'),
(161, 'BORNO', 'MAIDUGURI'),
(162, 'BORNO', 'MARTE'),
(163, 'BORNO', 'MOBBAR'),
(164, 'BORNO', 'MONGUNO'),
(165, 'BORNO', 'NGALA'),
(166, 'BORNO', 'NGANZAI'),
(167, 'BORNO', 'SHANI'),
(168, 'CROSS-RIVER', 'ABI'),
(169, 'CROSS-RIVER', 'AKAMKPA'),
(170, 'CROSS-RIVER', 'AKPABUYO'),
(171, 'CROSS-RIVER', 'BAKASSI'),
(172, 'CROSS-RIVER', 'BEKWARRA'),
(173, 'CROSS-RIVER', 'BIASE'),
(174, 'CROSS-RIVER', 'BOKI'),
(175, 'CROSS-RIVER', 'CALABAR MUNICIPALITY'),
(176, 'CROSS-RIVER', 'CALABAR SOUTH'),
(177, 'CROSS-RIVER', 'ETUNG'),
(178, 'CROSS-RIVER', 'IKOM'),
(179, 'CROSS-RIVER', 'OBANLIKU'),
(180, 'CROSS-RIVER', 'OBUBRA'),
(181, 'CROSS-RIVER', 'OBUDU'),
(182, 'CROSS-RIVER', 'ODUKPANI'),
(183, 'CROSS-RIVER', 'OGOJA'),
(184, 'CROSS-RIVER', 'YAKURR'),
(185, 'CROSS-RIVER', 'YALA'),
(186, 'DELTA', 'ANIOCHA NORTH'),
(187, 'DELTA', 'ANIOCHA SOUTH'),
(188, 'DELTA', 'BOMADI'),
(189, 'DELTA', 'BURUTU'),
(190, 'DELTA', 'ETHIOPE EAST'),
(191, 'DELTA', 'ETHIOPE WEST'),
(192, 'DELTA', 'IKA NORTH EAST'),
(193, 'DELTA', 'IKA SOUTH'),
(194, 'DELTA', 'ISOKO NORTH'),
(195, 'DELTA', 'ISOKO SOUTH'),
(196, 'DELTA', 'NDOKWA EAST'),
(197, 'DELTA', 'NDOKWA WEST'),
(198, 'DELTA', 'OKPE'),
(199, 'DELTA', 'OSHIMILI NORTH'),
(200, 'DELTA', 'OSHIMILI SOUTH'),
(201, 'DELTA', 'PATANI'),
(202, 'DELTA', 'SAPELE'),
(203, 'DELTA', 'UDU'),
(204, 'DELTA', 'UGHELLI NORTH'),
(205, 'DELTA', 'UGHELLI SOUTH'),
(206, 'DELTA', 'UKWUANI'),
(207, 'DELTA', 'UVWIE'),
(208, 'DELTA', 'WARRI NORTH'),
(209, 'DELTA', 'WARRI SOUTH'),
(210, 'DELTA', 'WARRI SOUTH WEST'),
(211, 'EBONYI', 'ABAKALIKI'),
(212, 'EBONYI', 'AFIKPO NORTH'),
(213, 'EBONYI', 'AFIKPO SOUTH'),
(214, 'EBONYI', 'EBONYI'),
(215, 'EBONYI', 'EZZA NORTH'),
(216, 'EBONYI', 'EZZA SOUTH'),
(217, 'EBONYI', 'IKWO'),
(218, 'EBONYI', 'ISHIELU'),
(219, 'EBONYI', 'IVO'),
(220, 'EBONYI', 'IZZI'),
(221, 'EBONYI', 'OHAOZARA'),
(222, 'EBONYI', 'OHAUKWU'),
(223, 'EBONYI', 'ONICHA'),
(224, 'EDO', 'AKOKO EDO'),
(225, 'EDO', 'EGOR'),
(226, 'EDO', 'ESAN CENTRAL'),
(227, 'EDO', 'ESAN NORTH EAST'),
(228, 'EDO', 'ESAN SOUTH EAST'),
(229, 'EDO', 'ESAN WEST'),
(230, 'EDO', 'ETSAKO CENTRAL'),
(231, 'EDO', 'ETSAKO EAST'),
(232, 'EDO', 'ETSAKO WEST'),
(233, 'EDO', 'IGUEBEN'),
(234, 'EDO', 'IKPOBA/OKHA'),
(235, 'EDO', 'OREDO'),
(236, 'EDO', 'ORHIONMWONOVIA NORTH EAST'),
(237, 'EDO', 'OVIA SOUTH WEST'),
(238, 'EDO', 'OWAN EAST'),
(239, 'EDO', 'OWAN WEST'),
(240, 'EDO', 'UHUNMWODE'),
(241, 'EKITI', 'ADO EKITI'),
(242, 'EKITI', 'EFON'),
(243, 'EKITI', 'EKITI EAST'),
(244, 'EKITI', 'EKITI WEST'),
(245, 'EKITI', 'EKITI SOUTH WEST'),
(246, 'EKITI', 'EMURE'),
(247, 'EKITI', 'GBOYIN'),
(248, 'EKITI', 'IDO/OSI'),
(249, 'EKITI', 'IJERO'),
(250, 'EKITI', 'IKERE'),
(251, 'EKITI', 'IKOLE'),
(252, 'EKITI', 'ILEJEMEJE'),
(253, 'EKITI', 'IREPODU/IFELODUN'),
(254, 'EKITI', 'ISE/ORUN'),
(255, 'EKITI', 'MOBA'),
(256, 'EKITI', 'OYE'),
(257, 'ENUGU', 'ANINRI'),
(258, 'ENUGU', 'AWGU'),
(259, 'ENUGU', 'ENUGU EAST'),
(260, 'ENUGU', 'ENUGU NORTH'),
(261, 'ENUGU', 'ENUGU SOUTH'),
(262, 'ENUGU', 'EZEAGU'),
(263, 'ENUGU', 'IGBO ETITI'),
(264, 'ENUGU', 'IGBO EZE NORTH'),
(265, 'ENUGU', 'IGBO EZE SOUTH'),
(266, 'ENUGU', 'ISI UZO'),
(267, 'ENUGU', 'NKANU EAST'),
(268, 'ENUGU', 'NKANU WEST'),
(269, 'ENUGU', 'NSUKKA'),
(270, 'ENUGU', 'OJI RIVER'),
(271, 'ENUGU', 'UDENU'),
(272, 'ENUGU', 'UDI'),
(273, 'ENUGU', 'UZO UWANI'),
(274, 'FCT', 'ABAJI'),
(275, 'FCT', 'BWARI'),
(276, 'FCT', 'GWAGWALADA'),
(277, 'FCT', 'KUJE'),
(278, 'FCT', 'KWALI'),
(279, 'FCT', 'MUNICIPAL'),
(280, 'GOMBE', 'AKKO'),
(281, 'GOMBE', 'BALANGA'),
(282, 'GOMBE', 'BILLIRI'),
(283, 'GOMBE', 'DUKKU'),
(284, 'GOMBE', 'FUNAKAYE'),
(285, 'GOMBE', 'GOMBE'),
(286, 'GOMBE', 'KALTUNGO'),
(287, 'GOMBE', 'KWAMI'),
(288, 'GOMBE', 'NAFADA'),
(289, 'GOMBE', 'SHONGOM'),
(290, 'GOMBE', 'YAMALTU/DEBA'),
(291, 'IMO', 'ABOH MBAISE'),
(292, 'IMO', 'AHAIAZU MBAISE'),
(293, 'IMO', 'EHIME MBANO'),
(294, 'IMO', 'EZINIHITTE MBAISE'),
(295, 'IMO', 'IDEATO NORTH'),
(296, 'IMO', 'IDEATO SOUTH'),
(297, 'IMO', 'IHITTE/UBOMA (ISINWEKE)'),
(298, 'IMO', 'IKEDURU (IHO)'),
(299, 'IMO', 'ISIALA MBANO (UMUELEMAI)'),
(300, 'IMO', 'ISU (UMUNDUGBA)'),
(301, 'IMO', 'MBAITOLU (NWAORIEUBI)'),
(302, 'IMO', 'NGOW OKPALA (UMUNEKE)'),
(303, 'IMO', 'NJABA (NNENASA)'),
(304, 'IMO', 'NWANGELE (ONUNWANGELE) AMAIGBO'),
(305, 'IMO', 'NKWERRE'),
(306, 'IMO', 'OBOWO (OTOKO)'),
(307, 'IMO', 'OGUTA (OGUTA)'),
(308, 'IMO', 'OHAJI/EGBEMA (MMAHUEGBEMA)'),
(309, 'IMO', 'OKIGWE (OKIGWE)'),
(310, 'IMO', 'ONUIMO'),
(311, 'IMO', 'ORLU'),
(312, 'IMO', 'ORSU (AWOIDEMILI)'),
(313, 'IMO', 'ORU EAST'),
(314, 'IMO', 'ORU-WEST (MGBIDI)'),
(315, 'IMO', 'OWERRI-URBAN (OWERRI)'),
(316, 'IMO', 'OWERRI NORTH (ORIE URATTA)'),
(317, 'IMO', 'OWERRI WEST (UMUGUMA)'),
(318, 'JIGAWA', 'AUYO'),
(319, 'JIGAWA', 'BABURA'),
(320, 'JIGAWA', 'BIRNIN-KUDU'),
(321, 'JIGAWA', 'BIRNIWA'),
(322, 'JIGAWA', 'BUJI'),
(323, 'JIGAWA', 'DUTSE'),
(324, 'JIGAWA', 'GARKI'),
(325, 'JIGAWA', 'GAGARAWA'),
(326, 'JIGAWA', 'GUMEL'),
(327, 'JIGAWA', 'GURI'),
(328, 'JIGAWA', 'GWARAM'),
(329, 'JIGAWA', 'GWIWA'),
(330, 'JIGAWA', 'HADEJIA'),
(331, 'JIGAWA', 'JAHUN'),
(332, 'JIGAWA', 'KAFIN-HAUSA'),
(333, 'JIGAWA', 'KAUGAMA'),
(334, 'JIGAWA', 'KAZAURE'),
(335, 'JIGAWA', 'K/KASAMMA'),
(336, 'JIGAWA', 'KIYAWA'),
(337, 'JIGAWA', 'MAIGATARI'),
(338, 'JIGAWA', 'M/MADORI'),
(339, 'JIGAWA', 'MIGA'),
(340, 'JIGAWA', 'RINGIM'),
(341, 'JIGAWA', 'RONI'),
(342, 'JIGAWA', 'S/TANKARKAR'),
(343, 'JIGAWA', 'TAURA'),
(344, 'JIGAWA', 'YANKWASHI'),
(345, 'KADUNA', 'BIRNIN GWARI'),
(346, 'KADUNA', 'CHIKUN'),
(347, 'KADUNA', 'GIWA'),
(348, 'KADUNA', 'IGABI'),
(349, 'KADUNA', 'IKARA'),
(350, 'KADUNA', 'JABA'),
(351, 'KADUNA', 'JEMA A'),
(352, 'KADUNA', 'KACHIA'),
(353, 'KADUNA', 'KADUNA NORTH'),
(354, 'KADUNA', 'KADUNA SOUTH'),
(355, 'KADUNA', 'KAGARKO'),
(356, 'KADUNA', 'KAJURU'),
(357, 'KADUNA', 'KAURA'),
(358, 'KADUNA', 'KAURU'),
(359, 'KADUNA', 'KUBAU'),
(360, 'KADUNA', 'KUDAN'),
(361, 'KADUNA', 'LERE'),
(362, 'KADUNA', 'MAKARFI'),
(363, 'KADUNA', 'SABON GARI'),
(364, 'KADUNA', 'SANGA'),
(365, 'KADUNA', 'SOBA'),
(366, 'KADUNA', 'ZAGON KATAF'),
(367, 'KADUNA', 'ZARIA'),
(368, 'KANO', 'AJINGI'),
(369, 'KANO', 'ALBASU'),
(370, 'KANO', 'BAGWAI'),
(371, 'KANO', 'BEBEJI'),
(372, 'KANO', 'BICHI'),
(373, 'KANO', 'BUNKURE'),
(374, 'KANO', 'DALA'),
(375, 'KANO', 'DANBATTA'),
(376, 'KANO', 'DAWAKIN KUDU'),
(377, 'KANO', 'DAWAKIN TOFA'),
(378, 'KANO', 'DOGUWA'),
(379, 'KANO', 'FAGGE'),
(380, 'KANO', 'GABASAWA'),
(381, 'KANO', 'GARKO'),
(382, 'KANO', 'GARUN MALAM'),
(383, 'KANO', 'GAYA'),
(384, 'KANO', 'GEZAWA'),
(385, 'KANO', 'GWALE'),
(386, 'KANO', 'GWARZO'),
(387, 'KANO', 'KABO'),
(388, 'KANO', 'KANO MUNICIPAL'),
(389, 'KANO', 'KARAYE'),
(390, 'KANO', 'KIBIYA'),
(391, 'KANO', 'KIRU'),
(392, 'KANO', 'KUMBOTSO'),
(393, 'KANO', 'KUNCHI'),
(394, 'KANO', 'KURA'),
(395, 'KANO', 'MAKODA'),
(396, 'KANO', 'MINJIBIR'),
(397, 'KANO', 'MADOBI'),
(398, 'KANO', 'NASARAWA'),
(399, 'KANO', 'RANO'),
(400, 'KANO', 'RIMIN GADO'),
(401, 'KANO', 'ROGO'),
(402, 'KANO', 'SHANONO'),
(403, 'KANO', 'SUMAILA'),
(404, 'KANO', 'TAKAI'),
(405, 'KANO', 'TARAUNI'),
(406, 'KANO', 'TOFA'),
(407, 'KANO', 'TUDUN WADA'),
(408, 'KANO', 'TSANYAWA'),
(409, 'KANO', 'UNGOGO'),
(410, 'KANO', 'WARAWA'),
(411, 'KANO', 'WUDIL'),
(412, 'KATSINA', 'BAKORI'),
(413, 'KATSINA', 'BATAGARAWA'),
(414, 'KATSINA', 'BATSARI'),
(415, 'KATSINA', 'BAURE'),
(416, 'KATSINA', 'BINDAWA'),
(417, 'KATSINA', 'CHARANCHI'),
(418, 'KATSINA', 'DANDUME'),
(419, 'KATSINA', 'DANJA'),
(420, 'KATSINA', 'DAN MUSA'),
(421, 'KATSINA', 'DAURA'),
(422, 'KATSINA', 'DUTSI'),
(423, 'KATSINA', 'DUTSIN-MA'),
(424, 'KATSINA', 'FASKARI'),
(425, 'KATSINA', 'FUNTUA'),
(426, 'KATSINA', 'INGAWA'),
(427, 'KATSINA', 'JIBIA'),
(428, 'KATSINA', 'KAFUR'),
(429, 'KATSINA', 'KAITA'),
(430, 'KATSINA', 'KANKARA'),
(431, 'KATSINA', 'KANKA'),
(432, 'KATSINA', 'KATSINA'),
(433, 'KATSINA', 'KURFI'),
(434, 'KATSINA', 'KUSADA'),
(435, 'KATSINA', 'MAI ADUA'),
(436, 'KATSINA', 'MALUMFASHI'),
(437, 'KATSINA', 'MANI'),
(438, 'KATSINA', 'MASHI'),
(439, 'KATSINA', 'MATAZU'),
(440, 'KATSINA', 'MUSAWA'),
(441, 'KATSINA', 'RIMI'),
(442, 'KATSINA', 'SABUWA'),
(443, 'KATSINA', 'SAFANA'),
(444, 'KATSINA', 'SANDAMU'),
(445, 'KATSINA', 'ZANGO'),
(446, 'KEBBI', 'ALIERO'),
(447, 'KEBBI', 'AREWA'),
(448, 'KEBBI', 'ARGUNGU'),
(449, 'KEBBI', 'AUGIE'),
(450, 'KEBBI', 'BAGUDO'),
(451, 'KEBBI', 'BIRNIN KEBBI'),
(452, 'KEBBI', 'BUNZA'),
(453, 'KEBBI', 'DANDI'),
(454, 'KEBBI', 'FAKAI'),
(455, 'KEBBI', 'GWANDU'),
(456, 'KEBBI', 'KALGO'),
(457, 'KEBBI', 'KOKO/BESSE'),
(458, 'KEBBI', 'MAIYAMA'),
(459, 'KEBBI', 'NGASKI'),
(460, 'KEBBI', 'SAKABA'),
(461, 'KEBBI', 'SHANGA'),
(462, 'KEBBI', 'SURU'),
(463, 'KEBBI', 'WASAGU/DANKO'),
(464, 'KEBBI', 'YAURI'),
(465, 'KEBBI', 'ZURU'),
(466, 'KOGI', 'ADAVI'),
(467, 'KOGI', 'AJAOKUTA'),
(468, 'KOGI', 'ANKPA'),
(469, 'KOGI', 'BASSA'),
(470, 'KOGI', 'DEKINA'),
(471, 'KOGI', 'IBAJI'),
(472, 'KOGI', 'IDAH'),
(473, 'KOGI', 'IGALA-MELA'),
(474, 'KOGI', 'IJUMU'),
(475, 'KOGI', 'KABBA/BUNU'),
(476, 'KOGI', 'KOGI(KK)'),
(477, 'KOGI', 'LOKOJA'),
(478, 'KOGI', 'MOPA-MORO'),
(479, 'KOGI', 'OFU'),
(480, 'KOGI', 'OGORI MAGONGO'),
(481, 'KOGI', 'OKEHI'),
(482, 'KOGI', 'OKEN'),
(483, 'KOGI', 'OLAMABORO'),
(484, 'KOGI', 'OMALA'),
(485, 'KOGI', 'YAGBA EAST'),
(486, 'KOGI', 'YAGBA WEST'),
(487, 'KWARA', 'ASA'),
(488, 'KWARA', 'BARUTEN'),
(489, 'KWARA', 'EDU'),
(490, 'KWARA', 'EKITI'),
(491, 'KWARA', 'IFELODUN'),
(492, 'KWARA', 'ILORIN EAST'),
(493, 'KWARA', 'ILORIN SOUTH'),
(494, 'KWARA', 'ILORIN WEST'),
(495, 'KWARA', 'IREPODUN'),
(496, 'KWARA', 'ISIN'),
(497, 'KWARA', 'KALAMA'),
(498, 'KWARA', 'MORO'),
(499, 'KWARA', 'OFFA'),
(500, 'KWARA', 'OKE-ERO'),
(501, 'KWARA', 'OYUN'),
(502, 'KWARA', 'PATIGI'),
(503, 'LAGOS', 'AGEGE'),
(504, 'LAGOS', 'AJEROMI/IFELODUN'),
(505, 'LAGOS', 'ALIMOSHO'),
(506, 'LAGOS', 'AMUWO-ODOFIN'),
(507, 'LAGOS', 'APAPA'),
(508, 'LAGOS', 'BADAGRY'),
(509, 'LAGOS', 'EPE'),
(510, 'LAGOS', 'ETI-OSA'),
(511, 'LAGOS', 'IBEJU/LEKKI'),
(512, 'LAGOS', 'IFAKO-IJAYE'),
(513, 'LAGOS', 'IKEJA'),
(514, 'LAGOS', 'IKORODU'),
(515, 'LAGOS', 'KOSOFE'),
(516, 'LAGOS', 'LAGOS ISLAND'),
(517, 'LAGOS', 'LAGOS MAINLAND'),
(518, 'LAGOS', 'MUSHIN'),
(519, 'LAGOS', 'OJO'),
(520, 'LAGOS', 'OSHODI-ISOLO'),
(521, 'LAGOS', 'SHOMOLU'),
(522, 'LAGOS', 'SURULERE'),
(523, 'NASSARAWA', 'AKWANGA'),
(524, 'NASSARAWA', 'AWE'),
(525, 'NASSARAWA', 'DOMA'),
(526, 'NASSARAWA', 'KARU'),
(527, 'NASSARAWA', 'KEANA'),
(528, 'NASSARAWA', 'KEFFI'),
(529, 'NASSARAWA', 'KOKONA'),
(530, 'NASSARAWA', 'LAFIA'),
(531, 'NASSARAWA', 'NASARAWA'),
(532, 'NASSARAWA', 'NASARAWA/EGGON'),
(533, 'NASSARAWA', 'OBI'),
(534, 'NASSARAWA', 'TOTO'),
(535, 'NASSARAWA', 'WAMBA'),
(536, 'NIGER', 'AGAIE'),
(537, 'NIGER', 'AGAIE'),
(538, 'NIGER', 'AGWARA'),
(539, 'NIGER', 'BIDA'),
(540, 'NIGER', 'BORGU'),
(541, 'NIGER', 'BOSSO'),
(542, 'NIGER', 'CHANCHAGA'),
(543, 'NIGER', 'EDATI'),
(544, 'NIGER', 'GBAKO'),
(545, 'NIGER', 'GURARA'),
(546, 'NIGER', 'KATCHA'),
(547, 'NIGER', 'KONTAGORA'),
(548, 'NIGER', 'LAPAI'),
(549, 'NIGER', 'LAVUN'),
(550, 'NIGER', 'MAGAMA'),
(551, 'NIGER', 'MARIGA'),
(552, 'NIGER', 'MASHEGU'),
(553, 'NIGER', 'MOKWA'),
(554, 'NIGER', 'MUNYA'),
(555, 'NIGER', 'PAIKORO'),
(556, 'NIGER', 'RAFI'),
(557, 'NIGER', 'RIJAU'),
(558, 'NIGER', 'SHIRORO'),
(559, 'NIGER', 'SULEJA'),
(560, 'NIGER', 'TAFA'),
(561, 'NIGER', 'WUSHISHI'),
(562, 'OGUN', 'ABEOKUTA NORTH'),
(563, 'OGUN', 'ABEOKUTA SOUTH'),
(564, 'OGUN', 'ADO-ODO-OTA'),
(565, 'OGUN', 'EGBADO NORTH'),
(566, 'OGUN', 'EGBADO SOUTH'),
(567, 'OGUN', 'EWEKORO'),
(568, 'OGUN', 'IFO'),
(569, 'OGUN', 'IJEBU EAST'),
(570, 'OGUN', 'IJEBU NORTH'),
(571, 'OGUN', 'IJEBU NORTH EAST'),
(572, 'OGUN', 'IJEBU ODE'),
(573, 'OGUN', 'IKENNE'),
(574, 'OGUN', 'IMEKO/AFON'),
(575, 'OGUN', 'IPOKIA'),
(576, 'OGUN', 'OBAFEMI/OWODE'),
(577, 'OGUN', 'ODEDA'),
(578, 'OGUN', 'ODOGBOLU'),
(579, 'OGUN', 'OGUN WATER SIDE'),
(580, 'OGUN', 'REMO NORTH'),
(581, 'OGUN', 'SAGAMU'),
(582, 'ONDO', 'AKOKO NORTH EAST'),
(583, 'ONDO', 'AKOKO NORTH WEST'),
(584, 'ONDO', 'AKOKO SOUTH EAST'),
(585, 'ONDO', 'AKOKO SOUTH WEST'),
(586, 'ONDO', 'AKURE NORTH'),
(587, 'ONDO', 'AKURE SOUTH'),
(588, 'ONDO', 'ESE-ODO'),
(589, 'ONDO', 'IDANRE'),
(590, 'ONDO', 'IFEDORE'),
(591, 'ONDO', 'ILAJE'),
(592, 'ONDO', 'ILEOLUJI/OKEIGBO'),
(593, 'ONDO', 'IRELE'),
(594, 'ONDO', 'ODIGBO'),
(595, 'ONDO', 'OKITIPUPA'),
(596, 'ONDO', 'ONDO EAST'),
(597, 'ONDO', 'ONDO WEST'),
(598, 'ONDO', 'OSE'),
(599, 'ONDO', 'OWO'),
(600, 'OSUN', 'ATAKUMOSA EAST'),
(601, 'OSUN', 'ATAKUNMOSA WEST'),
(602, 'OSUN', 'AYEDADE'),
(603, 'OSUN', 'AYEDIRE'),
(604, 'OSUN', 'BOLUWA-DURO'),
(605, 'OSUN', 'BORIPE'),
(606, 'OSUN', 'EDE NORTH'),
(607, 'OSUN', 'EDE SOUTH'),
(608, 'OSUN', 'EGBEDORE'),
(609, 'OSUN', 'EJIGBO'),
(610, 'OSUN', 'IFE CENTRAL'),
(611, 'OSUN', 'IFEDAYO'),
(612, 'OSUN', 'IFE EAST'),
(613, 'OSUN', 'IFELODUN'),
(614, 'OSUN', 'IFE NORTH'),
(615, 'OSUN', 'IFE SOUTH'),
(616, 'OSUN', 'ILA'),
(617, 'OSUN', 'ILESA EAST'),
(618, 'OSUN', 'ILESA WEST'),
(619, 'OSUN', 'IREPODUN'),
(620, 'OSUN', 'IREWOLE'),
(621, 'OSUN', 'ISOKAN'),
(622, 'OSUN', 'IWO'),
(623, 'OSUN', 'OBOKUN'),
(624, 'OSUN', 'ODO-OTIN'),
(625, 'OSUN', 'OLORUNDA'),
(626, 'OSUN', 'ORIADE'),
(627, 'OSUN', 'OROLU'),
(628, 'OSUN', 'OSOGBO'),
(629, 'OYO', 'AFIJIO'),
(630, 'OYO', 'AKINYELE'),
(631, 'OYO', 'ATIBA'),
(632, 'OYO', 'ATISBO'),
(633, 'OYO', 'EGBEDA'),
(634, 'OYO', 'IBADAN NORTH'),
(635, 'OYO', 'IBADAN NORTH EAST'),
(636, 'OYO', 'IBADAN NORTH WEST'),
(637, 'OYO', 'IBADAN SOUTH EAST'),
(638, 'OYO', 'IBADAN SOUTH WEST'),
(639, 'OYO', 'IBARAPA CENTRAL'),
(640, 'OYO', 'IBARAPA EAST'),
(641, 'OYO', 'IBARAPA NORTH'),
(642, 'OYO', 'IDO'),
(643, 'OYO', 'IREPO'),
(644, 'OYO', 'ISEYIN'),
(645, 'OYO', 'ITESIWAJU'),
(646, 'OYO', 'IWAJOWA'),
(647, 'OYO', 'KAJOLA'),
(648, 'OYO', 'LAGELU'),
(649, 'OYO', 'OGBOMOSO NORTH'),
(650, 'OYO', 'OGBOMOSO'),
(651, 'OYO', 'OGO-OLUWA'),
(652, 'OYO', 'OLORUNSOGO'),
(653, 'OYO', 'OLUYOLE'),
(654, 'OYO', 'ONA-ARA'),
(655, 'OYO', 'OORELOPE'),
(656, 'OYO', 'ORIIRE'),
(657, 'OYO', 'OYO EAST'),
(658, 'OYO', 'OYO WEST'),
(659, 'OYO', 'SAKI EAST'),
(660, 'OYO', 'SAKI WEST'),
(661, 'OYO', 'SURULERE'),
(662, 'PLATEAU', 'BARKIN LADI'),
(663, 'PLATEAU', 'BASSA'),
(664, 'PLATEAU', 'BOKKOS'),
(665, 'PLATEAU', 'JOS EAST'),
(666, 'PLATEAU', 'JOS NORTH'),
(667, 'PLATEAU', 'JOS SOUTH'),
(668, 'PLATEAU', 'KANAM'),
(669, 'PLATEAU', 'KANKE'),
(670, 'PLATEAU', 'LANG-TANG NORTH'),
(671, 'PLATEAU', 'LANG-TANG SOUTH'),
(672, 'PLATEAU', 'MANGU'),
(673, 'PLATEAU', 'MIKANG'),
(674, 'PLATEAU', 'PANKSHIN'),
(675, 'PLATEAU', 'QU AN PAN'),
(676, 'PLATEAU', 'RIYOM'),
(677, 'PLATEAU', 'SHENDAM'),
(678, 'PLATEAU', 'WASE'),
(679, 'RIVERS', 'ABUA-ODUAL'),
(680, 'RIVERS', 'AHODA EAST'),
(681, 'RIVERS', 'AHOADA WEST'),
(682, 'RIVERS', 'AKUKUTORU'),
(683, 'RIVERS', 'ANDONI'),
(684, 'RIVERS', 'ASARI-TORU'),
(685, 'RIVERS', 'BONNY'),
(686, 'RIVERS', 'DEGEMA'),
(687, 'RIVERS', 'ELEME'),
(688, 'RIVERS', 'EMOHUA'),
(689, 'RIVERS', 'ETCHE'),
(690, 'RIVERS', 'GOKANA'),
(691, 'RIVERS', 'IKWERRE'),
(692, 'RIVERS', 'KHANA'),
(693, 'RIVERS', 'OBIO/AKPOR'),
(694, 'RIVERS', 'OGBA/EGBEMA/NDONI'),
(695, 'RIVERS', 'OGU/BOLO'),
(696, 'RIVERS', 'OKRIKA'),
(697, 'RIVERS', 'OMUMA'),
(698, 'RIVERS', 'OPOBO/NKORO'),
(699, 'RIVERS', 'OYIGBO'),
(700, 'RIVERS', 'PORT HARCOURT'),
(701, 'RIVERS', 'TAI'),
(702, 'SOKOTO', 'BENJI'),
(703, 'SOKOTO', 'BODINGA'),
(704, 'SOKOTO', 'DANGE/SHUNI'),
(705, 'SOKOTO', 'GADA'),
(706, 'SOKOTO', 'GORONYO'),
(707, 'SOKOTO', 'GUDU'),
(708, 'SOKOTO', 'GWADABAWA'),
(709, 'SOKOTO', 'ILLELA'),
(710, 'SOKOTO', 'ISA'),
(711, 'SOKOTO', 'KWARE'),
(712, 'SOKOTO', 'KEBBE'),
(713, 'SOKOTO', 'RABAH'),
(714, 'SOKOTO', 'S/BIRNI'),
(715, 'SOKOTO', 'SHAGARI'),
(716, 'SOKOTO', 'SILAME'),
(717, 'SOKOTO', 'SOKOTO NORTH'),
(718, 'SOKOTO', 'SOKOTO SOUTH'),
(719, 'SOKOTO', 'TAMBUWAL'),
(720, 'SOKOTO', 'TANGAZA'),
(721, 'SOKOTO', 'TURETA'),
(722, 'SOKOTO', 'WAMAKKO'),
(723, 'SOKOTO', 'WURNO'),
(724, 'SOKOTO', 'YABO'),
(725, 'TARABA', 'ARDO KOLA'),
(726, 'TARABA', 'BALI'),
(727, 'TARABA', 'DONGA'),
(728, 'TARABA', 'GASHAKA'),
(729, 'TARABA', 'GASSOL'),
(730, 'TARABA', 'IBI'),
(731, 'TARABA', 'JALINGO'),
(732, 'TARABA', 'LAMIDO'),
(733, 'TARABA', 'KURMI'),
(734, 'TARABA', 'LAU'),
(735, 'TARABA', 'SARDAUNA'),
(736, 'TARABA', 'TAKUM'),
(737, 'TARABA', 'USSA'),
(738, 'TARABA', 'WUKARI'),
(739, 'TARABA', 'YORRO'),
(740, 'TARABA', 'ZING'),
(741, 'YOBE', 'BADE'),
(742, 'YOBE', 'BURSUARI'),
(743, 'YOBE', 'DAMATURU'),
(744, 'YOBE', 'FIKA'),
(745, 'YOBE', 'FUNE'),
(746, 'YOBE', 'GEIDAM'),
(747, 'YOBE', 'GUJBA'),
(748, 'YOBE', 'GULANI'),
(749, 'YOBE', 'JAKUSKO'),
(750, 'YOBE', 'KARASUWA'),
(751, 'YOBE', 'MACHINA'),
(752, 'YOBE', 'NANGERE'),
(753, 'YOBE', 'NGURU'),
(754, 'YOBE', 'POTISKUM'),
(755, 'YOBE', 'TARMUA'),
(756, 'YOBE', 'YUNUSARI'),
(757, 'YOBE', 'YUNUFARI'),
(758, 'ZAMFARA', 'ANKA'),
(759, 'ZAMFARA', 'BAKURA'),
(760, 'ZAMFARA', 'BIRNIN MAGAJI'),
(761, 'ZAMFARA', 'BUKKUYUM'),
(762, 'ZAMFARA', 'BUNGUDU'),
(763, 'ZAMFARA', 'GUMMI'),
(764, 'ZAMFARA', 'GUASAU'),
(765, 'ZAMFARA', 'KAURA NAMODA'),
(766, 'ZAMFARA', 'MARADUN'),
(767, 'ZAMFARA', 'MARU'),
(768, 'ZAMFARA', 'SHINKAFI'),
(769, 'ZAMFARA', 'TALATA MAFARA'),
(770, 'ZAMFARA', 'TSAFE'),
(771, 'ZAMFARA', 'ZURMI');

-- --------------------------------------------------------

--
-- Table structure for table `s_search`
--

CREATE TABLE `s_search` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `user_code` varchar(200) NOT NULL,
  `pro_code` varchar(200) NOT NULL,
  `s_date` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `location` text NOT NULL,
  `occupation` text NOT NULL,
  `fb_name` text NOT NULL,
  `tw_name` text NOT NULL,
  `int_name` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `about` text NOT NULL,
  `image` text NOT NULL,
  `ImageUrl` text NOT NULL,
  `fbpic` text NOT NULL,
  `fbid` text NOT NULL,
  `num` varchar(10) NOT NULL,
  `user_code` text NOT NULL,
  `google_id` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `pass_status` varchar(10) NOT NULL,
  `reg_date` varchar(100) NOT NULL,
  `reg_time` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `sms_code` varchar(20) NOT NULL,
  `user_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `location`, `occupation`, `fb_name`, `tw_name`, `int_name`, `gender`, `about`, `image`, `ImageUrl`, `fbpic`, `fbid`, `num`, `user_code`, `google_id`, `status`, `pass_status`, `reg_date`, `reg_time`, `type`, `sms_code`, `user_status`) VALUES
(1, 'Manny Peter', 'em.manny007@gmail.com', '', '', '', '', '', '', '', '', '', '', 'https://lh4.googleusercontent.com/-tQ2EGfpjSfQ/AAAAAAAAAAI/AAAAAAAAAAA/AKxrwcY-9nj0-KocyLgV6X_HMCUiH4J6og/s96-c/photo.jpg', '', '', '1', '5c1483a8afa42', '100700268752260571326', '0', '', 'Saturday 15th of December 2018 ', '5:31 AM', '', '', ''),
(2, 'Aboajah Emmanuel', 'aboajahemmanuel@gmail.com', '08065594627', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '', '', '', '', '', 'https://lh3.googleusercontent.com/-fJlDg1kMC9M/AAAAAAAAAAI/AAAAAAAAABM/e0InOcevrGY/s96-c/photo.jpg', '', '', '1', '5c14868d72bd7', '114467967331665920093', '1', '', 'Saturday 15th of December 2018 ', '5:43 AM', '', '', ''),
(3, 'Crespy Edo', 'crespy@gmail.com', '', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '', '', '', '', '1', '5c1628bd8a8c0', '', '1', '', 'Sunday 16th of December 2018 ', '11:28 AM', '', '', ''),
(4, 'Christ Imperial', 'ciwmnig@gmail.com', '5555555555555', '25d55ad283aa400af464c76d713c07ad', 'Oyedele Ogunniyi Street, Lagos, Nigeria', 'Good Doctor', '', '', '', '', 'am a good', '57347-WP_20170708_17_14_48_Pro.jpg', 'https://lh4.googleusercontent.com/-tLKamq4n41c/AAAAAAAAAAI/AAAAAAAAAAA/AKxrwcZe3Yj7CLtKCQTlYtM3-ypSaEtrTA/s96-c/photo.jpg', '', '', '1', '5c18f0efc8857', '114613091419101427727', '1', '', 'Tuesday 18th of December 2018 ', '2:06 PM', '', '', ''),
(8, 'emmanuel john', 'emmakoko2010@gmail.com', '', '', '', '', '', '', '', '', '', '', 'https://lh6.googleusercontent.com/-fsvAQ-XaOBU/AAAAAAAAAAI/AAAAAAAAAAA/AKxrwcbyZlbLSPw76hND1ZtoWVhrJFzguQ/s96-c/photo.jpg', '', '', '1', '5c28955e83372', '110158065871907804691', '1', '', 'Sunday 30th of December 2018 ', '10:52 AM', '', '', ''),
(9, 'E3 Technololgy', 'e3techngltd@gmail.com', '08065594627', '1234', '', '', '', '', '', '', '', '', 'https://lh5.googleusercontent.com/-HVY1rPZHM1A/AAAAAAAAAAI/AAAAAAAAABE/w3H34F_q9xw/s96-c/photo.jpg', '', '', '1', '5c28c0d2f1741', '115457659438968801694', '1', '', 'Sunday 30th of December 2018 ', '1:57 PM', '', '', ''),
(10, 'Maze Eme', 'guy@e3tech.com.ng', '08065594627', '123456', '', '', '', '', '', '', '', '', '', '{\"height\":50,\"is_silhouette\":true,\"url\":\"https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=347897332666808&height=50&width=50&ext=1552137404&hash=AeQyRDaMMWO8Zo2B\",\"width\":50}', '347897332666808', '1', '5c28c4583e5c3', '', '1', '', 'Sunday 30th of December 2018 ', '2:12 PM', '', '', ''),
(12, 'Aboajah Emmanuel Nduka', 'emmakoko2009@yahoo.com', '6665555', '123456', '', '', '', '', '', '', '', '88283-hb.png', '', '{\"height\":50,\"is_silhouette\":false,\"url\":\"https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=2543783618971591&height=50&width=50&ext=1548767836&hash=AeTODwaDuYnjGuQx\",\"width\":50}', '2543783618971591', '1', '5c28c554e5ca4', '', '1', '', 'Sunday 30th of December 2018 ', '2:17 PM', '', '', ''),
(14, 'Deji Olapoju', 'admin@aileshomesltd.com', '', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '', '', '', '', '', '', '', '', '1', '5c2b01dd21ab8', '', '1', '', 'Tuesday 1st of January 2019 ', '6:59 AM', '', '', ''),
(15, 'Welcome To SIGP', 'admin@bectechltd.com', '', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '', '', '', '', '', '', '', '', '1', '5c2b027dca867', '', '1', '', 'Tuesday 1st of January 2019 ', '7:02 AM', '', '', ''),
(16, 'Victoria Eiul8iki', 'dddd@mr.com', '', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '', '', '', '', '', '', '', '', '1', '5c2b02e7267ce', '', '1', '', 'Tuesday 1st of January 2019 ', '7:04 AM', '', '', ''),
(17, 'Victoria Emmanuel', '123@example.com', '', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', '', '', '', '', '', '', '1', '5c2b03f5e8944', '', '1', '', 'Tuesday 1st of January 2019 ', '7:08 AM', '', '', ''),
(18, 'Deji Olapoju', 'adminmail@mail.com', '', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '', '', '', '', '', '', '', '', '1', '5c2b086faaf0e', '', '1', '', 'Tuesday 1st of January 2019 ', '7:27 AM', '', '', ''),
(19, 'Reghtrhtr', '1fffff23@me.com', '', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', '', '', '', '', '', '', '1', '5c2b0a1e9277d', '', '1', '', 'Tuesday 1st of January 2019 ', '7:35 AM', '', '', ''),
(20, 'Ytybuy', 'j@me.com', '', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', '', '', '', '', '', '', '1', '5c2b0b85532e6', '', '1', '', 'Tuesday 1st of January 2019 ', '7:41 AM', '', '', ''),
(21, 'Talent Keep', 'paul@yahoo.com', '', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '', '', '', '', '', '', '', '', '1', '5c2b0c590e946', '', '1', '', 'Tuesday 1st of January 2019 ', '7:44 AM', '', '', ''),
(22, 'Radd', 'rddd@hhh.com', '', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '', '', '', '', '', '', '', '', '1', '5c2b0dbd9e2d9', '', '1', '', 'Tuesday 1st of January 2019 ', '7:50 AM', '', '', ''),
(23, 'Nduka Emmanuelfffff', 'pman@me.com', '', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '', '', '', '', '', '', '', '', '1', '5c2b0fbd619d3', '', '1', '', 'Tuesday 1st of January 2019 ', '7:59 AM', '', '', ''),
(24, 'Crespy Edo', 'manny4u@me.com', '', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', '', '', '', '', '', '', '1', '5c2b10af58ccc', '', '1', '', 'Tuesday 1st of January 2019 ', '8:03 AM', '', '', ''),
(25, 'Ss1c@yahoo.com', 'ss1c@yahoo.com', '', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '', '', '', '', '1', '5c2b13e5eb170', '', '1', '', 'Tuesday 1st of January 2019 ', '8:16 AM', '', '', ''),
(26, 'Emeka@yahoo.com', 'emeka@yahoo.com', '', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '', '', '', '', '', '', '', '', '1', '5c2b144c54443', '', '1', '', 'Tuesday 1st of January 2019 ', '8:18 AM', '', '', ''),
(27, 'Sophia@yahoo.com', 'sophddddia@yahoo.com', '', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', '', '', '', '', '', '', '', '', '1', '5c2b21f6719f0', '', '1', '', 'Tuesday 1st of January 2019 ', '9:16 AM', '', '', ''),
(28, 'Sophia@yahoo.com', 'soddddddphia@yahoo.com', '', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '', '', '', '', '', '', '', '', '1', '5c2b222bdcbe4', '', '1', '', 'Tuesday 1st of January 2019 ', '9:17 AM', '', '', ''),
(29, 'Damilola', 'fun@gmail.com', '', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '', '', '', '', '1', '5c4f112a3f54d', '', '1', '', 'Monday 28th of January 2019 ', '3:26 PM', 'on', '', ''),
(30, 'Deji Olapoju', 'info@e3tech.com.ng', '', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '', '', '', '', '1', '5c4f118ee7d3c', '', '1', '', 'Monday 28th of January 2019 ', '3:28 PM', 'User', '', ''),
(37, 'Lekki', 'lekki@me.com', '09073627352', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '52377-20170226_174640.jpg', '', '', '', '1', '5c53078479c46', '', '1', '', 'Thursday 31st of January 2019 ', '3:34 PM', 'Agent', '719964', 'confirm'),
(38, 'Emmanuel', 'talk@me.com', '09073627352', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '', '', '', '', '1', '5c5307d429746', '', '1', '', 'Thursday 31st of January 2019 ', '3:36 PM', 'Agent', '400485', ''),
(39, 'Pay', 'pay@me.com', '09073627352', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '', '', '', '', '1', '5c5308479c90e', '', '1', '', 'Thursday 31st of January 2019 ', '3:37 PM', 'Agent', '280794', ''),
(40, 'Bank', 'bank@me.com', '09073627352', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '', '', '', '', '1', '5c530891013e7', '', '1', '', 'Thursday 31st of January 2019 ', '3:39 PM', 'Agent', '555851', ''),
(41, 'Code', 'code@me.com', '09073627352', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '', '', '', '', '1', '5c5308fe8537d', '', '1', '', 'Thursday 31st of January 2019 ', '3:41 PM', 'Agent', '166146', ''),
(42, 'Deji Olapojucccc', 'new@me.com', '09073627352', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '', '', '', '', '1', '5c53095a5e897', '', '1', '', 'Thursday 31st of January 2019 ', '3:42 PM', 'Agent', '275493', ''),
(43, 'Dev', 'de@me.com', '09073627352', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '', '', '', '', '1', '5c530e08a24b7', '', '1', '', 'Thursday 31st of January 2019 ', '4:02 PM', 'Agent', '935090', ''),
(44, 'Bit', 'bit@me.com', '09073627352', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '', '', '', '', '1', '5c530eaad1a9c', '', '1', '', 'Thursday 31st of January 2019 ', '4:05 PM', 'Agent', '644452', ''),
(45, '2173', '123@ffme.com', '09073627352', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '', '', '', '', '1', '5c5310d9dbdfa', '', '1', '', 'Thursday 31st of January 2019 ', '4:14 PM', 'Agent', '427933', ''),
(46, 'Verification', 'Verification@me.com', '09073627352', 'fcea920f7412b5da7be0cf42b8c93759', '', '', '', '', '', '', '', '', '', '', '', '1', '5c53111acb8e8', '', '1', '', 'Thursday 31st of January 2019 ', '4:15 PM', 'Agent', '280609', ''),
(47, 'Verification', 'Verification1@me.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '5c53115d393d5', '', '1', '', 'Thursday 31st of January 2019 ', '4:16 PM', 'Agent', '886228', ''),
(48, 'Rock', 'rock@me.com', '09063789237', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '', '', '', '', '1', '5c53253adf108', '', '1', '', 'Thursday 31st of January 2019 ', '5:41 PM', 'Agent', '155701', 'confirm'),
(49, 'Emmanuel John', 'ema2@me.com', '09073627352', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '', '', '', '', '1', '5c59af4d29ba8', '', '1', '', 'Tuesday 5th of February 2019 ', '4:44 PM', 'Agent', '659625', 'confirm'),
(50, 'Gcxtyxxjx', 'gdydtydd@me.com', '09073627352', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '', '', '', '', '1', '5c59b3bed3486', '', '1', '', 'Tuesday 5th of February 2019 ', '5:03 PM', 'User', '715148', ''),
(51, 'Ken Relocation', 'admin@evvvvvtstate.com', '09073627352', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '', '', '', '', '1', '5c5c6d9802dc5', '', '1', '', 'Thursday 7th of February 2019 ', '6:40 PM', 'Agent', '118199', ''),
(52, 'Ff42f34fff', 'ghgh@me.com', '09073627352', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '', '', '', '', '1', '5c5c6e718f239', '', '1', '', 'Thursday 7th of February 2019 ', '6:44 PM', 'Agent', '377822', ''),
(53, 'Dennnn', 'rrrrrr@me.com', '09073627352', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '', '', '', '', '1', '5c5c6f07ceba7', '', '1', '', 'Thursday 7th of February 2019 ', '6:46 PM', 'Agent', '264349', ''),
(54, '4f433ff', '3fgf3fff44@me.com', '09073627352', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '', '', '', '', '1', '5c5c6f54da93d', '', '1', '', 'Thursday 7th of February 2019 ', '6:48 PM', 'Agent', '753666', 'confirm'),
(55, 'Source', 'source@me.com', '08065584627', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '', '', '', '', '1', '5c5d770e18d86', '', '1', '', 'Friday 8th of February 2019 ', '1:33 PM', 'Agent', '650332', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adm_message`
--
ALTER TABLE `adm_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_img`
--
ALTER TABLE `pro_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_search`
--
ALTER TABLE `s_search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adm_message`
--
ALTER TABLE `adm_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pro_img`
--
ALTER TABLE `pro_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=295;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `s_search`
--
ALTER TABLE `s_search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
