@extends('layouts.app')

@section('title', 'Flipkart - Online Shopping India')

@section('content')

{{-- HERO CAROUSEL --}}
<div class="carousel-section" id="heroCarousel">
    <div class="carousel-track" id="carouselTrack">
        @foreach($banners as $banner)
        <div class="carousel-slide">
            <div class="carousel-slide-content" style="background: {{ $banner['gradient'] }};">
                <div class="carousel-slide-text">
                    <h2>{{ $banner['title'] }}</h2>
                    <p>{{ $banner['subtitle'] }}</p>
                    <a href="/products" class="btn-carousel">Shop Now →</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <button class="carousel-btn carousel-btn-prev" onclick="moveCarousel(-1)">❮</button>
    <button class="carousel-btn carousel-btn-next" onclick="moveCarousel(1)">❯</button>
    <div class="carousel-dots" id="carouselDots">
        @foreach($banners as $i => $banner)
        <span class="carousel-dot {{ $i === 0 ? 'active' : '' }}" onclick="goToSlide({{ $i }})"></span>
        @endforeach
    </div>
</div>

{{-- CATEGORY CARDS --}}
<div class="section">
    <div class="section-header">
        <h2 class="section-title">Shop by Category</h2>
        <a href="/products" class="section-viewall">View All</a>
    </div>
    <div class="category-grid">
        @foreach($categories as $cat)
        <a href="/products" class="category-card">
            <div class="category-card-icon">{{ $cat['icon'] }}</div>
            <div class="category-card-title">{{ $cat['title'] }}</div>
            <div class="category-card-subtitle">{{ $cat['offer'] }}</div>
        </a>
        @endforeach
    </div>
</div>

{{-- DEAL OF THE DAY --}}
<div class="deal-section">
    <div class="deal-left">
        <h2>Deal of the Day</h2>
        <div class="deal-timer" id="dealTimer">
            <div class="deal-timer-block">
                <span class="number" id="timer-hours">08</span>
                <span class="label">Hrs</span>
            </div>
            <div class="deal-timer-block">
                <span class="number" id="timer-mins">45</span>
                <span class="label">Min</span>
            </div>
            <div class="deal-timer-block">
                <span class="number" id="timer-secs">30</span>
                <span class="label">Sec</span>
            </div>
        </div>
        <a href="/products" class="deal-viewall">View All</a>
    </div>
    <div class="deal-right">
        <div class="product-scroll-wrapper">
            <div class="product-scroll" id="dealScroll">
                @foreach($dealProducts as $prod)
                <a href="/products/{{ $loop->iteration }}" class="product-card">
                    <div class="product-card-img" style="display:flex;align-items:center;justify-content:center;font-size:64px;background:#f8f9fa;">{{ $prod['emoji'] }}</div>
                    <div class="product-card-title">{{ $prod['title'] }}</div>
                    <div class="product-card-brand">{{ $prod['brand'] }}</div>
                    <div>
                        <span class="product-card-price">₹{{ $prod['price'] }}</span>
                        <span class="product-card-mrp">₹{{ $prod['mrp'] }}</span>
                    </div>
                    <div class="product-card-discount">{{ $prod['discount'] }}</div>
                </a>
                @endforeach
            </div>
            <button class="scroll-btn scroll-btn-left" onclick="scrollProducts('dealScroll', -1)">❮</button>
            <button class="scroll-btn scroll-btn-right" onclick="scrollProducts('dealScroll', 1)">❯</button>
        </div>
    </div>
</div>

{{-- PROMOTIONAL BANNERS --}}
<div class="promo-banner">
    <div class="promo-banner-grid">
        <a href="/products" class="promo-banner-item" style="background: linear-gradient(135deg, #00b09b, #96c93d);">
            <div>
                <h3>🌟 Flipkart Minutes</h3>
                <p>Get groceries delivered in minutes!</p>
            </div>
        </a>
        <a href="/products" class="promo-banner-item" style="background: linear-gradient(135deg, #4568dc, #b06ab3);">
            <div>
                <h3>💳 No Cost EMI</h3>
                <p>Available on all leading cards</p>
            </div>
        </a>
        <a href="/products" class="promo-banner-item" style="background: linear-gradient(135deg, #f46b45, #eea849);">
            <div>
                <h3>🔄 Exchange Offers</h3>
                <p>Get extra ₹5000 off on exchange!</p>
            </div>
        </a>
    </div>
