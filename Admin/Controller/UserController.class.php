<?php
namespace Admin\Controller;
use Admin\Controller\BaseController;
//use Think\Controller;
use Think\Verify;
use Think\Upload;
use Think\Image;
use Model\UserModel;
class UserController extends BaseController {
	//登录操作
	public function login(){
		$user = new UserModel();
		if(!empty($_POST)){
			$captcha = new Verify();
			if($captcha->check($_POST['captcha'])){
				$userArr = array(
					'username' => $_POST['username'],
					'password' => $_POST['password']
				);
				$user_info = $user->where($userArr)->find();
				if($user_info){
					session('user_roleid',$user_info['user_roleid']);
					if($user_info['forbid'] == '1'){
						if(session('user_roleid') == $_POST['user_role']){
							$user->where($userArr)->setField('lasttime',date("Y-m-d H:i:s"));
							$user_info['lasttime'] = date("Y-m-d H:i:s");
							session('userid',$user_info['userid']);
							session('username',$user_info['username']);
							session('password',$user_info['password']);
							session('lasttime',$user_info['lasttime']);
							//修改用户表的登陆状态字段
							$user = D("User");
							$username = session('username');
							$user -> where("username = '$username'") -> setField('online',1);
							$this->redirect('Index/index');
						}else{
							$this->redirect('login',array(),1,'您的身份不合法');
						}											
					}else{
						$this->redirect('login',array(),1,'该用户已经被管理员禁用登录！');
					}				
				}else {
					$this->redirect('login',array(),1,'用户名或密码错误！');
				}
			}else {
				$this->redirect('login',array(),1,'验证码错误！');
			}
				
			
		}

		$this->display();				
	}
	//退出操作
	public function logout(){
		//修改用户表
		$user = D("User");
		$username = session('username');
		$user -> where("username = '$username'") -> setField('online',0);

		session(null);
		$this->redirect('login');
	}
	//注册操作
	public function register(){
		$user = new UserModel();
		if(!empty($_POST)){
			if($_FILES['userimg']['error']===0){
                $cfg = array(
                    'rootPath'      =>  './Public/Upload/', //保存根路径
                    'exts'          =>  array('jpg', 'gif', 'png', 'jpeg'), //允许上传的文件后缀
                ); 
                //设置附件的存储位置
                $up = new Upload($cfg);
                //上传附件
                //如果附件上传成功，就可以通过uploadOne的返回值查看到附件
                //在服务器的存储情况
                $z = $up -> uploadOne($_FILES['userimg']);
                //附件保存到数据库中，保存路径名即可
                $picname = $up->rootPath.$z['savepath'].$z['savename'];
                //$_POST['userimg'] = substr($picname,2);//去除'./'
				$_POST['userimg'] = $picname; 
            }

			$data = $user -> create(); //收集信息、或表单自动验证
			$data['user_roleid'] = 2;
			if($data){
				$user->addUser($data);
				$this->redirect('login',array(),2,'注册成功');
			}else{
				// $this -> assign('errorInfo',$user->getError());
				$this -> display();
				//$this->redirect('register');
			}
		}else{
			$this->display();	
		}		
	}
	//验证码操作
	public function verifyImg(){
		$cfg = array(
			'imageH'    =>  30,               // 验证码图片高度
            'imageW'    =>  95,               // 验证码图片宽度
            'fontSize'  =>  14,              // 验证码字体大小(px)
            'length'    =>  4,               // 验证码位数
            'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取
		);
		//实例化Verify类对象
        $very = new \Think\Verify($cfg);

        $very -> entry();
	}

	//展示用户列表
	public function showlist(){
		$user = D('User');
        //实现数据分页效果
        //① 获得总条数、每页显示条数设置
        $cnt = $user -> count();  //获得总条数 sum() max() avg() min()
        //SELECT COUNT(*) AS tp_count FROM `ar_article` LIMIT 1
        $per = 15;

        //② 实例化分页类对象
        $page_obj = new \Tools\Page($cnt,$per);
		$user_info = $user -> where('user_roleid = 2') -> select();
		 //④ 制作页码列表
        $pagelist = $page_obj -> fpage(array(0,1,2,3,4,5,6,7,8));

        $this -> assign('pagelist',$pagelist);
        $this -> assign('user_info',$user_info);
        $this -> display();
	}

	//禁用用户登录
	public function forbidUser($userid){
		$user = D('User');
		$user -> where("userid = $userid") -> setField('forbid','0');
		$this->redirect('showlist',array(),2,'禁用成功');		
	}
	//解禁用户登录
	public function freeUser($userid){
		$user = D('User');
		$user -> where("userid = $userid") -> setField('forbid','1');
		$this->redirect('showlist',array(),2,'解禁成功');
	}
	//ajax验证用户名
	public function checkNM(){
		$user = D('User');
		$username = $_GET['username'];
		if($username == ''){
			echo "请输入用户名！";
		}
		$z = $user -> where("username = '$username'") -> find();
		if($z){
			echo "该用户名已经被注册！";
		}
	}

	//查看个人信息
	public function userinfo(){
		$user = D('User');
		$userid = session('userid');
		$user_info = $user -> where("userid = '$userid'") -> find();
		// dump($user_info);
		// die;
		$this->assign('user_info',$user_info);
		$this->display();
	}

	//修改个人信息
	public function altuser(){
		$user = D('User');
		$userid = session('userid');
		if(!empty($_POST)){
			//收集表单数据
			$data = $user -> create();
			// 跟新修改后信息到数据库
			$z = $user->where("userid = '$userid'")->save($data);
            if($z){
               $this ->redirect('userinfo', array(), 2, '修改信息成功！');
            }else{
               $this ->redirect('altuser', array(), 2, '修改信息失败！');
            }
		}else{
			$user_info = $user -> where("userid = '$userid'") -> find();		
			$this->assign('user_info',$user_info);
			$this->display();
		}			
	}

	//修改头像
	public function altpic(){
		$user = D('User');
		$userid = session('userid');
		//如果有上传，则删除已有头像				
		if(!empty($_POST)){
			if($_FILES['userimg']['error']===0){
				//删除旧的头像
				$str = $_POST['userimg'];			
				$file = str_replace(SITE_URL,"","$str");
				unlink($file);
				//获取新的头像并保存起来
				$cfg = array(
                    'rootPath'      =>  './Public/Upload/', //保存根路径
                    'exts'          =>  array('jpg', 'gif', 'png', 'jpeg'), //允许上传的文件后缀
                ); 
                //设置附件的存储位置
                $up = new Upload($cfg);
                //上传附件
                //如果附件上传成功，就可以通过uploadOne的返回值查看到附件
                //在服务器的存储情况
                $z = $up -> uploadOne($_FILES['userimg']);
                //附件保存到数据库中，保存路径名即可
                $picname = $up->rootPath.$z['savepath'].$z['savename'];
                //$_POST['userimg'] = substr($picname,2);//去除'./'
				$_POST['userimg'] = $picname;
				 //更新数据库字段
				$z = $user->where("userid = '$userid'")->setField('userimg',$picname);
				 //将新的头像地址返回给前台	
				if($z){
				 	echo SITE_URL.$picname;
				}else{
				 	echo "error";
				}
			}
		}
	}

}