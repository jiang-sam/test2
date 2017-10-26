/*
SQLyog Ultimate v8.32 
MySQL - 5.5.16-log : Database - xingguang
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `jzy_xingguang_area` */

DROP TABLE IF EXISTS `jzy_xingguang_area`;

CREATE TABLE `jzy_xingguang_area` (
  `aid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `casearea` varchar(30) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=gbk;

/*Data for the table `jzy_xingguang_area` */

insert  into `jzy_xingguang_area`(`aid`,`casearea`) values (1,'100平米以下'),(2,'100-150平米'),(3,'150-200平米'),(4,'200-300平方米'),(5,'300平米以上');

/*Table structure for table `jzy_xingguang_blogs` */

DROP TABLE IF EXISTS `jzy_xingguang_blogs`;

CREATE TABLE `jzy_xingguang_blogs` (
  `bid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `cid` int(10) unsigned NOT NULL,
  `title` varchar(81) NOT NULL,
  `contents` text NOT NULL,
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `createtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=gbk;

/*Data for the table `jzy_xingguang_blogs` */

insert  into `jzy_xingguang_blogs`(`bid`,`uid`,`cid`,`title`,`contents`,`hits`,`createtime`) values (1,7,1,'一夜之间，中美俄监管层都在发力“围剿”ICO','<p>\r\n	一夜之间，中美俄监管层都在发力“围剿”ICO\r\n</p>\r\n<p>\r\n	摘要：在ICO的疯狂增长下，数字货币市场今年以来膨胀了800%，市值增加了逾1万亿人民币。这其中蕴含着巨大的风险，引发了中、美、俄三国政府的警觉。关于ICO的监管风暴即将到来。<br />\r\n*本文来自华尔街见闻（微信ID：wallstreetcn），作者唐晗。<br />\r\nICO远比人们想象得疯狂。\r\n</p>\r\n<p>\r\n	数字货币龙头比特币市值占整个市场市值40%以上。自今年年初以来，比特币价格上涨了360%，但整个数字货币市场的市值却增加了800%。整个市场的市值增加值高达1585亿美元（超过了1万亿人民币），超过了世界上多数国家的法币价值。\r\n</p>\r\n<p>\r\n	数字货币市场的迅速膨胀，主要是因为“代币”生态的扩张。一些通过ICO发行出来的新币在社区内爆炒，价格可以在短期内增长上百倍，极高的利润不断吸引玩家们入场，数字货币市场被滚雪球一样地不断放大。例如因一个玩笑而诞生的“狗狗币”，其市值就达到了2亿美元。\r\n</p>\r\n<p>\r\n	值得注意的是，ICO不同于比特币的发行逻辑。比特币从诞生之日起，是基于去中心化的算法，通过解密而获得，后期引入了交易等方式，但没有先发的、中心化的组织；而ICO的项目发起方，其发行代币的本身就是中心化、商业化的，容易形成天然巨庄。项目更是良莠不齐，非常不透明。\r\n</p>\r\n<p>\r\n	ICO的疯狂已经引起世界主要国家的关注。中、美、俄政府最近纷纷出手，一齐发力“围剿”ICO。\r\n</p>\r\n<p>\r\n	中国：非法集资还是传销诈骗？证监会、银监会双双对ICO出手\r\n</p>\r\n<p>\r\n	据第一财经，中国证监会近日正在向部分区块链企业就ICO征询意见。对于那些打着虚拟货币的名义进行传销诈骗的ICO项目，证监会表示尤为关注。\r\n</p>\r\n<p>\r\n	第一财经援引世泽律师事务所合作人孙铭律师指出，某些区块链(分布式账本)项目纯粹为了圈钱目的，而投公众所好地刻意在项目中营造出“非必要性代币”来发起众筹，而实际上这些“代币”在该项目的系统内只有少许非实质性的功能用途，而非不可或缺。\r\n</p>\r\n<p>\r\n	考虑到ICO代币这些类证券的特点，监管者在未来制订出一些关于ICO产品众筹的特殊限制并非不可能，其中最有可能的是限制代币在各大交易所流通交易(尽管数字加密代币的无国界性导致任何特定国家的监管很难实现效果)。<br />\r\n8月24日，银监会起草了《处置非法集资条例（征求意见稿）》，列举了一系列处置非法集资职能部门应当启动行政调查的情形。值得注意的是，这些情形中，包括以虚拟货币等名义违规筹集资金的行为。\r\n</p>\r\n<p>\r\n	银监会指出，目前非法集资以直接吸收公众存款、投资理财等为主，而以虚拟货币、消费返利、私募股权投资等名义的非法集资层出不穷、花样翻新，迷惑性强，辨别难度大。\r\n</p>\r\n<p>\r\n	据财新报道，中国有关监管部门近日将对ICO采取行动，在监管、法规体系准备好将ICO纳入之前，甚至不排除直接取缔的可能。\r\n</p>\r\n<p>\r\n	美国：SEC对ICO具有监管权，直接叫停了4家场外ICO\r\n</p>\r\n<p>\r\n	8月28日，美国证监会发布关于谨防ICO骗局的警告。据美国证监会官网：\r\n</p>\r\n<p>\r\n	美国证监会投资者教育办公室向投资者预警，部分声称与ICO有关，或者声称正在进行ICO发行的公司，可能存在诈骗。欺诈者们通常会利用新兴技术的诱惑，来使潜在投资者将钱投到骗局中。这些声称拥有ICO技术的公司，可能存在“拉高出货”和“市场操纵”的两种欺诈可能。<br />\r\n早在2017年7月，美国证监会(SEC）就剑指具有证券属性的ICO，表示他们对其具有监管权。随后，美国证监会（SEC）叫停了四家场外交易的公司的ICO发行。\r\n</p>\r\n<p>\r\n	俄国：计划禁止私人购买ICO发行的数字货币\r\n</p>\r\n<p>\r\n	俄罗斯政府对ICO的监管态度正变得越来越严厉，并计划禁止私人购买ICO发行的数字货币。\r\n</p>\r\n<p>\r\n	俄罗斯财务部副部长Alexey Moiseev近日表示：“很难说清楚数字货币究竟是不是庞氏骗局。我们不会将它们视为真正的货币，并像监管国外货币那样对其进行监管。”\r\n</p>\r\n<p>\r\n	他还说：“政府应该让合格的投资者购买数字货币，例如金融机构。对于普通投资者来说，购买数字货币太过危险，很有可能满盘皆输。”\r\n</p>\r\n<p>\r\n	在俄罗斯的新计划下，莫斯科证券交易所很可能成为机构投资者交易比特币及其他数字货币的唯一平台。不过，俄罗斯央行正在开发的数字货币BitRuble将比已有的数字货币享有更多的市场自由。\r\n</p>',67,1504022262),(3,7,1,'2017年最具创意的100个发明','<div align=\"center\">\r\n	2017年最具创意的100个发明！一网打尽！大饱眼福！看得过瘾！<embed src=\"http://gslb.miaopai.com/stream/gNHjLwPPtAanPiXLTtb78HsMQJDto0rSwsuQ7g__.mp4?ssig=4022143207c31f2aa9a2130d957558eb&time_stamp=1501986347839&cookie_id=86d28f2f621b78a1de35bb311ef9e67c&vend=1&os=2&partner=1&platform=2&cookie_id=86d28f2f621b78a1de35bb311ef9e67c&refer=miaopai&scid=gNHjLwPPtAanPiXLTtb78HsMQJDto0rSwsuQ7g__\" type=\"video/x-ms-asf-plugin\" width=\"550\" height=\"400\" autostart=\"false\" loop=\"true\" /><br />\r\n</div>',3,1504056714),(4,7,1,'你抑郁吗?','<div align=\"center\">\r\n	抑郁症危害健康，不容忽视。近年来虽然大多数人已经知道，抑郁不是单纯“不开心”而是种心理疾病，但抑郁症的表现远不止情绪反应。心理科普频道Psych2Go列举了五种症状。简单明了，通俗易懂。<embed src=\"http://gslb.miaopai.com/stream/qcYnt-larzTEah2cWnnhyget6C2bSphqyLQHAg__.mp4?ssig=6219d69995d5ae612de3f9bde00880a0&time_stamp=1501827431737&cookie_id=86d28f2f621b78a1de35bb311ef9e67c&vend=1&os=2&partner=1&platform=2&cookie_id=86d28f2f621b78a1de35bb311ef9e67c&refer=miaopai&scid=qcYnt-larzTEah2cWnnhyget6C2bSphqyLQHAg__\" type=\"video/x-ms-asf-plugin\" width=\"550\" height=\"400\" autostart=\"false\" loop=\"true\" />\r\n</div>',4,1504077458),(5,7,1,'借来的时间','<div align=\"center\">\r\n	2017年奥斯卡提名动画短片《借来的时间》，皮克斯动画师耗时5年完成，岁月、原谅、自我救赎，诸多细节值得深思。最后的结局你看懂了吗？<embed src=\"http://gslb.miaopai.com/stream/9ekKNJyagFjcAAPbplR1AkYBb-5vucF-f9gp5Q__.mp4?ssig=91961b7eb168b37c3cf83c5a3fbc924d&time_stamp=1501898891392&cookie_id=86d28f2f621b78a1de35bb311ef9e67c&vend=1&os=2&partner=1&platform=2&cookie_id=86d28f2f621b78a1de35bb311ef9e67c&refer=miaopai&scid=9ekKNJyagFjcAAPbplR1AkYBb-5vucF-f9gp5Q__\" type=\"video/x-ms-asf-plugin\" width=\"550\" height=\"400\" autostart=\"false\" loop=\"true\" />\r\n</div>',5,1504077899),(6,7,6,'联系我们','<span class=\"fr\">星光装饰设计公司的中文全称：星光装饰设计公司<br />\r\n英文全称：Star decoration design company<br />\r\n星光装饰设计公司法定住所：安徽省合肥市经开区明珠广场上海城市9#1105<br />\r\n邮 编：230000<br />\r\n电 话：（0551）63228800<br />\r\n传 真：（0551）63228866<br />\r\n乘车路线：<br />\r\n1、乘坐地铁一号线或四号线明珠广场站下车，出西南（J2）出口，向西约80米<br />\r\n2、乘坐公交102、105、22路明珠广场下车，路西沿教育街西行约100米左右<br />\r\n3、乘坐公交15、37路明珠广场下车，向东约200米路南<br />\r\n4、乘坐公交1、226、52、728路明珠广场下车，向西约100米路南 </span>',0,1504084617),(7,7,1,'《战狼2》太个人英雄主义？吴京一番话怒怼','《战狼2》票房不断刷新，但有人质疑电影太过于个人英雄主义。吴京怒怼：“别人拍你们觉得OK，中国人一拍你们就觉得太个人英雄主义？我就展现一下中国军人的精气神而已，怎么就不行？必须行！看不惯别看，看美国片去。”<embed src=\"http://gslb.miaopai.com/stream/zi2xn-vWmncEU9URwz9nHJwY6LYm~y~qNqehaQ__.mp4?ssig=6d53cdc6f0d9f4cb9f10a197966c4556&time_stamp=1502006044438&cookie_id=86d28f2f621b78a1de35bb311ef9e67c&vend=1&os=2&partner=1&platform=2&cookie_id=86d28f2f621b78a1de35bb311ef9e67c&refer=miaopai&scid=zi2xn-vWmncEU9URwz9nHJwY6LYm%7Ey%7EqNqehaQ__\" type=\"video/x-ms-asf-plugin\" width=\"550\" height=\"400\" autostart=\"false\" loop=\"true\" />',2,1504099888),(8,7,1,'泰国人妖揭秘纪录片，颠覆你对泰国人妖的认知和看法！','<div align=\"center\">\r\n	一部爆火的泰国人妖纪录片，揭秘泰国人妖的真实生活！她们是这个世界上特殊的人群，她们的平均年龄一般不会超过四十岁，她们要比正常人承受百倍的痛苦……<embed src=\"http://gslb.miaopai.com/stream/9eFjAFaZqkL1XogQYswiwEDNJmfmtp4m.mp4?ssig=8cb3de460f615560ff318c691049e84d&time_stamp=1501641115052&cookie_id=86d28f2f621b78a1de35bb311ef9e67c&vend=1&os=2&partner=1&platform=2&cookie_id=86d28f2f621b78a1de35bb311ef9e67c&refer=miaopai&scid=9eFjAFaZqkL1XogQYswiwEDNJmfmtp4m\" type=\"video/x-ms-asf-plugin\" width=\"550\" height=\"400\" autostart=\"false\" loop=\"true\" />\r\n</div>',0,1504099959),(9,7,3,'关于我们','<div class=\"text\">\r\n	<p class=\"text ml50\">\r\n		星光装饰设计公司成立于1998年，注册资金人民币 200万元，具有合肥市家庭居室装饰装修企业资格证(穗家<br />\r\n装证字15号).我公司依照我国的法律、法规、建立公司总部，在合肥市，全国分别设立了25家分公司，总部直属<br />\r\n56个工程部，拥有300多名各类高、中、初级专业技术管理人\r\n                        员和3000多名各类工种的施工队伍，拥有满足各类<br />\r\n型室内设计、装饰工能力，是人、财、物实力雄厚的室内设计、装饰施工企业。\r\n	</p>\r\n	<p class=\"text1 ml50\">\r\n		我公司自创建以来，一直遵循着诚信的企业精神以及“质量第一、客户至上”的质量方针，承担了大量店铺、<br />\r\n写字楼、专卖店、酒楼、家居、别墅的室内设计及施工，在合肥市享有良好的\r\n                        社会信誉。\r\n	</p>\r\n	<p class=\"text ml50\">\r\n		我们本着“创新设计、专业力量、周到服务”，秉承人性化的管理模式，率先推出绿色环保，请环保专家对<br />\r\n公司的员工实施专业培训，让“环保“意识根植于每一位员工的心里。公司坚持\r\n                        服务态度，追求装饰艺术生活<br />\r\n化、施工管理规范化、服务最优化、发展持续化、设计理念人性化\r\n                        为广大客户提供更 优质的服务。\r\n	</p>\r\n	<p class=\"text ml50\">\r\n		我公司在装饰设计、施工质量、安全生产、技术进步等方面均不断取得成绩，荣誉有：\r\n	</p>\r\n	<p class=\"text ml50\">\r\n		中国建筑装饰协会优秀会员单位\r\n	</p>\r\n	<p class=\"text ml50\">\r\n		全国住宅装饰装修优秀企业\r\n	</p>\r\n	<p class=\"text ml50\">\r\n		全国住宅装饰行业质量服务诚信企业\r\n	</p>\r\n	<p class=\"text ml50\">\r\n		全国住宅装饰装修示范工程奖获奖企业\r\n	</p>\r\n	<p class=\"text ml50\">\r\n		合肥市装饰界消费者信得过“三连冠”品牌企业\r\n	</p>\r\n	<p class=\"text ml50\">\r\n		广州市优秀家装工程项目奖获奖企业。\r\n	</p>\r\n	<p class=\"text ml50\">\r\n		2004年，我公司通过中国质量认证中心之ISO9001：2000质量体系认证，2005、2006通过监督年核。项目<br />\r\n经理、施工员、质安员、装饰装修工全部经合肥建委、合肥市劳保局职业培\r\n                        训并持证上岗,我公司将竭诚为用户提<br />\r\n供更好的服务质量，与社会各界真诚合作，共同繁荣室内装\r\n                        饰设计、装饰装修市场，为行业的健康发展作出更大<br />\r\n的贡献。\r\n	</p>\r\n</div>',0,1504102377);

/*Table structure for table `jzy_xingguang_cases` */

DROP TABLE IF EXISTS `jzy_xingguang_cases`;

CREATE TABLE `jzy_xingguang_cases` (
  `caseid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `casename` varchar(80) NOT NULL,
  `caseimage` varchar(200) NOT NULL,
  `sid` int(10) unsigned NOT NULL,
  `aid` int(10) unsigned NOT NULL,
  `lid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`caseid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=gbk;

/*Data for the table `jzy_xingguang_cases` */

insert  into `jzy_xingguang_cases`(`caseid`,`casename`,`caseimage`,`sid`,`aid`,`lid`) values (2,'时尚休闲','upload/1504271533.jpg',2,2,1),(4,'北欧二居室装修案例','upload/1504272452.jpg',4,4,3),(5,'品质生活客厅装修效果图','upload/1504272518.jpg',7,2,4),(6,'125平米现代三室一厅','upload/1504272566.jpg',9,3,1),(7,'大方房子过廊棚','upload/1504272617.jpg',5,5,3),(8,'格调房子3室2厅','upload/1504272667.jpg',3,2,1),(9,'精巧木艺背景墙','upload/1504272711.jpg',7,1,2),(10,'Loft风格复古雅致一居室','upload/1504272767.jpg',8,4,1),(11,'时尚简约中式三居','upload/1504272838.jpg',5,5,3),(12,'简单单间配套家装','upload/1504272875.jpg',6,1,2);

/*Table structure for table `jzy_xingguang_categories` */

DROP TABLE IF EXISTS `jzy_xingguang_categories`;

CREATE TABLE `jzy_xingguang_categories` (
  `cid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cname` varchar(64) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=gbk;

/*Data for the table `jzy_xingguang_categories` */

insert  into `jzy_xingguang_categories`(`cid`,`cname`) values (1,'新闻资讯'),(3,'关于我们'),(4,'精品案例'),(5,'设计团队'),(6,'联系我们'),(7,'产品展示');

/*Table structure for table `jzy_xingguang_customer` */

DROP TABLE IF EXISTS `jzy_xingguang_customer`;

CREATE TABLE `jzy_xingguang_customer` (
  `cid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customername` varchar(80) NOT NULL,
  `customerimage` varchar(200) NOT NULL,
  `customerurl` varchar(200) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=gbk;

/*Data for the table `jzy_xingguang_customer` */

insert  into `jzy_xingguang_customer`(`cid`,`customername`,`customerimage`,`customerurl`) values (1,'华阳房产','upload/1503990288.png','http://huayang.com'),(3,'月河星辰','upload/1503994819.png','http://fang.com'),(4,'远程房产','upload/1503995039.png','http://yuancheng.com'),(5,'丽华房产','upload/1503995094.jpg','http://lihua.com'),(6,'天骏花园','upload/1503995146.png','http://tianjun.com'),(7,'鑫和房产','upload/1503995195.png','http://xinhe.com');

/*Table structure for table `jzy_xingguang_friendlink` */

DROP TABLE IF EXISTS `jzy_xingguang_friendlink`;

CREATE TABLE `jzy_xingguang_friendlink` (
  `fid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(80) NOT NULL,
  `furl` varchar(200) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=gbk;

/*Data for the table `jzy_xingguang_friendlink` */

insert  into `jzy_xingguang_friendlink`(`fid`,`fname`,`furl`) values (1,'腾讯新闻','http://qq.com'),(2,'天猫商城','http://tianmao.com'),(4,'京东商城','http://jd.com'),(5,'百度','http://baidu.com'),(6,'合肥科诺教育','http://100ming.net'),(7,'新浪','http://sina.com'),(8,'搜狐','http://sohu.com');

/*Table structure for table `jzy_xingguang_layout` */

DROP TABLE IF EXISTS `jzy_xingguang_layout`;

CREATE TABLE `jzy_xingguang_layout` (
  `lid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `caselayout` varchar(30) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=gbk;

/*Data for the table `jzy_xingguang_layout` */

insert  into `jzy_xingguang_layout`(`lid`,`caselayout`) values (1,'普通住宅'),(2,'公寓'),(3,'别墅'),(4,'跃层');

/*Table structure for table `jzy_xingguang_make` */

DROP TABLE IF EXISTS `jzy_xingguang_make`;

CREATE TABLE `jzy_xingguang_make` (
  `mid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `xingming` varchar(80) NOT NULL,
  `shouji` int(11) unsigned NOT NULL,
  `email` varchar(100) NOT NULL,
  `createtime` int(10) unsigned NOT NULL,
  `flag` enum('y','n') NOT NULL,
  `liuyan` text NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=gbk;

/*Data for the table `jzy_xingguang_make` */

insert  into `jzy_xingguang_make`(`mid`,`xingming`,`shouji`,`email`,`createtime`,`flag`,`liuyan`) values (5,'蒋振宇',4294967295,'1041073143@qq.com',1504454187,'n','适合人群: 无基础/转行/学生..班型: 全日制/周末/业余/线上特色: 签就业协议/享就业保险\r\nbootstrap? 合肥JAVA工程师.学bootstrap 编程选达内,上市机构,不就业免费重学,java前景好,就业薪资高.');

/*Table structure for table `jzy_xingguang_style` */

DROP TABLE IF EXISTS `jzy_xingguang_style`;

CREATE TABLE `jzy_xingguang_style` (
  `sid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `casestyle` varchar(30) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=gbk;

/*Data for the table `jzy_xingguang_style` */

insert  into `jzy_xingguang_style`(`sid`,`casestyle`) values (2,'现代简约'),(3,'田园'),(4,'欧式'),(5,'中式'),(6,'地中海'),(7,'混搭'),(8,'美丽乡村'),(9,'其他');

/*Table structure for table `jzy_xingguang_team` */

DROP TABLE IF EXISTS `jzy_xingguang_team`;

CREATE TABLE `jzy_xingguang_team` (
  `tid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tname` varchar(80) NOT NULL,
  `timage` varchar(200) NOT NULL,
  `tposition` varchar(80) NOT NULL,
  `tstore` varchar(80) NOT NULL,
  `tcase` int(10) unsigned NOT NULL,
  `tpop` int(10) unsigned NOT NULL,
  `tdesign` text NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=gbk;

/*Data for the table `jzy_xingguang_team` */

insert  into `jzy_xingguang_team`(`tid`,`tname`,`timage`,`tposition`,`tstore`,`tcase`,`tpop`,`tdesign`) values (1,'吴妃德 ','upload/1504147611.png','总监级设计师','徐汇设计中心 ',30,3398,'好的设计要另眼相看。'),(2,'何抗生','upload/1504148394.png','总监级设计师 ','总部管理中心',50,2031,'让技术和艺术结合得更完美，玩味空间的同时把功能和使用放到第一位。擅长风格：北欧风情中式传统 新古典主义'),(5,'周佳婵','upload/1504234504.png','首席设计师 ','总部管理中心',88,777,'没有什么是最好的，根据不同人的需要，去设计最适合他们的居室，从而让他们得到满足感\r\n。而他们的满足就是对我们最好的奖赏。'),(6,'王彬彬','upload/1504234433.png','首席设计师','欧坊国际设计中心 ',77,999,'客户本身就是形成风格的根源，发掘开发出客户所有的潜在品质以作为空间的导线索是设计 \r\n师最大的乐趣之一。擅长风格：简欧 现代简约 田园'),(7,'刘明哲','upload/1504234361.png','设计总监 ','总部管理中心',56,666,'实用和唯美结合，现实和梦想切换，材料和精神彰显。擅长风格：欧式古典， 新古典，古典\r\n地中海 ，现代简约，代表作品：白金瀚宫 西郊紫郡 香山丽舍 绿洲千岛花园别墅');

/*Table structure for table `jzy_xingguang_users` */

DROP TABLE IF EXISTS `jzy_xingguang_users`;

CREATE TABLE `jzy_xingguang_users` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `sex` enum('m','f') NOT NULL DEFAULT 'm',
  `password` char(32) NOT NULL,
  `fav` varchar(80) NOT NULL,
  `city` varchar(80) NOT NULL,
  `avatar` varchar(120) DEFAULT NULL,
  `regtime` int(10) unsigned NOT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `flag` enum('y','n') NOT NULL DEFAULT 'n',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=gbk;

/*Data for the table `jzy_xingguang_users` */

insert  into `jzy_xingguang_users`(`uid`,`username`,`sex`,`password`,`fav`,`city`,`avatar`,`regtime`,`mail`,`flag`) values (1,'admin888','m','7fef6171469e80d32c0559f88b377245','reading,sports','hefei',NULL,1503903486,NULL,'y'),(7,'程序猿','f','934b535800b1cba8f96a5d72f72f1611','reading,shopping','hefei','Uploads/2017-09-12/59b7e162d8bec.jpg',1504492269,'','n'),(8,'蒋振宇','m','202cb962ac59075b964b07152d234b70','sports','hefei',NULL,1505017952,'2759106113@qq.com','n'),(9,'程序猿1','f','934b535800b1cba8f96a5d72f72f1611','reading,shopping','wuhu','Uploads/2017-09-12/59b7e1582c75b.png',1503926598,NULL,'n'),(13,'程序猿111','m','202cb962ac59075b964b07152d234b70','sports,shopping','hefei','Uploads/2017-09-12/59b7cf67ca32c.jpg',1505218407,NULL,'n'),(14,'程序猿2','m','123','sports','wuhu',NULL,1234567890,NULL,'n'),(15,'程序猿3','m','123','reading','wuhu',NULL,1234567890,NULL,'n'),(16,'程序猿4','m','456','reading','wuhu',NULL,1234567890,NULL,'n'),(17,'程序猿5','m','789','reading','wuhu',NULL,1234567890,NULL,'n'),(18,'程序猿6','f','789','shopping','hefei',NULL,4294967295,NULL,'n'),(19,'程序猿7','m','123','shopping','hefei',NULL,1234567890,NULL,'n'),(20,'程序猿8','f','202cb962ac59075b964b07152d234b70','sports,shopping','wuhu','Uploads/2017-09-12/59b7f258091a5.png',1505227352,NULL,'n'),(22,'程序猿1111','m','e10adc3949ba59abbe56e057f20f883e','reading','hefei',NULL,1505304817,NULL,'n'),(23,'程序猿22','f','f53f99355b3cb91a847867503effda5a','reading','hefei',NULL,1505306411,NULL,'n'),(24,'程序猿235','m','43cca4b3de2097b9558efefd0ecc3588','reading','hefei',NULL,1505310274,NULL,'n');

/*Table structure for table `jzy_xingguang_view` */

DROP TABLE IF EXISTS `jzy_xingguang_view`;

CREATE TABLE `jzy_xingguang_view` (
  `vid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(80) NOT NULL,
  `avatar` varchar(200) DEFAULT NULL,
  `vtime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=gbk;

/*Data for the table `jzy_xingguang_view` */

insert  into `jzy_xingguang_view`(`vid`,`username`,`avatar`,`vtime`) values (1,'程序猿','upload/1503933383.jpg',1505017519),(2,'admin888','',1505097892),(3,'蒋振宇','',1505018004),(4,'jiangzy','',1505095681);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
