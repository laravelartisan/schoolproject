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
						<span class="glyphicon glyphicon-list " aria-hidden="true"></span>Exam Attendance
					</div>
					<div class="col-md-6 snt">
						<ul class="breadcrumb text-right">
							<li>
								<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
								<a href="#">Dashboard</a></li>
							<li class="active">Exam Attendance</li>
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
									<label class="col-sm-2 control-label">
											Exam
									</label>
									<div class="col-sm-10">
										<select class="form-control">		
											<option>Select Exam</option>
											<option>1st Semester</option>
											<option>2nd Semester</option>
											<option>3rd Semester</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">
											Class
									</label>
									<div class="col-sm-10">
										<select class="form-control">		
											<option>Select Class</option>
											<option>One</option>
											<option>Two</option>
											<option>Three</option>
											<option>Four</option>
											<option>Five</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-2 control-label">
											Subject
									</label>
									<div class="col-sm-10">
										<select class="form-control">		
											<option>Select subject</option>
											<option>Bangla</option>
											<option>English</option>
											<option>Mathmatics</option>
										</select>
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


