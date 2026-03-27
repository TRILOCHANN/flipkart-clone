@extends('layouts.app')

@section('title', 'Seller Login - Flipkart')

@section('content')
<div class="seller-login-page">
    <div class="seller-login-container">
        {{-- Left Visual Panel --}}
        <div class="seller-login-left">
            <div class="seller-login-brand">
                <span class="seller-login-logo">Flipkart</span>
                <span class="seller-login-seller-tag">Seller Hub</span>
            </div>
            <h2>Manage your business on the go</h2>
            <p>Access your dashboard, orders, inventory, and payments — all in one place.</p>
            <div class="seller-login-features">
                <div class="seller-login-feature">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="rgba(255,255,255,0.85)"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                    <span>Real-time order tracking</span>
                </div>
                <div class="seller-login-feature">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="rgba(255,255,255,0.85)"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                    <span>Analytics & performance insights</span>
                </div>
                <div class="seller-login-feature">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="rgba(255,255,255,0.85)"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                    <span>Inventory & catalogue management</span>
                </div>
                <div class="seller-login-feature">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="rgba(255,255,255,0.85)"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                    <span>Secure payment settlements</span>
                </div>
            </div>
        </div>

        {{-- Right Form Panel --}}
        <div class="seller-login-right">
            <div class="seller-login-tabs">
                <button class="seller-tab active" onclick="switchSellerTab('email')">Email</button>
                <button class="seller-tab" onclick="switchSellerTab('mobile')">Mobile</button>
            </div>

            <form class="seller-login-form" onsubmit="event.preventDefault();">
                <div class="seller-login-field" id="email-field">
                    <label>Email ID</label>
                    <input type="email" placeholder="Enter your registered email" />
                </div>

                <div class="seller-login-field" id="mobile-field" style="display:none;">
                    <label>Mobile Number</label>
                    <div class="seller-mobile-input">
                        <span class="seller-country-code">+91</span>
                        <input type="tel" placeholder="Enter mobile number" />
                    </div>
                </div>

                <div class="seller-login-field">
                    <div class="seller-password-header">
                        <label>Password</label>
                        <a href="#" class="seller-forgot">Forgot Password?</a>
                    </div>
                    <div class="seller-password-wrap">
                        <input type="password" id="seller-pass" placeholder="Enter password" />
                        <button type="button" class="seller-pass-toggle" onclick="toggleSellerPass()">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#878787"><path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/></svg>
                        </button>
                    </div>
                </div>

                <button type="submit" class="seller-login-btn">Login to Seller Hub</button>

                <div class="seller-login-divider">
                    <span>or login with</span>
                </div>

                <div class="seller-social-btns">
                    <button type="button" class="seller-social-btn">
                        <svg width="18" height="18" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                        Google
                    </button>
                    <button type="button" class="seller-social-btn">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="#1877F2"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        Facebook
                    </button>
                </div>
            </form>

            <div class="seller-login-footer">
                <p>Don't have a seller account? <a href="{{ route('SellerRegisterPage') }}">Register as a Seller</a></p>
            </div>
        </div>
    </div>
</div>

<script>
function switchSellerTab(tab) {
    document.querySelectorAll('.seller-tab').forEach(t => t.classList.remove('active'));
    if (tab === 'email') {
        document.getElementById('email-field').style.display = 'block';
        document.getElementById('mobile-field').style.display = 'none';
        document.querySelectorAll('.seller-tab')[0].classList.add('active');
    } else {
        document.getElementById('email-field').style.display = 'none';
        document.getElementById('mobile-field').style.display = 'block';
        document.querySelectorAll('.seller-tab')[1].classList.add('active');
    }
}
function toggleSellerPass() {
    const inp = document.getElementById('seller-pass');
    inp.type = inp.type === 'password' ? 'text' : 'password';
}
</script>
@endsection
