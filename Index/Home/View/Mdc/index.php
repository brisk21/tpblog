<!doctype html>
<html lang="zh-CN">
<head>
<?php include(THEME_PATH.'Common/header.mdc.php');?>
	<style type="text/css">
		body{background:rgba(190,230,77,.5)}.info{overflow:hidden}.top{margin-top:0;margin-bottom:0}.search{margin-top:10px}.logo{height:50px;margin:-14px}.pagination a,.pagination span{padding:5px;margin:5px;font-size:14px;background:rgba(7,255,139,.31)}.pagination span{background:rgba(232,146,59,.57);color:red}
	</style>	
	<script>
	(function(){
	   var src = (document.location.protocol == "http:") ? "http://js.passport.qihucdn.com/11.0.1.js?102c1c7087c8b93ccdeaee7be3b68554":"https://jspassport.ssl.qhimg.com/11.0.1.js?102c1c7087c8b93ccdeaee7be3b68554";
	   document.write('<script src="' + src + '" id="sozz"><\/script>');
	})();
	</script>
</head>
<body>
	<div class="container">		
	<?php include(THEME_PATH.'Common/nav.php');?>	
		<div class="row">
			<div class="col-md-8">
<?php foreach( $mdcs as $mdc ):?>	
				<div class="panel panel-info">
					<div class="panel-heading">
						<a href="<?php echo U('/Home/Mdc/read');?>?id=<?php echo $mdc['id'];?>">
							<?php echo $mdc['title'];?>							
						</a>					
						<span style="color: green" class="glyphicon glyphicon-hand-left">阅读</span>
					</div>
					<div class="panel-body">
						<?php echo mb_substr(strip_tags( html_entity_decode($mdc['content'])),0,80,'utf-8');?>
					</div>
					<div class="panel-footer info">
						</span><span class="author pull-left">来源：<?php echo $mdc['author'];?></span>
						<span class="time pull-right"><?php echo date('Y-m-d H:s:m',$mdc['create_time']);?></span>
					</div>
				</div>
<?php endforeach;?>		
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="page page-header">
							<nav>
								<ul class="pagination">
									<?php echo $page;?>	<!--分页-->	   
								</ul>
							</nav>
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>
				</div>
				<div class="col-md-4 ">
					<div class="panel panel-success " id="authorinfo">
						<div class="panel-heading">
							<h3 class="panel-title">最近文章</h3>
						</div>
						<div class="panel-body">
								<?php foreach( $list as $blog ):?>	
								<div class="panel panel-info">
									<div class="panel-heading">
										<a href="<?php echo U('/Home/Mdc/read');?>?id=<?php echo $blog['id'];?>">
											<?php echo $blog['title'];?>
										</a>		
										<span style="color: green" class="glyphicon glyphicon-hand-left">阅读</span>		
									</div>					
								</div>
								<?php endforeach;?>	
						</div>
					</div>
				</div>
		</div>
              <!--
              	作者：1076963452@qq.com
              	时间：2016-11-10
              	描述：内容end
              -->		
		
		<div class="siteInfo" >&copy;BRISKLAN；备案信息：<a href="http://www.beianbeian.com/beianxinxi/34387c78-91f7-4c20-8400-825cfcf3ddae.html" target="b_link">桂ICP备16004757号-1</a></div>	
	</div>
</body>
</html>