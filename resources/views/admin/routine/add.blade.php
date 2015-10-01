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
                       <span class="glyphicon glyphicon-calendar " aria-hidden="true"></span>Routine
                    </div>
                    <div class="col-md-6 snt">
                       <ul class="breadcrumb text-right">
                            <li>
                            <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                            <a href="#">Dashboard</a></li>
                            <li class="active">Routine</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row-->
       <div class="inner-box">
         	<div class="row margin-top-area">
         		<div class="col-md-8 snt form-horizontal ">
                     {!! Form::open(array('url' => 'foutine/add', 'files' => true)) !!}
                            <div class="form-group {{ $errors->has('class')? 'has-error':'' }}">
                                        {!! Form::label('class','Exam', ['class'=>'col-sm-2 control-label']) !!}
                                        

                                        <div class="col-sm-10 ">

                                            {!! Form::select('class', array( '1st Semester'=>'1st Semester'), null, ['class'=>'form-control']) !!}
                                            {!!  $errors->first('class','<span class="help-block">:message</span>')   !!}
                                        </div>

                                    </div>


                            <div class="form-group {{ $errors->has('class')? 'has-error':'' }}">
                                        {!! Form::label('class','Class', ['class'=>'col-sm-2 control-label']) !!}
                                        

                                        <div class="col-sm-10 ">

                                            {!! Form::select('class', array( 'One'=>'One',  'Two'=>'Two'), null, ['class'=>'form-control']) !!}
                                            {!!  $errors->first('class','<span class="help-block">:message</span>')   !!}
                                        </div>

                                    </div>


                           <div class="form-group {{ $errors->has('section')? 'has-error':'' }}">
                                        {!! Form::label('section','Section', ['class'=>'col-sm-2 control-label']) !!}
                                        

                                        <div class="col-sm-10 ">

                                            {!! Form::select('section', array( 'A'=>'A',  'B'=>'B'), null, ['class'=>'form-control']) !!}
                                            {!!  $errors->first('section','<span class="help-block">:message</span>')   !!}
                                        </div>

                                    </div>
                            <div class="form-group {{ $errors->has('sebject')? 'has-error':'' }}">
                                        {!! Form::label('sebject','Sebject', ['class'=>'col-sm-2 control-label']) !!}
                                        

                                        <div class="col-sm-10 ">

                                            {!! Form::select('sebject', array( 'Bangla'=>'Bangla',  'English'=>'English'), null, ['class'=>'form-control']) !!}
                                            {!!  $errors->first('sebject','<span class="help-block">:message</span>')   !!}
                                        </div>

                                    </div>

                            <div class="form-group {{ $errors->has('date')? 'has-error':'' }}">
                        {!! Form::label('date','Date', ['class'=>'col-sm-2 control-label']) !!}
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

                    <div class="form-group {{ $errors->has('sart_time')? 'has-error':'' }}">
                        {!! Form::label('sart_time','Time From  ', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('sart_time',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('sart_time','<span class="help-block">:message</span>')   !!}
                            </div>

                        </div> 

                        <div class="form-group {{ $errors->has('end_time')? 'has-error':'' }}">
                        {!! Form::label('end_time','Time To  ', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('end_time',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('end_time','<span class="help-block">:message</span>')   !!}
                            </div>

                        </div> 

                        <div class="form-group {{ $errors->has('room')? 'has-error':'' }}">
                        {!! Form::label('room','Room ', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('room',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('room','<span class="help-block">:message</span>')   !!}
                            </div>

                        </div> 
                        <div class="text-right">
                             {!! Form::submit('Add routine',['class'=>'btn btn-success','readonly'=>'readonly']) !!}
                               
                            </div>
                        {!!  Form::close()   !!}
         		</div>
         	</div>
        </div>
    </div>


   @endsection


@section('datascript')
    <script type="text/javascript">

        $(document).ready(function(){
            /*$(function() {
                $('#datetimepicker').datetimepicker({

                });
            });*/
            //alert($(".parent").children());
        });

    </script>

@endsection