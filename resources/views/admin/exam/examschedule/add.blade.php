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
                       <span class="glyphicon glyphicon-user " aria-hidden="true"></span>Subject
                    </div>
                    <div class="col-md-6 snt">
                       <ul class="breadcrumb text-right">
                            <li>
                            <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                            <a href="#">Dashboard</a></li>
                            <li class="active">Subject</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row-->

     	<div class="row margin-top-area">
     		<div class="col-md-8 snt">
                <form class="form-horizontal">


                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Exam Name</label>
                        <div class="col-sm-10">
                           <select class="form-control">
                              <option>One</option>
                              <option>Two</option>
                              <option>Three</option>
                              <option>Four</option>
                              <option>Five</option>
                              <option>Six</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Class</label>
                        <div class="col-sm-10">
                            <select class="form-control">
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                                <option>Four</option>
                                <option>Five</option>
                                <option>Six</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Section</label>
                        <div class="col-sm-10">
                            <select class="form-control">
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                                <option>Four</option>
                                <option>Five</option>
                                <option>Six</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Subject</label>
                        <div class="col-sm-10">
                            <select class="form-control">
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                                <option>Four</option>
                                <option>Five</option>
                                <option>Six</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Date</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="#" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Time From</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="#">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Time To</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="#">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Room</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="#">
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </form>
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