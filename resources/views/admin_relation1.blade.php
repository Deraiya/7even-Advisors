@extends('layouts.company_master')

@section('title')
    Relations
@endsection('title')


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Team
                <div class="fa fa-chain"></div>
                Client
                <small>One To One Relation</small>
            </h1>

        </section>


            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">


                        <div class="box">

                            <div class="box-body">
                                <table id="teamt" class="table table-bordered table-striped table-responsive">
                                    <thead>
                                    <tr>
                                        <th>Team Member ID</th>
                                        <th>Team Member Name</th>
                                        <th>Client's</th>
                                        <th>Add Client</th>
                                        <th>Remove Client</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-- ------------------------------------------ 10 Trail Entries  ---------------------------------------------------------- -->
                                    <tr>
                                        <td>1</td>
                                        <td>Rehman</td>
                                        <td>
                                                @for ($i = 0; $i < 10; $i++)
                                                    <span class="label label-info">Client1</span>
                                                @endfor
                                        </td>

                                        <td>
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
                                        </td>

                                        <td>
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
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Pratik</td>
                                        <td>
                                            @for ($i = 0; $i < 15; $i++)
                                                <span class="label label-info">Client1</span>
                                            @endfor
                                        </td>

                                        <td>
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
                                        </td>

                                        <td>
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
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Trident</td>
                                        <td>
                                            @for ($i = 0; $i < 4; $i++)
                                                <span class="label label-info">Client1</span>
                                            @endfor
                                        </td>

                                        <td>
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
                                        </td>

                                        <td>
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
                                        </td>


                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Trident</td>
                                        <td>
                                            @for ($i = 0; $i < 2; $i++)
                                                <span class="label label-info">Client1</span>
                                            @endfor
                                        </td>

                                        <td>
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
                                        </td>

                                        <td>
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
                                        </td>



                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Trident</td>
                                        <td>
                                            @for ($i = 0; $i < 5; $i++)
                                                <span class="label label-info">Client1</span>
                                            @endfor
                                        </td>

                                        <td>
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
                                        </td>

                                        <td>
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
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Trident</td>
                                        <td>
                                            @for ($i = 0; $i < 8; $i++)
                                                <span class="label label-info">Client1</span>
                                            @endfor
                                        </td>

                                        <td>
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
                                        </td>

                                        <td>
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
                                        </td>


                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Gecko</td>
                                        <td>
                                            @for ($i = 0; $i < 1; $i++)
                                                <span class="label label-info">Client1</span>
                                            @endfor
                                        </td>

                                        <td>
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
                                        </td>

                                        <td>
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
                                        </td>


                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Gecko</td>
                                        <td>
                                            @for ($i = 0; $i < 12; $i++)
                                                <span class="label label-info">Client1</span>
                                            @endfor
                                        </td>

                                        <td>
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
                                        </td>

                                        <td>
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
                                        </td>


                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Gecko</td>

                                        <td>
                                            @for ($i = 0; $i < 11; $i++)
                                                <span class="label label-info">Client1</span>
                                            @endfor
                                        </td>

                                        <td>
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
                                        </td>

                                        <td>
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
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Gecko</td>
                                        <td>
                                            @for ($i = 0; $i < 6; $i++)
                                                <span class="label label-info">Client1</span>
                                            @endfor
                                        </td>

                                        <td>
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
                                        </td>

                                        <td>
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
                                        </td>

                                    </tr>
                                    <!-- ------------------------------------------ 10 Trail Entries  ---------------------------------------------------------- -->
                                    <tr>
                                        <td>10</td>
                                        <td>Gecko</td>
                                        <td>
                                            @for ($i = 0; $i < 8; $i++)
                                                <span class="label label-info">Client1</span>
                                            @endfor
                                        </td>

                                        <td>
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
                                        </td>

                                        <td>
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
                                        </td>

                                    </tr>
                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <th>Team Member ID</th>
                                        <th>Team Member Name</th>
                                        <th>Client's</th>
                                        <th>Add Client</th>
                                        <th>Remove Client</th>
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

