<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'heading' => $this->faker->title,
            'tags' => $this->generateTags(),
            'description' => $this->faker->text(rand(20, 30)),
            'website' => $this->faker->url,
            'type' => $this->faker->randomElement(['Laravel', 'PHP', 'Angular'])
        ];
    }

    private function generateTags(){
        $tags = array();
        for($i=0; $i<=5; $i++)
            array_push($tags, $this->faker->text(rand(5,7)));
        return json_encode($tags);
    }
}
