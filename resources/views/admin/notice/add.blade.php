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
                       <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Notice
                    </div>
                    <div class="col-md-6 snt">
                       <ul class="breadcrumb text-right">
                            <li>
                            <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                            <a href="#">Dashboard</a></li>
                            <li class="active">Notice</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row-->
        <div class="inner-box">
         	<div class="row margin-top-area">     		    
         		<div class="col-md-8 snt form-horizontal">     			   			
                    {!! Form::open(array('url' => 'user/add', 'files' => true)) !!}
                  
                        <div class="form-group {{ $errors->has('title_notice')? 'has-error':'' }}">
                            {!! Form::label('title','Title', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::text('title_notice',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('title_notice','<span class="help-block">:message</span>')   !!}
                            </div>

                        </div>
                       
                        <div class="form-group {{ $errors->has('notice_date')? 'has-error':'' }}">
                        {!! Form::label('date','Date', ['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            <div class='input-group date' id='datetimepicker'>
                                {!! Form::input('date','notice_date',date('d/m/Y'),['class'=>'form-control']) !!}

                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                                {!!  $errors->first('notice_date','<span class="help-block">:message</span>')   !!}
                            </div>
                        </div>

                    </div>                  
                        <div class="form-group {{ $errors->has('textarea_tetx')? 'has-error':'' }}">
                            {!! Form::label('notice','Notice', ['class'=>'col-sm-2 control-label']) !!}

                            <div class="col-sm-10">
                                {!! Form::textarea('textarea_tetx',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('textarea_tetx','<span class="help-block">:message</span>')   !!}
                            </div>

                        </div>
                        <div class=" text-right">
                            {!! Form::submit('Submit',['class'=>'btn btn-defualt','readonly'=>'readonly']) !!} 
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