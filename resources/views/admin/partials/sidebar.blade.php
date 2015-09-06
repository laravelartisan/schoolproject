<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('bower_components/admin-lte/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>N M Khan</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Dashboard</li>

            <li class="active"><a href="admin"><i class="fa fa-laptop text-red"></i><span>Dashboard</span></a></li>
            <li class="active"><a href="{{ url('student') }}"><i class="fa fa-mortar-board text-red"></i><span>Student</span></a></li>
            <li class="active"><a href="{{ url('parent') }}"><i class="fa fa-user text-red"></i><span>Parents</span></a></li>
            <li class="active"><a href="{{ url('teacher') }}"><i class="fa fa fa-user text-red"></i><span>Teacher</span></a></li>
            <li class="active"><a href="{{ url('user') }}"><i class="fa fa-users text-red"></i><span>User</span></a></li>
            <li class="active"><a href="#"><i class="fa fa-sitemap text-red"></i><span>Class</span></a></li>
            <li class="active"><a href="#"><i class="fa fa-star text-red"></i><span>Section</span></a></li>
            <li class="active"><a href="#"><i class="fa fa-book text-red"></i><span>Subject</span></a></li>
            <li class="active"><a href="#"><i class="fa fa-signal text-red"></i><span>Grade</span></a></li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-text text-red"></i>
                    <span>Exam</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/charts/chartjs.html"><i class="fa fa-pencil"></i> Exam</a></li>
                    <li><a href="pages/charts/morris.html"><i class="fa fa-puzzle-piece"></i> Exam Schedule</a></li>
                    {{-- <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                     <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>--}}
                </ul>
            </li>
            <li class="active"><a href="#"><i class="fa fa-flask text-red"></i><span>Mark</span></a></li>
            <li class="active"><a href="#"><i class="fa fa-list-alt text-red"></i><span>Routine</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-text text-red"></i>
                    <span>Attendance</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/UI/general.html"><i class="fa fa-sticky-note"></i> Student Attendance</a></li>
                    <li><a href="pages/UI/icons.html"><i class="fa fa-sticky-note"></i> Teacher Attendance</a></li>
                    <li><a href="pages/UI/buttons.html"><i class="fa fa-sticky-note"></i> Exam Attendance</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book text-red"></i> <span>Library</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/forms/general.html"><i class="fa fa-user"></i> Member</a></li>
                    <li><a href="pages/forms/advanced.html"><i class="fa fa-book"></i> Books</a></li>
                    <li><a href="pages/forms/editors.html"><i class="fa fa-list-ol"></i> Issue</a></li>
                    <li><a href="pages/forms/editors.html"><i class="fa fa-scissors"></i> Fine</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bus text-red"></i> <span>Transport</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/tables/simple.html"><i class="fa fa-train"></i> Transport</a></li>
                    <li><a href="pages/tables/data.html"><i class="fa fa-user"></i> Member</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-hotel text-red"></i> <span>Hostel</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/examples/invoice.html"><i class="fa fa-hotel"></i> Hostel</a></li>
                    <li><a href="pages/examples/profile.html"><i class="fa fa-leaf"></i> Category</a></li>
                    <li><a href="pages/examples/login.html"><i class="fa fa-user"></i> Member</a></li>
                    {{--<li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>--}}
                    {{--<li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                    <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                    <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                    <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>--}}
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-excel-o text-red"></i> <span>Account</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Free Type</a></li>

                    <li><a href="#"><i class="fa fa-files-o"></i> Invoice</a></li>
                    <li><a href="#"><i class="fa fa-money"></i> Balance</a></li>
                    <li><a href="#"><i class="fa fa-minus-square"></i> Expense</a></li>
                    <li><a href="#"><i class="fa fa-key"></i> Payment Settings</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-level-up text-red"></i> <span>Promotion</span></a></li>

            <li><a href="#"><i class="fa fa-film text-red"></i> <span>Media</span></a></li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-mail-forward text-red"></i> <span>Mail/SMS</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/examples/invoice.html"><i class="fa fa-map "></i> Mail/SMS Template</a></li>
                    <li><a href="pages/examples/profile.html"><i class="fa fa-mail-reply"></i> Mail/SMS</a></li>
                    <li><a href="pages/examples/login.html"><i class="fa fa-wrench "></i> SMS Settings</a></li>


                </ul>
            </li>


            <li><a href="#"><i class="fa fa-envelope text-red"></i> <span>Message</span></a></li>
            <li><a href="#"><i class="fa fa-calendar text-red"></i> <span>Notice</span></a></li>
            <li><a href="#"><i class="fa fa-clipboard text-red"></i> <span>Report</span></a></li>
            <li><a href="#"><i class="fa fa-gears text-red"></i> <span>Settings</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>