<?php
//后台Index控制器
namespace Admin\Controller;
use Admin\Controller\BaseController;
//use Think\Controller;
// use Tools\AdminController;
//Controller父类：ThinkPHP/Library/Think/Controller.class.php
class IndexController extends BaseController{
    //登录系统
    function head(){
        $this -> display();
    }
    function left(){
        //用户id
        $userid = session('userid');
        $username = session('username');
        //根据id获得用户信息
        $user_info = D('User')->find($userid);
        
        //角色id
        $role_id = $user_info['user_roleid'];
        //获得角色信息
        $role_info = D('Role')->find($role_id);
        // dump($role_info);
        // die;
        //权限的ids信息
        $auth_ids = $role_info['role_auth_ids'];
        //获得全部权限数据
        //顶级权限、次顶级权限
        if($username === '邓学文'){//admin管理员
            $auth_infoA = D('Auth')->where("auth_level=0 ")->select();
            $auth_infoB = D('Auth')->where("auth_level=1 ")->select();        
        }else{//普通用户
            $auth_infoA = D('Auth')->where("auth_level=0 and auth_id in ($auth_ids)")->select();
            $auth_infoB = D('Auth')->where("auth_level=1 and auth_id in ($auth_ids)")->select();
        }

        // //把获得的权限信息传递给模板显示
        $this -> assign('auth_infoA',$auth_infoA);
        $this -> assign('auth_infoB',$auth_infoB);
        $this -> display();
    }
    function right(){
        $this -> display();
    }
    function index(){
//        dump(__MODULE__);
//        dump(__CONTROLLER__);
//        dump(__ACTION__);
        $this -> display();
    }
}
