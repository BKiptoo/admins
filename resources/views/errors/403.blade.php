@extends('layouts.errors')
@section('content')
    <main>
        <div class="container">

            <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
                <h1>403</h1>
                <p>You don't have the right permissions. <a href="{{ route('home') }}">help center</a>
                    <a class="btn" href="{{route('home')}}">Back to home</a>
                <img src="{{asset('assets/img/not-found.svg')}}" class="img-fluid py-5" alt="Page Not Found">
                <div class="credits">
                    Designed by <a href="https://mayministries.org/">mayministries.org</a>
                </div>
            </section>

        </div>
    </main>
@endsection
