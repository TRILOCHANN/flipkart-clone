@extends('layouts.app')

@section('title', 'Login - Flipkart')

@section('content')
    <div class="login-page">
        <div class="login-container">
            {{-- Left Panel --}}
            <div class="login-left">
                <h2>Login</h2>
                <p>Get access to your Orders, Wishlist and Recommendations</p>
                <div class="login-illustration">
                    <svg width="140" height="140" viewBox="0 0 200 200" fill="none">
                        <rect width="200" height="200" rx="12" fill="rgba(255,255,255,0.1)" />
                        <circle cx="100" cy="70" r="35" fill="rgba(255,255,255,0.3)" />
                        <path d="M55 160c0-24.85 20.15-45 45-45s45 20.15 45 45" fill="rgba(255,255,255,0.3)"
                            stroke="none" />
                        <circle cx="100" cy="70" r="28" fill="rgba(255,255,255,0.15)" />
                        <circle cx="90" cy="65" r="3" fill="white" />
                        <circle cx="110" cy="65" r="3" fill="white" />
                        <path d="M92 80c0 0 4 6 16 0" stroke="white" stroke-width="2" fill="none"
                            stroke-linecap="round" />
                        <rect x="70" y="125" width="60" height="8" rx="4" fill="rgba(255,255,255,0.2)" />
                        <rect x="80" y="140" width="40" height="6" rx="3" fill="rgba(255,255,255,0.15)" />
                    </svg>
                </div>
            </div>

            {{-- Right Panel --}}
            <div class="login-right">
                <form class="login-form" action="{{ route('Loginhandel') }}" method="POST">
                    @csrf
                    <div class="login-input-group">
                        <input type="text" id="login-email" name="email" value="{{ old('email') }}" class="login-input" placeholder=" "
                            autocomplete="off" />
                        <label for="login-email" class="login-label">Enter Email/Mobile number</label>
                        <div class="login-input-line"></div>
                        <div style="color:red; font-size:10px">
                            @error('email')
                                <div>{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="login-input-group">
                        <input type="password" id="reg-password" name="password" class="login-input"
                            placeholder=" " />
                        <label for="reg-password" class="login-label">Enter Password</label>
                        <div class="login-input-line"></div>
                        <button type="button" class="password-toggle" onclick="togglePassword()">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#878787">
                                <path
                                    d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" />
                            </svg>
                        </button>
                        <div style="color:red; font-size:10px">
                            @error('password')
                                <div>{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <p class="login-terms">
                        By continuing, you agree to Flipkart's
                        <a href="#">Terms of Use</a> and
                        <a href="#">Privacy Policy</a>.
                    </p>

                    <button type="submit" class="login-submit" id="loginBtn">Login</button>

                    <div class="login-or">
                        <span>OR</span>
                    </div>

                    <a href="#" class="login-otp-link">Request OTP</a>

                    <div class="login-bottom">
                        <a href="{{ route('RegistrationPage') }}" class="login-create-account">New to Flipkart? Create an
                            account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const inp = document.getElementById('reg-password');
            inp.type = inp.type === 'password' ? 'text' : 'password';
        }
    </script>
@endsection
