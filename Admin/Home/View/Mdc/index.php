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
		<div class="col-md-12">
				<div class="page-header">
					<h1>医学知识管理 
						<small style='float:right;margin-right:30px;'>		
							<a href="<?php echo U('/Home/Mdc/add');?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> 添加</a>
						</small>
					</h1>
				</div>
				<div class="table-responsive ">
					<table class="table">
						<thead>
							<tr>
								<th>id</th>
								<th>标题</th>
								<th>作者</th>
								<th>发表时间</th>
								<th>修改时间</th>
								<th>管理</th>
							</tr>
						</thead>						
						<tbody>						
							 <?php foreach($mdcs as $mdc): ?>
							<tr>
								<td><?php echo $mdc['id'];?></td>
								<td><?php echo $mdc['title'];?></td>
								<td><?php echo $mdc['author'];?></td>								
								<td><?php echo date("Y-m-d H:i:s",$mdc['create_time']) ;?></td>
								<td><?php echo date("Y-m-d H:i:s",$mdc['update_time']) ;?></td>
								<td>
								<a href="<?php echo U('/Home/Mdc/add');?>?id=<?php echo $mdc['id']; ?>" class="btn btn-primary btn-xs">编辑</a>								
								<a onclick="return confirm('确定删此项吗？')"  href="<?php echo U('/Home/Mdc/delete');?>?id=<?php echo $mdc['id']; ?>" class="btn btn-danger btn-xs">删除</a>						
								</td>
							</tr>
							 <?php endforeach ; ?>
						</tbody>
					</table>
				</div>				
			</div>
		</div>
		<div class="col-md-4 col-md-offset-4">
			<nav class="pull-right">
				<ul class="pagination">
						<?php echo $show;?>	
				</ul>
			</nav>
		</div>		
	</div>
</body>
</html>