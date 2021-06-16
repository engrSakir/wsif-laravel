<?php

namespace App\Http\Controllers;

use App\Models\PageItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class PageItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PageItem  $pageItem
     * @return \Illuminate\Http\Response
     */
    public function show(PageItem $pageItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PageItem  $pageItem
     * @return \Illuminate\Http\Response
     */
    public function edit(PageItem $pageItem)
    {
        return view('backend.page-item.edit', compact('pageItem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PageItem  $pageItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PageItem $pageItem)
    {
        $request->validate([
            'title' => 'required|string',
            'image' => 'nullable|image',
            'description' => 'nullable|string|max:5000',
            'status' => 'nullable|boolean',
            'home_page_visibility' => 'nullable|boolean',
        ]);

        $pageItem->title = $request->title;
        $pageItem->description = $request->description;
        $pageItem->active = $request->status ?? false;
        $pageItem->show_on_home = $request->home_page_visibility ?? false;

        if($request->hasFile('image')){
            $image             = $request->file('image');
            $folder_path       = 'uploads/images/';
            if (!file_exists($folder_path)) {
                mkdir($folder_path, 0777, true);
            }
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            $pageItem->image = $folder_path.$image_new_name;
        }
        try {
            $pageItem->save();
            return back()->withToastSuccess('Successfully updated');
        }catch(\Exception $exception){
            return back()->withErrors($exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PageItem  $pageItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageItem $pageItem)
    {
        try {
            if ($pageItem->image != null)
                File::delete(public_path($pageItem->image)); //Old image delete
            $pageItem->delete();
            return response()->json([
                'type' => 'success',
                'message' => ''
            ]);
        }catch (\Exception$exception){
            return response()->json([
                'type' => 'error',
                'message' => ''
            ]);
        }
    }
}
