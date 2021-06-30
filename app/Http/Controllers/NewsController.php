<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_news = News::orderBy('id', 'desc')->get();
        return view('backend.news.index', compact('all_news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' =>  'required|image',
            'title' =>  'required|string|unique:news,title',
            'description'   =>  'nullable|string|max:20000',
            'status'    =>  'nullable|boolean',
        ]);

        $news = new News();
        $news->title    =   $request->title;
        $news->slug    =   Str::slug($request->title, '-');
        $news->description  =   $request->description;
        $news->published   =   $request->status ?? false;
        if($request->hasFile('image')){
            $image             = $request->file('image');
            $folder_path       = 'uploads/images/';
            if (!file_exists($folder_path)) {
                mkdir($folder_path, 0777, true);
            }
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            $news->image = $folder_path.$image_new_name;
        }

        try {
            $news->save();
            return back()->withSuccess('Successfully news saved');
        }catch(\Exception $exception){
            return back()->withErrors($exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('backend.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'image' =>  'required|image',
            'title' =>  'required|string|unique:news,title',
            'description'   =>  'nullable|string|max:20000',
            'status'    =>  'nullable|boolean',
        ]);

        $news = new News();
        $news->title    =   $request->title;
        $news->slug    =   Str::slug($request->title, '-');
        $news->description  =   $request->description;
        $news->published   =   $request->status ?? false;
        if($request->hasFile('image')){
            $image             = $request->file('image');
            $folder_path       = 'uploads/images/';
            if (!file_exists($folder_path)) {
                mkdir($folder_path, 0777, true);
            }
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            $news->image = $folder_path.$image_new_name;
        }

        try {
            $news->save();
            return back()->withSuccess('Successfully news saved');
        }catch(\Exception $exception){
            return back()->withErrors($exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
