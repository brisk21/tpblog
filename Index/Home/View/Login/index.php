
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>用户登录-广西科技大学计算机协会</title>
		<link rel="stylesheet" type="text/css" href="/Public/bootstrap/css/bootstrap.min.css" />	
		<script type="text/javascript" src="/Public/jquery.min.js"></script>
		<script type="text/javascript" src="/Public/bootstrap/js/bootstrap.min.js"></script>
		<style type="text/css">
			body{
				margin-top:15px; 
			}
		
		</style>		
	</head>
<body>
	<div class="container-fluid">
		<div class="col-md-4"></div>
		<div class="col-md-4 col-xs-12">
		  <div class="panel panel-success">
			  <div class="panel-heading">用户登陆</div> 		
			  <div class="panel-body">			
				<form action="<?php echo U('/Home/Login/index');?>?do=check" method="post">
					<div class="form-group">
						<label for="exampleInputEmail1">用户名：</label>
						<input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="请输入用户名">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">密码：</label>
						<input type="password" class="form-control" name='password' id="exampleInputPassword1" placeholder="请输入密码">
					</div>	
					<div class="form-group">
						<label for="exampleInputPassword1">验证码</label>
						<input type="text" class="form-control" name='code' id="code" placeholder="请输入验证码">
						<img src="<?php echo U('/Home/Verify/');?>" alt="刷新",title="刷新" id="Verify" name="code">	
					</div>		  
						<button type="submit" class="btn btn-info">登陆</button>
						<a  class="btn btn-default" href="<?php echo U('/Home/Login/regedit');?>">注册</a>
				</form>
			  </div>
			  <div class="panel-footer">
			  	<span>版权归广西科技大学计算机协会所有，盗用必究</span>
			  </div>
		 </div>			
		</div>
		<div class="col-md-4"></div>
	</div>
	<script type="text/javascript">		
	   $("#Verify").click(function() {
		   var verifyURL = "<?php echo U('/Home/Verify/');?>";
		   var time = new Date().getTime();
		   $("#Verify").attr({
		      "src" : verifyURL 
		   });
		});	
		$("#code").blur(function() {
		    $.post("<?php echo U('/Home/Verify/check_verify');?>", {
		        code : $("#code").val()
		        }, function(data) {
		        if (data !== 1) {
		            //验证码输入不正确	
		            alert("验证码错误。");	            
		        } 
		    });
		});	
	</script>
</body>
</html>