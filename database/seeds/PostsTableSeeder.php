<?php

use App\Posts;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

  use DisableForeignKeys;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->disableForeignKeys();

        Posts::create([
            'title' => 'Set up authentication in Laravel',
            'slug' => 'setup-authentication-in-laravel',
            'post_date' => '7th March 2018',
            'post_homepage_position' => '0',
            'post_content' => 'Coming soon ',
            'post_excerpt' => 'Coming soon ',
            'post_image' => '//www.hexagonbrain.com/img/posts/jasonjeep.jpg',
            'post_seo_title' => 'Set up authentication in Laravel ',
            'post_seo_description'  => 'Set up authentication in Laravel'
        ]);

        Posts::create([
            'title' => 'ReactJS state',
            'slug' => 'reactjs-state',
            'post_date' => '12th Feb 2018',
            'post_homepage_position' => '1',
            'post_content' => 'Coming soon ',
            'post_excerpt' => 'Coming soon ',
            'post_image' => '//www.hexagonbrain.com/img/posts/coral-thumb.jpg',
            'post_seo_title' => 'ReactJS state ',
            'post_seo_description'  => 'ReactJS state'
        ]);

        Posts::create([
            'title' => 'Learning to code - thoughts no1',
            'slug' => 'Learning-to-code-thoughts-no1',
            'post_date' => '16th Jan 2018',
            'post_homepage_position' => '3',
            'post_content' => 'Coming soon ',
            'post_excerpt' => 'Coming soon ',
            'post_image' => '//www.hexagonbrain.com/img/posts/shuttlemodel-thumb.jpg',
            'post_seo_title' => 'Learning to code - thoughts no1 ',
            'post_seo_description'  => 'Learning to code - thoughts no1'
        ]);

        $this->enableForeignKeys();

    }
}
