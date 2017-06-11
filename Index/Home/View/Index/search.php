<!doctype html>
<html lang="zh-CN">
<head>
<?php include(THEME_PATH.'Common/header.inc.php');?>
	<style type="text/css">
		body{
			background: rgba(190, 230, 77, 0.5);
		}
		.info{
			overflow: hidden;
		}
		.top{
			margin-top: 0;
			margin-bottom: 0;
		}
		.search{
			margin-top: 10px;
		}
		.logo{
			height: 50px;			
			margin: -14px;
		}
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
</head>
<body>
	<div class="container">		
	<?php include(THEME_PATH.'Common/nav.php');?>	
		<div class="row">
			<div class="col-md-8">
<?php foreach( $blogs as $blog ):?>	
				<div class="panel panel-info">
					<div class="panel-heading">
						<a href="<?php echo U('/Home/Index/read');?>?id=<?php echo $blog['id'];?>">
							<?php echo $blog['title'];?>
						</a>					
					</div>
					<div class="panel-body">
						<?php echo mb_substr(strip_tags( html_entity_decode($blog['content'])),0,80,'utf-8');?>
					</div>
					<div class="panel-footer info">
						<span class="author pull-left">作者：<?php echo $blog['author'];?></span>
						<span class="time pull-right"><?php echo date('Y-m-d H:s:m',$blog['intime']);?></span>
					</div>
				</div>
<?php endforeach;?>		
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="page page-header">
							<nav>
								<ul class="pagination">
									<?php echo $page;?>		   
								</ul>
							</nav>
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>
				</div>
				<div class="col-md-4 ">
					<?php include(THEME_PATH.'Common/sidebar.inc.php');?>		
				</div>
		</div>
              <!--
              	作者：1076963452@qq.com
              	时间：2016-11-10
              	描述：内容end
              -->		
		
		<div class="siteInfo">
			<div class="siteInfo" ><?php echo html_entity_decode( $config["copyright"] ); ?></div>	
		</div>
	</div>
</body>
</html>
