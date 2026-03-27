@extends('layouts.app')

@section('title', 'Register as a Seller - Flipkart')

@section('content')
<div class="seller-login-page">
    <div class="seller-login-container">
        {{-- Left Visual Panel --}}
        <div class="seller-login-left">
            <div class="seller-login-brand">
                <span class="seller-login-logo">Flipkart</span>
                <span class="seller-login-seller-tag">Seller Hub</span>
            </div>
            <h2>Start your selling journey</h2>
            <p>Join India's largest e-commerce platform and grow your business today.</p>
            <div class="seller-login-features">
                <div class="seller-login-feature">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="rgba(255,255,255,0.85)"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                    <span>Reach millions of customers</span>
                </div>
                <div class="seller-login-feature">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="rgba(255,255,255,0.85)"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                    <span>Secure and timely payments</span>
                </div>
                <div class="seller-login-feature">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="rgba(255,255,255,0.85)"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                    <span>Account management assistance</span>
                </div>
            </div>
        </div>

        {{-- Right Form Panel --}}
        <div class="seller-login-right" style="padding: 32px 40px; overflow-y: auto;">
            <div style="margin-bottom: 24px;">
                <h3 style="font-size: 20px; font-weight: 700; color: var(--fk-text-primary);">Register as a new seller</h3>
            </div>

            <form class="seller-login-form" onsubmit="event.preventDefault();">
                <div class="seller-login-field">
                    <label>Full Name</label>
                    <input type="text" placeholder="Enter your full name" />
                </div>

                <div class="seller-login-field">
                    <label>Mobile Number</label>
                    <div class="seller-mobile-input">
                        <span class="seller-country-code">+91</span>
                        <input type="tel" placeholder="Enter mobile number" />
                    </div>
                </div>

                <div class="seller-login-field" id="email-field">
                    <label>Email ID</label>
                    <input type="email" placeholder="Enter your email" />
                </div>

                <div class="seller-login-field">
                    <label>GSTIN (Optional)</label>
                    <input type="text" placeholder="Enter your GST number" />
                </div>

                <div class="seller-login-field">
                    <div class="seller-password-header">
                        <label>Password</label>
                    </div>
                    <div class="seller-password-wrap">
                        <input type="password" id="seller-pass" placeholder="Create a password" />
                        <button type="button" class="seller-pass-toggle" onclick="toggleSellerPass()">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#878787"><path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/></svg>
                        </button>
                    </div>
                </div>

                <button type="submit" class="seller-login-btn" style="margin-top: 24px;">Register Now</button>
            </form>

            <div class="seller-login-footer" style="margin-top: 24px;">
                <p>Already have a seller account? <a href="{{ route('Sellerlogin') }}">Login to Seller Hub</a></p>
            </div>
        </div>
    </div>
</div>

<script>
function toggleSellerPass() {
    const inp = document.getElementById('seller-pass');
    inp.type = inp.type === 'password' ? 'text' : 'password';
}
</script>
@endsection
