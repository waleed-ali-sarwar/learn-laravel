{{-- // learning blade template inheritance - III --}}
@extends('layouts.layout')
@section('title')
    Services
@endsection
@section('content')
    <section>
        Services is back
    </section>
@endsection
@section('sidebar')
    @parent
        <button>Submit</button>
@endsection