@extends('admin.layouts.admin')


@section('head')
    {!! Html::style('css/styles.css') !!}
@endsection



@section('content')
    <div class="container-fluid" style="min-height: 1215px;">
        <div class="row first">
            <div class="col-md-12">
                <div class="student-box-header">
                    <div class="col-md-6">
                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span>Mail / SMS Template
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
            <div class="col-md-12 snt mail">
                <div id="exTab2">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a  href="#1" data-toggle="tab">Email</a>
                        </li>
                        <li>
                            <a href="#2" data-toggle="tab">SMS
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content margin-top-area">
                        <div class="tab-pane active" id="1">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">User</label>
                                    <div class="col-sm-4">
                                        <select class="form-control">
                                            <option>Select User</option>
                                            <option>Student</option>
                                            <option>Parent</option>
                                            <option>Teacher</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Template</label>
                                    <div class="col-sm-4">
                                        <select class="form-control">
                                            <option>Select Template</option>
                                            <option>Student result</option>
                                            <option>Absence notice</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="subject" class="col-sm-2 control-label">Subject</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="subject">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Message</label>
                                    <div class="col-sm-8">
                                        <textarea name="" rows="3" column="40"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-default">Send</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div> <!--tab-1-->
                        <div class="tab-pane margin-top-area" id="2">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">User</label>
                                    <div class="col-sm-4">
                                        <select class="form-control">
                                            <option>Select User</option>
                                            <option>Student</option>
                                            <option>Parent</option>
                                            <option>Teacher</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Template</label>
                                    <div class="col-sm-4">
                                        <select class="form-control">
                                            <option>Select Template</option>
                                            <option>Absence sms</option>
                                            <option>Student result</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Send by</label>
                                    <div class="col-sm-4">
                                        <select class="form-control">
                                            <option>Select User</option>
                                            <option>Student</option>
                                            <option>Parent</option>
                                            <option>Teacher</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Massage</label>
                                    <div class="col-sm-8">
                                        <textarea name="" rows="3" column="40"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-default">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div> <!--tab-2-->
                    </div> <!--tab content-->
                </div> <!--exTab2-->
            </div> <!--col-md-12 snt mail-->
        </div> <!--row first-->
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