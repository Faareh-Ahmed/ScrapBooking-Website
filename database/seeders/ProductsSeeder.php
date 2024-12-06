<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Stickers',
                'description' => 'A variety of cute, high-quality stickers perfect for decorating your notebooks, laptops, and more.',
                'delivery_time' => '3 days',
                'image_path' => 'public/images/product1.jpg',
            ],
            [
                'name' => 'Summer Themed Sticker',
                'description' => 'Bright and colorful summer-themed stickers that capture the essence of sunshine, beaches, and outdoor fun.',
                'delivery_time' => '5 days',
                'image_path' => 'public/images/product2.jpg',
            ],
            [
                'name' => 'Journal Book Sticker',
                'description' => 'Creative journal stickers designed to inspire your daily journaling experience.',
                'delivery_time' => '4 days',
                'image_path' => 'public/images/product3.jpg',
            ],
            [
                'name' => 'Flower Stickers',
                'description' => 'Floral-themed stickers featuring a wide range of beautiful, hand-drawn flowers.',
                'delivery_time' => '2 days',
                'image_path' => 'public/images/product4.jpg',
            ],
            [
                'name' => 'Origami Sticker',
                'description' => 'Handcrafted origami stickers that capture the delicate and intricate art of paper folding.',
                'delivery_time' => '3 days',
                'image_path' => 'public/images/product5.jpg',
            ],
            [
                'name' => 'Scrap Books',
                'description' => 'Personalized scrapbooks designed to preserve your precious memories.',
                'delivery_time' => '6 days',
                'image_path' => 'public/assets/product7.jpg',
            ],
        ];

        foreach ($products as $product) {
            // Read image as binary
            $imageBinary = Storage::exists($product['image_path'])
                ? file_get_contents(Storage::path($product['image_path']))
                : null;

            DB::table('products')->insert([
                'name' => $product['name'],
                'description' => $product['description'],
                'delivery_time' => $product['delivery_time'],
                'image' => $imageBinary,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
