<div class="panel panel-success labels">
	<div class="panel-heading">
		<h3 class="panel-title">文章分类</h3>
	</div>
	<div class="panel-body">
		<li><a class="btn btn-success" href="<?php echo U('/Home/Index/index');?>?labels=<?php echo 'gmx';?>">gmx
		<span class="badge"><?php echo $lab_num;?></span></a></li>
		<li><a class="btn btn-info" href="<?php echo U('/Home/Index/index');?>?labels=<?php echo 'others';?>">其它</a></li>
		<li><a class="btn btn-warning" href="<?php echo U('/Home/Index/index');?>?labels=<?php echo 'html';?>">html</a></li>
		<li><a class="btn btn-info" href="<?php echo U('/Home/Index/index');?>?labels=<?php echo 'javascript';?>">javascript</a></li>
		<li><a class="btn btn-success" href="<?php echo U('/Home/Index/index');?>?labels=<?php echo 'css';?>">css</a></li>
		<li><a class="btn btn-danger" href="<?php echo U('/Home/Index/index');?>?labels=<?php echo 'jquery';?>">jquery</a></li>
		<li><a class="btn btn-warning" href="<?php echo U('/Home/Index/index');?>?labels=<?php echo 'vmd';?>">vmd</a></li>
		<li><a class="btn btn-info" href="<?php echo U('/Home/Index/index');?>?labels=<?php echo 'php';?>">php</a></li>
		<li><a class="btn btn-danger" href="<?php echo U('/Home/Index/index');?>?labels=<?php echo 'thinkphp';?>">ThinkPHP</a></li>
		<li><a class="btn btn-success" href="<?php echo U('/Home/Index/index');?>?labels=<?php echo 'linux';?>">Linux</a></li>
	</div>
</div>
<div class="panel panel-success " id="authorinfo">
		<div class="panel-heading">
			<h3 class="panel-title">最近文章</h3>
		</div>
		<div class="panel-body">	
				<?php foreach( $list as $blog ):?>	
				<div class="panel panel-info">
					<div class="panel-heading">
						<a href="<?php echo U('/Home/Index/read');?>?id=<?php echo $blog['id'];?>">
							<?php echo $blog['title'];?>
						</a>		
						<span style="color: red" class="glyphicon glyphicon-hand-left">阅读全文</span>		
					</div>					
				</div>
				<?php endforeach;?>	
		</div>
</div>


