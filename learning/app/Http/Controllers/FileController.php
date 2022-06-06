<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function downLoadFile(){
        // Send the smile.jpg to user.
        return response()->download(public_path('smile.jpg'), 'Smile Image');
    }

    public function upLoadFile(Request $request) {

        // Image name (to be saved)
        $fileName = "user_image.jpg";

        // Path of the saved file.
        $path = $request->file('photo')->move(public_path("/"), $fileName);

        // URL of the uploaded file.
        $photoURL = url("/".$fileName);

        return response()->json(['url' => $photoURL], 200);
    }
}
