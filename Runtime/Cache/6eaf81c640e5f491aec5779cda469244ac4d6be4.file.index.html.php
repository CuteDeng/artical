<?php /* Smarty version Smarty-3.1.6, created on 2017-04-20 23:06:17
         compiled from "/usr/local/http2/htdocs/article/Admin/View/Index/index.html" */ ?>
<?php /*%%SmartyHeaderCode:206752759158f8ce690de3d7-03596696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eaf81c640e5f491aec5779cda469244ac4d6be4' => 
    array (
      0 => '/usr/local/http2/htdocs/article/Admin/View/Index/index.html',
      1 => 1491744389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206752759158f8ce690de3d7-03596696',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58f8ce69128bb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f8ce69128bb')) {function content_58f8ce69128bb($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>管理界面</title>
    <style type="text/css">  
        *{
            margin: 0;
            padding: 0;
        }
        body{
             background-color: #f0eeef;
        }
        .top{  
            width:100%;  
        }  
        .bottom{
            width:100%; 
        }
        .content {
            width:100%;  
            height: 600px;      
        }
    </style> 
</head>

<body>
    <div class="top">  
        <iframe frameborder=0 width=100% height=94 marginheight=0 marginwidth=0 scrolling=no src="<?php echo @__CONTROLLER__;?>
/top.html"></iframe>  
    </div>  

    <div class="content">
        <iframe frameborder=0 width=17% height=600 marginheight=0 marginwidth=0 scrolling=no src="<?php echo @__CONTROLLER__;?>
/left.html"></iframe> 
        <iframe name="right" frameborder=0 width=82% height=600 marginheight=0 marginwidth=0 scrolling=no src="<?php echo @__CONTROLLER__;?>
/right.html"></iframe> 
    </div>  

    <div class="bottom">  
        <iframe frameborder=0 width=100% height=90 marginheight=0 marginwidth=0 scrolling=no src="<?php echo @__CONTROLLER__;?>
/bottom.html"></iframe>  
    </div>  
    
</body>

</html><?php }} ?>