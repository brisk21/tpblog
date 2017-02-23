-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-01-29 17:11:37
-- 服务器版本： 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jxblog`
--

-- --------------------------------------------------------

--
-- 表的结构 `adminuser`
--

CREATE TABLE `adminuser` (
  `id` int(10) NOT NULL,
  `username` varchar(60) NOT NULL COMMENT '管理员名称',
  `password` varchar(60) NOT NULL COMMENT '管理员密码',
  `phone` int(60) DEFAULT NULL COMMENT '手机号码',
  `email` varchar(60) DEFAULT NULL COMMENT '邮箱地址'
) COMMENT='通过手机号码索引';

--
-- 转存表中的数据 `adminuser`
--

INSERT INTO `adminuser` (`id`, `username`, `password`, `phone`, `email`) VALUES
(46, '123', '202cb962ac59075b964b07152d234b70', NULL, NULL),
(47, 'brisk', 'b8851fa4828a23e931a85ced73157eec', NULL, NULL),
(48, 'lanlan', '202cb962ac59075b964b07152d234b70', NULL, NULL),
(51, '111', '202cb962ac59075b964b07152d234b70', NULL, NULL),
(52, 'admin', '202cb962ac59075b964b07152d234b70', NULL, NULL),
(53, 'ff', '1aabac6d068eef6a7bad3fdf50a05cc8', NULL, NULL),
(54, 'f', '03c7c0ace395d80182db07ae2c30f034', NULL, NULL),
(55, 'er', 'f1290186a5d0b1ceab27f4e77c0c5d68', NULL, NULL),
(56, 'fda', '0cc175b9c0f1b6a831c399e269772661', NULL, NULL),
(57, '3', 'e369853df766fa44e1ed0ff613f563bd', NULL, NULL),
(58, '3f', 'c12e01f2a13ff5587e1e9e4aedb8242d', NULL, NULL),
(59, 'fdfs', '639d76897485360b3147e66e0a8a3d6c', NULL, NULL),
(60, 'time()', '03c7c0ace395d80182db07ae2c30f034', NULL, NULL),
(61, 'time()', '03c7c0ace395d80182db07ae2c30f034', NULL, NULL),
(62, 'time()', '03c7c0ace395d80182db07ae2c30f034', NULL, NULL),
(63, 'time()', '03c7c0ace395d80182db07ae2c30f034', NULL, NULL),
(64, 'time()', '03c7c0ace395d80182db07ae2c30f034', NULL, NULL),
(65, 'time()', '03c7c0ace395d80182db07ae2c30f034', NULL, NULL),
(66, 'time()', '03c7c0ace395d80182db07ae2c30f034', NULL, NULL),
(67, 'time()', '03c7c0ace395d80182db07ae2c30f034', NULL, NULL),
(68, 'time()', '03c7c0ace395d80182db07ae2c30f034', NULL, NULL),
(69, 'time()', '03c7c0ace395d80182db07ae2c30f034', NULL, NULL),
(70, 'time()', '03c7c0ace395d80182db07ae2c30f034', NULL, NULL),
(71, 'time()', '03c7c0ace395d80182db07ae2c30f034', NULL, NULL),
(72, 'time()', '03c7c0ace395d80182db07ae2c30f034', NULL, NULL),
(73, 'time()', '03c7c0ace395d80182db07ae2c30f034', NULL, NULL),
(74, 'time()', '03c7c0ace395d80182db07ae2c30f034', NULL, NULL),
(75, 'time()', '03c7c0ace395d80182db07ae2c30f034', NULL, NULL),
(76, 'time()', '03c7c0ace395d80182db07ae2c30f034', NULL, NULL),
(77, 'time()', '03c7c0ace395d80182db07ae2c30f034', NULL, NULL),
(78, 'time()', '03c7c0ace395d80182db07ae2c30f034', NULL, NULL),
(80, 'time()', '03c7c0ace395d80182db07ae2c30f034', NULL, NULL),
(81, 'time()', '03c7c0ace395d80182db07ae2c30f034', NULL, NULL),
(82, 'time()', '03c7c0ace395d80182db07ae2c30f034', NULL, NULL),
(83, 'time()', '03c7c0ace395d80182db07ae2c30f034', NULL, NULL),
(84, 'time()', '03c7c0ace395d80182db07ae2c30f034', NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) NOT NULL,
  `author` varchar(60) NOT NULL COMMENT '作者',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `keywords` varchar(255) DEFAULT NULL COMMENT '关键词',
  `content` text NOT NULL COMMENT '内容',
  `intime` int(30) DEFAULT NULL COMMENT '发布时间',
  `uptime` int(30) DEFAULT NULL COMMENT '更新时间',
  `love` int(20) DEFAULT '0' COMMENT '点赞数',
  `read` int(20) DEFAULT NULL COMMENT '阅读次数'
) COMMENT='标题索引';

--
-- 转存表中的数据 `blogs`
--

INSERT INTO `blogs` (`id`, `author`, `title`, `keywords`, `content`, `intime`, `uptime`, `love`, `read`) VALUES
(1, 'brisk', 'lanlan', NULL, '', 12343434, NULL, 0, NULL),
(2, 'brisk', 'lanlan', NULL, 'forlove', 12343434, NULL, 0, NULL),
(3, 'brisk', 'lanlan', NULL, 'forlove', 12343434, NULL, 0, NULL),
(4, 'brisk', 'lanlan', NULL, 'forlove', 12343434, NULL, 0, NULL),
(5, 'brisk', 'lanlan', NULL, 'forlove', 12343434, NULL, 0, NULL),
(6, 'brisk', 'lanlan', NULL, 'forlove', 12343434, NULL, 0, NULL),
(7, 'brisk', 'lanlan', NULL, 'forlove', 12343434, NULL, 0, NULL),
(8, 'brisk', 'lanlan', NULL, 'forlove', 12343434, NULL, 0, NULL),
(9, 'brisk', 'lanlan', NULL, 'forlove', 12343434, NULL, 0, NULL),
(10, 'brisk', 'lanlan', NULL, 'forlove', 12343434, NULL, 0, NULL),
(11, 'brisk', 'lanlan', NULL, 'forlove', 12343434, NULL, 0, NULL),
(12, 'brisk', 'lanlan', NULL, 'forlove', 12343434, NULL, 0, NULL),
(13, 'brisk', 'lanlan', NULL, 'forlove', 12343434, NULL, 0, NULL),
(14, 'brisk', 'lanlan', NULL, 'forlove', 12343434, NULL, 0, NULL),
(15, 'brisk', 'lanlan', NULL, 'forlove', 12343434, NULL, 0, NULL),
(16, 'brisk', 'lanlan', NULL, 'forlove', 12343434, NULL, 0, NULL),
(18, 'brisk', 'lanlan', NULL, 'forlove', 12343434, NULL, 0, NULL),
(19, 'brisk', 'lanlan', NULL, 'forlove', 12343434, NULL, 0, NULL),
(26, '3434', '人非官方', NULL, '非官方个', 435454353, NULL, 0, NULL),
(27, '连续奋斗', '我们的时间我们控制，我需要的布置好了吗要', NULL, '电风扇的范德萨', 1234556777, 7654321, 0, NULL),
(29, '小兰', '测试第二条', NULL, '就是测试一下，没有什么的', NULL, NULL, 0, NULL),
(36, '发发', '我要发', 'D佛都是', '&lt;h2&gt;\r\n	发顺丰\r\n&lt;/h2&gt;\r\n&lt;p&gt;\r\n	&lt;img src=&quot;http://www.tp.com/Public/kindeditor/plugins/emoticons/images/9.gif&quot; border=&quot;0&quot; alt=&quot;&quot; /&gt;&lt;img src=&quot;/Uploads/image/20170126/20170126154342_71847.jpg&quot; alt=&quot;&quot; /&gt; \r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;embed src=&quot;/Uploads/flash/20170126/20170126160132_10563.swf&quot; type=&quot;application/x-shockwave-flash&quot; width=&quot;200&quot; height=&quot;200&quot; quality=&quot;high&quot; /&gt;\r\n&lt;/p&gt;', 1485442907, 1485442907, 0, NULL),
(42, '小宝', '测试修改', '图标标准', '&lt;p&gt;\r\n	只有图片，没有问题吗&lt;img src=&quot;http://www.tp.com/Public/kindeditor/plugins/emoticons/images/2.gif&quot; border=&quot;0&quot; alt=&quot;&quot; /&gt; \r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;img src=&quot;/Uploads/image/20170126/20170126154517_26850.png&quot; width=&quot;500&quot; height=&quot;281&quot; title=&quot;linux系统，破解wifi&quot; align=&quot;left&quot; alt=&quot;linux系统，破解wifi&quot; /&gt; \r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;embed src=&quot;/Uploads/flash/20170126/20170126154810_36993.swf&quot; type=&quot;application/x-shockwave-flash&quot; width=&quot;550&quot; height=&quot;400&quot; quality=&quot;high&quot; /&gt;\r\n&lt;/p&gt;', 1485442108, 1485442108, 0, NULL),
(43, '我喜欢你ll', '号店', '变得好', '&lt;p&gt;\r\n	学习代码，好心\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n&lt;pre class=&quot;prettyprint lang-php&quot;&gt;echo &quot;haoao&quot;;&lt;/pre&gt;\r\n&lt;pre class=&quot;prettyprint lang-php&quot;&gt;&amp;lt;?php&lt;/pre&gt;\r\n&lt;pre class=&quot;prettyprint lang-php&quot;&gt;$page = new \\Think\\Libary\\Page.class.php;&lt;/pre&gt;\r\n&lt;pre class=&quot;prettyprint lang-php&quot;&gt;echo 123;&lt;/pre&gt;\r\n&lt;pre class=&quot;prettyprint lang-php&quot;&gt;?&amp;gt;&lt;/pre&gt;\r\n&lt;/p&gt;', 1485444854, NULL, 0, NULL),
(44, '韦小宝', '代码测试，学会自我保持', '大米爱老师', '&lt;pre class=&quot;prettyprint lang-php&quot;&gt;echo &quot;haoao&quot;;&lt;/pre&gt;\r\n&lt;pre class=&quot;prettyprint lang-php&quot;&gt;&amp;lt;?php&lt;/pre&gt;\r\n&lt;pre class=&quot;prettyprint lang-php&quot;&gt;$page = new \\Think\\Libary\\Page.class.php;&lt;/pre&gt;\r\n&lt;pre class=&quot;prettyprint lang-php&quot;&gt;echo 123;&lt;/pre&gt;\r\n&lt;p&gt;\r\n	?&amp;gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	我是不是厉害了&lt;img src=&quot;http://www.tp.com/Public/kindeditor/plugins/emoticons/images/1.gif&quot; border=&quot;0&quot; alt=&quot;&quot; /&gt;\r\n&lt;/p&gt;', 1485444929, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `settings`
--

CREATE TABLE `settings` (
  `id` int(12) NOT NULL,
  `key` varchar(255) DEFAULT NULL COMMENT '键',
  `val` varchar(255) DEFAULT NULL COMMENT '值'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='博客设置';

--
-- 转存表中的数据 `settings`
--

INSERT INTO `settings` (`id`, `key`, `val`) VALUES
(1, 'title', '广西科技大学计算机爱好者协会'),
(2, 'intro', '传播计算机文化，打造E时代精神，我们走在IT最前沿！'),
(4, 'copyright', '版权©广西科技大学计算机爱好者协会，备案号：&lt;a href=&quot;http://www.beianbeian.com/search/gxustcla.cn&quot;&gt;桂ICP备16004757号-2&lt;/a&gt;'),
(5, 'index_count', '6'),
(6, 'admin_count', '9'),
(7, 'keywords', '计算机协会,广西科技大学,gxustcla,计协,广西科技大学计算机协会'),
(8, 'web_wellcome', '广西科技大学计算机爱好者协会'),
(9, 'software', '软件相关'),
(10, 'system', '系统相关'),
(11, 'phone', '手机相关'),
(12, 'others', '其他相关'),
(13, 'answer', '在线问答'),
(14, 'message', '在线反馈'),
(15, 'join', '加入我们'),
(16, 'huodong', '最新活动'),
(17, 'f_link1', '广西科技大学');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(60) NOT NULL COMMENT '用户名',
  `password` varchar(60) NOT NULL COMMENT '用户密码',
  `phone` varchar(50) DEFAULT NULL COMMENT '用户手机',
  `mail` varchar(50) DEFAULT NULL COMMENT '用户邮箱'
) COMMENT='用户名索引';

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `phone`, `mail`) VALUES
(34, '123', '202cb962ac59075b964b07152d234b70', '', NULL),
(35, '111', '698d51a19d8a121ce581499d7b701668', '', NULL),
(37, '小宝', '202cb962ac59075b964b07152d234b70', '', NULL),
(40, 'admin', '698d51a19d8a121ce581499d7b701668', '', NULL),
(41, '12321', '698d51a19d8a121ce581499d7b701668', '15177741279', ''),
(42, 'admin1', '698d51a19d8a121ce581499d7b701668', '15177741279', '1076963452@qq.com'),
(43, '11111', '6512bd43d9caa6e02c990b0a82652dca', '15177741279', '1076963452@qq.com'),
(44, 'admin的', '96e79218965eb72c92a549dd5a330112', '15177741279', '1076963452@qq.com'),
(45, 'admin111', '7fa8282ad93047a4d6fe6111c93b308a', '15177741279', '1076963452@qq.com'),
(46, 'rwerw', '980ac217c6b51e7dc41040bec1edfec8', '15177741279', 'weibingsheng@yahoo.com'),
(47, 'dfsfsf', '980ac217c6b51e7dc41040bec1edfec8', '15177741279', '1076963452@qq.com'),
(48, 'dsfsdfsf', 'fa02962f5fb9474dd13bba1c1908681d', '15177741279', '1076963452@qq.com'),
(49, 'adminaa', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', '15177741279', '1076963452@qq.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index` (`phone`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index` (`title`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index` (`username`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
