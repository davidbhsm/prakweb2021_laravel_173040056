@extends('layouts.main')


@section('container')
    @foreach ( $blog as $blogs )
        <article class="mb-5">
            <h2>
                <a href="/blog/{{ $blogs["slug"] }}">{{ $blogs["tittle"] }}</a>
            </h2>
            <h5>By : {{ $blogs["author"] }}</h5>
            <p>{{ $blogs["body"] }}</p>
        </article>
    @endforeach
@endsection