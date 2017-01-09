@extends('layouts.company_master')

@section('title')
    Add Client
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
                                    <small>Member</small>
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
            <h1>
                <b>
                    Sign Up
                </b>
            </h1>
        </section>
        <section class="content">


            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">User Details</h3>


                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form class="form-horizontal">
                                <div class="box-body">

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="fname" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                                        <div class="col-sm-8">
                                            <input type="email" class="form-control" id="inputEmail3"
                                                   placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                                        <div class="col-sm-8">

                                            <div class="input-group ">
                                                <input type="password" class="form-control" value="password"
                                                       id="inputPassword3"
                                                       placeholder="Password">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-eye" id="showme"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Contact Number</label>

                                    <div class="col-sm-5">

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Date Of Birth</label>

                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control"
                                                   data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Address</label>

                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">PAN Card No.</label>

                                    <div class="col-sm-5">
                                        <div class="input-group">

                                            <input type="text" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Define Role</label>

                                    <div class="col-sm-2">
                                        <select class="form-control" >
                                            <option>Client</option>
                                            <option>Team</option>
                                            <option>Admin</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-info">Create User</button>
                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->


        </section>
    </div>

@endsection('content')
