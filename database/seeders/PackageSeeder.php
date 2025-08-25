<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packages = [
            [
                'name' => 'Basic Package',
                'description' => 'Perfect for small events and intimate gatherings',
                'price' => 299.00,
                'duration' => '2 hours',
                'features' => [
                    '2 hours of photo booth time',
                    'Unlimited photos',
                    'Basic props included',
                    'Digital copies',
                    'Standard backdrop'
                ],
                'is_active' => true,
                'sort_order' => 1
            ],
            [
                'name' => 'Premium Package',
                'description' => 'Our most popular choice for medium-sized events',
                'price' => 499.00,
                'duration' => '4 hours',
                'features' => [
                    '4 hours of photo booth time',
                    'Unlimited photos & prints',
                    'Premium props & backdrops',
                    'Custom photo design',
                    'Social media sharing',
                    'Professional setup'
                ],
                'is_active' => true,
                'sort_order' => 2
            ],
            [
                'name' => 'Luxury Package',
                'description' => 'Ultimate experience for large events and special occasions',
                'price' => 799.00,
                'duration' => '6 hours',
                'features' => [
                    '6 hours of photo booth time',
                    'Everything in Premium',
                    'Professional attendant',
                    'Custom backdrop design',
                    'Photo album included',
                    'Priority booking',
                    'Extended support'
                ],
                'is_active' => true,
                'sort_order' => 3
            ]
        ];

        foreach ($packages as $packageData) {
            Package::create($packageData);
        }
    }
}
