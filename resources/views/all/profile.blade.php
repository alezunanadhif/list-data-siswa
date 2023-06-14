@extends('layouts.app')
@section('title', "LDS | Edit Data Siswa")
@section('content')
<div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-3 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="https://ui-avatars.com/api/?background=000&color=fff&name={{ Auth::user()->name }}" alt="">
                    <!-- Profile picture help block-->
                    <div class="fs-3 mb-2 text-black">{{ Auth::user()->name }}</div>
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
                            <label class="small mb-2">Email address</label>
                            <input class="form-control" value="{{ Auth::user()->email }}" disabled>
                            <label class="small mb-2">Name</label>
                            <input class="form-control" value="{{ Auth::user()->name }}" disabled>
                            <label class="small mb-2">Password</label>
                            <input class="form-control" value="{{ Auth::user()->password }}" disabled>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection