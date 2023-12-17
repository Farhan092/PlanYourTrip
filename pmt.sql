-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 10:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `planmytrip`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `booking_date` date DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `booking_amount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `booking_date`, `payment_method`, `booking_amount`) VALUES
(1, '2023-11-04', 'card', 150.00);

-- --------------------------------------------------------

--
-- Table structure for table `cancelflightnotification`
--

CREATE TABLE `cancelflightnotification` (
  `id` int(50) NOT NULL,
  `from_` varchar(200) NOT NULL,
  `to_` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cancelflightnotification`
--

INSERT INTO `cancelflightnotification` (`id`, `from_`, `to_`, `date`, `time`) VALUES
(5, 'Dhaka', 'Barisal', '2023-12-01', '09:30:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `cancelroomnotification`
--

CREATE TABLE `cancelroomnotification` (
  `id` int(11) NOT NULL,
  `Location` varchar(200) NOT NULL,
  `hotel_name` varchar(200) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cancelroomnotification`
--

INSERT INTO `cancelroomnotification` (`id`, `Location`, `hotel_name`, `Date`) VALUES
(6, 'Chittagong', 'Radison', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `contactinfo`
--

CREATE TABLE `contactinfo` (
  `CompanyName` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Phone` int(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactinfo`
--

INSERT INTO `contactinfo` (`CompanyName`, `Email`, `Phone`, `id`) VALUES
('', '', 0, 0),
('HELLO', 'fatinnoor307@gmail.c', 124, 262),
('Fatin', 'fatinnoor307@gmail.c', 2, 263),
('', '', 0, 264),
('', '', 0, 265),
('ABCD', 'fatinnoor2030@gmail.', 2121, 266),
('BONDHU!!', 'hamim.shah.5201@gmai', 2121, 267),
('BONDHU!!', 'hamim.shah.5201@gmai', 2121, 268),
('ABS', 'fatinnoor2030@gmail.', 9190000, 269),
('', '', 0, 270),
('asa', 'fatinnoor2030@gmail.', 1922869162, 271),
('eeee', 'fatinnoor2030@gmail.', 1922869162, 272),
('eeee', 'fatinnoor2030@gmail.', 1922869162, 273),
('aaa', 'fatinnoor2030@gmail.', 1922869162, 274),
('aaa', 'fatinnoor2030@gmail.', 1922869162, 275),
('', 'fatinnoor2030@gmail.', 1922869162, 276),
('', 'fatinnoor2030@gmail.', 1922869162, 277),
('', 'fatinnoor2030@gmail.', 1922869162, 278),
('', '', 0, 279),
('aaa', 'fatinnoor2030@gmail.', 1922869162, 280),
('eeee', 'fatinnoor2030@gmail.', 1922869162, 281),
('', '', 0, 282),
('ABC', 'fatinnoor2030@gmail.', 1221, 283);

-- --------------------------------------------------------

--
-- Table structure for table `conversion_history`
--

CREATE TABLE `conversion_history` (
  `ID` int(11) NOT NULL,
  `Amount` decimal(10,2) DEFAULT NULL,
  `From_Currency` varchar(3) DEFAULT NULL,
  `To_Currency` varchar(3) DEFAULT NULL,
  `Result` decimal(10,4) DEFAULT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conversion_history`
--

INSERT INTO `conversion_history` (`ID`, `Amount`, `From_Currency`, `To_Currency`, `Result`, `Timestamp`, `username`) VALUES
(0, 1000.00, 'BDT', 'USD', 12.0000, '2023-12-09 18:06:16', 'f1'),
(9, 130000.00, 'BDT', 'USD', 1560.0000, '2023-11-08 15:52:35', ''),
(10, 23525634.00, 'BDT', 'USD', 282308.0000, '2023-11-08 15:53:36', ''),
(12, 13425353.00, 'BDT', 'GBP', 120828.0000, '2023-11-08 15:53:58', ''),
(13, 4256.00, 'BDT', 'USD', 51.0000, '2023-11-08 15:54:03', ''),
(14, 2425356.00, 'BDT', 'USD', 29104.0000, '2023-11-08 15:54:08', ''),
(15, 2342536.00, 'BDT', 'USD', 28110.0000, '2023-11-08 15:54:25', ''),
(16, 23424245.00, 'GBP', 'BDT', 999999.9999, '2023-11-08 15:54:33', ''),
(17, 2134253.00, 'BDT', 'USD', 25611.0000, '2023-11-08 15:54:36', ''),
(18, 99999999.99, 'BDT', 'USD', 999999.9999, '2023-11-08 15:54:40', ''),
(36, 5.00, 'GBP', 'BDT', 562.0000, '2023-11-08 16:27:39', ''),
(52, 3.00, 'BDT', 'USD', 0.0360, '2023-11-08 17:18:20', ''),
(53, 3.00, 'BDT', 'USD', 0.0360, '2023-11-08 17:18:47', ''),
(54, 2.00, 'USD', 'BDT', 169.1200, '2023-11-11 13:54:32', ''),
(55, 200.00, 'BDT', 'USD', 2.4000, '2023-11-11 15:33:19', ''),
(56, 100.00, 'BDT', 'USD', 1.2000, '2023-11-12 07:42:30', ''),
(57, 4.00, 'BDT', 'USD', 0.0480, '2023-11-12 07:46:41', ''),
(58, 6.00, 'BDT', 'USD', 0.0720, '2023-11-12 07:48:18', ''),
(59, 6.00, 'BDT', 'USD', 0.0720, '2023-11-12 07:51:32', ''),
(60, 6.00, 'BDT', 'USD', 0.0720, '2023-11-12 07:51:41', ''),
(61, 4.00, 'BDT', 'USD', 0.0480, '2023-11-12 07:51:48', ''),
(62, 34.00, 'BDT', 'USD', 0.4080, '2023-11-12 07:54:57', ''),
(63, 34.00, 'BDT', 'USD', 0.4080, '2023-11-12 07:56:06', ''),
(64, 4000.00, 'BDT', 'USD', 48.0000, '2023-11-12 08:00:31', ''),
(65, 4000.00, 'BDT', 'USD', 48.0000, '2023-11-12 08:03:34', ''),
(66, 4000.00, 'BDT', 'USD', 48.0000, '2023-11-12 08:05:28', ''),
(67, 4000.00, 'BDT', 'USD', 48.0000, '2023-11-12 08:09:13', ''),
(68, 4000.00, 'BDT', 'USD', 48.0000, '2023-11-12 08:11:14', ''),
(69, 34.00, 'BDT', 'USD', 0.4080, '2023-11-12 08:11:19', ''),
(70, 4000.00, 'BDT', 'USD', 48.0000, '2023-11-12 08:18:04', ''),
(71, 4000.00, 'BDT', 'USD', 48.0000, '2023-11-12 08:20:14', ''),
(72, 45.00, 'BDT', 'USD', 0.5400, '2023-11-12 08:20:30', ''),
(73, 453.00, 'BDT', 'USD', 5.4360, '2023-11-12 08:23:01', ''),
(74, 1000.00, 'BDT', 'USD', 12.0000, '2023-11-12 09:28:15', 'farhanamin092'),
(75, 3424.00, 'BDT', 'USD', 41.0880, '2023-11-12 09:28:31', 'farhanamin092'),
(76, 3424.00, 'BDT', 'USD', 41.0880, '2023-11-12 09:29:19', 'farhanamin092'),
(77, 3000.00, 'BDT', 'GBP', 27.0000, '2023-11-12 09:29:45', 'farhanamin092'),
(78, 456.00, 'BDT', 'USD', 5.4720, '2023-11-12 09:33:38', 'abcde'),
(79, 1010.00, 'BDT', 'USD', 12.1200, '2023-11-12 09:33:49', 'abcde'),
(80, 3435.00, 'BDT', 'GBP', 30.9150, '2023-11-12 13:31:53', 'shah100'),
(81, 2134.00, 'BDT', 'USD', 25.6080, '2023-11-12 23:51:23', 'abcde'),
(82, 4564.00, 'BDT', 'USD', 54.7680, '2023-11-13 08:18:04', 'Farhan1010'),
(83, 1000.00, 'BDT', 'USD', 12.0000, '2023-11-13 10:37:08', 'Farhan1010'),
(84, 5.00, 'GBP', 'BDT', 562.2000, '2023-11-14 16:49:11', 'Farhan1010'),
(85, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:38:04', 'Farhan1010'),
(86, 456345.00, 'BDT', 'USD', 5476.1400, '2023-11-27 07:38:15', 'Farhan1010'),
(87, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:38:19', 'Farhan1010'),
(88, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:39:08', 'Farhan1010'),
(89, 45.00, 'BDT', 'USD', 0.5400, '2023-11-27 07:39:12', 'Farhan1010'),
(90, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:40:08', 'Farhan1010'),
(91, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:42:13', 'Farhan1010'),
(92, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:42:14', 'Farhan1010'),
(93, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:42:15', 'Farhan1010'),
(94, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:42:15', 'Farhan1010'),
(95, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:42:15', 'Farhan1010'),
(96, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:42:15', 'Farhan1010'),
(97, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:42:15', 'Farhan1010'),
(98, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:44:32', 'Farhan1010'),
(99, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:44:32', 'Farhan1010'),
(100, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:44:33', 'Farhan1010'),
(101, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:44:33', 'Farhan1010'),
(102, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:44:33', 'Farhan1010'),
(103, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:44:33', 'Farhan1010'),
(104, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:44:33', 'Farhan1010'),
(105, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:44:33', 'Farhan1010'),
(106, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:44:34', 'Farhan1010'),
(107, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:44:34', 'Farhan1010'),
(108, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:44:34', 'Farhan1010'),
(109, 456345.00, 'BDT', 'USD', 5476.1400, '2023-11-27 07:46:57', 'Farhan1010'),
(110, 456345.00, 'BDT', 'USD', 5476.1400, '2023-11-27 07:46:57', 'Farhan1010'),
(111, 456345.00, 'BDT', 'USD', 5476.1400, '2023-11-27 07:46:57', 'Farhan1010'),
(112, 456345.00, 'BDT', 'USD', 5476.1400, '2023-11-27 07:46:58', 'Farhan1010'),
(113, 456345.00, 'BDT', 'USD', 5476.1400, '2023-11-27 07:46:58', 'Farhan1010'),
(114, 456345.00, 'BDT', 'USD', 5476.1400, '2023-11-27 07:46:58', 'Farhan1010'),
(115, 456345.00, 'BDT', 'USD', 5476.1400, '2023-11-27 07:46:58', 'Farhan1010'),
(116, 456345.00, 'BDT', 'USD', 5476.1400, '2023-11-27 07:46:58', 'Farhan1010'),
(117, 456345.00, 'BDT', 'USD', 5476.1400, '2023-11-27 07:46:58', 'Farhan1010'),
(118, 456345.00, 'BDT', 'USD', 5476.1400, '2023-11-27 07:46:59', 'Farhan1010'),
(119, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:48:04', 'Farhan1010'),
(120, 456345.00, 'BDT', 'USD', 5476.1400, '2023-11-27 07:52:41', 'Farhan1010'),
(121, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:53:02', 'Farhan1010'),
(122, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:53:11', 'Farhan1010'),
(123, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:53:13', 'Farhan1010'),
(124, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:53:13', 'Farhan1010'),
(125, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:53:14', 'Farhan1010'),
(126, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:53:14', 'Farhan1010'),
(127, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:53:14', 'Farhan1010'),
(128, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:53:14', 'Farhan1010'),
(129, 324242.00, 'BDT', 'USD', 3890.9040, '2023-11-27 07:53:23', 'Farhan1010'),
(130, 45.00, 'BDT', 'USD', 0.5400, '2023-11-27 07:56:44', 'Farhan1010'),
(131, 456345.00, 'BDT', 'USD', 5476.1400, '2023-11-27 07:56:52', 'Farhan1010'),
(132, 50.00, 'BDT', 'USD', 0.6000, '2023-11-27 07:56:57', 'Farhan1010'),
(133, 45.00, 'BDT', 'USD', 0.5400, '2023-11-27 07:57:02', 'Farhan1010'),
(134, 4535.00, 'BDT', 'USD', 54.4200, '2023-11-27 07:57:13', 'Farhan1010'),
(135, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:57:43', 'Farhan1010'),
(136, 456345.00, 'BDT', 'USD', 5476.1400, '2023-11-27 07:58:04', 'Farhan1010'),
(137, 456345.00, 'BDT', 'USD', 5476.1400, '2023-11-27 07:58:26', 'Farhan1010'),
(138, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 07:58:36', 'Farhan1010'),
(139, 30.00, 'BDT', 'USD', 0.3600, '2023-11-27 07:58:52', 'Farhan1010'),
(140, 56.00, 'USD', 'BDT', 4735.3600, '2023-11-27 07:59:24', 'Farhan1010'),
(141, 456345.00, 'BDT', 'USD', 5476.1400, '2023-11-27 08:20:46', 'Farhan1010'),
(142, 56.00, 'BDT', 'USD', 0.6720, '2023-11-27 10:07:35', 'Farhan1010'),
(143, 56.00, 'BDT', 'USD', 0.6720, '2023-12-03 10:14:02', 'Farhan1010'),
(144, 456345.00, 'BDT', 'USD', 5476.1400, '2023-12-03 10:14:11', 'Farhan1010'),
(145, 56.00, 'BDT', 'USD', 0.6720, '2023-12-03 10:14:23', 'Farhan1010'),
(146, 45.00, 'BDT', 'USD', 0.5400, '2023-12-03 12:40:11', 'Farhan1010'),
(147, -17.00, 'BDT', 'USD', -0.2040, '2023-12-06 15:18:19', 'farhanamin092'),
(148, -24.00, 'BDT', 'USD', -0.2880, '2023-12-06 15:18:28', 'farhanamin092'),
(149, -32.00, 'BDT', 'USD', -0.3840, '2023-12-06 15:18:35', 'farhanamin092'),
(150, -62.00, 'BDT', 'USD', -0.7440, '2023-12-06 15:18:43', 'farhanamin092'),
(151, 456345.00, 'BDT', 'USD', 5476.1400, '2023-12-09 16:14:45', 'farhanamin092'),
(152, 56.00, 'BDT', 'USD', 0.6720, '2023-12-09 16:14:56', 'farhanamin092'),
(153, 56.00, 'BDT', 'USD', 0.6720, '2023-12-11 16:32:18', 'farhanamin092'),
(154, 56.00, 'BDT', 'USD', 0.6720, '2023-12-11 16:32:31', 'farhanamin092'),
(155, 52.00, 'GBP', 'BDT', 5846.8800, '2023-12-11 16:33:07', 'farhanamin092'),
(156, 56.00, 'BDT', 'USD', 0.6720, '2023-12-11 16:52:58', 'farhanamin092'),
(157, 56.00, 'BDT', 'USD', 0.6720, '2023-12-11 16:56:36', 'farhanamin092'),
(158, 456345.00, 'BDT', 'USD', 5476.1400, '2023-12-12 14:49:59', 'farhanamin092'),
(159, 456345.00, 'BDT', 'USD', 5476.1400, '2023-12-12 14:50:43', 'farhanamin092'),
(160, 456345.00, 'BDT', 'USD', 5476.1400, '2023-12-12 14:53:33', 'farhanamin092'),
(161, 456345.00, 'BDT', 'USD', 5476.1400, '2023-12-12 14:55:41', 'farhanamin092'),
(162, 45.00, 'BDT', 'USD', 0.5400, '2023-12-12 14:55:48', 'farhanamin092'),
(163, 45.00, 'BDT', 'USD', 0.5400, '2023-12-12 14:56:02', 'farhanamin092'),
(164, 45.00, 'BDT', 'USD', 0.5400, '2023-12-12 14:56:03', 'farhanamin092'),
(165, 45.00, 'BDT', 'USD', 0.5400, '2023-12-12 14:56:04', 'farhanamin092'),
(166, 45.00, 'BDT', 'USD', 0.5400, '2023-12-12 14:56:07', 'farhanamin092'),
(167, 56.00, 'BDT', 'USD', 0.6720, '2023-12-12 14:56:34', 'farhanamin092'),
(168, 56.00, 'BDT', 'USD', 0.6720, '2023-12-12 14:57:08', 'farhanamin092'),
(169, 456345.00, 'BDT', 'USD', 5476.1400, '2023-12-12 14:58:52', 'farhanamin092'),
(170, 45.00, 'BDT', 'USD', 0.5400, '2023-12-12 14:59:25', 'farhanamin092'),
(171, 456345.00, 'BDT', 'USD', 5476.1400, '2023-12-12 15:01:00', 'farhanamin092'),
(172, 456345.00, 'BDT', 'USD', 5476.1400, '2023-12-12 15:01:44', 'farhanamin092'),
(173, 56.00, 'BDT', 'USD', 0.6720, '2023-12-12 15:01:53', 'farhanamin092'),
(174, 456345.00, 'BDT', 'USD', 5476.1400, '2023-12-12 15:02:23', 'farhanamin092'),
(175, 456345.00, 'BDT', 'USD', 5476.1400, '2023-12-12 15:02:41', 'farhanamin092'),
(176, 456345.00, 'BDT', 'USD', 5476.1400, '2023-12-12 15:05:51', 'farhanamin092'),
(177, 56.00, 'BDT', 'USD', 0.6720, '2023-12-12 15:10:27', 'farhanamin092'),
(178, 456345.00, 'BDT', 'USD', 5476.1400, '2023-12-12 19:18:12', 'd1'),
(179, 56.00, 'BDT', 'USD', 0.6720, '2023-12-12 19:18:20', 'd1'),
(180, 56.00, 'BDT', 'USD', 0.6720, '2023-12-12 19:24:09', 's1'),
(181, 456345.00, 'USD', 'GBP', 346822.2000, '2023-12-12 19:55:52', 'd1'),
(182, 56.00, 'BDT', 'USD', 0.6720, '2023-12-12 19:57:01', 'd1'),
(183, 45.00, 'GBP', 'USD', 58.9500, '2023-12-13 07:52:22', 'd1'),
(184, 456345.00, 'BDT', 'USD', 5476.1400, '2023-12-13 09:06:25', 'd1');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(50) NOT NULL,
  `question` varchar(250) NOT NULL,
  `answer` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(1, 'What payment methods are accepted?', 'Card,Bikash and Nagad is accepted.'),
(2, 'What payment methods are accepted?', 'Card,Bikash and Nagad is accepted.'),
(3, 'Why do I need to provide my card details?', 'Properties normally request this to guarantee your booking, and the card is often used to pay when you book. If you don’t need to make a prepayment, then they may hold an amount on your card to ensure it has sufficient funds. This test payment will b'),
(4, 'Can I request an extra bed in my room and will there be extra costs?', 'You can find information about extra beds in the “House Rules” on the property page when you book. Added costs, if any, are not included in the reservation price. When you make a booking, you can request an extra bed in the “Special requests” box. If'),
(28, 'Can I book tickets for a child travelling alone?', 'YES'),
(29, 'a?', 'dsa'),
(30, 'ques?', 'ans'),
(31, 'dsadsa?', 'adssada'),
(32, 'csd?', 'dsf'),
(33, 'Can I book tickets for a child travelling alone?', 'YES'),
(34, 'Can I book tickets for a child travelling alone?', 'NO'),
(35, 'Can I book tickets for a child travelling alone?', 'YES'),
(36, 'Can I book tickets for a child travelling alone?', 'YES'),
(37, 'Can I book tickets for a child travelling alone?', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `flightnotification`
--

CREATE TABLE `flightnotification` (
  `id` int(11) NOT NULL,
  `from_` varchar(200) NOT NULL,
  `to_` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flightnotification`
--

INSERT INTO `flightnotification` (`id`, `from_`, `to_`, `date`, `time`) VALUES
(0, '', '', '0000-00-00', '00:00:00.000000'),
(0, 'Dhaka', 'Barisal', '2023-12-01', '00:12:00.000000'),
(0, 'Dhaka', 'Barisal', '2023-12-01', '00:12:00.000000'),
(0, 'Dhaka', 'Barisal', '2023-12-01', '00:12:00.000000'),
(0, 'Dhaka', 'Barisal', '2023-12-01', '00:12:00.000000'),
(0, 'Dhaka', 'Barisal', '2023-12-01', '00:12:00.000000'),
(0, 'Dhaka', 'Barisal', '2023-12-01', '00:12:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` int(50) NOT NULL,
  `from_` varchar(200) NOT NULL,
  `to_` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `price` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`id`, `from_`, `to_`, `date`, `time`, `price`) VALUES
(0, 'Dhaka', 'Barisal', '2023-12-01', '00:12:00.000000', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `hotelmanagement`
--

CREATE TABLE `hotelmanagement` (
  `room_id` int(11) NOT NULL,
  `hotel_name` varchar(30) NOT NULL,
  `room_type` varchar(10) NOT NULL,
  `location` varchar(40) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotelmanagement`
--

INSERT INTO `hotelmanagement` (`room_id`, `hotel_name`, `room_type`, `location`, `price`) VALUES
(3, 'Reddison', 'Double', 'DHAKA', 50000),
(8, 'ABC', 'Single', 'DHAKA', 3000),
(18, 'Bhandari', 'Double', 'DHAKA', 2121);

-- --------------------------------------------------------

--
-- Table structure for table `mybookings`
--

CREATE TABLE `mybookings` (
  `Id` int(50) NOT NULL,
  `hotel_name` varchar(200) NOT NULL,
  `room_type` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mybookings`
--

INSERT INTO `mybookings` (`Id`, `hotel_name`, `room_type`, `location`, `date`) VALUES
(0, 'Jhinuk', 'single', 'Dhaka', '2023-12-01'),
(0, 'Polash', 'single', 'Comilla', '2023-12-06'),
(0, 'Polash', 'single', 'Comilla', '2023-12-06'),
(0, 'Polash', 'single', 'Comilla', '2023-12-06'),
(0, 'Polash', 'single', 'Comilla', '2023-12-06'),
(0, 'Polash', 'single', 'Comilla', '2023-12-06'),
(0, 'Polash', 'single', 'Comilla', '2023-12-06'),
(0, 'Polash', 'single', 'Comilla', '2023-12-06'),
(0, 'Polash', 'single', 'Comilla', '2023-12-06'),
(0, 'Polash', 'single', 'Comilla', '2023-12-06'),
(0, 'Polash', 'single', 'Comilla', '2023-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `myflightbookings`
--

CREATE TABLE `myflightbookings` (
  `Id` int(50) NOT NULL,
  `from_` varchar(200) NOT NULL,
  `to_` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myflightbookings`
--

INSERT INTO `myflightbookings` (`Id`, `from_`, `to_`, `date`, `time`) VALUES
(0, '', '', '0000-00-00', '00:00:00.000000'),
(7, 'Dhaka', 'Barisal', '2023-12-01', '09:30:00.000000'),
(11, 'Dhaka', 'Barisal', '2023-12-01', '09:30:00.000000'),
(12, 'Dhaka', 'Barisal', '2023-12-01', '09:30:00.000000'),
(13, 'Chittagong', 'Coxbazar', '2023-11-03', '01:37:00.000000'),
(14, 'Dhaka', 'Barisal', '2023-12-01', '09:30:00.000000'),
(15, 'Dhaka', 'Barisal', '2023-12-01', '09:30:00.000000'),
(16, 'Dhaka', 'Barisal', '2023-12-13', '01:55:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(50) NOT NULL,
  `Location` varchar(200) NOT NULL,
  `hotel_name` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `Location`, `hotel_name`, `Date`, `Time`) VALUES
(0, 'Dhaka', 'Jhinuk', '2023-12-01', '00:00:00.000000'),
(0, 'Comilla', 'Polash', '2023-12-06', '00:00:00.000000'),
(0, 'Comilla', 'Polash', '2023-12-06', '00:00:00.000000'),
(0, 'Comilla', 'Polash', '2023-12-06', '00:00:00.000000'),
(0, 'Comilla', 'Polash', '2023-12-06', '00:00:00.000000'),
(0, 'Comilla', 'Polash', '2023-12-06', '00:00:00.000000'),
(0, 'Comilla', 'Polash', '2023-12-06', '00:00:00.000000'),
(0, 'Comilla', 'Polash', '2023-12-06', '00:00:00.000000'),
(0, 'Comilla', 'Polash', '2023-12-06', '00:00:00.000000'),
(0, 'Comilla', 'Polash', '2023-12-06', '00:00:00.000000'),
(0, 'Comilla', 'Polash', '2023-12-06', '00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `card_number` varchar(16) DEFAULT NULL,
  `mobile_number` varchar(11) DEFAULT NULL,
  `payment_amount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `username`, `payment_method`, `card_number`, `mobile_number`, `payment_amount`) VALUES
(0, 'f1', 'Card', '1234123412341234', NULL, 300.00),
(73, 'farhanamin092', 'Card', '1111111111111111', NULL, 56.00),
(96, 'farhanamin092', 'Nagad', NULL, '42313562681', 456345.00),
(98, 'farhanamin092', 'Card', '1111111111111111', NULL, 456345.00),
(144, 'd1', 'Card', '1111111111111111', NULL, 56.00),
(145, 's1', 'Card', '1111111111111111', NULL, 456345.00),
(146, 'd1', 'Card', '1111111111111111', NULL, 50.00),
(148, 'd1', 'Card', '1111111111111111', NULL, 5000.00),
(149, 'd1', 'Nagad', NULL, '42313562681', 5000.00),
(150, 'd1', 'bKash', NULL, '01782222222', 5000.00),
(151, 'd1', 'Card', '1111111111111111', NULL, 5000.00),
(152, 'd1', 'Card', '1111111111111111', NULL, 5000.00);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` text NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `username`, `name`, `rating`, `review`, `service_type`, `created_at`) VALUES
(0, 'f1', '', 5, 'Good', 'hotel', '2023-12-09 18:12:17'),
(79, 'farhanamin092', '', 1, 'dadacacda', 'flight', '2023-11-12 15:31:11'),
(127, 'Farhan1010', '', 5, 'weqfw', 'car_rental', '2023-12-03 10:15:01'),
(128, 'farhanamin092', '', 5, 'wfewsfw', 'hotel', '2023-12-06 15:19:12'),
(130, 'farhanamin092', '', 5, 'we4trfw', 'flight', '2023-12-12 15:22:28'),
(133, 'farhanamin092', '', 5, 'erftgw', 'hotel', '2023-12-12 15:44:47'),
(136, 's1', '', 5, 'sdfsfws', 'hotel', '2023-12-12 19:25:16'),
(137, 'd1', '', 5, 'Good Experience', 'hotel', '2023-12-12 19:57:57'),
(138, 'd1', '', 5, 'very good', 'hotel', '2023-12-13 07:53:06'),
(139, 'd1', '', 5, 'very good', 'hotel', '2023-12-13 07:54:06'),
(140, 'd1', '', 4, 'good', 'flight', '2023-12-13 09:06:50');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `hotel_name` varchar(255) DEFAULT NULL,
  `room_type` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`hotel_name`, `room_type`, `location`, `date`, `Price`) VALUES
('Hotel A', 'Single Room', 'City A', '2023-11-23', 100.00),
('Hotel B', 'Double Room', 'City B', '2023-11-24', 150.00),
('Hotel C', 'Suite', 'City C', '2023-11-25', 200.00),
('Hotel D', 'Single Room', 'City A', '2023-11-26', 120.00),
('Hotel E', 'Double Room', 'City B', '2023-11-27', 180.00),
('Polash', 'single', 'Comilla', '2023-12-06', 5000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tourpackages`
--

CREATE TABLE `tourpackages` (
  `PackageNo` varchar(20) NOT NULL,
  `Destination` varchar(30) NOT NULL,
  `Accomodations` varchar(30) NOT NULL,
  `Meals` varchar(30) NOT NULL,
  `Days` int(10) NOT NULL,
  `Price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tourpackages`
--

INSERT INTO `tourpackages` (`PackageNo`, `Destination`, `Accomodations`, `Meals`, `Days`, `Price`) VALUES
('Hol', 'sas', 'Hotel Jhin1', 'Available', 211, 100010),
('Silver', 'Comilla - dhaka', 'Hotel Jhin', 'Available', 2121, 9000);

-- --------------------------------------------------------

--
-- Table structure for table `transection`
--

CREATE TABLE `transection` (
  `Name` varchar(20) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Balance` int(11) NOT NULL,
  `PaymentMethod` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transection`
--

INSERT INTO `transection` (`Name`, `UserName`, `Phone`, `Balance`, `PaymentMethod`) VALUES
('Sakib', 's1', 21212, 22000, 'Bkash'),
('sakib', 's222', 66545, 0, ''),
('Fatin', 'f1', 111111, 0, ''),
('Redison', 'hotelManagement', 212121, 0, ''),
('Noor', 'noor', 1698542042, 0, ''),
('Fatin', 'fatin', 1701060964, 3321, 'NAGAD'),
('Karim', 'karim', 1734923463, 0, ''),
('Shahriar', 'd1', 1781151001, 0, ''),
('Admin', 'admin', 1959700785, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Phone` varchar(200) NOT NULL,
  `DOB` date NOT NULL,
  `OTP` int(10) NOT NULL,
  `ProfilePic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`Name`, `Email`, `UserName`, `Password`, `Phone`, `DOB`, `OTP`, `ProfilePic`) VALUES
('Admin', 'fatindaraz@gmail.com', 'admin', '111@', '1959700785', '2004-11-15', 0, '../upload/admin.png'),
('Fatin', 'fatinnoor24@gmail.com', 'f1', '11111111A@a', '1111111', '2000-08-28', 0, '../upload/'),
('Redison', 'radison11@gmail.com', 'hotelManagement', '111@', '212121', '2023-12-08', 0, '../upload/'),
('Sakib', 'sam@mail.com', 's1', 'Farhan11111@', '1212124', '2023-10-10', 0, '../upload/'),
('Shahriar Alam', 'farhanamin092@gmail.com', 'd1', 'Farhan11111@', '012147483647', '2023-12-05', 0, '../upload/profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `mobile_number` varchar(15) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `retype_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `full_name`, `country`, `birthdate`, `mobile_number`, `password`, `retype_password`) VALUES
(1, 'siam10', 'siam100@gmail.com', 'siam ahmed ', 'bangladesh', '2023-10-31', '01435367688', 'Farhan%1234', ''),
(4, 'sadat10', 'sadat@gmail.com', 'sadat masud', 'china', '2023-10-04', '2563764764', '112233', ''),
(7, 'farhan092', 'farhanamin092@gmail.com', 'Ahmed Farhan Amin', 'United Kingdom', '2023-11-16', '01781151001', '10farhan10', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `cancelflightnotification`
--
ALTER TABLE `cancelflightnotification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cancelroomnotification`
--
ALTER TABLE `cancelroomnotification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactinfo`
--
ALTER TABLE `contactinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conversion_history`
--
ALTER TABLE `conversion_history`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotelmanagement`
--
ALTER TABLE `hotelmanagement`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `myflightbookings`
--
ALTER TABLE `myflightbookings`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transection`
--
ALTER TABLE `transection`
  ADD PRIMARY KEY (`Phone`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cancelflightnotification`
--
ALTER TABLE `cancelflightnotification`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cancelroomnotification`
--
ALTER TABLE `cancelroomnotification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `conversion_history`
--
ALTER TABLE `conversion_history`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
