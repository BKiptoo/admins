<div class="container">
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="d-flex justify-content-center py-4">
                        <a href="index.html" class="logo d-flex align-items-center w-auto">
                            <img src="{{asset('assets/logos/logos.jpg')}}" alt="">
                            <span class="d-none d-lg-block">mayministries.org</span>
                        </a>
                    </div><!-- End Logo -->

                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                <p class="text-center small">Enter your personal details to create account</p>
                            </div>

                            <form wire:submit.prevent="register" class="row g-3 needs-validation" novalidate>
                                <div class="col-12">
                                    <label for="yourName" class="form-label">Your Name</label>
                                    <input type="text" wire:model="name" class="form-control" id="yourName" required>
                                    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12">
                                    <label for="yourEmail" class="form-label">Your Email</label>
                                    <input type="email" wire:model="email" class="form-control" id="yourEmail" required>
                                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12">
                                    <label for="role" class="form-label">Role</label>
                                    <input type="role" wire:model="role" class="form-control" id="role" required>
                                    @error('role') <div class="invalid-feedback">{{$message}}</div>@enderror
                                </div>

                                <div class="col-12">
                                    <label for="yourUsername" class="form-label">Username</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="text" wire:model="username" class="form-control" id="yourUsername" required>
                                        @error('username') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="yourPhoneNumber" class="form-label">Phone Number</label>
                                    <input type="text" wire:model="phoneNumber" class="form-control" id="yourPhoneNumber" required>
                                    @error('phoneNumber') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>


                                <div class="col-12">
                                    <label for="yourPassword" class="form-label">Password</label>
                                    <input type="password" wire:model="password" class="form-control" id="yourPassword" required>
                                    @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12">
                                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                                    <input type="password" wire:model="password_confirmation" class="form-control" id="confirmPassword" required>
                                    @error('password_confirmation') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" wire:model="terms" type="checkbox" value="" id="acceptTerms" required>
                                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                                        @error('terms') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                </div>
                                <div class="col-12">
                                    <p class="small mb-0">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
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
