<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function showImageUpload(){
        $NIK = session('NIK');
        return view('uploads', compact('NIK'));
    }

    public function upload(Request $request){
        $request->validate([
            'image' => 'required|image|max:1024',
            'NIK' => 'required|string'
        ]);
        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('img', 'public');

            $image = new Image();
            $image->imagePath = $imagePath;
            $image->NIK = $request->NIK;
            $image->save();

            return redirect()->route('test');
        }

        // return redirect()->back()->with('error', 'Image upload failed');
    }

    public function show($id){
        $image = Image::find($id);
        return view('', compact('image'));
    }
}
