@extends('layouts.master')

@section('title')
    Welcome!
@endsection
@section('content')


                <div class="row">
                    <div class="col-md-3"></div>

                    <div class="col-md-6    ">
                        <div class="well well-lg">
                            <h1>My Account</h1>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input class="form-control" type="text" name="username" id="username"></input>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" name="password" id="password"></input>
                                </div>
                                <button type="button" class="btn btn-primary btn-large">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-md-3"></div>


@endsection
