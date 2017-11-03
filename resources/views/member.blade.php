@extends('layouts.main')

@section('cont')
@if($posts != null)
<h1>Your Cont</h1>
<hr>
<a href="{{route('news.json',['type'=>'posts'])}}" style="color:green"><h4>WP json</h4></a>
<hr>
@foreach($posts as $post)
<div id="{{$post['id']}}">
<p align="right"><button onclick="hide_the_post(this)" type="posts" id="btn{{$post['id']}}" class="btn btn-danger">remove article</button><a href="{{route('news.edit',['id'=>$post['id'],'type'=>'posts'])}}"><button class="btn btn-success">edit article</button></a></p>
<h2>{{$post['post_title']}}</h2>
<h3>{{$post['post_content']}}</h3>
<h4>{{$post['created_at']}}</h4>
</div>
@endforeach
@endif
@if($api != null)
<hr>
<h1>Api Posts</h1>
<a href="{{route('news.json',['type'=>'api'])}}" style="color:green"><h4>WP json</h4></a>
<hr>
@foreach($api as $apis)
<div id="{{$apis['id']}}">
<p align="right"><button onclick="hide_the_post(this)" type="api" id="btn{{$apis['id']}}" class="btn btn-danger">remove article</button><a href="{{route('news.edit',['id'=>$apis['id'],'type'=>'api'])}}"><button class="btn btn-success">edit article</button></a></p>
<h2>{{$apis['post_title']->rendered}}</h2>
<h3>{{$apis['post_content']->rendered}}</h3>
<h5>status = {{$apis['post_status']}}</h5>
<h5>author_id = {{$apis['post_author']}}</h5>
</div>
@endforeach
@endif
<script src="{{asset('js/jquery.js')}}"></script>
<script>
function hide_the_post(element){
	 var num_rem_state = element['id'].split('btn')[1];
	 $.ajax({
	 	url: "remove/"+$('#'+element['id']).attr('type') ,
	 	type: "GET",
	 	data: ({ rem_state: num_rem_state }),
	 	success: function(success){
	 		$("#"+num_rem_state).hide(2000);
	 	}
	 });
}

</script>

@stop