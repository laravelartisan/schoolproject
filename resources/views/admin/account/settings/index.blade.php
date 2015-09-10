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
                       <i class="fa fa-file-excel-o"></i> Payment Settings
                    </div>
                    <div class="col-md-6 snt">
                       <ul class="breadcrumb text-right">
                            <li>
                            <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                            <a href="#">Dashboard</a></li>
                            <li class="active"> Payment Settings</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row-->
        <div class="inner-box">
         	<div class="row margin-top-area">                    		    <div class="col-md-8 snt">     			   			
                    <form class="form-horizontal">
                                          
                        <div class="form-group">
                            <label for="inputName" class="col-sm-3 control-label">Paypal Api Username </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="#" placeholder="Name">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="inputName" class="col-sm-3 control-label">Paypal Api Password </label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="#">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-3 control-label">Paypal email </label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="#">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-3 control-label">Paypal Sandbox </label>
                            <div class="col-sm-9">
                               <p class="form-control-static">Box will apread</p>
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