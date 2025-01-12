<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    

    public function index()
    { 
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;
            
            if($usertype == 'user')
            {
                return view('home.index');
            }
            else if($usertype == 'admin')
            {
                return view('admin.index');
            }
            else
            {
                return redirect()->back();
            }
        }
        

}



public function home()
        {
            return view('home.index');
        }


        public function main(){
            return view('home.index');
        }

        public function rooms(){
            return view('home.rooms');
        }

        public function about_us(){
            return view('home.about_us');
        }
        

        public function contact(){
            return view('home.contact');
        }

}
