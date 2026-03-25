@extends('layouts.app')

@section('title', 'Sign Up - Flipkart')

@section('content')
    <div class="login-page">
        <div class="login-container register-container">
            {{-- Left Panel --}}
            <div class="login-left">
                <h2>Looks like you're new here!</h2>
                <p>Sign up with your mobile number to get started</p>
                <div class="login-illustration">
                    <svg width="140" height="140" viewBox="0 0 200 200" fill="none">
                        <rect width="200" height="200" rx="12" fill="rgba(255,255,255,0.1)" />
                        <rect x="60" y="30" width="80" height="110" rx="8" fill="rgba(255,255,255,0.2)"
                            stroke="rgba(255,255,255,0.4)" stroke-width="2" />
                        <rect x="70" y="50" width="60" height="60" rx="4" fill="rgba(255,255,255,0.15)" />
                        <circle cx="100" cy="80" r="15" fill="rgba(255,255,255,0.25)" />
                        <path d="M92 78l5 5 10-10" stroke="white" stroke-width="2.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <rect x="70" y="120" width="60" height="6" rx="3" fill="rgba(255,255,255,0.2)" />
                        <circle cx="100" cy="150" r="6" fill="rgba(255,255,255,0.3)"
                            stroke="rgba(255,255,255,0.5)" stroke-width="1.5" />
                    </svg>
                </div>
            </div>

            {{-- Right Panel --}}
            <div class="login-right">
                <form class="login-form register-form" method="POST" action="{{ route('Registerhandel') }}">
                    @csrf

                    <div class="login-input-group">
                        <input type="text" id="reg-name" name="name" value="{{ old('name') }}" class="login-input"
                            placeholder=" " autocomplete="off" />
                        <label for="reg-name" class="login-label">Enter Full Name</label>
                        <div class="login-input-line"></div>
                        <div style="color:red; font-size:10px">
                            @error('name')
                                <div>{{ $message }}</div>
                            @enderror
                        </div>
                    </div>



                    <div class="login-input-group">
                        <input type="tel" id="reg-mobile" name="phone" value="{{ old('phone') }}" class="login-input"
                            placeholder=" " />
                        <label for="reg-mobile" class="login-label">Enter Mobile Number</label>
                        <div class="login-input-line"></div>
                        <div style="color:red; font-size:10px">
                            @error('phone')
                                <div>{{ $message }}</div>
                            @enderror
                        </div>

                    </div>


                    <div class="login-input-group">
                        <input type="email" id="reg-email" name="email" value="{{ old('email') }}" class="login-input"
                            placeholder=" " />
                        <label for="reg-email" class="login-label">Enter Email (optional)</label>
                        <div class="login-input-line"></div>
                        <div style="color:red; font-size:10px">
                            @error('email')
                                <div>{{ $message }}</div>
                            @enderror
                        </div>
                    </div>



                    <div class="login-input-group">
                        <input type="password" id="reg-password" name="password" na class="login-input" placeholder=" " />
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

                    <button type="submit" class="login-submit register-submit">
                        Continue
                    </button>

                    <div class="login-bottom" style="margin-top:20px;">
                        <a href="{{ route('Loginpage') }}" class="login-existing-link">Existing User? Log in</a>
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
