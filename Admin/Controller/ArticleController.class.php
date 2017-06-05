<?php
//后台Index控制器
namespace Admin\Controller;
//use Think\Controller;
use Admin\Controller\BaseController;
use Model\ArticleModel;
use Think\Model;
// use Tools\AdminController;
//Controller父类：ThinkPHP/Library/Think/Controller.class.php
class ArticleController extends BaseController{
	//展示文章列表
	public function showlist(){
		$article = D('Article');
        //实现数据分页效果
        //① 获得总条数、每页显示条数设置
        $cnt = $article -> count();  //获得总条数 sum() max() avg() min()
        //SELECT COUNT(*) AS tp_count FROM `ar_article` LIMIT 1
        $per = 15;

        //② 实例化分页类对象
        $page_obj = new \Tools\Page($cnt,$per);

        //③ 制作一条sql语句，获得每页显示的数据
        //$page_obj->limit: 分页工具类会根据当前页码把"limit 偏移量，长度"" 给拼装好
        //并赋值给limit成员属性
        //$sql = "select * from ar_article order by article_id ".$page_obj->limit;
       	$sql = "select article_id,article_title,article_author,article_type,article_time,username,ar_user.userid
       	        from ar_article join ar_user on ar_article.userid = ar_user.userid 
       	        where article_authority = '公有' order by article_id ".$page_obj->limit;
        $info = $article -> query($sql);
        // dump($info);
        // die;
        //④ 制作页码列表
        $pagelist = $page_obj -> fpage(array(0,1,2,3,4,5,6,7,8));

        $this -> assign('pagelist',$pagelist);
        $this -> assign('info',$info);
        $this -> display();
	}

	//添加文章
	public function addArticle(){
        $article = new ArticleModel();
        if(!empty($_POST)){
            $data = $article->create();
           if($data){
                $article->addArticle($_POST);
                $this->redirect('showlist',array(),2,'发布成功');
            }else{
               $this -> assign('errorInfo',$article->getError());
               $this -> display();
            }
            //dump($article);
            //die;
        }else{
            $this->display();
        }
		
	}


    //展示我的文章列表
    public function myArticle(){
        $article = D('Article');
        //实现数据分页效果
        //① 获得总条数、每页显示条数设置
        $userid = session('userid');
        $cnt = $article -> where("userid = $userid") -> count();  //获得总条数 sum() max() avg() min()
        //SELECT COUNT(*) AS tp_count FROM `ar_article` LIMIT 1
        $per = 15;

        //② 实例化分页类对象
        $page_obj = new \Tools\Page($cnt,$per);

        //③ 制作一条sql语句，获得每页显示的数据
        //$page_obj->limit: 分页工具类会根据当前页码把"limit 偏移量，长度"" 给拼装好
        //并赋值给limit成员属性
        //$sql = "select * from ar_article order by article_id ".$page_obj->limit;
        $sql = "select article_id,article_title,article_author,article_type,
                article_time,article_authority
                from ar_article where userid = $userid
                order by article_id ".$page_obj->limit;
        $info = $article -> query($sql);
        //dump($info);
        //die;
        //④ 制作页码列表
        $pagelist = $page_obj -> fpage(array(0,1,2,3,4,5,6,7,8));

        $this -> assign('pagelist',$pagelist);
        $this -> assign('info',$info);
        $this -> display();
    }

    //修改我的文章
    public function updArticle($article_id){
        $article = D('Article');
        //两个逻辑：展示、收集
        if(!empty($_POST)){
            $data = $article -> create();
            // dump($data);
            // die;
            $z = $article->where("article_id=$article_id")->save($data);
            if($z){
               $this ->redirect('myArticle', array(), 2, '修改文章成功！');
            }else{
               $this ->redirect('updArticle', array('article_id'=>$article_id), 2, '修改文章失败！');
            }
        }else{
            //根据$article_id获得被修改商品的信息
            //数据查询find()方法，通过一维数组返回一条记录信息
            $info = $article->find($article_id);
            // dump($info);
            // die;
            $this -> assign('info',$info);
            $this -> display();
        }
    }

    //删除我的文章
    public function dltArticle($article_id){
        $article = D('Article');
        $z = $article->where("article_id=$article_id")->delete();  
        if($z){
            if($z){
               $this ->redirect('myArticle', array(), 2, '删除文章成功！');
            }else{
               $this ->redirect('myArticle', array(), 2, '删除文章失败！');
           }
        }
    }

    //展示 我的文章内容
    public function showArticle($article_id){
        $article = D('Article');
        $info = $article->find($article_id);
        $info['article_text'] = html_entity_decode($info['article_text']);
        // dump($info['article_text']);
        // die;
        $this -> assign('info',$info);
         //dump($info);
         //die;
        $this->display();
    }

    //展示他人文章列表
    public function showUserArticle($userid){
        
        $article = D('Article');
        //实现数据分页效果
        //① 获得总条数、每页显示条数设置
        
        $cnt = $article -> where("userid = $userid") -> count();  //获得总条数 sum() max() avg() min()
        //SELECT COUNT(*) AS tp_count FROM `ar_article` LIMIT 1
        //echo "$cnt";
        //die;
        $per = 15;

        //② 实例化分页类对象
        $page_obj = new \Tools\Page($cnt,$per);

        $sql = "select article_id,article_title,article_author,article_type,article_time,username
                from ar_article join ar_user on ar_article.userid = ar_user.userid 
                where ar_user.userid = $userid order by article_id ".$page_obj->limit;
        $info = $article -> query($sql); 
        $pagelist = $page_obj -> fpage(array(0,1,2,3,4,5,6,7,8));
        $this -> assign('pagelist',$pagelist);
        //$info = $article->where("userid=$userid")->select();
        $this -> assign('info',$info);
         // dump($info);
         // die;
        $this->display();
    }

    //查询文章
    public function searchArticle(){
        $article = D('Article');
        $condition['article_title'] = array("like", "%".$_POST['articleInfo']."%");
        $condition['article_author'] = array("like", "%".$_POST['articleInfo']."%");
        $condition['article_type'] = array("like", "%".$_POST['articleInfo']."%");
        $condition['_logic'] = 'OR';    
        $articleInfo = $article -> where($condition) -> select();
        $this -> assign('articleInfo',$articleInfo);
        $this -> display();

    }
    //查询个人文章
    public function searchMyArticle(){
       $model = new Model();
       $userid = session("userid");
       $post = $_POST['articleInfo'];
       // dump($userid);
       // die;
       $articleInfo = $model->table('ar_article a')
       ->field('a.*')
       ->where("(a.article_title like '%".$post."%'
           or a.article_author like '%".$post."%')
           and userid =  $userid")
       ->select();    
       // $article = D('Article');
       // $condition['article_title'] = array("like", "%".$_POST['articleInfo']."%");
       // $condition['article_author'] = array("like", "%".$_POST['articleInfo']."%");
       // $condition['article_type'] = array("like", "%".$_POST['articleInfo']."%");
       // $condition['_logic'] = 'OR'; 
       // $condition['userid'] = session("userid");
       // $condition['_logic'] = 'AND'; 
       // $articleInfo = $article -> where($condition) -> select();
       $this -> assign('articleInfo',$articleInfo);
       $this -> display();
    }


}