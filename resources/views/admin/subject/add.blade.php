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
                       <span class="glyphicon glyphicon-user " aria-hidden="true"></span>Subject
                    </div>
                    <div class="col-md-6 snt">
                       <ul class="breadcrumb text-right">
                            <li>
                            <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                            <a href="#">Dashboard</a></li>
                            <li class="active">Subject</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row-->
        <div class="inner-box">
         	<div class="row margin-top-area">     		    
         		<div class="col-md-8 snt form-horizontal">     			   			
                    {!! Form::open(array('url' => 'subject/add', 'files' => true)) !!}
                   
                       
                        <div class="form-group {{ $errors->has('class')? 'has-error':'' }}">
                            {!! Form::label('class','Class Name', ['class'=>'col-sm-2 control-label']) !!}                                     

                            <div class="col-sm-10 ">

                                {!! Form::select('class', array( 'One'=>'One',  'Two'=>'Two'), null, ['class'=>'form-control']) !!}
                                {!!  $errors->first('class','<span class="help-block">:message</span>')   !!}
                            </div>

                        </div>

                        <div class="form-group {{ $errors->has('teacher_name')? 'has-error':'' }}">
                            {!! Form::label('teacher_name','Teacher Name', ['class'=>'col-sm-2 control-label']) !!}                                     

                            <div class="col-sm-10 ">
                                {!! Form::select('teacher_name', array( 'Raihan'=>'Raihan',  'Monir'=>'Monir'), null, ['class'=>'form-control']) !!}
                                {!!  $errors->first('teacher_name','<span class="help-block">:message</span>')   !!}
                            </div>

                        </div>
                  
                        <div class="form-group {{ $errors->has('subject_name')? 'has-error':'' }}">
                            {!! Form::label('subject_name','Subject Name', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('subject_name',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('subject_name','<span class="help-block">:message</span>')   !!}
                            </div>

                        </div>
                        <div class="form-group {{ $errors->has('author')? 'has-error':'' }}">
                            {!! Form::label('author','Subject Author ', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('author',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('author','<span class="help-block">:message</span>')   !!}
                            </div>

                        </div>

                        <div class="form-group {{ $errors->has('subject_code')? 'has-error':'' }}">
                            {!! Form::label('subject_code','Subject Code', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('subject_code',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('subject_code','<span class="help-block">:message</span>')   !!}
                            </div>

                        </div>

                        <div class="text-right">
                             {!! Form::submit('Submit',['class'=>'btn btn-success','readonly'=>'readonly']) !!}

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