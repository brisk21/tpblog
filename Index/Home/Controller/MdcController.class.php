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
		$mdc = D('medicine');
		$setting = D('settings');
		$configs = $setting -> showAll();
		$count = $mdc -> count();
		$Pages = new \Think\Page($count,$configs['index_count']);
		$mdcs = $mdc ->order('id desc')->limit($Pages->firstRow.','.$Pages->listRows)->select();
		$lists = $mdc ->order("id desc")->limit(0,30)->select();
		$page = $Pages -> show();
		$this ->assign('page',$page);
		$this ->assign('list',$lists);
		$this ->assign('mdcs',$mdcs);
		$this ->assign('config',$this ->config);
		$this ->display();
	}
	public function read(){
		$mdc = D('medicine');
		$id = I('get.id');    	
		$mdc ->where(array('id' => $id ))->setInc('saw');   
    	$mdcs = $mdc ->where(array('id' => $id ))->find(); 
    	$lists = $mdc ->order("id desc")->limit(0,30)->select();
		$this ->assign('list',$lists);  	
    	$this -> assign('mdc',$mdcs);
    	$this -> assign('config',$this -> config);
		$this ->display();
	}
}