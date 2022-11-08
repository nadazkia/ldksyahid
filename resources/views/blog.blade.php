@extends('layout.main')

    @section('container')
    <div class="container" style="margin-top: 3rem">
            @foreach ($post as $post)
            <article class="mb-3">
                <h2>
                    <a href="/post/{{ $post["slug"] }}">
                    {{  $post["title"] }}
                    </a>
                </h2>
                <h5>by: {{  $post["author"] }}</h5>
                <p>{{  $post["body"] }}</p>
            </article>
            @endforeach
    </div>
    @endsection