<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private function getSampleProducts()
    {
        return [
            ['id' => 1, 'title' => 'Samsung Galaxy S24 Ultra 5G (Titanium Black, 256 GB)', 'brand' => 'Samsung', 'price' => '89,999', 'mrp' => '1,34,999', 'discount' => '33', 'rating' => '4.5', 'reviews' => '24,567', 'emoji' => '📱', 'features' => ['12 GB RAM | 256 GB ROM', '17.27 cm (6.8 inch) Quad HD+ Display', '200MP + 50MP + 12MP + 10MP', '5000 mAh Battery'], 'category' => 'Mobiles'],
            ['id' => 2, 'title' => 'Apple MacBook Air M3 Chip (15 inch, 8GB, 256GB SSD)', 'brand' => 'Apple', 'price' => '94,990', 'mrp' => '1,14,900', 'discount' => '17', 'rating' => '4.7', 'reviews' => '5,432', 'emoji' => '💻', 'features' => ['Apple M3 Chip', '15.3 inch Liquid Retina Display', '8 GB Unified Memory', '18 Hours Battery'], 'category' => 'Laptops'],
            ['id' => 3, 'title' => 'Sony WH-1000XM5 Wireless Noise Cancelling Headphones', 'brand' => 'Sony', 'price' => '19,990', 'mrp' => '34,990', 'discount' => '42', 'rating' => '4.6', 'reviews' => '12,345', 'emoji' => '🎧', 'features' => ['Industry Leading NC', '30 Hours Battery Life', 'Multipoint Connection', 'Speak to Chat'], 'category' => 'Electronics'],
            ['id' => 4, 'title' => 'Nike Air Max 90 Running Shoes For Men (White, Black)', 'brand' => 'Nike', 'price' => '5,999', 'mrp' => '12,995', 'discount' => '53', 'rating' => '4.3', 'reviews' => '8,901', 'emoji' => '👟', 'features' => ['Mesh Upper', 'Air Max Cushioning', 'Rubber Outsole', 'Classic Styling'], 'category' => 'Fashion'],
            ['id' => 5, 'title' => 'LG 655 L Side by Side Refrigerator (GC-B257KQDV)', 'brand' => 'LG', 'price' => '59,990', 'mrp' => '91,990', 'discount' => '34', 'rating' => '4.4', 'reviews' => '3,456', 'emoji' => '🧊', 'features' => ['655 L Capacity', 'Smart Inverter Compressor', 'Door Cooling+', 'Multi Air Flow'], 'category' => 'Appliances'],
            ['id' => 6, 'title' => 'Canon EOS R50 Mirrorless Camera Body with RF-S 18-45mm', 'brand' => 'Canon', 'price' => '52,990', 'mrp' => '75,995', 'discount' => '30', 'rating' => '4.5', 'reviews' => '1,234', 'emoji' => '📷', 'features' => ['24.2 MP APS-C CMOS', '4K Video Recording', 'Fast Autofocus', 'Built-in WiFi'], 'category' => 'Electronics'],
            ['id' => 7, 'title' => 'ASUS ROG Strix G16 (2024) Intel Core i7 13th Gen Gaming Laptop', 'brand' => 'ASUS', 'price' => '1,04,990', 'mrp' => '1,39,990', 'discount' => '25', 'rating' => '4.4', 'reviews' => '2,345', 'emoji' => '💻', 'features' => ['Intel Core i7-13650HX', 'NVIDIA RTX 4060 8GB', '16 GB DDR5 RAM', '16 inch FHD+ 165Hz'], 'category' => 'Laptops'],
            ['id' => 8, 'title' => 'OnePlus Nord 4 5G (Oasis Green, 256 GB)', 'brand' => 'OnePlus', 'price' => '24,999', 'mrp' => '29,999', 'discount' => '16', 'rating' => '4.3', 'reviews' => '15,678', 'emoji' => '📱', 'features' => ['8 GB RAM | 256 GB ROM', '6.74 inch AMOLED Display', '50MP Sony LYT Camera', '5500 mAh Battery'], 'category' => 'Mobiles'],
            ['id' => 9, 'title' => 'Boat Airdopes 141 TWS Earbuds with ENx Tech', 'brand' => 'Boat', 'price' => '999', 'mrp' => '4,490', 'discount' => '77', 'rating' => '4.1', 'reviews' => '45,678', 'emoji' => '🎵', 'features' => ['42H Playback', 'ENx Technology', 'IWP Technology', 'ASAP Charge'], 'category' => 'Electronics'],
            ['id' => 10, 'title' => 'Samsung 55 inch Crystal 4K iSmart UHD TV (UA55CUE60AKLXL)', 'brand' => 'Samsung', 'price' => '37,990', 'mrp' => '64,900', 'discount' => '41', 'rating' => '4.3', 'reviews' => '7,890', 'emoji' => '📺', 'features' => ['55 inch Crystal 4K', 'Crystal Processor 4K', 'Motion Xcelerator', 'Smart TV'], 'category' => 'Electronics'],
            ['id' => 11, 'title' => 'Levi\'s Men Slim Fit Mid Rise Blue Jeans', 'brand' => 'Levi\'s', 'price' => '1,499', 'mrp' => '3,999', 'discount' => '62', 'rating' => '4.2', 'reviews' => '12,345', 'emoji' => '👖', 'features' => ['Slim Fit', 'Cotton Blend', 'Mid Rise', 'Machine Washable'], 'category' => 'Fashion'],
            ['id' => 12, 'title' => 'Apple iPhone 16 (Black, 128 GB)', 'brand' => 'Apple', 'price' => '69,900', 'mrp' => '79,900', 'discount' => '12', 'rating' => '4.6', 'reviews' => '9,012', 'emoji' => '📱', 'features' => ['A18 Chip', '6.1 inch Super Retina XDR', '48MP Camera System', 'All-Day Battery'], 'category' => 'Mobiles'],
        ];
    }

    public function index()
    {
        $products = $this->getSampleProducts();

        $brands = ['Samsung', 'Apple', 'Sony', 'Nike', 'LG', 'Canon', 'ASUS', 'OnePlus', 'Boat', 'Levi\'s'];

        return view('products.index', compact('products', 'brands'));
    }

    public function show($id)
    {
        $products = $this->getSampleProducts();
        $product = collect($products)->firstWhere('id', (int)$id);

        if (!$product) {
            $product = $products[0];
        }

        $specs = [
            'General' => [
                'Brand' => $product['brand'],
                'Model' => explode('(', $product['title'])[0],
                'Color' => 'Multiple Options',
                'Warranty' => '1 Year Manufacturer Warranty',
            ],
            'Dimensions' => [
                'Weight' => '220 g',
                'Width' => '79 mm',
                'Height' => '162.3 mm',
                'Depth' => '8.6 mm',
            ],
        ];

        $similarProducts = collect($products)->where('id', '!=', (int)$id)->take(6)->values()->all();

        return view('products.show', compact('product', 'specs', 'similarProducts'));
    }
}
