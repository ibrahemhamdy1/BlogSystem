@extends('layouts.app')
@section('content')
  <div class="container">
        <div class="row">
            @foreach($post as $post)
            <div class="col-md-12 text-center ">


              <div class=" productbox">

                <img src="{{asset('/img/image.png')}}" alt="" style="width:200px;height:200px">
                <h1>{{$post->title}}</h1>
                <p>{{$post->body}}</p>
                <p>Owner:  {{ $post->owner->name}}</p>

                <div class="productprice">
                    
                    <div class="pricetext">{{$post->created_at}}</div>
                </div>
              </div>
          </div>
            @endforeach
        </div>
          </div>
@endsection