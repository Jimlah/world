<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Posts;
use App\Models\Comments;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comments::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'from_user' => function(){
                return User::all()->random(1)->first();
            },
            'body' => $this->faker->realText(100),
            'on_post' => function(){
                return Posts::all()->random(1)->first();
            }
        ];
    }
}
