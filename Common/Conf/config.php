<?php
return array(
    //'SHOW_PAGE_TRACE' => true,
	//'配置�?=>'配置�?
	'DEFAULT_MODULE' => 'Admin',//设置默认模块
	'MODULE_ALLOW_LIST' => array('Home','Admin'),//模块列表
    'DEFAULT_CONTROLLER' => 'User', // 默认控制器名�?
    'DEFAULT_ACTION' => 'login', // 默认操作名称
    'TMPL_ENGINE_TYPE'      =>  'Smarty',     // 默认模板引擎
	//配置数据�?
	'DB_TYPE'               =>  'mysql',     // 数据库类�?
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'articaldb',          // 数据库名
    'DB_USER'               =>  'root',      // 用户�?
    'DB_PWD'                =>  '123456',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'ar_',    // 数据库表前缀
    'DB_PARAMS'          	=>  array(), // 数据库连接参�?   
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模�?开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8



);