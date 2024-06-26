<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Pricing;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    Pricing::create([
        'plan_title' => 'Starter',
        'plan_description' => 'Lorem Ipsum is simply dummy text of the printing and industry',
        'plan_price' => 0,
        'plan_feature_1' => 'Cras justo odio',
        'plan_feature_2' => 'Dapibus ac facilisis in',
        'plan_feature_3' => 'Morbi leo risus',
        'plan_feature_4' => 'Excepteur sint occaecat velit',
    ]);
    Pricing::create([
        'plan_title' => 'Exclusive',
        'plan_description' => 'Lorem Ipsum is simply dummy text of the printing and industry',
        'plan_price' => 99,
        'plan_feature_1' => 'Cras justo odio',
        'plan_feature_2' => 'Dapibus ac facilisis in',
        'plan_feature_3' => 'Morbi leo risus',
        'plan_feature_4' => 'Excepteur sint occaecat velit',
    ]);
    Pricing::create([
        'plan_title' => 'Premium',
        'plan_description' => 'Lorem Ipsum is simply dummy text of the printing and industry',
        'plan_price' => 150,
        'plan_feature_1' => 'Cras justo odio',
        'plan_feature_2' => 'Dapibus ac facilisis in',
        'plan_feature_3' => 'Morbi leo risus',
        'plan_feature_4' => 'Excepteur sint occaecat velit',
    ]);
}
}
