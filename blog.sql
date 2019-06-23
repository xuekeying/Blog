/*
Navicat MySQL Data Transfer

Source Server         : localhost_root
Source Server Version : 50722
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50722
File Encoding         : 65001

Date: 2019-06-21 08:44:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for blog_announcement
-- ----------------------------
DROP TABLE IF EXISTS `blog_announcement`;
CREATE TABLE `blog_announcement` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '公告唯一识别id',
  `an_content` varchar(255) NOT NULL COMMENT '公告内容',
  `an_createtime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT '公告创建时间',
  `an_modiftime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT '公告修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='公告表';

-- ----------------------------
-- Records of blog_announcement
-- ----------------------------
INSERT INTO `blog_announcement` VALUES ('1', '这是公告第三段', '2019-06-17 13:02:29', '2019-06-17 13:02:29');
INSERT INTO `blog_announcement` VALUES ('2', '评论222', '2019-06-17 14:09:12', '2019-06-17 14:09:12');
INSERT INTO `blog_announcement` VALUES ('3', '这是公告4', '2019-06-18 21:53:59', '2019-06-18 21:53:59');
INSERT INTO `blog_announcement` VALUES ('4', '这是第四段公告', '2019-06-17 11:49:53', '2019-06-17 11:49:53');
INSERT INTO `blog_announcement` VALUES ('5', '这是第五段公告1', '2019-06-17 13:15:23', '2019-06-17 13:15:23');
INSERT INTO `blog_announcement` VALUES ('6', '这是第六段公告', '2019-06-17 11:51:53', '2019-06-17 11:51:53');
INSERT INTO `blog_announcement` VALUES ('8', '这是第九段公告', '2019-06-17 12:20:47', '2019-06-17 12:20:47');

-- ----------------------------
-- Table structure for blog_article
-- ----------------------------
DROP TABLE IF EXISTS `blog_article`;
CREATE TABLE `blog_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章编号',
  `title` varchar(255) NOT NULL COMMENT '文章标题',
  `introduction` varchar(255) NOT NULL COMMENT '这是文章简介',
  `content` text NOT NULL COMMENT '文章内容',
  `author` varchar(255) NOT NULL COMMENT '文章作者',
  `date_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT '文章创建的时间',
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT '文章修改的时间',
  `like_number` int(11) NOT NULL DEFAULT '0' COMMENT '文章点赞数',
  `comment_number` int(11) NOT NULL DEFAULT '0' COMMENT '文章评论数',
  `article_type` varchar(100) NOT NULL COMMENT '文章的分类',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='文章表';

-- ----------------------------
-- Records of blog_article
-- ----------------------------
INSERT INTO `blog_article` VALUES ('1', '关于在Linux平台安装jdk', '这是内容这是内容简介这是简介111111', '这是内容这是内容是这是今晚上写的内容，非常的刘辟 的数据库这是内容这是内容是这是今晚上写的内容，非常的刘辟 的数据库这是内容这是内容是这是今晚上写的内容，非常的刘辟 的数据库这是内容这是内容是这是今晚上写的内容，非常的刘辟 的数据库这是内容这是内容是这是今晚上写的内容，非常的刘辟 的数据库这是内容这是内容是这是今晚上写的内容，非常的刘辟 的数据库这是内容这是内容是这是今晚上写的内容，非常的刘辟 的数据库这是内容这是内容是这是今晚上写的内容，非常的刘辟 的数据库这是内容这是内容是这是今晚上写的内容，非常的刘辟 的数据库这是内容这是内容是这是今晚上写的内容，非常的刘辟 的数据库这是内容这是内容是这是今晚上写的内容，非常的刘辟 的数据库这是内容这是内容是这是今晚上写的内容，非常的刘辟 的数据库这是内容这是内容是这是今晚上写的内容，非常的刘辟 的数据库', 'admin', '2019-06-16 21:27:07', '2019-06-16 21:27:07', '1000', '5000', 'linux');
INSERT INTO `blog_article` VALUES ('2', '关于游戏开发的新手入门', '这是内容这是内容简介这是简介222222222', '这是正文内容，游戏内容游戏内容这是内容这是内容是这是今晚上写的内容，非常的刘辟 的数据库这是内容这是内容是这是今晚上写的内容，非常的刘辟 的数据库这是内容这是内容是这是今晚上写的内容，非常的刘辟 的数据库这是内容这是内容是这是今晚上写的内容，非常的刘辟 的数据库这是内容这是内容是这是今晚上写的内容，非常的刘辟 的数据库这是内容这是内容是这是今晚上写的内容，非常的刘辟 的数据库这是内容这是内容是这是今晚上写的内容，非常的刘辟 的数据库这是内容这是内容是这是今晚上写的内容，非常的刘辟 的数据库', '薛科颖', '2019-06-16 21:27:22', '2019-06-16 21:27:22', '10', '2', '游戏开发');
INSERT INTO `blog_article` VALUES ('3', '如何在win10中安装jdk8', '这是内容这是内容简介这是简3333333333', '这是安装方法，这是安装方法，这是安装', 'xky', '2019-06-16 21:27:15', '2019-06-16 21:27:15', '20', '2', '热门');
INSERT INTO `blog_article` VALUES ('4', '如何安装win10系统', '这是安装步骤，这是安装步骤', '合适的回复婚纱开发和设计的', '薛科颖', '2019-06-16 16:29:01', '2019-06-17 16:29:04', '10', '5', '热门');
INSERT INTO `blog_article` VALUES ('5', '111111', '11111111111111111111111111111111', '<p>222222222222222222222222222222222222</p>', '薛科颖', '2019-06-17 20:23:51', '2019-06-17 20:23:51', '0', '0', '游戏开发');
INSERT INTO `blog_article` VALUES ('9', '这是第九篇文章', '这是第九篇文章的简介！！！', '<p><strong><span style=\"font-size: 16px;\">这是第九篇文章的内容，非常的重要的内容</span></strong></p>', '薛科颖', '2019-06-17 20:24:01', '2019-06-17 20:24:01', '0', '0', '热门');
INSERT INTO `blog_article` VALUES ('10', '这是17号最新的一篇文章', '这是这篇最新文章的简介！', '<p>这是这篇最新文章的内容！</p>', '薛科颖', '2019-06-17 20:24:04', '2019-06-17 20:24:04', '0', '0', '热门');
INSERT INTO `blog_article` VALUES ('11', '3333', '33333333', '<p>一张图片：<img src=\"/code/ueditor/php/upload/image/20190617/1560777926108689.png\" title=\"1560777926108689.png\" alt=\"点赞.png\"/></p>', '薛科颖', '2019-06-19 14:24:32', '2019-06-19 14:24:32', '0', '0', '游戏开发');
INSERT INTO `blog_article` VALUES ('13', '这是18号新增的文章', '这是18号新增的文章内容的简介！', '<p>这是18号新增的文章的主题内容，非常的正规的内容！</p>', '薛科颖', '2019-06-18 08:27:56', '2019-06-18 08:27:56', '0', '0', '热门');
INSERT INTO `blog_article` VALUES ('15', '这是19号测试文章', '这是19号测试文章简介', '<p>这是主题内容，下面是一张图片。</p><p><img src=\"/code/ueditor/php/upload/image/20190619/1560925320718888.png\" title=\"1560925320718888.png\" alt=\"视频.png\"/></p>', '薛科颖', '2019-06-19 14:22:43', '2019-06-19 14:22:43', '0', '0', 'linux');

-- ----------------------------
-- Table structure for blog_class
-- ----------------------------
DROP TABLE IF EXISTS `blog_class`;
CREATE TABLE `blog_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '分类id',
  `class` varchar(20) NOT NULL COMMENT '分类名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='分类表';

-- ----------------------------
-- Records of blog_class
-- ----------------------------
INSERT INTO `blog_class` VALUES ('1', '热门');
INSERT INTO `blog_class` VALUES ('2', 'Python');
INSERT INTO `blog_class` VALUES ('3', '前端');
INSERT INTO `blog_class` VALUES ('4', '架构');
INSERT INTO `blog_class` VALUES ('5', '区块链');
INSERT INTO `blog_class` VALUES ('6', '游戏');
INSERT INTO `blog_class` VALUES ('7', 'linux');
INSERT INTO `blog_class` VALUES ('8', '深度');
INSERT INTO `blog_class` VALUES ('10', '网络技术');
INSERT INTO `blog_class` VALUES ('11', '手机技术');
INSERT INTO `blog_class` VALUES ('12', '电脑网络');

-- ----------------------------
-- Table structure for blog_comment
-- ----------------------------
DROP TABLE IF EXISTS `blog_comment`;
CREATE TABLE `blog_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '评论唯一识别id',
  `comment_content` varchar(255) NOT NULL COMMENT '评论内容',
  `author` varchar(255) NOT NULL COMMENT '评论用户',
  `article_id` int(11) NOT NULL COMMENT '用户所评论文章的id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='评论表';

-- ----------------------------
-- Records of blog_comment
-- ----------------------------
INSERT INTO `blog_comment` VALUES ('1', '文章写得非常有水平这文章写得非常有水平这文章写得非常有水平这文章写得非常有水平这文章写得非常有水平这文章写得非常有水平这文章写得非常有水平这文章写得非常有水平这文章写得非常有水平这文章写得非常有水平这文章写得非常有水平这文章写得非常有水平这文章写得非常有水平这文章写得非常有水平', 'xky', '1');
INSERT INTO `blog_comment` VALUES ('2', '评论2222', '薛科', '3');
INSERT INTO `blog_comment` VALUES ('3', '这篇文章写的非常的好', '薛科颖', '2');
INSERT INTO `blog_comment` VALUES ('4', '这文章写得非常有水平', '薛科颖', '0');
INSERT INTO `blog_comment` VALUES ('5', '评论2这文章写得非常有水平这文章写得非常有水平这文章写得非常有水平这文章写得非常有水平这文章写得非常有水平这文章写得非常有水平这文章写得非常有水平这文章写得非常有水平这文章写得非常有水平这文章写得非常有水平', 'xky', '1');
INSERT INTO `blog_comment` VALUES ('6', '评论23这文章写得非常有水平这文章写得非常有水平这文章写得非常有水平这文章写得非常有水平这文章写得非常有水平这文章写得非常有水平这文章写得非常有水平这文章写得非常有水平', '薛科颖', '1');
INSERT INTO `blog_comment` VALUES ('7', '评论4444', 'admin', '5');
INSERT INTO `blog_comment` VALUES ('8', '这篇文章非常的有意思！！！！', '薛科颖', '1');
INSERT INTO `blog_comment` VALUES ('9', '我是xky', 'xky', '1');
INSERT INTO `blog_comment` VALUES ('10', '您好您好', '薛科颖', '1');
INSERT INTO `blog_comment` VALUES ('12', '我的评论!!!!', '薛科颖', '10');
INSERT INTO `blog_comment` VALUES ('13', '你是你码的傻逼撒', '薛科颖', '14');

-- ----------------------------
-- Table structure for blog_recommend
-- ----------------------------
DROP TABLE IF EXISTS `blog_recommend`;
CREATE TABLE `blog_recommend` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '今日推荐唯一识别id',
  `url` varchar(255) DEFAULT NULL COMMENT '图片url地址',
  `content` varchar(255) DEFAULT NULL COMMENT '推荐内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='今日推荐表';

-- ----------------------------
-- Records of blog_recommend
-- ----------------------------
INSERT INTO `blog_recommend` VALUES ('1', '../static/tuijian/img1.png', '这是推荐测试内容这是推荐测试内容这是推荐测试内容这是推荐测试内容这是推荐测试内容这是推荐测试内容这是推荐测试内容这是推荐测试内容这是推荐测试内容这是推荐测试内容');
INSERT INTO `blog_recommend` VALUES ('2', '../static/tuijian/img2.png', '这是第二张图片的推荐内容');
INSERT INTO `blog_recommend` VALUES ('3', '../static/tuijian/img3.png', '这是第三张图片的推荐内容');
INSERT INTO `blog_recommend` VALUES ('4', '../static/tuijian/img4.png', '这是第四4444张图片的推荐内容');
INSERT INTO `blog_recommend` VALUES ('5', '../static/tuijian/img5.png', '这是第五章的推荐详情');
INSERT INTO `blog_recommend` VALUES ('6', '../static/tuijian/img6.png', '这是第六张的图片内容');
INSERT INTO `blog_recommend` VALUES ('7', '../static/tuijian/img7.png', '这是内容内容呢内内容');
INSERT INTO `blog_recommend` VALUES ('8', 'https://oss-xue.oss-cn-shenzhen.aliyuncs.com/web/tuijian/img10.png', '这是第八个推荐信息');

-- ----------------------------
-- Table structure for blog_user
-- ----------------------------
DROP TABLE IF EXISTS `blog_user`;
CREATE TABLE `blog_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户唯一识别id',
  `name` varchar(20) NOT NULL COMMENT '用户姓名',
  `password` varchar(255) NOT NULL COMMENT '用户密码',
  `email` varchar(255) NOT NULL COMMENT '用户邮箱',
  `sex` varchar(10) NOT NULL COMMENT '用户性别',
  `type` int(11) NOT NULL COMMENT '用户类别，0代表管理员，1代表普通用户',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='用户表，其中用户类别0代表管理员，1代表普通用户。';

-- ----------------------------
-- Records of blog_user
-- ----------------------------
INSERT INTO `blog_user` VALUES ('1', 'admin', 'admin', '1870134396@qq.com', '男', '0');
INSERT INTO `blog_user` VALUES ('2', 'xky', 'xky123', '2@2.com', '男', '1');
INSERT INTO `blog_user` VALUES ('3', 'kkk', '123456', '311@3.com', '男', '1');
INSERT INTO `blog_user` VALUES ('4', '薛科颖', '456789', '111116@foxmail.com', '男', '1');
INSERT INTO `blog_user` VALUES ('5', 'yyyyy', '123456789', '4@5.com', '男', '1');
INSERT INTO `blog_user` VALUES ('6', '薛科颖1', '123456', '3111@31.com', '男', '1');
INSERT INTO `blog_user` VALUES ('10', 'yyyy', '456123', '111116@foxmail.com', '女', '1');

-- ----------------------------
-- View structure for articlecomment
-- ----------------------------
DROP VIEW IF EXISTS `articlecomment`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `articlecomment` AS select `blog_article`.`id` AS `id`,`blog_article`.`title` AS `title`,`blog_article`.`introduction` AS `introduction`,`blog_article`.`content` AS `content`,`blog_article`.`author` AS `author`,`blog_article`.`date_created` AS `date_created`,`blog_article`.`date_modified` AS `date_modified`,`blog_article`.`like_number` AS `like_number`,`blog_article`.`comment_number` AS `comment_number`,`blog_article`.`article_type` AS `article_type` from `blog_article` ;

-- ----------------------------
-- View structure for v
-- ----------------------------
DROP VIEW IF EXISTS `v`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v` AS select `blog_article`.`title` AS `title` from `blog_article` union select `blog_comment`.`article_id` AS `article_id` from `blog_comment` ;
