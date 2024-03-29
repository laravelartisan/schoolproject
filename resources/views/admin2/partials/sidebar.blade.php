<!-- Left side column. contains the sidebar -->

<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>this is side bar
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
<span class="input-group-btn">
  <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
</span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Admin</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="#"><i class="fa fa-laptop"></i><span>Dashboard</span></a></li>
            <li class="active"><a href="#"><i class="fa fa-laptop"></i><span>Student</span></a></li>
            <li class="active"><a href="#"><i class="fa fa-laptop"></i><span>Parents</span></a></li>
            <li class="active"><a href="#"><i class="fa fa-laptop"></i><span>Teacher</span></a></li>
            <li class="active"><a href="#"><i class="fa fa-laptop"></i><span>User</span></a></li>
            <li class="active"><a href="#"><i class="fa fa-laptop"></i><span>Class</span></a></li>
            <li class="active"><a href="#"><i class="fa fa-laptop"></i><span>Section</span></a></li>
            <li class="active"><a href="#"><i class="fa fa-laptop"></i><span>Subject</span></a></li>
            <li class="active"><a href="#"><i class="fa fa-laptop"></i><span>Grade</span></a></li>


           {{-- <li class="treeview">
                <a href="#" class="exam"><span>Exam</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Link in level 2</a></li>
                    <li><a href="#">Link in level 2</a></li>
                </ul>
            </li>--}}

            <li class="header">Exam</li>
            <li class="active"><a href="#"><i class="fa fa-laptop"></i><span>Exam</span></a></li>
            <li class="active"><a href="#"><i class="fa fa-laptop"></i><span>Exam Schedule</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>