{{-- Category Navigation Bar --}}
<nav class="category-nav">
    <div class="category-nav-inner">
        @php
        $categories = [
            ['icon' => '🛒', 'label' => 'Grocery'],
            ['icon' => '📱', 'label' => 'Mobiles'],
            ['icon' => '👗', 'label' => 'Fashion'],
            ['icon' => '💻', 'label' => 'Electronics'],
            ['icon' => '🏠', 'label' => 'Home'],
            ['icon' => '🔌', 'label' => 'Appliances'],
            ['icon' => '✈️', 'label' => 'Travel'],
            ['icon' => '💄', 'label' => 'Beauty'],
            ['icon' => '🏍️', 'label' => 'Two Wheelers'],
        ];
        @endphp

        @foreach($categories as $cat)
        <a href="/products" class="category-nav-item">
            <span class="category-nav-icon">{{ $cat['icon'] }}</span>
            <span class="category-nav-label">{{ $cat['label'] }}</span>
        </a>
        @endforeach
    </div>
</nav>
