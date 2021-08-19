<?php

namespace Database\Seeders;

use App\Models\Models\Opportunity;
use App\Models\Models\OpportunityDetail;
use Illuminate\Database\Seeder;



class OpportunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

     // Opportunity::factory()->count(50)->create()
       //   ->each(function($opportunity) {
       //   $this->opportunity->detail()->save(OpportunityDetails::factory()->make()

      //   );

        /*factory(Opportunity::class, 300)->create()->each(function ($opportunity){
            $opportunity->detail()->save(factory(OpportunityDetail::class)->make());*/


      // Remarq: laravel9dim ;  factory(App\Models\Article::class, 30)->create(); TO:[laravel8] \App\Models\Article::factory()->count(30)->create();

       //  });
    }
}



