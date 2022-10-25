@extends('layouts.main')

@section('container')

@foreach ($posts as $post)
<article class="d-grid gap-2 col-3 mx-auto"> 
    <h2 class="btn btn-dark" type="button">
        <a class="btn btn-dark btn-lg\" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        <p>{{ $post->excerpt }}</p>
    </h2>
</article>

@endforeach
<a class="btn btn-danger" href="/categories">Back</a>
@endsection

