		<meta charset="UTF-8">
		<meta name="renderer" content="webkit|ie-comp|ie-stand">		
		<meta name="keywords" content="<?php if($blog['keywords'] ==null){ echo $config['keywords'];}else{echo $blog['keywords'];};?>" />
		<meta name="description" content="<?php echo $config['intro'];?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php $title = $blog['title'];if($title == null){echo $config['title'];}else{echo $title;};?></title>
		<link rel="stylesheet" type="text/css" href="/Public/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/Public/main.css">
		<link rel="stylesheet" href="/Public/style.css">
		<script type="text/javascript" src="/Public/jquery.min.js"></script>
		<script type="text/javascript" src="/Public/bootstrap/js/bootstrap.min.js"></script>	
