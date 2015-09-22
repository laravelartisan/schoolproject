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
                      <i class="fa fa-leaf"></i> Hostel Category
                    </div>
                    <div class="col-md-6 snt">
                       <ul class="breadcrumb text-right">
                            <li>
                            <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                            <a href="#">Dashboard</a></li>
                            <li class="active">Hostel Category</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row-->
      <div class="inner-box">
         	<div class="row margin-top-area">     		    
         		<div class="col-md-8 snt form-horizontal">     			   			
                    {!! Form::open(array('url' => 'hostel/category/add', 'files' => true)) !!}                 
                        <div class="form-group {{ $errors->has('hostel_name')? 'has-error':'' }}">
                        {!! Form::label('hostel_name','Hostel Name', ['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">

                            {!! Form::select('hostel_name', array( 'Bogra Student Hostel'=>'Bogra Student Hostel',  'Dhaka Student Hostel'=>'Dhaka Student Hostel','Rajshahi Student Hostel'=>'Rajshahi Student Hostel'), null,['class'=>'form-control']) !!}
                            {!!  $errors->first('hostel_name','<span class="help-block">:message</span>')   !!}
                        </div>

                    </div>
                       
                         <div class="form-group {{ $errors->has('class_type')? 'has-error':'' }}">
                        {!! Form::label('class_type','Class Type', ['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::text('class_type',null,['class'=>'form-control']) !!}
                            {!!  $errors->first('class_type','<span class="help-block">:message</span>')   !!}
                        </div>

                    </div>
                         <div class="form-group {{ $errors->has('hostel_fee')? 'has-error':'' }}">
                        {!! Form::label('hostel_fee','Hostel Fee', ['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::text('hostel_fee',null,['class'=>'form-control']) !!}
                            {!!  $errors->first('hostel_fee','<span class="help-block">:message</span>')   !!}
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