@extends('layouts.app')
@section('title', "LDS | Edit Data Siswa")
@section('content')
<div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="https://ui-avatars.com/api/?background=000&color=fff&name={{ Auth::user()->name }}" alt="">
                    <!-- Profile picture help block-->
                    <div class="fs-3 mb-4 text-black">{{ Auth::user()->name }}</div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="{{ Auth::user()->email }}">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputName">Name</label>
                                <input class="form-control" id="inputName" type="tel" placeholder="Enter your name" value="{{ Auth::user()->name }}">
                            </div>
                            <!-- Form Group (password)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPassword">Password</label>
                                <input class="form-control" id="inputPassword" type="text" name="password" placeholder="Enter your password" value="{{ Auth::user()->password }}">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection