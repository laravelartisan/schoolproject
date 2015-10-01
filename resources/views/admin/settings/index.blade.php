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
                       <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>Setting
                    </div>
                    <div class="col-md-6 snt">
                       <ul class="breadcrumb text-right">
                            <li>
                            <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                            <a href="#">Dashboard</a></li>
                            <li class="active">Setting</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row-->
        <div class="inner-box">
             <div class="row margin-top-area">               
                <div class="col-md-8 snt form-horizontal">                             
                   {!! Form::open(array('url' => 'settings/index', 'files' => true)) !!}            

                        <div class="form-group {{ $errors->has('site_title')? 'has-error':'' }}">
                             {!! Form::label('title','Site Title', ['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                              {!! Form::text('site_title',null,['class'=>'form-control']) !!}
                            {!!  $errors->first('site_title','<span class="help-block">:message</span>')   !!}
                            </div>
                        </div>
                       
                        
                        <div class="form-group {{ $errors->has('phone_no')? 'has-error':'' }}">
                            {!! Form::label('phone','Phone No', ['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('phone_no',null,['class'=>'form-control']) !!}
                            {!!  $errors->first('phone_no','<span class="help-block">:message</span>')   !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('system_email')? 'has-error':'' }}">
                             {!! Form::label('email','System Email', ['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                 {!! Form::email('system_email',null,['class'=>'form-control']) !!}
                            {!!  $errors->first('system_email','<span class="help-block">:message</span>')   !!}
                            </div>
                        </div>
                        <div class="form-group form-group {{ $errors->has('automation_text')? 'has-error':'' }}">
                            {!! Form::label('automation','Automation', ['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('automation_text',null,['class'=>'form-control']) !!}
                            {!!  $errors->first('automation_text','<span class="help-block">:message</span>')   !!}
                            </div>
                        </div>
                        <div class="form-group form-group {{ $errors->has('currency_code')? 'has-error':'' }}">
                            {!! Form::label('currency','Currency Code', ['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                 {!! Form::text('currency_code',null,['class'=>'form-control']) !!}
                            {!!  $errors->first('currency_code','<span class="help-block">:message</span>')   !!}
                            </div>
                        </div>                        
                        <div class="form-group {{ $errors->has('currency_symbol')? 'has-error':'' }}">
                            {!! Form::label('symbol','Currency Symbol', ['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('currency_symbol',null,['class'=>'form-control']) !!}
                            {!!  $errors->first('currency_symbol','<span class="help-block">:message</span>')   !!}
                            </div>
                        </div> 
                        <div class="form-group {{ $errors->has('footer_text')? 'has-error':'' }}">
                           {!! Form::label('footer','Footer', ['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('footer_text',null,['class'=>'form-control']) !!}
                            {!!  $errors->first('footer_text','<span class="help-block">:message</span>')   !!}
                            </div>
                        </div> 
                        <div class="form-group {{ $errors->has('text_area')? 'has-error':'' }}">
                             {!! Form::label('address','Address', ['class'=>'col-sm-2 control-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::textarea('text_area',null,['class'=>'form-control']) !!}
                            {!!  $errors->first('text_area','<span class="help-block">:message</span>')   !!}
                            </div>
                        </div>  


                        <div class="form-group {{ $errors->has('logo_image')? 'has-error':'' }}">                        
                            {!! Form::label('logo','Logo', ['class'=>'col-sm-2 control-label col-xs-8 col-md-2']) !!}

                            <div class="col-sm-4 col-xs-6 col-md-4">
                                <input class="form-control" id="uploadFile" placeholder="Choose File" disabled="">  
                            </div>
                            <div class="col-sm-2 col-xs-6 col-md-2">
                                <div class="fileUpload btn btn-default form-control">
                                <span class="fa fa-repeat"></span>
                                    <span>Upload</span>
                                {!! Form::file('logo_image', [ 'class'=>'upload']) !!}
                                {!!  $errors->first('logo_image','<span class="help-block">:message</span>')   !!}
                                </div>
                            </div>                    
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2"></label>
                            <div class="col-sm-10 text-left">
                             {!! Form::submit('Update Setting',['class'=>'btn btn-primary','readonly'=>'readonly']) !!}
                               
                            </div>
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