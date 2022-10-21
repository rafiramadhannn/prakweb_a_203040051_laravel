@extends('layouts.main')

@section('container')
    <article>
        <h2 class="text-center fw-bold">{{ $post["title"] }}</h2>
        <h5 class="text-center fw-semibold">{{ $post["author"] }}</h5>
        <p class="text-end fw-normal">{{ $post["body"] }}</p>
    </article>
    <a class="btn btn-danger" href="/blog">Back</a>
@endsection 