<?php
namespace Model;
use Think\Model;

class ArticleModel extends Model{
	//设置验证规则
    // 是否批处理验证
	protected $patchValidate    =   true;
    // 自动验证定义
    protected $_validate = array(
        //为表单域定义具体验证规则
        //array(字段名称 表单域name属性值，验证规则，错误提示[，验证条件，附加规则，验证时间])
        array('article_name','require','标题不能为空'),
        array('article_author','require','作者不能为空'),
        array('article_text','require','文章内容不能为空'),
    );


    public function addArticle($data){
    	
		$data['article_time'] = date("Y-m-d H:i:s");
		$data['userid'] = session('userid');
		return $this->data($data)->add();
	}
}