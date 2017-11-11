@extends('layouts.app')
@section('content')

      <div class="container">
        <div class="row">
            @foreach($posts as $post)
            <div class="col-md-3 ">


              <div class=" productbox">

                <img src="{{asset('/img/image.png')}}" alt="" style="width:200px;height:200px">
                <h1>{{$post->title}}</h1>
                <p>{{$post->body}}</p>
                <div class="productprice">
                    <div class="pull-right">
                        <a href="{{url('/post/'.$post->id)}}" class="btn btn-danger btn-sm" role="button">VIEW</a>
                    </div>
                    <div class="pricetext">{{$post->created_at}}</div>
                </div>
              </div>
          </div>
            @endforeach
        </div>
          </div>
@endsection
