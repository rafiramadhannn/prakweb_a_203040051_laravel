@extends('layouts.main')

@section('container')
<h1 class="text-center">Puisi</h1>
@foreach ($categories as $category)
<ul>
    <li class="d-grid gap-2 col-3 mx-auto">
        <h2 class="btn btn-dark" type="button">
            <a class="btn btn-dark btn-lg" href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
        </h2>
    </li>
</ul>
   
   


@endforeach

@endsection

