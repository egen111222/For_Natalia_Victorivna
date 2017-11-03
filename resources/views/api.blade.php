@extends('layouts.main')

@section('cont')
<h1 align="center"></h1>
{!! Form::open(['route'=>'news.api','method'=>'get'])!!}
{!! Form::label('api','Enter URI of your wordpress site (you mast have )') !!}<a href="http://127.0.0.1/wp-test/wp-admin/plugin-install.php?tab=plugin-information&plugin=rest-api&TB_iframe=true&width=600&height=550"><h3 style="color:black">WP REST API</h3></a>to use it
<p>{!! Form::text('api','',['class'=>'textinput','placeholder'=>'Add your Api here !'])!!}</p>
{!! Form::token()!!}
{!! Form::submit('Add your Api Posts',['class'=>'btn btn-success','name'=>'add_api'])!!}
{!! Form::close()!!}

@stop