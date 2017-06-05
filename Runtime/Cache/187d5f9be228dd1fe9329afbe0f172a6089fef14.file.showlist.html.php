<?php /* Smarty version Smarty-3.1.6, created on 2017-04-14 16:28:06
         compiled from "D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\User\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:3225558ea4cd7a33539-33114650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '187d5f9be228dd1fe9329afbe0f172a6089fef14' => 
    array (
      0 => 'D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\\User\\showlist.html',
      1 => 1492158390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3225558ea4cd7a33539-33114650',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58ea4cd7ccb2f',
  'variables' => 
  array (
    'user_info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ea4cd7ccb2f')) {function content_58ea4cd7ccb2f($_smarty_tpl) {?><!DOCTYPE html>
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
	<style>
		
		.box{
			width: 95%;
			margin: 0 auto;
		}
		.box table{
			margin-top: 20px;
			line-height: 20px;
			font-size: 15px;
			text-align: center;
		}
		
		
	</style>
	
</head>
<body>
	<div class="main_box">
		<div class="top_bar">
			<span class="cur_location">
				<i class="fa fa-home fa-lg"></i>&nbsp;&nbsp;
				当前位置：权限管理&nbsp;
				<i class="fa fa-angle-double-right">&nbsp;
				用户列表</i>
			</span>
		</div>
		<div class="box">
			<table border="1" width="100%" cellpadding="0" cellspacing="0">
				<tr><th>头像</th><th>姓名</th><th>密码</th><th>性别</th><th>邮箱</th><th>QQ</th><th>电话</th><th>注册时间</th><th>最后登录时间</th><th>操作</th></tr>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
				<tr>
					<td><img src="<?php echo @SITE_URL;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['userimg'];?>
" height="30" width="30"></td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['password'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['usersex'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['qq'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['mobile'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['registertime'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['lasttime'];?>
</td>
					<td>
						<a class="forbid" href="<?php echo @__CONTROLLER__;?>
/forbidUser/userid/<?php echo $_smarty_tpl->tpl_vars['v']->value['userid'];?>
"><?php if ($_smarty_tpl->tpl_vars['v']->value['forbid']==0){?>已禁用<?php }elseif($_smarty_tpl->tpl_vars['v']->value['forbid']==1){?>禁用<?php }?></a>
						&nbsp;|&nbsp;
						<a href="<?php echo @__CONTROLLER__;?>
/freeUser/userid/<?php echo $_smarty_tpl->tpl_vars['v']->value['userid'];?>
">解禁</a>
					</td>
				</tr>
				<?php } ?>
				<tr>
	                <td colspan="10" style="text-align: center;">
	                    <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

	                </td>
	            </tr>
			</table>
		</div>
	</div>
</body>
<script>
	var forbid = document.getElementsByTagName('a');
	for(var i=0; i<forbid.length;i++){
		if(forbid[i].innerHTML == "已禁用"){
			forbid[i].removeAttribute("href");
			//forbid[i].nextSibling.removeAttribute("href");
		}
		if(forbid[i].innerHTML == "禁用"){
			//forbid[i].removeAttribute("href");
			forbid[i+1].removeAttribute("href");
		}
	}
</script>

</html><?php }} ?>