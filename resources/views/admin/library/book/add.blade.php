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
                       <span class="glyphicon glyphicon-book " aria-hidden="true"></span>Book
                    </div>
                    <div class="col-md-6 snt">
                       <ul class="breadcrumb text-right">
                            <li>
                            <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                            <a href="#">Dashboard</a></li>
                            <li class="active">Book</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row-->
        <div class="inner-box">
         	<div class="row margin-top-area">     		    
         		<div class="col-md-8 snt form-horizontal">
                    {!! Form::open(array('url' => 'library/book/add', 'files' => true)) !!}
                           

                            
                            <div class="form-group {{ $errors->has('name')? 'has-error':'' }}">
                        {!! Form::label('name','Name  ', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('name',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('name','<span class="help-block">:message</span>')   !!}
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

                        <div class="form-group {{ $errors->has('price')? 'has-error':'' }}">
                        {!! Form::label('price','Price  ', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('price',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('price','<span class="help-block">:message</span>')   !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('qualtity')? 'has-error':'' }}">
                        {!! Form::label('qualtity','Qualtity  ', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('qualtity',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('qualtity','<span class="help-block">:message</span>')   !!}
                            </div>
                        </div>  

                         <div class="form-group {{ $errors->has('rack_no')? 'has-error':'' }}">
                        {!! Form::label('rack_no','Rack No  ', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('rack_no',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('rack_no','<span class="help-block">:message</span>')   !!}
                            </div>
                        </div>  


                        <div class="text-right">
                             {!! Form::submit('Add Book',['class'=>'btn btn-success','readonly'=>'readonly']) !!}
                               
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