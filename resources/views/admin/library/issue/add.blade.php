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
                       <i class="fa fa-list-ol"></i> Issue
                    </div>
                    <div class="col-md-6 snt">
                       <ul class="breadcrumb text-right">
                            <li>
                            <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                            <a href="#">Dashboard</a></li>
                            <li class="active">Issue</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row-->
        <div class="inner-box">
         	<div class="row margin-top-area">     		    
         		<div class="col-md-8 snt">     			   			
                    <form class="form-horizontal">                   
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Library ID </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="#" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Book </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="#" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Author </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="#" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Subject Code </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="#" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Serial No </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="#" placeholder="Name">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Due Date </label>
                            <div class="col-sm-10">
                                <div class='input-group date' id='datetimepicker'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Fine </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="#" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Note</label>
                            <div class="col-sm-10">
                                <textarea name="" id="" cols="92" rows="4"></textarea>
                            </div>
                        </div>
                       
                       
                                        
                        <div class="text-right">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>                  
                    </form>     		               
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