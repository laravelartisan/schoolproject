@extends('admin.layouts.admin')


@section('head')
    {!! Html::style('css/styles.css') !!}
@endsection



@section('content')
    <div class="container-fluid">
     	<div class="row">
            <div class="col-md-12">
                <div class="student-box-header">
                    <div class="col-md-6">
                       <span class="glyphicon glyphicon-user " aria-hidden="true"></span>Teacher
                    </div>
                    <div class="col-md-6 snt">
                       <ul class="breadcrumb text-right">
                            <li>
                            <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                            <a href="#">Dashboard</a></li>
                            <li>Teacher</li>
                            <li class="active">Edit Teacher</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row-->
         <div class="inner-box">
         	<div class="row margin-top-area">     		    
         		<div class="col-md-8 snt form-horizontal">
                    {{--<form class="form-horizontal">--}}
                       {{-- {!! Form::open(array('url' => 'teacher/add', 'files' => true)) !!}--}}
                    {!! Form::model($userProfile,['url'=>['user/edit',$userProfile->id,4],'files'=>true,'method'=>'PUT']) !!}
                    <div class="form-group ">
                       <div class="col-sm-2">

                       </div>
                        {{--<label for="inputName" class="col-sm-2 control-label">Name</label>--}}
                        <div class="col-sm-10">
                            {!! Form::hidden('type_id',2,['class'=>'form-control']) !!}

                        </div>
                    </div>
                        <div class="form-group {{ $errors->has('name')? 'has-error':'' }}">
                            {!! Form::label('name','Name', ['class'=>'col-sm-2 control-label']) !!}
                            {{--<label for="inputName" class="col-sm-2 control-label">Name</label>--}}
                            <div class="col-sm-10">
                                {!! Form::text('name',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('name','<span class="help-block">:message</span>')   !!}
                                {{--<input type="text" class="form-control" id="#" placeholder="Name">--}}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('designation')? 'has-error':'' }}">
                            {!! Form::label('designation','Designation', ['class'=>'col-sm-2 control-label']) !!}
                            {{--<label for="inputName" class="col-sm-2 control-label">Designation</label>--}}
                            <div class="col-sm-10">
                                {!! Form::text('designation',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('designation','<span class="help-block">:message</span>')   !!}
                                {{--<input type="text" class="form-control" id="#" placeholder="Name">--}}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('birth_date')? 'has-error':'' }}">
                            {!! Form::label('birth_date','Date of Birth', ['class'=>'col-sm-2 control-label']) !!}
                            {{--<label for="inputName" class="col-sm-2 control-label">Date of Birth</label>--}}
                            <div class="col-sm-10">
                                <div class='input-group date' id='datetimepicker'>
                                    {!! Form::input('date','birth_date',date('d/m/Y'),['class'=>'form-control']) !!}

                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    {!!  $errors->first('birth_date','<span class="help-block">:message</span>')   !!}
                                </div>
                            </div>
                        </div>



                        <div class="form-group {{ $errors->has('gender')? 'has-error':'' }}">
                            {!! Form::label('gender','Gender', ['class'=>'col-sm-2 control-label']) !!}
                            {{--<label for="inputName" class="col-sm-2 control-label">Gender</label>--}}
                            <div class="col-sm-10">
                                {{--<select class="form-control">
                                  <option>Male</option>
                                  <option>Female</option>
                                </select> --}}
                                {!! Form::select('gender', array( 'Male'=>'Male', 'Female'=> 'Female'), '--', ['class'=>'form-control']) !!}
                                {!!  $errors->first('gender','<span class="help-block">:message</span>')   !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('name')? 'has-error':'' }}">
                            {!! Form::label('religion','Religion', ['class'=>'col-sm-2 control-label']) !!}
                            {{--<label for="inputName" class="col-sm-2 control-label">Religion</label>--}}
                            <div class="col-sm-10">
                                {!! Form::text('religion',null,['class'=>'form-control']) !!}
                                {!!  $errors->first('religion','<span class="help-block">:message</span>')   !!}
                                {{--<input type="text" class="form-control" id="#">--}}
                            </div>
                        </div>
                    <div class="form-group {{ $errors->has('email')? 'has-error':'' }}">
                        {!! Form::label('email','Email', ['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::email('email',null,['class'=>'form-control']) !!}
                            {!!  $errors->first('email','<span class="help-block">:message</span>')   !!}
                        </div>

                    </div>
                    <div class="form-group {{ $errors->has('phone')? 'has-error':'' }}">
                        {!! Form::label('phone','Phone', ['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::text('phone',null,['class'=>'form-control']) !!}
                            {!!  $errors->first('phone','<span class="help-block">:message</span>')   !!}
                        </div>

                    </div>
                    <div class="form-group {{ $errors->has('address')? 'has-error':'' }}">
                        {!! Form::label('address','Address', ['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::text('address',null,['class'=>'form-control']) !!}
                            {!!  $errors->first('address','<span class="help-block">:message</span>')   !!}
                        </div>

                    </div>

                    <div class="form-group {{ $errors->has('joining_date')? 'has-error':'' }}">
                        {!! Form::label('joining_date','Joining Date', ['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            <div class='input-group date' id='datetimepicker'>
                                {!! Form::input('date','joining_date',date('d/m/Y'),['class'=>'form-control']) !!}


                                <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                {!!  $errors->first('joining_date','<span class="help-block">:message</span>')   !!}
                            </div>
                        </div>

                    </div>
                  {{--  <div class="form-group {{ $errors->has('photo')? 'has-error':'' }}">
                        {!! Form::label('photo','Photo', ['class'=>'col-sm-2 control-label col-xs-8 col-md-2']) !!}

                        <div class="col-sm-2 col-xs-6 col-md-2">
                            <div class="fileUpload btn btn-default form-control">
                                <span class="fa fa-repeat"></span>
                                <span>Upload</span>
                                {!! Form::file('photo', [ 'class'=>'upload']) !!}
                                {!!  $errors->first('photo','<span class="help-block">:message</span>')   !!}
                            </div>
                        </div>

                    </div>--}}
                    <div class="form-group {{ $errors->has('username')? 'has-error':'' }}">
                        {!! Form::label('username','Username', ['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::text('username',null,['class'=>'form-control']) !!}
                            {!!  $errors->first('username','<span class="help-block">:message</span>')   !!}
                        </div>

                    </div>
                   {{-- <div class="form-group {{ $errors->has('password')? 'has-error':'' }}">
                        {!! Form::label('password','Password', ['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::password('password', ['class'=>'form-control'])!!}
                            {!!  $errors->first('password','<span class="help-block">:message</span>')   !!}
                        </div>

                    </div>--}}
                   {{-- <div class="form-group {{ $errors->has('password_confirmation')? 'has-error':'' }}">
                        {!! Form::label('password_confirmation','Confirm Password', ['class'=>'col-sm-2 control-label']) !!}

                        <div class="col-sm-10">
                            {!! Form::password('password_confirmation', ['class'=>'form-control'] )!!}
                            {!!  $errors->first('password_confirmation','<span class="help-block">:message</span>')   !!}
                        </div>

                    </div>--}}
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