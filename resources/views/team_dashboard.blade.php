@extends('layouts.client_master')

@section('title')
    Team Dashboard
@endsection('title')



@section('nav_bar')
    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="../../index2.html" class="navbar-brand"><b>7even</b>Advisors</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>



                <!-- /.navbar-collapse -->
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">



                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">Pratik Harsh</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                    <p>
                                        Pratik Harsh
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
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"><b>Unedited Entries</b></h3>
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
                                    <td><div>
                                            <input type="text" class="form-control" placeholder="Acc. Doc No.">
                                        </div>
                                    </td>
                                    <td><div>
                                            <input type="text" class="form-control" placeholder="Remarks">
                                        </div>
                                    </td>
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
                                    <td><div>
                                            <input type="text" class="form-control" placeholder="Acc. Doc No.">
                                        </div>
                                    </td>
                                    <td><div>
                                            <input type="text" class="form-control" placeholder="Remarks">
                                        </div>
                                    </td>
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
                                    <td><div>
                                            <input type="text" class="form-control" placeholder="Acc. Doc No.">
                                        </div>
                                    </td>
                                    <td><div>
                                            <input type="text" class="form-control" placeholder="Remarks">
                                        </div>
                                    </td>
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
                                    <td><div>
                                            <input type="text" class="form-control" placeholder="Acc. Doc No.">
                                        </div>
                                    </td>
                                    <td><div>
                                            <input type="text" class="form-control" placeholder="Remarks">
                                        </div>
                                    </td>
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
