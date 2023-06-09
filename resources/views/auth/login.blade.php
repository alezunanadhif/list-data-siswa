@extends('layouts.app')
@section('title', "LDS | Login")
@section('content')
<div class="row">
    <div class="col-md-4 mx-auto mt-5 mb-5">
        <div class="card">
            <h3 class="text-center mt-4">Login</h3>
            <div class="card-body">
                <form method="post" action="{{ url('login')}}">
                    @csrf
                    @if(session()->has('error_message'))
                    <div class="alert alert-danger">{{ session()->get('error_message')}}</div>
                    @endif
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ old('email') }}">
                        @if($errors->has('name'))
                        <small class="text-danger">{{ $errors->first('email')}}</small>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        @if($errors->has('name'))
                        <small class="text-danger">{{ $errors->first('email')}}</small>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection