-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 07, 2021 at 02:58 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `AID` int NOT NULL AUTO_INCREMENT,
  `AFNAME` varchar(20) NOT NULL,
  `ALNAME` varchar(20) NOT NULL,
  `UNAME` varchar(10) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PASSWD` varchar(30) NOT NULL,
  `CONTACT` double NOT NULL,
  PRIMARY KEY (`AID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `AFNAME`, `ALNAME`, `UNAME`, `EMAIL`, `PASSWD`, `CONTACT`) VALUES
(1, 'Dharmesh', 'Pathar', 'Dhamo', 'pathardharmesh901@gmail.com', 'Dhamo@9081', 9081939620);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `CTID` int NOT NULL AUTO_INCREMENT,
  `CTNAME` varchar(30) NOT NULL,
  PRIMARY KEY (`CTID`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CTID`, `CTNAME`) VALUES
(1, 'GUJARATI FOOD'),
(2, 'CHINESE FOOD'),
(3, 'SOUTH INDIAN FOOD'),
(4, 'PUNJABI FOOD'),
(5, 'COLD DRINK'),
(6, 'HOT DRINK'),
(7, 'MACXICAN FOOD'),
(8, 'ITALIAN FOOD'),
(9, 'SEA  FOOD'),
(11, 'THAI FOOD'),
(13, 'SWEET ITEAMS'),
(16, 'FRUITS');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `CID` int NOT NULL AUTO_INCREMENT,
  `CNAME` varchar(20) NOT NULL,
  `CEMAIL` varchar(30) NOT NULL,
  `CSUBJECT` varchar(20) NOT NULL,
  `CMESSAGE` varchar(30) NOT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`CID`, `CNAME`, `CEMAIL`, `CSUBJECT`, `CMESSAGE`) VALUES
(1, 'Dharmesh', 'pathardhramesh901@gmail.com', 'BIRTHDAY PARTY', 'Celebration'),
(2, 'Dharmesh', 'pathardhramesh901@gmail.com', 'BIRTHDAY PARTY', 'I want to Celebrate My Birthda'),
(3, 'MUNNA', 'munna007@gmail.com', 'munna ', 'munna'),
(4, 'Dharmesh', 'pathardharmesh901@gmail.com', 'BIRTHDAY PARTY', 'Contact Me\r\n9081939635');

-- --------------------------------------------------------

--
-- Table structure for table `cook`
--

DROP TABLE IF EXISTS `cook`;
CREATE TABLE IF NOT EXISTS `cook` (
  `CID` int NOT NULL AUTO_INCREMENT,
  `CFNAME` varchar(20) NOT NULL,
  `CLNAME` varchar(20) NOT NULL,
  `ADDRSS` varchar(30) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `AGE` int NOT NULL,
  `CONTACT` double NOT NULL,
  `EXPIERNCE` varchar(20) NOT NULL,
  `CTYPE` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `HIREDATE` date NOT NULL,
  `SALARY` int NOT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cook`
--

INSERT INTO `cook` (`CID`, `CFNAME`, `CLNAME`, `ADDRSS`, `GENDER`, `AGE`, `CONTACT`, `EXPIERNCE`, `CTYPE`, `HIREDATE`, `SALARY`) VALUES
(1, 'PARTH', 'RUPAPRA', 'RANGAVDHUT,SURAT', 'MALE', 20, 7878151420, '1 YEAR', 'GUJARATI FOOD', '2020-07-01', 10000),
(2, 'BRIJESH', 'PAGHDAL', 'ISHVARKRUPA SOC.,SURAT', 'MALE', 18, 9099156420, '2 YEAR', 'SOUTH INDIAN FOOD', '2019-11-15', 8000),
(14, 'DHARMISTHA', 'PATHAR', '10 BHOLANAGAR SOC. , MATAWADI', 'FEMALE', 20, 9081939620, '2 YEAR', 'GUJARATI FOOD', '2021-04-29', 12000),
(16, 'Rajendra', 'Rathod', 'BHAGUNAGAR SOC.,SURAT', 'MALE', 35, 9904453145, '5 YEAR', 'GUJARATI FOOD', '2017-01-12', 18000),
(17, 'Dharmesh', 'Pathar', '18,VARSHA', 'MALE', 20, 9081939635, '1 YEAR', 'HOT DRINK', '2020-01-01', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `cookreg`
--

DROP TABLE IF EXISTS `cookreg`;
CREATE TABLE IF NOT EXISTS `cookreg` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(40) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PHONE` double NOT NULL,
  `PASSWD` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cookreg`
--

INSERT INTO `cookreg` (`ID`, `USERNAME`, `EMAIL`, `PHONE`, `PASSWD`) VALUES
(14, 'Dharmesh', 'pathardharmesh901@gmail.com', 9081939635, '3563cfdfea87da274c3f1952ce652985');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `FID` int NOT NULL AUTO_INCREMENT,
  `OID` int NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `RATING` int NOT NULL,
  `MESSAGE` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`FID`),
  KEY `ORDER3_FK_OID` (`OID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FID`, `OID`, `NAME`, `RATING`, `MESSAGE`) VALUES
(1, 4, 'Harsh Patel', 4, 'hitesh\r\nvery good service'),
(4, 5, 'Harsh Patel', 5, 'abcd'),
(5, 5, 'Dharmesh', 5, 'All The Best'),
(6, 7, 'RAMESH', 5, 'UPDATE'),
(7, 1, 'BIPIN', 5, 'VERY GOOD SERVICE\r\nVERY TESTY '),
(8, 1, 'DHAMO PATHAR', 1, 'hiii'),
(9, 1, 'DHAMO PATHAR', 1, 'hiii'),
(10, 1, 'DHAMO PATHAR', 1, 'hiii'),
(11, 1, 'DHAMO PATHAR', 1, 'hiii'),
(12, 1, 'DHAMO PATHAR', 1, 'hiii'),
(13, 1, 'DHAMO PATHAR', 2, 'hiii'),
(14, 1, 'DHAMO PATHAR', 1, 'hiii'),
(15, 1, 'DHAMO PATHAR', 3, 'hiii'),
(16, 1, 'DHAMO PATHAR', 4, 'hiii'),
(17, 1, 'DHAMO PATHAR', 5, 'hiii');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `MID` int NOT NULL AUTO_INCREMENT,
  `CTID` int NOT NULL,
  `MNAME` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `QNTY` varchar(30) NOT NULL,
  `PRICE` int NOT NULL,
  `MIMAGE` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`MID`),
  KEY `TABLEFK_CTID` (`CTID`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`MID`, `CTID`, `MNAME`, `QNTY`, `PRICE`, `MIMAGE`) VALUES
