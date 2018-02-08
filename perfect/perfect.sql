-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2018-02-08 08:26:20
-- 服务器版本： 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perfect`
--

-- --------------------------------------------------------

--
-- 表的结构 `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `aid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `aname` varchar(255) NOT NULL,
  `atag` varchar(255) NOT NULL,
  `uid` int(10) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `address`
--

INSERT INTO `address` (`aid`, `aname`, `atag`, `uid`) VALUES
(1, '平阳路学府街口凯通大厦2层', '公司', 1);

-- --------------------------------------------------------

--
-- 表的结构 `boss`
--

DROP TABLE IF EXISTS `boss`;
CREATE TABLE IF NOT EXISTS `boss` (
  `bid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `bname` varchar(255) NOT NULL,
  `bthumb` varchar(255) NOT NULL,
  `bnumber` int(10) UNSIGNED NOT NULL,
  `bsales` varchar(10) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `boss`
--

INSERT INTO `boss` (`bid`, `bname`, `bthumb`, `bnumber`, `bsales`) VALUES
(1, '时尚啦啦家', '/perfect/static/upload/18-02-01/151746745816.jpg_100x100.jpg', 159, '1万'),
(2, '香奈儿原创女装店', '/perfect/static/upload/18-02-01/151746767884.jpg_100x100.jpg', 100, '900');

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL,
  `cthumb` varchar(255) NOT NULL,
  `pid` int(10) DEFAULT '0',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`cid`, `cname`, `cthumb`, `pid`) VALUES
(12, '裤子', '/perfect/static/upload/18-01-31/15173851968.jpg_750x999.v1c7E.70.webp', 0),
(13, '包包', '/perfect/static/upload/18-01-31/151738521448.jpg_999x999.v1c0.webp', 0),
(14, '气质毛衣', '/perfect/static/upload/18-01-31/151738523082.jpg_999x999.v1c0.webp', 0),
(9, '精选套装', '/perfect/static/upload/18-01-31/151738515441.jpg_999x999.v1c0.webp', 0),
(10, '裙子', '/perfect/static/upload/18-01-31/151738516692.jpg_999x999.v1c0.webp', 0),
(11, '鞋子', '/perfect/static/upload/18-01-31/151738518161.jpg_999x999.v1c0.webp', 0),
(8, '上衣', '/perfect/static/upload/18-01-31/151738513833.jpg_999x999.v1c0.webp', 0),
(15, '美护个妆', '/perfect/static/upload/18-01-31/151738525262.jpg_999x999.v1c0.webp', 0),
(16, '棉服', '/perfect/static/upload/18-01-31/151738526797.jpg_999x999.v1c0.webp', 0),
(17, '家居', '/perfect/static/upload/18-01-31/151738528351.jpg_999x999.v1c0.webp', 0),
(18, '男友', '/perfect/static/upload/18-01-31/151738530283.jpg_999x999.v1c0.webp', 0),
(19, '西服裤', '/perfect/static/upload/18-01-31/151738836293.jpg_999x999.v1c0.webp', 12),
(20, '喇叭裤', '/perfect/static/upload/18-01-31/151738838517.jpg_999x999.v1c0.webp', 12),
(21, '牛仔裤', '/perfect/static/upload/18-01-31/151738840276.jpg_750x999.v1c7E.70.webp', 12),
(22, '直筒裤', '/perfect/static/upload/18-01-31/151738842678.jpg_999x999.v1c0.webp', 12),
(23, '休闲裤', '/perfect/static/upload/18-01-31/151738842678.jpg_999x999.v1c0.webp', 12),
(24, '运动裤', '/perfect/static/upload/18-01-31/151738842678.jpg_999x999.v1c0.webp', 12),
(25, '小脚裤', '/perfect/static/upload/18-01-31/151738840276.jpg_750x999.v1c7E.70.webp', 12);

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

