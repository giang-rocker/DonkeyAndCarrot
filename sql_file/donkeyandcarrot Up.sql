-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 24, 2014 at 01:16 PM
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
(2, 'đá', -5, 'thật đau'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `tb_diary`
--

INSERT INTO `tb_diary` (`DIARY_ID`, `USER_ID`, `DIARY_CONTENT`, `DIARY_TITLE`, `DIARY_TIMESTAMP`) VALUES
(57, 2, 'Anh thấy em lười viết tay quá :) Nên em có thể viết vào đây :)<br><br>Thương anh để đây này :)<br><br>', 'THƯƠNG NHAU ĐỂ ĐÂY', '2014-12-24 11:59:36');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=299 ;

--
-- Dumping data for table `tb_notes`
--

INSERT INTO `tb_notes` (`NOTE_ID`, `USER_ID`, `NOTE_DATE`, `NOTE_CONTENT`) VALUES
(296, 1, '2014-11-30 19:00:12', 'Nếu một ngày kia thức dậy không thấy em đâu, thì anh chỉ muốn là em đang đi làm đồ ăn sáng cho mình :)'),
(297, 1, '2014-12-24 19:01:45', 'Em có thể viết note cho anh và dán lên đây :)'),
(298, 1, '2014-12-23 02:00:00', '4:00 AM : Anh đang ngồi code những dòng cuối cùng của trang web :)');

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
  `TIMELINE_CONTENT` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TIMELINE_TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`TIMELINE_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tb_timelines`
--

INSERT INTO `tb_timelines` (`TIMELINE_ID`, `TIMELINE_DATE`, `TIMELINE_LOCATION`, `TIMELINE_ICON`, `TIMELINE_TYPE`, `TIMELINE_TITLE`, `TIMELINE_CONTENT`, `TIMELINE_TIMESTAMP`) VALUES
(23, '2013-12-27', 'cần thơ', NULL, NULL, 'lần đầu gặp em', 'Chẳng dám nhìn em, như kiểu anh sợ khi mạo phạm nhìn công chúa :) Mình đã lướt qua nhau như thế :D', '2014-12-24 12:08:04'),
(24, '2012-10-16', 'cần thơ', NULL, NULL, 'lần đầu tìm em', '"vậy còn bạn Hương em ?...facebook sao tìm dc nhỉ" <br/><br/> Không hiểu sao anh lại có ý định tìm em :)', '2014-12-24 12:09:51'),
(25, '2014-07-27', 'đâu đó :D', NULL, NULL, 'Lần đầu nhìn em', 'Đâu đó trên đường đi Đà Lạt, khi xe dừng lại ở một cây xăng, khi nhìn ra cửa sổ, anh đã thấy em\r\n<br/>\r\nAnh nhìn em vì không biết em là ai, vì không biết ... đó là em :)', '2014-12-24 12:38:44'),
(26, '2014-07-28', 'đà lạt', NULL, NULL, 'lần đầu nói chuyện', 'Lần đầu mình nói chuyện với nhau này. Ở vườn hoa Đà Lạt<br/>\n\nEm tìm anh :) <br/>\n ', '2014-12-24 13:14:26'),
(27, '2014-07-29', 'đà lạt', NULL, NULL, 'lần đầu mình đi chơi', 'Lang thang cùng em, nơi thành phố xa lạ, giữa cơn mưa giữa đêm<br/>\r\n<br/>\r\nAnh và em cùng bước những bước đầu tiên trên chung một con đường<br/>', '2014-12-24 13:01:41');

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
  `LOG_TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `LOG_COMMENT` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`USER_ID_ACTION`,`ACTION_ID`,`USER_ID_VICTIM`,`LOG_TIME`),
  KEY `FK_USER_ACTION_HISTORY2` (`ACTION_ID`),
  KEY `FK_USER_ACTION_HISTORY3` (`USER_ID_VICTIM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_action_history`
--

INSERT INTO `user_action_history` (`USER_ID_ACTION`, `ACTION_ID`, `USER_ID_VICTIM`, `LOG_TIME`, `LOG_COMMENT`) VALUES
(1, 4, 2, '2014-12-24 12:17:55', 'Chẳng vì gì cả :) Vì anh thích thế :)'),
(2, 4, 1, '2014-12-24 12:21:53', 'vì em nhớ anh nhiều lắm');

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
