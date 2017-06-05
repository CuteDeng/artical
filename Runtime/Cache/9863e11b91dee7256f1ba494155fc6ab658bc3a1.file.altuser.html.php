<?php /* Smarty version Smarty-3.1.6, created on 2017-04-13 16:25:43
         compiled from "D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\User\altuser.html" */ ?>
<?php /*%%SmartyHeaderCode:2808958ee0576edbcb8-27765339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9863e11b91dee7256f1ba494155fc6ab658bc3a1' => 
    array (
      0 => 'D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\\User\\altuser.html',
      1 => 1492071940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2808958ee0576edbcb8-27765339',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58ee05770a02b',
  'variables' => 
  array (
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ee05770a02b')) {function content_58ee05770a02b($_smarty_tpl) {?><!DOCTYPE html>
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
    <script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
ajaxfileupload.js"></script>
	<script>
		$(document).ready(function () {
		 	$("#userimg").on('change', function(event) {
		 		event.preventDefault();
		 		ajaxFileUpload();
		 	});
		});

		function ajaxFileUpload() {
			var xsrc = "<?php echo @SITE_URL;?>
<?php echo $_smarty_tpl->tpl_vars['user_info']->value['userimg'];?>
";
            $.ajaxFileUpload
            (
                {
                    url: "<?php echo @__CONTROLLER__;?>
/altpic", //用于文件上传的服务器端请求地址
                    secureuri: false, //是否需要安全协议，一般设置为false
                    fileElementId: 'userimg', //文件上传域的ID
                    dataType: 'JSON', //返回值类型 一般设置为json
                    data:{
                        userimg : xsrc,
                    },
                    type: 'post',
                    success: function (data, status)  //服务器成功响应处理函数
                    {
                    	if(data != "error"){
                    		$(".headPic").attr("src",data);
                    	}else{
                    		alert("修改失败");
                    	}
                        
                          
                    },
                    error: function (data, status, e)//服务器响应失败处理函数
                    {
                        alert(e);
                    }
                }
            )
        }
	
	</script>
</head>
<body>
	<div class="main_box">
		<div class="top_bar">
			<span class="cur_location">
				<i class="fa fa-home fa-lg"></i>&nbsp;&nbsp;
				当前位置：个人中心&nbsp;
				<i class="fa fa-angle-double-right">&nbsp;
				修改个人信息</i>
			</span>
		</div>
		<div class="box">
			<!-- 将当前头像的src属性返回给后台，后台将该对应文件删除 -->
			<form action="<?php echo @__SELF__;?>
?userimg=<?php echo @SITE_URL;?>
<?php echo $_smarty_tpl->tpl_vars['user_info']->value['userimg'];?>
" method="post" enctype="multipart/form-data">
				<div class="left">
					<div class="headImg">
						<img class="headPic" src="<?php echo @SITE_URL;?>
<?php echo $_smarty_tpl->tpl_vars['user_info']->value['userimg'];?>
" alt="">
						<div id="altPic">
							<span>修改头像</span>
							<input type="file" id="userimg" name="userimg">
						</div>
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
							<i class="fa fa-cogs fa-lg"></i>	
							&nbsp;
							<span class="zhxx">修改个人信息</span>				
					</div>
					<div class="midbox">				
						<p>
							<span>
								<i class="fa fa-address-book fa-lg"></i>	用户名：<input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['username'];?>
">
							</span>
						</p>
						<br><br>
						<p>
							<span>
								<i class="fa fa-lock fa-lg"></i>	
								密码：<input type="text" name="password" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['password'];?>
">
							</span>
						</p>
						<br><br>
						<p>
							<span>
								<i class="fa fa-envelope fa-lg"></i>	
								邮箱：<input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['email'];?>
">
							</span>
						</p>
						<br><br>
						<p>
							<span>
								<i class="fa fa-qq fa-lg"></i>
								QQ：<input type="text" name="qq" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['qq'];?>
">
							</span>
						</p>
						<br><br>
						<p>
							<span>
								<i class="fa fa-phone fa-lg"></i>
								电话：<input type="text" name="mobile" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['mobile'];?>
">
							</span>
						</p>

						
					</div>				
				</div>
				<div class="btnbox">
					<input class="btn" type="submit" value="修改">
				</div>				
			</form>
		</div>
	</div>
</body>


</html><?php }} ?>