-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2010 at 02:54 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foospace`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutme`
--

CREATE TABLE IF NOT EXISTS `aboutme` (
  `id` int(11) NOT NULL,
  `entry` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutme`
--

INSERT INTO `aboutme` (`id`, `entry`) VALUES
(1, 0x4920616d2061206e6577206d6564696120686f73742f70726f64756365722c20737472617465676973742c20616e6420737065616b65722e2049206861766520776f726b65642061742043697479747620617320697473204e6577204d65646961205370656369616c69737420696e20323030362c207265706f7274696e67206f6e206e6577206d6564696120616e6420696e746572616374697665206e65777320616e64207472656e6473206f6e2061206e6174696f6e616c206e6577732070726f6772616d20616e6420686f7374696e672f70726f647563696e67205765626e6174696f6e2c20612068616c662d686f75722063757272656e7420616666616972732070726f6772616d2061626f757420696e7465726e65742063756c747572652e205072696f7220746f204369747974762c2049207370656e742074776f20796561727320776f726b696e67206173206120545620686f73742f70726f6475636572207769746820746563682067757275204c656f204c61706f7274652061742047347465636854562c2061206e6174696f6e616c2074656c65766973696f6e206368616e6e656c20656e746972656c79206465766f74656420746f20746563686e6f6c6f67792e),
(2, 0x49276d20612050684420736369656e7469737420284e6575726f70687973696f6c6f6779292077686f20736f6d65686f7720657363617065642066726f6d20746865206c616220616e64206973206e6f77206d616b696e67206d792077617920696e20696e646570656e64656e7420536369656e6365206d6564696120616e64206a6f75726e616c69736d2e),
(3, 0x4d79206e616d65206973204b6576696e2e20546869732069732077686572652049207368617265206d7920696465617320616e642068797065726c696e6b732e2049276d206120746563686e6f6c6f677920616e67656c20696e766573746f722c2073657269616c20656e7472657072656e6575722c20726f636b20636c696d6265722c20616e64206472696e6b6572206f66207465612e),
(4, 0x48692e2020416c20686572652e0d0a0d0a4e6f2c207265616c6c792c206974277320416c2e2020536572696f75736c792e0d0a0d0a576861742c20796f7520646f6e27742062656c69657665206d653f2020476f2061686561642c20636865636b207765697264616c2e636f6d2e20204869742074686520466f6f5370616365206c696e6b2e2020536565206966206974206272696e677320796f75207269676874206261636b20746f207468697320706167652e2020476f2061686561642e202049276c6c20776169742e0d0a0d0a5365653f202049742773207265616c6c79206d652e),
(5, 0x492065786973742061742074686520696e74657273656374696f6e206f6620636f6d6564792c20706f6c697469637320616e6420746563686e6f6c6f67792e204d79206f6666696369616c2064757469657320696e636c75646520576562202620506f6c697469637320656469746f7220617420546865204f6e696f6e2c20636f2d666f756e646572206f66204a61636b2026204a696c6c20506f6c697469637320616e6420686f7374206f6620506f70536369277320467574757265204f66206f6e20536369656e6365204368616e6e656c2e204261736963616c6c792c2049276d206120736d6172742c2066756e6e792c2065787472656d656c792068616e64736f6d6520647564652e);

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `id` int(11) NOT NULL,
  `friend` int(11) NOT NULL,
  PRIMARY KEY (`id`,`friend`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `friend`) VALUES
(1, 2),
(1, 3),
(1, 4),
(2, 1),
(2, 5),
(3, 1),
(3, 2),
(3, 4),
(3, 5),
(4, 1),
(4, 3),
(5, 1),
(5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `displayname` varchar(25) NOT NULL,
  `pic` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `displayname`, `pic`) VALUES
(1, 'ambermac', 'a2014ace2cb9dcf7d4201b2fde23de2ba96cef44', 'Amber-Mac', 'amber-mac.jpg'),
(2, 'drkiki', '9cbca021e1b4dcc21166604d70d89f610c0768ca', 'Dr. Kiki', 'KirstenSanford.jpg'),
(3, 'kevin', 'ffb4761cba839470133bee36aeb139f58d7dbaa9', 'Kevin Rose', 'kevin-rose-1.jpg'),
(4, 'weirdal', '0a4cfd6a243b35e750fe7762ab01651b747fb563', 'Weird Al', 'weird.jpg'),
(5, 'baratunde', 'f0a8d767dd854c3f701d795e7f96cfa605e17442', 'Baratunde', 'baratunde.jpg');
