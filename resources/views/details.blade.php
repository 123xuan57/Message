<!-- 留言详细内容显示页 -->
@extends('msg')

@section('content')
<div id="page"><a style="margin-left: 30px;">留言详细信息</a></div>
<div id="details" style="padding:10px 0px 10px 0;">

	<p>ID:{{ $msg->id }}</p>
	<p>发表人：{{ $msg->author }}</p>
	<p>发表时间：{{ $msg->updated_at }}</p>
	<p>留言主题：{{ $msg->title }}</p>
	<p>留言内容：{{ $msg->content }}</p>
</div>

@endsection