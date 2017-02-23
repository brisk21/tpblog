<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function __construct(){
		parent::__construct();	
        $this -> uid = session('uid');	
		$this -> setting = D('Settings');
		$this -> config = $this -> setting -> showAll();       
	}
    public function index(){
        $user = D('users');
    	$blog = D('blogs');    	
        $setting = D('settings');
        $configs = $setting -> showAll();        
        $count = $blog -> count();
        $Pages = new \Think\Page($count,$configs['index_count']);
        $blogs = $blog -> order('id desc')->limit($Pages->firstRow.','.$Pages->listRows)->select();
        $id = session(uid);
        $users = $user ->where(array('id'=>$id)) -> select();

        $page = $Pages -> show();
        $this -> assign('user',$users);
        $this -> assign('page',$page );       
        $this -> assign('blogs',$blogs);  
		$this -> assign('config',$this -> config);
		$this -> display();
    }
    //阅读详细文章页面
    public function read(){
    	$id = I('get.id');
    	$blogs = D('blogs');
		$blogs ->where(array("id = $id")) ->setInc('saw');//浏览量+1
    	$blog = $blogs ->where(array('id' => $id ))->find();    	
    	$this -> assign('blog',$blog);
    	$this -> assign('config',$this -> config);
    	$this -> display();
    }
    //搜索功能
    public function search(){
        $blog = D('blogs');
        $search_words = I('post.search_words');
        $data = array();
        $data['title'] = array(“like”, “%”.$search_words);        
        //$blog -> where($data) ->select;
        
      //  var_dump($blog -> where($data) ->find());
        $this -> display();
    }
   
}
