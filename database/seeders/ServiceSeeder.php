<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    Service::create([
        'title' => 'Refreshing Design',
        'description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.',
    ]);
    Service::create([
        'title' => 'Solid Bootstrap 5',
        'description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.',
    ]);
    Service::create([
        'title' => '100+ Components',
        'description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.',
    ]);
    Service::create([
        'title' => 'Speed Optimized',
        'description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.',
    ]);
    Service::create([
        'title' => 'Fully Customizable',
        'description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.',
    ]);
    Service::create([
        'title' => 'Regular Updates',
        'description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.',
    ]);
}
}
