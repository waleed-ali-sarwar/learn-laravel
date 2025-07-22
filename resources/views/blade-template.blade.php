@extends('layouts.layout')
@section('title')
    Blade Basicss
@endsection
@section('content')
    {{-- learning blade template engine basic directives--}}

    {{-- Any Operation in blade php --}}
    <h2>
        the sum of: {{2.2 + 3}}
    </h2>
    {{-- XSS practicing --}}
    {{ "<h1>This is a code exeuted in website to prevent from XXS attacks</h1>" }}
    {{-- the code which will be exeuted // we can run js,html on it --}}
    {!!"<h2>Laravel blad template practices</h2>"!!}

    {{-- printing variable in blade.php --}}
    @php
        $name = 'Php blade laravel template';
        $array = ['Waleed', 'Adnan', 'hammad'];
        $lang = ['php', 'csharp', 'js', 'vbs', 'python', 'r']
    @endphp
    {{-- printing variable --}}
    {{$name}}
    {{-- // blade foreach code --}}
    @foreach ($array as $l)
        <ul>
            <li>{{$l}}</li>
        </ul>
    @endforeach

    {{-- // loop properties --}}
    @foreach ($lang as $ll)
        <ul>
            <li>{{$loop->index}} - {{$ll}}</li>
        </ul>
    @endforeach

    @foreach ($lang as $ll)
        <ul>
            @if ($loop->even)
                <li style="color:green;">{{$loop->index}} - {{$ll}}</li>
            @elseif ($loop->odd)
                <li style="color:red;">{{$loop->index}} - {{$ll}}</li>
            @else
                <li>{{$loop->index}} - {{$ll}}</li>
            @endif
        </ul>
    @endforeach

    {{-- // reusable blade template --}}

    @php
        $array_withKey = ["one" => "This is great to see", "two" => "great nai blade hai"];
    @endphp

    @forelse ($array_withKey as $k => $val)
        <p>{{$k}} - {{$val}}</p>
    @empty
        <p>No list exists</p>
    @endforelse
@endsection