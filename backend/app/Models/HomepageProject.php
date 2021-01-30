<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomepageProject extends Model
{
    use HasFactory;

    public function longdescription()
    {
        $this->hasMany(HomepageProjectsLongDescription::class, "projectId");
    }

}
