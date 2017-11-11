@extends('layouts.app')

@section('content')


<h1 class="text-center">New Post</h1>
<div class="creat-ad blocks">		

	<div class="container  ">
		<div class="panel panel-primary">
			<div class="panel-heading">New Post</div>
				<div class="panel-body">
					<div  class="row ">
                      <div class="col-md-8">
                            {{ csrf_field() }}
                            <!--  start Title  -->
                            <div  class="col-md-12">

                            <div class="form-group form-group-lg">
                                <label class="col-sm-3 control-label margin-top">Title</label>
                                    <div class="col-sm-10 col-md-9">
                                        {!!Form::text('title',null,array('required','class'=>'form-control live','placeholder'=>'the  name  of  the  missing'))!!}

                                                        
                                    </div>
                                </div>
                            </div>
                            <!--  end Title  -->

                            <!--  start Body  -->
                            <div  class="col-md-12">

                            <div class="form-group form-group-lg">
                                <label class="col-sm-3 control-label margin-top">Name</label>
                                    <div class="col-sm-10 col-md-9">
                                        {!!Form::text('body',null,array('required','class'=>'form-control live','placeholder'=>'the  name  of  the  missing'))!!}

                                                        
                                    </div>
                                </div>
                            </div>
                            <!--  end Body  -->

                      
                        <div class="text-center">
                        {!! Form::submit('submitButton',array('class'=>'btn  btn-primary'))!!}
                        </div>

                      </div>
                     
                      
                    </div>
                </div>    
            </div>  
        </div>            
    </div>
                    

</div>                    
@endsection