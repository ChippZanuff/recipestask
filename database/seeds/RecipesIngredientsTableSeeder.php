<?php

use Illuminate\Database\Seeder;

class RecipesIngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(\App\User::class, 20)
            ->create()
            ->each(function ($u) {
                $u->recipes()->save(factory(\App\Recipe::class)->make()
                )->each(function ($i) {
                    $i->ingredients()->saveMany(factory(\App\Ingredient::class, 1)->make());
                });
            });
    }
}
