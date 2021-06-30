<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\News;
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

    public function teamDetails($slug)
    {
        $team = \App\Models\Team::where('active', true)->where('slug', $slug)->first();
        if(!$team){
            return back()->withErrors('Not found');
        }
        $page_meta_description = $team->name . ' '. $team->designation;
        $page_meta_image = $team->image;
        return view('frontend.team-details', compact('team', 'page_meta_description', 'page_meta_image'));
    }

    public function event()
    {
        return view('frontend.event');
    }

    public function news()
    {
        $all_news = News::where('published', true)->orderBy('id', 'desc')->get();
        return view('frontend.news', compact('all_news'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function storeContact(Request $request)
    {
        $request->validate([
           'name' => 'required|string',
           'email' => 'required|email',
           'subject' => 'nullable|string',
           'comments' => 'required|string',
        ]);

        $contact_message =new ContactMessage();
        $contact_message->name = $request->name;
        $contact_message->email = $request->email;
        $contact_message->subject = $request->subject;
        $contact_message->comments = $request->comments;
        try {
            $contact_message->save();
            return  back()->withSuccess('Thank you for message us.');
        }catch (\Exception $exception){
            if(config('app.debug') == true){
                return  back()->withErrors($exception->getMessage());
            }else{
                return  back()->withErrors('Something went wrong.');
            }
        }

    }

}
