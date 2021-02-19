<?php

namespace App\Http\Controllers\tigotech;

use App\Http\Controllers\Controller;
use App\Models\Homepage\Project;

class ProjectController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($slug)
    {
        $project = Project::where("slug", "=", $slug)->get();
//        $project['longDescription'] =

//        echo $project->longdescription()->get();
        return $project;

    }
}
