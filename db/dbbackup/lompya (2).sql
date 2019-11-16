-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 21, 2019 at 03:18 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lompya`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `capital`
--

DROP TABLE IF EXISTS `capital`;
CREATE TABLE IF NOT EXISTS `capital` (
  `capitalID` int(11) NOT NULL AUTO_INCREMENT,
  `amount` double(10,2) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`capitalID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `capital`
--

INSERT INTO `capital` (`capitalID`, `amount`, `date`) VALUES
(1, 700.00, '2019-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customerid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `mi` varchar(1) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`customerid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `firstname`, `mi`, `lastname`, `address`, `country`, `zipcode`, `mobile`, `telephone`, `email`, `password`) VALUES
(1, 'Jojie', 'I', 'Avergonzado', 'Toril, Davao City', 'del sur', '8000', '09105399519', '', 'jie@jie', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

DROP TABLE IF EXISTS `expense`;
CREATE TABLE IF NOT EXISTS `expense` (
  `expenseID` int(11) NOT NULL AUTO_INCREMENT,
  `expense_type` varchar(100) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`expenseID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`expenseID`, `expense_type`, `amount`, `date`) VALUES
(1, 'gg', '250', '2019-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `operatingfunds`
--

DROP TABLE IF EXISTS `operatingfunds`;
CREATE TABLE IF NOT EXISTS `operatingfunds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operatingfunds`
--

INSERT INTO `operatingfunds` (`id`, `name`, `amount`, `date`) VALUES
(1, 'Bulad', '250', '2019-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_size` varchar(50) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_size`, `product_image`, `brand`, `category`, `Description`) VALUES
(30, 'Samples', '1200', '', '68612527639476778lsdf.jpg', '', 'feature', 'Lorem Ipsum is simply dummy text of the printicng and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(33, 'Danti', '100', '', '50803172139451371387084.jpg', '', 'feature', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(4036, 'pinaka', '1000', '', '9381895910013775440403716_2062731590723372_6555802054428721152_n.png', '', 'feature', 'Lahi regyud ang blue berry kay maka pagahig tyan hmmmm gahia pajud cge pa chukchukchuk'),
(210963, 'Star', '100', '', '60805398927369366star.jpg', '', 'feature', 'This is five handred only Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(926153, 'GG nathis', '500', '', '88854186227260632asd.jpg', '', 'feature', 'PEsteng yawa ka ha dili ka ma display ganina rako nmu ha wala ka gabae'),
(6462216, 'Spider', '600', '', '29644439306476050Plays-Well-with-Green1.jpg', '', 'feature', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `stock_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`stock_id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `product_id`, `qty`) VALUES
(44, 6462216, 10),
(43, 30, 20),
(42, 210963, 500),
(41, 926153, 2),
(40, 4036, 5),
(39, 33, 48);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `transaction_id` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `order_stat` varchar(100) NOT NULL,
  `order_date` varchar(50) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `customerid`, `amount`, `order_stat`, `order_date`) VALUES
(0, 1, 2500, 'ON HOLD', '2019-09-22'),
(1, 1, 1200, 'ON HOLD', '2019-09-22'),
(5, 1, 1200, 'ON HOLD', '2019-09-22'),
(16, 1, 300, 'Cancelled', '2019-09-21'),
(31, 1, 200, 'ON HOLD', '2019-09-25 02:14 pm'),
(317, 1, 100, 'ON HOLD', '2019-10-10 02:30 pm'),
(658, 1, 100, 'ON HOLD', '2019-09-25 02:19 pm'),
(787, 1, 500, 'ON HOLD', '2019-10-09 02:50 pm'),
(8143, 1, 100, 'Confirmed', '2019-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_detail`
--

DROP TABLE IF EXISTS `transaction_detail`;
CREATE TABLE IF NOT EXISTS `transaction_detail` (
  `transacton_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  PRIMARY KEY (`transacton_detail_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_detail`
--

INSERT INTO `transaction_detail` (`transacton_detail_id`, `product_id`, `order_qty`, `transaction_id`) VALUES
(5, 33, 3, 16),
(4, 33, 1, 8143),
(6, 30, 2, 0),
(7, 210963, 1, 0),
(8, 30, 1, 5),
(9, 30, 1, 1),
(10, 210963, 2, 31),
(11, 210963, 1, 658),
(12, 926153, 1, 787),
(13, 210963, 1, 317);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
