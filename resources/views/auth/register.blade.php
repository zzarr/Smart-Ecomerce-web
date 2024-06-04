@extends('auth.layout')

@section('content')
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5" style="overflow-y: auto; max-height: 100vh;">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto">
                    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img class="logo-icon me-2"
                                src="{{ asset('images/logo/SHOPAN.png') }}" alt="logo"></a></div>
                    <h2 class="auth-heading text-center mb-4">Sign up to SHOPAN</h2>

                    <div class="auth-form-container text-start mx-auto">
                        <form class="auth-form auth-signup-form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="username mb-3">
                                <label class="sr-only" for="signup-username">Username</label>
                                <input id="signup-username" name="username" type="text"
                                    class="form-control signup-username" placeholder="Full name" required="required"
                                    value="{{ old('username') }}">
                                @if ($errors->has('username'))
                                    <span class="text-danger">{{ $errors->first('username') }}</span>
                                @endif
                            </div>
                            <div class="email mb-3">
                                <label class="sr-only" for="signup-email">Your Email</label>
                                <input id="signup-email" name="email" type="email" class="form-control signup-email"
                                    placeholder="Email" required="required" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="password mb-3">
                                <label class="sr-only" for="signup-password">Password</label>
                                <input id="signup-password" name="password" type="password"
                                    class="form-control signup-password" placeholder="Create a password"
                                    required="required">
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="password_confirmation mb-3">
                                <label class="sr-only" for="signup-password-confirmation">Confirm Password</label>
                                <input id="signup-password-confirmation" name="password_confirmation" type="password"
                                    class="form-control signup-password-confirmation" placeholder="Confirm your password"
                                    required="required">
                            </div>
                            <div class="role mb-3">
                                <label for="role">Daftar Sebagai?</label>
                                <select class="form-select" id="role" name="p" aria-label="Daftar sebagai?"
                                    required>
                                    <option value="petani">Petani</option>
                                    <option value="konsumen">Konsumen
                                    </option>
                                </select>
                                @if ($errors->has('role'))
                                    <span class="text-danger">{{ $errors->first('role') }}</span>
                                @endif
                            </div>
                            <div class="extra mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="RememberPassword">
                                    <label class="form-check-label" for="RememberPassword">
                                        I agree to Portal's <a href="#" class="app-link">Terms of Service</a> and <a
                                            href="#" class="app-link">Privacy Policy</a>.
                                    </label>
                                </div>
                            </div><!--//extra-->

                            <div class="text-center">
                                <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Sign Up</button>
                            </div>
                        </form><!--//auth-form-->

                        <div class="auth-option text-center pt-5">Already have an account? <a class="text-link"
                                href="{{ route('login') }}">Log in</a></div>
                    </div><!--//auth-form-container-->
                </div><!--//auth-body-->

                <footer class="app-auth-footer">
                    <div class="container text-center py-3">
                    </div>
                </footer><!--//app-auth-footer-->
            </div><!--//flex-column-->
        </div><!--//auth-main-col-->
        <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
            <div class="auth-background-holder">
            </div>
            <div class="auth-background-mask"></div>
            <div class="auth-background-overlay p-3 p-lg-5">
                <div class="d-flex flex-column align-content-end h-100">
                    <div class="h-100"></div>
                </div>
            </div><!--//auth-background-overlay-->
        </div><!--//auth-background-col-->
    </div><!--//row-->
@endsection
