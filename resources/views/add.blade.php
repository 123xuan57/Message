<!-- 添加留言 -->
@extends('msg')

@section('content')
<div id="page"><a style="margin-left: 30px;">我要发表留言</a></div>
	<div id="add">

		<form id="form" name="form" action="/index.php/add" method="post">
			<p>
				<a>我的昵称：</a><input type="" class="author" name="author" />
			</p>
			<p>
				<a>留言主题：</a><input type="text" name="title" />
			</p>
			<p>
				<a>留言内容：</a><textarea name="content" id="" cols="50" rows="10"></textarea>
			</p>
			<p style="padding-left: 80px;">
			<button id="submit">提交</button>
			</p>
		</form>

		<!-- <button id="submit">提交</button> -->
	</div>
@endsection