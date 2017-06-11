<!DOCTYPE HTML>
<html>
	<?php include(THEME_PATH.'Common/head.php');?>
<body>
	<div class="container-fluid">
		<div class="col-md-4"></div>
		<div class="col-md-4 col-xs-12">
		  <div class="panel panel-success">
			  <div class="panel-heading">管理员登陆</div> 		
			  <div class="panel-body">			
				<form action="<?php echo U('Login/index');?>?do=check" method="post">
					<div class="form-group">
						<label for="exampleInputEmail1">用户名：</label>
						<input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="请输入用户名">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">密码：</label>
						<input type="password" class="form-control" name='password' id="exampleInputPassword1" placeholder="请输入密码">
					</div>			  
						<button type="submit" class="btn btn-default">登陆</button>
				</form>
			  </div>
			  <div class="panel-footer">
			  	<span>&copy;版权归韦炳生所有，盗用必究</span>
			  </div>
		 </div>			
		</div>
		<div class="col-md-4"></div>
		
	</div>
</body>
</html>