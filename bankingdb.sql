-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 20, 2020 at 07:52 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bankingman`
--

DROP TABLE IF EXISTS `bankingman`;
CREATE TABLE IF NOT EXISTS `bankingman` (
  `id` int(250) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Accountno` int(250) NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankingman`
--

INSERT INTO `bankingman` (`id`, `Name`, `Accountno`, `amount`) VALUES
(3, 'Manisha', 560108, 58000),
(1, 'Abhi', 562106, 50000),
(2, 'Prasad', 562107, 51000),
(4, 'Pramila', 560109, 40000),
(5, 'Pramod', 560110, 45000),
(6, 'Mahadev', 562111, 55000),
(7, 'Vasudev', 562112, 45000),
(8, 'PrasannaAbhi', 562113, 48000),
(9, 'Pradeep', 562114, 52000),
(10, 'Sowmya', 562115, 55000);

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

DROP TABLE IF EXISTS `record`;
CREATE TABLE IF NOT EXISTS `record` (
  `tid` int(250) NOT NULL,
  `sender` varchar(250) NOT NULL,
  `receiver` varchar(250) NOT NULL,
  `amount` int(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`tid`, `sender`, `receiver`, `amount`, `timestamp`) VALUES
(1, 'Abhi', 'Prasad', 1000, '2020-11-20 06:28:33'),
(2, 'Pramod', 'Mahadev', 5000, '2020-11-20 07:34:23'),
(3, 'Manisha', 'Abhi', 2000, '2020-11-20 07:35:23'),
(4, 'Vasudev', 'Mahadev', 5000, '2020-11-20 07:51:42'),
(5, 'Pramila', 'Manish', 10000, '2020-11-20 07:38:51');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
