# ************************************************************
# Sequel Pro SQL dump
# Version 4500
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.42)
# Database: depo_whitelabel
# Generation Time: 2016-04-09 19:35:44 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table ci_sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



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
	(2,'CUSTOMER_KEY','ck_e79898cff59339a70ee179cb0913adc26b0a26ff','settings'),
	(3,'CUSTOMER_SECRET','cs_2c363869bde7cd3a35940634d2a47fc3f1dc4a1e','settings'),
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
	(20,'FOOTER_SCRIPT','','seo');

/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table wc_attributes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wc_attributes`;

CREATE TABLE `wc_attributes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `remote_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `has_archives` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table wc_categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wc_categories`;

CREATE TABLE `wc_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `remote_id` int(11) DEFAULT NULL,
  `remote_parent` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(500) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `product_count` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table wc_dattribute
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wc_dattribute`;

CREATE TABLE `wc_dattribute` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_product` int(11) DEFAULT NULL,
  `id_attribute` int(11) DEFAULT NULL,
  `attribute_slug` varchar(255) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT '0',
  `variation` tinyint(1) DEFAULT '0',
  `options` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table wc_dimages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wc_dimages`;

CREATE TABLE `wc_dimages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `remote_id` int(11) DEFAULT NULL,
  `id_remote_product` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `title_product` varchar(255) DEFAULT NULL,
  `src_product` varchar(255) DEFAULT NULL,
  `alt_product` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table wc_dvariation
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wc_dvariation`;

CREATE TABLE `wc_dvariation` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sku` varchar(255) DEFAULT NULL,
  `remote_id` int(11) DEFAULT NULL,
  `remote_url` varchar(500) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `price` double(11,2) DEFAULT '0.00',
  `regular_price` double(11,2) DEFAULT '0.00',
  `sale_price` double(11,2) DEFAULT '0.00',
  `image_json` varchar(5000) DEFAULT NULL,
  `attributes_json` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table wc_products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wc_products`;

CREATE TABLE `wc_products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sku` varchar(255) DEFAULT NULL,
  `remote_id` int(11) DEFAULT NULL,
  `remote_sku` varchar(255) DEFAULT NULL,
  `remote_upsell_id` int(11) DEFAULT NULL,
  `remote_url` varchar(500) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` double(11,2) DEFAULT '0.00',
  `regular_price` double(11,2) DEFAULT '0.00',
  `sale_price` double(11,2) DEFAULT '0.00',
  `description` varchar(1000) DEFAULT NULL,
  `local_published` tinyint(4) DEFAULT '0',
  `tags` varchar(1000) DEFAULT NULL,
  `categories` varchar(1000) DEFAULT NULL,
  `date_remote_created` timestamp NULL DEFAULT NULL,
  `date_remote_updated` timestamp NULL DEFAULT NULL,
  `date_local_published` timestamp NULL DEFAULT NULL,
  `date_local_fetch` timestamp NULL DEFAULT NULL,
  `date_local_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table wc_tags
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wc_tags`;

CREATE TABLE `wc_tags` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `remote_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
