<?php

use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route   ::get("/",[Homecontroller::class,'index']  )->name("homepage");
Route   ::get("/about",[Homecontroller::class,'about']  )->name("home.about");
Route   ::get("admin/dashboard",[Homecontroller::class,'dashboard']  )->name("admin.dashboard");
Route   ::get("admin/home",[Homecontroller::class,'home']  )->name("admin.home");
Route   ::get("/resume",[Homecontroller::class,'resume']  )->name("resume");
Route   ::get("/contact",[Homecontroller::class,'contact']  )->name("contact");
Route   ::get("/project",[Homecontroller::class,'project']  )->name("projects");
Route   ::post('/contact', [Homecontroller::class, 'store'])->name('store_data');