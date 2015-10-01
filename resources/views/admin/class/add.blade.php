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
                       <span class="glyphicon glyphicon-user " aria-hidden="true"></span>Class
                    </div>
                    <div class="col-md-6 snt">
                       <ul class="breadcrumb text-right">
                            <li>
                            <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                            <a href="#">Dashboard</a></li>
                            <li class="active">Class</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row-->
       <div class="inner-box">
         	<div class="row margin-top-area">     		    
         		<div class="col-md-8 snt form-horizontal">     			   			
                    {!! Form::open(array('url' => 'class/add', 'files' => true)) !!}                
                    <div class="form-group {{ $errors->has('class')? 'has-error':'' }}">
                        {!! Form::label('class','Class', ['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::text('class',null,['class'=>'form-control']) !!}
                            {!!  $errors->first('class','<span class="help-block">:message</span>')   !!}
                        </div>

                    </div>

                        <div class="form-group {{ $errors->has('numeric_class')? 'has-error':'' }}">
                        {!! Form::label('numeric_class','Numeric
                        Class', ['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::text('numeric_class',null,['class'=>'form-control']) !!}
                            {!!  $errors->first('numeric_class','<span class="help-block">:message</span>')   !!}
                        </div>

                    </div>

                         <div class="form-group {{ $errors->has('teacher_name')? 'has-error':'' }}">
                        {!! Form::label('teacher_name','Teacher Name', ['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10 ">
                            {!! Form::select('teacher_name', array( 'Rahim'=>'Rahim',  'Karim'=>'Karim'), null, ['class'=>'form-control']) !!}
                            {!!  $errors->first('teacher_name','<span class="help-block">:message</span>')   !!}
                        </div>

                    </div>
                        <div class="form-group {{ $errors->has('note')? 'has-error':'' }}">
                        {!! Form::label('note','Note', ['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::textarea('note',null,['class'=>'form-control']) !!}
                            {!!  $errors->first('note','<span class="help-block">:message</span>')   !!}
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