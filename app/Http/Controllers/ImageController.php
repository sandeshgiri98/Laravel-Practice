<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{

    function upload(Request $request){
        $path= $request->file('file')->store('public');

        return $path;
    }
}
