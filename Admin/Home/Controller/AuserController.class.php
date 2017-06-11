<?php
namespace Home\Controller;
use Think\Controller;
class AuserController extends AdminController {     
    //用户列表
    public function index(){
        $admin = D('adminuser');//实例化数据表
        $setting = D('settings');//实例化配置表
        $configs = $setting -> showAll();//获取配置的全部数据
        $count = $admin->count();// 查询满足要求的总记录数
        $page = new \Think\Page($count,$configs['admin_count']);// 实例化分页类 传入总记录数和每页显示的记录数
        $users = $admin ->order('id') -> limit($page->firstRow.','.$page->listRows)-> select();  //查询数据表    
 
        $data = array();//设置一个空数据存放数据
        $data['username'] = $users;
        $this -> assign('page',$page -> show());// 赋值分页显示输出
        $this -> assign('data',$data);
        $this -> display();  
    }    
     //用户编辑
    public function edit(){
    	$id = I('get.id');
    	$admin = D('adminuser');
    	$user = array(
    		'id' => 0,
    		'username' => '',
    		'password' => '',
    		);
    	if ($id > 0) {
    		$user = $admin -> where( array('id' => $id )) ->find();
    	}    	
    	$this -> assign('user',$user);
    	$this -> display();
    }
    //删除功能
    public function delete(){
    	$id = I('get.id');
    	D('adminuser') -> where( array( 'id'=>$id ) ) -> delete();
    	return $this -> redirect("/Home/Auser/index");
    }
    //添加用户
    public function add(){
        $admin = D('adminuser');
        if(IS_POST){
            $username = I('post.username');
            $password = I('post.password','','md5');
            //定义验证规则
            $rule = array(
                    array('username','require','用户名不能为空'),
                    array('password','require','密码不能为空'),   
                );
            $is = $admin -> validate($rule) ->create();//验证规则
            if(!$is){
                return $this -> error($admin -> getError(),"/Admin.php/Home/Auser/add");//错误后跳转
            }
            //防止用户重名
            $where = array();
            $where['username'] = $username;
            $result = $admin ->where($where) -> find();            
            if($result == NULL){
                $insert = array(
                    'username' => $username,
                    'password' => $password,
                    'phone' => $phone
                    );
                $rid = $admin ->add($insert);
                
                if($rid >1 ) {
                    return $this->success('新增成功','/Admin.php/Home/Auser/index');
                }else{
                    return $this->error('新增失败');//判断操作结果
                }                  
            }                   
            return $this->error('用户已存在')  ;
        }
        $this ->display();        
    }
    //更新数据
    public function save(){
    	$admin = D('adminuser');
    	if(IS_POST){
    		$username = I('post.username');
	    	$password = I('post.password','','md5');  	
            $id = I('get.id');                		
    		$update = array(
    		'username' => $username,
    		'password' => $password,	    		
    		);	    	
		    $sd =$admin->where(array('id'=>$id))->save($update);	
               			   	
            if($sd < 1){
                return $this->error('数据未修改','/Admin.php/Home/Auser/index');
            }else{
                return $this->success('修改成功','/Admin.php/Home/Auser/index');//判断操作结果
            }	    			
	    }       
    }
}
