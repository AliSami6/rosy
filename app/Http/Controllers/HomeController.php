<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\About;
use App\Models\Food;
use App\Models\Menu;
use App\Models\Team;
use App\Models\Test;
use App\Models\User;
use App\Models\Booked;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0'){
                $banners = banner::all();
                $foods   = Food::all();
                $menus   = Menu::all();
                $teams   = Team::all();
                $tests   = Test::all();
                return view('user.home',compact('banners','foods','menus','teams','tests'));
                
            }
            else
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
        }
        else
        {
            return redirect()->back();
        }
    }
    public function index()
    {
        if(Auth::id()){
            return redirect('home');
        }
        else{
            $banners = banner::all();
            $foods   = Food::all();
            $menus   = Menu::all();
            $teams   = Team::all();
            $tests   = Test::all();
            return view('user.home',compact('banners','foods','menus','teams','tests'));
        }
    }
    public function tablebooked(Request $request)
    {
        $data = new Booked();
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->date = $request->date;  
        $data->seats = $request->seats;   
        $data->status = 'In progress';
        if(Auth::id()){
            $data->user_id = Auth::user()->id;
        }
       
        $data->save();
        return redirect()->back()->with('message',' Table Booked Request Successful'.'We will contact you soon');

    }
   
}
