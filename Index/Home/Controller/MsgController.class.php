<?php
namespace Home\Controller;
use Think\Controller;
class MsgController extends Controller {
	public function __construct(){
		parent::__construct();			
		$this ->setting = D('Settings');
		$this -> config = $this -> setting -> showAll();
	}
/*留言板控制器*/
    public function index(){
    	$msg = D('lyb');
    	$setting = D('settings');
    	$configs = $setting -> showAll();
    	$count = $msg->where('chose=1')->where('state=1')->count();
    	$Page = new \Think\Page($count,$configs['index_count']);    	
    	$msgs = $msg->where('chose=1')->where('state=1')->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
    	$Page->setConfig('prev','上一页');
    	$Page->setConfig('first','首页');
    	$Page->setConfig('next','下一页');    	

    	$show = $Page->show();
    	$this->assign('list',$list);
    	$this->assign('page',$show);
    	
    	$this -> assign('msgs',$msgs);
		$this -> display();
    }    
    //保存控制器
    public function save(){
    	$msg = D('lyb');
    	if(IS_POST){
    		$user =  I('post.user');
    		$content =  I('post.content');
    		$email =  I('post.email');
    		$chose = I('post.chose');
    		$ip = get_client_ip();
    		$data = array(
    				'user' => $user,    				
    				'content' => $content,
    				'email' => $email,
    				'chose' => $chose,
    				'intime' => time(),
    				'ipadress' => $ip    				
    			);
    		$rules = array( 
    			array('content','require',"请输入留言内容"), 
    			array('user','require',"请输入留言标题"), 
    			array('verify','require',"验证码填写不正确")    			
    			 );
    		if (!$msg->validate($rules)->create()){ 
    			exit($msg->getError());
    		}else{ 
    			$result = $msg  ->add($data);
	    		if($result){
	    			return $this ->success('留言成功,管理员审核后通过','/Home/Msg',0);
	    		}else{
	    			return $this -> error('留言失败，请稍后再试','/Home/Msg/',0);
	    		}
    		}
    	}
    	$this -> display();
    }
}