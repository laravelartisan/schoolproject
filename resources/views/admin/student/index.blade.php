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
                       <span class="glyphicon glyphicon-user " aria-hidden="true"></span>Student
					</div>
					<div class="col-md-6 snt">
					   <ul class="breadcrumb text-right">
							<li>
							<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
							<a href="#">Dashboard</a></li>
							<li class="active">Student</li>
						</ul>
					</div>
				</div>
     		</div>
     	</div> <!--row-->
		<div class="inner-box">
	     	<div class="row bg-white">
	     		<div class="col-md-12">
	                 <div class="add-student">
	                 	<a class="admore" href="{{ url('student/add') }}"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add a student</a>
	                 </div>
	     		</div>

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
				{{--@include('admin.datatable')--}}



				<div class="row last">
					<div class="col-sm-12">
						<div class="box">
							<div class="box-header">
							</div><!-- /.box-header -->
							<div class="box-body">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
									<tr>
										<th>#</th>
										<th>Photo</th>
										<th>Name</th>
										<th>Email</th>
										<th>Class</th>
										<th>Section</th>
										<th>Roll No</th>
										<th>Action</th>

									</tr>
									</thead>
									<tbody>
									{{ $slno = 1 }}
									@foreach($usersWithPhotos as $photo => $user) {{--@for ($i = 0; $i < 15; $i++)--}}
									<tr>
										<td>{{ $slno++ }}</td>
										<td>{!!  Html::image('imagecache/table/'.$photo) !!}</td>
										{{--<td><span class="glyphicon glyphicon-user fa-man" aria-hidden="true"></span></td>--}}
										<td>{{ $user->name }}</td>
										<td>{{ $user->email }}</td>
										<td>{{ $user->class }}</td>
										<td>{{ $user->section }}</td>
										<td>{{ $user->roll }}</td>
										<td>
											<a class="btn btn-primary btn-xs mrg" data-original-title="View" data-toggle="tooltip" href="{{ url('user/view',[$user->id,1]) }}">
												<i class="fa fa-check-square-o"></i></a>
											<a class="btn btn-warning btn-xs mrg" data-original-title="Edit" data-toggle="tooltip" href="{{ url('user/edit',[$user->id,1]) }}"><i class="fa fa-edit"></i></a>

											<a  class="btn btn-danger btn-xs mrg" data-original-title="Delete" data-toggle="tooltip" href="{{ url('user/delete',[$user->id,1]) }}"><i class="fa fa-trash-o"></i></a>
										</td>

									</tr>
									@endforeach




									<tr>
										<td>Other browsers</td>
										<td>All others</td>
										<td>-</td>
										<td>-</td>
										<td>-</td>
										<td>-</td>
										<td>-</td>
										<td>-</td>

									</tr>
									</tbody>
									<tfoot>
									<tr>
										<th>Rendering engine</th>
										<th>Browser</th>
										<th>Platform(s)</th>
										<th>Engine version</th>
										<th>CSS grade</th>
										<th>Platform(s)</th>
										<th>Engine version</th>
										<th>CSS grade</th>

									</tr>
									</tfoot>
								</table>
							</div><!-- /.box-body -->
						</div><!-- /.box -->
					</div>
				</div> <!--row last-->




















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
