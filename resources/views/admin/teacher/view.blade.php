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
                        <span class="glyphicon glyphicon-user " aria-hidden="true"></span>Teacher
                    </div>
                    <div class="col-md-6 snt">
                        <ul class="breadcrumb text-right">
                            <li>
                                <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                                <a href="#">Dashboard</a></li>
                            <li class="active">Teacher</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row-->

        <div class="row margin-top-area">
            <div class="col-md-8 snt form-horizontal">
                {{--<form class="form-horizontal">--}}
                {!! Form::open(array('url' => 'teacher/add', 'files' => true)) !!}
                <div class="form-group ">
                    <div class="col-sm-2">

                    </div>
                    {{--<label for="inputName" class="col-sm-2 control-label">Name</label>--}}
                    <div class="col-sm-10">
                        {!! Form::hidden('type_id',2,['class'=>'form-control']) !!}

                    </div>
                </div>
                <div class="form-group ">
                    {!! Form::label('name','Name', ['class'=>'col-sm-2 control-label']) !!}
                    {{--<label for="inputName" class="col-sm-2 control-label">Name</label>--}}
                    <div class="col-sm-10">
                        {{ $userProfile->name }}
                        {{--<input type="text" class="form-control" id="#" placeholder="Name">--}}
                    </div>
                </div>
                <div class="form-group ">
                    {!! Form::label('designation','Designation', ['class'=>'col-sm-2 control-label']) !!}
                    {{--<label for="inputName" class="col-sm-2 control-label">Designation</label>--}}
                    <div class="col-sm-10">
                        {{ $userProfile->designation }}
                    </div>
                </div>

                <div class="form-group ">
                    {!! Form::label('birth_date','Date of Birth', ['class'=>'col-sm-2 control-label']) !!}
                    {{--<label for="inputName" class="col-sm-2 control-label">Date of Birth</label>--}}
                    <div class="col-sm-10">
                        <div class='input-group date' id='datetimepicker'>
                            {{ $userProfile->birth_date }}
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    {!! Form::label('gender','Gender', ['class'=>'col-sm-2 control-label']) !!}
                    {{--<label for="inputName" class="col-sm-2 control-label">Gender</label>--}}
                    <div class="col-sm-10">
                        {{--<select class="form-control">
                          <option>Male</option>
                          <option>Female</option>
                        </select> --}}
                        {{ $userProfile->gender }}
                    </div>
                </div>
                <div class="form-group ">
                    {!! Form::label('religion','Religion', ['class'=>'col-sm-2 control-label']) !!}
                    {{--<label for="inputName" class="col-sm-2 control-label">Religion</label>--}}
                    <div class="col-sm-10">
                        {{ $userProfile->religion }}
                    </div>
                </div>
                <div class="form-group ">
                    {!! Form::label('email','Email', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {{ $userProfile->email }}
                    </div>

                </div>
                <div class="form-group ">
                    {!! Form::label('phone','Phone', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {{ $userProfile->phone }}
                    </div>

                </div>
                <div class="form-group ">
                    {!! Form::label('address','Address', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {{ $userProfile->address }}
                    </div>

                </div>

                <div class="form-group ">
                    {!! Form::label('joining_date','Joining Date', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        <div class='input-group date' id='datetimepicker'>
                            {{ $userProfile->joining_date }}
                        </div>
                    </div>

                </div>

                <div class="form-group ">
                    {!! Form::label('username','Username', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {{ $userProfile->username }}
                    </div>

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