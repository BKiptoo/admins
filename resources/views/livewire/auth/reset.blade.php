<div>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-4">
                <div class="card login-box-container">
                    <div class="card-body">
                        <div class="authent-logo">
                            <a href="{{ route('welcome') }}" wire:navigate> <img src="{{ asset('assets/images/logo.png') }}" alt=""
                                                                                 style="width:300px"></a>
                        </div>
                        <div class="authent-text">
                            <p>Reset Password</p>
                            @include('inc.alert')
                        </div>
                        <form wire:submit="resetPassword">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="email"
                                           class="form-control @error('form.email') is-invalid @enderror"
                                           id="form.email" required placeholder="E-email address..."
                                           wire:model.live="form.email">
                                    <label for="form.email">E-mail Address</label>
                                    @error('form.email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="password"
                                           class="form-control @error('form.password') is-invalid @enderror"
                                           id="form.password" required placeholder="xxxxxx"
                                           wire:model.live="form.password">
                                    <label for="form.password">Password</label>
                                    @error('form.password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="password"
                                           class="form-control @error('form.passwordConfirmation') is-invalid @enderror"
                                           name="form.passwordConfirmation"
                                           id="form.passwordConfirmation" required placeholder="xxxxxx"
                                           wire:model.live="form.passwordConfirmation">
                                    <label for="form.passwordConfirmation">Confirm Password</label>
                                    @error('form.passwordConfirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary m-b-xs" wire:loading.class="disabled"
                                        wire:offline.attr="disabled"><span wire:target="resetPassword"
                                                                           wire:loading.class="spinner-border spinner-border-lg"></span>
                                    RESET PASSWORD
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
