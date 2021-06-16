<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

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

    public function getAboutInfo(){
        return view('backend.static-option.about');
    }

    public function updateAboutInfo(Request $request){
        $request->validate([
           'description' => 'required|string',
        ]);
        try {
           update_static_option('about_description', $request->description);
            return back()->withToastSuccess('Successfully about info updated');
        }catch(\Exception $exception){
            return back()->withErrors($exception->getMessage());
        }
    }

    public function getBasicInfo(){
        return view('backend.static-option.basic');
    }

    public function updateBasicInfo(Request $request){
        $request->validate([
           'meta_author' => 'nullable|string',
           'meta_keywords' => 'nullable|string',
           'meta_title' => 'nullable|string',
           'meta_description' => 'nullable|string',
           'meta_image' => 'nullable|image',
           'facebook' => 'nullable|string',
           'instagram' => 'nullable|string',
           'twitter' => 'nullable|string',
           'linkedin' => 'nullable|string',
           'email' => 'nullable|string',
           'office_name_one' => 'nullable|string',
           'office_address_one' => 'nullable|string',
           'office_name_two' => 'nullable|string',
           'office_address_two' => 'nullable|string',
           'office_name_three' => 'nullable|string',
           'office_address_three' => 'nullable|string',
           'footer_note' => 'nullable|string',
           'footer_credit' => 'nullable|string',
        ]);
        try {
            if($request->hasFile('meta_image')){
                if (get_static_option('meta_image') != null)
                    File::delete(public_path(get_static_option('meta_image'))); //Old image delete

                $image             = $request->file('meta_image');
                $folder_path       = 'uploads/images/';
                if (!file_exists($folder_path)) {
                    mkdir($folder_path, 0777, true);
                }
                $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
                //resize and save to server
                Image::make($image->getRealPath())->save($folder_path.$image_new_name);
                update_static_option('meta_image', $folder_path.$image_new_name);
            }

           update_static_option('meta_author', $request->meta_author);
           update_static_option('meta_keywords', $request->meta_keywords);
           update_static_option('meta_title', $request->meta_title);
           update_static_option('meta_description', $request->meta_description);

           update_static_option('facebook', $request->facebook);
           update_static_option('instagram', $request->instagram);
           update_static_option('twitter', $request->twitter);
           update_static_option('linkedin', $request->linkedin);
           update_static_option('email', $request->email);
           update_static_option('office_name_one', $request->office_name_one);
           update_static_option('office_address_one', $request->office_address_one);
           update_static_option('office_name_two', $request->office_name_two);
           update_static_option('office_address_two', $request->office_address_two);
           update_static_option('office_name_three', $request->office_name_three);
           update_static_option('office_address_three', $request->office_address_three);
           update_static_option('footer_note', $request->footer_note);
           update_static_option('footer_credit', $request->footer_credit);
            return back()->withToastSuccess('Successfully home info updated');
        }catch(\Exception $exception){
            return back()->withErrors($exception->getMessage());
        }
    }
}
