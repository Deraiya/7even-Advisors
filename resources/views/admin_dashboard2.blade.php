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
                            <span class="hidden-xs">Alexander Pierce</span>
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
                <li><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span> </i></a></li>
                <li class="treeview">
                    <a href="#"><i class='fa  fa-user-plus'></i> <span>Add Users</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="#">Add Client</a></li>
                        <li><a href="#">Add Team</a></li>
                    </ul>
                </li>
                <li class="active"><a href="#"><i class='fa fa-link'></i> <span>Relations</span></a></li>
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
            <h1>
                Rehman
                <small>Detail Description</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">



                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Full Features</h3>
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
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
<!-- ------------------------------------------ 10 Trail Entries  ---------------------------------------------------------- -->
                                <tr>
                                    <td>1</td>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td> 4</td>
                                    <td>X</td>
                                    <td>ABC</td>
                                    <td>Remark</td>
                                    <td><div class="btn-group">
                                            <button type="button" class="btn btn-info">Action</button>
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">

                                                <li><a href="#" class="fa fa-edit">&nbsp Edit</a></li>
                                                <li><a href="#" class="fa fa-download">&nbsp Attachment</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#" class="fa  fa-trash">&nbsp Delete</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5</td>
                                    <td>C</td>
                                    <td>ABC</td>
                                    <td>Remark</td>
                                    <td><div class="btn-group">
                                            <button type="button" class="btn btn-info">Action</button>
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">

                                                <li><a href="#" class="fa fa-edit">&nbsp Edit</a></li>
                                                <li><a href="#" class="fa fa-download">&nbsp Attachment</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#" class="fa  fa-trash">&nbsp Delete</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 5.5
                                    </td>
                                    <td>Win 95+</td>
                                    <td>5.5</td>
                                    <td>A</td>
                                    <td>ABC</td>
                                    <td>Remark</td>
                                    <td><div class="btn-group">
                                            <button type="button" class="btn btn-info">Action</button>
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">

                                                <li><a href="#" class="fa fa-edit">&nbsp Edit</a></li>
                                                <li><a href="#" class="fa fa-download">&nbsp Attachment</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#" class="fa  fa-trash">&nbsp Delete</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 6
                                    </td>
                                    <td>Win 98+</td>
                                    <td>6</td>
                                    <td>A</td>
                                    <td>ABC</td>
                                    <td>Remark</td>
                                    <td><div class="btn-group">
                                            <button type="button" class="btn btn-info">Action</button>
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">

                                                <li><a href="#" class="fa fa-edit">&nbsp Edit</a></li>
                                                <li><a href="#" class="fa fa-download">&nbsp Attachment</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#" class="fa  fa-trash">&nbsp Delete</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Trident</td>
                                    <td>Internet Explorer 7</td>
                                    <td>Win XP SP2+</td>
                                    <td>7</td>
                                    <td>A</td>
                                    <td>ABC</td>
                                    <td>Remark</td>
                                    <td><div class="btn-group">
                                            <button type="button" class="btn btn-info">Action</button>
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">

                                                <li><a href="#" class="fa fa-edit">&nbsp Edit</a></li>
                                                <li><a href="#" class="fa fa-download">&nbsp Attachment</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#" class="fa  fa-trash">&nbsp Delete</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Trident</td>
                                    <td>AOL browser (AOL desktop)</td>
                                    <td>Win XP</td>
                                    <td>6</td>
                                    <td>A</td>
                                    <td>ABC</td>
                                    <td>Remark</td>
                                    <td><div class="btn-group">
                                            <button type="button" class="btn btn-info">Action</button>
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">

                                                <li><a href="#" class="fa fa-edit">&nbsp Edit</a></li>
                                                <li><a href="#" class="fa fa-download">&nbsp Attachment</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#" class="fa  fa-trash">&nbsp Delete</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Gecko</td>
                                    <td>Firefox 1.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.7</td>
                                    <td>A</td>
                                    <td>ABC</td>
                                    <td>Remark</td>
                                    <td><div class="btn-group">
                                            <button type="button" class="btn btn-info">Action</button>
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">

                                                <li><a href="#" class="fa fa-edit">&nbsp Edit</a></li>
                                                <li><a href="#" class="fa fa-download">&nbsp Attachment</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#" class="fa  fa-trash">&nbsp Delete</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Gecko</td>
                                    <td>Firefox 1.5</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                    <td>ABC</td>
                                    <td>Remark</td>
                                    <td><div class="btn-group">
                                            <button type="button" class="btn btn-info">Action</button>
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">

                                                <li><a href="#" class="fa fa-edit">&nbsp Edit</a></li>
                                                <li><a href="#" class="fa fa-download">&nbsp Attachment</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#" class="fa  fa-trash">&nbsp Delete</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Gecko</td>
                                    <td>Firefox 2.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                    <td>ABC</td>
                                    <td>Remark</td>
                                    <td><div class="btn-group">
                                            <button type="button" class="btn btn-info">Action</button>
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">

                                                <li><a href="#" class="fa fa-edit">&nbsp Edit</a></li>
                                                <li><a href="#" class="fa fa-download">&nbsp Attachment</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#" class="fa  fa-trash">&nbsp Delete</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Gecko</td>
                                    <td>Firefox 3.0</td>
                                    <td>Win 2k+ / OSX.3+</td>
                                    <td>1.9</td>
                                    <td>A</td>
                                    <td>ABC</td>
                                    <td>Remark</td>
                                    <td><div class="btn-group">
                                            <button type="button" class="btn btn-info">Action</button>
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">

                                                <li><a href="#" class="fa fa-edit">&nbsp Edit</a></li>
                                                <li><a href="#" class="fa fa-download">&nbsp Attachment</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#" class="fa  fa-trash">&nbsp Delete</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
<!-- ------------------------------------------ 10 Trail Entries  ---------------------------------------------------------- -->
                                <tr>
                                    <td>10</td>
                                    <td>Gecko</td>
                                    <td>Firefox 3.0</td>
                                    <td>Win 2k+ / OSX.3+</td>
                                    <td>1.9</td>
                                    <td>A</td>
                                    <td>ABC</td>
                                    <td>Remark</td>
                                    <td><div class="btn-group">
                                            <button type="button" class="btn btn-info">Action</button>
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">

                                                <li><a href="#" class="fa fa-edit">&nbsp Edit</a></li>
                                                <li><a href="#" class="fa fa-download">&nbsp Attachment</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#" class="fa  fa-trash">&nbsp Delete</a></li>
                                            </ul>
                                        </div></td>
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
                                    <th>Action</th>

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
