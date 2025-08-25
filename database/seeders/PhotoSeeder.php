<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Photo;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $photos = [
            [
                'title' => 'Beautiful Wedding Ceremony',
                'description' => 'A magical wedding ceremony captured with our mirror photo booth. Every glance, every smile, every moment of pure joy captured forever.',
                'event_type' => 'Wedding',
                'image_path' => 'sample/wedding1.jpg',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Corporate Team Building',
                'description' => 'Strengthening teams through fun and collaboration. Our photo booth captures the energy of corporate events.',
                'event_type' => 'Corporate Event',
                'image_path' => 'sample/corporate1.jpg',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Birthday Celebration',
                'description' => 'Laughter, games, and memories made. Capture the joy of birthday parties with our interactive photo booth.',
                'event_type' => 'Birthday Party',
                'image_path' => 'sample/birthday1.jpg',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Graduation Achievement',
                'description' => 'Celebrating academic achievements and new beginnings. Capture the pride and joy of graduation.',
                'event_type' => 'Graduation',
                'image_path' => 'sample/graduation1.jpg',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Special Event Celebration',
                'description' => 'Every special event deserves to be remembered. Our mirror photo booth captures unique moments.',
                'event_type' => 'Other',
                'image_path' => 'sample/other1.jpg',
                'is_active' => true,
                'sort_order' => 1,
            ],
        ];

        foreach ($photos as $photo) {
            Photo::create($photo);
        }
    }
}
