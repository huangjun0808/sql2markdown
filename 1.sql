-- Create syntax for TABLE 'blog'
CREATE TABLE `blog` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `uid` int(10) NOT NULL,
  `content` text NOT NULL,
  `abstract` varchar(256) NOT NULL DEFAULT '',
  `tags` varchar(60) DEFAULT '',
  `gmt_create` int(10) NOT NULL,
  `gmt_modified` int(10) NOT NULL,
  `author` varchar(60) NOT NULL DEFAULT '路人甲',
  `visit_times` int(11) DEFAULT '0' COMMENT '访问次数',
  `des` varchar(128) NOT NULL DEFAULT '该文暂无简介',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;

-- Create syntax for TABLE 'blog_tag'
CREATE TABLE `blog_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

-- Create syntax for TABLE 'cross_compile_auth'
CREATE TABLE `cross_compile_auth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appid` varchar(8) NOT NULL,
  `authorized_times` int(11) NOT NULL DEFAULT '0' COMMENT '剩余授权次数',
  `authorized_uid` bigint(20) unsigned NOT NULL COMMENT '授权人uid，只记录最后一次授权人',
  `gmt_create` int(11) DEFAULT NULL COMMENT '创建时间',
  `gmt_modified` int(11) DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='离线编译授权表';

-- Create syntax for TABLE 'tag'
CREATE TABLE `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(100) NOT NULL,
  `tag_priority` tinyint(4) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `gmt_create` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- Create syntax for TABLE 'user'
CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `sex` int(1) DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Create syntax for TABLE 'visitor'
CREATE TABLE `visitor` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `request_method` varchar(10) NOT NULL,
  `remote_address` varchar(20) NOT NULL,
  `path_info` varchar(255) NOT NULL,
  `http_cookie` text NOT NULL,
  `request_time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27052 DEFAULT CHARSET=utf8;