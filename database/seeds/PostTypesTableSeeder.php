<?php

use Illuminate\Database\Seeder;

class PostTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('post_types')->insert([
        [
          'title' => 'link',
          'slug' => 'link'
        ],
        [
          'title' => 'blog',
          'slug' => 'blog'
        ],
        [
          'title' => 'question',
          'slug' => 'question'
        ],
      ]);
    }
}
