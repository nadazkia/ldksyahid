@extends('layout.main')

    @section('container')
    <div class="container" style="margin-top: 3rem">
            <h2>{{ $post["title"] }}</h2>
            <h5>{{ $post["author"] }}</h5>
            <p>{{ $post["body"] }}</p>

            <a href="/blog">Back to blog</a>
        </div>
    @endsection