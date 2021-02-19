<?php

namespace App\Models\Homepage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillsEntry extends Model
{
    Use HasFactory;
    protected $table = "homepage_skills_entries"; // Set the table to use
    protected $hidden = ["created_at", "updated_at", "skill_id"]; // These fields are hidden from the output
    protected $casts = [
        "names" => "array"
    ]; // These table entries are cast
}
