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
						<span class="glyphicon glyphicon-shopping-cart " aria-hidden="true"></span>Mark
					</div>
					<div class="col-md-6 snt">
						<ul class="breadcrumb text-right">
							<li>
								<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
								<a href="#">Dashboard</a></li>
							<li class="active">Add Mark</li>
						</ul>
					</div>
				</div>
			</div>
		</div> <!--row-->
 		<div class="inner-box">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6 col-md-offset-3">
						<div class="form-inner form-horizontal ">	
							{!! Form::open(array('url' => 'mark/add', 'files' => true)) !!}

							<div class="form-group {{ $errors->has('exam')? 'has-error':'' }}">
	                            {!! Form::label('exam','Exam ', ['class'=>'col-sm-2 control-lebel ']) !!}                                     

	                            <div class="col-sm-10 ">

	                                {!! Form::select('exam', array( '1st Semester'=>'1st Semester',  '2nd Semester'=>'2nd Semester'), null, ['class'=>'form-control']) !!}
	                                {!!  $errors->first('exam','<span class="help-block">:message</span>')   !!}
	                            </div>

                        	</div>

                        	<div class="form-group {{ $errors->has('class')? 'has-error':'' }}">
	                            {!! Form::label('class','Class', ['class'=>'col-sm-2 ']) !!}                                     

	                            <div class="col-sm-10 ">

	                                {!! Form::select('class', array( 'One'=>'One',  'Two'=>'Two'), null, ['class'=>'form-control']) !!}
	                                {!!  $errors->first('class','<span class="help-block">:message</span>')   !!}
	                            </div>

                        	</div>

								
								<div class="form-group {{ $errors->has('subject')? 'has-error':'' }}">
	                            {!! Form::label('subject','Subject', ['class'=>'col-sm-2 ']) !!}                                     

	                            <div class="col-sm-10 ">

	                                {!! Form::select('subject', array( 'Bangla'=>'Bangla',  'English'=>'English'), null, ['class'=>'form-control']) !!}
	                                {!!  $errors->first('subject','<span class="help-block">:message</span>')   !!}
	                            </div>

                        	</div>

								
								<div class="form-group">
									<div class="col-sm-12 text-right">
										
                        {!! Form::submit('Mark',['class'=>'btn btn-primary','readonly'=>'readonly']) !!}
                 
									</div>
								</div>
							{!!  Form::close()     !!}
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>


 @endsection


