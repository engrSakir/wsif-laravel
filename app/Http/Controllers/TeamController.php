<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('backend.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.team.create');
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
            'name' => 'required|string|unique:teams,name',
            'image' => 'nullable|image',
            'flag' => 'nullable|exists:flags,id',
            'linkedin' => 'nullable|string',
            'designation' => 'nullable|string|max:200',
            'description' => 'nullable|string|max:5000',
            'status' => 'nullable|boolean',
        ]);

        $team = new Team();
        $team->slug = Str::slug($request->name, '-');
        $team->name = $request->name;
        $team->flag_id = $request->flag;
        $team->linkedin = $request->linkedin;
        $team->designation = $request->designation;
        $team->description = $request->description;
        $team->active = $request->status ?? false;

        if($request->hasFile('image')){
            $image             = $request->file('image');
            $folder_path       = 'uploads/images/';
            if (!file_exists($folder_path)) {
                mkdir($folder_path, 0777, true);
            }
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            $team->image = $folder_path.$image_new_name;
        }
        try {
            $team->save();
            return back()->withToastSuccess('Successfully created');
        }catch(\Exception $exception){
            return back()->withErrors($exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('backend.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $request->validate([
           'name' => 'required|string|unique:teams,name,'.$team->id,
           'image' => 'nullable|image',
            'flag' => 'nullable|exists:flags,id',
           'linkedin' => 'nullable|string',
           'designation' => 'nullable|string|max:200',
           'description' => 'nullable|string|max:5000',
           'status' => 'nullable|boolean',
        ]);

        $team->slug = Str::slug($request->name, '-');
        $team->name = $request->name;
        $team->flag_id = $request->flag;
        $team->linkedin = $request->linkedin;
        $team->designation = $request->designation;
        $team->description = $request->description;
        $team->active = $request->status ?? false;

        if($request->hasFile('image')){
            $image             = $request->file('image');
            $folder_path       = 'uploads/images/';
            if (!file_exists($folder_path)) {
                mkdir($folder_path, 0777, true);
            }
            $image_new_name    = Str::random(20).'-'.now()->timestamp.'.'.$image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path.$image_new_name);
            $team->image = $folder_path.$image_new_name;
        }
        try {
            $team->save();
            return back()->withToastSuccess('Successfully updated');
        }catch(\Exception $exception){
            return back()->withErrors($exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        try {
            if ($team->image != null)
                File::delete(public_path($team->image)); //Old image delete
            $team->delete();
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
