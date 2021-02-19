<?php

namespace Database\Factories;

use App\Models\HomepageSkillsEntry;
use Illuminate\Database\Eloquent\Factories\Factory;

class SkillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HomepageSkillsEntry::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->title,
            "subTitle" => $this->faker->title,
            "image" => "/img/skills/languages.jpg",
            "order" => $this->faker->randomDigit
        ];
    }
}
