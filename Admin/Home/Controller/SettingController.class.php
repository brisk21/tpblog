<?php
namespace Home\Controller;
class SettingController extends AdminController {
    public function index(){
    	$setting = D('settings');  
    	$this ->assign('setting',$setting -> showAll());  	     
	    $this -> display();	 
    }	
    public function save(){
    	$postinfo = I('post.');
    	var_dump($postinfo);
    	$setting = D('settings');  
    	foreach ($postinfo as $key => $val) {
    		$setting -> where( array( 'key' => $key ) ) -> save( array( 'val' => $val ) );
    	}
    	return $this -> redirect('/Home/Setting/');
    }
}
