<?php
namespace Home\Controller;
use Think\Controller;
class BlogController extends AdminController {
    public function index(){   
    	$blog = D('blogs');//实例化数据表
        $setting = D('settings');//实例化配置表
        $configs = $setting -> showAll();//获取配置的全部数据
    	$count = $blog->count();// 查询满足要求的总记录数
    	$page = new \Think\Page($count,$configs['admin_count']);// 实例化分页类 传入总记录数和每页显示的记录数
    	$blogs = $blog ->order('id desc') -> limit($page->firstRow.','.$page->listRows)-> select();  //查询数据表  	
 
    	$this->assign('show',$page -> show());// 赋值分页显示输出
    	$this -> assign('blogs',$blogs);
        $this -> display();	 
    }	
    //新增日志
    public  function save(){
    	$blog = D('blogs');
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
            $upload = new \Think\Upload();// 实例化上传类 
            $upload->maxSize = 3145728 ;// 设置附件上传大小 
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型 
            $upload->rootPath = './Uploads/'; // 设置附件上传根目录 
            $upload->savePath = './Uploads/Files/'; // 设置附件上传（子）目录 // 上传文件 
            $info = $upload->upload(); 
            if(!$info) {// 上传错误提示错误信息 
                $this->error($upload->getError()); 
            }else{
            // 上传成功 
                $this->success('上传成功！haha');
             }
            //
			if(!$blog -> validate($rule) -> create()){
				return $this -> error($blog -> getError());
			}
			$insert = array(
				'title' => $title,
				'author' => $author,
				'keywords' => $keywords,
				'content' => $content,
				'intime' => time()				
			);
			//获取网址传的ID，判断是修改还是新添加
			$id = I('get.id');			
			if($id > 0 ){
				$insert['uptime'] = time();
				$blog -> where( array('id' => $id )) -> save($insert);
			}else{
				$insert['intime'] = time();
				$blog -> add($insert);
			}
			return $this -> success('操作成功','/Admin.php/Home/Blog/index');	
    	}
    }
    //修改日志
    public function add(){
    	$id = I('get.id');
    	$blogs = D('blogs');
    	$blog = array(
    		'id' => 0,
    		'title' => '',
    		'keywords' => '',
    		'author' => '',
    		'content' => ''
    		);    	
    	if( $id > 0 ){
    		$blog = $blogs -> where( array( 'id' => $id) ) -> find();
    	}

    	$this -> assign('blog',$blog);
    	$this -> display();
    	
    }

    //删除日志    
    public function delete(){
    	$id = I('get.id');
    	D('blogs') -> where( array( 'id'=>$id ) ) -> delete();
    	return $this -> redirect("/Home/Blog/index");
    }
}
