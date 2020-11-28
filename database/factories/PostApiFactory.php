<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\PostApi;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostApiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PostApi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(50),
            'description' => $this->faker->text(300)
        ];
    }
}
