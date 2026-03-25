@extends('layouts.app')

@section('title', $product['title'] . ' - Flipkart')

@section('content')
<div class="detail-page">
    {{-- LEFT: Gallery --}}
    <div class="detail-left">
        <div class="detail-gallery">
            <div class="detail-main-image" style="display:flex;align-items:center;justify-content:center;font-size:120px;background:#f8f9fa;" id="mainImage">
                {{ $product['emoji'] }}
            </div>
            <div class="detail-thumbnails">
                @for($i = 0; $i < 4; $i++)
                <div class="detail-thumb {{ $i === 0 ? 'active' : '' }}" style="display:flex;align-items:center;justify-content:center;font-size:24px;">
                    {{ $product['emoji'] }}
                </div>
                @endfor
            </div>
            <div class="detail-buttons">
                <a href="/cart" class="btn-add-cart">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49A1 1 0 0020.01 4H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/>
                    </svg>
                    ADD TO CART
                </a>
                <a href="#" class="btn-buy-now">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M3.5 18.49l6-6.01 4 4L22 6.92l-1.41-1.41-7.09 7.97-4-4L2 16.99z"/>
                    </svg>
                    BUY NOW
                </a>
            </div>
        </div>
    </div>

    {{-- RIGHT: Product Info --}}
    <div class="detail-right">
        <div class="detail-info">
            <div class="detail-breadcrumb">
                <a href="/">Home</a> &rsaquo;
                <a href="/products">{{ $product['category'] ?? 'Products' }}</a> &rsaquo;
                <span>{{ $product['brand'] }}</span>
            </div>

            <h1 class="detail-title">{{ $product['title'] }}</h1>

            <div class="detail-rating-row">
                <span class="rating-badge">{{ $product['rating'] }} ★</span>
                <span class="rating-count">{{ $product['reviews'] }} Ratings & {{ number_format((int)str_replace(',', '', $product['reviews']) / 3) }} Reviews</span>
                <span style="color:var(--fk-green);font-weight:600;font-size:13px;">Flipkart Assured</span>
            </div>

            <div class="detail-price-section">
                <span class="detail-price">₹{{ $product['price'] }}</span>
                <span class="detail-mrp">₹{{ $product['mrp'] }}</span>
                <span class="detail-discount">{{ $product['discount'] }}% off</span>
                <p style="font-size:12px;color:var(--fk-text-secondary);margin-top:4px;">+ ₹99 Secured Packaging Fee</p>
            </div>

            <div class="detail-offers-section">
                <h3 class="detail-offers-title">Available Offers</h3>
                <div class="offer-item">
                    <span class="offer-tag">Bank Offer</span>
                    <span>10% off on HDFC Bank Credit Card, up to ₹1,500. On orders of ₹5,000 and above</span>
                </div>
                <div class="offer-item">
                    <span class="offer-tag">Bank Offer</span>
                    <span>10% off on ICICI Bank Debit Card, up to ₹1,250. On orders of ₹5,000 and above</span>
                </div>
                <div class="offer-item">
                    <span class="offer-tag">Special Price</span>
                    <span>Get extra {{ $product['discount'] }}% off (price inclusive of cashback/coupon)</span>
                </div>
                <div class="offer-item">
                    <span class="offer-tag">No Cost EMI</span>
                    <span>EMI starting from ₹{{ number_format((int)str_replace(',', '', $product['price']) / 12) }}/month</span>
                </div>
                <div class="offer-item">
                    <span class="offer-tag">Partner Offer</span>
                    <span>Sign up for Flipkart Pay Later and get Flipkart Gift Card worth ₹100</span>
                </div>
            </div>

            <div class="detail-highlights">
                <h3>Highlights</h3>
                <ul>
                    @foreach($product['features'] as $feature)
                    <li>{{ $feature }}</li>
                    @endforeach
                    <li>1 Year Manufacturer Warranty for Device and 6 Months for Accessories</li>
                </ul>
            </div>

            <div style="padding:12px 0;border-bottom:1px solid var(--fk-border-light);">
                <span style="font-size:14px;font-weight:700;">Delivery</span>
                <div style="display:flex;align-items:center;gap:8px;margin-top:8px;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#2874f0"><path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zm-1.5 9c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/></svg>
                    <span style="font-size:14px;"><strong style="color:var(--fk-green);">Free Delivery</strong> by <strong>{{ date('D, d M', strtotime('+3 days')) }}</strong></span>
                </div>
            </div>

            <div style="padding:12px 0;">
                <span style="font-size:14px;font-weight:700;">Seller</span>
                <div style="margin-top:6px;">
                    <a href="#" style="color:var(--fk-blue);font-size:14px;font-weight:600;">RetailNet</a>
                    <span class="rating-badge" style="margin-left:6px;font-size:11px;">4.4 ★</span>
                </div>
                <ul style="margin-top:6px;">
                    <li style="font-size:13px;color:var(--fk-text-secondary);padding:2px 0;">• 7 Day Replacement Policy</li>
                    <li style="font-size:13px;color:var(--fk-text-secondary);padding:2px 0;">• GST invoice available</li>
                </ul>
            </div>
        </div>

        {{-- Specifications --}}
        <div class="specs-section">
            <h3>Specifications</h3>
            @foreach($specs as $group => $items)
            <h4 class="specs-group-title">{{ $group }}</h4>
            <table class="specs-table">
                @foreach($items as $key => $val)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $val }}</td>
                </tr>
                @endforeach
            </table>
            @endforeach
        </div>

        {{-- Similar Products --}}
        @if(count($similarProducts) > 0)
        <div class="section" style="border-radius:var(--fk-radius);">
            <div class="section-header">
                <h2 class="section-title">Similar Products</h2>
            </div>
            <div class="product-scroll-wrapper">
                <div class="product-scroll" id="similarScroll">
                    @foreach($similarProducts as $sim)
                    <a href="/products/{{ $sim['id'] }}" class="product-card">
                        <div class="product-card-img" style="display:flex;align-items:center;justify-content:center;font-size:64px;background:#f8f9fa;">{{ $sim['emoji'] }}</div>
                        <div class="product-card-title">{{ $sim['title'] }}</div>
                        <div class="product-card-brand">{{ $sim['brand'] }}</div>
                        <div>
                            <span class="product-card-price">₹{{ $sim['price'] }}</span>
                            <span class="product-card-mrp">₹{{ $sim['mrp'] }}</span>
                        </div>
                        <div class="product-card-discount">{{ $sim['discount'] }}% off</div>
                    </a>
                    @endforeach
                </div>
                <button class="scroll-btn scroll-btn-left" onclick="scrollProducts('similarScroll', -1)">❮</button>
                <button class="scroll-btn scroll-btn-right" onclick="scrollProducts('similarScroll', 1)">❯</button>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
