{{-- Flipkart Header --}}
<header class="header">
    <div class="header-inner">
        <a href="/" class="header-logo">
            <span class="header-logo-text">Flipkart</span>
            <span class="header-logo-tagline">
                Explore <span style="color: var(--fk-yellow); font-weight:600;">Plus</span>
                <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
                    <path d="M5 0L6.12 3.88L10 5L6.12 6.12L5 10L3.88 6.12L0 5L3.88 3.88L5 0Z" fill="#FFE500" />
                </svg>
            </span>
        </a>

        <div class="header-search">
            <input type="text" placeholder="Search for Products, Brands and More" />
            <span class="header-search-icon">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M15.5 14h-.79l-.28-.27A6.47 6.47 0 0016 9.5 6.5 6.5 0 109.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                </svg>
            </span>
        </div>

        @php
            $cartCount = collect(session('cart', []))->sum('qty');
        @endphp

        <div class="header-actions">
            @auth
            <div class="header-user-dropdown" id="userDropdown">
                <button type="button" class="header-btn header-btn-login" id="userDropdownBtn">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="flex-shrink:0;">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                    {{ Auth::user()->name }}
                    <svg class="header-dropdown-arrow" id="dropdownArrow" width="10" height="10" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M7 10l5 5 5-5z"/>
                    </svg>
                </button>

                <div class="header-dropdown-menu" id="userDropdownMenu">
                    <a href="/">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="#878787"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                        Home
                    </a>
                    <a href="/profile">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="#878787"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                        My Profile
                    </a>
                    <a href="{{ route('Sellerlogin') }}">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="#878787"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg>
                        Become a Seller
                    </a>
                    <a href="#">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="#878787"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10H7v-2h10v2z"/></svg>
                        Orders
                    </a>
                    <a href="#">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="#878787"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                        Wishlist
                    </a>
                    <div class="header-dropdown-divider"></div>
                    <form method="POST" action="/logout" class="header-logout-form">
                        @csrf
                        <button type="submit" class="header-dropdown-logout">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="#878787"><path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/></svg>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
            @endauth

            @guest
            <a href="{{ route('Loginpage') }}" class="header-btn header-btn-login">
                Login
            </a>
            @endguest

            <a href="#" class="header-link">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M12 22C6.48 22 2 17.52 2 12S6.48 2 12 2s10 4.48 10 10-4.48 10-10 10zm-1-7v2h2v-2h-2zm0-8v6h2V7h-2z" />
                </svg>
                More
            </a>
            @auth
            <a href="/cart" class="header-link" style="position:relative;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49A1 1 0 0020.01 4H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                </svg>
                Cart
                @if($cartCount > 0)
                <span class="header-cart-badge">{{ $cartCount }}</span>
                @endif
            </a>
            @else
            <a href="{{route('Nocart')}}" class="header-link" style="position:relative;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49A1 1 0 0020.01 4H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                </svg>
                Cart
                @if($cartCount > 0)
                <span class="header-cart-badge">{{ $cartCount }}</span>
                @endif
            </a>
            @endauth
        </div>
    </div>
</header>

{{-- Dropdown Click Toggle Script --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('userDropdownBtn');
    const menu = document.getElementById('userDropdownMenu');
    const arrow = document.getElementById('dropdownArrow');

    if (!btn || !menu) return;

    let isOpen = false;

    function toggleDropdown(e) {
        e.preventDefault();
        e.stopPropagation();
        isOpen = !isOpen;
        menu.classList.toggle('active', isOpen);
        if (arrow) arrow.classList.toggle('rotated', isOpen);
    }

    function closeDropdown() {
        isOpen = false;
        menu.classList.remove('active');
        if (arrow) arrow.classList.remove('rotated');
    }

    // Toggle on click
    btn.addEventListener('click', toggleDropdown);

    // Close when clicking outside
    document.addEventListener('click', function (e) {
        if (!btn.contains(e.target) && !menu.contains(e.target)) {
            closeDropdown();
        }
    });

    // Close on Escape key
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeDropdown();
    });
});
</script>
