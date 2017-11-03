@extends('layouts.main')

@section('title')
Posts
@stop


@section('cont')
 <h1>Article Form</h1>
<form action="{{route('news.editarticle',['id'=>$id,'type'=>$type])}}" method="get">
<label for="title">title</label>
<input type="text" name="title" value="{{$edittitle}}" class="titleinput">
<label for="text">text</label>
<textarea class="textinput" cols="40" rows="10" name="text" class="textinput">{{$edittext}}</textarea><br>
	<button class="btn btn-primary">edit article</button>
</form>



@stop
