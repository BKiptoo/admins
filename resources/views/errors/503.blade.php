@extends('layouts.errors')

@section('content')
    <main>
        <div class="container">
            <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
                <h1>503</h1>
                <img src="{{ asset('assets/img/not-found.svg') }}" class="img-fluid py-5" alt="Page Not Found">
                <p>We are performing regular maintenance. The site will be back shortly.</p>
                <br>
                <a href="{{ route('home') }}" class="btn">Help Center</a>
                <br>
                <div class="credits">
                    Designed by <a href="https://mayministries.org/">mayministries.org</a>
                </div>
            </section>
        </div>
    </main>
@endsection

