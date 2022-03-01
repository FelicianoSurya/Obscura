<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $galleries = [
            [
                'name' => 'Kevin',
                'title' => 'Pemandangan Alam',
                'description' => 'If you\'re over eighteen, adult gymnastics provides...',
                'views' => 0,
                'image' => '1.jpg',
            ],
        ];

        foreach($galleries as $gallery => $value){
            Gallery::create($value);
        }
    }
}
