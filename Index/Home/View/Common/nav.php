<nav class="navbar navbar-inverse ">
			<div class="container-fluid">				
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo U('/Home/Index/');?>">BRISKLAN</a>
				</div>		
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li >
							<a href="<?php echo U('/Home/Index/');?>">首页<span class="sr-only">(current)</span></a>
						</li>										
					</ul>
					
					<ul class="nav navbar-nav">
						<li >
							<a href="<?php echo U('/Home/Mdc/');?>">医学知识</a>
						</li>
					</ul>
					<ul class="nav navbar-nav">
						<li >
							<a href="<?php echo U('/Home/Msg/');?>">在线留言</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right ">						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">其他相关 <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="http://weibingsheng.cn/blog">博客</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="http://weibingsheng.cn">网站首页</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="http://weibingsheng.cn/lyb">留言板</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="http://weibingsheng.cn/mail">邮件系统</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="javascript:alert('正在开发……')">待开发扩展</a></li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left pull-right" role="search" action="<?php echo U('/Home/Index/search');?>" method="get">
						<div class="form-group">
							<input type="text" name="search_words" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">搜索</button>
					</form>
				</div>
			</div>
		</nav> <!--作者：1076963452@qq.com  	时间：2016-11-10  	描述：导航区end-->