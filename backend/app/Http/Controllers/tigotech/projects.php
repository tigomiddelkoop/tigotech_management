<?php

namespace App\Http\Controllers\tigotech;

use App\Http\Controllers\Controller;
use App\Models\HomepageProject;
use Illuminate\Http\Request;

class projects extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return HomepageProject[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        // Return all the projects
        return HomepageProject::all(["id", "name", "slug", "images", "website", "sourceControl"]);

    }
}
