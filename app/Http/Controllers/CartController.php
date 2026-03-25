<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = [
            [
                'id' => 1,
                'title' => 'Samsung Galaxy S24 Ultra 5G (Titanium Black, 256 GB)',
                'seller' => 'RetailNet',
                'price' => '89,999',
                'mrp' => '1,34,999',
                'discount' => '33',
                'qty' => 1,
                'emoji' => '📱',
                'delivery' => 'Free',
            ],
            [
                'id' => 3,
                'title' => 'Sony WH-1000XM5 Wireless Noise Cancelling Headphones (Black)',
                'seller' => 'SuperComNet',
                'price' => '19,990',
                'mrp' => '34,990',
                'discount' => '42',
                'qty' => 1,
                'emoji' => '🎧',
                'delivery' => 'Free',
            ],
            [
                'id' => 4,
                'title' => 'Nike Air Max 90 Running Shoes For Men (White, Black) - Size 9',
                'seller' => 'SportZone',
                'price' => '5,999',
                'mrp' => '12,995',
                'discount' => '53',
                'qty' => 2,
                'emoji' => '👟',
                'delivery' => '₹40',
            ],
        ];

        $priceDetails = [
            'items_count' => 4,
            'total_mrp' => '1,95,979',
            'discount' => '80,991',
            'delivery' => 40,
            'total' => '1,15,028',
            'savings' => '80,991',
        ];

        return view('cart', compact('cartItems', 'priceDetails'));
    }
}
