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
                       <span class="glyphicon glyphicon-user " aria-hidden="true"></span>Grade
                    </div>
                    <div class="col-md-6 snt">
                       <ul class="breadcrumb text-right">
                            <li>
                            <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                            <a href="#">Dashboard</a></li>
                            <li class="active">Grade</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row-->
       <div class="inner-box">
         	<div class="row margin-top-area">     		    
         		<div class="col-md-8 snt form-horizontal">     			   			
                    {!! Form::open(array('url' => 'grade/add', 'files' => true)) !!} 
                    <div class="form-group {{ $errors->has('grade_name')? 'has-error':'' }}">
                        {!! Form::label('grade_name','Grade Name ', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('grade_name',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('grade_name','<span class="help-block">:message</span>')   !!}
                            </div>

                        </div> 
                        <div class="form-group {{ $errors->has('grade_point')? 'has-error':'' }}">
                        {!! Form::label('grade_point','Grade Point ', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('grade_point',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('grade_point','<span class="help-block">:message</span>')   !!}
                            </div>

                        </div> 
                        <div class="form-group {{ $errors->has('mark')? 'has-error':'' }}">
                        {!! Form::label('mark','Mark From ', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('mark',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('mark','<span class="help-block">:message</span>')   !!}
                            </div>

                        </div> 
                        <div class="form-group {{ $errors->has('mark_upto')? 'has-error':'' }}">
                        {!! Form::label('mark_upto','Mark Upto ', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('mark_upto',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('mark_upto','<span class="help-block">:message</span>')   !!}
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
                         {!! Form::submit('Submit',['class'=>'btn btn-primary','readonly'=>'readonly']) !!}

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