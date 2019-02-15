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
        for($i=0; $i<7; $i++){
            factory(App\Post::class)->create()
                ->each(function ($post) {
                    $post->save(factory(App\Comment::class)->make());
            });
        }
    }
}
