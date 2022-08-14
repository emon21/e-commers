<?php

namespace Database\Seeders;

use App\Models\WebsiteSetting;
use Illuminate\Database\Seeder;

class WebsiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $website_setting = [

            'site_logo' => 'site_logo',
            'site_fav_icon' => 'site_fav_icon',
            'site_name' => 'site_name',
            'site_address' => 'site_address',
            'site_phone_no' => 'site_phone_no',
            'site_mail' => 'site_mail',
            
        ];
        WebsiteSetting::insert($website_setting);
    }
}
