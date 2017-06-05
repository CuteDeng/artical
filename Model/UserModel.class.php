<?php
namespace Model;
use Think\Model;
class UserModel extends Model{
	//设置验证规则
    // 是否批处理验证
	//protected $patchValidate    =   true;
    // 自动验证定义
    // protected $_validate = array(
    //     //为表单域定义具体验证规则
    //     //① 验证用户名，非空
    //     //array(字段名称 表单域name属性值，验证规则，错误提示[，验证条件，附加规则，验证时间])
    //     array('username','require','用户名不能为空'),
    //     array('username','','用户名已经被占用',0,'unique'),
    //     //② 密码，非空
    //     array('password','require','密码不能为空'),
    // );

	public function addUser($data){
		$data['registertime'] = date("Y-m-d H:i:s");
        $data['lasttime'] = date("Y-m-d H:i:s");
		$data['forbid'] = 1;
        // dump($data);
        // die;
		return $this->data($data)->add();
	}
}