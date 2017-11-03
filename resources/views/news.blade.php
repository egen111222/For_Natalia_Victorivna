@extends('layouts.main')

@section('title')
Posts
@stop



@section('cont')
<h1>Article Form</h1>
<h4>Add your post  or use <a href="{{route('news.api')}}">api pastle</a></h4> 

{!! Form::open(['route'=>'news.userpost','method'=>'post'])  !!}
{!! Form::label('title','title') !!}
{!! Form::text('title','',['class' => 'titleinput','placeholder'=>'Enter Title Here','required'=>'required']) !!}
{!! Form::label('text','text') !!}
{!! Form::textarea('text','',['class' => 'textinput','placeholder'=>'Enter Text Here','required'=>'required'])!!}
<p>{!! Form::token() !!}</p>
{!! Form::submit('Add Your posts!',['class'=>'btn btn-success']) !!}
{!! Form::close() !!}

@stop




@section('button')
 <a target="_blank" href="#"><button class="btn btn-default btn-lg">Download</button></a>
                            <a target="_blank" href="#"><button class="btn btn-primary btn-lg">Learn More</button></a>

                            <div class="available">
                                <p>
                                    Available on :
                                    <a href="#"><i class="fa fa-apple"></i></a>
                                    <a href="#"><i class="fa fa-android"></i></a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
@stop            