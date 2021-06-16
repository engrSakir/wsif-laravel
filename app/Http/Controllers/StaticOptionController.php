<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticOptionController extends Controller
{
    public function getHomeInfo(){
        return view('backend.static-option.home');
    }

    public function updateHomeInfo(Request $request){
        $request->validate([
           'title' => 'required|string',
           'description' => 'required|string',
        ]);
        try {
           update_static_option('home_banner_title', $request->title);
           update_static_option('home_banner_description', $request->description);
            return back()->withToastSuccess('Successfully home info updated');
        }catch(\Exception $exception){
            return back()->withErrors($exception->getMessage());
        }
    }
}
