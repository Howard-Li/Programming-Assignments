<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Story;
use App\Tag;
use App\Location;

class StoryController extends Controller
{
    public function index()
    {
        $stories = Story::with('tags')->get();
        return view('stories', ['stories' => $stories]);
	
    }

    public function tags()
    {
        $tags = Tag::all();
        return view('tags', ['tags' => $tags]);

    }

    
    public function create()
    {
        $locations = Location::all();
        return view('story.create', ['locations' => $locations]);

    }

    public function store(Request $request)
    {
        DB::table('stories')->insert([
        'title' => $request->input('title'),
        'story' => $request->input('story'),
        'published' => $request->input('published'),
        'location_id' => $request->input('location_id'),
        ]);

    }


    public function api_stories()
    {
        $stories = Story::all();
        return response()->json($stories);
        
    }

}
