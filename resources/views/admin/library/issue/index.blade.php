@extends('admin.layouts.admin')

@section('head')
	{!! Html::style('css/styles.css') !!}
	<link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('content')
	<div class="container-fluid">
	<div class="row">
     		<div class="col-md-12">
     		  	<div class="student-box-header">
					<div class="col-md-6">
                       <i class="fa fa-list-ol"></i> Issue
					</div>
					<div class="col-md-6 snt">
					   <ul class="breadcrumb text-right">
							<li>
							<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
							<a href="#">Dashboard</a></li>
							<li class="active">Issue</li>
						</ul>
					</div>
				</div>
     		</div>
     	</div> <!--row-->
		<div class="inner-box">
	     	<div class="row bg-white">
	     		<div class="col-md-12">
	                 <div class="add-student">
	                 	<a class="admore" href="{{ url('library/issue/add') }}"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Issue a Book</a>
	                 </div>
	     		</div>

	     		<div class="col-md-12">
	     			<div class="col-md-6 col-md-offset-3">
	     				<div class="class-holder">
	     				 {!! Form::open(array('url' => 'user/add', 'files' => true)) !!}
	     					<div class="form-group {{ $errors->has('library_id')? 'has-error':'' }}">
                        	{!! Form::label('library_id','Library ID ', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::search('library_id',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('library_id','<span class="help-block">:message</span>')   !!}
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

@section('datascript')
	<script src="{{ asset('bower_components/admin-lte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
	{!! Html::script('bower_components/admin-lte/plugins/datatables/dataTables.bootstrap.min.js') !!}

	<script>
		$(function () {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	</script>

	<script type="text/javascript">

		$(document).ready(function(){
			$('#classname').change(function()
			{
				/* setting currently changed option value to option variable */
				var option = $(this).find('option:selected').val();
				/* setting input box value to selected option value */

				/*alert(option);*/
				var host = window.location.origin ;


				$.ajax({
					url: host + '/student/table',
					type: "GET", // not POST, laravel won't allow it
					success: function(data){
						/*alert(data);*/
						$data = $(data); // the HTML content your controller has produced

						$('#datatable').html($data);
					}
				});

			});
		});

	</script>


@endsection
