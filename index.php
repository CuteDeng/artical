<?php
header('content-type:text/html;charset=utf-8');
define('APP_DEBUG',true);   //开发调试模式
define('TOOLS_PATH', '/article/Tools/');
//站点根目录
define('SITE_URL','http://www.supergov.cn/article/');
//Admin后台
define('ADMIN_CSS_URL','/article/Admin/Public/css/');
define('ADMIN_IMG_URL','/article/Admin/Public/imgs/');
define('ADMIN_JS_URL','/article/Admin/Public/js/');
include '../ThinkPHP/ThinkPHP.php';