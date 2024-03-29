@extends('admin.layouts.admin')


@section('head')
    {!! Html::style('css/styles.css') !!}
@endsection



@section('content')
    <div class="container-fluid" style="min-height: 1215px;">
        <div class="row">
            <div class="col-md-12">
                <div class="view-header">
                    <div class="col-md-7">                     
                        <button class="btn btn-warning"><span class="fa fa-print"></span> Print </button>
                        <button class="btn btn-warning"><span class="fa fa-print"></span> Print Preview </button>
                         <button class="btn btn-warning"><span class="fa fa-file"></span> PDF Preview </button>
                         <button class="btn btn-warning"><span class="fa fa-file"></span> Edit</button>
                         <button class="btn btn-warning"><span class="fa fa-file"></span> Send Mail as PDF</button> 
                    </div>
                    <div class="col-md-5 view">
                        <ul class="breadcrumb text-right">
                            <li>
                                <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                                <a href="#">Dashboard</a></li>
                                <li>Teacher</li>
                               <li class="active">View</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!--row-->

        <div class="row margin-top-area">
            <div class="col-md-12 view">
               
               <table class="table table-bordered table-hover table-responsive view-table-holder">
                    <thead>
                       <tr class="th-bg ">
                           <th colspan="4" class="text-center"> 
                               <div class="view-picture">
                               <span class="glyphicon glyphicon-user fa-man img-circle" aria-hidden="true"></span>
                               </div>
                            </th> 
                        </tr>
                         <tr class="th-bg">
                           <th colspan="4" class="text-center">  
                               <div class="view-name">{{ $userProfile->name }}</div> 
                           </th> 
                        </tr>
                        <tr class="th-bg">
                           <th colspan="4" class="text-center">Dean</th> 
                        </tr>
                          
                   </thead>

                   <tbody>
                        <tr>
                           <td colspan="4">
                             <h3 class="nomargin"> Personal Information</h3>
                           </td>                                                  
                       </tr>

                       <tr>
                           <td>Date of Birth</td>
                           <td> {{ $userProfile->birth_date }}</td>
                           <td>Joining Date</td>
                           <td> {{ $userProfile->joining_date }}</td>
                                                   
                       </tr>
                       <tr>
                           <td> Gender</td>
                           <td> {{ $userProfile->gender }}</td>    
                           <td> Religion</td>
                           <td> {{ $userProfile->religion }}</td>                          
                                                     
                       </tr>
                       <tr>
                           <td> Email </td>
                           <td> {{ $userProfile->email }}</td>    
                           <td> Phone</td>
                           <td> {{ $userProfile->phone }}</td>                         
                                                     
                       </tr>
                       

                       <tr>                              
                           <td> Username</td>
                           <td colspan="3"> {{ $userProfile->username }}</td>                      
                                                     
                       </tr>

                   </tbody>
               </table>                 


                

            </div>
            <div class="clearfix"></div>
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