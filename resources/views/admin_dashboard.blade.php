@extends('layouts.company_master')

@section('title')
    Admin Panel
@endsection('title')

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
