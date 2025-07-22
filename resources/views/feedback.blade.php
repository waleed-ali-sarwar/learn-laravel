{{-- // Blade Template - IV JS in Blade--}}
@extends('layouts.layout')
{{-- how to use js,php,css code blade template --}}


@section('title')
    Services
@endsection

@push('scripts')
<script src="script.js"></script>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script>
        const { createApp, ref } = Vue

        createApp({
            setup() {
                const message = ref('Hello vue!')
                return {
                    message
                }
            }
        }).mount('#app')
    </script>
@endpush

@section('content')
    <h2>Feedback</h2>
    <p id="para"></p>
    @php
        $data = ["waleed-laravel", "laravel", 'king'];
        $d2 = ['apple', 'banana', 'graps', 'cherries'];
    @endphp

    <script>
        var f = @json($data);
        let p = document.querySelector('#para');
        f.forEach(element => {
            p.textContent = element;
        });

        var ff = {{Js::from($d2)}}
            console.log(ff)

        console.log(f);
    </script>
    @verbatim
        <div id="app">
            {{ message }}
        </div>
    @endverbatim
@endsection

@push('css')
    <link rel="stylesheet" href="mystyle.css">
@endpush

@prepend('css')
    <style>
        main {
            background: green;
        }
    </style>
@endprepend