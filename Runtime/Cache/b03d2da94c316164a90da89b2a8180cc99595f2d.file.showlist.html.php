<?php /* Smarty version Smarty-3.1.6, created on 2017-04-21 22:42:39
         compiled from "/usr/local/http2/htdocs/article/Admin/View/Manager/showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:198825330558fa1a5f718bc1-96529314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b03d2da94c316164a90da89b2a8180cc99595f2d' => 
    array (
      0 => '/usr/local/http2/htdocs/article/Admin/View/Manager/showlist.html',
      1 => 1491750013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198825330558fa1a5f718bc1-96529314',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manager_info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58fa1a5f78148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fa1a5f78148')) {function content_58fa1a5f78148($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>管理员列表</title>
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
				管理员列表</i>
			</span>
		</div>
		<div class="box">
			<table border="1" width="100%" cellpadding="0" cellspacing="0">
				<tr><th>ID</th><th>姓名</th><th>密码</th><th>昵称</th><th>注册时间</th><th>最后登录时间</th></tr>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manager_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['userid'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['password'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['nickname'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['registertime'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['lasttime'];?>
</td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</body>
</html><?php }} ?>