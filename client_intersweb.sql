-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2015 at 12:09 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `client_intersweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `content_temporary`
--

CREATE TABLE IF NOT EXISTS `content_temporary` (
  `no` int(100) NOT NULL AUTO_INCREMENT,
  `id_pengguna` varchar(110) NOT NULL,
  `name_themes` varchar(110) NOT NULL,
  `data_source` text NOT NULL,
  UNIQUE KEY `id_pengguna` (`id_pengguna`),
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `content_temporary`
--

INSERT INTO `content_temporary` (`no`, `id_pengguna`, `name_themes`, `data_source`) VALUES
(1, 'raditya', 'motocross', '\n\n    <div class="bg" mode="edit" style="border: none;">\n    <div class="img" style="border: none; background: url(http://localhost/project/intersweb2/templates/motocross/pic/bg.jpg) 50% 50% / cover no-repeat fixed transparent;" mode="edit"></div>\n    </div>   \n  \n                \n      \n                <div type="images" aria-disabled="false" style="border: none; cursor: move; position: absolute; top: 63px; left: 149px; width: 226px; height: 68px; background: none 0% 0% repeat scroll transparent;" mode="edit" init="15" resize="false" class="column2">\n                    <img src="http://localhost/project/intersweb2/templates/motocross/pic/logo.png" width="100%">\n                    </div>\n\n\n\n                <div type="menu" class="menu" style="border: none; cursor: move; position: absolute; left: 443px; top: 69px; width: 633px; height: 53px;" mode="edit" resize="false" init="1">\n                            <ul class="default">\n                               \n                              <li initials="home"><a href="http://localhost/project/intersweb/layout/pages/home ?&gt;">ada</a></li>\n                               \n                              <li initials="home"><a href="http://localhost/project/intersweb/layout/pages/home ?&gt;">saman</a></li>\n                                \n                            </ul>\n                        </div>\n    \n    \n     \n        <div type="centerBox" aria-disabled="false" style="border: none; cursor: default; left: -26.45px; top: 413px; background: none 0% 0% repeat scroll transparent;" element="layout" class="content" id="content" mode="edit" resizelayout="false" initlayout="12">           \n                            \n\n                    <div type="leftBox" element="layout" style="top: 15px; z-index: 20; border: none; cursor: move; left: 0px; position: absolute; width: 941px; height: 396px; background: url(http://localhost/project/intersweb2/templates/motocross/pic/slide.png) 50% 50% / cover no-repeat scroll transparent;" mode="edit" resizelayout="false" initlayout="20">\n                    <div class="moveLayout" mode="edit" style="border: none; display: none;"></div>  \n                    </div>\n\n                    <div type="leftBox" element="layout" style="top: 435px; z-index: 21; border: none; cursor: move; left: 0px; position: absolute; height: 180px; width: 536px; background: rgb(255, 255, 255);" mode="edit" resizelayout="false" initlayout="21">\n                    <div type="images" aria-disabled="false" style="border: none; cursor: move; padding: 5px; left: 3px; top: 2px; position: absolute; z-index: 28; right: -5px; bottom: -5px; width: 207px; height: 139px;" mode="edit" init="27" resize="false" class="column2">\n                    <img id="27" src="http://localhost/project/intersweb2/templates/motocross/pic/banner2.jpg">\n                    </div>\n\n                    <div type="title" aria-disabled="false" style="border: none; cursor: move; left: 254px; top: -12px; position: absolute; width: 235px; height: 23px; z-index: 23; background: none 0% 0% repeat scroll transparent;" mode="edit" class="columnFull" resize="false" init="10"><h2 style="line-height:90%;font-size:18px;color:#333;">Open Track Days</h2></div>\n                    <div type="text" aria-disabled="false" style="border: none; cursor: move; left: 256px; top: 22px; position: absolute; width: 240px; height: 63px; right: -5px; bottom: -5px; color: rgb(51, 51, 51); background: none 0% 0% repeat scroll transparent;" mode="edit" class="columnFull" resize="false" init="11">This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about.</div>\n                        <div type="images" aria-disabled="false" style="border: none; cursor: default; padding: 5px; left: 390px; top: 127px; position: absolute; z-index: 28; right: -5px; bottom: -5px; width: 133px; height: 40px;" mode="edit" init="30" resize="false" class="column2">\n                        <img id="30" src="http://localhost/project/intersweb2/templates/motocross/pic/btn.jpg">\n                        </div>\n                    <div class="moveLayout" mode="edit" style="border: none; display: none;"></div>    \n                    </div>\n\n\n                    <div type="images" aria-disabled="false" style="border: none; cursor: move; padding: 5px; left: 565px; top: 416px; position: absolute; z-index: 29; right: -5px; bottom: -5px; width: 348px; height: 202px;" mode="edit" init="28" resize="false" class="column2">\n                    <img id="28" src="http://localhost/project/intersweb2/templates/motocross/pic/screen.png">\n                    </div> \n\n\n\n                    <div type="leftBox" element="layout" style="top: 655px; z-index: 24; border: none; cursor: move; left: 0px; width: 382px; position: absolute; height: 193px; background: none 0% 0% repeat scroll rgb(210, 10, 0);" mode="edit" resizelayout="false" initlayout="24">\n                    <div type="images" aria-disabled="false" style="border: none; cursor: move; padding: 5px; left: 11px; top: 11px; position: absolute; z-index: 30; right: -5px; bottom: -5px; width: 166px; height: 158px;" mode="edit" init="29" resize="false" class="column2">\n                    <img id="29" src="http://localhost/project/intersweb2/templates/motocross/pic/banner1.png">\n                    </div>\n\n                    <div type="title" aria-disabled="false" style="border: none; cursor: default; left: 219px; top: -6px; position: absolute; width: 126px; height: 48px; z-index: 23; background: none 0% 0% repeat scroll transparent;" mode="edit" class="columnFull" resize="false" init="32"><h2 style="line-height:90%;font-size:26px;color:#FFF;">OFFICIAL SHOP</h2></div>\n                        <div type="images" aria-disabled="false" style="border: none; cursor: default; padding: 5px; left: 227px; top: 139px; position: absolute; z-index: 28; right: -5px; bottom: -5px; width: 133px; height: 40px;" mode="edit" init="31" resize="false" class="column2">\n                        <img id="31" src="http://localhost/project/intersweb2/templates/motocross/pic/button2.jpg">\n                        </div>\n                    <div class="moveLayout" mode="edit" style="border: none; display: none;"></div>    \n                    </div>   \n\n\n\n                    <div type="leftBox" element="layout" style="top: 655px; z-index: 25; border: none; cursor: move; left: 427px; width: 509px; position: absolute; height: 183px; background: none 0% 0% repeat scroll rgb(255, 255, 255);" mode="edit" resizelayout="false" initlayout="25">\n                    <div type="images" aria-disabled="false" style="border: none; cursor: move; padding: 5px; left: 11px; top: 11px; position: absolute; z-index: 30; right: -5px; bottom: -5px; width: 221px; height: 154px;" mode="edit" init="33" resize="false" class="column2">\n                    <img id="33" src="http://localhost/project/intersweb2/templates/motocross/pic/banner3.jpg">\n                    </div>\n                    <div type="title" aria-disabled="false" style="border: none; cursor: default; left: 240px; top: -12px; position: absolute; width: 235px; height: 23px; z-index: 23; background: none 0% 0% repeat scroll transparent;" mode="edit" class="columnFull" resize="false" init="34"><h2 style="line-height:90%;font-size:18px;color:#333;">Next Race</h2></div>\n                    <div type="text" aria-disabled="false" style="border: none; cursor: default; left: 241px; top: 19px; position: absolute; width: 240px; height: 63px; right: -5px; bottom: -5px; color: rgb(51, 51, 51); background: none 0% 0% repeat scroll transparent;" mode="edit" class="columnFull" resize="false" init="35">This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about.</div>\n                        <div type="images" aria-disabled="false" style="border: none; cursor: default; padding: 5px; left: 359px; top: 126px; position: absolute; z-index: 28; right: -5px; bottom: -5px; width: 133px; height: 40px;" mode="edit" init="36" resize="false" class="column2">\n                        <img id="36" src="http://localhost/project/intersweb2/templates/motocross/pic/btn.jpg">\n                        </div>\n                    <div class="moveLayout" mode="edit" style="border: none; display: none;"></div>    \n                    </div> \n                    \n\n                    <div type="images" aria-disabled="false" style="border: none; cursor: move; padding: 5px; left: -6px; top: 847px; position: absolute; z-index: 28; right: -5px; bottom: -5px; width: 942px; height: 247px;" mode="edit" init="37" resize="false" class="column2">\n                        <img id="37" src="http://localhost/project/intersweb2/templates/motocross/pic/sliding34.png">\n                    </div>\n\n                    <div type="leftBox" element="layout" style="top: 1115px; z-index: 26; border: none; cursor: move; left: 0px; position: absolute; width: 940px; height: 124px; background: none 0% 0% repeat scroll rgb(255, 255, 255);" mode="edit" resizelayout="false" initlayout="26">\n                        <div type="images" aria-disabled="false" style="border: none; cursor: default; padding: 5px; left: 29px; top: 31px; position: absolute; z-index: 28; right: -5px; bottom: -5px; width: 137px; height: 69px;" mode="edit" init="38" resize="false" class="column2">\n                        <img src="http://localhost/project/intersweb2/templates/motocross/pic/partner1.jpg" id="38">\n                        </div>\n                        <div type="images" aria-disabled="false" style="border: none; cursor: default; padding: 5px; left: 197px; top: 27px; position: absolute; z-index: 28; right: -5px; bottom: -5px; width: 137px; height: 69px;" mode="edit" init="39" resize="false" class="column2">\n                        <img src="http://localhost/project/intersweb2/templates/motocross/pic/partner2.jpg" id="39">\n                        </div>\n                        <div type="images" aria-disabled="false" style="border: none; cursor: default; padding: 5px; left: 367px; top: 24px; position: absolute; z-index: 28; right: -5px; bottom: -5px; width: 137px; height: 69px;" mode="edit" init="40" resize="false" class="column2">\n                        <img src="http://localhost/project/intersweb2/templates/motocross/pic/partner3.jpg" id="40">\n                        </div>\n                        <div type="images" aria-disabled="false" style="border: none; cursor: default; padding: 5px; left: 543px; top: 26px; position: absolute; z-index: 28; right: -5px; bottom: -5px; width: 137px; height: 69px;" mode="edit" init="41" resize="false" class="column2">\n                        <img src="http://localhost/project/intersweb2/templates/motocross/pic/partner4.jpg" init="41">\n                        </div>\n\n                         <div type="images" aria-disabled="false" style="border: none; cursor: default; padding: 5px; left: 757px; top: 31px; position: absolute; z-index: 28; right: -5px; bottom: -5px; width: 137px; height: 69px;" mode="edit" init="42" resize="false" class="column2">\n                        <img src="http://localhost/project/intersweb2/templates/motocross/pic/partner5.jpg" id="42">\n                        </div>\n\n\n                    <div class="moveLayout" mode="edit" style="border: none; display: none;"></div>    \n                    </div> \n          \n            <div class="moveLayout" mode="edit" style="border: none; display: none;"></div>\n        </div>       \n     \n    \n    \n    \n    \n    \n       \n');

-- --------------------------------------------------------

--
-- Table structure for table `imagecategory`
--

CREATE TABLE IF NOT EXISTS `imagecategory` (
  `IdCategory` varchar(80) NOT NULL,
  `category_name` varchar(145) DEFAULT NULL,
  PRIMARY KEY (`IdCategory`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imagecategory`
