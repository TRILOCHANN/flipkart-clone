<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index()
    {
        $benefits = [
            [
                'icon' => '📦',
                'title' => '45 Crore+ Customers',
                'description' => 'Reach the largest customer base in India with Flipkart.'
            ],
            [
                'icon' => '🚚',
                'title' => 'Reliable Shipping',
                'description' => 'Ship across India with Ekart — our logistics partner.'
            ],
            [
                'icon' => '💰',
                'title' => 'Low Cost of Doing Business',
                'description' => 'Most competitive fees in the industry. Start with zero investment.'
            ],
            [
                'icon' => '📊',
                'title' => 'Growth Support',
                'description' => 'Access to powerful seller dashboard, analytics, and marketing tools.'
            ],
            [
                'icon' => '🔒',
                'title' => 'Secure & Timely Payments',
                'description' => 'Get paid within 7 days directly to your bank account.'
            ],
            [
                'icon' => '🎓',
                'title' => 'Seller Training',
                'description' => 'Free training resources and dedicated account managers.'
            ],
        ];

        $steps = [
            ['number' => '01', 'title' => 'Create Account', 'description' => 'Register with your GSTIN, PAN, and bank details'],
            ['number' => '02', 'title' => 'List Products', 'description' => 'Add products with images, descriptions, and pricing'],
            ['number' => '03', 'title' => 'Get Orders', 'description' => 'Customers discover and buy your products on Flipkart'],
            ['number' => '04', 'title' => 'Earn Money', 'description' => 'Receive timely payments in your bank account'],
        ];

        $stats = [
            ['value' => '45 Cr+', 'label' => 'Customers'],
            ['value' => '14 Lakh+', 'label' => 'Sellers'],
            ['value' => '19000+', 'label' => 'Pin Codes'],
            ['value' => '700+', 'label' => 'Categories'],
        ];

        return view('seller.index', compact('benefits', 'steps', 'stats'));
    }

    public function login()
    {
        return view('seller.login');
    }
}
