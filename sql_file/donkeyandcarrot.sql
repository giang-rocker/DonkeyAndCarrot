-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 14, 2014 at 03:28 AM
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
CREATE DATABASE IF NOT EXISTS `donkeyandcarrot` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `donkeyandcarrot`;

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
-- Table structure for table `tb_notes`
--

CREATE TABLE IF NOT EXISTS `tb_notes` (
  `NOTE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(11) NOT NULL,
  `NOTE_DATE` datetime DEFAULT NULL,
  `NOTE_CONTENT` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`NOTE_ID`),
  KEY `FK_ASSOCIATION_2` (`USER_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=289 ;

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
(288, 2, '2014-12-10 16:05:25', 'không có nói cái gì hết');

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
  PRIMARY KEY (`TIMELINE_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tb_timelines`
--

INSERT INTO `tb_timelines` (`TIMELINE_ID`, `TIMELINE_DATE`, `TIMELINE_LOCATION`, `TIMELINE_ICON`, `TIMELINE_TYPE`, `TIMELINE_TITLE`) VALUES
(1, '2013-12-26', 'Cần Thơ', 1, 1, 'Tiêu đề timeline'),
(2, '2014-07-29', 'Đà Lạt', 2, 2, 'Tiêu đề timeline'),
(3, '2014-12-02', 'SomeWhere', 2, 2, 'Tiêu đề timeline'),
(4, '2014-12-02', 'SomeWhere', 2, 2, 'Tiêu đề timeline'),
(5, '2014-12-02', 'SomeWhere', 2, 2, 'Tiêu đề timeline'),
(6, '2014-12-02', 'SomeWhere', 2, 2, 'Tiêu đề timeline'),
(7, '2014-12-02', 'SomeWhere', 2, 2, 'Tiêu đề timeline'),
(8, '2014-12-02', 'SomeWhere', 2, 2, 'Tiêu đề timeline'),
(9, '2014-12-02', 'SomeWhere', 2, 2, 'Tiêu đề timeline'),
(10, '2013-06-19', 'SOMEWHERE', 4, 4, 'Tiêu đề timeline'),
(11, '0000-00-00', 'Đâu đó', 1, 1, 'xxxx');

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
(2, 'carrot', NULL, NULL, 'Carrot');

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
