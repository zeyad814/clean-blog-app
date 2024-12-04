@extends('layout')

@section('content')


<h1>Home Page</h1>

    @foreach($st as $student)
        <h3>{{ $student['name']}} : {{$student['age']}}</h3>
    @endforeach
@endsection
