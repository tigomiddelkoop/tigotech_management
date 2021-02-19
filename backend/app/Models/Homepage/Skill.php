<?php

namespace App\Models\Homepage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected $table = "homepage_skills"; // Set the table to use
    protected $hidden = ["created_at", "updated_at"]; // These fields are hidden from the output

    public function entries()
    {
        return $this->hasMany(SkillsEntry::class);
    }

}
