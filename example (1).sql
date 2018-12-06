-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 01, 2018 at 10:01 AM
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
-- Database: `example`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `costumer_id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `E-mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `zip` int(255) NOT NULL,
  `profile` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`costumer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`costumer_id`, `name`, `gender`, `E-mail`, `password`, `address`, `zip`, `profile`) VALUES
(1, 'James bone', 'm', 'james2567@yahoo.com', '8bf95d5f495187436e96c35bc55c86f6', 'T C V SCHOOL,CHAUNTRA, MANDI,HIMACHAL', 560057, NULL),
(12, 'lobsang jigmey', 'm', 'Lobsang256747@gmail.com', 'e86c77711ab1fffb4cb2c9d5c07d2467', 'ACHARYA COTTAGE BUILDING No.266 THIRD FLOOR', 560107, NULL),
(13, 'Aman ', 'm', 'aman@gmail.com', 'e86c77711ab1fffb4cb2c9d5c07d2467', 'ACHARYA COTTAGE BUILDING No.266 THIRD FLOOR', 560107, NULL),
(14, 'jone', 'm', 'sdakfjlsfda@gmail.com', 'e86c77711ab1fffb4cb2c9d5c07d2467', 'T C V SCHOOL,CHAUNTRA, MANDI,HIMACHAL', 560057, NULL),
(28, 'rikgya', 'm', 'rikgya@gmail.com', 'e86c77711ab1fffb4cb2c9d5c07d2467', 'T C V SCHOOL,CHAUNTRA, MANDI,HIMACHAL', 560057, ''),
(29, 'anurag', 'm', 'anurag@gmail.com', 'f7640437662616371e81edab24079579', 'Bangalore', 560057, 'Capture1.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`, `category`) VALUES
(1, 'Samsung J2 Pro', '1.jpg', 1000.00, 'mobiles'),
(2, 'HP Notebook', '2.jpg', 2999.00, 'electronics'),
(3, 'Panasonic T44 Lite', '3.jpg', 1250.00, 'mobiles'),
(4, 'casio watch', '4.jpg', 2000.00, 'fashion'),
(5, 'colin\'s bag', '5.jpg', 5000.00, 'fashion'),
(6, 'Colin\'s leather shoes', '6.jpg', 1250.00, 'fashion'),
(7, 'Nicola\'s women coat', '11.jpg', 5000.00, 'fashion');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
