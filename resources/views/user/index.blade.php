{{-- // Blade Template - IV JS in Blade--}}
@extends('layouts.layout')
{{-- how to use js,php,css code blade template --}}


@section('title')
    Welcome to User
@endsection
@section('content')
    <h2>
        this is blade template currently rendering right as a Index from UserController
    </h2>
    <!-- // getName Controller method -->
    @if (isset($id))
        <h2>User ID: {{ $id }}</h2>
    @else
        <h2>
            No ID passed
        </h2>
    @endif


@endsection