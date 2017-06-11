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
			<ol class="breadcrumb">
				<li><a href="<?php echo U('/Home/Index/');?>">网站首页</a></li>
				<li><a href="<?php echo U('/Home/Mdc/');?>">医学首页</a></li>
				<li class="active">{$mdc.title}</li>
				</ol>
				<div class="panel panel-info">
					<div class="panel-heading">
						<h1><a href="<?php echo U('/Home/Mdc/read');?>?id=<?php echo $mdc['id'];?>"><?php echo $mdc['title'];?></a></h1>
						<div class=" info">
							<span class=" pull-left">来源：<?php echo $mdc['author'];?></span>
							<span class=" pull-right"><?php echo date('Y-m-d H:s:m',$mdc['create_time']);?></span>
						</div>					
					</div>
					<div class="panel-body">
						<?php echo  html_entity_decode($mdc['content']);?>
					</div>
					<div class="panel-footer">
						<div id="sharebox " style="overflow: hidden;" >
							<?php include('Public/baidushare.php');?>
							<span class="pull-right"><span class="glyphicon glyphicon-eye-open "></span><?php echo $mdc['saw'];?>次</span>
						</div>
					</div>
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
		
		<div class="siteInfo">
			<div class="siteInfo" ><?php echo html_entity_decode( $config["copyright"] ); ?></div>	
		</div>
	</div>
</body>
</html>