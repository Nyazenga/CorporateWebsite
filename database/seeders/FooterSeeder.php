<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Footer;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    Footer::create([
        'title' => 'We love to make perfect solutions for your business',
        'description' => 'Why I say old chap that is, spiffing off his nut cor blimey guvnords geeza bloke knees up bobby, sloshed arse William cack Richard. Bloke fanny around chesed of bum bag old lost the pilot say there spiffing off his nut.',
    ]);
}
}
