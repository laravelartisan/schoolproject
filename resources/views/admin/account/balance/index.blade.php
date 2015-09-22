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
                       <i class="fa fa-money"></i> Balance
					</div>
					<div class="col-md-6 snt">
					   <ul class="breadcrumb text-right">
							<li>
							<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
							<a href="#">Dashboard</a></li>
							<li class="active">Balance</li>
						</ul>
					</div>
				</div>
     		</div>
     	</div> <!--row-->
        <div class="inner-box">
	     	<div class="row bg-white">
	     		<div class="col-md-12">
	     			<div class="col-md-6 col-md-offset-3">
	     				<div class="class-holder">
	     					<form>
	     					    <label class="col-md-2" for="">Class</label>
	     					    <div class="col-sm-10">
		     					 	<select id='classname' class="form-control" >
		     					 	 <option>Select Class</option>
									  <option>One</option>
									  <option>Two</option>
									  <option>Three</option>
									  <option>Four</option>
									  <option>Five</option>
									</select>
								</div>							
	     					 </form>  
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


