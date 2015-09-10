@extends('admin.layouts.admin')

@section('head')
    {!! Html::style('css/styles.css') !!}

@endsection

@section('content')
    <div class="container-fluid">
        <div class="row first">
            <div class="col-md-12">
                <div class="student-box-header">
                    <div class="col-md-6">
                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span>Mail / SMS
                    </div>
                    <div class="col-md-6 snt">
                        <ul class="breadcrumb text-right">
                            <li>
                                <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                                <a href="#">Dashboard</a></li>
                            <li class="active">SMS Setting</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row first-->
        <div class="inner-box">
            <div class="row margin-top-area">
                <div class="col-md-12 snt mail">
                    <div id="exTab2">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a  href="#1" data-toggle="tab">Clickatell</a>
                            </li>
                            <li>
                                <a href="#2" data-toggle="tab">Twilio
                                </a>
                            </li>
                            <li>
                                <a href="#3" data-toggle="tab">Bulk
                                </a>
                            </li>

                        </ul>
                        <div class="tab-content margin-top-area">
                            <div class="tab-pane active" id="1">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="subject" class="col-sm-2 control-label">Username</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="subject">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Password" class="col-sm-2 control-label">Password</label>
                                        <div class="col-sm-4">
                                            <input type="password" class="form-control" id="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="apikey" class="col-sm-2 control-label">Api Key</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="apikey">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-default">Save</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div> <!--tab-1-->
                            <div class="tab-pane margin-top-area" id="2">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="AccountSID" class="col-sm-2 control-label">AccountSID </label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="AccountSID">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Auth" class="col-sm-2 control-label">Auth Token </label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="Auth">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Number" class="col-sm-2 control-label">From Number </label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="Number">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-default">Save</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div> <!--tab-2-->
                            <div class="tab-pane margin-top-area" id="3">

                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="subject" class="col-sm-2 control-label">Username</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="subject">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Password" class="col-sm-2 control-label">Password</label>
                                        <div class="col-sm-4">
                                            <input type="password" class="form-control" id="Password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-default">Save</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div> <!--tab-2-->
                        </div> <!--tab content-->
                    </div> <!--exTab2-->
                </div> <!--col-md-12 snt mail-->
            </div> <!--row -->
        </div>
    </div>


@endsection


