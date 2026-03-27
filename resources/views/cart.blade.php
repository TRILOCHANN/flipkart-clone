@extends('layouts.app')

@section('title', 'Shopping Cart - Flipkart')

@section('content')
<div class="cart-page">
    <div class="cart-items">
        <div class="cart-header">
            My Cart ({{ $priceDetails['items_count'] }})
        </div>

        @foreach($cartItems as $index => $item)
        <div class="cart-item">
            <a href="/products/{{ $item['id'] }}">
                <div class="cart-item-img" style="display:flex;align-items:center;justify-content:center;font-size:48px;background:#f8f9fa;">{{ $item['emoji'] }}</div>
            </a>
            <div class="cart-item-info">
                <a href="/products/{{ $item['id'] }}">
                    <div class="cart-item-title">{{ $item['title'] }}</div>
                </a>
                <div class="cart-item-seller">Seller: {{ $item['seller'] }} 
                    <span class="rating-badge" style="font-size:10px;padding:1px 6px;margin-left:4px;">4.{{ $index + 2 }} ★</span>
                </div>
                <div class="cart-item-price-row">
                    <span class="product-list-mrp" style="font-size:14px;">₹{{ $item['mrp'] }}</span>
                    <span class="product-list-price" style="font-size:18px;">₹{{ $item['price'] }}</span>
                    <span class="product-list-discount-text">{{ $item['discount'] }}% off</span>
                </div>
                <div class="cart-item-controls">
                    <div class="qty-controls">
                        <button class="qty-btn" onclick="changeQty({{ $item['id'] }}, -1)" {{ $item['qty'] <= 1 ? 'disabled' : '' }}>−</button>
                        <input type="text" class="qty-value" value="{{ $item['qty'] }}" readonly>
                        <button class="qty-btn" onclick="changeQty({{ $item['id'] }}, 1)">+</button>
                    </div>
                    <button class="cart-action-btn">Save for Later</button>
                    <form action="{{ route('cart.remove', $item['id']) }}" method="POST" style="display:inline-block; margin:0; padding:0;">
                        @csrf
                        <button type="submit" class="cart-action-btn" style="border:none; cursor:pointer;">Remove</button>
                    </form>
                </div>
            </div>
            <div style="font-size:13px;color:var(--fk-text-primary);text-align:right;min-width:120px;">
                Delivery: <span style="color:var(--fk-green);font-weight:600;">{{ $item['delivery'] }}</span>
                <div style="font-size:12px;color:var(--fk-text-secondary);margin-top:2px;">{{ date('D, d M', strtotime('+3 days')) }}</div>
            </div>
        </div>
        @endforeach

        <div class="cart-place-order">
            <button class="btn-place-order">PLACE ORDER</button>
        </div>
    </div>

    <div class="cart-summary">
        <div class="cart-summary-header">Price Details</div>
        <div class="cart-summary-row">
            <span>Price ({{ $priceDetails['items_count'] }} items)</span>
            <span>₹{{ $priceDetails['total_mrp'] }}</span>
        </div>
        <div class="cart-summary-row">
            <span>Discount</span>
            <span style="color:var(--fk-green);">− ₹{{ $priceDetails['discount'] }}</span>
        </div>
        <div class="cart-summary-row">
            <span>Delivery Charges</span>
            @if($priceDetails['delivery'] == 0)
                <span style="color:var(--fk-green);">Free</span>
            @else
                <span>₹{{ $priceDetails['delivery'] }}</span>
            @endif
        </div>
        <div class="cart-summary-row">
            <span>Secured Packaging Fee</span>
            <span>₹99</span>
        </div>
        <div class="cart-summary-total">
            <span>Total Amount</span>
            <span>₹{{ $priceDetails['total'] }}</span>
        </div>
        <div class="cart-summary-savings">
            You will save ₹{{ $priceDetails['savings'] }} on this order
        </div>
    </div>
</div>

<form id="qty-form" method="POST" style="display:none;">
    @csrf
    <input type="hidden" name="action" id="qty-action">
</form>

<script>
function changeQty(id, change) {
    const form = document.getElementById('qty-form');
    form.action = '/cart/update/' + id;
    document.getElementById('qty-action').value = change > 0 ? 'increase' : 'decrease';
    form.submit();
}
</script>
@endsection
