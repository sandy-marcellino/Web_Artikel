@extends('layouts/main')


@section('container')
    <h1>Halaman About</h1>
    <h3>Nama: {{ $name }} </h3>
    <h3>Email: {{ $email }} </h3>
    <img src="img/4x6.jpeg" alt="" width="200" class="img-thumbnail rounded-circle">
@endsection