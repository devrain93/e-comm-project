@extends('layouts.master')
@section('title')
    - Login
@endsection
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="card p-3">
                    <div class="card-header text-center">
                        <img src="{{ asset('img/icon.png') }}" width="70"><h4><strong>E-comm Login</strong></h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Login</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
@endsection