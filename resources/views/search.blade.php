<!-- 显示查询结果 -->
@extends('msg')

@section('content')
<div id="page"><a style="margin-left: 30px;">查询结果</a></div>
<div id="details" style="padding:10px 30px;">
	@foreach ($msg as $msg)
	<p>ID:{{ $msg->id }}</p>
	<p>发表人：{{ $msg->author }}</p>
	<p>发表时间：{{ $msg->updated_at }}</p>
	<p>留言主题：{{ $msg->title }}</p>
	<p>留言内容：{{ $msg->content }}</p>
	<hr />
	@endforeach
</div>

@endsection