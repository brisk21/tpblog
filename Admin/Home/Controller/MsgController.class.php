<?php
namespace Home\Controller;
use Think\Controller;
class MsgController extends AdminController {
	public function index(){ 
		$msg = D('lyb');
		$setting = D('settings');
		$check = I('get.check');
		$configs = $setting -> showAll();
		$conut = $msg ->count();
		$page = new \Think\Page($conut,$configs['admin_count']);
		//只显示未审核的留言
		if($check=='check'){		
			$conut = $msg->where("state=0") ->count();	
			$msgs = $msg-> where("state=0") ->order('id desc')-> limit($page->firstRow.','.$page->listRows)->select();
		}else{
			
			$msgs = $msg-> order('id desc') -> limit($page->firstRow.','.$page->listRows)->select();
		}	

		$this ->assign('show',$page -> show());
		$this ->assign('msgs',$msgs);
		$this ->display();
	}
	//审核通过
	public function pass(){
		$id = I('get.id');
		D('lyb')->where("id=$id")->save( array('state'=>1) );
		return $this -> redirect("/Home/Msg/index");
	}
	//留言回复
	public function reply(){
		$msg = D('lyb');
		$id = I('get.id');		
		if(IS_POST){
			$reply = I('post.content');
			var_dump($reply);
			$result = $msg->where("id = $id ")->save( array("reply" => $reply));
			if($result){
				return $this ->redirect("/Home/Msg");
			}else{
				return $this ->error("回复失败");
			}
		}else{
			$msgs= $msg->where("id=$id")->find();
		}


		$this ->assign('msg',$msgs);
		$this ->display();
	}
	//删除留言
	public function delete(){
		$id = I('get.id');
    	D('lyb') -> where( array( 'id'=>$id ) ) -> delete();
    	return $this -> redirect("/Home/Msg/index");
	}

}