--测试表
--tkd
create table tkd(
	`id` int(11) unsigned not null auto_increment,
	`name` varchar(32) not null default '',
	`contry` varchar(16) not null default '中立'
)engine=innodb default charset=utf8;
