@extends('layouts.main')

@section('container')
<h1 class="text-center">Puisi</h1>
@foreach ($posts as $post)
<article class="d-grid gap-2 col-3 mx-auto"> 
    <h2 class="btn btn-dark" type="button">
        <a class="btn btn-dark btn-lg" href="/posts/{{ $post["slug"] }}">{{ $post["title"] }} : {{ $post["author"] }} </a>
    </h2>
   
</article>

@endforeach

@endsection

