<?php
//医学相关控制器medicine
namespace Home\Controller;
use Think\Controller;
class MdcController extends Controller {
	public function __construct(){
		parent::__construct();	
        $this -> uid = session('uid');	
		$this -> setting = D('Settings');
		$this -> config = $this -> setting -> showAll();       
	}
	public function index(){
		$mdc = D('medicine');//实例化数据表
		$mdcs = $mdc ->order('id desc')->select();
		$this ->assign('mdcs',$mdcs);
		$this ->display();
	}
	public function read(){
		$mdc = D('medicine');
		$id = I('get.id');    	
		$mdc ->where(array('id' => $id ))->setInc('saw');   
    	$mdcs = $mdc ->where(array('id' => $id ))->find(); 
    	  	
    	$this -> assign('mdc',$mdcs);
    	$this -> assign('config',$this -> config);
		$this ->display();
	}
}