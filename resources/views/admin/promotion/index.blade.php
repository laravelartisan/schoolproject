@extends('admin.layouts.admin')

@section('head')
	{!! Html::style('css/styles.css') !!}

@endsection

@section('content')
	<div class="container-fluid">
		<div class="row">
     		<div class="col-md-12">
     		  	<div class="student-box-header">
					<div class="col-md-6">
                      <i class="fa fa-level-up"></i> Promotion
					</div>
					<div class="col-md-6 snt">
					   <ul class="breadcrumb text-right">
							<li>
							<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
							<a href="#">Dashboard</a></li>
							<li class="active">Promotion</li>
						</ul>
					</div>
				</div>
     		</div>
     	</div> <!--row-->
		<div class="inner-box">
	     	<div class="row bg-white">
	     		<div class="col-md-12">
	     			<div class="col-md-6 col-md-offset-3">
	     				<div class="class-holder form-horizontal">
	     					 {!! Form::open(array('url' => 'promotion/index', 'files' => true)) !!}
	     					  <div class="form-group {{ $errors->has('class')? 'has-error':'' }}">
		     					    {!! Form::label('class','Class', ['class'=>'col-sm-2']) !!}
		     					    

			                        <div class="col-sm-10 ">

			                            {!! Form::select('class', array( 'One'=>'One',  'Two'=>'Two'), null, ['class'=>'form-control']) !!}
			                            {!!  $errors->first('class','<span class="help-block">:message</span>')   !!}
			                        </div>

			                    </div>
							</div>						
	     					 {!!  Form::close()   !!}	
	     				</div>
	     			</div>
	     		</div>
	     	</div>
			<div id="datatable">


				{{--		@include('admin.datatable')--}}
			</div>
		</div>

	</div>


 @endsection


