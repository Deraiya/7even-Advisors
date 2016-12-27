@extends('layouts.master')
@section('title')
    Dashboard
@endsection('title')

@section('content')
    <div class=" col-md-2"></div>
    <div class=" col-md-8">

    <div>
        <div class="modal fade" id="team" >
            <div class="modal-dialog" >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                        <h4 class="modal-title"><b>Add Team</b></h4>
                    </div>
                    <form>
                        <div class="modal-body" >
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label>First Name</label>
                                        <input type="text"  placeholder="first name " class="form-control" name="first_name" id="first_name">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Middle Name Name</label>
                                        <input type="text"  placeholder="middle name" class="form-control" name="first_name" id="first_name">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Last Name</label>
                                        <input type="text"  placeholder="last name " class="form-control" name="first_name" id="first_name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 form-group">
                                        <label>Address</label>
                                        <textarea  placeholder="Enter Name Here"  row="3" class="form-control" name="first_name" id="first_name"></textarea>
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Phone</label>
                                        <input type="text"  placeholder="Enter Name Here" class="form-control" name="first_name" id="first_name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 form-group">
                                        <label>Email</label>
                                        <input type="text"  placeholder="Enter Name Here"   class="form-control" name="first_name" id="first_name">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Password</label>
                                        <div class="password">
                                            <input type="password" id="passwordfield" class="form-control" placeholder="password">
                                            <span class="glyphicon glyphicon-eye-open"></span>
                                        </div>
                                        <script type="text/javascript">
                                            $("#passwordfield").on("keyup",function(){
                                                if($(this).val())
                                                    $(".glyphicon-eye-open").show();
                                                else
                                                    $(".glyphicon-eye-open").hide();
                                            });
                                            $(".glyphicon-eye-open").mousedown(function(){
                                                $("#passwordfield").attr('type','text');
                                            }).mouseup(function(){
                                                $("#passwordfield").attr('type','password');
                                            }).mouseout(function(){
                                                $("#passwordfield").attr('type','password');
                                            });
                                        </script>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <h4> Datatable</h4>
                <div class="table-responsive ">


                    <table id="mytable" class="table table-bordred table-striped">

                        <thead>

                        <th><input type="checkbox" id="checkall" /></th>
                        <th>Vendor Name</th>
                        <th>Bill No</th>
                        <th>Bill Date</th>
                        <th>Reciept Date</th>
                        <th>Amount</th>
                        <th>AC Doc NO</th>
                        <th>Remark</th>
                        <th>Attachment</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </thead>
                        <tbody>

                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>pratik</td>
                            <td>00000</td>
                            <td>12/12/12</td>
                            <td>00/00/00</td>
                            <td>100000</td>
                            <td></td>
                            <td></td>
                            <td><a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-download-alt"></span> Download </button></a></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                        </tr>

                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>pratik</td>
                            <td>00000</td>
                            <td>12/12/12</td>
                            <td>00/00/00</td>
                            <td>100000</td>
                            <td></td>
                            <td></td>
                            <td><a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-download-alt"></span> Download </button></a></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                        </tr>


                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>pratik</td>
                            <td>00000</td>
                            <td>12/12/12</td>
                            <td>00/00/00</td>
                            <td>100000</td>
                            <td></td>
                            <td></td>
                            <td><a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-download-alt"></span> Download </button></a></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                        </tr>



                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>pratik</td>
                            <td>00000</td>
                            <td>12/12/12</td>
                            <td>00/00/00</td>
                            <td>100000</td>
                            <td></td>
                            <td></td>
                            <td><a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-download-alt"></span> Download </button></a></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                        </tr>


                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>pratik</td>
                            <td>00000</td>
                            <td>12/12/12</td>
                            <td>00/00/00</td>
                            <td>100000</td>
                            <td></td>
                            <td></td>
                            <td><a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-download-alt"></span> Download </button></a></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                        </tr>





                        </tbody>

                    </table>



                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input class="form-control " type="text" placeholder="">
                    </div>
                    <div class="form-group">

                        <input class="form-control " type="text" placeholder="">
                    </div>
                    <div class="form-group">
                        <textarea rows="2" class="form-control" placeholder=""></textarea>


                    </div>
                </div>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>



    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                </div>
                <div class="modal-body">

                    <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

                </div>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    </div>

  <div class="col-md-2"></div>

@endsection('content')