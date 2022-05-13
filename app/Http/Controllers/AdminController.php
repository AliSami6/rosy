<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Support\Facades\Auth;
use App\Models\banner;
use App\Models\Food;
use App\Models\Menu;
use App\Models\Team;
use App\Models\Test;
use App\Models\Booked;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function admin()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='1')
            {
                $TotalFood= Food::count();
                $TotalMenu=Menu::count();
                $TotalTeams=Team::count();
                $TotalBooked=Booked::count();
                return view('admin.home',[
                    'TotalFood'=>$TotalFood,
                    'TotalMenu'=>$TotalMenu,
                    'TotalTeams' =>$TotalTeams,
                    'TotalBooked'=>$TotalBooked,
                ]);
            }
            else
            {
                return redirect()->back();
            }
           
        }
        else
        {
            return redirect('login');
        }
       
    }
    public function index()
    {
        $TotalFood= Food::count();
        $TotalMenu=Menu::count();
        $TotalTeams=Team::count();
        $TotalBooked=Booked::count();
       
          return view('admin.home',[
            'TotalFood'=>$TotalFood,
            'TotalMenu'=>$TotalMenu,
            'TotalTeams' =>$TotalTeams,
            'TotalBooked'=>$TotalBooked,
           
        ]);
    }
    public function banner()
    {  
        $data = banner::all();
        return view('admin.banner',compact('data')); 
    }
    public function createbanner()
    {
        return view('admin.createbanner');
    }
    public function uploadbanner(Request $request)
    {
        $data = new banner;
        $image = $request->file;
        $imagename = time().'.'.$image->getClientoriginalExtension();
        $request->file->move('bannerimage',$imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->subtitle=$request->subtitle;
        $data->save();
        return redirect()->back()->with('message',' Banner Added Successfully');

    }
    public function updateviewbanner($id)
    {
        $data = banner::find($id);
        return view('admin.updateviewbanner',compact('data'));
    }
    public function updatebanner(Request $request,$id)
    {
        $data = banner::find($id);
        $data->title=$request->title;
        $data->subtitle=$request->subtitle;
        $image = $request->file;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('bannerimage',$imagename);
            $data->image=$imagename;
        }
        $data->save();
        return redirect()->back()->with('message',' Banner Updated Successfully');

    }
    public function deletebanner($id)
    {
        $data = banner::find($id);
        $data->delete();
        return redirect()->back()->with('message',' Banner Deleted Successfully');
    }
    public function showfood()
    {
        $data = Food::all();
        return view('admin.showfood',compact('data'));
       
    }
    public function showMenu()
    {
        $data = Menu::all();
        return view('admin.showMenu',compact('data'));
       
    }
    public function food()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='1')
            {
                return view('admin.food');
            }
            else
            {
                return redirect()->back();
            }
           
        }
        else
        {
            return redirect('login');
        }
        
    }
    public function menu()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='1')
            {
                return view('admin.menu');
            }
            else
            {
                return redirect()->back();
            }
           
        }
        else
        {
            return redirect('login');
        }
        
    }
    public function uploadfood(Request $request)
    {
        $data = new Food();
        $image = $request->file;
        $imagename = time().'.'.$image->getClientoriginalExtension();
        $request->file->move('Foodimage',$imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back()->with('message','Food Item Added Successfully');

    }
    public function add_menu(Request $request)
    {
        $data = new Menu();
       
        $data->title=$request->title;
        $data->price=$request->price;
        $data->subtitle=$request->subtitle;
        $data->save();
        return redirect()->back()->with('message',' Menu Item Added Successfully');

    }
    public function foodview($id)
    {
        $data = Food::find($id);
        return view('admin.foodview',compact('data'));
    }
    public function menuview($id)
    {
        $data = Menu::find($id);
        return view('admin.menuview',compact('data'));
    }
    public function updatefood(Request $request,$id)
    {
        $data = Food::find($id);
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $image = $request->file;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('foodimage',$imagename);
            $data->image=$imagename;
        }
        $data->save();
        return redirect()->back()->with('message',' Food Item Updated Successfully');

    }
    public function updatemenu(Request $request,$id)
    {
        $data = Menu::find($id);
        $data->title=$request->title;
        $data->price=$request->price;
        $data->subtitle=$request->subtitle;
       
        $data->save();
        return redirect()->back()->with('message',' Menu Item Updated Successfully');

    }
    public function deletefood($id)
    {
        $data = Food::find($id);
        $data->delete();
        return redirect()->back()->with('message',' Food item Deleted Successfully');
    }
    public function deletemenu($id)
    {
        $data = Menu::find($id);
        $data->delete();
        return redirect()->back()->with('message',' Menu item Deleted Successfully');
    }
    public function addteam()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='1')
            {
                return view('admin.team');
            }
            else
            {
                return redirect()->back();
            }
           
        }
        else
        {
            return redirect('login');
        }
    }
    public function addtest()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='1')
            {
                return view('admin.test');
            }
            else
            {
                return redirect()->back();
            }
           
        }
        else
        {
            return redirect('login');
        }
    }
    public function uploadteam(Request $request)
    {
        $data = new Team();
        $image = $request->file;
        $imagename = time().'.'.$image->getClientoriginalExtension();
        $request->file->move('teamimage',$imagename);
        $data->image=$imagename;
        $data->person_name=$request->person_name;
        
        $data->details=$request->details;
        $data->save();
        return redirect()->back()->with('message','Team Added Successfully');
    }
    public function uploadtest(Request $request)
    {
        $data = new Test();
        $image = $request->file;
        $imagename = time().'.'.$image->getClientoriginalExtension();
        $request->file->move('testimage',$imagename);
        $data->image=$imagename;
        $data->person_name=$request->person_name;
        $data->person_title=$request->person_title;
        $data->details=$request->details;
        $data->save();
        return redirect()->back()->with('message',' Testimonials Added Successfully');
    }
    public function showteam()
    {
        $data = Team::all();
        return view('admin.showteam',compact('data'));
    }
    public function showtest()
    {
        $data = Test::all();
        return view('admin.showtest',compact('data'));
    }
    public function deleteteam($id)
    {
        $data = Team::find($id);
        $data->delete();
        return redirect()->back()->with('message','Team Deleted Successfully');
    }
    public function deletetest($id)
    {
        $data = Test::find($id);
        $data->delete();
        return redirect()->back()->with('message','Testimonials Deleted Successfully');
    }
    public function updateteam($id)
    {
        $data = Team::find($id);
        return view('admin.updateteam',compact('data'));
    }
    public function updatetest($id)
    {
        $data = Test::find($id);
        return view('admin.updatetest',compact('data'));
    }
    public function updateTeamData(Request $request,$id)
    {
        $data = Team::find($id);
        $data->person_name=$request->person_name;
       
        $data->details=$request->details;
        $image = $request->file;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('teamimage',$imagename);
            $data->image=$imagename;
        }
        $data->save();
        return redirect()->back()->with('message','Team Data Updated Successfully');

    }
    public function updateTestData(Request $request,$id)
    {
        $data = Test::find($id);
        $data->person_name=$request->person_name;
        $data->person_title=$request->person_title;
        $data->details=$request->details;
        $image = $request->file;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('testimage',$imagename);
            $data->image=$imagename;
        }
        $data->save();
        return redirect()->back()->with('message',' Testimonials Data Updated Successfully');

    }
    public function showtable()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
                $data = Booked::all();     
                return view('admin.showtable',compact('data'));
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
       
       
    }
    public function approved($id)
    {
        $data = Booked::find($id);
        $data->status='approved';
        $data->save();
        return redirect()->back(); 
    }
    public function canceled($id)
    {
        $data = Booked::find($id);
        $data->status='canceled';
        $data->save();
        return redirect()->back(); 
    }    

}
