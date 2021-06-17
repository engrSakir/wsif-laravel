<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $items = \App\Models\PageItem::where('active', true)->where('show_on_home', true)->orderBy('id', 'desc')->get();
        $partners = \App\Models\Partner::all();
        return view('frontend.home', compact('items', 'partners'));
    }

    public function page($slug)
    {
        $page = \App\Models\Page::where('slug', $slug)->where('active', true)->first();
        if (!$page) {
            return back();
        }
        $page_meta_keywords = $page->meta_keywords;
        $page_meta_description = $page->meta_description;
        $page_meta_image = $page->meta_image;
        return view('frontend.page', compact('page', 'page_meta_keywords', 'page_meta_description', 'page_meta_image'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function team()
    {
        $teams = \App\Models\Team::where('active', true)->orderBy('id', 'asc')->get();
        return view('frontend.team', compact('teams'));
    }

    public function event()
    {
        return view('frontend.event');
    }

    public function news()
    {
        return view('frontend.news');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}
