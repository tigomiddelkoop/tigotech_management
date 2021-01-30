<?php

namespace App\Http\Controllers\tigotech;

use App\Http\Controllers\Controller;
use App\Models\HomepageSkill;
use Illuminate\Http\Request;

class skills extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return string[]
     */
    public function __invoke(Request $request)
    {
        $languages = HomepageSkill::all();
        $toJSON = [];

        foreach ($languages as $language) {
            $language["entries"] = $language->entries()->get();

            foreach ($language["entries"] as $nameIndex => $entry) {
                $entryNames = $entry->names()->get();
                $language["entries"][$nameIndex]["names"] = $entryNames;
            }


            array_push($toJSON, $language);
        }
        // return the entries
        return $toJSON;
    }
}
