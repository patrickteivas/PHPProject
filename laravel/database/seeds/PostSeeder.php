<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        for($i=0; $i<1000; $i++){
            factory(App\Post::class)->create()
                ->each(function ($post) {
                    $n = rand(0, 10);
                    $faker = Faker\Factory::create();
                    $created_at = $faker->dateTimeBetween($post->created_at, 'now');
                    for($i=0; $i<$n; $i++) {
                        $post->save(factory(App\Comment::class)->make([
                            'created_at' => $created_at,
                            'updated_at' => $created_at
                        ]));
                    }
                });
        }
    }
}
