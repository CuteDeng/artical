<?php
namespace Admin\Controller;
use Admin\Controller\BaseController;
//use Think\Controller;
// use Think\Verify;
// use Model\UserModel;
class AuthController extends BaseController {
	public function showlist(){
		$auth = D('Auth');
		$auth_info = $auth -> select();
		// dump($auth_info);
		// die;
		$this->assign('auth_info',$auth_info);
		$this->display();
	}
}