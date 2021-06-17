<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StaticOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        set_static_option('meta_author', null);
        set_static_option('meta_keywords', null);
        set_static_option('meta_title', null);
        set_static_option('meta_description', null);
        set_static_option('meta_image', null);

        set_static_option('home_banner_title','World Social Innovation Forum');
        set_static_option('home_banner_description','World Social Innovation Forum (WSIF) is a global platform of social changemakers, social innovators, impact investors, policymakers and thought leaders in government, non-profit, and corporate sectors. It is headquartered in Silicon Valley and it aims to improve the lives of people and build stronger, healthier communities across the globe. Our approach provides a unique combination of educating, engaging, and connecting leaders in areas like impact investment, digital women entrepreneurship, digital healthcare, digital education, and smart city/village initiatives.');

        set_static_option('about_description','World Social Innovation Forum (WSIF) is a global platform of social changemakers, social innovators, impact investors, policymakers and thought leaders in government, non-profit, and corporate sectors. It is headquartered in Silicon Valley and it aims to improve the lives of people and build stronger, healthier communities across the globe. Our approach provides a unique combination of educating, engaging, and connecting leaders in areas like impact investment, digital women entrepreneurship, digital healthcare, digital education, and smart city/village initiatives.');

        set_static_option('facebook', null);
        set_static_option('instagram', null);
        set_static_option('twitter', null);
        set_static_option('linkedin', null);

        set_static_option('email', 'info@wsif.world');
        set_static_option('office_name_one', 'Head Quarter');
        set_static_option('office_address_one', '2680 N. 1st St., Suite 250 San Jose, California 95134, USA');
        set_static_option('office_name_two', 'Singapore Regional Office');
        set_static_option('office_address_two', 'Blk 71, Ayer Rajah Crescent, #03-25, Singapore 139951');
        set_static_option('office_name_three', 'UAE Regional Office');
        set_static_option('office_address_three', '14th Floor, Office 104 Al Khatem Tower, ADGM Square Al Maryah Island, Abu Dhabi, UAE');

        set_static_option('footer_note','The World Social Innovation Forum brings together social changemakers, social innovators, impact investors, leaders in the government, non-profit, and corporate sector, policymakers and thought leaders from various regions of the world.');
        set_static_option('footer_credit','All right reserved by WSIF');
    }
}
