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
                        <i class="fa fa-mail-reply"></i> Mail / SMS
                    </div>
                    <div class="col-md-6 snt">
                        <ul class="breadcrumb text-right">
                            <li>
                                <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                                <a href="#">Dashboard</a></li>
                            <li class="active">Mail / SMS</li>
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
                                {!! Form::open(array('url' => 'mailsms/mailsms/add', 'files' => true)) !!}            

                                    <div class="form-group {{ $errors->has('username')? 'has-error':'' }}">
                                        {!! Form::label('username','User', ['class'=>'col-sm-2 control-label']) !!}

                                        <div class="col-sm-10 ">

                                            {!! Form::select('username', array( 'Student',  'Teacher'), 'Select User', ['class'=>'form-control']) !!}
                                            {!!  $errors->first('username','<span class="help-block">:message</span>')   !!}
                                        </div>

                                    </div>


                                    <div class="form-group {{ $errors->has('template')? 'has-error':'' }}">
                                        {!! Form::label('template','Template', ['class'=>'col-sm-2 control-label']) !!}

                                        <div class="col-sm-10">
                                            {!! Form::select('template', array( 'Student template',  'Teacher template'), 'Select Template', ['class'=>'form-control']) !!}
                                            {!!  $errors->first('template','<span class="help-block">:message</span>')   !!}
                                        </div>

                                    </div>

                                    <div class="form-group {{ $errors->has('subject')? 'has-error':'' }}">
                                        {!! Form::label('subject','Subject', ['class'=>'col-sm-2 control-label']) !!}

                                        <div class="col-sm-10">
                                            {!! Form::text('subject',null,['class'=>'form-control']) !!}
                                            {!!  $errors->first('subject','<span class="help-block">:message</span>')   !!}
                                        </div>

                                    </div>
                                     <div class="form-group {{ $errors->has('textarea')? 'has-error':'' }}">
                                        {!! Form::label('textarea','Message', ['class'=>'col-sm-2 control-label']) !!}

                                        <div class="col-sm-10">
                                            {!! Form::textarea('textarea',null,['class'=>'form-control']) !!}
                                            {!!  $errors->first('textarea','<span class="help-block">:message</span>')   !!}
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12 text-right">
                                          {!! Form::submit('Submit',['class'=>'btn btn-success','readonly'=>'readonly']) !!}
                                        </div>
                                    </div>
                               {!!  Form::close()   !!}
                            </div> <!--tab-1-->
                            <div class="tab-pane margin-top-area form-horizontal" id="2">

                               {!! Form::open(array('url' => 'mailsms/mailsms/add', 'files' => true)) !!}            

                                    <div class="form-group {{ $errors->has('username')? 'has-error':'' }}">
                                        {!! Form::label('username','User', ['class'=>'col-sm-2 control-label']) !!}

                                        <div class="col-sm-10 ">

                                            {!! Form::select('username', array( 'Student',  'Teacher'), 'Select User', ['class'=>'form-control']) !!}
                                            {!!  $errors->first('username','<span class="help-block">:message</span>')   !!}
                                        </div>

                                    </div>


                                    <div class="form-group {{ $errors->has('template')? 'has-error':'' }}">
                                        {!! Form::label('template','Template', ['class'=>'col-sm-2 control-label']) !!}

                                        <div class="col-sm-10">
                                            {!! Form::select('template', array( 'Student template',  'Teacher template'), 'Select Template', ['class'=>'form-control']) !!}
                                            {!!  $errors->first('template','<span class="help-block">:message</span>')   !!}
                                        </div>

                                    </div>

                                    <div class="form-group {{ $errors->has('send_by')? 'has-error':'' }}">
                                        {!! Form::label('send_by','Send by', ['class'=>'col-sm-2 control-label']) !!}

                                        <div class="col-sm-10">
                                            {!! Form::text('send_by',null,['class'=>'form-control']) !!}
                                            {!!  $errors->first('send_by','<span class="help-block">:message</span>')   !!}
                                        </div>

                                    </div>
                                     <div class="form-group {{ $errors->has('massage')? 'has-error':'' }}">
                                        {!! Form::label('massage','Message', ['class'=>'col-sm-2 control-label']) !!}

                                        <div class="col-sm-10">
                                            {!! Form::textarea('massage',null,['class'=>'form-control']) !!}
                                            {!!  $errors->first('massage','<span class="help-block">:message</span>')   !!}
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