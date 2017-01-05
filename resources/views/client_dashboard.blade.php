@extends('layouts.client_master')

@section('title')
    Welcome!
@endsection('title')



@section('nav_bar')
    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand"><b>7even</b>Advisors</a>
                </div>





                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">



                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">Mr. Rehman Deraiya</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                    <p>
                                        Rehman Deraiya
                                    </p>
                                </li>

                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Contact</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-custom-menu -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
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
                <li><a href="{{ URL::to('admin0')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </i></a>
                </li>
                <li class="treeview">
                    <a href="#"><i class='fa  fa-user-plus'></i> <span>Add Users</span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="#">Add Client</a></li>
                        <li><a href="#">Add Team</a></li>
                    </ul>
                </li>
                <li class="active"><a href="{{ URL::to('rel1')}}"><i class='fa fa-link'></i> <span>Relations</span></a>
                </li>
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
                    Welcome!
                </b>
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title"><b>New Entries</b></h3>
                        </div>
                        <div class="box-body">
                            <div><b>Details : </b></div>
                            <div class="row">
                                <div class="col-xs-1">
                                    <input type="text" class="form-control" placeholder="Vendor Name">
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" class="form-control" placeholder="Bill Number">
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" class="form-control" placeholder="Bill Date">
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" class="form-control" placeholder="Reciept">
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" class="form-control" placeholder="Amount">
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Attachments</label>
                                <input type="file" id="exampleInputFile">
                            </div>
                            <button type="button" class="btn btn-info btn-flat">Go!</button>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <div class="col-xs-12">


                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"><b>Previous Entries</b></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
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
                                        <td>jcnkdjnck</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>abc</td>
                                        <td>B125</td>
                                        <td>10/10/10</td>
                                        <td>hhajh5126w</td>
                                        <td>134</td>
                                        <td>jcnkdjnck</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>abc</td>
                                        <td>B125</td>
                                        <td>10/10/10</td>
                                        <td>hhajh5126w</td>
                                        <td>134</td>
                                        <td>jcnkdjnck</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>abc</td>
                                        <td>B125</td>
                                        <td>10/10/10</td>
                                        <td>hhajh5126w</td>
                                        <td>134</td>
                                        <td>jcnkdjnck</td>
                                        <td>-</td>
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
