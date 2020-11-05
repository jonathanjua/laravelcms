<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function imageupload(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $ext = $request->file->extension();
        $imageName = time().'.'.$ext;

        $request->file->move(public_path('media/images'), $imageName);

        return[
            'location' => asset('media/images/'.$imageName)
        ];


    }
}
