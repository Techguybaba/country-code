CREATE TABLE `country` (
  `id` tinyint(4) NOT NULL auto_increment,
  `country` varchar(20) NOT NULL default '',
PRIMARY KEY  (`id`)
) TYPE=MyISAM   ;



CREATE TABLE `state` (
 `id` tinyint(4) NOT NULL auto_increment,
 `countryid` tinyint(4) NOT NULL,
`statename` varchar(40) NOT NULL,
PRIMARY KEY  (`id`)
) TYPE=MyISAM   ;

CREATE TABLE `city` (


`id` tinyint(4) NOT NULL auto_increment,
`city` varchar(50) default NULL,
`stateid` tinyint(4) default NULL,
`countryid` tinyint(4) NOT NULL,
PRIMARY KEY  (`id`)
) TYPE=MyISAM   ;
