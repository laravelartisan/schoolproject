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
                       <i class="fa fa-file-excel-o"></i> Payment Settings
                    </div>
                    <div class="col-md-6 snt">
                       <ul class="breadcrumb text-right">
                            <li>
                            <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                            <a href="#">Dashboard</a></li>
                            <li class="active"> Payment Settings</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row-->
        <div class="inner-box">
         	<div class="row margin-top-area">                    		    <div class="col-md-8 snt form-horizontal">     			   			
                     {!! Form::open(array('url' => 'account/settings/add', 'files' => true)) !!}
                        <div class="form-group {{ $errors->has('username')? 'has-error':'' }}">
                        {!! Form::label('username','Paypal Api Username', ['class'=>'col-sm-2 control-label']) !!}

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
                        <div class="form-group {{ $errors->has('email')? 'has-error':'' }}">
                        {!! Form::label('email','Paypal email', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('email',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('email','<span class="help-block">:message</span>')   !!}
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Paypal Sandbox </label>
                            <div class="col-sm-10">
                               <p class="form-control-static">Box will apread</p>
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