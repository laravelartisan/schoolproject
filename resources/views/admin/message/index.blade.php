@extends('admin.layouts.admin')

@section('head')
	{!! Html::style('css/styles.css') !!}
	<link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('content')
	<div class="container-fluid">


		<div class="row first">
			<div class="col-md-12">
				<div class="student-box-header">
					<div class="col-md-6">
						<span class="glyphicon glyphicon-book" aria-hidden="true"></span>Mail / SMS Template
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
		</div> <!--row first-->

		<div class="row margin-top-area">
			<div class="col-md-12 snt massage">
				<div class="col-sm-3">
					<button type="button" class="btn btn-primary btn-lg btn-block">Compose</button>
					<div class="folder-wrapper">
						<div class="folder-title">
							<i class="fa fa-folder"></i> Folders
						</div>
						<ul class="folder-item">
							<li><a href="#"><i class="fa fa-inbox"></i>
									Inbox</a></li>
							<li><a href="#">
									<i class="fa fa-envelope-o"></i> Sent</a></li>
							<li><a href="#">
									<i class="fa fa-star-o"></i> Favourit</a></li>
							<li><a href="#"><i class="fa fa-trash-o"></i> Trash </a></li>
						</ul>
					</div>
				</div> <!--col-sm-3-->
				<div class="col-sm-9">
					<div class="folder-title"> Favorite </div>
					<div class="favorite-wrapper">
						<div class="btn-group">
							<button data-placement="top" data-toggle="tooltip" data-original-title="Selete mail" class="btn btn-info btn-sm" id="all">
								<i class="fa fa-square-o"></i>
							</button>
							<button data-placement="top" data-toggle="tooltip" data-original-title="Delete mail" id="delete_submit" class="btn btn-danger btn-sm">
								<i class="fa fa-trash-o"></i>
							</button>
							<button data-placement="top" data-toggle="tooltip" data-original-title="Refresh" id="refresh" class="btn btn-primary btn-sm">
								<i class="fa fa-refresh"></i>
							</button>
						</div>

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

					</div> <!--favorite-wrapper-->
				</div> <!--col-sm-9-->
			</div> <!--col-md-12 snt mail-->
		</div> <!--row second-->


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