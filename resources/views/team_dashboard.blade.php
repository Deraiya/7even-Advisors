@extends('layouts.client_master')

@section('title')
    Team Dashboard
@endsection('title')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        </section>

        <!-- Main content -->
        <section class="content ">
            <div class="row">


                    <div class="col-md-4">
                        <!-- Widget: user widget style 1 -->
                        <div class="box box-widget widget-user-2">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-yellow">
                                <!-- /.widget-user-image -->
                                <h3 class="widget-user-username">Pratik Kawalkar</h3>
                                <h5 class="widget-user-desc">Team Member</h5>
                            </div>
                            <div class="box-footer no-padding">
                                <ul class="nav nav-stacked">
                                    <li><a href="#">Associated Client <span class="pull-right badge bg-blue">31</span></a></li>
                                    <li><a href="#">Incomplete Project <span class="pull-right badge bg-aqua">5</span></a></li>

                                </ul>
                            </div>
                        </div>
                        <!-- /.widget-user -->
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>

                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"><b>Incomplete </b></h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            </div>
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
                                    <th>Reciept Date</th>
                                    <th>Amount</th>
                                    <th>STN</th>
                                    <th>VAT/TIN</th>
                                    <th>Acc. Doc No</th>
                                    <th>Remark</th>
                                    <th>Attachment</th>
                                    <th>Submit</th>
                                </tr>
                                </thead>
                                <tbody>



                                <tr>
                                    <td>1</td>
                                    <td>Rehmn</td>
                                    <td>B125</td>
                                    <td>10/10/10</td>
                                    <td>10/10/10</td>
                                    <td>18181</td>
                                    <td>hhajh5126w</td>
                                    <td>1hfhwnu8</td>
                                    <td><div>
                                            <input type="text" class="form-control" placeholder="Acc. Doc No.">
                                        </div>
                                    </td>
                                    <td><div>
                                            <input type="text" class="form-control" placeholder="Remarks">
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info">&nbsp View &nbsp</button>
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
                                    <th>Reciept Date</th>
                                    <th>Amount</th>
                                    <th>STN</th>
                                    <th>VAT/TIN</th>
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
                <div class="col-xs-12">
                    <div class="box box-default collapsed-box">

                        <div class="box-header">
                            <h3 class="box-title"><b>Client Table </b></h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            </div>
                        </div>



                        <div class="box-body">

                            <table id="example2" class="table table-bordered table-striped table-responsive">
                                        <thead>
                                        <tr>
                                            <th>Serail Number</th>
                                            <th>Name</th>
                                            <th>Email ID</th>
                                            <th>Contact Number</th>
                                            <th>Date Of Birth</th>
                                            <th>Address</th>
                                            <th>PAN Number</th>
                                            <th>History</th>

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
                                                <td><div class="btn-group"><button type="button" class="btn btn-info fa fa-history">&nbsp History</button></td>
                                            </tr>
                                        @endfor

                                        <!-- ------------------------------------------ Trail Entries  ---------------------------------------------------------- -->
                                        </tbody>

                                        <tfoot>
                                        <tr>
                                            <th>Serail Number</th>
                                            <th>Name</th>
                                            <th>Email ID</th>
                                            <th>Phone Number</th>
                                            <th>Date Of Birth</th>
                                            <th>Address</th>
                                            <th>PAN Number</th>
                                            <th>History</th>
                                        </tr>
                                        </tfoot>

                                    </table>
                        </div>

                    </div>

                </div>

            </div>
        </section>

    </div>
@endsection('content')

