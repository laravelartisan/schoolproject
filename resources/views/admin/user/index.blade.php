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
						<span class="glyphicon glyphicon-user " aria-hidden="true"></span>User
					</div>
					<div class="col-md-6 snt">
						<ul class="breadcrumb text-right">
							<li>
								<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
								<a href="#">Dashboard</a></li>
							<li class="active">User</li>
						</ul>
					</div>
				</div>
			</div>
		</div> <!--row-->
      <div class="inner-box">
		<div class="row bg-white">
			<div class="col-md-12">
				<div class="add-student">
					<a class="admore" href="{{ url('user/add') }}"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add a User</a>
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
								<th>Type</th>
								<th>Action</th>

							</tr>
							</thead>
							<tbody>
							{{ $slno = 1 }}
							@foreach($usersWithPhotos as $photo => $user){{--@for ($i = 0; $i < 15; $i++)--}}
								<tr>
									<td>{{ $slno++ }}</td>
									<td>{!!  Html::image('imagecache/table/'.$photo) !!}</td>
									{{--<td><span class="glyphicon glyphicon-user fa-man" aria-hidden="true"></span></td>--}}
									<td>{{ $user->name }}</td>
									<td>{{ $user->email }}</td>
									<td>{{ $user->user_type }}</td>
									<td>
									<a class="btn btn-primary btn-xs mrg" href="#">
                                        <i class="fa fa-check-square-o"></i></a>
                                        <a class="btn btn-warning btn-xs mrg" href="#"><i class="fa fa-edit"></i></a>

                                        <a  class="btn btn-danger btn-xs mrg" href="#"><i class="fa fa-trash-o"></i></a>   </td>

								</tr>
							@endforeach




							<tr>
								<td>Other browsers</td>
								<td>All others</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>

							</tr>
							</tbody>

						</table>
					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
		</div>
		</div> <!--inner-box-->
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
