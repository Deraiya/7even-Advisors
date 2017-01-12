@extends('layouts.team_master')

@section('title')
    --Admin Panel--
@endsection('title')


@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1><b>
                    User Name
                </b>
            </h1>

        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"><b>History</b></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped table-responsive">
                                <thead>
                                <tr>
                                    <th>Serial Number</th>
                                    <th>Vendor Name</th>
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
                                @for ($i = 0; $i < 10; $i++)
                                    <tr>
                                        <td>1</td>
                                        <td>abc</td>
                                        <td>B125</td>
                                        <td>10/10/10</td>
                                        <th>19/19/35</th>
                                        <td>12352</td>
                                        <td>hhajh5126w</td>
                                        <td>13djbuf</td>
                                        <td> njhbjhb</td>
                                        <td>cvjh</td>
                                        <td>
                                            <button type="button" class="btn btn-info">&nbsp View &nbsp</button>
                                        </td>
                                    </tr>
                                @endfor

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Serial No.</th>
                                    <th>Vendor No.</th>
                                    <th>Bill No.</th>
                                    <th>Bill Date</th>
                                    <th>Reciept</th>
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
                        <!-- /.box-body -->
                    </div>

                </div>

            </div>
        </section>

    </div>
@endsection('content')
