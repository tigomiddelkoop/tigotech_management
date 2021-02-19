<?php

namespace App\Models\Homepage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectsLongDescription extends Model
{
    use HasFactory;
    protected $table = "homepage_projects_long_descriptions"; // Set the table to use
    protected $hidden = ["created_at", "updated_at", "projectId"]; // These fields are hidden from the output


}
