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
                       <i class="fa fa-train"></i> Transport
                    </div>
                    <div class="col-md-6 snt">
                       <ul class="breadcrumb text-right">
                            <li>
                            <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                            <a href="#">Dashboard</a></li>
                            <li class="active">Transport</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row-->
        <div class="inner-box">
         	<div class="row margin-top-area">     		    
         		<div class="col-md-8 snt form-horizontal">     			   			
                    {!! Form::open(array('url' => 'transport/transport/add', 'files' => true)) !!}                  
                        <div class="form-group {{ $errors->has('route_name')? 'has-error':'' }}">
                        {!! Form::label('route_name','Route Name', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('route_name',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('route_name','<span class="help-block">:message</span>')   !!}
                            </div>

                        </div>

                        <div class="form-group {{ $errors->has('vehicle')? 'has-error':'' }}">
                        {!! Form::label('vehicle','Number of Vehicle', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('vehicle',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('vehicle','<span class="help-block">:message</span>')   !!}
                            </div>

                        </div>

                        <div class="form-group {{ $errors->has('route_fare')? 'has-error':'' }}">
                        {!! Form::label('route_fare','Route Fare', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('route_fare',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('route_fare','<span class="help-block">:message</span>')   !!}
                            </div>

                        </div>

                        <div class="form-group {{ $errors->has('note')? 'has-error':'' }}">
                        {!! Form::label('note','Note', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('note',null,['class'=>'form-control']) !!}
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