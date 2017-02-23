<div class="panel panel-success " id="authorinfo">
		<div class="panel-heading">
			<h3 class="panel-title">最新文章</h3>
		</div>
		<div class="panel-body">
			<?php echo $config['intro'];?>
		</div>
</div>
<div class="panel panel-success " id="authorinfo">
		<div class="panel-heading">
			<h3 class="panel-title">热门文章</h3>
		</div>
		<div class="panel-body">
			<?php echo $config['intro'];?>
		</div>
</div>
<div class="panel panel-success " id="authorinfo">
		<div class="panel-heading">
			<h3 class="panel-title">类别</h3>
		</div>
		<div class="panel-body">
			<?php echo $config['intro'];echo $config['id'];?>
		</div>
</div>
<div class="panel panel-success " id="authorinfo">
		<div class="panel-heading">
			<h3 class="panel-title">友情链接</h3>
		</div>
		<div class="panel-body">			
			<div class="list-group">
			    <?php if( $config['id'] ):?>
			    	<?php foreach ($config as $key => $val):?>	
			    		
				<li  class="list-group-item  list-group-item-success">
					<?php echo html_entity_decode($val);?>
				</li>
					
				<?php endforeach;?>
			<?php endif;?>
			</div>
		</div>
</div>

