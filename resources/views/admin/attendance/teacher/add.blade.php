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
						<div class="form-inner form-horizontal">	
							 {!! Form::open(array('url' => 'attendance/teacher/add', 'files' => true)) !!}
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
		</div>
	</div>




 @endsection

