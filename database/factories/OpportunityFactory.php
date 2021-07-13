<?php

namespace Database\Factories\Models\Models;

use App\Models\Models\Lookups\Category;
use App\Models\Models\Lookups\Country;
use App\Models\Models\Models\Opportunity;
use Illuminate\Database\Eloquent\Factories\Factory;

class OpportunityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Opportunity::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this -> faker ->sentence(50, true),
            'description'=> $this -> faker ->text(200),
            'category_id'=> Category::all()->random()->id,
            'country_id'=>Country::all()->random()->id,
            'deadline'=> $this -> faker->dateTime(),
            'organizer'=>$this -> faker->company


        ];
    }
}
