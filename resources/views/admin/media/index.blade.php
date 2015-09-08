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
        </div> <!--row first-->

        <div class="row margin-top-area">
            <div class="col-md-12 snt media">
                <div class="row">
                    <div class="col-md-3">
                        <a id="#" class="btn btn-primary btn-lg btn-block">
                            <i class="fa fa-plus fa-2x"></i>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a id="#" class="btn btn-primary btn-lg btn-block">
                            <i class="fa fa-folder fa-2x"></i>
                        </a>
                        <b style="font-size:10px;">Uploaded by Admin: inilabs</b>
                    </div>
                    <div class="col-md-3">
                        <a id="#" class="btn btn-primary btn-lg btn-block">
                            <i class="fa fa-folder fa-2x"></i>
                        </a>
                        <b style="font-size:10px;">Uploaded by Admin: inilabs</b>
                    </div>
                    <div class="col-md-3">
                        <a id="#" class="btn btn-primary btn-lg btn-block">
                            <i class="fa fa-file fa-2x"></i>

                        </a>
                        <b style="font-size:10px;">Uploaded by Admin: inilabs</b>
                    </div>
                </div>
            </div> <!--col-md-12 snt mail-->
        </div> <!--row second-->
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