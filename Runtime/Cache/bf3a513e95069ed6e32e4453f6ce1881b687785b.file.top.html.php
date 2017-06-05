<?php /* Smarty version Smarty-3.1.6, created on 2017-04-20 23:06:17
         compiled from "/usr/local/http2/htdocs/article/Admin/View/Index/top.html" */ ?>
<?php /*%%SmartyHeaderCode:530166858f8ce69280478-57969943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf3a513e95069ed6e32e4453f6ce1881b687785b' => 
    array (
      0 => '/usr/local/http2/htdocs/article/Admin/View/Index/top.html',
      1 => 1492095139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '530166858f8ce69280478-57969943',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58f8ce6930d63',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f8ce6930d63')) {function content_58f8ce6930d63($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>top</title>
	<link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
base.css">
    <link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
admin.css">
    <link href="<?php echo @ADMIN_CSS_URL;?>
font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div class="header">
		<span class="logo">
			<img src="<?php echo @ADMIN_IMG_URL;?>
logo-gray.png" alt="您的浏览器版本过低哦">
		</span>
		<span class="span1">文章发布平台</span>
		<span class="span2">ARTICLE PUBLISHING PLATFORM</span>
		<span class="span3">
			<i class="fa fa-user fa-lg"></i>&nbsp;&nbsp;&nbsp;
			<em class="admin">欢迎登录！尊敬的<?php if ($_SESSION['user_roleid']==1){?>管理员<?php }else{ ?>用户<?php }?>：
			</em>&nbsp; <?php echo $_SESSION['username'];?>

			<em class="admin">&nbsp;</em>
		</span>
		<span class="span6">
			<iframe width="420" scrolling="no" height="60" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=12&icon=1&py=zhuhai&num=5"></iframe>
		</span>
		<span class="span5">登录时间：<?php echo $_SESSION['lasttime'];?>
</span>
		<span class="span4"><a href="<?php echo @__MODULE__;?>
/User/logout" target='_top'>退出登录</a></span>
	</div>
</body>


</html><?php }} ?>