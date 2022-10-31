@extends('layouts.main')

@section('container')


<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="text-center fw-bold">{{ $post->title }}</h2>
            <h5 class="text-center fw-semibold">{{ $post->author }}</h5>
            <img src="https://source.unsplash.com/1200x400?dark nature,dark" 
            alt="{{ $post->category->name }}" class="img-fluid">

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            
        </div>
    </div>
</div>     
    <a class="btn btn-danger mt-3" href="/categories">Back</a>
@endsection 