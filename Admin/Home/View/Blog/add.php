<!DOCTYPE HTML>
<html lang="zh-CN">
	<?php include(THEME_PATH.'Common/head.php');?>		
<body>
	<div class="container-fluid">
		<div class="col-md-12">
			<?php include(THEME_PATH.'Common/nav.php');?>
		</div>
		<div class="col-md-12">
			<div class="col-md-1"></div>
			<div class="col-md-12">
				<div class="page-header">
					<h1>日志管理 
						<small style='float:right;margin-right:30px;'>		
							<a href="<?php echo U('/Home/Blog/');?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> 返回</a>
						</small>
					</h1>
				</div>		
					
				<div class="col-md-10">
					<div class="panel-body">
						<form action="<?php echo U('/Home/Blog/save');?>?id=<?php echo $blog['id'];?>" method="post">
						<input type="hidden" name='bid' value="<?php echo $id;?>" />
							<div class="form-group">
								<label for="title">标题：</label>
								<input type="text" class="form-control" name="title" id="title" placeholder="请输入文章标题" value="<?php echo $blog['title']; ?>">
							</div>
							<div class="form-group">
								<label for="author">作者：</label>								
								<input type="text" class="form-control" name="author"  id="author" value="<?php echo $blog['author']; ?>" >
							</div>
							<div class="form-group">
								<label for="bkeyword">关键词：</label>								
								<input type="text" class="form-control" name="keywords"  id="bkeyword" value="<?php echo $blog['keywords']; ?>" >
							</div>
							<div class="form-group">
								<label for="bkeyword">分类：</label>								
								<input type="text" class="form-control" name="labels"  id="bkeyword" value="<?php echo $blog['labels']; ?>" >
							</div>
							<div class="form-group">
								<label for="content">内容：</label>
								<textarea name="content"  id="editor_id" style="width:100%;height:300px;" >
									<?php echo $blog['content']; ?>
								</textarea>								
							</div>
									  
								<button type="submit" class="btn btn-default">提交</button>	
						</form>						
					</div>
				</div>			
			 <div class="col-md-2"></div>
		</div>
		<div class="col-md-2"></div>
		</div>
	</div>	
	<js href="/Public/kindeditor/kindeditor-min.js" />
	<js href="/Public/kindeditor/lang/zh_CN.js" />	
	<script>
		//富文本编辑器
		KindEditor.ready(function(K) {
			window.editor = K.create('#editor_id');
			// 取得HTML内容
			html = editor.html();
			// 同步数据后可以直接取得textarea的value
			editor.sync();
			//html = document.getElementById('editor_id').value; // 原生API
			//html = K('#editor_id').val(); // KindEditor Node API
			html = $('#editor_id').val(); // jQuery
			// 设置HTML内容
			//editor.html('HTML内容');
			// 关闭过滤模式，保留所有标签
			 K.create('#editor_id');
			 KindEditor.options.filterMode = false;				
		});							
		</script>
</body>