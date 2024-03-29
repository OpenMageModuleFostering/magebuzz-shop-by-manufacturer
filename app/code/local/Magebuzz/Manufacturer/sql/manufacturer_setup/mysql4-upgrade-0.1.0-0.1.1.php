<?php
/*
* Copyright (c) 2014 www.magebuzz.com
*/
$installer = $this;
$installer->startSetup();
$installer->run("
-- DROP TABLE IF EXISTS {$this->getTable('manufacturer_store')};
CREATE TABLE {$this->getTable('manufacturer_store')} (
  `manufacturer_id` int(11) unsigned NOT NULL, 
	`store_id` int(11) NOT NULL default '0',
  PRIMARY KEY (`manufacturer_id`,`store_id`),
	 CONSTRAINT `FK_MANUFACTURER_MANUFACTURER_STORE` FOREIGN KEY (`manufacturer_id`) REFERENCES `{$this->getTable('manufacturer')}` (`manufacturer_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
    ");
$installer->endSetup(); 