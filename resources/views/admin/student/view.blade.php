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
                        <span class="glyphicon glyphicon-user " aria-hidden="true"></span>Student
                    </div>
                    <div class="col-md-6 snt">
                        <ul class="breadcrumb text-right">
                            <li>
                                <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                                <a href="#">Dashboard</a></li>
                            <li class="active">Student</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row-->

        <div class="row margin-top-area">
            <div class="col-md-8 snt form-horizontal">
                {!! Form::open(array('url' => 'student/add', 'files' => true)) !!}

                <div class="form-group ">
                    <div class="col-sm-2">

                    </div>
                    {{--<label for="inputName" class="col-sm-2 control-label">Name</label>--}}
                    <div class="col-sm-10">

                        {!! Form::hidden('type_id',1,['class'=>'form-control']) !!}

                    </div>
                </div>


                <div class="form-group">
                    {!! Form::label('name','Name', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                       {{ $userProfile->name }}
                    </div>

                </div>
                <div class="form-group">
                    {!! Form::label('father','Father\'s name', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {{ $userProfile->father_name }}
                    </div>

                </div>
                <div class="form-group ">
                    {!! Form::label('mother','Mother\'s name', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {{ $userProfile->mother_name }}
                    </div>

                </div>

                <div class="form-group ">
                    {!! Form::label('guardian_name','Guardian Name', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {{ $userProfile->guardian_name }}
                    </div>

                </div>


                <div class="form-group ">
                    {!! Form::label('birthdate','Date of Birth', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        <div class='input-group date' id='datetimepicker'>
                            {{ $userProfile->birth_date }}
                        </div>
                    </div>

                </div>



                <div class="form-group ">
                    {!! Form::label('gender','Gender', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10 ">

                        {{ $userProfile->gender }}
                    </div>

                </div>
                <div class="form-group ">
                    {!! Form::label('religion','Religion', ['class'=>'col-sm-2 control-label']) !!}

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
                <div class="form-group {{ $errors->has('phone')? 'has-error':'' }}">
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
                    {!! Form::label('class','Class', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10 ">

                        {{ $userProfile->class }}
                    </div>

                </div>
                <div class="form-group ">
                    {!! Form::label('section','Section', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10 ">

                        {{ $userProfile->section }}
                    </div>

                </div>
                <div class="form-group ">
                    {!! Form::label('roll','Roll No', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {{ $userProfile->roll }}
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