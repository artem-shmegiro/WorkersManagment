<?php

namespace App\Http\Controllers;

use App\Organization;
use App\Worker;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function organizations()
    {

        return view('management.organizations', [
            'organizations' => Organization::paginate(5),
        ]);
    }

    public function organization($organization)
    {

        return view('management.organization', [
            'organization' => Organization::where('id', $organization)->first(),
        ]);
    }

    public function worker($worker)
    {

        return view('management.worker', [
            'worker' => Worker::where('id', $worker)->first(),
        ]);
    }

}
