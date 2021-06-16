<?php

use Illuminate\Support\Facades\Session;

if (!function_exists('random_code')){

    function pages(){
        return \App\Models\Page::where('active', true)->select('name', 'slug')->get();
    }
}
