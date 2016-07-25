@extends('msg')

@section('content')
	<div style="float: right; margin: 4px 20px 0;">
        @if (!Auth::guest())
                <a>{{ Auth::user()->name }}</a>
                <a href="{{ url('/logout') }}" >注销</a>
        @endif
	</div>
	<div id="page"><a style="margin-left: 30px;">留言管理</a></div>
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
						<a href="/index.php/details/{{ $msg->id }}">查看</a>
						<a href="/index.php/edit/{{ $msg->id }}">修改</a>
						<a href="/index.php/delete/{{ $msg->id }}">删除</a>
					</td>
				</tr>
			@endforeach
		</table>
		
	</div>
	<div id="page"><ul>{!! $msgs->links() !!}</ul></div>
@endsection