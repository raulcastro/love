# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: internal-db.s161140.gridserver.com (MySQL 5.1.63-rel13.4)
# Database: db161140_love
# Generation Time: 2018-05-11 03:05:18 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table app_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `app_info`;

CREATE TABLE `app_info` (
  `title` varchar(512) DEFAULT NULL,
  `site_name` varchar(512) DEFAULT NULL,
  `url` varchar(512) DEFAULT NULL,
  `content` varchar(1024) DEFAULT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `keywords` varchar(512) DEFAULT NULL,
  `creator` varchar(512) DEFAULT NULL,
  `creator_url` varchar(512) DEFAULT NULL,
  `twitter` varchar(256) DEFAULT NULL,
  `facebook` varchar(256) DEFAULT NULL,
  `googleplus` varchar(256) DEFAULT NULL,
  `pinterest` varchar(256) DEFAULT NULL,
  `linkedin` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `lang` varchar(2) DEFAULT NULL,
  `youtube` varchar(256) DEFAULT NULL,
  `instagram` varchar(256) DEFAULT NULL,
  `location` varchar(256) DEFAULT NULL,
  `phone` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `app_info` WRITE;
/*!40000 ALTER TABLE `app_info` DISABLE KEYS */;

INSERT INTO `app_info` (`title`, `site_name`, `url`, `content`, `description`, `keywords`, `creator`, `creator_url`, `twitter`, `facebook`, `googleplus`, `pinterest`, `linkedin`, `email`, `lang`, `youtube`, `instagram`, `location`, `phone`)
VALUES
	('Love Story Travels','Love Story Travels','http://admin.lovestorytravels.com/',NULL,'desc',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'admin@elitemgroup.com','en',NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `app_info` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table destinations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `destinations`;

CREATE TABLE `destinations` (
  `destination_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `small_description` text,
  `description` text,
  `photo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`destination_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `destinations` WRITE;
/*!40000 ALTER TABLE `destinations` DISABLE KEYS */;

INSERT INTO `destinations` (`destination_id`, `name`, `small_description`, `description`, `photo`)
VALUES
	(3,'Cancun','','Description','0318fe-avatar.jpg'),
	(4,'Playa del Carmen',NULL,NULL,'08z042-avatar.jpg'),
	(5,'Tulum',NULL,NULL,'008nd5-avatar.jpg');

/*!40000 ALTER TABLE `destinations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table documents
# ------------------------------------------------------------

DROP TABLE IF EXISTS `documents`;

CREATE TABLE `documents` (
  `document_id` int(100) NOT NULL AUTO_INCREMENT,
  `member_id` int(100) NOT NULL,
  `payment_id` int(100) NOT NULL,
  `document` varchar(512) NOT NULL,
  PRIMARY KEY (`document_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;

INSERT INTO `documents` (`document_id`, `member_id`, `payment_id`, `document`)
VALUES
	(1,200,35,'09j11g-0y373m.pdf'),
	(2,200,37,'02u98w-073rz2.pdf');

/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table experiences
# ------------------------------------------------------------

DROP TABLE IF EXISTS `experiences`;

CREATE TABLE `experiences` (
  `experience_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `small_description` text,
  `description` text,
  `photo` varchar(50) DEFAULT NULL,
  `swiper` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`experience_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `experiences` WRITE;
/*!40000 ALTER TABLE `experiences` DISABLE KEYS */;

INSERT INTO `experiences` (`experience_id`, `name`, `small_description`, `description`, `photo`, `swiper`)
VALUES
	(2,'BABYMOON','Because you may need a pre – baby break!','We can offer you spa treatments, massages or special treats for pregnant couples to enjoy this amazing phase in your life.\n\n* Room upgrade (Subject to availability)\n* Strawberries with chocolate\n* Photo Session on the Beach\n* Romatic Dinner at the beach\n* Special massage for the Couple\n\nPackage Policy\n* 2 night minimum stay required','0g2656-avatar.jpg','05gs64-avatar.jpg'),
	(3,'RENEWAL OF VOWS','What better place to renew your vows than the Caribbean beaches. ','We have different choices for this special day! You can choose a traditional ceremony to declare your love once again or make it in a different and mayan way! \n\n* Room Up Grade (Subject to availability) \n* Bottle of Sparkling wine \n* Strawberries with chocolate at the Room \n* Wedding Coordinator\n* Location for the Ceremony at the beach\n* Standard Decoration for the Ceremony\n* Music for the ceremony\n* Bride\'s Bouquet & Groom\'s Boutonniere\n* Toast for up to 10 guest\n* Cake for 10 people\n\nPackage Policies\n* 3  night minimum stay required\n','0j3436-avatar.jpg','0572f5-avatar.jpg'),
	(4,'PROPOSAL','If you want to pop the question but you don’t know how, don’t worry, our experts will help you to ensure the “Yes, I will!”',' We are aware of how important this ocassion is, this is why we will be able to hep you to create a unique and unforgettable moment that will remain in your memory forever\n\n* Room Up Grade (Subject to availability)\n * Bottle of Sparkling wine \n*Strawberries with chocolate at the Room \n* Room decorations with rose petals\n* Romantic Dinner in the Beach at the Hotel (** If you want something personalized we can help you to create it, please contact us)\n* Engagement Photo Session\n\nPackage Policies\n* 2 night minimum stay required','0ax94i-avatar.jpg','03lgea-avatar.jpg'),
	(5,'ROMANTIC BREAK','Even if you have a couple of days for a trip you can make the most of it!','Do you have a free weekend? Perfect! We can offer you many options for having some romantic, fun or even sexy days away\n\n• Bottle of Sparkling wine\n• Strawberries with chocolate \n• Romantic Dinner in the Beach at the Hotel\n• Couple’s massage \n\n\n\n\nPackage Policies\n2 night minimum stay required','03uh33-avatar.jpg','00454m-avatar.jpg'),
	(6,'ANNIVERSARY','Is this your first, second or even your fiftieth anniversary?','Is this your first, second or even your fiftieth anniversary? It doesn’t matter; we will help you to celebrate this occasion with our best romantic ideas to keep the flame alive.\n\n• Room Up Grade (Subject to availability)\n• Bottle of Sparkling wine\n• Strawberries with chocolate \n• Romantic Dinner at an Exclusive Restaurant in Town\n• Couple’s massage \n• 1 Activity to choose (Restrictions may apply)\n* Romantic Breakfast in bed with mimosas (reservation may be required)\n\n\nPackage Policies\n4 night minimum stay required\n','0i987a-avatar.jpg','05k11p-avatar.jpg'),
	(7,'HONEYMOON','After all the stress of the wedding it is time to relax and start enjoying the married life. ','After all the stress of the wedding it is time to relax and start enjoying the married life. The newlyweds will be able to enjoy Hotels dedicated 100% to pamper the couples as well as activities and tours where you can enjoy each other\n\n* Room Up Grade (Subject to availability)\n* Bottle of Sparkling wine\n*Strawberries with chocolate at the Room\n* Romantic Dinner in the Beach at the Hotel\n* Romantic Dinner at an Exclusive Restaurant in town\n* Couple\'s massage\n* 2 activities to choose (Restrictions may apply)\n* 1 hour Photo Session on the beach\n\n\n\n\nPackage Policies\n7 night minimum stay required','029rvn-avatar.jpg','0z1n1h-avatar.jpg');

/*!40000 ALTER TABLE `experiences` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table experiences_destinations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `experiences_destinations`;

CREATE TABLE `experiences_destinations` (
  `relacion_id` int(10) NOT NULL AUTO_INCREMENT,
  `experience_id` int(11) DEFAULT NULL,
  `destination_id` int(11) NOT NULL,
  PRIMARY KEY (`relacion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `experiences_destinations` WRITE;
/*!40000 ALTER TABLE `experiences_destinations` DISABLE KEYS */;

INSERT INTO `experiences_destinations` (`relacion_id`, `experience_id`, `destination_id`)
VALUES
	(40,7,5),
	(41,7,4),
	(42,7,3),
	(43,6,5),
	(44,6,4),
	(45,6,3),
	(49,3,5),
	(50,3,4),
	(51,3,3),
	(52,2,5),
	(53,2,4),
	(54,2,3),
	(59,4,5),
	(60,4,4),
	(61,4,3),
	(62,5,5),
	(63,5,4),
	(64,5,3);

/*!40000 ALTER TABLE `experiences_destinations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table experiences_extras
# ------------------------------------------------------------

DROP TABLE IF EXISTS `experiences_extras`;

CREATE TABLE `experiences_extras` (
  `relacion_id` int(10) NOT NULL AUTO_INCREMENT,
  `experience_id` int(11) DEFAULT NULL,
  `extra_id` int(11) NOT NULL,
  PRIMARY KEY (`relacion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `experiences_extras` WRITE;
/*!40000 ALTER TABLE `experiences_extras` DISABLE KEYS */;

INSERT INTO `experiences_extras` (`relacion_id`, `experience_id`, `extra_id`)
VALUES
	(39,7,9),
	(40,7,7),
	(41,7,6),
	(42,6,9),
	(43,6,8),
	(44,6,7),
	(45,6,6),
	(62,5,8),
	(63,5,7),
	(64,5,6),
	(65,4,9),
	(66,4,7),
	(67,4,6),
	(68,3,10),
	(69,3,9),
	(70,3,8),
	(71,3,7),
	(72,3,6);

/*!40000 ALTER TABLE `experiences_extras` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table extras
# ------------------------------------------------------------

DROP TABLE IF EXISTS `extras`;

CREATE TABLE `extras` (
  `extra_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `small_description` text,
  `description` text,
  `photo` varchar(50) DEFAULT NULL,
  `destination` varchar(50) DEFAULT NULL,
  `price` decimal(7,2) DEFAULT NULL,
  PRIMARY KEY (`extra_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `extras` WRITE;
/*!40000 ALTER TABLE `extras` DISABLE KEYS */;

INSERT INTO `extras` (`extra_id`, `name`, `small_description`, `description`, `photo`, `destination`, `price`)
VALUES
	(6,'Scuba Diving in the Sea','','Discover the beauty of the Caribbean reefs with your love one by having a scuba diving tour to enjoy the underwater ife.','09oa6i-avatar.jpg',NULL,150.00),
	(7,'Scuba Diving in Cenotes','','Be amazed by the underworld life of the Cenotes where you will discover the unique magic of this places.','04a4cd-avatar.jpg',NULL,250.00),
	(8,'Photo Session ','','Professional Photo Session at the beach to treasure the moments together.','0la8bw-avatar.jpg',NULL,550.00),
	(9,'Trash the Dress Photo Session','','Crazy-fun, creative and romantic Photo Session in the most amazing locations of the Mexican Caribbean','0d907n-avatar.jpg',NULL,800.00),
	(10,'Romantic Diner at the beach','','Taste a special menu with your beloved one while you enjoy the romantic atmosphere that the beach can give.','022808-avatar.jpg',NULL,300.00);

/*!40000 ALTER TABLE `extras` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table general_gallery
# ------------------------------------------------------------

DROP TABLE IF EXISTS `general_gallery`;

CREATE TABLE `general_gallery` (
  `picture_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL DEFAULT 'title',
  `cover` int(1) DEFAULT '0',
  `link` varchar(512) DEFAULT NULL,
  `promos` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`picture_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `general_gallery` WRITE;
/*!40000 ALTER TABLE `general_gallery` DISABLE KEYS */;

INSERT INTO `general_gallery` (`picture_id`, `name`, `title`, `cover`, `link`, `promos`)
VALUES
	(20,'08e1ob-love-story-travels.jpg','title',0,NULL,NULL),
	(24,'01vske-love-story-travels.jpg','title',0,NULL,NULL);

/*!40000 ALTER TABLE `general_gallery` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table hotel_experiences
# ------------------------------------------------------------

DROP TABLE IF EXISTS `hotel_experiences`;

CREATE TABLE `hotel_experiences` (
  `relacion_id` int(10) NOT NULL AUTO_INCREMENT,
  `hotel_id` int(11) DEFAULT NULL,
  `experience_id` int(11) NOT NULL,
  `price` decimal(7,2) DEFAULT NULL,
  PRIMARY KEY (`relacion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `hotel_experiences` WRITE;
/*!40000 ALTER TABLE `hotel_experiences` DISABLE KEYS */;

INSERT INTO `hotel_experiences` (`relacion_id`, `hotel_id`, `experience_id`, `price`)
VALUES
	(37,7,7,2345.52),
	(38,7,2,1685.00),
	(39,7,6,1135.00),
	(40,7,5,877.00),
	(41,7,4,1211.00),
	(42,7,3,2737.00),
	(43,6,7,1.00),
	(44,6,2,1.00),
	(45,6,6,1.00),
	(46,6,5,1.00),
	(47,6,4,1.00),
	(48,6,3,1.00);

/*!40000 ALTER TABLE `hotel_experiences` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table hotel_ranges
# ------------------------------------------------------------

DROP TABLE IF EXISTS `hotel_ranges`;

CREATE TABLE `hotel_ranges` (
  `hotel_range_id` int(10) NOT NULL AUTO_INCREMENT,
  `hotel_id` int(10) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `price` decimal(7,2) NOT NULL,
  PRIMARY KEY (`hotel_range_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `hotel_ranges` WRITE;
/*!40000 ALTER TABLE `hotel_ranges` DISABLE KEYS */;

INSERT INTO `hotel_ranges` (`hotel_range_id`, `hotel_id`, `from_date`, `to_date`, `price`)
VALUES
	(1,3,'2017-01-01','2017-04-27',200.00),
	(5,6,'2017-01-01','2017-01-02',12.00),
	(6,6,'2017-01-03','2017-01-04',500.00),
	(7,6,'2017-01-05','2017-01-06',50.00),
	(8,7,'2017-01-01','2017-12-23',0.00),
	(11,7,'2017-12-24','2018-01-02',454.00),
	(12,7,'2018-01-03','2018-01-31',372.00),
	(13,7,'2018-02-01','2018-02-28',388.00),
	(14,7,'2018-03-01','2018-03-31',380.00),
	(15,7,'2018-04-01','2018-04-30',364.00),
	(16,7,'2018-05-01','2018-08-31',320.00),
	(17,7,'2018-09-01','2018-10-31',300.00),
	(18,7,'2018-11-01','2018-12-23',334.00);

/*!40000 ALTER TABLE `hotel_ranges` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table hotels
# ------------------------------------------------------------

DROP TABLE IF EXISTS `hotels`;

CREATE TABLE `hotels` (
  `hotel_id` int(10) NOT NULL AUTO_INCREMENT,
  `destination_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `small_description` text,
  PRIMARY KEY (`hotel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `hotels` WRITE;
/*!40000 ALTER TABLE `hotels` DISABLE KEYS */;

INSERT INTO `hotels` (`hotel_id`, `destination_id`, `name`, `small_description`)
VALUES
	(6,5,'hotel 1',NULL),
	(7,4,'Blue Diamond',NULL),
	(8,4,'sdsa',NULL);

/*!40000 ALTER TABLE `hotels` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table main_gallery
# ------------------------------------------------------------

DROP TABLE IF EXISTS `main_gallery`;

CREATE TABLE `main_gallery` (
  `picture_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL DEFAULT 'title',
  `cover` int(1) DEFAULT '0',
  `link` varchar(512) DEFAULT NULL,
  `promos` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`picture_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `main_gallery` WRITE;
/*!40000 ALTER TABLE `main_gallery` DISABLE KEYS */;

INSERT INTO `main_gallery` (`picture_id`, `name`, `title`, `cover`, `link`, `promos`)
VALUES
	(109,'04ft4t-love-story-travels.jpg','Azulik',0,'',''),
	(110,'0q424l-love-story-travels.jpg','Secrets The Vine',0,'','');

/*!40000 ALTER TABLE `main_gallery` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table member_history
# ------------------------------------------------------------

DROP TABLE IF EXISTS `member_history`;

CREATE TABLE `member_history` (
  `history_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `member_id` int(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `history` text NOT NULL,
  PRIMARY KEY (`history_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `member_history` WRITE;
/*!40000 ALTER TABLE `member_history` DISABLE KEYS */;

INSERT INTO `member_history` (`history_id`, `user_id`, `member_id`, `date`, `time`, `history`)
VALUES
	(9,1,196,'2016-05-31','16:19:23','November thid room will be rented from 15 to 25 '),
	(10,1,198,'2016-05-31','18:02:02','he just called for smth'),
	(11,1,202,'2016-09-08','14:33:47','this is an history'),
	(12,1,203,'2016-09-08','20:08:35','me llamo a las 3pm'),
	(13,1,203,'2016-09-08','20:09:04','dfdfdfffggdf');

/*!40000 ALTER TABLE `member_history` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table members
# ------------------------------------------------------------

DROP TABLE IF EXISTS `members`;

CREATE TABLE `members` (
  `member_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `name` varchar(256) NOT NULL DEFAULT '',
  `last_name` varchar(256) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `phone_one` varchar(256) DEFAULT NULL,
  `phone_two` varchar(256) DEFAULT NULL,
  `email_one` varchar(256) DEFAULT NULL,
  `email_two` varchar(256) DEFAULT NULL,
  `notes` varchar(256) DEFAULT NULL,
  `active` int(1) DEFAULT '1',
  `date` date DEFAULT NULL,
  `condo` varchar(256) DEFAULT NULL,
  `avatar` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;

INSERT INTO `members` (`member_id`, `user_id`, `name`, `last_name`, `address`, `phone_one`, `phone_two`, `email_one`, `email_two`, `notes`, `active`, `date`, `condo`, `avatar`)
VALUES
	(202,1,'Raul','Castro','this is an address','(984) 141-6447','(999) 435-1656','raul@wheretogo.com.mx','','this is an important note',1,'2016-09-08',NULL,NULL),
	(203,1,'Jhon','Do','addrss','(999) 999-9999','(777) 777-7777','raul@wheretogo.com.mx','','this is a note',1,'2016-09-08',NULL,NULL);

/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table testimonials
# ------------------------------------------------------------

DROP TABLE IF EXISTS `testimonials`;

CREATE TABLE `testimonials` (
  `testimonial_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `testimonial` text,
  PRIMARY KEY (`testimonial_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;

INSERT INTO `testimonials` (`testimonial_id`, `name`, `testimonial`)
VALUES
	(16,'Natalie Pierce','“Renewing our vows in the Mexican Caribbean was the best decision we could make.  No stress at all, everything went smoothly thanks to Love Story Travels and the expertise they have in the destination. They made the best suggestion for Hotel, activities and many other things to make it a memorable trip”'),
	(17,'Kevin Garrett','“I didn’t thought I would need a travel agency to arrange a short trip, however, Love Story Travels helps us a lot in the planning to make the most of our little break”'),
	(18,'Jennifer Weber','“My husband and I had the best honeymoon ever! We were able to relax and enjoy ourselves as newlyweds. Every part of our trip was perfectly planned as we didn’t have to worry about where to go or what to do as our Travel Agency gives us great options in the destination”');

/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_detail
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_detail`;

CREATE TABLE `user_detail` (
  `detail_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `about` text,
  `avatar` varchar(50) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user_detail` WRITE;
/*!40000 ALTER TABLE `user_detail` DISABLE KEYS */;

INSERT INTO `user_detail` (`detail_id`, `user_id`, `name`, `email`, `about`, `avatar`, `member_id`)
VALUES
	(1,1,'Administrador','admin@',NULL,NULL,NULL),
	(13,13,'User 1','info@hhluxuryinvestments.com',NULL,NULL,NULL),
	(14,14,'Philip ',NULL,NULL,NULL,199),
	(15,15,'SR. ERNESTO',NULL,NULL,NULL,200),
	(16,16,'Jorge Marcos',NULL,NULL,NULL,201),
	(17,17,'Raul',NULL,NULL,NULL,202),
	(18,18,'Jhon',NULL,NULL,NULL,203);

/*!40000 ALTER TABLE `user_detail` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_emails
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_emails`;

CREATE TABLE `user_emails` (
  `email_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(20) NOT NULL,
  `host` varchar(256) NOT NULL,
  `port` int(100) DEFAULT NULL,
  `host_service` varchar(45) DEFAULT NULL,
  `inbox` int(100) DEFAULT NULL,
  `outbox` int(100) DEFAULT NULL,
  `archived` int(100) DEFAULT NULL,
  `active` int(1) DEFAULT '1',
  PRIMARY KEY (`email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='emails for the system';

LOCK TABLES `user_emails` WRITE;
/*!40000 ALTER TABLE `user_emails` DISABLE KEYS */;

INSERT INTO `user_emails` (`email_id`, `user_id`, `email`, `password`, `host`, `port`, `host_service`, `inbox`, `outbox`, `archived`, `active`)
VALUES
	(5,7,'it@hhluxuryinvestments.com','zonaxgoogle','imap.gmail.com',993,'gmail',23,0,0,1);

/*!40000 ALTER TABLE `user_emails` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_type
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_type`;

CREATE TABLE `user_type` (
  `type_id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user_type` WRITE;
/*!40000 ALTER TABLE `user_type` DISABLE KEYS */;

INSERT INTO `user_type` (`type_id`, `type`)
VALUES
	(1,'administrator');

/*!40000 ALTER TABLE `user_type` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) NOT NULL,
  `password` char(40) NOT NULL,
  `type` int(1) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '1',
  `third_user` int(1) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`user_id`, `user`, `password`, `type`, `active`, `third_user`)
VALUES
	(1,'admin@lovestorytravels.com','ce7c8de06ad1c3c2db5a92192dacb21d80bbd03d',1,1,0);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
