@extends('layouts.app')
@section('title', "LDS | Edit Data Siswa")
@section('content')
    <main>
        <div class="banner">
            <div>
                <h1>All of your Student's datas, <br>Just <span class="hl">one click</span> away</h1>
                <br><p>keep your student data only on the web</p>
                <br><br><a href="{{url('/register')}}" id="btn">Register Now</a>
            </div>
        </div>
    </main>
@endsection