<!DOCTYPE HTML>
<html lang="zh-CN">
	<?php include(THEME_PATH.'Common/head.php');?>
<body>
	<div class="container-fluid">
		<div class="col-md-12">
			<?php include(THEME_PATH.'Common/nav.php');?>
		</div>
		<div class="col-md-12">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="page-header">
					<h1>基本设置 
						<small style='margin-right:30px;font-size:18px;'>		
							设置网站的功能开关
						</small>
					</h1>
				</div>							
				<div class="col-md-10">
					<div class="panel-body">
						<form action="<?php echo U('/Home/Setting/save');?>" method="post">
							<?php foreach($setting as $key => $val):?>
							<div class="form-group">
								<label for="title"><?php echo $key;?></label>						
								<input type="text" class="form-control" name="<?php echo $key;?>"  value="<?php echo $val;?>" >
								<p style="color:#6699cc;margin-top:5px;"> </p>
							</div>
							<?php endforeach;?>
							<button type="submit" class="btn btn-default">提交</button>	
						</form>						
					</div>
				</div>			
			 <div class="col-md-2"></div>
			</div>
		<div class="col-md-3"></div>

			
			<div class="col-md-3"></div>
		</div>
	</div>
</body>
</html>