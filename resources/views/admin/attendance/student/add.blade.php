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
						<span class="glyphicon glyphicon-user " aria-hidden="true"></span>Student Attendance
					</div>
					<div class="col-md-6 snt">
						<ul class="breadcrumb text-right">
							<li>
								<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
								<a href="#">Dashboard</a></li>
							<li class="active">Student Attendance</li>
						</ul>
					</div>
				</div>
			</div>
		</div> <!--row-->



		<div class="row">
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
								<br>
							<label for="">Class</label>
							<select id='classname' class="form-control">
								<option>Select Class</option>
								<option>One</option>
								<option>Two</option>
								<option>Three</option>
								<option>Four</option>
								<option>Five</option>
							</select>
							<br>
							<label for="">Class</label>
							<select id='classname' class="form-control">
								<option>Select Class</option>
								<option>One</option>
								<option>Two</option>
								<option>Three</option>
								<option>Four</option>
								<option>Five</option>
							</select>
							<input type="submit" value="Submit">

						</form>
					</div>
				</div>
			</div>

		</div>

{{--@include('admin.datatable')--}}
		<div class="row">
			<div class="col-sm-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Data Table With Full Features</h3>
					</div><!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
							<tr>
								<th>ID</th>
								<th>NAME</th>
								<th>EMAIL</th>
								<th>TYPE</th>
								<th>GRADE</th>
							</tr>
							</thead>
							<tbody>

							@for ($i = 0; $i < 15; $i++)
								<tr>
									<td>Trident</td>
									<td>Internet
										Explorer 4.0</td>
									<td>Win 95+</td>
									<td> 4</td>
									<td>X</td>
								</tr>
							@endfor




							<tr>
								<td>Other browsers</td>
								<td>All others</td>
								<td>-</td>
								<td>-</td>
								<td>U</td>
							</tr>
							</tbody>
							<tfoot>
							<tr>
								<th>Rendering engine</th>
								<th>Browser</th>
								<th>Platform(s)</th>
								<th>Engine version</th>
								<th>CSS grade</th>
							</tr>
							</tfoot>
						</table>
					</div><!-- /.box-body -->
				</div><!-- /.box -->
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




@endsection
