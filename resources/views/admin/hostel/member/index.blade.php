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
                       <span class="glyphicon glyphicon-user " aria-hidden="true"></span> Member
					</div>
					<div class="col-md-6 snt">
					   <ul class="breadcrumb text-right">
							<li>
							<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
							<a href="#">Dashboard</a></li>
							<li class="active">Member</li>
						</ul>
					</div>
				</div>
     		</div>
     	</div> <!--row-->
		<div class="inner-box">
	     	<div class="row bg-white">
	     		<div class="col-md-12">
	                 <div class="add-student">
	                 	<a class="admore" href="{{ url('student/add') }}"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>Add a student</a>
	                 </div>
	     		</div>

	     		<div class="col-md-12">
	     			<div class="col-md-6 col-md-offset-3">
	     				<div class="class-holder">
	     					<form>
	     					    <label for="">Class</label>
	     					 	<select id='classname' class="form-control">
	     					 	 <option>Select Class</option>
								  <option>One</option>
								  <option>Two</option>
								  <option>Three</option>
								  <option>Four</option>
								  <option>Five</option>
								</select>
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


