<?php

namespace App\Http\Controllers\tigotech;

use App\Http\Controllers\Controller;
use App\Models\Homepage\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return Project[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        // Return all the projects
        return Project::all(["id", "name", "slug", "images", "website", "source_control"]);

    }
}
