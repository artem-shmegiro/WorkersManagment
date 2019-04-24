<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function organizationUpload()
    {
        $xml = simplexml_load_string(mb_convert_encoding(file_get_contents($_FILES['file']['tmp_name']), "UTF-8"));

        return view('admin.organizations.create', [
            'organization' => [],
            'xml' => $xml
        ]);

    }

    public function workerUpload($id = null)
    {
        $xml = simplexml_load_string(mb_convert_encoding(file_get_contents($_FILES['file']['tmp_name']), "UTF-8"));

        return view('admin.workers.create', [
            'worker' => [],
            'id' => $id,
            'xml' => $xml
        ]);
    }
}
