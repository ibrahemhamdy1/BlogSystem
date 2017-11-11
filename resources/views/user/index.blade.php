

@extends('layouts.app')

@section('content')
@foreach($user as $u)
<h1 class="text-center">MyProfile </h1>
<div class="information blocks">		
	<div class="container ">
		<div class="panel panel-primary">
			<div class="panel-heading">MyInformation</div>
				<div class="panel-body">
                    <div class="text-center">
                    			
                    </div>    
                    <div>   
                        <!-- ##### -->
                        <ul class="list-unstyled text-center" >	
						<li>
							<i class="fa fa-unlock-alt fa-fw"></i>
							Name:{{$u['name']}}
						</li>

					
						<li>
							<i class="fa fa-envelope-o fa-fw"></i>
                            email:{{$u['email']}} 

						</li>

						
						</li>

						<li>
							<i class="fa fa-calendar fa-fw"></i>
                            Created at:{{$u['created_at']}} 
						</li>

						<li>
						<a href="User/{{$u->id}}/edit"><span class="btn  btn-success">edit</span></a>

						</li>
					</ul>
                        <!-- ######## -->
                    </div>
                </div>
        </div>        
    </div>
<div>
<!-- ps For this user -->
<div id="myad" class="myads">		
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">MyAds</div>
				<div class="panel-body">	
					<div class="row">
					<!--  -->	

					@if(isset($u->posts) && !empty($u->posts) )
							@foreach($u->posts as $p)
								 <div class="col-md-3 ">


						              <div class=" productbox">

						                <img src="{{asset('/img/image.png')}}" alt="" style="width:200px;height:200px">
						                <h1>{{$p->title}}</h1>
						                <p>{{$p->body}}</p>
						                <div class="productprice">
						                    <div class="pull-right">
						                        <a href="{{url('/post/'.$p->id)}}" class="btn btn-danger btn-sm" role="button">VIEW</a>
						                    </div>
						                    <div class="pricetext">{{$p->created_at}}</div>
						                </div>
						              </div>
          						</div>
							@endforeach
						@else 
							<h1>You  dont  have any Post</h1>
					@endif	
					<!--  -->
					</div>

				</div>
		</div>		
	</div>			
</div>				
@endforeach

<!--  -->
@endsection				