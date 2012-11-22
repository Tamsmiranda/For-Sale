CREATE  TABLE IF NOT EXISTS `#__forsales` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `catid` INT(11) NOT NULL DEFAULT '0' ,
  `title` VARCHAR(250) NOT NULL DEFAULT '' ,
  `alias` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '' ,
  `description` TEXT NOT NULL ,
  `subtitle` VARCHAR(250) NOT NULL DEFAULT '' ,
  `snipet` TEXT NOT NULL ,
  `price` DOUBLE UNSIGNED NOT NULL DEFAULT '0' ,
  `bedroom` SMALLINT UNSIGNED NOT NULL DEFAULT '0' ,
  `bathroom` SMALLINT UNSIGNED NOT NULL DEFAULT '0' ,
  `parking_spot` SMALLINT UNSIGNED NOT NULL DEFAULT '0' ,
  `area` DOUBLE UNSIGNED NOT NULL DEFAULT '0' ,
  `use_google_maps` TINYINT(1) NOT NULL DEFAULT '0' ,
  `address` VARCHAR(255) NOT NULL DEFAULT '' ,
  `hits` INT(11) NOT NULL DEFAULT '0' ,
  `state` TINYINT(1) NOT NULL DEFAULT '0' ,
  `checked_out` INT(11) NOT NULL DEFAULT '0' ,
  `checked_out_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' ,
  `ordering` INT(11) NOT NULL DEFAULT '0' ,
  `access` INT(11) NOT NULL DEFAULT '1' ,
  `params` TEXT NOT NULL ,
  `language` CHAR(7) NOT NULL DEFAULT '' ,
  `created` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' ,
  `created_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' ,
  `created_by_alias` VARCHAR(255) NOT NULL DEFAULT '' ,
  `modified` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' ,
  `modified_by` INT(10) UNSIGNED NOT NULL DEFAULT '0' ,
  `metakey` TEXT NOT NULL ,
  `metadesc` TEXT NOT NULL ,
  `metadata` TEXT NOT NULL ,
  `featured` TINYINT(3) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Set if link is featured.' ,
  `xreference` VARCHAR(50) NOT NULL COMMENT 'A reference to enable linkages to external data sets.' ,
  `publish_up` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' ,
  `publish_down` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' ,
  `version` INT(10) UNSIGNED NOT NULL DEFAULT '1' ,
  `images` TEXT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `idx_access` (`access` ASC) ,
  INDEX `idx_checkout` (`checked_out` ASC) ,
  INDEX `idx_state` (`state` ASC) ,
  INDEX `idx_catid` (`catid` ASC) ,
  INDEX `idx_createdby` (`created_by` ASC) ,
  INDEX `idx_featured_catid` (`featured` ASC, `catid` ASC) ,
  INDEX `idx_language` (`language` ASC) ,
  INDEX `idx_xreference` (`xreference` ASC) )
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8;
