<?php

use App\Link;
use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
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

        Link::create([
            'title' => 'BBC',
            'url' => '//www.bbc.co.uk',
            'icon' => '<i class="fa fa-2x fa-link"></i>',
            'description' => 'The BBC',
        ]);

        Link::create([
            'title' => 'Udemy',
            'url' => '//www.udemy.com',
            'icon' => '<i class="fa fa-2x fa-university"></i>',
            'description' => 'Udemy',
        ]);

        Link::create([
            'title' => 'Free Code Camp',
            'url' => '//www.freecodecamp.org',
            'icon' => '<i class="fa fa-2x fa-free-code-camp"></i>',
            'description' => 'Free Code Camp',
        ]);

        $this->enableForeignKeys();

    }
}
