<?php

namespace Database\Seeders;

use App\Models\SocialSetting;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\Null_;

class SocialSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $settings = SocialSetting::updateOrCreate(
        //     ['facebook' =>  'https://www.facebook.com'],
        //     ['instagram' => 'https://www.instagram.com'],
        //     ['youtube' => 'https://www.youtube.com'],
        //     ['twitter' => 'https://twitter.com/'],
        //     ['linkedin' =>'https://www.linkedin.com/'],
        // );

        $settings = SocialSetting::updateOrCreate(
            ['facebook' =>  Null],
            ['instagram' => Null],
            ['youtube' => Null],
            ['twitter' => Null],
            ['linkedin' => Null],
        );
    }
}
