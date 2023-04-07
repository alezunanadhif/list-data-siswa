@extends('layouts.app')
@section('title', "LDS | Home")
@section('content')
<div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">ID Siswa</th>
      <th scope="col">Kelas</th>
    </tr>
  </thead>
  
  @php($number = 1)
  @foreach($data as $d)
  <tbody>
    <tr>
      <td>{{ $number }}</td>
      <td>{{ $d->name }}</td>
      <td>• {{ $d->id_siswa }}</td>
      <td>{{ $d->kelas }}</td>
      <td style="width: 5%"><a href="{{ url("home/{$d->id}/edit")}}" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></a></td>
    </tr>
  </tbody>
  @php($number++)
  @endforeach
</table>
</div>
@endsection