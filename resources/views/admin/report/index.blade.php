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
				                     <div class="form-group {{ $errors->has('teacher_transport')? 'has-error':'' }}">
				                         {!! Form::label('teacher_transportteacher_transport','Teacher Report', ['class'=>'col-sm-2 control-label']) !!}

				                        <div class="col-sm-2 ">

				                            {!! Form::select('teacher_transport', array( 'Rakib'=>'Rakib',  'Raihan'=>'Raihan'), null, ['class'=>'form-control']) !!}
				                            {!!  $errors->first('teacher_transport','<span class="help-block">:message</span>')   !!}
				                        </div>
										<div class="col-sm-2"></div>
										<div class="col-sm-2"></div>
									                          
				                        <div class="col-sm-1 text-right">
				                            {!! Form::submit('Generate',['class'=>'btn btn-primary','readonly'=>'readonly']) !!}
				                        </div>
				                    </div>
				                 {!!  Form::close()   !!}	
				                </div>

				                <div class="row form-horizontal">	

				                {!! Form::open(array('url' => 'report/index', 'files' => true)) !!}    
				                    <div class="form-group {{ $errors->has('class')? 'has-error':'' }}">
				                         {!! Form::label('class','Student Report', ['class'=>'col-sm-2 control-label']) !!}

				                        <div class="col-sm-2 ">

				                            {!! Form::select('class', array( 'One'=>'One',  'Two'=>'Two'), null, ['class'=>'form-control']) !!}
				                            {!!  $errors->first('class','<span class="help-block">:message</span>')   !!}
				                        </div>
				                        
				                        <div class="col-sm-2 ">

				                            {!! Form::select('section', array( 'A'=>'A',  'B'=>'B'), null, ['class'=>'form-control']) !!}
				                            {!!  $errors->first('section','<span class="help-block">:message</span>')   !!}
				                        </div>
				                       <div class="col-sm-2"></div>

				                        <div class="col-sm-1 text-right">
				                            {!! Form::submit('Generate',['class'=>'btn btn-primary','readonly'=>'readonly']) !!}
				                        </div>
				                    </div>
				                 {!!  Form::close()   !!}	
				                </div>


				                <div class="row form-horizontal">	

				                 {!! Form::open(array('url' => 'report/index', 'files' => true)) !!}   
				                    <div class="form-group {{ $errors->has('routine-report')? 'has-error':'' }}">
				                         {!! Form::label('routine-report','Class Routine Report', ['class'=>'col-sm-2 control-label']) !!}

				                        <div class="col-sm-2 ">

				                            {!! Form::select('routine-report', array( 'One'=>'One',  'Two'=>'Two'), null, ['class'=>'form-control']) !!}
				                            {!!  $errors->first('routine-report','<span class="help-block">:message</span>')   !!}
				                        </div>
				                        
				                        <div class="col-sm-2 ">

				                            {!! Form::select('section', array( 'A'=>'A',  'B'=>'B'), null, ['class'=>'form-control']) !!}
				                            {!!  $errors->first('section','<span class="help-block">:message</span>')   !!}
				                        </div>
				                       <div class="col-sm-2"></div>

				                        <div class="col-sm-1 text-right">
				                            {!! Form::submit('Generate',['class'=>'btn btn-primary','readonly'=>'readonly']) !!}
				                        </div>
				                    </div>
				                {!!  Form::close()   !!}	

				                </div>
				                <div class="row form-horizontal">	

				                {!! Form::open(array('url' => 'report/index', 'files' => true)) !!}     
				                    <div class="form-group {{ $errors->has('balance-report')? 'has-error':'' }}">
				                         {!! Form::label('balance-report','Balance Report', ['class'=>'col-sm-2 control-label']) !!}

				                        <div class="col-sm-2 ">

				                            {!! Form::select('balance-report', array( 'One'=>'One',  'Two'=>'Two'), null, ['class'=>'form-control']) !!}
				                            {!!  $errors->first('balance-report','<span class="help-block">:message</span>')   !!}
				                        </div>
				                        
				                        <div class="col-sm-2 ">

				                            {!! Form::select('section', array( 'A'=>'A',  'B'=>'B'), null, ['class'=>'form-control']) !!}
				                            {!!  $errors->first('section','<span class="help-block">:message</span>')   !!}
				                        </div>
				                       <div class="col-sm-2"></div>

				                        <div class="col-sm-1 text-right">
				                            {!! Form::submit('Generate',['class'=>'btn btn-primary','readonly'=>'readonly']) !!}
				                        </div>
				                    </div>
				                {!!  Form::close()   !!}	
				                </div>
				                <div class="row form-horizontal">	

				                 {!! Form::open(array('url' => 'report/index', 'files' => true)) !!}     
				                    <div class="form-group {{ $errors->has('mark_report')? 'has-error':'' }}">
				                         {!! Form::label('mark_report','Student Mark Report', ['class'=>'col-sm-2 control-label']) !!}

				                         <div class="col-sm-2 ">

				                            {!! Form::select('mark_report', array( '1st semester'=>'1st semester'), null, ['class'=>'form-control']) !!}
				                            {!!  $errors->first('mark_report','<span class="help-block">:message</span>')   !!}
				                        </div>
				                        

				                        <div class="col-sm-2 ">

				                            {!! Form::select('class', array( 'One'=>'One',  'Two'=>'Two'), null, ['class'=>'form-control']) !!}
				                            {!!  $errors->first('class','<span class="help-block">:message</span>')   !!}
				                        </div>
				                        
				                        <div class="col-sm-2 ">

				                            {!! Form::select('section', array( 'A'=>'A',  'B'=>'B'), null, ['class'=>'form-control']) !!}
				                            {!!  $errors->first('section','<span class="help-block">:message</span>')   !!}
				                        </div>
				                       

				                        <div class="col-sm-1 text-right">
				                            {!! Form::submit('Generate',['class'=>'btn btn-primary','readonly'=>'readonly']) !!}
				                        </div>
				                    </div>
				                 {!!  Form::close()   !!}	
				                </div>
				            </div>            
	        		</div>
				</div> <!--col-md-12 snt mail-->
			</div> <!--row second-->
		</div>
	</div>

	@endsection


