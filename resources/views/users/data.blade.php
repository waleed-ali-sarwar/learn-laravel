{{-- master page layout --}}
@extends('layouts.layout')
@section('title')
    User Data
@endsection
@section('content')
  {{-- data from List Route to View  --}}
  <h2>Data from Route to View</h2>
    @foreach ($data as $key=>$item )
        <ul>
            <li>id : {{$key}} Name: {{$item['name']}} - Contact: {{$item['phone']}} <a href="{{route('dataByID',$key)}}">Show</a></li> 
        </ul>
    @endforeach

@endsection