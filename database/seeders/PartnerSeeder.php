<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partner = new Partner();
        $partner->image = 'images/partners/1.png';
        $partner->save();

        $partner = new Partner();
        $partner->image = 'images/partners/2.png';
        $partner->save();

        $partner = new Partner();
        $partner->image = 'images/partners/3.png';
        $partner->save();

        $partner = new Partner();
        $partner->image = 'images/partners/4.png';
        $partner->save();

        $partner = new Partner();
        $partner->image = 'images/partners/5.png';
        $partner->save();
    }
}
