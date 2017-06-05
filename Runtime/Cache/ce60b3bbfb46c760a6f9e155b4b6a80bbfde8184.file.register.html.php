<?php /* Smarty version Smarty-3.1.6, created on 2017-04-21 22:27:33
         compiled from "/usr/local/http2/htdocs/article/Admin/View/User/register.html" */ ?>
<?php /*%%SmartyHeaderCode:15033194158fa16d5430f79-06677914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce60b3bbfb46c760a6f9e155b4b6a80bbfde8184' => 
    array (
      0 => '/usr/local/http2/htdocs/article/Admin/View/User/register.html',
      1 => 1492131699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15033194158fa16d5430f79-06677914',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58fa16d5510a0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fa16d5510a0')) {function content_58fa16d5510a0($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册页面</title>
	<link href="<?php echo @ADMIN_CSS_URL;?>
base.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo @ADMIN_CSS_URL;?>
register.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo @ADMIN_CSS_URL;?>
font-awesome.min.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
scrollable.js"></script>
	<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
register.js"></script>
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
            <a href="login.html">登录</a>
        </span>     
        <span>
            <i class="fa fa-user-plus fa-lg"></i>&nbsp;
            <a href="register.html">免费注册</a>
        </span>
    </div>
</div>
<div class='clearfix line'></div>
<div class="banner">
    <a href="#"></a>
</div>
<div id="main">
    <form action="<?php echo @__SELF__;?>
" method="post" name="form1"
    enctype="multipart/form-data">
        <div id="wizard">
            <div class="logo"></div>
            <div class="userRegist">
                <span class='U'>U</span>
                <span class='hyzz'>欢迎注册</span>
                <span class='REGISTER'><p>REGISTER</p></span>
            </div>
            <ul id="status">
                <li class="active"><strong>1.</strong>创建账户</li>
                <li><strong>2.</strong>填写联系信息</li>
                <li><strong>3.</strong>完成</li>
            </ul>

            <div class="items">
                <div class="page">
                    <h3>创建一个账户<br/>
                        <em>请填写您的注册账户信息，用于登录。</em>
                    </h3>
                    
                    <p>
                        <label>用户名：</label>
                        <input type="text" class="input" autofocus='autofocus' id="username" name="username" placeholder='要求2-12位，支持字母，数字，下划线' required="required" onblur="checkUsername(this.value)" />
                       
                        <em id="message" class='usernameNotice'></em>
                    </p>
                    <span class="username_icon">
                        <i class="fa fa-user fa-lg"></i>
                    </span>
                    <p>
                        <label>密码：</label>
                        <input type="password" class="input" id="pass" name="password"  placeholder='请设置您的密码' required="required" onblur="checkpwd(this.value)"/>
                        <em class='passwordNotice'></em>
                    </p>
                    <span class="password_icon">
                        <i class="fa fa-lock fa-lg"></i>
                    </span>
                    <p>
                        密码强度：
                        <div id="strength_length">
                            <span id="weak" >弱</span>
                            <span id="mid" >中</span>
                            <span id="strong" >强</span>
                        </div>
                    </p>
                    <p>
                        <label>确认密码：</label>
                        <input type="password" class="input" id="pass1" name="password1" placeholder='再次确认您的密码' required="required" onblur="checkRpwd(this.value)"/>
                        <em class='password1Notice'></em>
                    </p>
                    <span class="password1_icon">
                        <i class="fa fa-lock fa-lg"></i>
                    </span>
                    <br>
                    <p>
                        性别：
                        靓妹：<input name="usersex" type="radio" value="靓妹" checked="checked">
                        &nbsp;&nbsp;&nbsp;
                        帅哥：<input name="usersex" type="radio" value="帅哥">
                    </p>
                    <br>
                   <p>
                       上传头像：<input type="file" name="userimg">
                   </p>
                       
                    
                    <div class="btn_nav">
                        <input type="button" id="firstNext" class="next right" value="下一步&raquo;"/>
                    </div>
                </div>
                <div class="page">
                    <h3>填写联系信息<br/>
                        <em>请告诉我们您的联系方式。</em>
                    </h3>
                    <p>
                        <label>E-mail：</label>
                        <input type="email" class="input" id="mail" name="email" placeholder='example@example.com' autofocus='autofocus' required="required" onblur="checkMail(this.value)"/>
                        <span class="email_icon">
                            <i class="fa fa-envelope-o fa-lg"></i>
                        </span>
                        <em class='mailNotice'></em>
                    </p>
                    <p>
                        <label>QQ：</label>
                        <input type="text" class="input" id="qq" name="qq" placeholder='请输入您的QQ' required="required" onblur="checkQQ(this.value)"/>
                        <span class="qq_icon">
                            <i class="fa fa-qq fa-lg"></i>
                        </span>
                        <em class='qqNotice'></em>
                    </p>
                    <p>
                        <label>手机号码：</label>
                        <input type="tel" class="input" id="tel" name="mobile" placeholder='请输入您的手机号码' autofocus='autofocus' required="required" onblur="checkTel(this.value)"/>
                        <span class="tel_icon">
                            <i class="fa fa-mobile fa-lg"></i>
                        </span>
                        <em class='telNotice'></em>
                    </p>
                    <div class="btn_nav"> 
                        <input type="button" class="prev" style="float:left" value="&laquo;上一步"/>
                        <input type="button" class="next right" value="下一步&raquo;"/>
                    </div>
                </div>
                <div class="page">
                    <h3>完成注册<br/><em>点击确定完成注册。</em></h3>
                    <h4>欢迎您！</h4>
                    <p>请点击“确定”按钮完成注册。</p>
                    <br/>
                    <br/>
                    <br/>
                    <div class="btn_nav">
                        <input type="button" class="prev" style="float:left" value="&laquo;上一步"/>
                        <input type="submit" class="next right" id="sub" value="确定"/>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <br/>
</div>

<div class="footer clearfix">
     <em>Copyright &copy; 北京师范大学珠海分校金凤路18号燕华七栋A735 | 邓学文 2017.4</em>
</div>
</body>
</html><?php }} ?>