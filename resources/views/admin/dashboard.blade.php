@extends('admin.layouts.admin')



@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>150</h3>
                  <p>New Students</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>
                  <p>Passing Rate</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>44</h3>
                  <p>Student Registrations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>65</h3>
                  <p>Active Students</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="#revenue-chart" data-toggle="tab">Admission</a></li>
                  <li><a href="#sales-chart" data-toggle="tab">Remote</a></li>
                  <li class="pull-left header"><i class="fa fa-inbox"></i> Students</li>
                </ul>
                <div class="tab-content no-padding">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
                </div>
              </div><!-- /.nav-tabs-custom -->

              <!-- Chat box -->
              <div class="box box-success">
                <div class="box-header">
                  <i class="fa fa-comments-o"></i>
                  <h3 class="box-title">Chat</h3>
                  <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                    <div class="btn-group" data-toggle="btn-toggle" >
                      <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>
                      <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                    </div>
                  </div>
                </div>
                <div class="box-body chat" id="chat-box">
                  <!-- chat item -->
                  <div class="item">
                    <img src="dist/img/user4-128x128.jpg" alt="user image" class="online">
                    <p class="message">
                      <a href="#" class="name">
                        <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                        Mike Doe
                      </a>
                      I would like to meet you to discuss the latest news about
                      the arrival of the new theme. They say it is going to be one the
                      best themes on the market
                    </p>
                    <div class="attachment">
                      <h4>Attachments:</h4>
                      <p class="filename">
                        Theme-thumbnail-image.jpg
                      </p>
                      <div class="pull-right">
                        <button class="btn btn-primary btn-sm btn-flat">Open</button>
                      </div>
                    </div><!-- /.attachment -->
                  </div><!-- /.item -->
                  <!-- chat item -->
                  <div class="item">
                    <img src="dist/img/user3-128x128.jpg" alt="user image" class="offline">
                    <p class="message">
                      <a href="#" class="name">
                        <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                        Alexander Pierce
                      </a>
                      I would like to meet you to discuss the latest news about
                      the arrival of the new theme. They say it is going to be one the
                      best themes on the market
                    </p>
                  </div><!-- /.item -->
                  <!-- chat item -->
                  <div class="item">
                    <img src="dist/img/user2-160x160.jpg" alt="user image" class="offline">
                    <p class="message">
                      <a href="#" class="name">
                        <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
                        Susan Doe
                      </a>
                      I would like to meet you to discuss the latest news about
                      the arrival of the new theme. They say it is going to be one the
                      best themes on the market
                    </p>
                  </div><!-- /.item -->
                </div><!-- /.chat -->
                <div class="box-footer">
                  <div class="input-group">
                    <input class="form-control" placeholder="Type message...">
                    <div class="input-group-btn">
                      <button class="btn btn-success"><i class="fa fa-plus"></i></button>
                    </div>
                  </div>
                </div>
              </div><!-- /.box (chat box) -->

              <!-- TO DO List -->
              <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">To Do List</h3>
                  <div class="box-tools pull-right">
                    <ul class="pagination pagination-sm inline">
                      <li><a href="#">&laquo;</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <ul class="todo-list">
                    <li>
                      <!-- drag handle -->
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <!-- checkbox -->
                      <input type="checkbox" value="" name="">
                      <!-- todo text -->
                      <span class="text">Design a nice theme</span>
                      <!-- Emphasis label -->
                      <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                      <!-- General tools such as edit or delete-->
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox" value="" name="">
                      <span class="text">Make the theme responsive</span>
                      <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox" value="" name="">
                      <span class="text">Let theme shine like a star</span>
                      <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox" value="" name="">
                      <span class="text">Let theme shine like a star</span>
                      <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox" value="" name="">
                      <span class="text">Check your messages and notifications</span>
                      <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                    <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      <input type="checkbox" value="" name="">
                      <span class="text">Let theme shine like a star</span>
                      <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div>
                    </li>
                  </ul>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix no-border">
                  <button class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
                </div>
              </div><!-- /.box -->

              <!-- quick email widget -->
              <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
                  <h3 class="box-title">Quick Email</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                  </div><!-- /. tools -->
                </div>
                <div class="box-body">
                  <form action="#" method="post">
                    <div class="form-group">
                      <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" placeholder="Subject">
                    </div>
                    <div>
                      <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                  </form>
                </div>
                <div class="box-footer clearfix">
                  <button class="pull-right btn btn-default" id="sendEmail">Send <i class="fa fa-arrow-circle-right"></i></button>
                </div>
              </div>

            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">

              <!-- Map box -->
              <div class="box box-solid bg-light-blue-gradient">
                <div class="box-header">
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range"><i class="fa fa-calendar"></i></button>
                    <button class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
                  </div><!-- /. tools -->

                  <i class="fa fa-map-marker"></i>
                  <h3 class="box-title">
                    Visitors
                  </h3>
                </div>
                <div class="box-body">
                  <div id="world-map" style="height: 250px; width: 100%;"></div>
                </div><!-- /.box-body-->
                <div class="box-footer no-border">
                  <div class="row">
                    <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                      <div id="sparkline-1"></div>
                      <div class="knob-label">Visitors</div>
                    </div><!-- ./col -->
                    <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                      <div id="sparkline-2"></div>
                      <div class="knob-label">Online</div>
                    </div><!-- ./col -->
                    <div class="col-xs-4 text-center">
                      <div id="sparkline-3"></div>
                      <div class="knob-label">Exists</div>
                    </div><!-- ./col -->
                  </div><!-- /.row -->
                </div>
              </div>
              <!-- /.box -->

              <!-- solid sales graph -->
              <div class="box box-solid bg-teal-gradient">
                <div class="box-header">
                  <i class="fa fa-th"></i>
                  <h3 class="box-title">Sales Graph</h3>
                  <div class="box-tools pull-right">
                    <button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body border-radius-none">
                  <div class="chart" id="line-chart" style="height: 250px;"></div>
                </div><!-- /.box-body -->
                <div class="box-footer no-border">
                  <div class="row">
                    <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                      <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">
                      <div class="knob-label">Mail-Orders</div>
                    </div><!-- ./col -->
                    <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                      <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">
                      <div class="knob-label">Online</div>
                    </div><!-- ./col -->
                    <div class="col-xs-4 text-center">
                      <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">
                      <div class="knob-label">In-Store</div>
                    </div><!-- ./col -->
                  </div><!-- /.row -->
                </div><!-- /.box-footer -->
              </div><!-- /.box -->

              <!-- Calendar -->
              <div class="box box-solid bg-green-gradient">
                <div class="box-header">
                  <i class="fa fa-calendar"></i>
                  <h3 class="box-title">Calendar</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <!-- button with a dropdown -->
                    <div class="btn-group">
                      <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
                      <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Add new event</a></li>
                        <li><a href="#">Clear events</a></li>
                        <li class="divider"></li>
                        <li><a href="#">View calendar</a></li>
                      </ul>
                    </div>
                    <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <!--The calendar -->
                  <div id="calendar" style="width: 100%"></div>
                </div><!-- /.box-body -->
                <div class="box-footer text-black">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- Progress bars -->
                      <div class="clearfix">
                        <span class="pull-left">Task #1</span>
                        <small class="pull-right">90%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                      </div>

                      <div class="clearfix">
                        <span class="pull-left">Task #2</span>
                        <small class="pull-right">70%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                      </div>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                      <div class="clearfix">
                        <span class="pull-left">Task #3</span>
                        <small class="pull-right">60%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                      </div>

                      <div class="clearfix">
                        <span class="pull-left">Task #4</span>
                        <small class="pull-right">40%</small>
                      </div>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                      </div>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div>
              </div><!-- /.box -->

            </section><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->


 {{--<div class="row">
     <div class="col-sm-12">
         <div class="box">
             <div class="box-header">
                 <h3 class="box-title">Data Table With Full Features</h3>
             </div><!-- /.box-header -->
             <div class="box-body">
                 <table id="example1" class="table table-bordered table-striped">
                     <thead>
                     <tr>
                         <th>Rendering engine</th>
                         <th>Browser</th>
                         <th>Platform(s)</th>
                         <th>Engine version</th>
                         <th>CSS grade</th>
                     </tr>
                     </thead>
                     <tbody>
                     <tr>
                         <td>Trident</td>
                         <td>Internet
                             Explorer 4.0</td>
                         <td>Win 95+</td>
                         <td> 4</td>
                         <td>X</td>
                     </tr>
                     <tr>
                         <td>Trident</td>
                         <td>Internet
                             Explorer 5.0</td>
                         <td>Win 95+</td>
                         <td>5</td>
                         <td>C</td>
                     </tr>
                     <tr>
                         <td>Trident</td>
                         <td>Internet
                             Explorer 5.5</td>
                         <td>Win 95+</td>
                         <td>5.5</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Trident</td>
                         <td>Internet
                             Explorer 6</td>
                         <td>Win 98+</td>
                         <td>6</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Trident</td>
                         <td>Internet Explorer 7</td>
                         <td>Win XP SP2+</td>
                         <td>7</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Trident</td>
                         <td>AOL browser (AOL desktop)</td>
                         <td>Win XP</td>
                         <td>6</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Gecko</td>
                         <td>Firefox 1.0</td>
                         <td>Win 98+ / OSX.2+</td>
                         <td>1.7</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Gecko</td>
                         <td>Firefox 1.5</td>
                         <td>Win 98+ / OSX.2+</td>
                         <td>1.8</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Gecko</td>
                         <td>Firefox 2.0</td>
                         <td>Win 98+ / OSX.2+</td>
                         <td>1.8</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Gecko</td>
                         <td>Firefox 3.0</td>
                         <td>Win 2k+ / OSX.3+</td>
                         <td>1.9</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Gecko</td>
                         <td>Camino 1.0</td>
                         <td>OSX.2+</td>
                         <td>1.8</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Gecko</td>
                         <td>Camino 1.5</td>
                         <td>OSX.3+</td>
                         <td>1.8</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Gecko</td>
                         <td>Netscape 7.2</td>
                         <td>Win 95+ / Mac OS 8.6-9.2</td>
                         <td>1.7</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Gecko</td>
                         <td>Netscape Browser 8</td>
                         <td>Win 98SE+</td>
                         <td>1.7</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Gecko</td>
                         <td>Netscape Navigator 9</td>
                         <td>Win 98+ / OSX.2+</td>
                         <td>1.8</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Gecko</td>
                         <td>Mozilla 1.0</td>
                         <td>Win 95+ / OSX.1+</td>
                         <td>1</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Gecko</td>
                         <td>Mozilla 1.1</td>
                         <td>Win 95+ / OSX.1+</td>
                         <td>1.1</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Gecko</td>
                         <td>Mozilla 1.2</td>
                         <td>Win 95+ / OSX.1+</td>
                         <td>1.2</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Gecko</td>
                         <td>Mozilla 1.3</td>
                         <td>Win 95+ / OSX.1+</td>
                         <td>1.3</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Gecko</td>
                         <td>Mozilla 1.4</td>
                         <td>Win 95+ / OSX.1+</td>
                         <td>1.4</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Gecko</td>
                         <td>Mozilla 1.5</td>
                         <td>Win 95+ / OSX.1+</td>
                         <td>1.5</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Gecko</td>
                         <td>Mozilla 1.6</td>
                         <td>Win 95+ / OSX.1+</td>
                         <td>1.6</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Gecko</td>
                         <td>Mozilla 1.7</td>
                         <td>Win 98+ / OSX.1+</td>
                         <td>1.7</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Gecko</td>
                         <td>Mozilla 1.8</td>
                         <td>Win 98+ / OSX.1+</td>
                         <td>1.8</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Gecko</td>
                         <td>Seamonkey 1.1</td>
                         <td>Win 98+ / OSX.2+</td>
                         <td>1.8</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Gecko</td>
                         <td>Epiphany 2.20</td>
                         <td>Gnome</td>
                         <td>1.8</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Webkit</td>
                         <td>Safari 1.2</td>
                         <td>OSX.3</td>
                         <td>125.5</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Webkit</td>
                         <td>Safari 1.3</td>
                         <td>OSX.3</td>
                         <td>312.8</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Webkit</td>
                         <td>Safari 2.0</td>
                         <td>OSX.4+</td>
                         <td>419.3</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Webkit</td>
                         <td>Safari 3.0</td>
                         <td>OSX.4+</td>
                         <td>522.1</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Webkit</td>
                         <td>OmniWeb 5.5</td>
                         <td>OSX.4+</td>
                         <td>420</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Webkit</td>
                         <td>iPod Touch / iPhone</td>
                         <td>iPod</td>
                         <td>420.1</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Webkit</td>
                         <td>S60</td>
                         <td>S60</td>
                         <td>413</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Presto</td>
                         <td>Opera 7.0</td>
                         <td>Win 95+ / OSX.1+</td>
                         <td>-</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Presto</td>
                         <td>Opera 7.5</td>
                         <td>Win 95+ / OSX.2+</td>
                         <td>-</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Presto</td>
                         <td>Opera 8.0</td>
                         <td>Win 95+ / OSX.2+</td>
                         <td>-</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Presto</td>
                         <td>Opera 8.5</td>
                         <td>Win 95+ / OSX.2+</td>
                         <td>-</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Presto</td>
                         <td>Opera 9.0</td>
                         <td>Win 95+ / OSX.3+</td>
                         <td>-</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Presto</td>
                         <td>Opera 9.2</td>
                         <td>Win 88+ / OSX.3+</td>
                         <td>-</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Presto</td>
                         <td>Opera 9.5</td>
                         <td>Win 88+ / OSX.3+</td>
                         <td>-</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Presto</td>
                         <td>Opera for Wii</td>
                         <td>Wii</td>
                         <td>-</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Presto</td>
                         <td>Nokia N800</td>
                         <td>N800</td>
                         <td>-</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Presto</td>
                         <td>Nintendo DS browser</td>
                         <td>Nintendo DS</td>
                         <td>8.5</td>
                         <td>C/A<sup>1</sup></td>
                     </tr>
                     <tr>
                         <td>KHTML</td>
                         <td>Konqureror 3.1</td>
                         <td>KDE 3.1</td>
                         <td>3.1</td>
                         <td>C</td>
                     </tr>
                     <tr>
                         <td>KHTML</td>
                         <td>Konqureror 3.3</td>
                         <td>KDE 3.3</td>
                         <td>3.3</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>KHTML</td>
                         <td>Konqureror 3.5</td>
                         <td>KDE 3.5</td>
                         <td>3.5</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Tasman</td>
                         <td>Internet Explorer 4.5</td>
                         <td>Mac OS 8-9</td>
                         <td>-</td>
                         <td>X</td>
                     </tr>
                     <tr>
                         <td>Tasman</td>
                         <td>Internet Explorer 5.1</td>
                         <td>Mac OS 7.6-9</td>
                         <td>1</td>
                         <td>C</td>
                     </tr>
                     <tr>
                         <td>Tasman</td>
                         <td>Internet Explorer 5.2</td>
                         <td>Mac OS 8-X</td>
                         <td>1</td>
                         <td>C</td>
                     </tr>
                     <tr>
                         <td>Misc</td>
                         <td>NetFront 3.1</td>
                         <td>Embedded devices</td>
                         <td>-</td>
                         <td>C</td>
                     </tr>
                     <tr>
                         <td>Misc</td>
                         <td>NetFront 3.4</td>
                         <td>Embedded devices</td>
                         <td>-</td>
                         <td>A</td>
                     </tr>
                     <tr>
                         <td>Misc</td>
                         <td>Dillo 0.8</td>
                         <td>Embedded devices</td>
                         <td>-</td>
                         <td>X</td>
                     </tr>
                     <tr>
                         <td>Misc</td>
                         <td>Links</td>
                         <td>Text only</td>
                         <td>-</td>
                         <td>X</td>
                     </tr>
                     <tr>
                         <td>Misc</td>
                         <td>Lynx</td>
                         <td>Text only</td>
                         <td>-</td>
                         <td>X</td>
                     </tr>
                     <tr>
                         <td>Misc</td>
                         <td>IE Mobile</td>
                         <td>Windows Mobile 6</td>
                         <td>-</td>
                         <td>C</td>
                     </tr>
                     <tr>
                         <td>Misc</td>
                         <td>PSP browser</td>
                         <td>PSP</td>
                         <td>-</td>
                         <td>C</td>
                     </tr>
                     <tr>
                         <td>Other browsers</td>
                         <td>All others</td>
                         <td>-</td>
                         <td>-</td>
                         <td>U</td>
                     </tr>
                     </tbody>
                     <tfoot>
                     <tr>
                         <th>Rendering engine</th>
                         <th>Browser</th>
                         <th>Platform(s)</th>
                         <th>Engine version</th>
                         <th>CSS grade</th>
                     </tr>
                     </tfoot>
                 </table>
             </div><!-- /.box-body -->
         </div><!-- /.box -->
     </div>
</div>--}}
@endsection