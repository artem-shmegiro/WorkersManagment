<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function upload(Request $request)
    {
        $request->file('file')->store('uploads', 'public');

        return redirect()->back();


    }
}
