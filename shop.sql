--首页
--轮播图banner
CREATE TABLE `banner`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL COMMENT 'banner名称',
  `description` varchar(255) DEFAULT NULL COMMENT 'banner描述',
  `delete_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY(`id`)
)ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='banner轮播图';

INSERT INTO `banner` VALUES ('1', '首页置顶', '首页轮播图', null, null);

--banner子项表
DROP TABLE IF EXISTS `banner_item`;
CREATE TABLE `banner_item`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `banner_id` int(11) UNSIGNED NOT NULL COMMENT '外键,关联banner表',
  `img_id` int(11) UNSIGNED NOT NULL COMMENT '外键,关联image表',
  `type` tinyint(4) UNSIGNED NOT NULL DEFAULT '1' COMMENT '跳转类型,导向商品/专题或其他. 0:无导向 1:导向商品 2:导向专题',
  `key_word` varchar(64) NOT NULL COMMENT '执行关键字,根据type含义不同',
  `delete_time` int(11) UNSIGNED DEFAULT NULL,
  `update_time` int(11) UNSIGNED DEFAULT NULL,
  PRIMARY KEY(`id`)
)ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT 'banner子项表';

INSERT INTO `banner_item` VALUES('1','1','65','1','6',null,null);
INSERT INTO `banner_item` VALUES('2','1','2','1','25',null,null);
INSERT INTO `banner_item` VALUES('3','1','3','1','11',null,null);
INSERT INTO `banner_item` VALUES('5','1','1','1','10',null,null);