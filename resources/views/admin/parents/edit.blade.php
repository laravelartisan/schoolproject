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
                        <span class="glyphicon glyphicon-user " aria-hidden="true"></span>Parents
                    </div>
                    <div class="col-md-6 snt">
                        <ul class="breadcrumb text-right">
                            <li>
                                <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                                <a href="#">Dashboard</a></li>
                            <li>Parents</li>
                            <li class="active">Edit Parents</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row-->
         <div class="inner-box">
        <div class="row margin-top-area">
            <div class="col-md-8 snt form-horizontal">
{{--                {!! Form::open(array('url' => 'parent/add', 'files' => true)) !!}--}}
                {!! Form::model($userProfile,['url'=>['user/edit',$userProfile->id,3],'files'=>true,'method'=>'PUT']) !!}
                <div class="form-group ">
                    <div class="col-sm-2">

                    </div>
                    {{--<label for="inputName" class="col-sm-2 control-label">Name</label>--}}
                    <div class="col-sm-10">
                        {!! Form::hidden('type_id',3,['class'=>'form-control']) !!}

                    </div>
                </div>

                <div class="form-group {{ $errors->has('name')? 'has-error':'' }}">
                    {!! Form::label('name','Name', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::text('name',null,['class'=>'form-control']) !!}
                        {!!  $errors->first('name','<span class="help-block">:message</span>')   !!}
                    </div>

                </div>
                <div class="form-group {{ $errors->has('father_name')? 'has-error':'' }}">
                    {!! Form::label('father_name','Father\'s name', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::text('father_name',null,['class'=>'form-control']) !!}
                        {!!  $errors->first('father_name','<span class="help-block">:message</span>')   !!}
                    </div>

                </div>
                <div class="form-group {{ $errors->has('mother_name')? 'has-error':'' }}">
                    {!! Form::label('mother_name','Mother\'s name', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::text('mother_name',null,['class'=>'form-control']) !!}
                        {!!  $errors->first('mother_name','<span class="help-block">:message</span>')   !!}
                    </div>

                </div>

                <div class="form-group {{ $errors->has('profession')? 'has-error':'' }}">
                    {!! Form::label('profession','Profession', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::text('profession',null,['class'=>'form-control']) !!}
                        {!!  $errors->first('profession','<span class="help-block">:message</span>')   !!}
                    </div>

                </div>

                <div class="form-group {{ $errors->has('gender')? 'has-error':'' }}">
                    {!! Form::label('gender','Gender', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10 ">

                        {!! Form::select('gender', array( 'Male'=>'Male',  'Female'=>'Female'), '--', ['class'=>'form-control']) !!}
                        {!!  $errors->first('gender','<span class="help-block">:message</span>')   !!}
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


               {{-- <div class="form-group {{ $errors->has('photo')? 'has-error':'' }}">
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
                {{--<div class="form-group {{ $errors->has('password')? 'has-error':'' }}">
                    {!! Form::label('password','Password', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::password('password', ['class'=>'form-control'])!!}
                        {!!  $errors->first('password','<span class="help-block">:message</span>')   !!}
                    </div>

                </div>--}}
                {{--<div class="form-group {{ $errors->has('password_confirmation')? 'has-error':'' }}">
                    {!! Form::label('password_confirmation','Confirm Password', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {!! Form::password('password_confirmation', ['class'=>'form-control'])!!}
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