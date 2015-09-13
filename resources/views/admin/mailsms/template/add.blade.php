@extends('admin.layouts.admin')


@section('head')
    {!! Html::style('css/styles.css') !!}
@endsection



@section('content')
    <div class="container-fluid" style="min-height: 1215px;">
        <div class="row first">
            <div class="col-md-12">
                <div class="student-box-header">
                    <div class="col-md-6">
                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span>Mail / SMS Template
                    </div>
                    <div class="col-md-6 snt">
                        <ul class="breadcrumb text-right">
                            <li>
                                <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                                <a href="#">Dashboard</a></li>
                            <li class="active">Student</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row-->
       <div class="inner-box">
            <div class="row margin-top-area">
                <div class="col-md-12 snt mail">
                    <div id="exTab2">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a  href="#1" data-toggle="tab">Email</a>
                            </li>
                            <li>
                                <a href="#2" data-toggle="tab">SMS
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content col-md-8 margin-top-area">
                            <div class="tab-pane form-horizontal active" id="1">

                               {!! Form::open(array('url' => 'mailsms/template/add', 'files' => true)) !!} 
                                    <div class="form-group {{ $errors->has('name')? 'has-error':'' }}">
                                        {!! Form::label('name','Name', ['class'=>'col-sm-2 control-label']) !!}

                                        <div class="col-sm-10">
                                            {!! Form::text('name',null,['class'=>'form-control']) !!}
                                            {!!  $errors->first('name','<span class="help-block">:message</span>')   !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('user')? 'has-error':'' }}">
                                        {!! Form::label('user','User', ['class'=>'col-sm-2 control-label']) !!}

                                        <div class="col-sm-10 ">

                                            {!! Form::select('user', array( 'Student',  'Parent'), 'Select user', ['class'=>'form-control']) !!}
                                            {!!  $errors->first('user','<span class="help-block">:message</span>')   !!}
                                        </div>

                                    </div>
                                    <div class="form-group {{ $errors->has('tag')? 'has-error':'' }}">
                                        {!! Form::label('tag','Tag', ['class'=>'col-sm-2 control-label']) !!}

                                        <div class="col-sm-10">
                                            {!! Form::textarea('tag',null,['class'=>'form-control']) !!}
                                            {!!  $errors->first('tag','<span class="help-block">:message</span>')   !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('template')? 'has-error':'' }}">
                                        {!! Form::label('template','Template', ['class'=>'col-sm-2 control-label']) !!}

                                        <div class="col-sm-10">
                                            {!! Form::textarea('template',null,['class'=>'form-control']) !!}
                                            {!!  $errors->first('template','<span class="help-block">:message</span>')   !!}
                                        </div>
                                    </div>

                                    <div class="form-group">     
                                        <div class="col-sm-12 text-right">
                                          {!! Form::submit('Submit',['class'=>'btn btn-success','readonly'=>'readonly']) !!}
                                          </div>
                                    </div>

                                 {!!  Form::close()   !!}

                            </div> <!--tab-1-->
                            <div class="tab-pane form-horizontal margin-top-area" id="2">
                                {!! Form::open(array('url' => 'mailsms/template/add', 'files' => true)) !!} 
                                    <div class="form-group {{ $errors->has('name')? 'has-error':'' }}">
                                        {!! Form::label('name','Name', ['class'=>'col-sm-2 control-label']) !!}

                                        <div class="col-sm-10">
                                            {!! Form::text('name',null,['class'=>'form-control']) !!}
                                            {!!  $errors->first('name','<span class="help-block">:message</span>')   !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('user')? 'has-error':'' }}">
                                        {!! Form::label('user','User', ['class'=>'col-sm-2 control-label']) !!}

                                        <div class="col-sm-10 ">

                                            {!! Form::select('user', array( 'Student',  'Parent'), 'Select user', ['class'=>'form-control']) !!}
                                            {!!  $errors->first('user','<span class="help-block">:message</span>')   !!}
                                        </div>

                                    </div>
                                    <div class="form-group {{ $errors->has('tag')? 'has-error':'' }}">
                                        {!! Form::label('tag','Tag', ['class'=>'col-sm-2 control-label']) !!}

                                        <div class="col-sm-10">
                                            {!! Form::textarea('tag',null,['class'=>'form-control']) !!}
                                            {!!  $errors->first('tag','<span class="help-block">:message</span>')   !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('template')? 'has-error':'' }}">
                                        {!! Form::label('template','Template', ['class'=>'col-sm-2 control-label']) !!}

                                        <div class="col-sm-10">
                                            {!! Form::textarea('template',null,['class'=>'form-control']) !!}
                                            {!!  $errors->first('template','<span class="help-block">:message</span>')   !!}
                                        </div>
                                    </div>

                                    <div class="form-group">     
                                        <div class="col-sm-12 text-right">
                                          {!! Form::submit('Submit',['class'=>'btn btn-success','readonly'=>'readonly']) !!}
                                          </div>
                                    </div>

                                 {!!  Form::close()   !!}
                            </div> <!--tab-2-->
                        </div> <!--tab content-->
                    </div> <!--exTab2-->
                </div> <!--col-md-12 snt mail-->
            </div> <!--row first-->
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