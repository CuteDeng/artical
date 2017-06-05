<?php /* Smarty version Smarty-3.1.6, created on 2017-04-14 11:06:15
         compiled from "D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\Article\searchMyArticle.html" */ ?>
<?php /*%%SmartyHeaderCode:1279458f03ca78cff35-83079347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '757c110eaabb40c97edadc895a2d73beb95c369e' => 
    array (
      0 => 'D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\\Article\\searchMyArticle.html',
      1 => 1491747572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1279458f03ca78cff35-83079347',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articleInfo' => 0,
    'v' => 0,
    'smaty' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58f03ca7b4c96',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f03ca7b4c96')) {function content_58f03ca7b4c96($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>查询我的文章</title>
	<link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
base.css">
    <link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
admin.css">
    <link href="<?php echo @ADMIN_CSS_URL;?>
font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
showlist.css">
</head>
<body>
	<div class="main_box">
		<div class="top_bar">
			<span class="cur_location">
				<i class="fa fa-home fa-lg"></i>&nbsp;&nbsp;
				当前位置：我的文章&nbsp;
				<i class="fa fa-angle-double-right">&nbsp;
				查询结果</i>
			</span>
		</div> 
		<div class="right_con">
			<table border="1" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td>序号</td>
					<td>标题</td>
					<td>作者</td>
					<td>文章类型</td>
					<td>发布时间</td>
					<td>文章属性</td>
					<td>操作</td>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['articleInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['article_id'];?>
</td>
					<td><a href="<?php echo $_smarty_tpl->tpl_vars['smaty']->value['const']['__CONTROLLER__'];?>
showArticle/article_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['article_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['article_title'];?>
</a></td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['article_author'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['article_type'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['article_time'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['article_authority'];?>
</td>
					<td>
						<a href="<?php echo $_smarty_tpl->tpl_vars['smaty']->value['const']['__CONTROLLER__'];?>
updArticle/article_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['article_id'];?>
">修改</a>&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href="<?php echo $_smarty_tpl->tpl_vars['smaty']->value['const']['__CONTROLLER__'];?>
dltArticle/article_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['article_id'];?>
" onclick = "javascript:if(!confirm('确定要删除这篇文章?'))return false;">删除</a>
					</td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</body>
</html><?php }} ?>