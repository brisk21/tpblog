<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{$msg.user}</title>
	<link rel="stylesheet" type="text/css" href="/Public/widgEditor/css/widgEditor.css" />
	<script type="text/javascript" src="/Public/widgEditor/js/widgEditor.js"></script>
	<style>
		.info{overflow: hidden;}.info .time{float: left;}.info .ipadress{float: right;}.container{margin:20px auto;}b{color:rgba(162, 61, 202, 0.68);}
		.title, .content, .info{border:1px dashed gray;}
	</style>
</head>
<body>
	<div class="container">
		<div class="title"><b>标题：</b>{$msg.user}</div>
		<div class="content">{$msg.content|html_entity_decode}</div>
		<div class="info">
			<div class="time"><b>留言时间：</b>{$msg.intime|date="Y-m-d H:i:s",###}</div>
			<div class="ipadress"><b>IP地址：</b>{$msg.ipadress}</div>
		</div>
		<div class="reply">
			<form action="{:U('/Home/Msg/reply')}?id={$msg.id}" method="post">
				<textarea name="content" id="noise" class="widgEditor nothing">
					{$msg.reply}
				</textarea>
				<div class="sub-btn">
					<input type="submit" id="sub-btn" value="回复">
				</div>
			</form>
		</div>
	</div>	
</body>
</html>