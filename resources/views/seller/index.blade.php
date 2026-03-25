@extends('layouts.app')

@section('title', 'Sell Online on Flipkart')

@section('content')
{{-- Hero Section --}}
<div class="seller-hero">
    <div class="seller-hero-inner">
        <div class="seller-hero-content">
            <h1>Sell Online to <span class="seller-highlight">45 Crore+</span> Customers</h1>
            <p class="seller-hero-sub">Join thousands of sellers who grow their business on Flipkart every day. Zero investment needed to start.</p>
            <div class="seller-hero-stats">
                @foreach($stats as $stat)
                <div class="seller-stat">
                    <span class="seller-stat-value">{{ $stat['value'] }}</span>
                    <span class="seller-stat-label">{{ $stat['label'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
        <div class="seller-hero-form-wrap">
            <div class="seller-hero-form">
                <h3>Start Selling Today</h3>
                <p class="seller-form-subtitle">Create your seller account — it only takes 10 minutes</p>
                <form onsubmit="event.preventDefault();">
                    <div class="seller-field">
                        <input type="tel" placeholder="Enter Mobile Number" />
                        <span class="seller-field-icon">📱</span>
                    </div>
                    <div class="seller-field">
                        <input type="email" placeholder="Enter Email ID" />
                        <span class="seller-field-icon">✉️</span>
                    </div>
                    <div class="seller-field">
                        <input type="text" placeholder="Enter GSTIN (optional)" />
                        <span class="seller-field-icon">🏢</span>
                    </div>
                    <button type="submit" class="seller-form-btn">
                        Register Now
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
                    </button>
                    <p class="seller-form-note">By clicking, you agree to Flipkart's <a href="#">Seller T&C</a></p>
                </form>
                <div class="seller-form-login-link">
                    <a href="/seller/login">Already a seller? Login here</a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- How It Works --}}
<div class="seller-steps-section">
    <div class="seller-section-inner">
        <h2 class="seller-section-title">How It Works</h2>
        <p class="seller-section-subtitle">Start selling in 4 simple steps</p>
        <div class="seller-steps-grid">
            @foreach($steps as $step)
            <div class="seller-step-card">
                <div class="seller-step-number">{{ $step['number'] }}</div>
                <h4>{{ $step['title'] }}</h4>
                <p>{{ $step['description'] }}</p>
                @if(!$loop->last)
                <div class="seller-step-arrow">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="#2874f0"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- Benefits Section --}}
<div class="seller-benefits-section">
    <div class="seller-section-inner">
        <h2 class="seller-section-title">Why Sell on Flipkart?</h2>
        <p class="seller-section-subtitle">Everything you need to grow your business online</p>
        <div class="seller-benefits-grid">
            @foreach($benefits as $benefit)
            <div class="seller-benefit-card">
                <div class="seller-benefit-icon">{{ $benefit['icon'] }}</div>
                <h4>{{ $benefit['title'] }}</h4>
                <p>{{ $benefit['description'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- Fees Section --}}
<div class="seller-fees-section">
    <div class="seller-section-inner">
        <h2 class="seller-section-title">Transparent Fee Structure</h2>
        <p class="seller-section-subtitle">Know exactly what you pay — no hidden charges</p>
        <div class="seller-fees-table-wrap">
            <table class="seller-fees-table">
                <thead>
                    <tr>
                        <th>Fee Type</th>
                        <th>Description</th>
                        <th>Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Commission Fee</strong></td>
                        <td>Percentage of product selling price (varies by category)</td>
                        <td><span class="seller-fee-badge">2% – 25%</span></td>
                    </tr>
                    <tr>
                        <td><strong>Shipping Fee</strong></td>
                        <td>Based on product weight and delivery distance</td>
                        <td><span class="seller-fee-badge">₹25 – ₹150</span></td>
                    </tr>
                    <tr>
                        <td><strong>Collection Fee</strong></td>
                        <td>Payment gateway charges for order collection</td>
                        <td><span class="seller-fee-badge">2%</span></td>
                    </tr>
                    <tr>
                        <td><strong>Fixed Fee</strong></td>
                        <td>Per order fixed charge for platform services</td>
                        <td><span class="seller-fee-badge">₹5 – ₹30</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- CTA Section --}}
<div class="seller-cta-section">
    <div class="seller-section-inner">
        <h2>Ready to Grow Your Business?</h2>
        <p>Join over 14 Lakh sellers and start selling on India's largest marketplace</p>
        <a href="#" class="seller-cta-btn" onclick="window.scrollTo({top:0,behavior:'smooth'}); return false;">Start Selling Now</a>
    </div>
</div>
@endsection
