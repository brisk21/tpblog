<!DOCTYPE HTML>
<html lang="zh-CN">
	<?php include(THEME_PATH.'Common/head.php');?>
<body>
	<div class="container-fluid">
		<div class="col-md-12">
			<?php include(THEME_PATH.'Common/nav.php');?>

		</div>
		<div class="row">
		<div class="col-md-12">
			<div class="col-md-2"></div>
			<div class="col-md-10">
				<div class="page-header">
					<h1>管理员管理 
						<small style='float:right;margin-right:30px;'>		
							<a href="<?php echo U('/Home/Auser/auser') ;?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> 返回管理</a>
						</small>
					</h1>
				</div>
			</div>	
		</div>	
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-2"></div>
				<div class="col-md-8 col-xs-12">
			    <div class="panel panel-default">
				  <div class="panel-heading">添加用户</div> 		
				  <div class="panel-body">			
					<form action="<?php echo U('/Home/Auser/add');?>" method="post">
						<div class="form-group">
							<label for="exampleInputEmail1">用户名：</label>
							<input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="请输入用户名">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">密码：</label>
							<input type="password" class="form-control" name='password' id="exampleInputPassword1" placeholder="请输入密码">
						</div>			  
							<button type="submit" class="btn btn-default">提交</button>
					</form>
				  </div>				  
			    </div>			
			</div>
			</div>
		</div>	
	</div>
</body>
</html>