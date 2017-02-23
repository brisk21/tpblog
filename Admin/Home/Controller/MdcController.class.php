<?php
namespace Home\Controller;
use Think\Controller;
class MdcController extends AdminController {
    public function index(){   
    	$mdc = D('medicine');//实例化数据表
        $setting = D('settings');//实例化配置表
        $configs = $setting -> showAll();//获取配置的全部数据
    	$count = $mdc->count();// 查询满足要求的总记录数
    	$page = new \Think\Page($count,$configs['admin_count']);// 实例化分页类 传入总记录数和每页显示的记录数
    	$mdcs = $mdc ->order('id desc') -> limit($page->firstRow.','.$page->listRows)-> select();  //查询数据表  	
 
    	$this->assign('show',$page -> show());// 赋值分页显示输出
    	$this -> assign('mdcs',$mdcs);
        $this -> display();	 
    }	
    //新增日志
    public  function save(){
    	$mdc = D('medicine');
    	if(IS_POST){
    		$title = I('post.title');
    		$author = I('post.author');
    		$keywords = I('post.keywords');
			$content = I('post.content');
			$rule = array(
				array('title','require','标题不能为空'),
				array('author','require','作者不能为空'),
				array('keywords','require','请输入至少一个关键词'),
				array('content','require','内容不能为空')
			);
            //
           
            //
			if(!$mdc -> validate($rule) -> create()){
				return $this -> error($mdc -> getError());
			}
			$insert = array(
				'title' => $title,
				'author' => $author,
				'keywords' => $keywords,
				'content' => $content,
							
			);
			//获取网址传的ID，判断是修改还是新添加
			$id = I('get.id');			
			if($id > 0 ){
				$insert['update_time'] = time();
				$mdc -> where( array('id' => $id )) -> save($insert);
			}else{
				$insert['create_time'] = time();
				$mdc -> add($insert);
			}
			return $this -> success('操作成功','/Admin.php/Home/Mdc/index');	
    	}
    }
    //修改日志
    public function add(){
    	$id = I('get.id');
    	$medicine = D('medicine');
    	$mdc = array(
    		'id' => 0,
    		'title' => '',
    		'keywords' => '',
    		'author' => '',
    		'content' => ''
    		);    	
    	if( $id > 0 ){
    		$mdc = $medicine -> where( array( 'id' => $id) ) -> find();
    	}

    	$this -> assign('mdc',$mdc);
    	$this -> display();
    	
    }

    //删除日志    
    public function delete(){
    	$id = I('get.id');
    	D('medicine') -> where( array( 'id'=>$id ) ) -> delete();
    	return $this -> redirect("/Home/Mdc/index");
    }
}
