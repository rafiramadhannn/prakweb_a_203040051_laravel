@extends('layouts.main')

@section('container')
        <h2 class="text-center fw-bold">{{ $post->title }}</h2>

        <h5 class="text-center fw-semibold">{{ $post->author }}</h5>

        {!! $post->body !!}
        
    <a class="btn btn-danger" href="/blog">Back</a>
@endsection 