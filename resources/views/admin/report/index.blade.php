@extends('admin.layouts.admin')

@section('head')
	{!! Html::style('css/styles.css') !!}

@endsection

@section('content')
	<div class="container-fluid">

		<div class="row first">
			<div class="col-md-12">
				<div class="student-box-header">
					<div class="col-md-6">
						<i class="fa fa-clipboard"></i> Report
					</div>
					<div class="col-md-6 snt">
						<ul class="breadcrumb text-right">
							<li>
								<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
								<a href="#">Dashboard</a></li>
							<li class="active">Report</li>
						</ul>
					</div>
				</div>
			</div>
		</div> <!--row first-->
        <div class="inner-box">
			<div class="row margin-top-area">
				<div class="col-md-12 snt media">
					<div class="row">
						<div class="col-sm-12">
							<div class="row form-horizontal">
								 {!! Form::open(array('url' => 'report/index', 'files' => true)) !!}
								<div class="form-group {{ $errors->has('teacher_name')? 'has-error':'' }}">
                       			 {!! Form::label('teacher','Teacher Report', ['class'=>'col-sm-2 control-label']) !!}
									<div class="col-sm-2">
										{!! Form::select('teacher_name', array( 'Rakib',  'Rana'), 'Male', ['class'=>'form-control']) !!}
                            			{!!  $errors->first('teacher_name','<span class="help-block">:message</span>')   !!}
									</div>
									<div class="col-sm-8">
										<input type="submit" value="Generate" class="btn btn-primary">
									</div>
								</div>
								 {!!  Form::close()   !!}
							</div>

							<div class="row form-horizontal">
								
							{!! Form::open(array('url' => 'report/index', 'files' => true)) !!}
								<div class="form-group {{ $errors->has('student_report')? 'has-error':'' }}">
                       			 {!! Form::label('student','Student Report', ['class'=>'col-sm-2 control-label']) !!}
										<div class="col-sm-2">
											{!! Form::select('student_report', array( 'Rakib',  'Rana'), 'Male', ['class'=>'form-control']) !!}
                            			{!!  $errors->first('student_report','<span class="help-block">:message</span>')   !!}
										</div>

										<div class="col-sm-2">
											{!! Form::select('studentr_section', array( 'Rakib',  'Rana'), 'Male', ['class'=>'form-control']) !!}
                            			{!!  $errors->first('studentr_section','<span class="help-block">:message</span>')   !!}
										</div>

										<div class="col-sm-6">
											<input type="submit" value="Generate" class="btn btn-primary">
										</div>
									</div>
								</form>
							</div>
							<div class="row">
								<form>
									<div class="form-group">
										<label class="col-sm-2 control-label">
											Class Routine Report
										</label>
										<div class="col-sm-2">
											<select class="form-control">
												<option>Select Class</option>
											</select>
										</div>

										<div class="col-sm-2">
											<select class="form-control">
												<option value="0">Select Section</option>
											</select>
										</div>
										<div class="col-sm-6">
											<input type="submit" value="Generate" class="btn btn-primary">
										</div>
									</div>
								</form>
							</div>
							<div class="row">
								<form>
									<div class="form-group">
										<label class="col-sm-2 control-label">
											Balance Report
										</label>
										<div class="col-sm-2">
											<select class="form-control">
												<option>Select Class</option>
											</select>
										</div>

										<div class="col-sm-2">
											<select class="form-control">
												<option value="0">Select Section</option>
											</select>
										</div>

										<div class="col-sm-6">
											<input type="submit" value="Generate" class="btn btn-primary">
										</div>
									</div>
								</form>
							</div>
							<div class="row">
								<form>
									<div class="form-group">
										<label class="col-sm-2 control-label">
											Student Mark Report                        </label>
										<div class="col-sm-2">
											<select class="form-control">
												<option value="">Select Exam</option>
											</select>
										</div>
										<div class="col-sm-2">
											<select class="form-control">
												<option>Select Class</option>
											</select>
										</div>
										<div class="col-sm-2">
											<select class="form-control">
												<option value="0">Select Subject</option>
											</select>
										</div>
										<div class="col-sm-1">
											<input type="submit" value="Generate" class="btn btn-primary">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div> <!--col-md-12 snt mail-->
			</div> <!--row second-->
		</div>
	</div>

	@endsection


