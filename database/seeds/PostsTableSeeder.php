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
            'post_image' => '1516003468.jasonjeep.jpg',
            'post_seo_title' => 'In a jeep ',
            'post_seo_description'  => 'In a jeep - yeah!'
        ]);

        Posts::create([
            'title' => 'Jeep 2',
            'slug' => 'jeep2',
            'post_date' => '15th Jan 2018',
            'post_homepage_position' => '0',
            'post_content' => 'In a jeep ',
            'post_excerpt' => 'In a jeep ',
            'post_image' => '1516003468.jasonjeep.jpg',
            'post_seo_title' => 'In a jeep ',
            'post_seo_description'  => 'In a jeep - yeah!'
        ]);

        Posts::create([
            'title' => 'Jeep 3',
            'slug' => 'jeep3',
            'post_date' => '15th Jan 2018',
            'post_homepage_position' => '0',
            'post_content' => 'In a jeep ',
            'post_excerpt' => 'In a jeep ',
            'post_image' => '1516003468.jasonjeep.jpg',
            'post_seo_title' => 'In a jeep ',
            'post_seo_description'  => 'In a jeep - yeah!'
        ]);

        $this->enableForeignKeys();

    }
}
