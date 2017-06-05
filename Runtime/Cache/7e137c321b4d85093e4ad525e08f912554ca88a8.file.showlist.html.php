<?php /* Smarty version Smarty-3.1.6, created on 2017-04-09 23:00:18
         compiled from "D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\Manager\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:2274158ea41d35dd255-29063669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e137c321b4d85093e4ad525e08f912554ca88a8' => 
    array (
      0 => 'D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\\Manager\\showlist.html',
      1 => 1491750013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2274158ea41d35dd255-29063669',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58ea41d38f93f',
  'variables' => 
  array (
    'manager_info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ea41d38f93f')) {function content_58ea41d38f93f($_smarty_tpl) {?><!DOCTYPE html>
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