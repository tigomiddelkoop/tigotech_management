<?php

namespace Database\Seeders;

use App\Models\HomepageSkill;
use Database\Factories\SkillFactory;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skill = new HomepageSkill();

        $skill->title = "Languages";
        $skill->sub_title = "";
        $skill->image = "/img/skills/languages.jpg";
        $skill->order = 1;

        $skill->save();
    }
}
