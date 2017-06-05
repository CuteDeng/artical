<?php
namespace Admin\Controller;
use Admin\Controller\BaseController;
//use Think\Controller;
// use Think\Verify;
// use Model\UserModel;
class ManagerController extends BaseController {
	public function showlist(){
		$manager = D('User');
		$manager_info = $manager -> where('user_roleid = 1') -> select();
		// dump($manager_info);
		// die;
		$this->assign('manager_info',$manager_info);
		$this->display();
	}
}