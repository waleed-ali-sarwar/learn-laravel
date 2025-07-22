<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default') - Learn Laravel</title>
    <link rel="stylesheet" href="/styles.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    @stack('scripts') {{-- // for script.js --}}
    @stack('css'){{-- // css style file --}}
</head>

<body>
    <header>
        <h2>Learn Laravel</h2>
        <nav>
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('about')}}">About us</a>
            <a href="{{route('services')}}">Services</a>
            <a href="{{route('feedback')}}">Feedback</a>
            <a href="{{route('backend')}}">Backend</a>
            <a href="{{route('blade')}}">Basics</a>
            <a href="{{route('user')}}">User Controllers</a>
            <a href="{{route('welcome-user')}}">welcome user</a>
            <a href="{{ route('user-blog') }}">Blog</a>

        </nav>
    </header>
    {{-- // template inheritance blade.php --}}
    <main>
        @hasSection('content')
            @yield('content')
        @else
            <h2>No content found</h2>
        @endif
    </main>
    @section('sidebar')
    <aside>
        <ul>
            <li>
                <a href="{{route('services')}}">Trends</a>
                <a href="{{route('services')}}">Terms</a>
                <a href="{{route('services')}}">Careers</a>
            </li>
        </ul>
        @show
    </aside>
    <footer>
        <p>&copy; 2025 All right are reserved | Learn Laravel</p>
    </footer>
</body>

</html>