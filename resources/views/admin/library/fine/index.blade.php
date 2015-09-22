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
						<i class="fa fa-scissors"></i> Fine
					</div>
					<div class="col-md-6 snt">
						<ul class="breadcrumb text-right">
							<li>
								<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
								<a href="#">Dashboard</a></li>
							<li class="active">Fine</li>
						</ul>
					</div>
				</div>
			</div>
		</div> <!--row-->


        <div class="inner-box">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6 col-md-offset-3">					<div class="form-inner">	
							 {!! Form::open(array('url' => 'library/fine/add', 'files' => true)) !!}

								 <div class="form-group {{ $errors->has('day')? 'has-error':'' }}">
			                        {!! Form::label('day','Day', ['class'=>'col-sm-2 control-label']) !!}

			                        <div class="col-sm-10 ">

			                            {!! Form::select('day', array( '1'=>'1',  '2'=>'2'), null, ['class'=>'form-control']) !!}
			                            {!!  $errors->first('day','<span class="help-block">:message</span>')   !!}
			                        </div>

			                    </div>

			                     <div class="form-group {{ $errors->has('month')? 'has-error':'' }}">
		                        {!! Form::label('month','Month', ['class'=>'col-sm-2 control-label']) !!}

		                        <div class="col-sm-10 ">

		                            {!! Form::select('month', array( 'January'=>'January',  'February'=>'February'), null, ['class'=>'form-control']) !!}
		                            {!!  $errors->first('month','<span class="help-block">:message</span>')   !!}
		                        </div>

		                    </div>

		                     <div class="form-group {{ $errors->has('year')? 'has-error':'' }}">
		                        {!! Form::label('year','Year', ['class'=>'col-sm-2 control-label']) !!}

		                        <div class="col-sm-10 ">

		                            {!! Form::select('year', array( '2010'=>'2010',  '2011'=>'2011'), null, ['class'=>'form-control']) !!}
		                            {!!  $errors->first('year','<span class="help-block">:message</span>')   !!}
		                        </div>

		                    </div>
								
								<div class="form-group">
									<div class="col-sm-12 text-right">
										 {!! Form::submit('Fine',['class'=>'btn btn-success','readonly'=>'readonly']) !!}

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


