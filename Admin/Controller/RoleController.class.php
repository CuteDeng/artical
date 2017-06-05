<?php
namespace Admin\Controller;
use Admin\Controller\BaseController;
//use Think\Controller;
// use Think\Verify;
// use Model\UserModel;
class RoleController extends BaseController {
	public function showlist(){
		$role = D('Role');
		$role_info = $role -> select();
		// dump($role_info);
		// die;
		$this->assign('role_info',$role_info);
		$this->display();
	}
}