@extends('layouts.main')

@section('container')
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<p class="fst-italic">{{ $motivasi }}</p>
<img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
@endsection
    