--

INSERT INTO `imagecategory` (`IdCategory`, `category_name`) VALUES
('img00001', 'default'),
('img000019', 'banner'),
('img00002', 'animals'),
('img000020', 'pattern'),
('img000021', 'vector'),
('img000022', 'button'),
('img00003', 'abstract');

-- --------------------------------------------------------

--
-- Table structure for table `imageupload`
--

CREATE TABLE IF NOT EXISTS `imageupload` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(45) DEFAULT NULL,
  `ImageCategory_IdCategory` varchar(80) NOT NULL,
  PRIMARY KEY (`no`,`ImageCategory_IdCategory`),
  KEY `fk_ImageUpload_ImageCategory` (`ImageCategory_IdCategory`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=95 ;

--
-- Dumping data for table `imageupload`
--

INSERT INTO `imageupload` (`no`, `path`, `ImageCategory_IdCategory`) VALUES
(14, 'Speed_Detector_Bigger.jpg', 'img00001'),
(19, '1642-690f8cb68a-kreavi.jpg', 'img00001'),
(20, 'mobile-website-design.png', 'img00001'),
(21, 'html-and-css-admin-template.jpg', 'img00001'),
(23, '1.jpg', 'img00001'),
(27, '2.jpg', 'img00001'),
(28, 'COD-After-Hours.jpg', 'img00001'),
(30, 'bann-olahraga.png', 'img00003'),
(31, 'bg2.jpg', 'img000020'),
(32, 'bg5.jpg', 'img000020'),
(33, 'bg7.jpg', 'img000020'),
(34, 'bg8.jpg', 'img000020'),
(36, 'bg10.jpg', 'img000020'),
(37, 'bg11.jpg', 'img000020'),
(39, 'bg13.jpg', 'img000020'),
(40, 'bg14.jpg', 'img000020'),
(41, 'home-page-slider-Golf.jpg', 'img00001'),
(42, 'logo.png', 'img00001'),
(43, 'canvas.png', 'img00001'),
(44, 'title-slider.gif', 'img00001'),
(48, 'sdf.png', 'img00001'),
(49, 'canvas.png', 'img00001'),
(50, 'download1.png', 'img00001'),
(51, 'slide.png', 'img00001'),
(52, 'RESERVENOW.png', 'img00001'),
(55, '9_03.png', 'img000022'),
(56, '9_05.png', 'img000022'),
(57, '9_09.png', 'img000022'),
(58, '9_11.png', 'img000022'),
(59, '9_11.png', 'img000022'),
(60, '9_14.png', 'img000022'),
(61, '9_16.png', 'img000022'),
(62, '9_26.png', 'img000022'),
(63, '9_28.png', 'img000022'),
(64, '9_29.png', 'img000022'),
(65, '9_30.png', 'img000022'),
(66, '9_31.png', 'img000022'),
(67, '9_32.png', 'img000022'),
(68, '9_33.png', 'img000022'),
(69, '9_41.png', 'img000022'),
(70, '9_43.png', 'img000022'),
(71, '9_45.png', 'img000022'),
(72, '9_46.png', 'img000022'),
(73, '9_47.png', 'img000022'),
(74, '9_48.png', 'img000022'),
(75, '9_49.png', 'img000022'),
(76, '9_57.png', 'img000022'),
(77, '9_59.png', 'img000022'),
(78, '9_60.png', 'img000022'),
(79, '9_61.png', 'img000022'),
(80, '9_62.png', 'img000022'),
(81, '9_63.png', 'img000022'),
(82, '9_64.png', 'img000022'),
(83, '9_72.png', 'img000022'),
(84, '9_73.png', 'img000022'),
(85, '9_74.png', 'img000022'),
(86, '9_75.png', 'img000022'),
(87, '9_78.png', 'img000022'),
(88, '9_79.png', 'img000022'),
(89, '9_77.png', 'img000022'),
(90, 'Screen-home.png', 'img000021'),
(91, 'Screen-car.png', 'img000021'),
(92, 'Screen-medical.png', 'img000021'),
(93, 'site_0592_0004-464-0-20121115151308.jpg', 'img000020'),
(94, 'slide33_slide1.jpg', 'img00001');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `no` int(90) NOT NULL AUTO_INCREMENT,
  `theme` varchar(200) NOT NULL,
  `name_pages` varchar(200) NOT NULL,
  `id_users` int(90) NOT NULL,
  `template_name` varchar(150) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=128 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`no`, `theme`, `name_pages`, `id_users`, `template_name`) VALUES
