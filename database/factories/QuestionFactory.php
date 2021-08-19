<?php

namespace Database\Factories\Models\Models;

use App\Models\Models\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'question' =>$this -> faker ->text(255),
            'created_by' => \App\User::all()->random()->id
        ];
    }
}