(1, 1, 'SEV-TAMETA', '500 gm', 50, 'SEV-TAMETA.JPG'),
(2, 1, 'PANEER TIKKA', '500 gm', 100, 'PTIKKA.JPG'),
(3, 1, 'AALOO PARROTHA', '1', 30, 'ALOO-PAROTHA.JPG'),
(4, 1, 'KADHI', '1', 30, 'KADHI.JPG'),
(5, 1, 'FAFDA', '1 KG', 200, 'FAFDA.JPG'),
(6, 2, 'CHOWMEIN', '1', 100, 'CHOWMEIN.JPG'),
(7, 2, 'MANCHURIAN', '1', 100, 'MANCHURIAN.JPG'),
(8, 2, 'NOODLE', '1', 50, 'NOODLES.JPG'),
(9, 2, 'CHINESE BHEL', '1', 100, 'CHINABHEL.JPG'),
(10, 2, 'SPRING ROLL', '1', 50, 'SPRROLL.JPG'),
(11, 3, 'DHOSA', '1', 50, 'DHOSA.JPG'),
(12, 3, 'PUTTU', '1', 100, 'PUTTU.JPG'),
(13, 3, 'CUCUMBER PACHADI', '1', 50, 'CUCUMBER.JPG'),
(14, 3, 'IDLI', '1', 100, 'IDLI.JPEG'),
(15, 3, 'MENDU VADA', '50', 50, 'VADA.jpeg'),
(16, 4, 'DAL MAKHNI', '1 KG', 500, 'DALMAKHNI.JPG'),
(17, 4, 'PALAK PANEER', '500 GM', 100, 'PALAKPANEER.JPG'),
(18, 4, 'SARSON GA SAG', '500GM', 200, 'SARSOSAG.JPEG'),
(19, 4, 'MASALA CHANA', '1', 100, 'CHANAMASALA.JPG'),
(20, 4, 'CHOLE BHATURE', '1', 100, 'CHOLEBHATURE.JPEG'),
(21, 5, 'COCO-COLA', '1', 30, 'COLA.JPG'),
(22, 5, 'FANTA', '1', 50, 'FANTA.JPG'),
(23, 5, 'LIMKA', '1', 50, 'LIMCA.JPG'),
(24, 5, 'MAZZA', '1', 50, 'MAZZA.JPG'),
(25, 5, 'THUMS-UP', '1', 50, 'TMBUP.JPG'),
(28, 6, 'HOT CHOCOLATE', '1', 80, 'HOTCOCO.JPEG'),
(29, 6, 'HIMALYAN TEA', '1', 30, 'HIMALAYANTEA.JPG'),
(30, 6, 'SOUP', '1', 50, 'SOUP.JPG'),
(31, 6, 'COFFE', '1', 30, 'COFFE.JPG'),
(32, 6, 'TEA', '1', 20, 'TEA.JPG'),
(48, 8, 'SALTIM BOCCA', '1', 50, '1 italian saltimbocca.jpeg'),
(49, 8, 'RIBOLLITA', '1', 500, '1 italian ribollita.jpeg'),
(50, 9, 'BLUE CRAB', '1', 90, '2 sea food blue crab.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ordr`
--

DROP TABLE IF EXISTS `ordr`;
CREATE TABLE IF NOT EXISTS `ordr` (
  `OID` int NOT NULL AUTO_INCREMENT,
  `TID` int NOT NULL,
  `ODATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `STATUS` int NOT NULL,
  PRIMARY KEY (`OID`),
  KEY `TABLEFK_T_TID` (`TID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ordr`
--

INSERT INTO `ordr` (`OID`, `TID`, `ODATE`, `STATUS`) VALUES
(1, 3, '2021-05-14 06:25:43', 1),
(2, 3, '2021-05-14 06:25:43', 1),
(3, 10, '2021-05-14 06:43:24', 1),
(4, 1, '2021-06-06 05:20:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ordrdlt`
--

DROP TABLE IF EXISTS `ordrdlt`;
CREATE TABLE IF NOT EXISTS `ordrdlt` (
  `KOT` int NOT NULL AUTO_INCREMENT,
  `MID` int NOT NULL,
  `MNAME` varchar(20) NOT NULL,
  `QNTY` varchar(20) NOT NULL,
  `PRICE` int NOT NULL,
  `TOTAL` int NOT NULL,
  `OID` int NOT NULL,
  PRIMARY KEY (`KOT`),
  KEY `ORDERFK_O_OID` (`OID`),
  KEY `MENUFK_M_ID` (`MID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ordrdlt`
--

INSERT INTO `ordrdlt` (`KOT`, `MID`, `MNAME`, `QNTY`, `PRICE`, `TOTAL`, `OID`) VALUES
(1, 1, 'SEV-TAMETA', '1', 50, 50, 2),
(2, 2, 'PANEER TIKKA', '1', 100, 100, 2),
(3, 11, 'DHOSA', '1', 50, 50, 2),
(4, 4, 'KADHI', '1', 30, 30, 2),
(5, 8, 'NOODLE', '1', 50, 50, 2),
(6, 22, 'FANTA', '1', 50, 50, 2),
(7, 1, 'SEV-TAMETA', '1', 50, 50, 3),
(8, 8, 'NOODLE', '1', 50, 50, 3),
(9, 31, 'COFFE', '1', 30, 30, 3),
(10, 1, 'SEV-TAMETA', '1', 50, 50, 4),
(11, 11, 'DHOSA', '1', 50, 50, 4),
(12, 17, 'PALAK PANEER', '1', 100, 100, 4);

-- --------------------------------------------------------

--
-- Table structure for table `parcel`
--

DROP TABLE IF EXISTS `parcel`;
CREATE TABLE IF NOT EXISTS `parcel` (
  `PID` int NOT NULL AUTO_INCREMENT,
  `CONTACT` double NOT NULL,
  `STATUS` int NOT NULL,
  `PDATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`PID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `parcel`
--

INSERT INTO `parcel` (`PID`, `CONTACT`, `STATUS`, `PDATE`) VALUES
(2, 9865327456, 1, '2021-05-05 13:33:08'),
(3, 9865327485, 1, '2021-05-05 14:50:26'),
(4, 9865327485, 1, '2021-05-05 14:51:48'),
(5, 9865327456, 0, '2021-05-05 14:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `parceldlt`
--

DROP TABLE IF EXISTS `parceldlt`;
CREATE TABLE IF NOT EXISTS `parceldlt` (
  `KOT` int NOT NULL AUTO_INCREMENT,
  `MID` int NOT NULL,
  `MNAME` varchar(30) NOT NULL,
  `QNTY` int NOT NULL,
  `PRICE` int NOT NULL,
  `TOTAL` int NOT NULL,
  `PID` int NOT NULL,
  PRIMARY KEY (`KOT`),
  KEY `TABLEFK_M1_ID` (`MID`),
  KEY `MENUFK_PID` (`PID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `parceldlt`
--

INSERT INTO `parceldlt` (`KOT`, `MID`, `MNAME`, `QNTY`, `PRICE`, `TOTAL`, `PID`) VALUES
(3, 1, 'SEV-TAMETA', 1, 50, 50, 2),
(4, 2, 'PANEER TIKKA', 1, 100, 100, 2),
(5, 8, 'NOODLE', 1, 50, 50, 2),
(6, 2, 'PANEER TIKKA', 1, 100, 100, 3),
(7, 1, 'SEV-TAMETA', 1, 50, 50, 4),
(8, 2, 'PANEER TIKKA', 1, 100, 100, 5);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `PID` int NOT NULL AUTO_INCREMENT,
  `OID` int NOT NULL,
  `NAME` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TYPE` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EMAIL` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CONTACT` double NOT NULL,
  `AMOUNT` int NOT NULL,
  `STATUS` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `PAYID` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `DATE` datetime NOT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PID`, `OID`, `NAME`, `TYPE`, `EMAIL`, `CONTACT`, `AMOUNT`, `STATUS`, `PAYID`, `DATE`) VALUES
(1, 1, 'Dharmesh Pathar', 'order', 'pathardharmesh901@gmail.com', 9081939635, 2950, 'complete', 'pay_H5WILIYvmnafCu', '2021-05-01 11:58:19'),
(2, 1, 'Bipin Patel', 'parcel', 'pathardharmesh901@gmail.com', 9081939635, 2950, 'complete', 'pay_H79Ia9seJSKUWP', '2021-05-05 02:46:37'),
(12, 4, 'Dharmesh', 'order', 'pathardharmesh901@gmail.com', 9081939635, 200, 'pending', '', '2021-06-06 05:21:54'),
(13, 4, 'Dharmesh', 'order', 'pathardharmesh901@gmail.com', 9081939635, 200, 'pending', '', '2021-06-06 05:22:32'),
(14, 4, 'Dharmesh', 'order', 'pathardhramesh901@gmail.com', 9081939635, 200, 'complete', 'pay_HJentpEUtK22d4', '2021-06-06 05:23:08'),
(15, 4, 'Dharmesh', 'parcel', 'pathardharmesh901@gmail.com', 9865327485, 50, 'complete', 'pay_HJpPTXRa8L1wqb', '2021-06-06 03:45:19'),
(16, 4, 'Dharmesh', 'order', 'pathardharmesh901@gmail.com', 9081939635, 200, 'complete', 'pay_HJpRIgZZ4apnJf', '2021-06-06 03:47:27'),
(17, 4, 'Dharmesh', 'order', 'pathardharmesh901@gmail.com', 9081939635, 200, 'complete', 'pay_HJpS2F56xkc2xY', '2021-06-06 03:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `RID` int NOT NULL AUTO_INCREMENT,
  `OID` int NOT NULL,
  `NO_ORDER` int NOT NULL,
  `TOTALINCM` int NOT NULL,
  PRIMARY KEY (`RID`),
  KEY `ORDER2_FK_OID` (`OID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `special`
--

DROP TABLE IF EXISTS `special`;
CREATE TABLE IF NOT EXISTS `special` (
  `SID` int NOT NULL AUTO_INCREMENT,
  `CID` int NOT NULL,
  `MID` int NOT NULL,
  `MNAME` varchar(20) NOT NULL,
  `DISCOUNT` int NOT NULL,
  `DESCRIPTION` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`SID`),
  KEY `TABLEFK_C_ID` (`CID`),
  KEY `TABLEFK_M_ID` (`MID`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `special`
--

INSERT INTO `special` (`SID`, `CID`, `MID`, `MNAME`, `DISCOUNT`, `DESCRIPTION`) VALUES
(22, 1, 1, 'SEV-TAMETA', 5, 'VERY TESTY FOOD'),
(24, 2, 6, 'CHOWMEIN', 8, 'VERY TESTY FOOD\r\n'),
(25, 3, 11, 'DHOSA', 5, 'VERY TESTY FOOD'),
(26, 4, 18, 'SARSO DA SANG', 10, 'VERY TESTY FOOD\r\n'),
(27, 5, 21, 'COCO-COLA', 2, 'VERY TESTY FOOD'),
(28, 6, 30, 'SOUP', 5, 'VERY TESTY FOOD'),
(34, 1, 5, 'Fafda', 10, 'Very Crispy');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

DROP TABLE IF EXISTS `tables`;
CREATE TABLE IF NOT EXISTS `tables` (
  `TID` int NOT NULL AUTO_INCREMENT,
  `TABLE_NO` int NOT NULL,
  `NO_SEAT` int NOT NULL,
  `STATUS` varchar(10) NOT NULL,
  PRIMARY KEY (`TID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`TID`, `TABLE_NO`, `NO_SEAT`, `STATUS`) VALUES
(1, 101, 4, 'BOOK'),
(2, 102, 1, 'NO BOOK'),
(3, 103, 5, 'NO BOOK'),
(4, 104, 1, 'NO BOOK'),
(5, 105, 1, 'NO BOOK'),
(6, 106, 1, 'NO BOOK'),
(7, 107, 1, 'NO BOOK'),
(8, 108, 1, 'NO BOOK'),
(9, 109, 1, 'NO BOOK'),
(10, 110, 8, 'NO BOOK'),
(11, 111, 1, 'NO BOOK'),
(12, 112, 1, 'NO BOOK');

-- --------------------------------------------------------

--
-- Table structure for table `waiter`
--

DROP TABLE IF EXISTS `waiter`;
CREATE TABLE IF NOT EXISTS `waiter` (
  `WID` int NOT NULL AUTO_INCREMENT,
  `WFNAME` varchar(20) NOT NULL,
  `WLNAME` varchar(20) NOT NULL,
  `ADDRSS` varchar(30) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `AGE` int NOT NULL,
  `CONTACT` double NOT NULL,
  `EXPIERNCE` varchar(20) NOT NULL,
  `HIREDATE` date NOT NULL,
  `SALARY` int NOT NULL,
  PRIMARY KEY (`WID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `waiter`
--

INSERT INTO `waiter` (`WID`, `WFNAME`, `WLNAME`, `ADDRSS`, `GENDER`, `AGE`, `CONTACT`, `EXPIERNCE`, `HIREDATE`, `SALARY`) VALUES
(1, 'MAGAN', 'RAVAL', 'GANESHNAGAR,SURAT', 'MALE', 20, 7845129620, '1 YEAR', '2020-06-01', 11000),
(2, 'BHAVIK', 'PANDAL', 'SURAT', 'MALE', 20, 9685742520, '2 YEAR', '2020-07-05', 8000),
(3, 'JEETU', 'PRAJAPATI', 'GHODAPUR,SURAT', 'MALE', 25, 9865327420, '1 YEAR', '2020-07-07', 10000),
(6, 'NAVISHA', 'PATOLIYA', 'SHIV DHARSHAN SOC.,KAMREJ', 'FEMALE', 20, 9635241920, '1 YEAR', '2020-07-08', 10000),
(9, 'CHAMPA', 'RATHOD', 'RAMANNAGAR,AMROLI', 'FEMALE', 20, 9904485685, '1 YEAR', '2021-05-28', 10000),
(10, 'Dharmesh', 'Pathar', 'Varsha , Surat', 'MALE', 20, 9081939635, '1 Year', '2020-04-01', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `waiterreg`
--

DROP TABLE IF EXISTS `waiterreg`;
CREATE TABLE IF NOT EXISTS `waiterreg` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `EMAIL` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `PHONE` double NOT NULL,
  `PASSWD` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `waiterreg`
--

INSERT INTO `waiterreg` (`ID`, `USERNAME`, `EMAIL`, `PHONE`, `PASSWD`) VALUES
(8, 'Dharmesh', 'pathardharmesh901@gmail.com', 9081939635, '3563cfdfea87da274c3f1952ce652985');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `ORDER3_FK_OID` FOREIGN KEY (`OID`) REFERENCES `ordr` (`OID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `TABLEFK_CTID` FOREIGN KEY (`CTID`) REFERENCES `category` (`CTID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ordr`
--
ALTER TABLE `ordr`
  ADD CONSTRAINT `TABLEFK_T_TID` FOREIGN KEY (`TID`) REFERENCES `tables` (`TID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ordrdlt`
--
ALTER TABLE `ordrdlt`
  ADD CONSTRAINT `MENUFK_M_ID` FOREIGN KEY (`MID`) REFERENCES `menu` (`MID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ORDERFK_O_OID` FOREIGN KEY (`OID`) REFERENCES `ordr` (`OID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parceldlt`
--
ALTER TABLE `parceldlt`
  ADD CONSTRAINT `MENUFK_PID` FOREIGN KEY (`PID`) REFERENCES `parcel` (`PID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `TABLEFK_M1_ID` FOREIGN KEY (`MID`) REFERENCES `menu` (`MID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `ORDER2_FK_OID` FOREIGN KEY (`OID`) REFERENCES `orders` (`OID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `special`
--
ALTER TABLE `special`
  ADD CONSTRAINT `TABLEFK_C_ID` FOREIGN KEY (`CID`) REFERENCES `category` (`CTID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `TABLEFK_M_ID` FOREIGN KEY (`MID`) REFERENCES `menu` (`MID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
