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
					<div class="panel-body">
						<?php echo  html_entity_decode($blog['content']);?>
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
			<div class="siteInfo" ><?php echo html_entity_decode( $config["copyright"] ); ?></div>	
		</div>
	</div>
</body>
</html>