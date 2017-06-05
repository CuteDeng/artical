<?php /* Smarty version Smarty-3.1.6, created on 2017-04-21 22:41:02
         compiled from "/usr/local/http2/htdocs/article/Admin/View/Role/showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:62592507558fa19fe76fd50-39156170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50bcad3219e2c801831bd90fe7df6b370adc4529' => 
    array (
      0 => '/usr/local/http2/htdocs/article/Admin/View/Role/showlist.html',
      1 => 1491750092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62592507558fa19fe76fd50-39156170',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'role_info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58fa19fe7cda8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fa19fe7cda8')) {function content_58fa19fe7cda8($_smarty_tpl) {?><!DOCTYPE html>
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