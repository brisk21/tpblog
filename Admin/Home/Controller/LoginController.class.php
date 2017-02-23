<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{
	public function index(){	
		$do = I('get.do');
		if($do == "check"){
			$username = I('post.username');
			$password = I('post.password','','md5');				
			$admin = D('adminuser');//获取数据库对象
			//var_dump($admin -> find());
			$info = array(
				'username' => $username,
				'password' => $password,
			);
			$users = $admin -> where($info) -> find();//查询数据			
			if(!$users){
				return $this -> error('账号或密码错误');
			}else{
				session('aid',$users['id']);//设置session值				
				return $this -> success('登录成功',"/Admin.php/Home/Index/index");
			}
		}
		$this -> display();		
	}
	public function logout(){
		session('aid',null);
		return $this -> success('退出成功',"/Admin.php/Home/Login/index",5);
	}
}
