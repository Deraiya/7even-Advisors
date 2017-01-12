@extends('layouts.client_master')

@section('title')
    Welcome!
@endsection('title')


@section('side_bar')
    <aside class="main-sidebar">
        <section class="sidebar">
            <ul class="sidebar-menu">
                <li class="header">HEADER</li>
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

            </ul>
        </section>
    </aside>

@endsection('side_bar')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1><b>
                    Welcome!
                </b>
            </h1>

        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <h3 class="box-title">User Details</h3>


                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form class="form-horizontal">

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Vendor Name</label>

                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                            <select class="form-control select2" style="width: 100%;">
                                                                <option selected="selected">Alabama</option>
                                                                <option>Alaska</option>
                                                                <option>California</option>
                                                                <option>Delaware</option>
                                                                <option>Tennessee</option>
                                                                <option>Texas</option>
                                                                <option>Washington</option>
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Bill Number</label>

                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Enter ...">

                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Bill Date</label>

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
                                            <label class="col-sm-2 control-label">Recipt Date</label>

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
                                            <label class="col-sm-2 control-label">Amount</label>

                                            <div class="col-sm-5">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-rupee"></i>
                                                    </div>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">STN</label>

                                            <div class="col-sm-5">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-square"></i>
                                                    </div>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">TIN/VAT</label>

                                            <div class="col-sm-5">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa  fa-star"></i>
                                                    </div>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Attachment</label>

                                            <div class="col-sm-5">
                                                <input id="file-3" type="file" multiple=true>
                                            </div>
                                        </div>

                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>

                                    </form>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xs-12">


                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"><b>Previous Entries</b></h3>
                        </div>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
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
                                </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>abc</td>
                                        <td>B125</td>
                                        <td>10/10/10</td>
                                        <td>11/13/10</td>
                                        <td>134</td>
                                        <td>djksna</td>
                                        <td>jksnj</td>
                                        <td>jcnkdjnck</td>
                                        <td>-</td>
                                        <td><div class="btn-group">
                                                <button type="button" class="btn btn-info fa fa-file">&nbsp View</button></td>
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
