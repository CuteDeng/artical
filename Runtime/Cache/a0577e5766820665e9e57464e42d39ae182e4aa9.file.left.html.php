<?php /* Smarty version Smarty-3.1.6, created on 2017-04-20 23:06:17
         compiled from "/usr/local/http2/htdocs/article/Admin/View/Index/left.html" */ ?>
<?php /*%%SmartyHeaderCode:55291835958f8ce6937eb35-92010640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0577e5766820665e9e57464e42d39ae182e4aa9' => 
    array (
      0 => '/usr/local/http2/htdocs/article/Admin/View/Index/left.html',
      1 => 1492009904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55291835958f8ce6937eb35-92010640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth_infoA' => 0,
    'v' => 0,
    'auth_infoB' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58f8ce693f28a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f8ce693f28a')) {function content_58f8ce693f28a($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>left</title>
	<link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
base.css">
    <link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
admin.css">
    <link href="<?php echo @ADMIN_CSS_URL;?>
font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
base.js"></script>
  
</head>
<body>
	<div class="con_left">
			<a class="note" href="<?php echo @__MODULE__;?>
/Chat/index"
			 target="right">
            聊天室
			&nbsp;&nbsp;
            <i class="fa fa-comments"></i>
            </a>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			<ul class="admin_info">		
				<li id="adminInfoID" class="head_li">
					<i class="fa fa-user-circle-o orange"></i>&nbsp;&nbsp;
					<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>

				</li>
				<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoB']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
	 			<?php if ($_smarty_tpl->tpl_vars['vv']->value['auth_pid']==$_smarty_tpl->tpl_vars['v']->value['auth_id']){?>
				<li class="bro_li">
					<a href="<?php echo @__MODULE__;?>
/<?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_c'];?>
/<?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_a'];?>
" target="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;
					<?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_name'];?>

					</a>
				</li>
				<?php }?>
				<?php } ?>
			</ul>
			<?php } ?>
	</div>
</body>

</html><?php }} ?>