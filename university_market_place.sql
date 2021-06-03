-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 02, 2021 at 06:37 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university_market_place`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(200) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `emailid`, `password`) VALUES
('Dipen', 'Dipenraj@gmail.com', '123'),
('Harsh', 'Harshpandav@gmail.com', '123'),
('Anusha', 'Anushaburla@gmail.com', '123'),
('Shubham', 'shubhammaurya@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_user`
--

DROP TABLE IF EXISTS `buyer_user`;
CREATE TABLE IF NOT EXISTS `buyer_user` (
  `buyer_id` int(11) NOT NULL AUTO_INCREMENT,
  `buyer_name` varchar(25) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`buyer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

DROP TABLE IF EXISTS `contact_form`;
CREATE TABLE IF NOT EXISTS `contact_form` (
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`name`, `email`, `subject`, `description`) VALUES
('', 'dipenraj118@gmail.com', 'subject', 'What to do now1?'),
('DIPEN RAJ', 'dipenraj118@gmail.com', 'subject', 'What to do now1?'),
('Om Joshi', 'omjoshi@gmail.com', 'subject', 'Please get me some info to get started with the buy form'),
('Om joshi', 'om@gmail.com', 'subject', 'Subject'),
('a', 'anushaburla@gmail.com', 'subject', 'dadasd');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_image` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `product_image`) VALUES
(1, '6fcba04893965.5732b6c98c7c8.jpg'),
(2, '6fcba04893965.5732b6c98c7c8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_description` varchar(10000) NOT NULL,
  `product_category` varchar(200) NOT NULL,
  `product_seller` varchar(200) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_description`, `product_category`, `product_seller`, `product_image`) VALUES
(1, 'Ukulele', '20', 'Just like new', 'Music', 'Anusha', '1.jpeg'),
(48, 'Exercise balls', '10', 'Selling two, a smaller and a bigger exercise balls. 1 ball /$10', 'Sports', 'Dipen', 'balls.jpg'),
(49, 'Gym equipment', '1800', 'Used â€“ like new\r\nNear new gym equipment', 'Sports', 'Dipen', 'dumbells.jpg'),
(44, 'Piano', '35', 'high level of experience and zest of sharing Passion for All things musical offers a Big range of different instruments. Piano', 'Music', 'Anusha', 'piano.jpg'),
(46, 'Mahalo Concert Ukulele', '45', 'Mahalo concert Ukulele UTL1TS \r\nGreat condition, 18fret board with NUbone bridge\r\nFender style machine heads for tuning and cutaway for top frets.\r\nComes with case and instructions.', 'Music', 'Anusha', 'guitar.jpg'),
(47, 'Sport kit', '60', 'Brand new  basketball ball and the rest in very good condition.', 'Sports', 'Anusha', 'sport.jpg'),
(55, ' Psychology books', '5', 'Condition : Used â€“ good', 'Education', 'Preyash ', 'boo.jpg'),
(59, 'Badminton', '10', 'Just like new', 'Sports', 'Shubham', 'das.jpg'),
(54, 'ASICS Tigreor football boots', '100', 'Condition\r\nUsed â€“ good\r\nSize\r\n9\r\nBrand\r\nasics\r\nNear new, worn 5 times. \r\nLeather & synthetic. Black/pink.\r\nIâ€™m usually a womenâ€™s 9/40 although these are a menâ€™s 9 and fit. ', 'Sports', 'Preyash ', 'boot.jpg'),
(56, ' Clive Cussler books', '15', 'Clive Cussler books \r\nGreat reading $15 for the lot', 'Education', 'Preyash ', 'booo.jpg'),
(58, ' Adult Cricket Gear', '45', 'All-new kit ready to go on the ground.', 'Sports', 'Harshil', 'kit.jpg'),
(60, 'Boxing Bag', '50', 'In a good condition. Just like new', 'Sports', 'Shubham', 'bag.jpg'),
(67, 'RC Helicopter', '12', 'Drone Quadcopter with WiFi 720P HD Camera HALOFUNO RC Drone Helicopter with Voice/App Control Altitude Hold Headless Mode 3D Flip One Key Take Off/Landing #RCQuadcopterDrone\r\n', 'Education', 'Pina lavrez', 'heli.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

DROP TABLE IF EXISTS `receipt`;
CREATE TABLE IF NOT EXISTS `receipt` (
  `receipt_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(100) NOT NULL,
  `seller` varchar(100) NOT NULL,
  `buyer` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  PRIMARY KEY (`receipt_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`receipt_id`, `product_id`, `seller`, `buyer`, `product_name`) VALUES
(1, '46', 'Anusha', 'Shubham', 'Mahalo'),
(15, '66', 'Shubham', 'potter', 'Boxing'),
(14, '66', 'Shubham', 'Shubham', 'Boxing'),
(9, '56', 'Preyash', 'Shubham', 'Clive'),
(10, '54', 'Preyash', 'Shubham', 'ASICS'),
(11, '53', 'Param', 'Shubham', 'Badminton'),
(17, '68', 'Dipen', 'Dipen', 'Footy'),
(16, '57', 'Harshil', 'Dipen', 'CRICKET');

-- --------------------------------------------------------

--
-- Table structure for table `seller_user`
--

DROP TABLE IF EXISTS `seller_user`;
CREATE TABLE IF NOT EXISTS `seller_user` (
  `seller_id` int(10) NOT NULL AUTO_INCREMENT,
  `stud_id` int(10) NOT NULL,
  `seller_name` varchar(25) NOT NULL,
  PRIMARY KEY (`seller_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stud_signin`
--

DROP TABLE IF EXISTS `stud_signin`;
CREATE TABLE IF NOT EXISTS `stud_signin` (
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stud_user`
--

DROP TABLE IF EXISTS `stud_user`;
CREATE TABLE IF NOT EXISTS `stud_user` (
  `stud_id` int(11) NOT NULL AUTO_INCREMENT,
  `phone_num` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `acc_password` varchar(25) NOT NULL,
  `stu_dob` varchar(25) NOT NULL,
  `address` varchar(35) NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_user`
--

INSERT INTO `stud_user` (`stud_id`, `phone_num`, `email`, `username`, `acc_password`, `stu_dob`, `address`) VALUES
(23, '0463529477', 'Jason@gmail.com', 'Jason brody', 'poi', '1999-06-19', 'South Melbourne'),
(2, '0451582711', 'potter45332@gmail.com', 'potter', 'poi', '2000-08-18', '17, aylesbury avenue, Truganina,VIC'),
(3, '0452525236', 'Harsh@gmail.com', 'Harsh', 'poi', '2000-04-14', '4, meadow st., St. Kilda'),
(24, '0463529477', 'Jason@gmail.com', 'Jason brody', 'poi', '1999-06-19', 'South Melbourne'),
(5, '0410063522', 'Jp@gmail.com', 'Jarnil', 'poi', '1995-12-25', '4, meadow st., St. Kilda'),
(6, '0452525236', 'Shubham@gmail.com', 'Shubham', 'poi', '2000-09-18', 'Flinr'),
(7, '0451582711', 'dipenraj118@gmail.com', 'Dipen', 'poi', '2000-08-18', '4, meadow st., St. Kilda'),
(8, '0452633289', 'Hdave@gmail.com', 'Harshil', '963', '1996-04-17', '4, meadow st., St. Kilda'),
(9, '0463625125', 'Anusha@gmail.com', 'Anusha', 'poi', '2000-09-08', '4, meadow st., St. Kilda'),
(10, '09409191072', 'Shubham@gmail.com', 'Shubham', 'poi', '2000-05-04', '5665'),
(11, '0466355299', 'Urvesh@gmail.com', 'Urvesh Jodhani', 'poi', '2000-02-02', 'Flamington Tower'),
(12, '0455266399', 'jinal@gmail.com', 'Jinal', 'poi', '2000-08-24', 'Truganina'),
(16, '09409191072', 'dipenraj118@gmail.com', 'roshan', 'dsa', '1111-12-18', 'dsa'),
(25, '0458966322', 'Scott@gmail.com', 'Scott Ward', '123', '1982-06-20', '4, Alma Street, St.kilda East, VIC'),
(18, '0452632211', 'Om@gmail.com', 'Om Joshi', 'poi', '2001-05-21', 'Shukan green'),
(19, '0463521463', 'Param@gmail.com', 'Param', 'poi', '2000-05-08', 'Flamington tower'),
(20, '0451236698', 'Preyash@gmail.com', 'Preyash ', 'poi', '2000-06-06', 'Springvale'),
(21, '0406325299', 'Harshil@gmail.com', 'Harshil', 'poi', '1998-04-17', 'meadow street'),
(22, '0463896455', 'Pina@gmail.com', 'Pina lavrez', '123', '1998-09-18', '5, Charwood Cresent, St.Kilda, VIC');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
