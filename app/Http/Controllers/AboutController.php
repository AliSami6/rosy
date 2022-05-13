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
        $this->validate($request, [
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'openingday'=>'required|string',
            'opentime'=>'required|string',
            'workingimage' => 'required|image',
            'greatimage' => 'required|image',
            'description' => 'required|string', 
        ]);
        $abouts = new About;
        $abouts->title = $request->title;
        $abouts->subtitle = $request->subtitle;
        $abouts->description = $request->description;
        $abouts->openingday = $request->openingday;
        $abouts->opentime = $request->opentime;

        $workingfile = $request->file('workingimage');
        Storage::putFile('public/img/', $workingfile);
        $abouts->workingimage = "storage/img/".$workingfile->hashName();

        $greatfile = $request->file('greatimage');
        Storage::putFile('public/img/', $greatfile);
        $abouts->greatimage = "storage/img/".$greatfile->hashName();
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
        $about = About::find($id);
        return view('admin.aboutedit', compact('about'));
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
        $this->validate($request, [
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'openingday'=>'required|string',
            'opentime'=>'required|string',
            'workingimage' => 'required|image',
            'greatimage' => 'required|image',
            'description' => 'required|string', 
        ]);
        $abouts = About::find($id);
        $abouts->title = $request->title;
        $abouts->subtitle = $request->subtitle;
        $abouts->description = $request->description;
        $abouts->openingday = $request->openingday;
        $abouts->opentime = $request->opentime;

        if($request->file('workingimage')){
            $workingfile = $request->file('workingimage');
            Storage::putFile('public/img/', $workingfile);
            $abouts->workingimage = "storage/img/".$workingfile->hashName();
        }
        if($request->file('greatimage')){
            $greatfile = $request->file('greatimage');
            Storage::putFile('public/img/', $greatfile);
            $abouts->greatimage = "storage/img/".$greatfile->hashName();
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
        @unlink(public_path($about->greatimage));
        $about->delete();

        return redirect()->route('admin.aboutlist')->with('message',' About Deleted Successfully');
    }
}
