@extends('layouts.app')

@section('content')
<div class="row">
	{!! Form::model($post,array('method'=>'PATCH','action'=>['PostController@update',$post->id]))!!}

	        @include ('Post.form')

	{!! Form::close() !!} 
</div>
@endsection