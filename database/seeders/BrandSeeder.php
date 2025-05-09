<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $brands = [
            
            [
                'brand_name' => 'cafet1',
                'brand_image' => 'https://example.com/images/blue-bottle.jpg',
                'rating' => 5,
                'country_code' => 'US'
            ],

            [
                'brand_name' => 'cafet2',
                'brand_image' => 'https://example.com/images/stumptown.jpg',
                'rating' => 4,
                'country_code' => 'US'
            ],
            
            [
                'brand_name' => 'cafet3',
                'brand_image' => 'https://example.com/images/santeustachio.jpg',
                'rating' => 5,
                'country_code' => 'IT'
            ],
            
            [
                'brand_name' => 'cafet4',
                'brand_image' => 'https://example.com/images/patricia.jpg',
                'rating' => 5,
                'country_code' => 'AU'
            ],
            
            [
                'brand_name' => 'cafet5',
                'brand_image' => 'https://example.com/images/lambre.jpg',
                'rating' => 5,
                'country_code' => 'JP'
            ],
            
            [
                'brand_name' => 'cafet6',
                'brand_image' => 'https://example.com/images/monmouth.jpg',
                'rating' => 5,
                'country_code' => 'GB'
            ],
            
            [
                'brand_name' => 'Café74',
                'brand_image' => 'https://example.com/images/telescope.jpg',
                'rating' => 4,
                'country_code' => 'FR'
            ],
            
            [
                'brand_name' => 'arboe',
                'brand_image' => 'https://example.com/images/wendelboe.jpg',
                'rating' => 5,
                'country_code' => 'NO'
            ],
            
            [
                'brand_name' => 'aswCafé',
                'brand_image' => 'https://example.com/images/pergamino.jpg',
                'rating' => 4,
                'country_code' => 'CO'
            ],
            
            [
                'brand_name' => 'asop',
                'brand_image' => 'https://example.com/images/workshop.jpg',
                'rating' => 4,
                'country_code' => 'VN'
            ],
        ];

        foreach ($brands as $brandData) {
            Brand::create($brandData);
        }
    }
}
