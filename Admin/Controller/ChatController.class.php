<?php
//后台Index控制器
namespace Admin\Controller;
//use Think\Controller;
use Admin\Controller\BaseController;
use Model\ArticleModel;
use Think\Model;
// use Tools\AdminController;
//Controller父类：ThinkPHP/Library/Think/Controller.class.php
class ChatController extends BaseController{
	public function index(){
		$user = D('User');
		$onlineinfo = $user->where("online = 1")->field('username')->select();
		$count = $user->where("online = 1")->count('online');
		$this->assign('onlineinfo',$onlineinfo);
		$this->assign('count',$count);
		$this->display(); 
	}
	//获得聊天信息
	public function getmsg(){
		$message = D('Message');
		$maxID = $_GET['maxID'];
		$msginfo = $message -> where("id > '$maxID'") -> select();
		echo json_encode($msginfo);
	}
	//PHP代码来正则替换表情图片
    // function ubbReplace($str){ 
    //     $str = str_replace(">",'<；',$str); 
    //     $str = str_replace(">",'>；',$str); 
    //     $str = str_replace("\n",'>；br/>；',$str); 
    //     $str = preg_replace("[\[em_([0-9]*)\]]",">img src=\"{$smarty.const.ADMIN_IMG_URL}face/$1.gif\" />",$str); 
    //     return $str; 
    // } 
	//发送聊天信息
	public function addmsg(){
		
		$Model = new Model();
		
		$msg = $_POST['msg'];
		
		$color = $_POST['color'];
		
		$user = session('username');
		
		$sql = "insert into ar_message values 
		       (null,'$msg','$user','$color',now())";

		$z = $Model -> execute($sql);
		if($z){
			echo "发送成功！";
		}else {
			echo "发送失败！";
		}
	}
}