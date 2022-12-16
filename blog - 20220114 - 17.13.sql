-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 12:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` varchar(10) NOT NULL,
  `adminName` varchar(20) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `adminName`, `Username`, `Password`, `Status`) VALUES
('', '', '', '', ''),
('222', 'eee', 'eee', '123', 'Admin'),
('33', 'eee', 'ee', '12', 'Super Admi'),
('333', 'hhhhh', '', '', 'Admin'),
('35', 'ssss', 'sssss', '1234', 'Admin'),
('555', 'yy', 'yy', 'yy', 'Admin'),
('66', 'gf', 'gfdg', '123', 'Admin'),
('77', 'www', 'jayani', '123', 'Super Admi'),
('ad003', 'gggg', 'ggg', '1245', 'Super Admi'),
('admin008', 'achini', 'achini', '2956bfacf0491ff0d4a98a82a50e0348', ''),
('admin009', 'nn', 'nn', 'eab71244afb687f16d8c4f5ee9d6ef0e', ''),
('as02', 'kkk', 'kkk', '66', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(10) NOT NULL,
  `categoryName` varchar(30) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `categoryName`, `status`) VALUES
(1, 'News', 'on'),
(2, 'Sports', 'on'),
(4, 'Music', 'on'),
(12, 'f', 'off'),
(13, 'shalani', 'on'),
(14, 'shalani', 'off'),
(15, 'malshani', 'off');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postId` int(10) NOT NULL,
  `title` varchar(200) NOT NULL,
  `mainDescription` varchar(5000) NOT NULL,
  `subDescription` varchar(5000) DEFAULT NULL,
  `author` varchar(50) NOT NULL,
  `postedDateTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(10) NOT NULL,
  `image1` varchar(300) NOT NULL,
  `image2` varchar(300) DEFAULT NULL,
  `image3` varchar(300) DEFAULT NULL,
  `image4` varchar(300) DEFAULT NULL,
  `categoryId` int(10) NOT NULL,
  `adminId` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postId`, `title`, `mainDescription`, `subDescription`, `author`, `postedDateTime`, `status`, `image1`, `image2`, `image3`, `image4`, `categoryId`, `adminId`) VALUES
(18, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '', '2021-10-16 11:44:56', 'on', 'images/chocolate_sweets_dairy-1039887.jpg!d.jpg', 'images/chocolate_sweets_dairy-1039887.jpg!d.jpg', 'images/chocolate_sweets_dairy-1039887.jpg!d.jpg', 'images/chocolate_sweets_dairy-1039887.jpg!d.jpg', 1, 'admin009'),
(19, 'ASMR eating chocolate cake, ice-cream bar, kit-kat milkshake, Nutella, m&m waffle no talking', 'What is Lorem Ipsum?', 'What is Lorem Ipsum?', '', '2021-10-16 11:45:39', 'on', 'images/chocolate_sweets_dairy-1039887.jpg!d.jpg', 'images/chocolate_sweets_dairy-1039887.jpg!d.jpg', 'images/chocolate_sweets_dairy-1039887.jpg!d.jpg', 'images/chocolate_sweets_dairy-1039887.jpg!d.jpg', 4, 'admin009'),
(20, 'cxxxxxxxxxx', 'xcccccc', 'xccccc', '', '2021-10-24 07:14:23', 'on', 'images/chocolate_sweets_dairy-1039887.jpg!d.jpg', 'images/chocolate_sweets_dairy-1039887.jpg!d.jpg', 'images/chocolate_sweets_dairy-1039887.jpg!d.jpg', 'images/chocolate_sweets_dairy-1039887.jpg!d.jpg', 1, 'admin009'),
(21, 'aaaaaaaa', 'aaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', '', '2021-10-27 12:27:04', 'on', 'images/chocolate_sweets_dairy-1039887.jpg!d.jpg', 'images/chocolate_sweets_dairy-1039887.jpg!d.jpg', 'images/chocolate_sweets_dairy-1039887.jpg!d.jpg', 'images/chocolate_sweets_dairy-1039887.jpg!d.jpg', 4, 'admin009'),
(22, 'az', 'az', 'az', '', '2021-11-04 19:42:46', 'on', '', '', '', '', 2, 'admin009'),
(23, 'qq', 'qq', 'qq', '', '2021-11-05 22:02:16', 'on', '', '', '', '', 2, 'admin009');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postId`),
  ADD KEY `admin_id_fk` (`adminId`),
  ADD KEY `category_id_fk` (`categoryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `admin_id_fk` FOREIGN KEY (`adminId`) REFERENCES `admin` (`adminId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `category_id_fk` FOREIGN KEY (`categoryId`) REFERENCES `category` (`categoryId`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
