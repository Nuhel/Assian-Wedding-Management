<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Service;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $services = Service::where('is_assian',1)->get();

        return view('front.home.home')
        ->with('services',$services);
    }

    public function gallery(){
        $galleries = Gallery::all();
        return view('front.gallery.gallery')->with('galleries',$galleries);
    }

}
