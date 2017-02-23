
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>用户注册-广西科技大学计算机协会</title>
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
			  <div class="panel-heading">用户注册</div> 		
			  <div class="panel-body">			
				<form action="<?php echo U('/Home/Login/regedit');?>" method="post">
					<div class="form-group">
						<label for="exampleInputEmail1">*	用户名(后期不可修改）：</label>
						<input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="请输入用户名">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">*	邮箱：</label>
						<input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="请输入用邮箱地址">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">手机：</label>
						<input type="text" class="form-control" name="phone" id="exampleInputEmail1" placeholder="请输入手机号码（非必须）">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">*	密码：</label>
						<input type="password" class="form-control" name='password' id="exampleInputPassword1" placeholder="请输入密码">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">*	确认密码：</label>
						<input type="password" class="form-control" name='repassword' id="exampleInputPassword1" placeholder="请再次输入密码">
					</div>		
					<div class="form-group">
						<label for="exampleInputPassword1">*	验证码</label>
						<input type="text" class="form-control" name='code' id="code" placeholder="请输入验证码">
					</div>		  
						<button type="submit" class="btn btn-info">注册</button>
						<img src="<?php echo U('/Home/Verify/');?>" alt="刷新",title="刷新" id="Verify" name="code">					
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