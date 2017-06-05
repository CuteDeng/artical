<?php /* Smarty version Smarty-3.1.6, created on 2017-04-14 12:45:36
         compiled from "D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\Article\updArticle.html" */ ?>
<?php /*%%SmartyHeaderCode:3008758ea43c532c685-17677703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c06dd1e268d6a2916b971996b2c1b80eb8855237' => 
    array (
      0 => 'D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\\Article\\updArticle.html',
      1 => 1492145112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3008758ea43c532c685-17677703',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58ea43c561d74',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ea43c561d74')) {function content_58ea43c561d74($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>发布文章</title>
  <link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
base.css">
  <link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
admin.css">
  <link href="<?php echo @ADMIN_CSS_URL;?>
font-awesome.min.css" rel="stylesheet">
 
<style>
 
  .ipt_box {
    width: 80%;
    height: 30px;
    margin: -10px auto;
  }
  .ipt {
    width: 150px;
    height: 20px;
    border: 1px solid #E0E0E0;
  }
  .btn {
    width: 200px;
    height: 40px;
    position: absolute;
    top: 500px;
    left: 430px;
  }
  .btn_chd{
    width: 70px;
    height: 30px;
    border-radius: 3px;
  }
 
</style>
</head>
<body>

  <!-- 配置文件 -->
  <script type="text/javascript" charset="utf-8" src="<?php echo @TOOLS_PATH;?>
ueditor/ueditor.config.js"></script>
  <!-- 编辑器源码文件 -->
  <script type="text/javascript" charset="utf-8" src="<?php echo @TOOLS_PATH;?>
ueditor/ueditor.all.min.js"> </script>
  <script type="text/javascript" charset="utf-8" src="<?php echo @TOOLS_PATH;?>
ueditor/lang/zh-cn/zh-cn.js"></script>
  <script id="editor" type="text/plain">
  </script>
    <!-- 实例化编辑器 -->
  <script>
  
      var editor = new UE.ui.Editor({initialFrameHeight:300});
      editor.render("MyTextarea");
  
  </script>
  <div class="main_box">
      <div class="top_bar">
        <span class="cur_location">
          <i class="fa fa-home fa-lg"></i>&nbsp;&nbsp;
          当前位置：文章管理&nbsp;
          <i class="fa fa-angle-double-right">&nbsp;
          修改文章</i>
        </span>
      </div> 
  	  <div class="box">
          <form action="<?php echo @__SELF__;?>
" method="post" class="content" id="content">
            <textarea name="article_text" id="MyTextarea" cols="30" rows="10">
              <?php echo $_smarty_tpl->tpl_vars['info']->value['article_text'];?>
   
            </textarea>
            <br><br>
            <div class="ipt_box">
              标题：<input class="ipt" name="article_title" type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['article_title'];?>
">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              作者：<input class="ipt" name="article_author" type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['article_author'];?>
">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              文章类型：
                    <select name="article_type" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['article_type'];?>
">
                        <option value="小说">小说</option>
                        <option value="散文" selected="selected">散文</option>
                        <option value="诗词">诗词</option>
                        <option value="童话">童话</option>
                        <option value="说明文">说明文</option>
                        <option value="议论文">议论文</option>
                        <option value="记叙文">记叙文</option>
                    </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              文章属性：
              <input name="article_authority" value="公有" type="radio" 
              <?php if ($_smarty_tpl->tpl_vars['info']->value['article_authority']=='公有'){?> checked="checked" <?php }?>>公有
              <input name="article_authority" value="私有" type="radio" 
              <?php if ($_smarty_tpl->tpl_vars['info']->value['article_authority']=='私有'){?> checked="checked" <?php }?>>私有
            </div>
             
            <br><br>
              <span class="btn">
                  <input class="btn_chd" type="submit" value="提交">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="btn_chd" type="reset" value="重置">
              </span>       
          </form>
          
      </div>
    </div>
</body>
<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
addArticle.js"></script>

</html><?php }} ?>