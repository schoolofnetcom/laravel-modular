<?php

namespace Son\Blog\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Son\Blog\Entities\Post;

class BlogDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $post = new Post;
        $post->title = 'Home';
        $post->body = 'Home page';
        $post->save();

        $post = new Post;
        $post->title = 'About Us';
        $post->body = 'About Us page';
        $post->save();
    }
}
