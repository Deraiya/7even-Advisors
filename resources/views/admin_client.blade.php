@extends('layouts.company_master')

@section('title')
    Clients Table
@endsection('title')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               Client Profile Table
                <small></small>
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">

                        <div class="box-body">
                            <table id="example1"  class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Serail Number</th>
                                    <th>Name</th>
                                    <th>Email ID</th>
                                    <th>Phone No.</th>
                                    <th>Date Of Birth</th>
                                    <th>Address</th>
                                    <th>PAN No.</th>
                                    <th> Delete User</th>

                                </tr>
                                </thead>
                                <tbody>
                                <!-- ------------------------------------------ Trail Entries  ---------------------------------------------------------- -->
                                @for ($i = 0; $i < 10; $i++)
                                <tr>
                                    <td>1 </td>
                                    <td>Rehman </td>
                                    <td>abusderaiya@gmail.com </td>
                                    <td>1246292</td>
                                    <td>10/10/2015</td>
                                    <td>mumbai</td>
                                    <td>13462892</td>
                                   <td><div class="btn-group">
                                        <a><button type="button" class="btn btn-danger ">Delete</button></a></div></td>
                                </tr>
                                @endfor

                                <!-- ------------------------------------------ Trail Entries  ---------------------------------------------------------- -->
                                </tbody>

                                <tfoot>
                                <tr>
                                    <th>Serail Number</th>
                                    <th>Name</th>
                                    <th>Email ID</th>
                                    <th>Phone No.</th>
                                    <th>Date Of Birth</th>
                                    <th>Address</th>
                                    <th>PAN No.</th>
                                    <th> Delete User</th>
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
