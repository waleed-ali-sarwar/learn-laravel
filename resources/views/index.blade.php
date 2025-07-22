@php
    $list_lang = ['c#', 'php', 'python', 'asp.net', 'js']
@endphp

@include('components.header', ['page_Title' => 'Welcome to Laravel'])
    <h2>Welcome to Learn Laravel</h2>
    <a href="{{route('blade')}}">Blade template</a>
    @foreach ($list_lang as $l)
        <ul>
            <li>
                {{$l}}
            </li>
        </ul>
    @endforeach
@include('components.footer')