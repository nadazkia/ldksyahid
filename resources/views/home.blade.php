@extends('layout.main')

    @section('container')
    <div class="container" style="margin-top: 3rem">
            <h1> LDK Syahid </h1>
            <a href="http://instagram.com/{{ $uName }}"> Instagram: {{ $name }}</a>
            <br>
            <br>
            <img src="img/{{ $image }}" alt="{{ $name }}" height="200">
    </div>
    @endsection