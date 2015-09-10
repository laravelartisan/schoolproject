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
                       <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Notice
                    </div>
                    <div class="col-md-6 snt">
                       <ul class="breadcrumb text-right">
                            <li>
                            <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                            <a href="#">Dashboard</a></li>
                            <li class="active">Notice</li>
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
                            <label for="inputName" class="col-sm-2 control-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="#" placeholder="Name">
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Date</label>
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
                            <label for="inputName" class="col-sm-2 control-label">Notice</label>
                            <div class="col-sm-10">
                                <textarea name="" id="" cols="92" rows="4"></textarea>
                            </div>
                        </div>                    
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label"></label>
                            <div class="col-sm-10">
                                <div class="text-left">
                                    <button type="submit" class="btn btn-default">Add notice</button>
                                </div> 
                            </div>
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