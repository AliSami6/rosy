<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/admin',[AdminController::class,'admin']);
Route::get('/admin',[AdminController::class,'index'])->name('admin.home');
Route::get('/banner',[AdminController::class,'banner']);
Route::get('/createbanner',[AdminController::class,'createbanner']);
Route::post('/uploadbanner',[AdminController::class,'uploadbanner']);
Route::get('/updateviewbanner/{id}',[AdminController::class,'updateviewbanner']);
Route::post('/updatebanner/{id}',[AdminController::class,'updatebanner']);
Route::get('/deletebanner/{id}',[AdminController::class,'deletebanner']);
Route::get('/aboutcreate',[App\Http\Controllers\AboutController::class, 'create'])->name('admin.aboutcreate');
Route::post('/aboutcreate',[App\Http\Controllers\AboutController::class, 'store'])->name('admin.aboutstore');
Route::get('/aboutlist', [App\Http\Controllers\AboutController::class, 'list'])->name('admin.aboutlist');
Route::get('/aboutedit/{id}',[App\Http\Controllers\AboutController::class, 'edit'])->name('admin.aboutedit');
Route::post('/aboutupdate/{id}',[App\Http\Controllers\AboutController::class, 'update'])->name('admin.aboutupdate');
Route::delete('/aboutdestroy/{id}',[App\Http\Controllers\AboutController::class, 'destroy'])->name('admin.aboutdestroy');
/* Featured Menu page */
Route::get('/food',[AdminController::class,'food']);
Route::post('/uploadfood',[AdminController::class,'uploadfood']);
Route::get('/showfood',[AdminController::class,'showfood']);
Route::get('/deletefood/{id}',[AdminController::class,'deletefood']);
Route::get('/foodview/{id}',[AdminController::class,'foodview']);
Route::post('/updatefood/{id}',[AdminController::class,'updatefood']);
// end of featured Menu
/* Main Menu */
Route::get('/menu',[AdminController::class,'menu']);
Route::post('/add_menu',[AdminController::class,'add_menu']);
Route::get('/showMenu',[AdminController::class,'showMenu']);
Route::get('/deletemenu/{id}',[AdminController::class,'deletemenu']);
Route::get('/menuview/{id}',[AdminController::class,'menuview']);
Route::post('/updatemenu/{id}',[AdminController::class,'updatemenu']);
// end menu

// team start 
Route::get('/addteam',[AdminController::class,'addteam']);
Route::post('/uploadteam',[AdminController::class,'uploadteam']);
Route::get('/showteam',[AdminController::class,'showteam']);
Route::get('/deleteteam/{id}',[AdminController::class,'deleteteam']);
Route::get('/updateteam/{id}',[AdminController::class,'updateteam']);
Route::post('/updateTeamData/{id}',[AdminController::class,'updateTeamData']);

//end team


// testimonial start 
Route::get('/addtest',[AdminController::class,'addtest']);
Route::post('/uploadtest',[AdminController::class,'uploadtest']);
Route::get('/showtest',[AdminController::class,'showtest']);
Route::get('/deletetest/{id}',[AdminController::class,'deletetest']);
Route::get('/updatetest/{id}',[AdminController::class,'updatetest']);
Route::post('/updateTestData/{id}',[AdminController::class,'updateTestData']);

//end testimonial


Route::get('/showtable',[AdminController::class,'showtable']);

Route::post('/tablebooked',[HomeController::class,'tablebooked']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/canceled/{id}',[AdminController::class,'canceled']);
