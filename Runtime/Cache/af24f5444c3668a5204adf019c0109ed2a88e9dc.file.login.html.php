<?php /* Smarty version Smarty-3.1.6, created on 2017-04-14 11:07:35
         compiled from "D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\User\login.html" */ ?>
<?php /*%%SmartyHeaderCode:3189958ea309e70f2f0-63503861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af24f5444c3668a5204adf019c0109ed2a88e9dc' => 
    array (
      0 => 'D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\\User\\login.html',
      1 => 1492139073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3189958ea309e70f2f0-63503861',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58ea309f2a056',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ea309f2a056')) {function content_58ea309f2a056($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录界面</title>
	<link href="<?php echo @ADMIN_CSS_URL;?>
base.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo @ADMIN_CSS_URL;?>
login.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo @ADMIN_CSS_URL;?>
font-awesome.min.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<div class="header w" id='header'>
    	<div class="headLeft">
	        <i class="fa fa-phone fa-lg"></i>
	        <span>400-0696-189</span>
	        <span>
	            <a href="#"><i class="fa fa-weixin fa-lg"></i></a>
	            &nbsp;
	            <a href="#"><i class="fa fa-qq fa-lg"></i></a>
	        </span>
	        <span><a href="#">关于我们</a></span>
	       	<span> 
	       		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	       		<iframe width="500" scrolling="no" height="18" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=40&icon=3&py=zhuhai&num=3">
	       		</iframe>
	       	</span>
    	</div>
    <div class="headRight">
        <span>
            <i class="fa fa-user fa-lg"></i>&nbsp;
            <a href="<?php echo @__MODULE__;?>
/User/login">登录</a>
        </span>     
        <span>
            <i class="fa fa-user fa-lg"></i>&nbsp;
            <a href="<?php echo @__MODULE__;?>
/User/register">免费注册</a>
        </span>
    </div>
</div>
<div class='clearfix line'></div>
	
	<div class="center">
		<div class="top">
			<span>文章管理平台</span>
		</div>
		<div class="left fl">
			<div class="logo"></div>
			<div class="userlogin">
				<span class='U'>U</span>
				<span class='hydl'>欢迎登陆</span>
				<span class='SERLOGIN'><p>SERLOGIN</p></span>
			</div>
		</div>
		<div class="right fr">
			<div class="login_top">
				<i class="fa fa-user-circle-o fa-lg"></i>
				<span>用户登录</span>
			</div>
			<div class="login_box">
				<form action="<?php echo @__SELF__;?>
" method="post">
					<span class="user_icon"><i class="fa fa-user fa-lg"></i></span>
					账号：<input class='login_input' name="username" type="text" placeholder='请输入账号' required="required">
					<br><br>
					<span class="pwd_icon"><i class="fa fa-lock fa-lg"></i></span>
					密码：<input class='login_input' name="password" type="password" placeholder='请输入密码' required="required">
					<br><br>
					<input type="radio" name="user_role" value="1" checked="checked">管理员
					&nbsp;&nbsp;&nbsp;<input type="radio" name="user_role" value="2">用户
					<br><br>
					<div id="captcha">
						<label for="captcha" style="color:#fff;">验证码：</label>
						<input name="captcha" class="login_input captcha" type="text">
				    	<img src="<?php echo @__CONTROLLER__;?>
/verifyImg" 
				        onclick="this.src='<?php echo @__CONTROLLER__;?>
/verifyImg/'+Math.random()"alt="" />
					</div>
					<br>
					<input class='login_btn' type="submit" value='登录'>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="<?php echo @__MODULE__;?>
/User/register"><input class='login_btn' type="button" value='注册'></a>
			</div>
		</div>
	</div>
	<div class="footer clearfix">	
       <em>Copyright &copy; 北京师范大学珠海分校金凤路18号燕华七栋A735 | 邓学文 2017.4</em>
	</div>

</body>
</html><?php }} ?>