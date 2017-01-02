@extends('layouts.master')

@section('title')
    Welcome!
@endsection('title')
@section('content')


                <div class="row" >
                    <div class="col-md-3"></div>


                    <div class="col-md-6">
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
                                <a href="{{ URL::to('admin0')}}"><button type="button" class="btn btn-primary btn-large">Submit</button></a>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-md-3"></div>


@endsection('content')
