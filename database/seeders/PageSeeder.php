<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page = new Page();
        $page->active       =   true;
        $page->name         =   'Initiatives & Platforms';
        $page->slug         =   Str::slug('Initiatives & Platforms', '-');
        $page->title        =   'Initiatives & Platforms';
        $page->meta_image       =   null;
        $page->meta_description =   'Initiatives & Platforms';
        $page->meta_keywords    =   null;
        $page->save();
    }
}