</div>

{{-- TRENDING PRODUCTS --}}
<div class="section">
    <div class="section-header">
        <h2 class="section-title">Best of Electronics</h2>
        <a href="/products" class="section-viewall">View All</a>
    </div>
    <div class="product-scroll-wrapper">
        <div class="product-scroll" id="trendingScroll">
            @foreach($trendingProducts as $prod)
            <a href="/products/{{ $loop->iteration }}" class="product-card">
                <div class="product-card-img" style="display:flex;align-items:center;justify-content:center;font-size:64px;background:#f8f9fa;">{{ $prod['emoji'] }}</div>
                <div class="product-card-title">{{ $prod['title'] }}</div>
                <div class="product-card-brand">{{ $prod['brand'] }}</div>
                <div>
                    <span class="product-card-price">₹{{ $prod['price'] }}</span>
                    <span class="product-card-mrp">₹{{ $prod['mrp'] }}</span>
                </div>
                <div class="product-card-discount">{{ $prod['discount'] }}</div>
            </a>
            @endforeach
        </div>
        <button class="scroll-btn scroll-btn-left" onclick="scrollProducts('trendingScroll', -1)">❮</button>
        <button class="scroll-btn scroll-btn-right" onclick="scrollProducts('trendingScroll', 1)">❯</button>
    </div>
</div>

{{-- ANOTHER PROMO --}}
<div class="promo-banner">
    <div class="promo-banner-grid">
        <a href="/products" class="promo-banner-item" style="background: linear-gradient(135deg, #8e2de2, #4a00e0);">
            <div>
                <h3>📱 Mobiles Store</h3>
                <p>Latest smartphones at best prices</p>
            </div>
        </a>
        <a href="/products" class="promo-banner-item" style="background: linear-gradient(135deg, #c94b4b, #4b134f);">
            <div>
                <h3>🏠 Home & Living</h3>
                <p>Furniture & decor starting ₹199</p>
            </div>
        </a>
        <a href="/products" class="promo-banner-item" style="background: linear-gradient(135deg, #0575e6, #021b79);">
            <div>
                <h3>✈️ Flipkart Travel</h3>
                <p>Book flights & hotels at best prices</p>
            </div>
        </a>
    </div>
</div>

{{-- FASHION ZONE - CATEGORY GRID --}}


{{-- FASHION DEALS --}}
<div class="section">
    <div class="section-header">
        <h2 class="section-title">Fashion Top Deals</h2>
        <a href="/products" class="section-viewall">View All</a>
    </div>
    <div class="product-scroll-wrapper">
        <div class="product-scroll" id="fashionScroll">
            @foreach($fashionProducts as $prod)
            <a href="/products/{{ $loop->iteration }}" class="product-card">
                <div class="product-card-img" style="display:flex;align-items:center;justify-content:center;font-size:64px;background:#f8f9fa;">{{ $prod['emoji'] }}</div>
                <div class="product-card-title">{{ $prod['title'] }}</div>
                <div class="product-card-brand">{{ $prod['brand'] }}</div>
                <div>
                    <span class="product-card-price">₹{{ $prod['price'] }}</span>
                    <span class="product-card-mrp">₹{{ $prod['mrp'] }}</span>
                </div>
                <div class="product-card-discount">{{ $prod['discount'] }}</div>
            </a>
            @endforeach
        </div>
        <button class="scroll-btn scroll-btn-left" onclick="scrollProducts('fashionScroll', -1)">❮</button>
        <button class="scroll-btn scroll-btn-right" onclick="scrollProducts('fashionScroll', 1)">❯</button>
    </div>
</div>

@endsection
