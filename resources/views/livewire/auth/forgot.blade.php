<div class="container">
    <section class="section forgot-password min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Forgot Your Password?</h5>
                                <p class="text-center small">Enter your email address to reset your password</p>
                                @include('inc.alert') <!-- Include your alert component -->
                            </div>

                            <form wire:submit.prevent="resetPassword" class="row g-3">
                                <div class="col-12">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" wire:model.defer="email" class="form-control" id="email" required>
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100">Reset Password</button>
                                </div>

                                <div class="col-12">
                                    <a href="{{ route('login') }}" class="btn btn-secondary">Instead Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
