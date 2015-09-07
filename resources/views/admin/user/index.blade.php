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

		<div class="row bg-white">
			<div class="col-md-12">
				<div class="add-student">
					<a class="admore" href="{{ url('user/add') }}"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>Add a User</a>
				</div>
			</div>
		</div>



		@include('admin.datatable')
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
