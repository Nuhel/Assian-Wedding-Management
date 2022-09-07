<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
use App\Models\Gallery;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function contactRequest(Request $request){

        $validator = Validator::make($request->all(), [
            "name" => "required|string|max:100",
            "contact" => "required|string|max:100",
            "message" => "required|string|max:1000",
        ]);

        if ($validator->fails()) {
            return redirect()
            ->back()
            ->withInput()
            ->withErrors($validator->errors())
            ->with('action','modal-open');
        }

        $contactRequest = new ContactRequest();
        $contactRequest->name = $request->name;
        $contactRequest->contact = $request->contact;
        $contactRequest->message = $request->message;
        $contactRequest->save();
        return redirect()
            ->back()->with('success','requested');
       // dd($request->toArray());
    }

}
