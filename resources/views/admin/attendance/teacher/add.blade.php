@extends('admin.layouts.admin')

@section('head')
	{!! Html::style('css/styles.css') !!}

@endsection
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="student-box-header">
					<div class="col-md-6">
						<span class="glyphicon glyphicon-user " aria-hidden="true"></span>Teacher Attendance
					</div>
					<div class="col-md-6 snt">
						<ul class="breadcrumb text-right">
							<li>
								<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
								<a href="#">Dashboard</a></li>
							<li class="active">Teacher Attendance</li>
						</ul>
					</div>
				</div>
			</div>
		</div> <!--row-->


        <div class="inner-box">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6 col-md-offset-3">
						<div class="form-inner">	
							<form>
								<div class="form-group">
		                            <label for="inputName" class="col-sm-2 control-label">Date</label>
		                            <div class="col-sm-10">
		                                <input type="text" class="form-control" id="#" >
		                            </div>
		                        </div>
								
								<div class="form-group">
									<div class="col-sm-12 text-right">
										<input class="btn btn-primary" type="submit" value="View Attendance">
									</div>
								</div>
							</form>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




 @endsection

