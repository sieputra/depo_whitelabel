# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.42)
# Database: depo_whitelabel
# Generation Time: 2016-04-16 21:21:26 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table settings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL DEFAULT '',
  `value` varchar(1000) NOT NULL DEFAULT '',
  `module` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;

INSERT INTO `settings` (`id`, `key`, `value`, `module`)
VALUES
	(1,'API_URL','http://dev.deposepatu.com/','settings'),
	(2,'CUSTOMER_KEY','ck_da2852a526a9a8d4532fa326c50c06d0a8576d21','settings'),
	(3,'CUSTOMER_SECRET','cs_a8064758e25260ffd51b8e75648c962cb751256f','settings'),
	(4,'API_END_POINT','wc-api/v3/','settings'),
	(5,'TELP','081230667822','general'),
	(6,'WA','081230667822','general'),
	(7,'LINE','081230667822','general'),
	(8,'BBM','ABCD123','general'),
	(9,'KAKKAO','081230667822','general'),
	(10,'EMAIL','anto4240@sieputra.com','general'),
	(11,'FACEBOOK','http://facebook.com/sieputra','general'),
	(12,'TWITTER','http://twitter.com/sieputra','general'),
	(13,'INSTAGRAM','http://instagram.com/sieputra','general'),
	(14,'FOOTER_SCHEME','gelap','general'),
	(15,'ZOPIM_CODE','window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=\r\nd.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.\r\n_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute(\"charset\",\"utf-8\");\r\n$.src=\"//v2.zopim.com/?or1ScT1pke9i2p2OxrpNgmYlESssZX8z\";z.t=+new Date;$.\r\ntype=\"text/javascript\";e[removed].insertBefore($,e)})(document,\"script\");','general'),
	(16,'TITLE_TAG','','seo'),
	(17,'DESCRIPTION_TAG','','seo'),
	(18,'FOCUS_KEYWORD','','seo'),
	(19,'HEADER_SCRIPT','','seo'),
	(20,'FOOTER_SCRIPT','','seo'),
	(21,'SHOP_FAVORITE','1','shop'),
	(22,'SHOW_HOME','16','shop'),
	(23,'SHOW_PRODUCT_PAGE','4','shop');

/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
