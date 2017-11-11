@extends('layouts.app')

@section('content')
{!! Form::open(array('url' => '/post/create', 'method' => 'POST'))!!}

        @include ('Post.form',['submitButton' => "create"])

{!! Form::close() !!} 


@endsection