<!-- 主页，显示所有留言信息 -->
@extends('msg')

@section('content')
	<div id="page">
		<a style="margin-left: 30px;">留言信息一览表</a> 
		<form action="/index.php/search" method="get">
			<input type="submit" name="" value="提交" style="float: right;margin:3px 10px 0 0;">
			<input type="text" name="search" style="float: right;margin:3px 10px 0 0;">
			<a style="display: block;float:right;font-size:18px; margin-top: 5px;">模糊搜索标题或内容：</a>
		</form>
	</div>
	<div id="show">

		<table border="0" cellspacing="0" cellpadding="10" style="margin: auto;">
			<tr>
				<th style="width: 20px;text-align: left;">ID</th>
				<th style="width: 175px;text-align: left;">标题</th>
				<th style="width: 335px;text-align: left;">内容</th>
				<th style="width: 65px;text-align: left;">发表者</th>
				<th style="width: 140px;text-align: left;">发表时间</th>
				<th style="width: 70px;text-align: left;">操作</th>
			</tr>
			@foreach ($msgs as $msg)
				<tr>
					<td>{{ $msg->id }}</td>
					<td>
					<!-- 截取标题 -->
					<?php
					 	$string = mb_substr( $msg->title, 0, 10, 'utf-8' ); 
					 	if(strlen($msg->title)<20) {
					 		echo $msg->title;
					 	} else {
					 		echo $string.'...';
					 	}
					  ?>
					  </td>
					<td>
					<!-- 截取留言内容 -->
					<?php
					 	$string = mb_substr( $msg->content, 0, 20, 'utf-8' ); 
					 	if(strlen($msg->content)<50) {
					 		echo $msg->content;
					 	} else {
					 		echo $string.'...';
					 	}
					  ?>
					  </td>
					<td>{{ $msg->author }}</td>
					<td>{{ $msg->updated_at }}</td>
					<td>
						<a href="/index.php/details/{{ $msg->id }}">查看详情</a>
					</td>
				</tr>
			@endforeach
		</table>
		
		
	</div>
	<div id="page"><ul>{!! $msgs->links() !!}</ul></div>

@endsection
