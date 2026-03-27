@extends('layouts.app')

@section('content')
    <div class="container" style="background: white; padding: 40px; margin: 40px auto; max-width: 800px; text-align: center; box-shadow: 0 1px 2px 0 rgba(0,0,0,0.2); border-radius: 4px;">
        <div style="margin-bottom: 24px;">
            <img src="{{ asset('image/Nocart.png') }}" alt="Empty Cart" style="width: 250px; opacity: 0.9; margin: 0 auto;">
        </div>
        <h2 style="font-size: 24px; font-weight: 500; color: #000; margin-bottom: 12px;">Your cart is empty!</h2>
        <p style="font-size: 14px; color: #878787; margin-bottom: 32px;">Add items to it now.</p>
        
        <div style="display: flex; justify-content: center;">
            @auth
                <a href="/products" style="display: inline-block; padding: 14px 72px; background: #fb641b; color: white; text-decoration: none; font-size: 16px; font-weight: 500; border-radius: 2px; box-shadow: 0 1px 2px 0 rgba(0,0,0,0.2);">Shop Now</a>
            @else
                <a href="{{ route('Loginpage') }}" style="display: inline-block; padding: 14px 72px; background: #fb641b; color: white; text-decoration: none; font-size: 16px; font-weight: 500; border-radius: 2px; box-shadow: 0 1px 2px 0 rgba(0,0,0,0.2);">Login</a>
            @endauth
        </div>
    </div>
@endsection
