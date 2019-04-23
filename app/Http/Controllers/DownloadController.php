<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function upload()
    {

        //$file = utf8_encode(file_get_contents($_FILES['file']['tmp_name']));
        //$xml = new \SimpleXMLElement($file);
        $xml = simplexml_load_string(utf8_encode(file_get_contents($_FILES['file']['tmp_name'])));

        return view('admin.organizations.create', [
            'organization'  => [],
            'xml' => $xml
        ]);


    }
}
