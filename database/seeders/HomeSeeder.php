<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Home;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    Home::create([
        'title' => 'Corporate Website',
        'description' => 'We are a digital agency that helps brands to achieve their business outcomes. We see technology as a tool to create amazing things.',
        'picture' => '',
    ]);
}
}
