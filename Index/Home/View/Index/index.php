<!doctype html>
<html lang="zh-CN">
<head>
<?php include(THEME_PATH.'Common/header.inc.php');?>
	<style type="text/css">		body{background:rgba(190,230,77,.5)}.info{overflow:hidden}.top{margin-top:0;margin-bottom:0}.search{margin-top:10px}.logo{height:50px;margin:-14px}.pagination a,.pagination span{padding:5px;margin:5px;font-size:14px;background:rgba(7,255,139,.31)}.pagination span{background:rgba(232,146,59,.57);color:red}.friendlink ol{list-style: none;}
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
<?php foreach( $blogs as $blog ):?>	
				<div class="panel panel-info">
					<div class="panel-heading">
						<a href="<?php echo U('/Home/Index/read');?>?id=<?php echo $blog['id'];?>">
							<?php echo $blog['title'];?>
						</a>		
						<span style="color: green" class="glyphicon glyphicon-hand-left">阅读全文</span>			
					</div>
					<div class="panel-body">
						<?php echo mb_substr(strip_tags( html_entity_decode($blog['content'])),0,100,'utf-8');?>……
					</div>
					<div class="panel-footer info">
						<span class="author pull-left">作者：<?php echo $blog['author'];?></span>
						<span class="time pull-right"><?php echo date('Y-m-d H:s:m',$blog['intime']);?></span>
					</div>
				</div>
<?php endforeach;?>	
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="page page-header">
							<nav>
								<ul class="pagination">
									<?php echo $page;?>		   
								</ul>
							</nav>
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>
				</div>				
				<div class="col-md-4  ">
					<?php include(THEME_PATH.'Common/sidebar.inc.php');?>		
				</div>
		</div>
              <!--
              	作者：1076963452@qq.com
              	时间：2016-11-10
              	描述：内容end
              -->	
         <div class="friendlink">
			<ol>
				<li>
					<a href="http://weibingsheng.cn" target="_blank">网站主页</a>
					<a href="http://weibingsheng.cn/blog/" target="_blank">博客</a>
					<a href="http://weibingsheng.cn/lyb" target="_blank">原生留言版</a>
					<a href="http://wgscf.com/" target="_blank">六堡茶官网</a>
					<a href="http://weibingsheng.cn/blog/Home/Msg/" target="_blank">留言吧</a>
					<a href="http://weibingsheng.cn//jm/" target="_blank">梦空间</a>
				</li>
			</ol>
		</div>     
		<div class="siteInfo text-center">
			<div class="siteInfo" >&copy;BRISKLAN；备案信息：<a href="http://www.beianbeian.com/beianxinxi/34387c78-91f7-4c20-8400-825cfcf3ddae.html" target="b_link">桂ICP备16004757号-1</a></div>	
		</div>
	</div>
</body>
</html>