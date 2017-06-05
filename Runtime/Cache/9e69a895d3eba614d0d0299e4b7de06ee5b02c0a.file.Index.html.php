<?php /* Smarty version Smarty-3.1.6, created on 2017-04-11 22:30:07
         compiled from "D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\Chat\Index.html" */ ?>
<?php /*%%SmartyHeaderCode:2280258ece86f1b1ca1-60494532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e69a895d3eba614d0d0299e4b7de06ee5b02c0a' => 
    array (
      0 => 'D:/ying yong ruan jian/amp/apache/htdocs/thinkphp/article/Admin/View\\Chat\\Index.html',
      1 => 1491920996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2280258ece86f1b1ca1-60494532',
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
  'unifunc' => 'content_58ece86f373b6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ece86f373b6')) {function content_58ece86f373b6($_smarty_tpl) {?><!DOCTYPE html>
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
chat.js"></script>
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
                    //console.log(xhr.responseText);
                    eval("var jn_msginfo="+xhr.responseText);
                    var s = "";
                    for(var i=0; i<jn_msginfo.length; i++){
                        s += "<p style='color:"+jn_msginfo[i].color+"'>"+jn_msginfo[i].sender+"&nbsp;对&nbsp;";
                        s += jn_msginfo[i].receiver + "&nbsp;" + jn_msginfo[i].biaoqing + "&nbsp;说：";
                        s += jn_msginfo[i].msg + "(" + jn_msginfo[i].add_time + 
                            ")</p>"
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
                    // document.getElementById('color').value="";
                    // document.getElementById('biaoqing').value="";
                    // document.getElementById('receiver').value="";
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
                        <div id="show_msg">
                         
                        </div>
                    </div>
                    <div id="send">
                        <form>
                            <div id="control">
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
                                表情：
                                <select id="biaoqing" name="biaoqing">
                                    <option value="">请选择</option>
                                    <option value="笑着">笑着</option>
                                    <option value="高兴地">高兴地</option>
                                    <option value="含情脉脉">含情脉脉</option>
                                    <option value="微笑">微笑</option>
                                    <option value="幸福">幸福</option>
                                    <option value="有点脸红">有点脸红</option>
                                    <option value="使劲安慰">使劲安慰</option>
                                    <option value="自言自语">自言自语</option>
                                    <option value="差点要哭">差点要哭</option>
                                    <option value="嚎啕大哭">嚎啕大哭</option>
                                    <option value="一把鼻涕">一把鼻涕</option>
                                    <option value="很无辜">很无辜</option>
                                    <option value="流口水">流口水</option>
                                    <option value="神秘兮兮">神秘兮兮</option>
                                    <option value="幸灾乐祸">幸灾乐祸</option>
                                    <option value="很不服气">很不服气</option>
                                    <option value="不怀好意">不怀好意</option>
                                    <option value="拳打脚踢">拳打脚踢</option>
                                    <option value="不知所措">不知所措</option>
                                    <option value="翻箱倒柜">翻箱倒柜</option>
                                    <option value="很遗憾">很遗憾</option>
                                    <option value="很严肃">很严肃</option>
                                    <option value="善意警告">善意警告</option>
                                    <option value="正气凛然">正气凛然</option>
                                    <option value="哈欠连天">哈欠连天</option>
                                    <option value="小声的">小声的</option>
                                    <option value="大声的">大声的</option>
                                    <option value="尖叫一声">尖叫一声</option>
                                    <option value="遗憾的">遗憾的</option>
                                    <option value="无精打采">无精打采</option>
                                    <option value="想吐">想吐</option>
                                    <option value="真诚">真诚</option>
                                    <option value="不好意思">不好意思</option>
                                    <option value="扭捏的">扭捏的</option>
                                    <option value="腼腆的">腼腆的</option>
                                    <option value="很诧异">很诧异</option>
                                    <option value="依依不舍">依依不舍</option>
                                </select>
                                聊天对象：
                                <select id="receiver" name="receiver">
                                    <option value="所有人">所有人</option> 
                                    <option value="恶魔">恶魔</option>
                                    <option value="甜甜">甜甜</option>
                                    <option value="诸葛">诸葛</option>
                                    <option value="成就梦想">成就梦想</option>
                                    <option value="郁金香">郁金香</option>
                                </select>
                                <br />
                                <textarea id="msg" name="msg"></textarea>
                                <input id="btn_send" type="button" value="发送" onclick="sendmsg()"/>
                                <span id="result"></span>
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
                            <a href="<?php echo @__CONTROLLER__;?>
/showonline">
                                <input type="button" value="刷新名单" >
                            </a>
                        </li>
                        <li>
                            <input type="button" value="刷新屏幕" onclick="clscreen()">
                        </li>
                        <li>
                             <a href="Index/index">
                            <input type="button" value="退出聊天">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html><?php }} ?>