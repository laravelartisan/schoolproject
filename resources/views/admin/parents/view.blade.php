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
                            <li class="active">Parents</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row-->

        <div class="row margin-top-area">
            <div class="col-md-8 snt form-horizontal">
                {!! Form::open(array('url' => 'parent/add', 'files' => true)) !!}

                <div class="form-group ">
                    <div class="col-sm-2">

                    </div>
                    {{--<label for="inputName" class="col-sm-2 control-label">Name</label>--}}
                    <div class="col-sm-10">
                        {!! Form::hidden('type_id',3,['class'=>'form-control']) !!}

                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('name','Name', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {{ $userProfile->name }}
                    </div>

                </div>
                <div class="form-group">
                    {!! Form::label('father_name','Father\'s name', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {{ $userProfile->father_name }}
                    </div>

                </div>
                <div class="form-group ">
                    {!! Form::label('mother_name','Mother\'s name', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {{ $userProfile->mother_name }}
                    </div>

                </div>

                <div class="form-group ">
                    {!! Form::label('profession','Profession', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10">
                        {{ $userProfile->profession }}
                    </div>

                </div>

                <div class="form-group ">
                    {!! Form::label('gender','Gender', ['class'=>'col-sm-2 control-label']) !!}

                    <div class="col-sm-10 ">

                        {{ $userProfile->gender }}
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