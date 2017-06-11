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
		.edit a{
			padding: 8px;
			margin-top: 5px;
		}

	</style>
<body>
	<div class="container-fluid">
		<div class="col-md-12">
			<?php include(THEME_PATH.'Common/nav.php');?>
		</div>
		<div class="col-md-12">
				<div class="page-header">
					<h1>留言管理 
						<small style='float:right;margin-right:30px;'>
						<a href="{:U('/Home/Msg/index')}" class="btn btn-success"><span class="glyphicon glyphicon-eye-open"></span> 显示全部留言</a>
						<a href="{:U('/Home/Msg/index')}?check=check" class="btn btn-warning"><span class="glyphicon glyphicon-eye-close"></span> 显示未通过留言</a>						
						</small>
					</h1>

				</div>
				<div class="table-responsive ">
					<table class="table">
						<thead>
							<tr>
								<th>id</th>
								<th>标题</th>
								<th>内容</th>
								<th>留言时间</th>
								<th>审核+显隐</th>
								<th>IP</th>								
								<th>管理</th>
							</tr>
						</thead>						
						<tbody>						
							 <?php foreach($msgs as $msg): ?>
							<tr>
								<td style="width: 5%" ><?php echo $msg['id'];?></td>
								<td style="width: 10%"><?php echo $msg['user'];?></td>
								<td style="width: 40%">
									{$msg.content|html_entity_decode}
									<if condition="$msg.reply neq ''">
										<hr>
										<span style="color: blue">										
											{$msg.reply|html_entity_decode}										
										</span>
									</if>
								</td>
								<td style="width: 10%"><?php echo date("Y-m-d H:i:s",$msg['intime']) ;?></td>
								<td style="width: 5%"><?php echo $msg['state'].'+'.$msg['chose'];?></td>
								<td style="width: 10%"><?php echo $msg['ipadress'] ;?></td>
								<td style="width: 20%" class="edit">
								<a href="<?php echo U('/Home/msg/reply');?>?id=<?php echo $msg['id']; ?>" class="btn btn-primary btn-xs">回复</a>								
								<a href="<?php echo U('/Home/msg/pass');?>?id=<?php echo $msg['id']; ?>" class="btn btn-info btn-xs">通过</a>								
								<a onclick="return confirm('确定删此项吗？')"  href="<?php echo U('/Home/msg/delete');?>?id=<?php echo $msg['id']; ?>" class="btn btn-danger btn-xs">删除</a>						
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