(75, 'adventure', 'coba', 35, 'coba'),
(76, 'motocross', 'about', 27, 'about'),
(79, 'default', 'about', 26, 'about'),
(108, 'adventure', 'gobal', 35, 'global'),
(126, 'motocross', 'tentang kami', 27, 'tentang-kami');

-- --------------------------------------------------------

--
-- Table structure for table `templatepageslayout`
--

CREATE TABLE IF NOT EXISTS `templatepageslayout` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name_pages` varchar(145) DEFAULT NULL,
  `content_pages` text,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `templatepageslayout`
--

INSERT INTO `templatepageslayout` (`no`, `name_pages`, `content_pages`) VALUES
(1, 'about3', '      <br>\r\n        \r\n        \r\n          \r\n         <div type="title"  element="content" style=" cursor: move; padding: 0px; background:none; left: 23px; top: 4px; position: absolute; width: 521px; height: 37px;" mode="edit" class="columnFull" resize="false" init="5"><h2 style="font-size:20px;">This is a great space to write long text about your company</h2></div>\r\n   \r\n\r\n   <div type="text"  element="content"  style=" cursor: move; padding: 0px; background: none repeat scroll 0% 0% transparent; left: 24px; top: 52px; position: absolute; width:90%; height: 86px;" mode="edit" class="columnFull" resize="false" init="6">This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.</div>\r\n\r\n\r\n\r\n	\r\n\r\n<div type="text"  element="content" style="cursor: move; padding: 0px; left: 24px; top: 145.433px; position: absolute; width: 852px; height: 400px;" mode="edit" class="columnFull ui-resizable ui-draggable" resize="false" init="4">\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are. company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are. company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.\r\n </div>        \r\n        \r\n            \r\n        \r\n            \r\n        \r\n            \r\n        \r\n            \r\n        \r\n            \r\n        \r\n            \r\n        \r\n            \r\n        \r\n    '),
(2, 'about2', '    <div type="images"  element="content" style="border: medium none; cursor: default; padding: 0px; background:none; position: absolute; top: 41px; left: 44px; width: 295px;" mode="edit" init="3" resize="false" class="column2">\r\n    	<img id="3" src="http://localhost/project/intersweb/templates/default/pic/mobile-website-design.png" width="100%">\r\n    </div>\r\n    \r\n    \r\n    \r\n    <div type="title"  element="content" style="cursor: move; padding: 0px; background: none repeat scroll 0% 0% transparent; left: 392px; top: 32px;" mode="edit" class="column2" init="2" resize="false">\r\n    <h2 class="font5" style="font-size:28px;">This is a great space to write long text about your company</h2>\r\n    </div>\r\n    \r\n    \r\n\r\n<div type="text"  element="content" style="border: medium none; cursor: default; padding: 0px;left: 394px; top: 100px; position: absolute; width: 468px;" mode="edit" class="columnFull ui-resizable ui-draggable" init="4" resize="true">\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.\r\n </div>        \r\n        \r\n             \r\n        \r\n    '),
(3, 'about1', '      <br>\r\n        \r\n        \r\n          \r\n         <div type="title"  element="content" style=" cursor: move; padding: 0px; background:none; left: 23px; top: 4px; position: relative; width: 521px; height: 37px;" mode="edit" class="columnFull" resize="false" init="5"><h2 style="font-size:20px;">This is a great space to write long text about your company</h2></div>\r\n   \r\n\r\n   <div type="text"  element="content" style=" cursor: move; padding: 0px; background: none repeat scroll 0% 0% transparent; left: 24px; top:0px; position:relative; width:90%; height: 70px;" mode="edit" class="columnFull" resize="false" init="6">This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.</div>\r\n\r\n\r\n\r\n	\r\n\r\n<div type="text"  element="content" style="cursor: move; padding: 0px; left: 24px; top: 15.433px; position:relative; width: 852px; height: 400px;" mode="edit" class="columnFull ui-resizable ui-draggable" resize="true" init="4">\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are. company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are. company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.\r\n </div>        \r\n        \r\n            \r\n        \r\n            \r\n        \r\n            \r\n        \r\n            \r\n        \r\n            \r\n        \r\n            \r\n        \r\n            \r\n        \r\n    ');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `imageupload`
--
ALTER TABLE `imageupload`
  ADD CONSTRAINT `fk_ImageUpload_ImageCategory` FOREIGN KEY (`ImageCategory_IdCategory`) REFERENCES `imagecategory` (`IdCategory`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
