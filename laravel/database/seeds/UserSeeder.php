<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<7; $i++){
            factory(App\User::class)->create()
                ->each(function ($user) {
                    $user->save(factory(App\Post::class)->make());
            });
        }
    }
}
