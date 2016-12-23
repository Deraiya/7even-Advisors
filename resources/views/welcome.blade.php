@extends('layouts.master')

@section('title')
    Welcome!
@endsection
@section('content')
    <div class="row">
        <div class="col-md-4">
        </div>

        <div class="col-md-4">
            <h1>My Account</h1>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" name="username" id="username"></input>
                </div>
                <div class="form-group">
                    <label for="username">password</label>
                    <input class="form-control" type="password" name="password" id="password"></input>
                </div>
                <button type="button" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="col-md-4"></div>
    </div>

@endsection