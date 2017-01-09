@extends('layouts.company_master')

@section('title')
    Admin Panel
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

            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Profile</h3>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-yellow">
                                    <div class="inner">
                                        <h3>44</h3>

                                        <p>Number Of Client</p>
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

                </div>
            </div>
            <div class="row">

                <div class="col-xs-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">All Clients Recent Update</h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example2" class="table table-bordered table-striped ">
                                    <thead>
                                    <tr>
                                        <th>Serial Number</th>
                                        <th>Client</th>
                                        <th>Team Assigned</th>
                                        <th>Acc. Doc Number</th>
                                        <th>Date</th>
                                        <th>Client History</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-- ------------------------------------------ 10 Trail Entries  ---------------------------------------------------------- -->
                                    <tr>
                                        <td>1</td>
                                        <td>Rehman</td>
                                        <td>Team 1
                                        </td>
                                        <td>abshjgds7</td>
                                        <td>09/10/16</td>

                                        <td><div class="btn-group">
                                                <a href="{{ URL::to('his')}}"><button type="button" class="btn btn-info fa fa-history">&nbsp History</button></td></a>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>bhdch</td>
                                        <td>Pratik</td>
                                        <td>Team 2
                                        </td>
                                        <td>10/10/16</td>

                                        <td><div class="btn-group">
                                                <button type="button" class="btn btn-info fa fa-history">&nbsp History</button></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>vjbsldjls</td>
                                        <td>Trident</td>
                                        <td>Team 3
                                        </td>
                                        <td>09/11/16</td>

                                        <td><div class="btn-group">
                                                <button type="button" class="btn btn-info fa fa-history">&nbsp History</button></td>

                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>jsnfdljkl</td>
                                        <td>Trident</td>
                                        <td>Team 3
                                        </td>
                                        <td>09/11/16</td>

                                        <td><div class="btn-group">
                                                <button type="button" class="btn btn-info fa fa-history">&nbsp History</button></td>


                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>nbcabslf</td>
                                        <td>Trident</td>
                                        <td>Team 1
                                        </td>
                                        <td>09/10/16</td>

                                        <td><div class="btn-group">
                                                <button type="button" class="btn btn-info fa fa-history">&nbsp History</button></td>

                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">

                        </div>
                        <!-- /.box-footer -->
                    </div>
                </div>
            </div>

            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection('content')
