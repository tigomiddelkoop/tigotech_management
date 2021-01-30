<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomepageSkillsEntry extends Model
{
    protected $hidden = ["created_at", "updated_at", "skillsId"];

    public function names()
    {
        return $this->hasMany(HomepageSkillsEntriesName::class, "skillsId");
    }
}
