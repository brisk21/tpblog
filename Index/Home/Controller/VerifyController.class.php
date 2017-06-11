<?php
namespace Home\Controller;
use Think\Controller;
class VerifyController extends Controller {
	//生成验证码
	public function index(){
		$Verify = new \Think\Verify();
		$Verify->fontSize = 25;//字体大小
		$Verify->length = 4;//长度		
		$Verify->reset = ture;//是否重置
		$Verify->useNoise = false;//是否关闭像素点
		$Verify->entry();//显示
	}
	//检测验证码
	function check_verify($code, $id = ''){ 
		$config = array(
                'reset' => ture, // 验证成功后是否重置，—————这里才是有效的。
            );
            $verify = new \Think\Verify($config);
            if($verify->check($code, $id)){
                $data=1;
                $this->ajaxReturn($data);
            }else{
                $data=2;
                $this->ajaxReturn($data); 
            } 
		$verify = new \Think\Verify();
		 return $verify->check($code, $id);
		}
}