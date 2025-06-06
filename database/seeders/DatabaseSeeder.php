<?php

namespace Database\Seeders;

use App\Models\Models\Comment;
use App\Models\Models\OpportunityDetail;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {//for the user hdhi good (down)
        \App\Models\User::factory(10)->create();
    $this->call(CategorySeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(UserSeeder::class);
      $this->call(OpportunitySeeder::class);

        $this->call(CommentSeeder::class);
        $this->call(QuestionSeeder::class);




    }
}
