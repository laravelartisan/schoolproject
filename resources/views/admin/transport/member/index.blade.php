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
                       <span class="glyphicon glyphicon-user " aria-hidden="true"></span>Transport Member
					</div>
					<div class="col-md-6 snt">
					   <ul class="breadcrumb text-right">
							<li>
							<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
							<a href="#">Dashboard</a></li>
							<li class="active">Transport Member</li>
						</ul>
					</div>
				</div>
     		</div>
     	</div> <!--row-->
		<div class="inner-box">
	     	<div class="row bg-white">
	     		

	     		<div class="col-md-12">
	     			<div class="col-md-6 col-md-offset-3">
	     				<div class="form-inner">
	     					<form>
	     					    <div class="form-group">
									<label class="col-sm-2 control-label">
											Class
									</label>
									<div class="col-sm-10">
										<select class="form-control" id="classname">		
											<option>Select Class</option>
											<option>One</option>
											<option>Two</option>
											<option>Three</option>
											<option>Four</option>
											<option>Five</option>
										</select>
									</div>
								</div>
	     					 </form>
	     				</div>
	     			</div>
	     		</div>
	     	</div>
			<div id="datatable">

				{{--		@include('admin.attdatatable')--}}
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
				var className = $(this).find('option:selected').val();
				/* setting input box value to selected option value */

				/*alert(option);*/
				var host = window.location.origin ;


				$.ajax({
					url: host + '/student/' + className,
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
