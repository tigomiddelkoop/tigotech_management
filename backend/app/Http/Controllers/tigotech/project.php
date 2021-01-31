<?php

namespace App\Http\Controllers\tigotech;

use App\Http\Controllers\Controller;
use App\Models\HomepageProject;
use Illuminate\Http\Request;

class project extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($slug)
    {
        $project = HomepageProject::where("slug", "=", $slug)->get();
//        $project['longDescription'] =

//        echo $project->longdescription()->get();
        return $project;

    }
}
