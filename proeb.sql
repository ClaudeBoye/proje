-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 18, 2022 at 02:50 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proeb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phone`, `password`, `address`, `gender`) VALUES
(1, 'admin007', 'admin@joedigital.com', '+237653488243', 'admin123', 'admin123', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(40) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_phone` varchar(40) NOT NULL,
  `user_pictures` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_address` varchar(40) NOT NULL,
  `adrcode` varchar(40) NOT NULL,
  `userimg1` varchar(250) DEFAULT NULL,
  `userimg2` varchar(250) DEFAULT NULL,
  `userimg3` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `user_name`, `user_email`, `user_phone`, `user_pictures`, `user_address`, `adrcode`, `userimg1`, `userimg2`, `userimg3`) VALUES
(6, 'asdfasdf', 'asdfsadf@gmail.com', 'asdfasdf', '', 'CEN1135', 'asdfsdaf', NULL, NULL, NULL),
(18, 'realimg edited', 'realtest@gmail.com', '33242324', '6283961676fe35.26144924.jpg', 'buea molyko', 'SW6216', '6283c0103d0494.11113162.jpg', '6283c048b9bc82.22938338.jpg', '6283c048ba9a25.01138734.jpg'),
(11, 'imgtest', 'imgtest@gmail.com', '23423423423', 'Please upload just jpg, jpeg or png', 'Carrefou Espoir', 'LTR1083', '6283bdac4174f0.33004904.jpg', '6283bdac4175f6.60319615.jpg', '6283bdac417697.76481185.jpg'),
(12, 'imgtest', 'imgtest@gmail.com', '23423423423', 'Please upload just jpg, jpeg or png', 'Carrefou Espoir', 'LTR7898', NULL, NULL, NULL),
(13, 'imgtest', 'imgtest@gmail.com', '23423423423', 'Please upload just jpg, jpeg or png', 'Carrefou Espoir', 'LTR3047', NULL, NULL, NULL),
(14, 'imgtestuser', 'imguser@mail.com', '234234234324', 'Please upload just jpg, jpeg or png', 'Carrefou Espoir', 'NW6961', NULL, NULL, NULL),
(16, 'imgtestuser', 'imguser@mail.com', '234234234324', '6283907fcfcd77.80082190.jpg', 'Carrefou Espoir', 'NW1496', NULL, NULL, NULL),
(17, 'imgtestuser', 'imguser@mail.com', '234234234324', '6283909d3a43a0.12037353.jpg', 'Carrefou Espoir', 'NW2888', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

DROP TABLE IF EXISTS `deliveries`;
CREATE TABLE IF NOT EXISTS `deliveries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `emp_id` int DEFAULT NULL,
  `customer_id` int NOT NULL,
  `status` varchar(1) NOT NULL,
  `div_id` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `emp_id` (`emp_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `deliveries`
--

INSERT INTO `deliveries` (`id`, `emp_id`, `customer_id`, `status`, `div_id`) VALUES
(8, 3, 3, '1', 'DEV17092');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(40) NOT NULL,
  `gender` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `password`, `phone`, `address`, `gender`) VALUES
(1, 'cluade', 'boye@bb.com', '$2y$10$4h4Q8Y/E.TjM2ALK52S2uePLLjCDwHgUZYIiM7sCuZ01wC0ysM8Vu', '232233232', 'Carrefou Espoir', 'Male'),
(4, 'test2 edited', 'test2@gmail.com', '$2y$10$WIamkQdqaQI2iCnmNVRSk.P2HItJFP7Kar9R/0XyVjYZ8qJTjMGA2', '2134234', 'test', 'Female'),
(10, 'foradmin', 'asdfasdf@mmail.com', '$2y$10$ttGCGXZKot4xFJM3.z85n.CR7JIlTf0xW/YbTalfoeAyUdoSlgf3C', '213412412', 'Carrefou Espoir', 'Male'),
(5, 'test', 'set@mail.com', '$2y$10$J7kbvmXMkZyMyFQN4ZYx..RpO5P0EZrSahgOp8cRuQipm5bOn42XO', '12341234', 'Carrefou Espoir', 'Female');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
