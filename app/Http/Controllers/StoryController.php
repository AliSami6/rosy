<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $stories = Story::all();
        return view('backend.pages.story.index',compact('stories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.story.create');
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
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'storyone' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:4048',
            'description' => 'required|string', 
        ]);
       
        $stories = new Story;
        $stories->title = $request->input('title');
        $stories->subtitle = $request->input('subtitle');
        $stories->description = $request->input('description');
            
        if($request->hasfile('storyone'))
        {
            $file = $request->file('storyone');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/story/', $filename);
            $stories->storyone = $filename;
        }
        $stories->save();
        return redirect()->route('admin.storyIndex')->with('message','New Story Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function show(Story $story)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stories = Story::find($id);
        return view('backend.pages.story.edit', compact('stories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'storyone' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:4048',
            'description' => 'required|string', 
        ]);
        $stories = Story::find($id);

        $stories->title = $request->input('title');
        $stories->subtitle = $request->input('subtitle');
        $stories->description = $request->input('description');

        $image = $request->file;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('uploads/story/',$imagename);
            $stories->image=$imagename;
        }
        $stories->save();
      
        return redirect()->route('admin.storyIndex')->with('message',' Story Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $story = Story::find($id);
        @unlink(public_path($story->storyone));
        $story->delete();

        return redirect()->route('admin.storyIndex')->with('message',' Story Data Deleted Successfully');
    }
}