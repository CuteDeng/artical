<?php /* Smarty version Smarty-3.1.6, created on 2017-04-14 13:14:26
         compiled from "D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\Article\showUserArticle.html" */ ?>
<?php /*%%SmartyHeaderCode:1020358ea42a28b3a07-98050690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0104f1581b82529de5e5365212ffec65062bcb33' => 
    array (
      0 => 'D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\\Article\\showUserArticle.html',
      1 => 1492146858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1020358ea42a28b3a07-98050690',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58ea42a2a40b0',
  'variables' => 
  array (
    'info' => 0,
    'smaty' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ea42a2a40b0')) {function content_58ea42a2a40b0($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人文章列表</title>
	<link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
base.css">
    <link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
admin.css">
    <link href="<?php echo @ADMIN_CSS_URL;?>
font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
showlist.css">
	<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$(".search_btn").on('click', function(event) {
				if($(".search_input").val() == ""){
					alert("请输入查询内容！");
					event.preventDefault();
				}
				
			});
		});	
	</script>
</head>
<body>
	<div class="main_box">
		<div class="top_bar">
			<span class="cur_location">
				<i class="fa fa-home fa-lg"></i>&nbsp;&nbsp;
				当前位置：用户文章&nbsp;
				<i class="fa fa-angle-double-right">&nbsp;
				<?php echo $_smarty_tpl->tpl_vars['info']->value[0]['username'];?>
的文章列表</i>
			</span>
		</div> 
		<div class="right_con">
			<table border="1" width="100%" cellpadding="0" cellspacing="0">
				<tr >
					<td colspan="7">
						<div class="search_box">
							<form action="<?php echo $_smarty_tpl->tpl_vars['smaty']->value['const']['__CONTROLLER__'];?>
searchMyArticle" method="post">
								<input type="text" name="articleInfo" class="search_input" placeholder="请填入搜索内容！">
								<input type="submit" value="搜索" class="search_btn">
							</form>
							
						</div>
					</td>
				</tr>
				<tr>
					<td>序号</td>
					<td>标题</td>
					<td>作者</td>
					<td>文章类型</td>
					<td>发布时间</td>
					<td>发布者</td>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['article_id'];?>
</td>
					<td><a href="<?php echo @__CONTROLLER__;?>
/showArticle/article_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['article_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['article_title'];?>
</a></td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['article_author'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['article_type'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['article_time'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
				</tr>
				<?php } ?>
				<tr>
	                <td colspan="20" style="text-align: center;">
	                    <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

	                </td>
	            </tr>
			</table>
		</div>
	</div>
</body>
</html><?php }} ?>