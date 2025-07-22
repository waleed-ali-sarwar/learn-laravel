{{-- master page layout --}}
@extends('layouts.layout')
@section('title')
    User Index
@endsection
@section('content')

    <h2>
        Name :{{$names}}
    </h2>
    <p>City : {{$city}}</p>

@endsection