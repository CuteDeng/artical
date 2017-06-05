<?php /* Smarty version Smarty-3.1.6, created on 2017-04-14 08:38:04
         compiled from "D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\Article\addArticle.html" */ ?>
<?php /*%%SmartyHeaderCode:3086158ea30133d2156-74104414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '352e0c54c1aba3a4d58d34b32e70e9d8a51ba619' => 
    array (
      0 => 'D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\\Article\\addArticle.html',
      1 => 1492097069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3086158ea30133d2156-74104414',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58ea301351dc4',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ea301351dc4')) {function content_58ea301351dc4($_smarty_tpl) {?><!DOCTYPE html>
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
	<link href="<?php echo @ADMIN_CSS_URL;?>
addArticle.css" type="text/css" rel="stylesheet" />
  <script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
addArticle.js"></script>
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
        发布文章</i>
      </span>
    </div> 
	  <div class="box">
        <ul>
            <li class="on">通用信息</li>
            <li>文章内容</li>
        </ul>
        <form action="<?php echo @__SELF__;?>
" method="post" id="content">
            <div style="display:block" class="lbox">
               <table class="tbl">
                <tr>
                  <td>标题：</td><td><input class="ipt" name="article_title" type="text"></td>
                </tr>

                <tr>
                  <td>作者：</td><td><input class="ipt" name="article_author" type="text"></td>
                 
                </tr>
                <tr>
                    <td>文章类型：</td>
                    <td>
                      <select name="article_type">
                          <option value="小说">小说</option>
                          <option value="散文" selected="selected">散文</option>
                          <option value="诗词">诗词</option>
                          <option value="童话">童话</option>
                          <option value="说明文">说明文</option>
                          <option value="议论文">议论文</option>
                          <option value="记叙文">记叙文</option>
                      </select>
                    </td>
                </tr>
                <tr>
                  <td>公有：</td><td><input name="article_authority" value="公有" type="radio" checked="checked"></td>
                </tr>
                <tr>
                  <td>私有：</td><td><input name="article_authority" value="私有" type="radio"></td>
                </tr>
               </table>
            </div>
            
            <div style="display:none" class="rbox">
                 <textarea name="article_text" id="MyTextarea" cols="30" rows="10">
                 </textarea>
            </div>
            <span class="btn">
              <input class="btn_chd" type="submit" value="提交">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="btn_chd" type="reset" value="重置">
            </span>       
        </form>
        
    </div>
  </div>
</body>


</html><?php }} ?>