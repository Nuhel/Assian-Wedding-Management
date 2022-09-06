<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\DataTables\GalleryDataTable;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
class GalleryController extends Controller
{

    public function index(GalleryDataTable $dataTable)
    {
        return $dataTable->render('components.datatable.index', ['heading' => 'Gallery']);
    }


    public function create()
    {
        return view('gallery.create');
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|mimes:jpeg,png,jpg,gif',

        ],);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator->errors());
        }
        $gallery = new Gallery();
        $filePath = '';
        if ($request->hasFile('image')) {
            $filePath = $request->image->store('public/galleries');
            $gallery->image     = Str::of($filePath)->replaceFirst('public', 'storage');
        }
        $gallery->save();
        return $this->redirectWithAlert(true, 'galleries');
    }


    public function show(Gallery $gallery)
    {
        //
    }


    public function edit(Gallery $gallery)
    {
        return view('gallery.edit')->with('gallery',$gallery);
    }


    public function update(Request $request, Gallery $gallery)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'nullable|mimes:jpeg,png,jpg,gif',

        ],);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator->errors());
        }
        $filePath = '';
        if($request->hasFile('image')){
            $filePath = $request->image->store('public/service');
            if(!$request->delete_old){
                $this->deleteAttachedImage($gallery);
            }
            $gallery->image     = Str::of($filePath)->replaceFirst('public','storage');
            $gallery->update();
        }
        return $this->redirectWithAlert(true, 'galleries');


    }


    public function destroy(Gallery $gallery)
    {
        $this->deleteAttachedImage($gallery);
        $gallery->delete();
        return $this->redirectWithAlert(true, 'galleries');
    }

    public function deleteAttachedImage($service){
        $filePath = $service->image?Str::of($service->image)->replaceFirst('storage','public'):"";
        Storage::delete($filePath);
    }
}
