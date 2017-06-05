<?php /* Smarty version Smarty-3.1.6, created on 2017-04-09 22:58:34
         compiled from "D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\Auth\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:434858ea4b6f524384-80493364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af02469f891ce93775f8a636303371c65473f44b' => 
    array (
      0 => 'D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\\Auth\\showlist.html',
      1 => 1491749910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '434858ea4b6f524384-80493364',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58ea4b6f8519d',
  'variables' => 
  array (
    'auth_info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ea4b6f8519d')) {function content_58ea4b6f8519d($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>权限列表</title>
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
				权限列表</i>
			</span>
		</div>
		<div class="box">
			<table border="1" width="100%" cellpadding="0" cellspacing="0">
				<tr><th>ID</th><th>权限</th><th>父id</th><th>控制器</th><th>操作方法</th><th>全路径</th><th>权限级别</th></tr>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['auth_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_pid'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_c'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_a'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_path'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_level'];?>
</td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</body>
</html><?php }} ?>