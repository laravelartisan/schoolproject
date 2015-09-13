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
                       <i class="fa fa-files-o"></i> Invoice
                    </div>
                    <div class="col-md-6 snt">
                       <ul class="breadcrumb text-right">
                            <li>
                            <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                            <a href="#">Dashboard</a></li>
                            <li class="active">Invoice</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row-->
        <div class="inner-box">
         	<div class="row margin-top-area">     		    
         		<div class="col-md-8 snt form-horizontal">     			   			
                     {!! Form::open(array('url' => 'account/invoice/add', 'files' => true)) !!}
                        <div class="form-group {{ $errors->has('class')? 'has-error':'' }}">
                        {!! Form::label('class','Class', ['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10 ">

                            {!! Form::select('class', array( 'One',  'Tow'), 'Select Class', ['class'=>'form-control']) !!}
                            {!!  $errors->first('class','<span class="help-block">:message</span>')   !!}
                        </div>

                    </div>
                      
                        <div class="form-group {{ $errors->has('student')? 'has-error':'' }}">
                        {!! Form::label('student','Student', ['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10 ">

                            {!! Form::select('student', array( 'Rakib',  'Rana'), 'Select Student', ['class'=>'form-control']) !!}
                            {!!  $errors->first('student','<span class="help-block">:message</span>')   !!}
                        </div>

                    </div>
                        <div class="form-group {{ $errors->has('fee_type')? 'has-error':'' }}">
                        {!! Form::label('fee_type','Fee Type', ['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::text('fee_type',null,['class'=>'form-control']) !!}
                            {!!  $errors->first('fee_type','<span class="help-block">:message</span>')   !!}
                        </div>

                    </div>
                       
                        <div class="form-group {{ $errors->has('amount')? 'has-error':'' }}">
                        {!! Form::label('amount','Amount', ['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::text('amount',null,['class'=>'form-control']) !!}
                            {!!  $errors->first('amount','<span class="help-block">:message</span>')   !!}
                        </div>

                    </div>   
                          <div class="form-group {{ $errors->has('date')? 'has-error':'' }}">
                        {!! Form::label('date','Date', ['class'=>'col-sm-2 control-label']) !!}

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