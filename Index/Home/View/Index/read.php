<!doctype html>
<html lang="zh-CN">
<head>
<?php include(THEME_PATH.'Common/header.inc.php');?>
	<style type="text/css">
		body{background:rgba(190,230,77,.5)}.info{overflow:hidden}.top{margin-top:0;margin-bottom:0}.search{margin-top:10px}.logo{height:50px;margin:-14px}.pagination a,.pagination span{padding:5px;margin:5px;font-size:14px;background:rgba(7,255,139,.31)}.pagination span{background:rgba(232,146,59,.57);color:red}
	</style>
	<script>
	(function(){
	   var src = (document.location.protocol == "http:") ? "http://js.passport.qihucdn.com/11.0.1.js?102c1c7087c8b93ccdeaee7be3b68554":"https://jspassport.ssl.qhimg.com/11.0.1.js?102c1c7087c8b93ccdeaee7be3b68554";
	   document.write('<script src="' + src + '" id="sozz"><\/script>');
	})();
	</script>
	<style>
		.content img{width: 100%;}.content,.copylink{word-wrap: break-word;}
	</style>
</head>
<body>
	<div class="container">		
	<?php include(THEME_PATH.'Common/nav.php');?>	
		<div class="row">
			<div class="col-md-8">
				<ol class="breadcrumb">
					<li><a href="<?php echo U('/Home/Index/');?>">网站首页</a></li>
					<li><a href="<?php echo U('/Home/Index/index');?>">博客首页</a></li>
					<li class="active">{$blog.title}</li>
				</ol>
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3><?php echo $blog['title'];?></h3>
						<div class=" info">
							<span class=" pull-left">作者：<?php echo $blog['author'];?></span>
							<span class=" pull-right"><?php echo date('Y-m-d H:s:m',$blog['intime']);?></span>
						</div>					
					</div>
					<div class="panel-body content">
						<?php echo  html_entity_decode($blog['content']);?>
					</div>
					<div class="panel-footer">
						<div class="copylink">
								<p style="color:red">
									转载本文请注明本文来自韦炳生博客。链接地址：
									<a href="<?php echo U('/Home/Index/read');?>?id=<?php echo $blog['id'];?>"><?php echo $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];?></a>
									
								</p>
						</div>
					</div>
					<div class="panel-footer">
						<div id="sharebox " style="overflow: hidden;" >
							<?php include('Public/baidushare.php');?>
							<span class="pull-right"><span class="glyphicon glyphicon-eye-open "></span><?php echo $blog['saw'];?>次</span>
						</div>
					</div>
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
			<div class="siteInfo" >&copy;BRISKLAN；备案信息：<a href="http://www.beianbeian.com/beianxinxi/34387c78-91f7-4c20-8400-825cfcf3ddae.html" target="b_link">桂ICP备16004757号-1</a></div>	
		</div>
	</div>
</body>
</html>