@extends('layouts.company_master')

@section('title')
    Clients Table
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
                Vendors' Details
                <small></small>
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body">
                            <form>
                                <div class="form-group">
                                    <div class="form-group">
                                        <input id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="1">
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>


                <div class="col-xs-12">
                    <div class="box">

                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Serial Number</th>
                                    <th>Address 1</th>
                                    <th>Address 2 (city)</th>
                                    <th>Address 3 (state)</th>
                                    <th>PIN</th>
                                    <th>PAN</th>
                                    <th>Service TAX</th>
                                    <th>VAT/TIN</th>
                                    <th>Email</th>

                                </tr>
                                </thead>
                                <tbody>
                                @for ($i = 0; $i < 10; $i++)
                                    <tr>
                                        <td>1</td>
                                        <td>abc</td>
                                        <td>B125</td>
                                        <td>bhbha</td>
                                        <td>41671td>
                                        <td>566712738</td>
                                        <td>134</td>
                                        <td> 999282b</td>
                                        <td>abdg@gmail.com</td>

                                    </tr>
                                @endfor
                                </tbody>

                                <tfoot>
                                <tr>
                                    <th>Serial Number</th>
                                    <th>Address 1</th>
                                    <th>Address 2 (city)</th>
                                    <th>Address 3 (state)</th>
                                    <th>PIN</th>
                                    <th>PAN</th>
                                    <th>Service TAX</th>
                                    <th>VAT/TIN</th>
                                    <th>Email</th>
                                </tr>
                                </tfoot>

                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>


                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

@endsection('content')
