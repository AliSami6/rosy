<?php

namespace App\Http\Controllers;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $abouts = About::all();
        return view('admin.aboutlist',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.aboutcreate');
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
            'openingday'=>'required|string',
            'opentime'=>'required|string',
            'workingimage' => 'required|image|mimes:jpg,png,jpeg|max:4048',
        ]);
        $abouts = new About;
        $abouts->openingday = $request->input('openingday');
        $abouts->opentime = $request->input('opentime');
      
        if($request->hasfile('workingimage'))
        {
            $file = $request->file('workingimage');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/abouts/', $filename);
            $abouts->workingimage = $filename;
        }
        $abouts->save();
        return redirect()->route('admin.aboutcreate')->with('message','New About Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $abouts = About::find($id);
        return view('admin.aboutedit', compact('abouts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([    
            'openingday'=>'required|string',
            'opentime'=>'required|string',
            'workingimage' => 'required|image|mimes:jpg,png,jpeg|max:4048',
        ]);
        $abouts = About::find($id);

        $abouts->openingday = $request->input('openingday');
        $abouts->opentime = $request->input('opentime');

        $image = $request->file;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('uploads/abouts/',$imagename);
            $abouts->image=$imagename;
        }
        $abouts->save();
      
        return redirect()->route('admin.aboutlist')->with('message',' About Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::find($id);
        @unlink(public_path($about->workingimage));
        $about->delete();

        return redirect()->route('admin.aboutlist')->with('message',' About Data Deleted Successfully');
    }
}
