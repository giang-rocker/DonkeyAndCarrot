-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2014 at 01:45 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `donkeyandcarrot`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_action`
--

CREATE TABLE IF NOT EXISTS `tb_action` (
  `ACTION_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ACTION_TITLE` varchar(100) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `ACTION_POINT` int(11) DEFAULT NULL,
  `ACTION_DESC` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ACTION_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_action`
--

INSERT INTO `tb_action` (`ACTION_ID`, `ACTION_TITLE`, `ACTION_POINT`, `ACTION_DESC`) VALUES
(1, 'đấm', -5, 'thật đau'),
(2, 'cắn', -5, 'thật đau'),
(3, 'ôm', 5, 'thật thắm thiết'),
(4, 'hôn', 10, 'thật thắm thiết');

-- --------------------------------------------------------

--
-- Table structure for table `tb_diary`
--

CREATE TABLE IF NOT EXISTS `tb_diary` (
  `DIARY_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(11) NOT NULL,
  `DIARY_CONTENT` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DIARY_TITLE` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DIARY_TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`DIARY_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tb_diary`
--

INSERT INTO `tb_diary` (`DIARY_ID`, `USER_ID`, `DIARY_CONTENT`, `DIARY_TITLE`, `DIARY_TIMESTAMP`) VALUES
(1, 2, 'Nội dung nhật ký\r\ntôi có thể viết lung tung mà không hại gì\r\nenter thế nào đây ?\r\n\r\nxxx', '', '2014-12-19 01:45:55'),
(2, 2, 'Nội dung nhật ký\r\ntôi có thể viết lung tung mà không hại gì\r\nenter thế nào đây ?\r\n\r\nxxx', '', '2014-12-19 01:46:03'),
(3, 2, 'Nội dung nhật ký\r\ntôi có thể viết lung tung mà không hại gì\r\nenter thế nào đây ?\r\n\r\nxxx', '', '2014-12-19 01:46:03'),
(4, 2, 'Nội dung nhật ký\r\ntôi có thể viết lung tung mà không hại gì\r\nenter thế nào đây ?\r\n\r\nxxx', '', '2014-12-19 01:46:03'),
(5, 2, 'Nội dung nhật ký\r\ntôi có thể viết lung tung mà không hại gì\r\nenter thế nào đây ?\r\n\r\nxxx', '', '2014-12-19 01:46:03'),
(6, 2, 'Nội dung nhật ký\r\ntôi có thể viết lung tung mà không hại gì\r\nenter thế nào đây ?\r\n\r\nxxx', '', '2014-12-19 01:46:03'),
(7, 2, 'Nội dung nhật ký\r\ntôi có thể viết lung tung mà không hại gì\r\nenter thế nào đây ?\r\n\r\nxxx', '', '2014-12-19 01:46:03'),
(8, 2, 'Nội dung nhật ký\r\ntôi có thể viết lung tung mà không hại gì\r\nenter thế nào đây ?\r\n\r\nxxx', '', '2014-12-19 01:46:03'),
(9, 2, 'Nội dung nhật ký\r\ntôi có thể viết lung tung mà không hại gì\r\nenter thế nào đây ?\r\n\r\nxxx', '', '2014-12-19 01:46:03'),
(10, 2, 'Ä‘Ã¢y laÌ€ nÃ´Ì£i dung mÆ¡Ìi\r\n\r\nTÃ´i coÌ thÃªÌ‰ Äƒn thuÌ‰y tinh maÌ€ khÃ´ng haÌ£i giÌ€\r\n NhÆ°ng maÌ€ vÃ¢Ìn Ä‘ÃªÌ€ bÃ¢y giÆ¡ laÌ€ phaÌ‰i laÌ€m sao Ä‘ÃªÌ‰ noÌ£i dung goÌƒ vaÌ€o nhÃ¢Ì£n caÌc theÌ‰ HTML nhÆ° caÌc triÌ€nh biÃªn soaÌ£n tet khaÌc', '', '2014-12-19 07:09:30'),
(11, 2, 'đây là nội dung mới', '', '2014-12-19 07:10:06'),
(12, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\nUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '', '2014-12-19 07:10:09'),
(13, 2, 'lasjfs fask fhaslhf lakjsdhf lashdflkjashdfasdfasd fasd fas fasd f', '', '2014-12-19 07:10:16'),
(14, 2, 'test tiếng việt có dấu', '', '2014-12-19 07:10:31'),
(15, 2, 'enter\r\n\r\nenter\r\n\r\nenter\r\n\r\nenter', '', '2014-12-19 07:10:40'),
(16, 2, 'nội dung viết lung tung<br/>\r\nxuống dòng<br/>\r\n<br/>', '', '2014-12-19 07:11:51'),
(17, 2, 'xuống dòng <br/>xuống dòng <br/>xuống dòng <br/>xuống dòng <br/>xuống dòng <br/>xuống dòng <br/>xuống dòng <br/>xuống dòng <br/>xuống dòng <br/>xuống dòng <br/>', '', '2014-12-19 07:12:03'),
(18, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\nUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '', '2014-12-19 07:13:49'),
(19, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\nUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'TITLE NÃ”Ì£I DUNG TIÃŠÌNG VIÃŠÌ£T', '2014-12-19 07:19:58'),
(20, 2, 'nội dung tiếng việt nội dung tiếng việt nội dung tiếng việt', 'TITLE NÃ”Ì£I DUNG TIÃŠÌNG VIÃŠÌ£T', '2014-12-19 07:21:31'),
(21, 2, 'nội dung tiếng việt nội dung tiếng việt nội dung tiếng việt', 'TITLE NỘI DUNG TIẾNG VIỆT', '2014-12-19 07:22:33'),
(22, 2, 'xuống dòng\r\nxuống dòng\r\n\r\nxuống dòng', 'TITLE tiếng việt', '2014-12-19 07:25:06'),
(27, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\nUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\nUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '', '2014-12-19 07:53:08'),
(28, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\nUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\nUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\nUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\nUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '', '2014-12-19 07:53:16'),
(29, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo cons', 'TITLE NỘI DUNG TIẾNG VIỆT', '2014-12-19 07:57:35');

-- --------------------------------------------------------

--
-- Table structure for table `tb_notes`
--

CREATE TABLE IF NOT EXISTS `tb_notes` (
  `NOTE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(11) NOT NULL,
  `NOTE_DATE` datetime DEFAULT NULL,
  `NOTE_CONTENT` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`NOTE_ID`),
  KEY `FK_ASSOCIATION_2` (`USER_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=291 ;

--
-- Dumping data for table `tb_notes`
--

INSERT INTO `tb_notes` (`NOTE_ID`, `USER_ID`, `NOTE_DATE`, `NOTE_CONTENT`) VALUES
(1, 1, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(2, 2, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(3, 1, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(4, 1, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(5, 2, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(6, 2, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(7, 1, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(8, 1, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(9, 2, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(10, 2, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(11, 1, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(12, 1, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(13, 2, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(14, 2, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(15, 1, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(16, 1, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(17, 2, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(18, 2, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(19, 1, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(20, 1, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(21, 2, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(22, 2, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(23, 1, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(24, 1, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(25, 2, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(26, 2, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(27, 1, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(28, 1, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(29, 2, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(30, 2, '2014-12-01 00:00:00', '          Nếu có một ngày thức dậy và không thấy em đâu, thì anh chỉ mong là em đang đi làm đồ ăn sáng cho mình :D\r\n         '),
(233, 2, '2014-12-10 15:58:21', 'new'),
(234, 2, '2014-12-10 15:58:21', 'new'),
(235, 2, '2014-12-10 15:58:21', 'new'),
(236, 2, '2014-12-10 15:58:21', 'new'),
(237, 2, '2014-12-10 15:58:21', 'new'),
(283, 2, '2014-12-10 16:02:59', 'nói cái beep'),
(284, 2, '2014-12-10 16:04:28', 'nói cái beep'),
(285, 2, '2014-12-10 16:04:34', 'nói cái gì mà nói'),
(286, 2, '2014-12-10 16:04:39', 'sdfasdf'),
(287, 2, '2014-12-10 16:04:39', 'sdfasdf'),
(288, 2, '2014-12-10 16:05:25', 'không có nói cái gì hết'),
(289, 2, '2014-12-14 20:03:47', 'xxxxxxxx'),
(290, 2, '2014-12-14 20:10:11', 'Tôi có thể ăn thủy tinh mà không hại gì');

-- --------------------------------------------------------

--
-- Table structure for table `tb_timelines`
--

CREATE TABLE IF NOT EXISTS `tb_timelines` (
  `TIMELINE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TIMELINE_DATE` date DEFAULT NULL,
  `TIMELINE_LOCATION` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `TIMELINE_ICON` int(11) DEFAULT NULL,
  `TIMELINE_TYPE` int(11) DEFAULT NULL,
  `TIMELINE_TITLE` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `TIMELINE_CONTENT` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TIMELINE_TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`TIMELINE_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tb_timelines`
--

INSERT INTO `tb_timelines` (`TIMELINE_ID`, `TIMELINE_DATE`, `TIMELINE_LOCATION`, `TIMELINE_ICON`, `TIMELINE_TYPE`, `TIMELINE_TITLE`, `USER_ID`, `TIMELINE_CONTENT`, `TIMELINE_TIMESTAMP`) VALUES
(1, '2013-12-26', 'CẦN THƠ', 1, 1, 'Tiêu đề timeline', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2014-12-14 13:21:14'),
(2, '2014-07-29', 'CẦN THƠ', 2, 2, 'Tiêu đề timeline', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2014-12-14 13:21:14'),
(3, '2014-12-02', 'CẦN THƠ', 2, 2, 'Tiêu đề timeline', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2014-12-14 13:21:14'),
(4, '2014-12-02', 'CẦN THƠ', 2, 2, 'Tiêu đề timeline', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2014-12-14 13:21:14'),
(5, '2014-12-02', 'CẦN THƠ', 2, 2, 'Tiêu đề timeline', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2014-12-14 13:21:14'),
(6, '2014-12-02', 'CẦN THƠ', 2, 2, 'Tiêu đề timeline', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2014-12-14 13:21:14'),
(7, '2014-12-02', 'CẦN THƠ', 2, 2, 'Tiêu đề timeline', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2014-12-14 13:21:14'),
(8, '2014-12-02', 'CẦN THƠ', 2, 2, 'Tiêu đề timeline', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2014-12-14 13:21:14'),
(9, '2014-12-02', 'CẦN THƠ', 2, 2, 'Tiêu đề timeline', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2014-12-14 13:21:14'),
(10, '2013-06-19', 'CẦN THƠ', 4, 4, 'Tiêu đề timeline', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2014-12-14 13:21:14'),
(11, '0000-00-00', 'CẦN THƠ', 1, 1, 'xxxx', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2014-12-14 13:21:14'),
(12, '0000-00-00', 'cÃ¢Ì€n thÆ¡', NULL, NULL, 'TITLE', 2, 'ASDasdasdsad', '2014-12-18 17:09:09'),
(13, '0000-00-00', 'hcm', NULL, NULL, 'title', 2, 'asdasdcz xczx c', '2014-12-18 17:10:42'),
(14, '0000-00-00', 'can tho', NULL, NULL, 'title', 2, 'name="txtTIMELINE_DATE"', '2014-12-18 17:11:48'),
(15, '0000-00-00', 'x', NULL, NULL, 'x', 2, 'x', '2014-12-18 17:12:46'),
(16, '0000-00-00', 'x', NULL, NULL, 'x', 2, 'x', '2014-12-18 17:14:55'),
(17, '2014-12-12', 'xxx', NULL, NULL, 'x', 2, 'x', '2014-12-18 17:15:19'),
(18, '2014-12-13', 'an giang', NULL, NULL, 'title', 2, 'tÃ´i coÌ thÃªÌ‰ Äƒn thuÌ‰y tinh maÌ€ khÃ´ng haÌ£i giÌ€ tiÃªÌng viÃªÌ£t coÌ dÃ¢Ìu', '2014-12-18 17:15:52'),
(19, '2014-12-14', 'lô tô', NULL, NULL, 'Tiêu đề', 2, 'tôi có thể ăn thủy tinh mà không hại gì tiếng việt có dấu', '2014-12-18 17:16:34'),
(20, '2014-12-15', 'đà nẵng', NULL, NULL, 'ĐÀ NẴNG', 2, 'ĐÀ NẴNG', '2014-12-18 17:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE IF NOT EXISTS `tb_users` (
  `USER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_USERNAME` varchar(50) DEFAULT NULL,
  `USER_BIRTHDAY` date DEFAULT NULL,
  `USER_PASSWORD` varchar(50) DEFAULT NULL,
  `USER_REALNAME` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`USER_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`USER_ID`, `USER_USERNAME`, `USER_BIRTHDAY`, `USER_PASSWORD`, `USER_REALNAME`) VALUES
(1, 'donkey', NULL, NULL, 'Donkey'),
(2, 'carrot', NULL, 'hihi', 'Carrot');

-- --------------------------------------------------------

--
-- Table structure for table `user_action_history`
--

CREATE TABLE IF NOT EXISTS `user_action_history` (
  `USER_ID_ACTION` int(11) NOT NULL,
  `ACTION_ID` int(11) NOT NULL,
  `USER_ID_VICTIM` int(11) NOT NULL,
  `LOG_TIME` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `LOG_COMMENT` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`USER_ID_ACTION`,`ACTION_ID`,`USER_ID_VICTIM`,`LOG_TIME`),
  KEY `FK_USER_ACTION_HISTORY2` (`ACTION_ID`),
  KEY `FK_USER_ACTION_HISTORY3` (`USER_ID_VICTIM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_action_history`
--

INSERT INTO `user_action_history` (`USER_ID_ACTION`, `ACTION_ID`, `USER_ID_VICTIM`, `LOG_TIME`, `LOG_COMMENT`) VALUES
(2, 1, 1, '2014-12-01 00:00:00', 'chẳng vì lý do gì cả, vì em thích thế'),
(2, 2, 1, '2014-12-04 00:00:00', 'chẳng vì lý do gì cả, vì em thích thế'),
(2, 3, 1, '2014-12-04 00:00:00', 'vì em nhớ anh nhiều lắḿ'),
(2, 3, 1, '2014-12-13 00:00:00', 'vì em thương anh nhiều lắm'),
(2, 4, 1, '2014-12-04 00:00:00', 'vì em nhớ anh nhiều lắḿ');

-- --------------------------------------------------------

--
-- Table structure for table `user_timeline_story`
--

CREATE TABLE IF NOT EXISTS `user_timeline_story` (
  `USER_ID` int(11) NOT NULL,
  `TIMELINE_ID` int(11) NOT NULL,
  `USER_TIMELINE_STORY` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`USER_ID`,`TIMELINE_ID`),
  KEY `FK_USER_TIMELINE_STORY2` (`TIMELINE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_timeline_story`
--

INSERT INTO `user_timeline_story` (`USER_ID`, `TIMELINE_ID`, `USER_TIMELINE_STORY`) VALUES
(1, 1, 'Câu chuyện của em\r\nID 1'),
(2, 1, 'Câu chuyện của anh\r\nID 1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_notes`
--
ALTER TABLE `tb_notes`
  ADD CONSTRAINT `FK_ASSOCIATION_2` FOREIGN KEY (`USER_ID`) REFERENCES `tb_users` (`USER_ID`);

--
-- Constraints for table `user_action_history`
--
ALTER TABLE `user_action_history`
  ADD CONSTRAINT `FK_USER_ACTION_HISTORY` FOREIGN KEY (`USER_ID_ACTION`) REFERENCES `tb_users` (`USER_ID`),
  ADD CONSTRAINT `FK_USER_ACTION_HISTORY2` FOREIGN KEY (`ACTION_ID`) REFERENCES `tb_action` (`ACTION_ID`),
  ADD CONSTRAINT `FK_USER_ACTION_HISTORY3` FOREIGN KEY (`USER_ID_VICTIM`) REFERENCES `tb_users` (`USER_ID`);

--
-- Constraints for table `user_timeline_story`
--
ALTER TABLE `user_timeline_story`
  ADD CONSTRAINT `FK_USER_TIMELINE_STORY` FOREIGN KEY (`USER_ID`) REFERENCES `tb_users` (`USER_ID`),
  ADD CONSTRAINT `FK_USER_TIMELINE_STORY2` FOREIGN KEY (`TIMELINE_ID`) REFERENCES `tb_timelines` (`TIMELINE_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
