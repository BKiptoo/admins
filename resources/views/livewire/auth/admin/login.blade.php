<main>
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="{{ asset('assets/logos/logos.jpg') }}" alt="">
                                <span class="d-none d-lg-block">mayministries.org</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                    <p class="text-center small">Enter your username & password to login</p>
                                </div>

                                @if ($error)
                                    <div class="alert alert-danger" role="alert">
                                        Incorrect username or password.
                                    </div>
                                @endif

                                <form wire:submit.prevent="login" class="row g-3 needs-validation" novalidate>
                                    <div class="col-12">
                                        <label for="yourUsername" class="form-label">Username</label>
                                        <input type="text" wire:model="username" class="form-control @error('username') is-invalid @enderror" id="yourUsername" required>
                                        @error('username') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" wire:model="password" class="form-control @error('password') is-invalid @enderror" id="yourPassword" required>
                                        @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" wire:model="remember" type="checkbox" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary m-b-xs" wire:loading.class="disabled"
                                            wire:offline.attr="disabled"><span wire:target="loginUser"
                                                                               wire:loading.class="spinner-border spinner-border-lg"></span>
                                        Sign In
                                    </button>

                                    <div class="col-12">
{{--                                        <p class="small mb-0">Don't have an account? <a href="{{ route('register') }}">Create an account</a></p>--}}
                                        <p class="small mb-0"><a href="{{ route('admin.forgot') }}">Forgot your password?</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="credits">
                            Designed by <a href="https://mayminisstries.org/">Messianic Assembly of Yahweh</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
