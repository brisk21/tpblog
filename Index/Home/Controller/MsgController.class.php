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
    	
		$this -> display();
    }    
}
