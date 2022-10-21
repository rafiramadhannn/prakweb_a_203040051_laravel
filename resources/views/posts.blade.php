@extends('layouts.main')

@section('container')

@foreach ($posts as $post)
<article class="mb-5">
    <h2 class="d-grid gap-2">
        <a class="btn btn-dark btn-lg" href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
    </h2>
    <h5 class="text-center fw-semibold">{{ $post["author"] }}</h5>
    <p class="text-end fw-normal">{{ $post["body"] }}</p>
</article>

@endforeach

@endsection

