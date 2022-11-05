@extends('dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <a href="/dashboard/posts/" class="btn btn-success"><span data-feather="arrow-left"></span> Back
                    to All My Posts</a>
                <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                    alt="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid">
                <article class="my-3 fs-5"></article> {!! $post->body !!} </article>



                <a href="/posts" class="d-block mt-3"><span data-feather="arrow-left" class="align-text-bottom"></span>Back
                    to Posts</a>
            </div>
        </div>
    </div>
@endsection