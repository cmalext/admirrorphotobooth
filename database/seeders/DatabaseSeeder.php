<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PackageSeeder::class,
            PhotoSeeder::class,
        ]);
        
        // Seed some sample feedback
        \App\Models\Feedback::create([
            'name' => 'Sarah Johnson',
            'email' => 'sarah@example.com',
            'rating' => 5,
            'comment' => 'Amazing photo booth experience! The quality was outstanding and our guests loved the instant prints. Highly recommend!',
            'is_approved' => true,
        ]);
        
        \App\Models\Feedback::create([
            'name' => 'Mike Chen',
            'email' => 'mike@example.com',
            'rating' => 5,
            'comment' => 'Professional service from start to finish. The setup was seamless and the photos turned out perfect for our corporate event.',
            'is_approved' => true,
        ]);
        
        \App\Models\Feedback::create([
            'name' => 'Emma Davis',
            'email' => 'emma@example.com',
            'rating' => 5,
            'comment' => 'The best photo booth we\'ve ever used! The props were hilarious and the social sharing feature was a huge hit with our guests.',
            'is_approved' => true,
        ]);
        
        \App\Models\Feedback::create([
            'name' => 'John Smith',
            'email' => 'john@example.com',
            'rating' => 4,
            'comment' => 'Great service and fun experience. The mirror technology is impressive and everyone had a blast taking photos.',
            'is_approved' => true,
        ]);
        
        \App\Models\Feedback::create([
            'name' => 'Lisa Wong',
            'email' => 'lisa@example.com',
            'rating' => 5,
            'comment' => 'Perfect for our wedding! The photos captured so many special moments and the quality exceeded our expectations.',
            'is_approved' => true,
        ]);
    }
}
