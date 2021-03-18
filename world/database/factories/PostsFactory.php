<?php

namespace Database\Factories;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Auth\User;

class PostsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Posts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->sentence(6),
            "body" => $this->faker->realText(500),
            'slug' => $this->faker->slug(),
            'active' => true,
            'author_id' => function (){
                                return User::all()->random(1)->first();
                            }
        ];
    }
}
