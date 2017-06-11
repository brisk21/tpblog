<?php
namespace Home\Controller;
use Think\Controller;
class AdminController extends Controller{
	function __construct(){
		parent::__construct();		
		//判读session中aid是否存在
		$this -> aid = session('aid');		
		$this -> user = D('adminuser') -> where(array('aid' => $this ->aid)) -> find();
		//判读aid是否有效
		if($this ->aid < 1 || !$this ->user){
	  		redirect('/Admin.php/Home/Login/index');
	    }
	}
}


