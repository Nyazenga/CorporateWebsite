<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        About::create([
            'heading_title' => 'Our Story',
            'heading_description' => 'Our team comes with the experience and knowledge.',
            'who_we_are' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English. There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour.',
            'our_vision' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English. There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour.',
            'our_history' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English. There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour.',
        ]);
    }
}
