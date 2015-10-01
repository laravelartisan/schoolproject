@extends('admin.layouts.admin')


@section('head')
    {!! Html::style('css/styles.css') !!}
@endsection



@section('content')
    <div class="container-fluid" style="min-height: 1215px;">
     	<div class="row">
            <div class="col-md-12">
                <div class="student-box-header">
                    <div class="col-md-6">
                       <i class="fa fa-list-ol"></i> Issue
                    </div>
                    <div class="col-md-6 snt">
                       <ul class="breadcrumb text-right">
                            <li>
                            <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                            <a href="#">Dashboard</a></li>
                            <li class="active">Issue</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row-->
        <div class="inner-box">
         	<div class="row margin-top-area">     		    
         		<div class="col-md-8 snt form-horizontal">
                    {!! Form::open(array('url' => 'library/book/add', 'files' => true)) !!}
                           

                            
                            <div class="form-group {{ $errors->has('library_id')? 'has-error':'' }}">
                        {!! Form::label('library_id','Library ID  ', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('library_id',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('library_id','<span class="help-block">:message</span>')   !!}
                            </div>

                        </div> 

                        <div class="form-group {{ $errors->has('book')? 'has-error':'' }}">
                        {!! Form::label('book','Book  ', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('book',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('book','<span class="help-block">:message</span>')   !!}
                            </div>

                        </div> 

                        <div class="form-group {{ $errors->has('authore')? 'has-error':'' }}">
                        {!! Form::label('authore','Authore  ', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('authore',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('authore','<span class="help-block">:message</span>')   !!}
                            </div>

                        </div> 

                        <div class="form-group {{ $errors->has('subject_code')? 'has-error':'' }}">
                        {!! Form::label('subject_code','Subject Code  ', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('subject_code',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('subject_code','<span class="help-block">:message</span>')   !!}
                            </div>
                        </div> 

                        <div class="form-group {{ $errors->has('serial_no')? 'has-error':'' }}">
                        {!! Form::label('serial_no','Serial No ', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('serial_no',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('serial_no','<span class="help-block">:message</span>')   !!}
                            </div>
                        </div>

                       <div class="form-group {{ $errors->has('due_date')? 'has-error':'' }}">
                        {!! Form::label('due_date','Due date', ['class'=>'col-sm-2 control-label']) !!}
                        {{--<label for="inputName" class="col-sm-2 control-label">Date of Birth</label>--}}
                        <div class="col-sm-10">
                            <div class='input-group date' id='datetimepicker'>
                                {!! Form::input('date','due_date',date('d/m/Y'),['class'=>'form-control']) !!}

                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                                {!!  $errors->first('due_date','<span class="help-block">:message</span>')   !!}
                            </div>
                        </div>
                    </div>

                         <div class="form-group {{ $errors->has('fine')? 'has-error':'' }}">
                        {!! Form::label('fine','Fine  ', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('fine',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('fine','<span class="help-block">:message</span>')   !!}
                            </div>
                        </div>  


                        <div class="form-group {{ $errors->has('note')? 'has-error':'' }}">
                        {!! Form::label('note','Note  ', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::textarea('note',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('note','<span class="help-block">:message</span>')   !!}
                            </div>
                        </div>  


                        <div class="text-right">
                             {!! Form::submit('Add Issue',['class'=>'btn btn-success','readonly'=>'readonly']) !!}
                               
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
            $(function() {
                $('#datetimepicker').datetimepicker({

                });
            });
        });

    </script>

@endsection