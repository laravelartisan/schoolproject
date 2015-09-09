@extends('admin.layouts.admin')

@section('head')
	{!! Html::style('css/styles.css') !!}
	<link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row margin-top-area">
			<div class="col-md-1d2 snt massage">
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
									</div><!-- /.box-header -->
									<div class="box-body">
										<table id="example1" class="table table-bordered table-striped">
											<thead>
												<tr>
													<th>#</th>
													<th>Status</th>
													<th>Name</th>
													<th>Subject</th>
													<th>Attach</th>
													<th>Time</th>
												</tr>
											</thead>
											<tbody>

											@for ($i = 0; $i < 15; $i++)
												<tr>
													<td><input type="checkbox" class="checkbox btn btn-warning"></td>
													<td>
														<a href="#" class="fav"><i class="fa fa-star-o text-yellow"></i></a>
													</td>
													<td>Adam sindora</td>
													<td class="text-bold">Lorem ipso</td>
													<td></td>
													<td>13 Aug 2015 21.29 PM</td>
												</tr>
											@endfor




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