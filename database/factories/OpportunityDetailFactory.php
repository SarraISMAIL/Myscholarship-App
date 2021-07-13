<?php

namespace Database\Factories\Models\Models;

use App\Models\Models\Models\OpportunityDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class OpportunityDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OpportunityDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'benefits'=>$this -> faker->text(600),
           'application_process'=>$this->faker->text(300),
            'further_queries'=>$this->faker->text(300),
            'eligibilities'=>$this->faker->text(300),
            'start_date'=>$this->faker->dateTime(),
            'end_date'=>$this->faker->dateTime(),
            'official_link'=>$this->faker->url(),




        ];
    }
}
