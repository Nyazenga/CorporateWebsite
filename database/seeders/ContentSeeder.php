<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Content;


class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Home Section
        Content::create([
            'section' => 'home_title',
            'content' => 'Corporate Website',
        ]);
        Content::create([
            'section' => 'home_description',
            'content' => 'We are a digital agency that helps brands to achieve their business outcomes. We see technology as a tool to create amazing things.',
        ]);
        Content::create([
            'section' => 'home_picture',
            'content' => '',
        ]);

        // Our Story Section
        Content::create([
            'section' => 'our_story_heading_title',
            'content' => 'Our Story',
        ]);
        Content::create([
            'section' => 'our_story_heading_description',
            'content' => 'Our team comes with the experience and knowledge.',
        ]);

        Content::create([
            'section' => 'our_story_picture',
            'content' => '',
        ]);

        Content::create([
            'section' => 'our_story_1_title',
            'content' => 'Who We Are',
        ]);
        Content::create([
            'section' => 'our_story_1_description',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English. There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour.',
        ]);

        Content::create([
            'section' => 'our_story_2_title',
            'content' => 'Our Vision',
        ]);
        Content::create([
            'section' => 'our_story_2_description',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English. There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour.',
        ]);

        Content::create([
            'section' => 'our_story_3_title',
            'content' => 'Our History',
        ]);
        Content::create([
            'section' => 'our_story_3_description',
            'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English. There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour.',
        ]);

        // Services Section
        Content::create([
            'section' => 'service_1_title',
            'content' => 'Refreshing Design',
        ]);
        Content::create([
            'section' => 'service_1_description',
            'content' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.',
        ]);
        Content::create([
            'section' => 'service_2_title',
            'content' => 'Solid Bootstrap 5',
        ]);
        Content::create([
            'section' => 'service_2_description',
            'content' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.',
        ]);
        Content::create([
            'section' => 'service_3_title',
            'content' => '100+ Components',
        ]);
        Content::create([
            'section' => 'service_3_description',
            'content' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.',
        ]);

        Content::create([
            'section' => 'service_4_title',
            'content' => 'Speed Optimized',
        ]);
        Content::create([
            'section' => 'service_4_description',
            'content' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.',
        ]);
        Content::create([
            'section' => 'service_5_title',
            'content' => 'Fully Customizable',
        ]);
        Content::create([
            'section' => 'service_5_description',
            'content' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.',
        ]);
        Content::create([
            'section' => 'service_6_title',
            'content' => 'Regular Updates',
        ]);
        Content::create([
            'section' => 'service_6_description',
            'content' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna.',
        ]);

        // Pricing Section
        Content::create([
            'section' => 'pricing_1_heading_title',
            'content' => 'Starter',
        ]);
        Content::create([
            'section' => 'pricing_1_heading_description',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and industry',
        ]);

        Content::create([
            'section' => 'pricing_1_status',
            'content' => 'inactive',
        ]);

        Content::create([
            'section' => 'pricing_1_price',
            'content' => '0',
        ]);
        Content::create([
            'section' => 'pricing_1_features',
            'content' => 'Cras justo odio, Dapibus ac facilisis in, Morbi leo risus, Excepteur sint occaecat velit',
        ]);







        Content::create([
            'section' => 'pricing_2_heading_title',
            'content' => 'Exclusive',
        ]);
        Content::create([
            'section' => 'pricing_2_heading_description',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and industry',
        ]);

        Content::create([
            'section' => 'pricing_2_status',
            'content' => 'active',
        ]);

        Content::create([
            'section' => 'pricing_2_price',
            'content' => '99',
        ]);
        Content::create([
            'section' => 'pricing_2_features',
            'content' => 'Cras justo odio, Dapibus ac facilisis in, Morbi leo risus, Excepteur sint occaecat velit',
        ]);







        Content::create([
            'section' => 'pricing_3_heading_title',
            'content' => 'Premium',
        ]);
        Content::create([
            'section' => 'pricing_3_heading_description',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and industry',
        ]);

        Content::create([
            'section' => 'pricing_3_status',
            'content' => 'inactive',
        ]);

        Content::create([
            'section' => 'pricing_3_price',
            'content' => '150',
        ]);
        Content::create([
            'section' => 'pricing_3_features',
            'content' => 'Cras justo odio, Dapibus ac facilisis in, Morbi leo risus, Excepteur sint occaecat velit',
        ]);

        // Footer Section
        Content::create([
            'section' => 'footer_title',
            'content' => 'We love to make perfect solutions for your business',
        ]);
        Content::create([
            'section' => 'footer_description',
            'content' => 'Why I say old chap that is, spiffing off his nut cor blimey guvnords geeza bloke knees up bobby, sloshed arse William cack Richard. Bloke fanny around chesed of bum bag old lost the pilot say there spiffing off his nut.',
        ]);
    }
}
