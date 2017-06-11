<nav class="navbar navbar-default navbar-inverse">
				<div class="container-fluid">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo U('/Home/Index/index');?>">AdminPanel</a>
					</div>						
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li ><a href="<?php echo U('/Home/Blog/index');?>">博客日志管理</a></li>
							<li ><a href="<?php echo U('/Home/Mdc/index');?>">医学知识管理</a></li>
							<li ><a href="<?php echo U('/Home/Msg/index');?>">留言管理</a></li>
							<li><a href="<?php echo U('/Home/Auser/index');?>">管理员管理</a></li>
							<li><a href="<?php echo U('/Home/Setting/index');?>">基本设置</a></li>						
						</ul>
						
						<ul class="nav navbar-nav navbar-right">							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $user['username'];?><span class="caret"></span></a>
								<ul class="dropdown-menu">									
									<li><a href="#">待扩展功能</a></li>
									<li><a href="<?php echo "http://".$_SERVER['HTTP_HOST'];?>">返回首页</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="<?php echo U('/Home/Login/logout');?>">退出登录</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>	