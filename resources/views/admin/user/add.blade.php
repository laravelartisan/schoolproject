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
                        <span class="glyphicon glyphicon-user " aria-hidden="true"></span>User
                    </div>
                    <div class="col-md-6 snt">
                        <ul class="breadcrumb text-right">
                            <li>
                                <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                                <a href="#">Dashboard</a></li>
                            <li class="active">User</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row-->

        <div class="row margin-top-area">
            <div class="col-md-8 snt form-horizontal">
{{--                <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register')}}" >--}}
{{--                    {!! Form::open(['route'=>['user.add'],['class'=>'form-horizontal'],'files'=>true]) !!}--}}
               {!! Form::open(array('url' => 'user/add', 'files' => true)) !!}


                    <div class="form-group">
                        {!! Form::label('name','Name', ['class'=>'col-sm-2 control-label']) !!}
                        {{--<label for="inputName" class="col-sm-2 control-label">Name</label>--}}
                        <div class="col-sm-10">
                            {!! Form::text('name',null,['class'=>'form-control']) !!}
                            {{--<input type="text" class="form-control" name="name" value="{{ old('name') }}">--}}
                        </div>
                    </div>
                    <div class="form-group">
                    {!! Form::label('father','Father\'s name', ['class'=>'col-sm-2 control-label']) !!}
                    {{--<label for="inputName" class="col-sm-2 control-label">Name</label>--}}
                    <div class="col-sm-10">
                        {!! Form::text('father_name',null,['class'=>'form-control']) !!}
                        {{--<input type="text" class="form-control" name="name" value="{{ old('name') }}">--}}
                    </div>
                </div>
                    <div class="form-group">
                    {!! Form::label('mother','Mother\'s name', ['class'=>'col-sm-2 control-label']) !!}
                    {{--<label for="inputName" class="col-sm-2 control-label">Name</label>--}}
                    <div class="col-sm-10">
                        {!! Form::text('mother_name',null,['class'=>'form-control']) !!}
                        {{--<input type="text" class="form-control" name="name" value="{{ old('name') }}">--}}
                    </div>
                </div>

                    <div class="form-group">
                        {!! Form::label('birthdate','Date of Birth', ['class'=>'col-sm-2 control-label']) !!}
                        {{--<label for="inputName" class="col-sm-2 control-label">Date of Birth</label>--}}
                        <div class="col-sm-10">
                            <div class='input-group date' id='datetimepicker'>
                                {!! Form::date('birth_date',null,['class'=>'form-control']) !!}
                                {{--<input type='text' class="form-control" />--}}
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>



                    <div class="form-group">
                        {!! Form::label('gender','Gender', ['class'=>'col-sm-2 control-label']) !!}
                        {{--<label for="inputName" class="col-sm-2 control-label">Gender</label>--}}
                        <div class="col-sm-10 ">
                           {{-- <select class="form-control">
                                <option>Male</option>
                                <option>Female</option>
                            </select>--}}
                            {!! Form::select('gender', array( 'Male',  'Female'), 'Male', ['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('religion','Religion', ['class'=>'col-sm-2 control-label']) !!}
                        {{--<label for="inputName" class="col-sm-2 control-label">Religion</label>--}}
                        <div class="col-sm-10">
                            {!! Form::text('religion',null,['class'=>'form-control']) !!}
                            {{--<input type="text" class="form-control" id="#">--}}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('email','Email', ['class'=>'col-sm-2 control-label']) !!}
                        {{--<label for="inputName" class="col-sm-2 control-label">Email</label>--}}
                        <div class="col-sm-10">
                            {!! Form::email('email',null,['class'=>'form-control']) !!}
                            {{--<input type="email" class="form-control" id="#">--}}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('phone','Phone', ['class'=>'col-sm-2 control-label']) !!}
                        {{--<label for="inputName" class="col-sm-2 control-label">Phone</label>--}}
                        <div class="col-sm-10">
                            {!! Form::text('phone',null,['class'=>'form-control']) !!}
                            {{--<input type="text" class="form-control" id="#">--}}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('address','Address', ['class'=>'col-sm-2 control-label']) !!}
                        {{--<label for="inputName" class="col-sm-2 control-label">Address</label>--}}
                        <div class="col-sm-10">
                            {!! Form::text('address',null,['class'=>'form-control']) !!}
                            {{--<input type="text" class="form-control" id="#">--}}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('joining_date','Joining Date', ['class'=>'col-sm-2 control-label']) !!}
                        {{--<label for="inputName" class="col-sm-2 control-label">Joining Date</label>--}}
                        <div class="col-sm-10">
                            <div class='input-group date' id='datetimepicker'>
                                {!! Form::date('joining_date',null,['class'=>'form-control']) !!}
{{--                               {!! Form::date('joiningdate', \Carbon\Carbon::now()) !!} --}}
                                {{--<input type='text' class="form-control" />--}}
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('photo','Photo', ['class'=>'col-sm-2 control-label col-xs-8 col-md-2']) !!}
                        {{--<label for="photo" class="col-sm-2 control-label col-xs-8 col-md-2">--}}
                            {{--Photo--}}
                        {{--</label>--}}
                        {{--<div class="col-sm-4 col-xs-6 col-md-4">
                            <input class="form-control" id="uploadFile" placeholder="Choose File" disabled="">
                        </div>--}}
                        <div class="col-sm-2 col-xs-6 col-md-2">
                            <div class="fileUpload btn btn-default form-control">
                                <span class="fa fa-repeat"></span>
                                <span>Upload</span>
                                {!! Form::file('photo', [ 'class'=>'upload']) !!}
                                {{--{!! Form::file('file[]', [ 'id'=>'file','multiple'=>true]) !!}--}}
                                {{--<input id="uploadBtn" type="file" class="upload" name="image">--}}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('type','Type', ['class'=>'col-sm-2 control-label']) !!}
                        {{--<label for="inputName" class="col-sm-2 control-label">Type</label>--}}
                        <div class="col-sm-10">
                            {{--<select class="form-control">
                                <option>Accountant</option>
                                <option>Librarian</option>
                            </select>--}}
                            {!! Form::select('type', array( 'Accountant',  'Librarian'), 'Librarian',['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('username','Username', ['class'=>'col-sm-2 control-label']) !!}
                        {{--<label for="inputName" class="col-sm-2 control-label">User name</label>--}}
                        <div class="col-sm-10">
                            {!! Form::text('username',null,['class'=>'form-control']) !!}
                            {{--<input type="text" class="form-control" id="#">--}}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('password','Password', ['class'=>'col-sm-2 control-label']) !!}
                        {{--<label for="inputName" class="col-sm-2 control-label">Password</label>--}}
                        <div class="col-sm-10">
                            {!! Form::password('password', ['class'=>'form-control'])!!}
                            {{--<input type="password" class="form-control" id="#">--}}
                        </div>
                    </div>
                <div class="form-group">
                    {!! Form::label('conpassword','Confirm Password', ['class'=>'col-sm-2 control-label']) !!}
                    {{--<label for="inputName" class="col-sm-2 control-label">Password</label>--}}
                    <div class="col-sm-10">
                        {!! Form::password('con_password', ['class'=>'form-control'])!!}
                        {{--<input type="password" class="form-control" id="#">--}}
                    </div>
                </div>
                    <div class="text-right">
                        {!! Form::submit('Submit',['class'=>'btn btn-success','readonly'=>'readonly']) !!}
                        {{--<button type="submit" class="btn btn-default">Submit</button>--}}
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