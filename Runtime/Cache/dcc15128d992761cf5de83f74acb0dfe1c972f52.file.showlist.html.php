<?php /* Smarty version Smarty-3.1.6, created on 2017-04-09 23:01:37
         compiled from "D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\Role\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:2082558ea4c90ea4df2-48022933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcc15128d992761cf5de83f74acb0dfe1c972f52' => 
    array (
      0 => 'D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\\Role\\showlist.html',
      1 => 1491750092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2082558ea4c90ea4df2-48022933',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58ea4c910ccbe',
  'variables' => 
  array (
    'role_info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ea4c910ccbe')) {function content_58ea4c910ccbe($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>角色列表</title>
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
				角色列表</i>
			</span>
		</div>
		<div class="box">
			<table border="1" width="100%" cellpadding="0" cellspacing="0">
				<tr><th>ID</th><th>角色</th><th>权限ids</th><th>权限</th></tr>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['role_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['roleid'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['rolename'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['role_auth_ids'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['role_auth_ac'];?>
</td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</body>
</html><?php }} ?>