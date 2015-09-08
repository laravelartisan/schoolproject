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
                       <span class="glyphicon glyphicon-user " aria-hidden="true"></span>Notice
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

     	<div class="row margin-top-area">     		    
     		<div class="col-md-8 snt">     			   			
                <form class="form-horizontal">                   
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="#" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Guardian</label>
                        <div class="col-sm-10">
                           <select class="form-control">
                              <option>Rakibul Islam</option>
                              <option>Mominul Islam</option>
                              <option>Rakibul Islam</option>
                              <option>Rakibul Islam</option>
                              <option>Rakibul Islam</option>
                              <option>Rakibul Islam</option>
                            </select>   
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Date of Birth</label>
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
                        <label for="inputName" class="col-sm-2 control-label">Gender</label>
                        <div class="col-sm-10">
                            <select class="form-control">
                              <option>Male</option>
                              <option>Female</option>
                            </select> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Religion</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="#">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="#">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="#">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="#">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Class</label>
                        <div class="col-sm-10">
                           <select class="form-control">
                             <option>Select Class</option>
                              <option>One</option>
                              <option>Two</option>
                              <option>Three</option>
                              <option>Four</option>
                              <option>Five</option>
                            </select>  
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Section</label>
                        <div class="col-sm-10">
                           <select class="form-control">
                             <option>Select Section</option>
                              <option>Section One</option>
                              <option>Section Two</option>
                              <option>Section Three</option>
                              <option>Section Four</option>
                              <option>Section Five</option>
                            </select>  
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Roll</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="#">
                        </div>
                    </div>                    
                    <div class="form-group">                        
                        <label for="photo" class="col-sm-2 control-label col-xs-8 col-md-2">
                            Photo                        
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
                        <label for="inputName" class="col-sm-2 control-label">User name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="#">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="#">
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