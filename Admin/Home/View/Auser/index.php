<!DOCTYPE HTML>
<html lang="zh-CN">
	<?php include(THEME_PATH.'Common/head.php');?>
	<style>
		.pagination a,.pagination span{
			padding: 5px;
			margin: 5px;
			font-size: 14px;
			background: rgba(7, 255, 139, 0.31);
		}
		.pagination span{
			background: rgba(232, 146, 59, 0.57);
			color: red;
		}

	</style>
<body>
	<div class="container-fluid">
		<div class="col-md-12">
			<?php include(THEME_PATH.'Common/nav.php');?>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
		    <div class="col-md-8">
				<div class="page-header">
					<h1>管理员管理 
						<small style='float:right;margin-right:30px;'>		
							<a href="<?php echo U('/Home/Auser/add') ;?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> 添加</a>
						</small>
					</h1>
				</div>
				<div class="table-responsive ">
					<table class="table">
						<thead>
							<tr>
								<th>id</th>
								<th>username</th>
								<th>
									管理功能
								</th>
							</tr>
						</thead>
						<tbody>						
							 <?php foreach($data["username"] as $item): ?>
							<tr>
								<td><?php echo $item['id'];?></td>
								<td><?php echo $item['username'];?></td>
								<td>
								
								<a href="<?php echo U('/Home/Auser/edit');?>?id=<?php echo $item['id'];?>" class="btn btn-primary btn-xs">编辑</a>
								<?php if( $user['id'] != $item['id']): ?>
								<a href="<?php echo U('/Home/Auser/delete');?>?id=<?php echo $item['id'];?>" class="btn btn-primary btn-xs">删除</a>
								<?php endif;?>
								</td>
							</tr>
							<?php 	endforeach ; ?>
						</tbody>
					</table>
				</div>
				<div class="col-md-2"></div>
		</div>
		<div class="col-md-4 col-md-offset-4">
			<nav class="pull-right">
				<ul class="pagination">
						<?php echo $page;?>	
				</ul>
			</nav>
		</div>
		</div>
	</div>
</body>
</html>