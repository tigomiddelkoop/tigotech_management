<?php

namespace App\Models\Homepage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = "homepage_projects"; // Set the table name

    public function longdescription()
    {
        $this->hasMany(ProjectsLongDescription::class, "projectId");
    }

}
