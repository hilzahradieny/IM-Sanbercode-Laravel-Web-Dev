@extends('layout.master')

@section('pagetittle')
    Welcome
@endsection

@section('content')
    <h1>Selamat Datang, {{$first_name . " ".  $last_name}}</h1>
    <br><br>
    <h2>Terimakasih Telah Bergabung di SanberBook. Social Media Kita Bersama!</h2> <br><br>
    <a href="/home" class="button">Back to home page</a> <br>
    <a href="/register" class="button">Back to register page</a>
@endsection