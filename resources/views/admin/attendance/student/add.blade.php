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


		<div class="inner-box">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6 col-md-offset-3">
						<div class="form-inner form-horizontal">	
							 {!! Form::open(array('url' => 'attendance/student/add', 'files' => true)) !!}
								
								<div class="form-group {{ $errors->has('class')? 'has-error':'' }}">
	                            {!! Form::label('class','Class', ['class'=>'col-sm-2 text-right']) !!}                                     

	                            <div class="col-sm-10 ">

	                                {!! Form::select('class', array( 'One'=>'One',  'Two'=>'Two'), null, ['class'=>'form-control']) !!}
	                                {!!  $errors->first('class','<span class="help-block">:message</span>')   !!}
	                            </div>

                        	</div>

								<div class="form-group {{ $errors->has('date')? 'has-error':'' }}">
                        {!! Form::label('date','Date', ['class'=>'col-sm-2 text-right']) !!}
                        {{--<label for="inputName" class="col-sm-2 control-label">Date of Birth</label>--}}
                        <div class="col-sm-10">
                            <div class='input-group date' id='datetimepicker'>
                                {!! Form::input('date','date',date('d/m/Y'),['class'=>'form-control']) !!}

                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                                {!!  $errors->first('date','<span class="help-block">:message</span>')   !!}
                            </div>
                        </div>
                    </div>
								<div class="form-group">
									<div class="col-sm-12 text-right">
										 {!! Form::submit('View Attendance',['class'=>'btn btn-success','readonly'=>'readonly']) !!}
									</div>
								</div>
							 {!!  Form::close()   !!}
						</div>
					</div>
				</div>
			</div>

	{{--@include('admin.datatable')--}}
			<div class="row">
				<div class="col-sm-12">
					<div class="box">
						<div class="box-header">
						</div>
						<div class="box-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
								<tr>
									<th>#</th>
									<th>Photo</th>
									<th>Name</th>
									<th>Section</th>
									<th>Roll</th>
									<th>Phone</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody>

								@for ($i = 0; $i < 15; $i++)
									<tr>
										<td>1</td>
										<td><span class="glyphicon glyphicon-user fa-man" aria-hidden="true"></span></td>
										<td>Habibul Bashar</td>
										<td>A</td>
										<td>118203</td>
										<td>01789-99 88 77</td>
										<td><div class="checkbox">
										    <label>
										      <input type="checkbox" data-original-title="Add student attendance" data-toggle="tooltip" data-placement="">
										    </label>
										  </div>
                                        </td>
									</tr>
								@endfor




								<tr>
									<td>Other browsers</td>
									<td>All others</td>
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
								</tr>
								</tfoot>
							</table>
						</div><!-- /.box-body -->
					</div><!-- /.box -->
				</div>
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
