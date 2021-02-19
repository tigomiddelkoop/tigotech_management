<?php

namespace App\Http\Controllers\tigotech;

use App\Http\Controllers\Controller;
use App\Models\Homepage\Skill;
use Illuminate\Http\Request;

class skillsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return string[]
     */
    public function __invoke(Request $request)
    {
        $languages = Skill::all();
        $toJSON = [];

        foreach ($languages as $language) {
            $language["entries"] = $language->entries()->get();

            //dd($language["entries"]);

            array_push($toJSON, $language);
        }

        // return the entries

//        dd($toJSON);
        return $toJSON;
    }
}
