<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
	public function __construct(){
		parent::__construct();//Controller中存在构造，需要强制调用
		$this->checkLogin();
	}

	public function checkLogin(){
		//列出不需要登录验证的动作列表
		$no_list = array(
			'User' => array('login','logout','register','verifyImg','checkNM'),
			//控制器名 => 当前控制器不需要验证的动作名列表数组
			);
		if(isset($no_list[CONTROLLER_NAME]) && in_array(ACTION_NAME, $no_list[CONTROLLER_NAME])) {
			return ;
		}
		if(session('username') == ""){
			$this->redirect('User/login',array(),2,'请先登录');
		}
	}

}