@extends('layouts.company_master')

@section('title')
    --Admin Panel--
@endsection('title')



@section('nav_bar')
    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>7</b>A</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>7even</b>Admin</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">Mr. Deepak Raorane</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    Mr. Deepak Raorane
                                    <small>Member </small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>
@endsection('nav_bar')
@section('side_bar')
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->


            <!-- search form (Optional) -->

            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header">HEADER</li>
                <!-- Optionally, you can add icons to the links -->
                <li><a href="{{ URL::to('admin0')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </i></a></li>
                <li class="treeview">
                    <a href="#"><i class='fa  fa-user-plus'></i> <span>Add Users</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="#">Add Client</a></li>
                        <li><a href="#">Add Team</a></li>
                    </ul>
                </li>
                <li class="active"><a href="{{ URL::to('rel1')}}"><i class='fa fa-link'></i> <span>Relations</span></a></li>
                <li><a href="#"><i class='fa fa-phone-square'></i> <span>Contact Developer</span></a></li>

            </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

@endsection('side_bar')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1><b>
                    News Feed
                </b>
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>44</h3>

                                <p>Number Of Users</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="{{ URL::to('clientt')}}" class="small-box-footer">
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>44</h3>

                                <p>Number Of Team</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="{{ URL::to('teamt')}}" class="small-box-footer">
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <div class="row">
                @extends('layouts.company_master')

                @section('title')
                    --Admin Panel--
                @endsection('title')



                @section('nav_bar')
                <!-- Main Header -->
                    <header class="main-header">

                        <!-- Logo -->
                        <a href="index2.html" class="logo">
                            <!-- mini logo for sidebar mini 50x50 pixels -->
                            <span class="logo-mini"><b>7</b>A</span>
                            <!-- logo for regular state and mobile devices -->
                            <span class="logo-lg"><b>7even</b>Admin</span>
                        </a>

                        <!-- Header Navbar -->
                        <nav class="navbar navbar-static-top" role="navigation">
                            <!-- Sidebar toggle button-->
                            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                                <span class="sr-only">Toggle navigation</span>
                            </a>
                            <!-- Navbar Right Menu -->
                            <div class="navbar-custom-menu">
                                <ul class="nav navbar-nav">
                                    <!-- User Account Menu -->
                                    <li class="dropdown user user-menu">
                                        <!-- Menu Toggle Button -->
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <!-- The user image in the navbar-->
                                            <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                            <span class="hidden-xs">Mr. Deepak Raorane</span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <!-- The user image in the menu -->
                                            <li class="user-header">
                                                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                                <p>
                                                    Mr. Deepak Raorane
                                                    <small>Member </small>
                                                </p>
                                            </li>
                                            <!-- Menu Footer-->
                                            <li class="user-footer">
                                                <div class="pull-left">
                                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                                </div>
                                                <div class="pull-right">
                                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- Control Sidebar Toggle Button -->

                                </ul>
                            </div>
                        </nav>
                    </header>
                @endsection('nav_bar')
                @section('side_bar')
                    <aside class="main-sidebar">
                        <section class="sidebar">
                            <ul class="sidebar-menu">
                                <li class="header">HEADER</li>
                                <!-- Optionally, you can add icons to the links -->
                                <li><a href="{{ URL::to('admin0')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </i></a></li>
                                <li class="treeview">
                                    <a href="#"><i class='fa  fa-user-plus'></i> <span>Add Users</span> <i class="fa fa-angle-left pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="#">Add Client</a></li>
                                        <li><a href="#">Add Team</a></li>
                                    </ul>
                                </li>
                                <li class="active"><a href="{{ URL::to('rel1')}}"><i class='fa fa-link'></i> <span>Relations</span></a></li>
                                <li><a href="#"><i class='fa fa-phone-square'></i> <span>Contact Developer</span></a></li>

                            </ul>
                        </section>

                    </aside>

                @endsection('side_bar')

                @section('content')
                    <div class="content-wrapper">
                        <section class="content-header">
                        <h1><b>
                                User Name
                            </b>
                        </h1>

                    </section>
                        <section class="content">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h3 class="box-title"><b>History</b></h3>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <table id="example1" class="table table-bordered table-striped table-responsive">
                                                <thead>
                                                <tr>
                                                    <th>Serial No.</th>
                                                    <th>Vendor No.</th>
                                                    <th>Bill No.</th>
                                                    <th>Bill Date</th>
                                                    <th>Reciept</th>
                                                    <th>Amount</th>
                                                    <th>Acc. Doc No</th>
                                                    <th>Remark</th>
                                                    <th>Attachment</th>
                                                    <th>Submit</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>abc</td>
                                                    <td>B125</td>
                                                    <td>10/10/10</td>
                                                    <td>hhajh5126w</td>
                                                    <td>134</td>
                                                    <td>jdnjnwj</td>
                                                    <td>jvnorjeo</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-info btn-flat">Action</button>
                                                            <button type="button" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                                <span class="caret"></span>
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="#">Save Attachments</a></li>
                                                                <li><a href="#">Edit Details</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-danger">Submit</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>abc</td>
                                                    <td>B125</td>
                                                    <td>10/10/10</td>
                                                    <td>hhajh5126w</td>
                                                    <td>134</td>
                                                    <td>wnodvnow</td>
                                                    <td>svnwdhv</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-info btn-flat">Action</button>
                                                            <button type="button" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                                <span class="caret"></span>
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="#">Save Attachments</a></li>
                                                                <li><a href="#">Edit Details</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-danger">Submit</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>abc</td>
                                                    <td>B125</td>
                                                    <td>10/10/10</td>
                                                    <td>hhajh5126w</td>
                                                    <td>134</td>
                                                    <td>jvsndisfidu</td>
                                                    <td> hdobln</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-info btn-flat">Action</button>
                                                            <button type="button" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                                <span class="caret"></span>
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="#">Save Attachments</a></li>
                                                                <li><a href="#">Edit Details</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-danger">Submit</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>abc</td>
                                                    <td>B125</td>
                                                    <td>10/10/10</td>
                                                    <td>hhajh5126w</td>
                                                    <td>134</td>
                                                    <td> njhbjhb</td>
                                                    <td>fnbljnbje</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-info btn-flat">Action</button>
                                                            <button type="button" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                                <span class="caret"></span>
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="#">Save Attachments</a></li>
                                                                <li><a href="#">Edit Details</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-danger">Submit</button>
                                                    </td>
                                                </tr>
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>Serial No.</th>
                                                    <th>Vendor No.</th>
                                                    <th>Bill No.</th>
                                                    <th>Bill Date</th>
                                                    <th>Reciept</th>
                                                    <th>Amount</th>
                                                    <th>Acc. Doc No</th>
                                                    <th>Remark</th>
                                                    <th>Attachment</th>
                                                    <th>Submit</th>

                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>

                                </div>

                            </div>
                        </section>

                    </div>
                @endsection('content')

            </div>


        </section>

    </div>
@endsection('content')
