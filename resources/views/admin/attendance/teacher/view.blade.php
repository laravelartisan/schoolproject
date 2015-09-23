@extends('admin.layouts.admin')


@section('head')
    {!! Html::style('css/styles.css') !!}
@endsection



@section('content')
    <div class="container-fluid" style="min-height: 1215px;">
        <div class="row">
            <div class="col-md-12">
                <div class="view-header">
                    <div class="col-md-6">                     
                        <button class="btn btn-warning"><span class="fa fa-print"></span> Print </button>
                         <button class="btn btn-warning"><span class="fa fa-file"></span> PDF Preview </button>
                         <button class="btn btn-warning"><span class="fa fa-file"></span> Edit</button>
                         <button class="btn btn-warning"><span class="fa fa-file"></span> Send Pdf to Mail </button> 
                    </div>
                    <div class="col-md-6 view">
                        <ul class="breadcrumb text-right">
                            <li>
                                <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
                                <a href="#">Dashboard</a></li>
                            <li class="active">Teacher</li>
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
                           <th colspan="4" class="text-center">{{ $userProfile->email }}</th> 
                        </tr>
                          
                   </thead>

                   <tbody>
                        <tr>
                           <td colspan="4">
                             <h3 class="nomargin"> Personal Information</h3>
                           </td>                                                  
                       </tr>

                       <tr>
                           <td>Father's Name </td>
                           <td> {{ $userProfile->father_name }}</td>
                           <td> Mother's Name</td>
                           <td> {{ $userProfile->mother_name }}</td>
                                                   
                       </tr>
                       <tr>
                           <td> Date of Birth </td>
                           <td> {{ $userProfile->birth_date }}</td>    
                           <td> Gender </td>
                           <td> {{ $userProfile->gender }}</td>                          
                                                     
                       </tr>
                       <tr>
                           <td> Religion </td>
                           <td> {{ $userProfile->religion }}</td>    
                           <td> Phone</td>
                           <td> {{ $userProfile->phone }}</td>                         
                                                     
                       </tr>
                       <tr>
                           <td> Address </td>
                           <td> {{ $userProfile->address }}</td>    
                           <td> Joining Date</td>
                           <td>  {{ $userProfile->joining_date }}</td>                         
                                                     
                       </tr>

                       <tr>
                           <td> Type </td>
                           <td>Accountant</td>    
                           <td> Username</td>
                           <td>   {{ $userProfile->username }}</td>                         
                                                     
                       </tr>

                   </tbody>
               </table> 

               <table class="table table-bordered table-hover table-responsive view-table-holder">
                  <thead>
                     <tr>
                        <td colspan="32">
                          <h3 class="nomargin"> Attendance  Information</h3>
                        </td>                                                  
                      </tr>
                      <tr>
                          <th>#</th>
                          <th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th><th>10</th><th>11</th><th>12</th><th>13</th><th>14</th><th>15</th><th>16</th><th>17</th><th>18</th><th>19</th><th>20</th><th>21</th><th>22</th><th>23</th><th>24</th><th>25</th><th>26</th><th>27</th><th>28</th><th>29</th><th>30</th><th>31</th>
                          </tr>
                      </thead>
                      <tbody>
                      <tr>
                          <th>August</th>
                          <td data-title="1" class="att-bg-color">P</td>
                          <td data-title="2" class="att-bg-color">P</td>
                          <td data-title="3" class="att-bg-color">P</td>
                          <td data-title="4" class="att-bg-color">P</td>
                          <td data-title="5" class="att-bg-color">P</td>
                          <td data-title="6" class="att-bg-color">P</td>
                          <td data-title="7" class="att-bg-color">A</td>
                          <td data-title="8" class="att-bg-color">P</td>
                          <td data-title="9" class="att-bg-color">P</td>
                          <td data-title="10" class="att-bg-color">P</td>
                          <td data-title="11" class="att-bg-color">P</td>
                          <td data-title="12" class="att-bg-color">P</td>
                          <td data-title="13" class="att-bg-color">P</td>
                          <td data-title="14" class="att-bg-color">A</td>
                          <td data-title="15" class="att-bg-color">P</td>
                          <td data-title="16" class="att-bg-color">P</td>
                          <td data-title="17" class="att-bg-color">p</td>
                          <td data-title="18" class="att-bg-color">P</td>
                          <td data-title="19" class="att-bg-color">p</td>
                          <td data-title="20" class="att-bg-color">P</td>
                          <td data-title="21" class="att-bg-color">A</td>
                          <td data-title="22" class="att-bg-color">p</td>
                          <td data-title="23" class="att-bg-color">P</td>
                          <td data-title="24" class="att-bg-color">P</td>
                          <td data-title="25" class="att-bg-color">p</td>
                          <td data-title="26" class="att-bg-color">p</td>
                          <td data-title="27" class="att-bg-color">P</td>
                          <td data-title="28" class="att-bg-color">A</td>
                          <td data-title="29" class="att-bg-color">P</td>
                          <td data-title="30" class="att-bg-color">P</td>
                          <td data-title="31" class="att-bg-color">P</td>
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