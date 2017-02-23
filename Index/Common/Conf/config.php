<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE' => 'mysql', // 数据库类型
	'DB_HOST' => '127.0.0.1', // 服务器地址
	'DB_NAME' => 'jxblog', // 数据库名
	'DB_USER' => 'root', // 用户名
	'DB_PWD' => '', // 密码
	'DB_PORT' => 3306, // 端口
	'DB_PREFIX' => '', // 数据库表前缀'DB_CHARSET'=> 
	'utf8', // 字符集
	'DB_DEBUG' => TRUE, // 数据库调试模式 开启后可以记录SQL日志
	'TMPL_TEMPLATE_SUFFIX' => '.php', // 默认模板文件后缀	
	//'URL_HTML_SUFFIX'=>'html',//默认伪静态后缀
	'URL_HTML_SUFFIX' => 'html|shtml|xml',
	'URL_MODEL' => 2, // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
	// 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE 模式); 3 (兼容模式) 默认为PATHINFO 模
	'TMPL_ACTION_ERROR' => THINK_PATH.'Tpl/dispatch_jump.tpl', // 默认错误跳转对应的模板文件

);