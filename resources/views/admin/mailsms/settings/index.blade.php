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
                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span>Mail / SMS
                    </div>
                    <div class="col-md-6 snt">
                        <ul class="breadcrumb text-right">
                            <li>
                                <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                                <a href="#">Dashboard</a></li>
                            <li class="active">SMS Setting</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row first-->
        <div class="inner-box">
            <div class="row margin-top-area">
                <div class="col-md-12 snt mail">
                    <div id="exTab2">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a  href="#1" data-toggle="tab">Clickatell</a>
                            </li>
                            <li>
                                <a href="#2" data-toggle="tab">Twilio
                                </a>
                            </li>
                            <li>
                                <a href="#3" data-toggle="tab">Bulk
                                </a>
                            </li>

                        </ul>
                        <div class="tab-content margin-top-area col-md-8 ">
                            <div class="tab-pane  active form-horizontal" id="1">
                                {!! Form::open(array('url' => 'mailsms/settings/index', 'files' => true)) !!}    
                                    <div class="form-group {{ $errors->has('username')? 'has-error':'' }}">
                             {!! Form::label('username','Username', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                          {!! Form::text('username',null,['class'=>'form-control']) !!}
                                        {!!  $errors->first('username','<span class="help-block">:message</span>')   !!}
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="form-group {{ $errors->has('password')? 'has-error':'' }}">
                                        {!! Form::label('password','Password No', ['class'=>'col-sm-2 control-label']) !!}
                                        <div class="col-sm-10">
                                            {!! Form::email('password',null,['class'=>'form-control']) !!}
                                        {!!  $errors->first('password','<span class="help-block">:message</span>')   !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('api_key')? 'has-error':'' }}">
                                         {!! Form::label('api_key','Api Key', ['class'=>'col-sm-2 control-label']) !!}
                                        <div class="col-sm-10">
                                             {!! Form::email('api_key',null,['class'=>'form-control']) !!}
                                        {!!  $errors->first('api_key','<span class="help-block">:message</span>')   !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class="text-right">
                                                {!! Form::submit('Save',['class'=>'btn btn-defualt','readonly'=>'readonly']) !!}
                                            </div>
                                        </div>
                                    </div>

                                {!!  Form::close()   !!}
                            </div> <!--tab-1-->
                            <div class="tab-pane margin-top-area form-horizontal" id="2">      
                            {!! Form::open(array('url' => 'mailsms/settings/index', 'files' => true)) !!}  

                                    {!! Form::open(array('url' => 'mailsms/settings/index', 'files' => true)) !!}    
                                    <div class="form-group {{ $errors->has('account_id')? 'has-error':'' }}">
                             {!! Form::label('accounts','AccountSID', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                          {!! Form::text('account_id',null,['class'=>'form-control']) !!}
                                        {!!  $errors->first('account_id','<span class="help-block">:message</span>')   !!}
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="form-group {{ $errors->has('auth_token')? 'has-error':'' }}">
                                        {!! Form::label('auth','Auth Token', ['class'=>'col-sm-2 control-label']) !!}
                                        <div class="col-sm-10">
                                            {!! Form::text('auth_token',null,['class'=>'form-control']) !!}
                                        {!!  $errors->first('auth_token','<span class="help-block">:message</span>')   !!}
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('form_number')? 'has-error':'' }}">
                                         {!! Form::label('number','Form Number', ['class'=>'col-sm-2 control-label']) !!}
                                        <div class="col-sm-10">
                                             {!! Form::text('form_number',null,['class'=>'form-control']) !!}
                                        {!!  $errors->first('form_number','<span class="help-block">:message</span>')   !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class="text-right">
                                                {!! Form::submit('Save',['class'=>'btn btn-defualt','readonly'=>'readonly']) !!}
                                            </div>
                                        </div>
                                    </div>

                                {!!  Form::close()   !!}
                            </div> <!--tab-2-->


                            <div class="tab-pane margin-top-area form-horizontal" id="3">

                                {!! Form::open(array('url' => 'mailsms/settings/index', 'files' => true)) !!}  

                                    {!! Form::open(array('url' => 'mailsms/settings/index', 'files' => true)) !!}    
                                    <div class="form-group {{ $errors->has('username')? 'has-error':'' }}">
                             {!! Form::label('username','Username', ['class'=>'col-sm-2 control-label']) !!}
                                    <div class="col-sm-10">
                                          {!! Form::text('username',null,['class'=>'form-control']) !!}
                                        {!!  $errors->first('username','<span class="help-block">:message</span>')   !!}
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="form-group {{ $errors->has('password')? 'has-error':'' }}">
                                        {!! Form::label('password','Password', ['class'=>'col-sm-2 control-label']) !!}
                                        <div class="col-sm-10">
                                            {!! Form::text('password',null,['class'=>'form-control']) !!}
                                        {!!  $errors->first('password','<span class="help-block">:message</span>')   !!}
                                        </div>
                                    </div>                                    

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class="text-right">
                                                {!! Form::submit('Save',['class'=>'btn btn-defualt','readonly'=>'readonly']) !!}
                                            </div>
                                        </div>
                                    </div>

                                {!!  Form::close()   !!}
                            </div> <!--tab-2-->
                        </div> <!--tab content-->
                    </div> <!--exTab2-->
                </div> <!--col-md-12 snt mail-->
            </div> <!--row -->
        </div>
    </div>


@endsection


