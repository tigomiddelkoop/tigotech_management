<?php

namespace Database\Seeders;

use App\Models\Homepage\Skill;
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
        $skill = new Skill();

        $skill->title = "Languages";
        $skill->sub_title = "";
        $skill->image = "/img/skills/languages.jpg";
        $skill->order = 1;

        $skill->save();

        $skill->entries()->create([
            "names" => ["JavaScript", "TypeScript"],
            "confidence" => 75,
            "date" => "2020"
        ]);

        $skill->entries()->create([
            "names" => ["PHP"],
            "confidence" => 75,
            "date" => "2020"
        ]);

        $skill->entries()->create([
            "names" => ["Java"],
            "confidence" => 75,
            "date" => "2020"
        ]);

        $skill = new Skill();

        $skill->title = "IDE";
        $skill->sub_title = "";
        $skill->image = "/img/skills/ides.jpg";
        $skill->order = 1;

        $skill->save();

        $skill->entries()->create([
            "names" => ["Jetbrains PhpStorm", "PHP, HTML and Javascript"],
            "date" => "2020"
        ]);

        $skill->entries()->create([
            "names" => ["Jetbrains Rider", ".NET"],
            "date" => "2020"
        ]);

        $skill->entries()->create([
            "names" => ["Jetbrains DataGrip", "Database Management"],
            "confidence" => 75,
            "date" => "2020"
        ]);

    }
}
