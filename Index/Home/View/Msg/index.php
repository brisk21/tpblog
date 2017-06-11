<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="留言吧，php留言板，php留言">
	<link rel="stylesheet" type="text/css" href="/Public/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="/Public/widgEditor/css/widgEditor.css" />
	<title>留言吧</title>
	<style>
	.show,.info{
		overflow: hidden;
	}
	.pagination a,.pagination .current{
		font-size: 18px;
		margin-right: 10px;		
	}
	.pagination .current{
		color: red;		
	}
	.reply{
		color:rgba(40, 94, 220, 0.74);
		border: 1px dashed  gray;
	}
	input{
		margin-top: 5px;
	}	
	.friendlink ol{
		list-style: none;
	}
	</style>
</head>
<body>	
	<div class="container" id="main">
		<div class="row  input-message">		
			<div class="form-group col-xs-12">
				<form action={:U('/Home/Msg/save')} method="post" >
					<textarea id="noise" name="content" class="form-control widgEditor nothing " onkeyup="this.value = this.value.slice(0, 80)" >
					</textarea>
					<input type="text" name="user"class="form-control" id="username" placeholder="请输入留言标题"  maxlength="50"/>
					<input type="text" name="email"class="form-control" id="Emails" onblur="checkmail()" placeholder="邮箱地址(选填)" />
					<input type="text" class="form-control" name='verify' id="code" placeholder="请输入验证码">
					<img src="<?php echo U('/Home/Verify/');?>" alt="刷新" title="刷新" id="Verify" name="code">
					<div class="input-group choses">
						<span><input type="radio" class="chose" name="chose" checked="true" value="1"/>显示到留言区<span>
						<span><input type="radio" class="chose" name="chose" value="0" id="choseHidden" />不显示到留言区</span>
					</div>					
					<input type="submit"  class="btn  btn-info pull-right" value="发表" onfocus="checkInput();" />							
				</form>
				
			</div>			
		</div>
		<div class="row show">
			<div class="col-xs-12">			
			<?php foreach ($msgs as $msg): ?>	
				<if condition="$msg['chose'] eq 1 ">
				<div class="panel panel-info">
					<div class="panel-heading">
						{$msg.user}
					</div>
					<div class="panel-body content">						
							{$msg.content|html_entity_decode}		
						<if condition="$msg['reply'] neq '' ">	
							<div class="well-sm  reply">
							 	<b style="color: black">回复:</b>{$msg.reply|html_entity_decode}	
							</div> 
						</if>										
					</div>
					<div class="panel-footer info">
						<span class="pull-left">留言地址:{$msg.ipadress|default="地下工厂"}</span>
						<span class="pull-right">{$msg.intime|date="Y-m-d H:i:s",###}</span>
					</div>
				</div>	
				</if>	
				<?php endforeach;  ?>
			</div>
		</div>
		<div class="pagination text-center">
			{$page}
		</div>
		<div class="friendlink">
			<ol>
				<li>
					<a href="http://weibingsheng.cn" target="_blank">网站主页</a>
					<a href="http://weibingsheng.cn/blog/" target="_blank">博客</a>
					<a href="http://weibingsheng.cn/lyb" target="_blank">原生留言版</a>
					<a href="http://wgscf.com/" target="_blank">六堡茶官网</a>
					<a href="http://weibingsheng.cn/Home/Msg/" target="_blank">留言吧</a>
					<a href="http://weibingsheng.cn/jm/" target="_blank">梦空间</a>
				</li>
			</ol>
		</div>
		<div class="siteInfo text-center">
			<div class="siteInfo" >&copy;BRISKLAN；备案信息：<a href="http://www.beianbeian.com/beianxinxi/34387c78-91f7-4c20-8400-825cfcf3ddae.html" target="b_link">桂ICP备16004757号-1</a></div>	
		</div>
		<script type="text/javascript" src="/Public/jquery.min.js"></script>
		<script type="text/javascript" src="/Public/widgEditor/js/widgEditor.js"></script>
		<script>
			function checkmail(){
				var mailCheck = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;	
				var oemail = document.getElementById('Emails').value;
				if(!mailCheck.test(oemail)){
					alert(oemail+"此邮箱格式不对哦，请确认重新输入");
				}
			}
			$("#Verify").click(function() {
			   var verifyURL = "<?php echo U('/Home/Verify/');?>";
			   var time = new Date().getTime();
			   $("#Verify").attr({
			      "src" : verifyURL 
			   });
			});	
			$("#code").blur(function() {
			    $.post("<?php echo U('/Home/Verify/check_verify');?>", {
			        code : $("#code").val()
			        }, function(data) {
			        if (data !== 1) {
			            //验证码输入不正确	
			            alert("验证码错误。");	            
			        } 
			    });
			});	
		</script>
</body>
</html>