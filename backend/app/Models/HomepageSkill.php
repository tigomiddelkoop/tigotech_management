<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomepageSkill extends Model
{

    protected $hidden = ["created_at", "updated_at"];

    public function entries()
    {
        return $this->hasMany(HomepageSkillsEntry::class, "skillsId");
    }

}
