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
						<span class="glyphicon glyphicon-user " aria-hidden="true"></span>Teachers
					</div>
					<div class="col-md-6 snt">
						<ul class="breadcrumb text-right">
							<li>
								<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
								<a href="#">Dashboard</a></li>
							<li class="active">Teachers Attendance</li>
						</ul>
					</div>
				</div>
			</div>
		</div> <!--row-->
      <div class="inner-box">
		<div class="row bg-white">
			<div class="col-md-12">
				<div class="add-student">
					<a class="admore" href="{{ url('teacher/add') }}"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add Teacher Attendance</a>

				</div>
			</div>
		</div>



		{{--@include('admin.datatable')--}}
		<div class="row">
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
								<th>Action</th>
								
							</tr>
							</thead>
							<tbody>
								{{ $slno = 1 }}
							@foreach($usersWithPhotos as $photo => $user) {{--($i = 0; $i < 15; $i++)--}}
								<tr>
									<td>{{ $slno++ }}</td>
									{{-- <td>{!!  Html::image('imagecache/table/'.$photo) !!}</td> --}}
									<td><span class="glyphicon glyphicon-user fa-man" aria-hidden="true"></span></td>
									<td>{{ $user->name }}</td>
									<td>{{ $user->email }}</td>
									<td>
									<a class="btn btn-primary btn-xs mrg" data-original-title="View" data-toggle="tooltip" href="{{ url('att/view',[$user->id,2]) }}">
                                        <i class="fa fa-check-square-o"></i></a> 
                                    </td>
									
								</tr>
							@endforeach




							<tr>
								<td>Other browsers</td>
								<td>All others</td>
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




@endsection
