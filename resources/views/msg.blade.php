<!DOCTYPE html>
<html>
<head>
	<title>留言板</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	<script type="text/javascript" src="{{ asset('bower_components/jquery/dist/jquery.main.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</head>
<body>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
	<div id="container">
		<!-- 头部信息 -->
		<div id="header">
			<img style="width: 100%;height: 150px;" src="{{ asset('images/header.jpg') }}">
			<!-- 导航 -->
			<div id="nav">
				<ul>
					<li><a href="/">网站首页</a></li>
					<li><a href="/index.php/add">我要留言</a></li>
					<li><a href="/index.php/manage">留言管理</a></li>
				</ul>
			</div>
		</div>
		<div style="clear: both; margin-top: 41px;"><hr /></div>
		

		<!-- 主体内容 -->
		<div id="content">
			@yield('content')
		</div>

		<!-- 页脚信息 -->
		<div id="footer">
			<p>&copy;  吴胜国学习laravel框架<p>
		</div>
	</div>
	

</body>
</html>