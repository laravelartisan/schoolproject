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
                       <span class="glyphicon glyphicon-user " aria-hidden="true"></span>Grade
                    </div>
                    <div class="col-md-6 snt">
                       <ul class="breadcrumb text-right">
                            <li>
                            <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                            <a href="#">Dashboard</a></li>
                            <li class="active">Grade</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row-->

     	<div class="row margin-top-area">     		    
     		<div class="col-md-8 snt">     			   			
                <form class="form-horizontal">                   
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Grade Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="#" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Grade Point</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="#">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Mark From</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="#">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Mark Upto</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="#">
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Note</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" cols="" id="#"></textarea>
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