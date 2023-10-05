

@extends('layout.main')
@section('container')

    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/blog/{{ $post["slug"] }}">{{ $post ["title"] }}</a>
            </h2>
            <h5>{{ $post ["date"] }}</h2>
            <p>{{ $post ["body"] }}</p>
        </article>
    @endforeach
@endsection