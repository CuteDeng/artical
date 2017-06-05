<?php /* Smarty version Smarty-3.1.6, created on 2017-04-21 08:21:21
         compiled from "/usr/local/http2/htdocs/article/Admin/View/Chat/index.html" */ ?>
<?php /*%%SmartyHeaderCode:171796154658f95081503cc2-20440683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '320bf67b020c7978b03750efce104bf754c62879' => 
    array (
      0 => '/usr/local/http2/htdocs/article/Admin/View/Chat/index.html',
      1 => 1492165478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171796154658f95081503cc2-20440683',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'onlineinfo' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58f950815d814',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f950815d814')) {function content_58f950815d814($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>聊天室</title>
    <link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
base.css">
    <link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
admin.css">
    <link href="<?php echo @ADMIN_CSS_URL;?>
font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo @ADMIN_CSS_URL;?>
chat.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
jquery.min.js"></script>
     <script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
jquery-migrate-1.2.1.js"></script>
    <script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
jquery.qqFace.js"></script>
   <script>
                //上线
        window.onload = function(){
            var timer = setInterval("showmsg()",2000);      
        }
        //显示信息
        var maxID = 0;
        function showmsg(){            
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function(){
                if(xhr.readyState == 4){
                    eval("var jn_msginfo=" + xhr.responseText);
                    var s = "";
                    var msginfo = "";
                    for(var i=0; i<jn_msginfo.length; i++){
                        msginfo = replace_em(jn_msginfo[i].msg);
                        s += "<p style='color:"
                        +jn_msginfo[i].color+"'>"
                        +jn_msginfo[i].sender+"&nbsp;："
                        +msginfo+"("
                        +jn_msginfo[i].add_time+")</p>";

                        maxID = jn_msginfo[i].id;
                    }
                    
                    var hm = document.getElementById('show_msg'); 
                    hm.innerHTML += s;
                    hm.scrollTop = hm.scrollHeight;
                }
            }
            xhr.open('get',"<?php echo @__CONTROLLER__;?>
/getmsg?maxID="+maxID);
            xhr.send(null);
        }

        //清屏
        function clscreen(){
            document.getElementById('show_msg').innerHTML = "";       
        }

        //发送信息
        function sendmsg(){
            //发表聊天消息  FormData+Ajax合作
            var fm = document.getElementsByTagName('form')[0];
            var fd = new FormData(fm);
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function(){
                if(xhr.readyState==4){
                    document.getElementById('result').innerHTML = xhr.responseText;
                    //表单域信息归位
                    document.getElementById('msg').value="";
                    //"留言成功"标志归位,2s后归位
                    setTimeout("guiflag()",1000);
                }
            }
            xhr.open('post',"<?php echo @__CONTROLLER__;?>
/addmsg");
            xhr.send(fd);                                   
        }
        //"留言成功"标志归位
        function guiflag(){
            document.getElementById('result').innerHTML = "";
        }

        $(function(){
            $('.emotion').qqFace({
                id : 'facebox', //表情盒子的ID
                assign:'msg', //给那个控件赋值
                path:'<?php echo @ADMIN_IMG_URL;?>
face/'    //表情存放的路径
            });
          
            // $(".sub_btn").click(function(){
            //     var str = $("#msg").val();
            //     $("#show").html(replace_em(str));
            // });
        });
        //查看结果
        function replace_em(str){
            str = str.replace(/\</g,'&lt;');
            str = str.replace(/\>/g,'&gt;');
            str = str.replace(/\n/g,'<br/>');
            str = str.replace(/\[em_([0-9]*)\]/g,'<img src="<?php echo @ADMIN_IMG_URL;?>
face/$1.gif" border="0" />');
            return str;
        }

        // http://www.helloweba.com/view-blog-202.html
       
</script>

   </script>
</head>
    <body>
        <div class="main_box">
            <div class="top_bar">
                <span class="cur_location">
                    <i class="fa fa-home fa-lg"></i>&nbsp;&nbsp;
                    当前位置：聊天室
                </span>
            </div>
            <div id="main">
                
                <div id="left">
                    <div id="content">
                        <h2 id="content-title">有什么意见和建议欢迎大家踊跃提出</h2>
                        <hr />
                        <div id="show_msg"></div>
                    </div>
                    <div id="send">
                        <form>
                            <div id="control">  
                                <div class="comment"> 
                                    颜色：
                                    <select id="color" name="color">
                                        <option value="">请选择</option>
                                        <option style="color:#FF8888" value="#FF8888">爱的暗示</option>
                                        <option style="color:#00BBFF" value="#00BBFF">忧郁的蓝</option>
                                        <option style="color:#0000FF" value="#0000FF">碧空蓝天</option>
                                        <option style="color:#9F88FF" value="#9F88FF">灰蓝种族</option>
                                        <option style="color:#000088" value="#000088 ">蔚蓝海洋</option>
                                        <option style="color:#77FFEE" value="#77FFEE">清清之蓝</option>
                                        <option style="color:#4400B3" value="#4400B3">发亮篮紫</option>
                                        <option style="color:#A500CC" value="#A500CC">紫的拘谨</option>
                                        <option style="color:#B088FF" value="#B088FF">卡其制服</option>
                                        <option style="color:#D1BBFF" value="#D1BBFF">伦敦灰雾</option>
                                        <option style="color:#DC143C" value="#DC143C">卡布其诺</option>
                                        <option style="color:#A52A2A" value="#A52A2A">苦涩心红</option>
                                        <option style="color:#FF0000" value="#FF0000">正宗喜红</option>
                                        <option style="color:#990099" value="#990099">红的发紫</option>
                                        <option style="color:#FF0000" value="#FF0000">红旗飘飘</option>
                                        <option style="color:#D2691E" value="#D2691E ">黄金岁月</option>
                                        <option style="color:#800080" value="#800080">紫金绣贴</option>
                                        <option style="color:#006400" value="#006400">橄榄树绿</option>
                                        <option style="color:#000000" value="#000000">绝对黑色</option> 
                                    </select>
                                    &nbsp;&nbsp;
                                    <span class="emotion">表情:：</span>
                                    <textarea class="input" id="msg" name="msg"></textarea>
                                    <input class="sub_btn" id="btn_send" type="button" value="发送" onclick="sendmsg()"/>
                                    <span id="result"></span>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>

                <div id="right">
                    <h2>在线名单：（<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
人）</h2>
                    <ul id="user">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['onlineinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <li>用户:&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</li>
                        <?php } ?>
                    </ul>
                    <ul id="anniu">
                        <li>
                            <input type="button" value="清空屏幕" onclick="clscreen()">
                        </li>
                        <li>
                            <a href="index">
                                <input type="button" value="刷新聊天">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html><?php }} ?>