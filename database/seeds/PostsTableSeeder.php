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
            'title' => 'Jeep',
            'slug' => 'jeep',
            'post_date' => '14th Jan 2018',
            'post_homepage_position' => '0',
            'post_content' => 'In a jeep ',
            'post_excerpt' => 'In a jeep ',
            'post_image' => '//www.hexagonbrain.com/img/posts/jasonjeep.jpg',
            'post_seo_title' => 'In a jeep ',
            'post_seo_description'  => 'In a jeep - yeah!'
        ]);

        Posts::create([
            'title' => 'Jeep 2',
            'slug' => 'jeep2',
            'post_date' => '15th Jan 2018',
            'post_homepage_position' => '1',
            'post_content' => 'In a jeep ',
            'post_excerpt' => 'In a jeep ',
            'post_image' => '//www.hexagonbrain.com/img/posts/coral-thumb.jpg',
            'post_seo_title' => 'In a jeep ',
            'post_seo_description'  => 'Coral brain - yeah!'
        ]);

        Posts::create([
            'title' => 'Shuttle Model',
            'slug' => 'jeep3',
            'post_date' => '16th Jan 2018',
            'post_homepage_position' => '3',
            'post_content' => 'In a jeep ',
            'post_excerpt' => 'In a jeep ',
            'post_image' => '//www.hexagonbrain.com/img/posts/shuttlemodel-thumb.jpg',
            'post_seo_title' => 'In a jeep ',
            'post_seo_description'  => 'In a jeep - yeah!'
        ]);

        $this->enableForeignKeys();

    }
}
