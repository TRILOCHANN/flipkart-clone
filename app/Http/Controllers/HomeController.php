<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = [
            ['title' => 'Big Billion Days', 'subtitle' => 'Upto 80% Off on Electronics, Fashion & More!', 'gradient' => 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)'],
            ['title' => 'iPhone 16 Pro Max', 'subtitle' => 'Starting from ₹1,34,900. Get Exchange Offers!', 'gradient' => 'linear-gradient(135deg, #0f0c29 0%, #302b63 50%, #24243e 100%)'],
            ['title' => 'Fashion Sale', 'subtitle' => '50-80% Off on Top Brands', 'gradient' => 'linear-gradient(135deg, #fc5c7d 0%, #6a82fb 100%)'],
            ['title' => 'Home Makeover', 'subtitle' => 'Furniture, Decor & More – Starting ₹199', 'gradient' => 'linear-gradient(135deg, #11998e 0%, #38ef7d 100%)'],
            ['title' => 'Electronics Bonanza', 'subtitle' => 'Laptops, Tablets & More at Best Prices', 'gradient' => 'linear-gradient(135deg, #ee0979 0%, #ff6a00 100%)'],
        ];

        $categories = [
            ['icon' => '📱', 'title' => 'Mobiles', 'offer' => 'Upto 40% Off'],
            ['icon' => '💻', 'title' => 'Laptops', 'offer' => 'Upto 30% Off'],
            ['icon' => '👗', 'title' => 'Fashion', 'offer' => '50-80% Off'],
            ['icon' => '🏠', 'title' => 'Home', 'offer' => 'Upto 60% Off'],
            ['icon' => '🔌', 'title' => 'Appliances', 'offer' => 'Upto 50% Off'],
            ['icon' => '🎮', 'title' => 'Gaming', 'offer' => 'Upto 40% Off'],
            ['icon' => '👟', 'title' => 'Footwear', 'offer' => 'Upto 70% Off'],
            ['icon' => '🛒', 'title' => 'Grocery', 'offer' => 'Upto 65% Off'],
            ['icon' => '💄', 'title' => 'Beauty', 'offer' => '30-60% Off'],
            ['icon' => '🪑', 'title' => 'Furniture', 'offer' => 'Upto 75% Off'],
        ];

        $dealProducts = [
            ['title' => 'Samsung Galaxy S24 Ultra', 'brand' => 'Samsung', 'price' => '89,999', 'mrp' => '1,34,999', 'discount' => '33% off', 'emoji' => '📱'],
            ['title' => 'Sony WH-1000XM5 Headphones', 'brand' => 'Sony', 'price' => '19,990', 'mrp' => '34,990', 'discount' => '42% off', 'emoji' => '🎧'],
            ['title' => 'Nike Air Max 90', 'brand' => 'Nike', 'price' => '5,999', 'mrp' => '12,995', 'discount' => '53% off', 'emoji' => '👟'],
            ['title' => 'Canon EOS R50 Camera', 'brand' => 'Canon', 'price' => '52,990', 'mrp' => '75,995', 'discount' => '30% off', 'emoji' => '📷'],
            ['title' => 'Apple MacBook Air M3', 'brand' => 'Apple', 'price' => '94,990', 'mrp' => '1,14,900', 'discount' => '17% off', 'emoji' => '💻'],
            ['title' => 'Boat Airdopes 141', 'brand' => 'Boat', 'price' => '999', 'mrp' => '4,490', 'discount' => '77% off', 'emoji' => '🎵'],
            ['title' => 'Prestige Induction Cooktop', 'brand' => 'Prestige', 'price' => '1,599', 'mrp' => '3,295', 'discount' => '51% off', 'emoji' => '🍳'],
            ['title' => 'Samsung 55" Crystal 4K TV', 'brand' => 'Samsung', 'price' => '37,990', 'mrp' => '64,900', 'discount' => '41% off', 'emoji' => '📺'],
        ];

        $trendingProducts = [
            ['title' => 'iPhone 16 128GB', 'brand' => 'Apple', 'price' => '69,900', 'mrp' => '79,900', 'discount' => '12% off', 'emoji' => '📱'],
            ['title' => 'ASUS ROG Strix G16', 'brand' => 'ASUS', 'price' => '1,04,990', 'mrp' => '1,39,990', 'discount' => '25% off', 'emoji' => '💻'],
            ['title' => 'PS5 Slim Console', 'brand' => 'Sony', 'price' => '44,990', 'mrp' => '54,990', 'discount' => '18% off', 'emoji' => '🎮'],
            ['title' => 'Samsung Galaxy Watch 6', 'brand' => 'Samsung', 'price' => '16,999', 'mrp' => '29,999', 'discount' => '43% off', 'emoji' => '⌚'],
            ['title' => 'OnePlus Nord 4 5G', 'brand' => 'OnePlus', 'price' => '24,999', 'mrp' => '29,999', 'discount' => '16% off', 'emoji' => '📱'],
            ['title' => 'JBL Charge 5 Speaker', 'brand' => 'JBL', 'price' => '12,999', 'mrp' => '22,999', 'discount' => '43% off', 'emoji' => '🔊'],
            ['title' => 'Apple AirPods Pro 2', 'brand' => 'Apple', 'price' => '20,900', 'mrp' => '24,900', 'discount' => '16% off', 'emoji' => '🎧'],
            ['title' => 'Dyson V15 Detect', 'brand' => 'Dyson', 'price' => '44,900', 'mrp' => '62,900', 'discount' => '28% off', 'emoji' => '🧹'],
        ];

        $fashionCategories = [
            ['icon' => '👔', 'title' => 'Shirts', 'offer' => 'Upto 60% Off'],
            ['icon' => '👕', 'title' => 'T-Shirts', 'offer' => 'Upto 70% Off'],
            ['icon' => '👖', 'title' => 'Jeans', 'offer' => 'Upto 65% Off'],
            ['icon' => '🆕', 'title' => 'New Launch', 'offer' => 'Fresh Arrivals'],
            ['icon' => '🕶️', 'title' => 'Sunglasses', 'offer' => '30-60% Off'],
            ['icon' => '🩴', 'title' => 'Sandals', 'offer' => 'Upto 55% Off'],
            ['icon' => '🔥', 'title' => 'Trends', 'offer' => 'Latest Styles'],
            ['icon' => '👟', 'title' => 'Casual Shoes', 'offer' => 'Upto 60% Off'],
            ['icon' => '👞', 'title' => 'Formal Shoes', 'offer' => 'Upto 50% Off'],
            ['icon' => '🏃', 'title' => 'Tracksuits', 'offer' => 'Upto 65% Off'],
            ['icon' => '🧳', 'title' => 'Trolley', 'offer' => 'Upto 70% Off'],
            ['icon' => '👶', 'title' => 'Kids Clothing', 'offer' => '40-80% Off'],
            ['icon' => '🩹', 'title' => 'Flip Flops', 'offer' => 'Upto 55% Off'],
            ['icon' => '💍', 'title' => 'Jewellery', 'offer' => 'Upto 80% Off'],
            ['icon' => '💒', 'title' => 'Wedding Store', 'offer' => 'Best Deals'],
        ];

        $fashionProducts = [
            ['title' => 'Levi\'s Slim Fit Jeans', 'brand' => 'Levi\'s', 'price' => '1,499', 'mrp' => '3,999', 'discount' => '62% off', 'emoji' => '👖'],
            ['title' => 'US Polo T-Shirt', 'brand' => 'US Polo', 'price' => '799', 'mrp' => '2,299', 'discount' => '65% off', 'emoji' => '👕'],
            ['title' => 'Puma Running Shoes', 'brand' => 'Puma', 'price' => '2,499', 'mrp' => '5,999', 'discount' => '58% off', 'emoji' => '👟'],
            ['title' => 'Van Heusen Formal Shirt', 'brand' => 'Van Heusen', 'price' => '999', 'mrp' => '2,499', 'discount' => '60% off', 'emoji' => '👔'],
            ['title' => 'Fossil Chronograph Watch', 'brand' => 'Fossil', 'price' => '5,999', 'mrp' => '12,995', 'discount' => '53% off', 'emoji' => '⌚'],
            ['title' => 'Ray-Ban Aviator', 'brand' => 'Ray-Ban', 'price' => '4,999', 'mrp' => '9,990', 'discount' => '49% off', 'emoji' => '🕶️'],
            ['title' => 'Wildcraft Backpack', 'brand' => 'Wildcraft', 'price' => '1,199', 'mrp' => '2,999', 'discount' => '60% off', 'emoji' => '🎒'],
            ['title' => 'Peter England Chinos', 'brand' => 'Peter England', 'price' => '1,199', 'mrp' => '2,799', 'discount' => '57% off', 'emoji' => '👖'],
        ];

        return view('home', compact('banners', 'categories', 'dealProducts', 'trendingProducts', 'fashionCategories', 'fashionProducts'));
    }
}
