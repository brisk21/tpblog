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

        //分组labels(如果有labels就按分组显示，没有就显示全部)
        $labels = I('get.labels');//获取分组标签
        if( $labels !== "" ){
            $count = $blog ->where( array('labels'=>$labels))-> count();           
        }else{
            $count = $blog -> count();
        }        
        $Pages = new \Think\Page($count,$configs['index_count']);
        $lists = $blog -> order('id desc')->limit(0,10) ->select();//最近文章列表
		if ($labels !== "") {
            $blogs = $blog ->where(array('labels'=>$labels))-> order('id desc')->limit($Pages->firstRow.','.$Pages->listRows)->select();
        } else {
            $blogs = $blog -> order('id desc')->limit($Pages->firstRow.','.$Pages->listRows)->select();
        }
        //用于徽章显示
       // $group = array('gmx','vmd','css','php','thinkphp','javascript','html','others','linux','jquery');
       /* foreach ($group as $lab) {
            echo $lab;
        }
        $labels_count = $blog -> count();
        */
        $id = session(uid);
        $users = $user ->where(array('id'=>$id)) -> select();
        
  
        
        $page = $Pages -> show();
		$this -> assign('list',$lists);
        $this -> assign('user',$users);
        $this -> assign('page',$page );       
        $this -> assign('blogs',$blogs);
        //$this -> assign('lab_num',$labels_count) ; 
		$this -> assign('config',$this -> config);
		$this -> display();
    }
    //阅读详细文章页面
    public function read(){
    	$id = I('get.id');
    	$blogs = D('blogs');
		$blogs ->where(array("id = $id")) ->setInc('saw');//浏览量+1
    	$blog = $blogs ->where(array('id' => $id ))->find();    	
		$lists = $blogs -> order('id desc')->limit(0,10) ->select();
		$this -> assign('list',$lists);
    	$this -> assign('blog',$blog);
    	$this -> assign('config',$this -> config);
    	$this -> display();
    }
    //搜索功能
    public function search(){
        $blog = D('blogs');
		$setting = D('settings');
        $configs = $setting -> showAll();
        $search_words = I('get.search_words');//获取搜索关键词
        $data = array();
        $data['title'] = array("like","%".$search_words."%"); //进行搜索查询  
		$count = $blog->where($data) -> count();//统计查询结果总数
		$Pages = new \Think\Page($count,$configs['index_count']);//实例化分页类			
		$lists = $blog -> order('id desc')->limit(0,10) ->select();//最近文章用
		$result = $blog ->where($data)-> order('id desc')->limit($Pages->firstRow.','.$Pages->listRows)->select();
		$page = $Pages -> show();		
		$this -> assign('list',$lists);		
        $this -> assign('blogs',$result);	
		$this -> assign('page',$page );
		$this -> assign('config',$this -> config);
        $this -> display();
    }
   
}
