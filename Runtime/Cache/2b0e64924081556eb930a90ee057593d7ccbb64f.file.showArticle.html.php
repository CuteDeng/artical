<?php /* Smarty version Smarty-3.1.6, created on 2017-04-13 17:35:58
         compiled from "D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\Article\showArticle.html" */ ?>
<?php /*%%SmartyHeaderCode:3129858ea301d4ce358-43852034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b0e64924081556eb930a90ee057593d7ccbb64f' => 
    array (
      0 => 'D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\\Article\\showArticle.html',
      1 => 1492076152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3129858ea301d4ce358-43852034',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58ea301d60735',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ea301d60735')) {function content_58ea301d60735($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文章内容</title>
	<link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
base.css">
	<link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
admin.css">
	<link href="<?php echo @ADMIN_CSS_URL;?>
font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
showArtical.css">	
</head>
<body>
	<div class="main_box">
	    <div class="top_bar">
	      <span class="cur_location">
	        <i class="fa fa-home fa-lg"></i>&nbsp;&nbsp;
	        当前位置：文章管理&nbsp;
	        <i class="fa fa-angle-double-right">&nbsp;
	        文章内容</i>
	      </span>
	    </div> 
		<div class="box">
			<div class="head" >
				<table width="100%">
					<tr>
		    			<th colspan="3"><?php echo $_smarty_tpl->tpl_vars['info']->value['article_title'];?>
</th>
		  			</tr>
					<tr><td>作者：<?php echo $_smarty_tpl->tpl_vars['info']->value['article_author'];?>
</td><td>类型：<?php echo $_smarty_tpl->tpl_vars['info']->value['article_type'];?>
</td><td>发布时间：<?php echo $_smarty_tpl->tpl_vars['info']->value['article_time'];?>
</td></tr>
				</table>
			</div>
			<div class="content">
				<?php echo $_smarty_tpl->tpl_vars['info']->value['article_text'];?>

			</div>
		</div>
	</div>	
</body>
</html><?php }} ?>