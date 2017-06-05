<?php /* Smarty version Smarty-3.1.6, created on 2017-04-12 20:41:01
         compiled from "D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\User\userinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:2463958edc3963c5a55-69831192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eea153c8f0ab46d96c17b69ca87eeb5c593c19c9' => 
    array (
      0 => 'D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\\User\\userinfo.html',
      1 => 1492000858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2463958edc3963c5a55-69831192',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58edc3965400a',
  'variables' => 
  array (
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58edc3965400a')) {function content_58edc3965400a($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户列表</title>
	<link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
base.css">
    <link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
admin.css">
    <link href="<?php echo @ADMIN_CSS_URL;?>
font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo @ADMIN_CSS_URL;?>
userinfo.css" rel="stylesheet">
	
</head>
<body>
	<div class="main_box">
		<div class="top_bar">
			<span class="cur_location">
				<i class="fa fa-home fa-lg"></i>&nbsp;&nbsp;
				当前位置：个人中心&nbsp;
				<i class="fa fa-angle-double-right">&nbsp;
				个人信息</i>
			</span>
		</div>
		<div class="box">
			<div class="left">
				<div class="headImg">
					<img src="<?php echo @SITE_URL;?>
<?php echo $_smarty_tpl->tpl_vars['user_info']->value['userimg'];?>
" alt="&nbsp;无头像">
				</div>
				<div class="headInfo">
					<p>
						<span>
							<i class="fa fa-clock-o fa-lg"></i>
							注册时间：
						</span>
					</p>
					<br>
					<p><span><?php echo $_smarty_tpl->tpl_vars['user_info']->value['registertime'];?>
</span></p>
					<br>
					<p>
						<span>
							<i class="fa fa-clock-o fa-lg"></i>
							登录时间：
						</span>
					</p>
					<br>
					<p><span><?php echo $_smarty_tpl->tpl_vars['user_info']->value['lasttime'];?>
</span></p>
				</div>
				
			</div>
			<div class="right">
				<div class="topbox">
						<i class="fa fa-drivers-license-o fa-lg"></i>	
						&nbsp;
						<span class="zhxx">账户信息</span>								
				</div>
				<div class="midbox">
					
					<p>
						<span>
							<i class="fa fa-address-book fa-lg"></i>	用户名：<?php echo $_smarty_tpl->tpl_vars['user_info']->value['username'];?>

						</span>
					</p>
					<br><br>
					<p>
						<span>
							<i class="fa fa-lock fa-lg"></i>	
							密码：<?php echo $_smarty_tpl->tpl_vars['user_info']->value['password'];?>

						</span>
					</p>
					<br><br>
					<p>
						<span>
							<i class="fa fa-street-view fa-lg"></i>	
							性别：<?php echo $_smarty_tpl->tpl_vars['user_info']->value['usersex'];?>

						</span>
					</p>
					<br><br>
					<p>
						<span>
							<i class="fa fa-envelope fa-lg"></i>	
							邮箱：<?php echo $_smarty_tpl->tpl_vars['user_info']->value['email'];?>

						</span>
					</p>
					<br><br>
					<p>
						<span>
							<i class="fa fa-qq fa-lg"></i>
							QQ：<?php echo $_smarty_tpl->tpl_vars['user_info']->value['qq'];?>

						</span>
					</p>
					<br><br>
					<p>
						<span>
							<i class="fa fa-phone fa-lg"></i>
							电话：<?php echo $_smarty_tpl->tpl_vars['user_info']->value['mobile'];?>

						</span>
					</p>
				</div>
				
			</div>
		</div>
	</div>
</body>


</html><?php }} ?>