<?php

namespace Database\Factories\Models\Models;

use App\Models\Models\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comment' => $this -> faker ->text(255),
            'question_id' => \App\Models\Models\Question::all()->random()->id,
            'created_by' => \App\User::all()->random()->id
        ];
    }
}
