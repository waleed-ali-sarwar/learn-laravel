{{-- master page layout --}}
@extends('layouts.layout')
@section('title')
    User Data
@endsection
@section('content')
  {{-- data from List Route to View  --}}
  <h2>User Details</h2>
    <h3>Name : {{ $userArray['name'] }}</h3>
    <h3>Phone Number : {{ $userArray['phone'] }}</h3>

@endsection