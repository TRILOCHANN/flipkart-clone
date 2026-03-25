@extends('layouts.app')

@section('title', 'Products - Flipkart')

@section('content')
<div class="listing-page">
    {{-- FILTERS SIDEBAR --}}
    <aside class="filters-sidebar">
        <div class="filter-section">
            <h3 class="filter-title">Filters</h3>
        </div>

        <div class="filter-section">
            <h3 class="filter-title">Price</h3>
            <label class="filter-option">
                <input type="checkbox"> <label>Under ₹1,000</label>
            </label>
            <label class="filter-option">
                <input type="checkbox"> <label>₹1,000 - ₹5,000</label>
            </label>
            <label class="filter-option">
                <input type="checkbox"> <label>₹5,000 - ₹20,000</label>
            </label>
            <label class="filter-option">
                <input type="checkbox"> <label>₹20,000 - ₹50,000</label>
            </label>
            <label class="filter-option">
                <input type="checkbox"> <label>Above ₹50,000</label>
            </label>
        </div>

        <div class="filter-section">
            <h3 class="filter-title">Brand</h3>
            @foreach($brands as $brand)
            <label class="filter-option">
                <input type="checkbox"> <label>{{ $brand }}</label>
            </label>
            @endforeach
        </div>

        <div class="filter-section">
            <h3 class="filter-title">Customer Rating</h3>
            <label class="filter-option">
                <input type="checkbox"> <label><span class="filter-stars">★★★★</span> & above</label>
            </label>
            <label class="filter-option">
                <input type="checkbox"> <label><span class="filter-stars">★★★</span> & above</label>
            </label>
            <label class="filter-option">
                <input type="checkbox"> <label><span class="filter-stars">★★</span> & above</label>
            </label>
        </div>

        <div class="filter-section">
            <h3 class="filter-title">Discount</h3>
            <label class="filter-option">
                <input type="checkbox"> <label>10% or more</label>
            </label>
            <label class="filter-option">
                <input type="checkbox"> <label>20% or more</label>
            </label>
            <label class="filter-option">
                <input type="checkbox"> <label>30% or more</label>
            </label>
            <label class="filter-option">
                <input type="checkbox"> <label>50% or more</label>
            </label>
        </div>

        <div class="filter-section">
            <h3 class="filter-title">Availability</h3>
            <label class="filter-option">
                <input type="checkbox" checked> <label>Include Out of Stock</label>
            </label>
        </div>
    </aside>

    {{-- PRODUCTS MAIN --}}
    <div class="products-main">
        <div class="sort-bar">
            <span class="sort-label">Sort By</span>
            <span class="sort-option active">Relevance</span>
            <span class="sort-option">Popularity</span>
            <span class="sort-option">Price — Low to High</span>
            <span class="sort-option">Price — High to Low</span>
            <span class="sort-option">Newest First</span>
        </div>

        <div class="product-list-grid">
            @foreach($products as $product)
            <div class="product-list-item">
                <a href="/products/{{ $product['id'] }}">
                    <div class="product-list-img" style="display:flex;align-items:center;justify-content:center;font-size:72px;background:#f8f9fa;border-radius:4px;">{{ $product['emoji'] }}</div>
                </a>
                <div class="product-list-info">
                    <h3 class="product-list-title">
                        <a href="/products/{{ $product['id'] }}">{{ $product['title'] }}</a>
                    </h3>
                    <div style="display:flex;align-items:center;gap:8px;margin-bottom:8px;">
                        <span class="rating-badge">{{ $product['rating'] }} ★</span>
                        <span class="rating-count">{{ $product['reviews'] }} Ratings</span>
                    </div>
                    <ul class="product-list-features">
                        @foreach($product['features'] as $feature)
                        <li>{{ $feature }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="product-list-price-section">
                    <div class="product-list-price">₹{{ $product['price'] }}</div>
                    <div class="product-list-mrp">₹{{ $product['mrp'] }}</div>
                    <div class="product-list-discount-text">{{ $product['discount'] }}% off</div>
                    <div class="product-list-delivery">
                        <span>Free</span> Delivery
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="pagination">
            <a href="#">← Previous</a>
            <span class="active">1</span>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">Next →</a>
        </div>
    </div>
</div>
@endsection
