SET NAMES utf8;

DROP TABLE IF EXISTS `error_log`;
CREATE TABLE `error_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `request_method` char(10) NOT NULL,
  `request_path` char(250) NOT NULL,
  `request_params` text NOT NULL,
  `message` char(250) NOT NULL,
  `class` char(250) NOT NULL,
  `trace` text NOT NULL,
  `created_time` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `first_name` char(32) NOT NULL,
  `last_name` char(64) NOT NULL,
  `email` char(128) NOT NULL,
  `created_time` bigint(20) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;