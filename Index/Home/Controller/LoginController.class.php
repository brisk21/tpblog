<?php
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
class LoginController extends Controller {
	public function __construct(){
		parent::__construct();			
		$this ->setting = D('Settings');
		$this -> config = $this -> setting -> showAll();	
	}	
/*注册登录控制器*/
    public function index(){
   		$do = I('get.do');
		if($do == "check"){
			$username = I('post.username');
			$password = I('post.password','','md5');	
			$code = I('post.code'); 			
			$user = D('users');			
			$info = array(
				'username' => $username,
				'password' => $password,
			);
			$users = $user -> where($info) -> find();//查询数据			
			if(!$users){
				return $this -> error('账号或密码错误');
			}else{
				session('uid',$users['id']);//设置session值				
				return $this -> success('登录成功',"/Index.php/Home/Index/index");
			}
		}
		$this -> display();		
    }    
     //注册
    public function regedit(){    	
    	if(IS_POST){
    		$user = D('users');    		
    		$username = I('post.username');
    		$password = I('post.password','','md5');
    		$phone = I('post.phone');
    		$email = I('post.email');
    		$code = I('post.code');
    		$userinfo = array(
    			'username' => $username,
    			'password' => $password,
    			'phone' => $phone,
    			'mail' => $email    			
    			); 
           $rule = array( 
                array('username','require','请输入用户名'),
               // array('username','6,30','用户昵称为6-30字符'),      		 	 		 	 
    		    array('username','','帐号名称已经存在！',0,'unique',1),
                array('email','email',"请输入正确邮箱地址"),
    		    array('repassword','password','确认密码不正确',0,'confirm'), 
    		    array('password','checkPwd','密码格式不正确',0,'function'), 
    		    array('password','6,20','密码长度为6-20',0,'length'),     		    
                array('code','require','验证码必须!')
    		    );    		
    		if(!$user ->validate($rule) -> create()){
    			exit($user -> getError());
    		}else{
    			$user -> add($userinfo);
    			return $this -> success('注册成功','/Index.php/Home/Login/');
    		}
    	}
        $this -> display();
    }    
     //退出（注销）
    public  function logoff(){
    	session('uid',null);
    	return $this -> success('成功退出',"/Index.php/Home/Index/index");
   }
}
