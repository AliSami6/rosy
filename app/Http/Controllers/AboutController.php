<?php

namespace App\Http\Controllers;
use App\Models\About;
use Illuminate\Http\Request;

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
        return view('backend.pages.about.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.about.create');
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
        
            'opentime'=>'required|string',
            'closetime'=>'required|string',
            'menuone' => 'required|image|mimes:jpg,png,jpeg|max:4048'
          
        ]);
        $abouts = new About;
        $abouts->closetime = $request->input('closetime');
        $abouts->opentime = $request->input('opentime');
      
        if($request->hasfile('menuone'))
        {
            $file = $request->file('menuone');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/abouts/', $filename);
            $abouts->menuone = $filename;
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
        return view('backend.pages.about.edit', compact('abouts'));
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
           
            'opentime'=>'required|string',
            'closetime'=>'required|string',
            'menuone' => 'required|image|mimes:jpg,png,jpeg|max:4048'
            
        ]);
        $abouts = About::find($id);
        $abouts->opentime = $request->opentime;
        $abouts->closetime =$request->closetime;

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