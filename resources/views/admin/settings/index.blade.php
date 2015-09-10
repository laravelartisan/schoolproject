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
                       <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>Setting
                    </div>
                    <div class="col-md-6 snt">
                       <ul class="breadcrumb text-right">
                            <li>
                            <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                            <a href="#">Dashboard</a></li>
                            <li class="active">Setting</li>
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
                            <label for="inputName" class="col-sm-2 control-label">Site Title </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="#" >
                            </div>
                        </div>
                       
                        
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Phone No</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="#">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">System Email </label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="#">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Automation </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="#">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Currency Code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="#">
                            </div>
                        </div>                        
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Currency Symbol </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="#">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Footer</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="#">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Address</label>
                            <div class="col-sm-10">
                                <textarea name="" id="" cols="92" rows="4"></textarea>
                            </div>
                        </div>  


                        <div class="form-group">                        
                            <label for="photo" class="col-sm-2 control-label col-xs-8 col-md-2">
                                Logo                        
                            </label>
                            <div class="col-sm-4 col-xs-6 col-md-4">
                                <input class="form-control" id="uploadFile" placeholder="Choose File" disabled="">  
                            </div>
                            <div class="col-sm-2 col-xs-6 col-md-2">
                                <div class="fileUpload btn btn-default form-control">
                                    <span class="fa fa-repeat"></span>
                                    <span>Upload</span>
                                    <input id="uploadBtn" type="file" class="upload" name="image">
                                </div>
                            </div>                    
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2"></label>
                            <div class="col-sm-10 text-left">
                                <button type="submit" class="btn btn-default">Update Setting</button>
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