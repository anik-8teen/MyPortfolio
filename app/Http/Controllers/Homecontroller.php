<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Setting;
class Homecontroller extends Controller
{
    public function index(){
        $main= Setting::first();
        return view("pages.main",compact("main"));
    }

    public function dashboard(){
        return view('pages.dashboard');
    }
    public function Contact(){
        
        return view('pages.contact');
    }
    public function project(){

        $project=Project::all();

        return view('pages.project',compact('project'));
    }
    public function resume(){
        $edu= Education::all();
        return view('pages.resume',compact("edu"));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => '', // Adjust validation as needed
            'message' => 'required',
            // Add more validation rules for other fields
        ]);
    
        try {
            Contact::create($validatedData);

    
            return redirect()->back()->with('success', 'Data has been stored successfully!');
        } catch (\Exception $e) {
           return redirect()->back()->with('error', 'Error storing data: ' . $e->getMessage());
        }
    }
    }