DROP TABLE IF EXISTS `goods`;
CREATE TABLE IF NOT EXISTS `goods` (
  `gid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `gname` varchar(255) NOT NULL,
  `gtag` varchar(255) NOT NULL,
  `gprice` float NOT NULL,
  `goriginprice` float NOT NULL,
  `gsales` int(10) NOT NULL,
  `glove` int(10) NOT NULL,
  `gactive` varchar(255) NOT NULL,
  `gthumb` varchar(255) NOT NULL,
  `gimages` varchar(500) NOT NULL,
  `gsize` varchar(255) NOT NULL,
  `gcontent` text NOT NULL,
  `bid` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`gid`, `gname`, `gtag`, `gprice`, `goriginprice`, `gsales`, `glove`, `gactive`, `gthumb`, `gimages`, `gsize`, `gcontent`, `bid`, `cid`) VALUES
(1, '冬季韩版百搭锥形休闲裤女新款宽松毛呢西装裤高腰显瘦小脚长裤子', '青春，活力，激情', 200, 300, 200, 100, '买就送', '/perfect/static/upload/18-02-05/151779526416.jpg_320x999.jpg', '/perfect/static/upload/18-02-05/151779527840.jpg_640x960.v1cOK.81.jpg,/perfect/static/upload/18-02-05/151779527898.jpg_640x960.v1cOK.81.jpg,/perfect/static/upload/18-02-05/151779527868.jpg_640x960.v1cOK.81.jpg', '/perfect/static/upload/18-02-05/151779545230.jpg_468x468.jpg', '<p><img src=\"/perfect/upload/image/18-02-05/1517795473942826.jpg\" title=\"1517795473942826.jpg\"/></p><p><img src=\"/perfect/upload/image/18-02-05/1517795473404498.jpg\" title=\"1517795473404498.jpg\"/></p><p><img src=\"/perfect/upload/image/18-02-05/1517795473120093.jpg\" title=\"1517795473120093.jpg\"/></p>', 1, 19),
(2, '时尚西服裤', '青春，靓丽，活泼', 200, 230, 100, 30, '买50送100', '/perfect/static/upload/18-02-05/151779592356.jpg_880x999.jpg', '/perfect/static/upload/18-02-05/151779595998.jpg_640x960.v1cOK.81.jpg,/perfect/static/upload/18-02-05/151779595983.jpg_880x999.jpg,/perfect/static/upload/18-02-05/151779595987.jpg_320x999.jpg', '/perfect/static/upload/18-02-05/151779596484.jpg_468x468.jpg', '<p><img src=\"/perfect/upload/image/18-02-05/1517795980538800.jpg\" title=\"1517795980538800.jpg\" width=\"640\" height=\"628\"/></p><p><img src=\"/perfect/upload/image/18-02-05/1517795980413449.jpg\" title=\"1517795980413449.jpg\"/></p><p><img src=\"/perfect/upload/image/18-02-05/1517795980829222.jpg\" title=\"1517795980829222.jpg\"/></p>', 1, 19),
(3, '九分西服裤', '青春，靓丽，美白', 49, 80, 20, 10, '买就送', '/perfect/static/upload/18-02-05/151779627751.jpg_640x960.v1cOK.81.jpg', '/perfect/static/upload/18-02-05/15177963268.jpg_640x960.v1cOK.81.jpg,/perfect/static/upload/18-02-05/151779632610.jpg', '/perfect/static/upload/18-02-05/151779633063.jpg_468x468.jpg', '<p><img src=\"/perfect/upload/image/18-02-05/1517796345136195.jpg\" title=\"1517796345136195.jpg\"/></p><p><img src=\"/perfect/upload/image/18-02-05/1517796345200528.jpg\" title=\"1517796345200528.jpg\"/></p><p><img src=\"/perfect/upload/image/18-02-05/1517796345945408.jpg\" title=\"1517796345945408.jpg\"/></p>', 1, 19);

-- --------------------------------------------------------

--
-- 表的结构 `manager`
--

DROP TABLE IF EXISTS `manager`;
CREATE TABLE IF NOT EXISTS `manager` (
  `id` tinyint(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `manager`
--

INSERT INTO `manager` (`id`, `username`, `password`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- 表的结构 `orderattach`
--

DROP TABLE IF EXISTS `orderattach`;
CREATE TABLE IF NOT EXISTS `orderattach` (
  `rid` int(10) NOT NULL AUTO_INCREMENT,
  `gid` int(10) NOT NULL,
  `number` int(10) NOT NULL,
  `oid` int(10) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `orderlist`
--

DROP TABLE IF EXISTS `orderlist`;
CREATE TABLE IF NOT EXISTS `orderlist` (
  `oid` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1' COMMENT '1代付款 2 代发货 3 待收货 4交易完成',
  PRIMARY KEY (`oid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `orderlist`
--

INSERT INTO `orderlist` (`oid`, `uid`, `status`) VALUES
(5, 1, 1),
(6, 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `shopcar`
--

DROP TABLE IF EXISTS `shopcar`;
CREATE TABLE IF NOT EXISTS `shopcar` (
  `sid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `gid` int(10) NOT NULL,
  `number` int(10) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `shopcar`
--

INSERT INTO `shopcar` (`sid`, `uid`, `gid`, `number`) VALUES
(1, 1, 1, 14),
(2, 1, 2, 4),
(3, 2, 3, 2),
(4, 2, 2, 5),
(5, 2, 1, 39);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `photo` varchar(255) DEFAULT '/perfect/static/upload/18-02-01/151746767884.jpg_100x100.jpg',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `username`, `password`, `phone`, `photo`) VALUES
(1, 'zhangsan', 'e10adc3949ba59abbe56e057f20f883e', '12345678900', '/perfect/static/upload/18-02-01/151746767884.jpg_100x100.jpg'),
(2, 'lisi', 'e10adc3949ba59abbe56e057f20f883e', NULL, '/perfect/static/upload/18-02-01/151746767884.jpg_100x100.jpg'),
(3, 'wangwu', 'c33367701511b4f6020ec61ded352059', NULL, '/perfect/static/upload/18-02-01/151746767884.jpg_100x100.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
