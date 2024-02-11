@extends('layouts.errors')
@section('content')
    <main>
        <div class="container">

            <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
{{--                <h1>404</h1>--}}
{{--                <h2>The page you are looking for doesn't exist.</h2>--}}
                <img src="{{asset('assets/img/5555.png')}}" class="img-fluid py-5" alt="Page Not Found">

                <a class="btn" href="{{route('home')}}">Back to home</a>
<br>
                <div class="credits">
                    Designed by <a href="https://mayministries.org/">mayministries.org</a>
                </div>
            </section>

        </div>
    </main>
@endsection
