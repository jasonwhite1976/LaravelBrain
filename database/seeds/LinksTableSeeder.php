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
            'title' => 'Medium - Dev Channel',
            'url' => '//medium.com/dev-channel',
            'icon' => '<i class="fa fa-2x fa-medium"></i>',
            'description' => 'Web Dev update from @ChromiumDev',
        ]);

        Link::create([
            'title' => 'Udemy',
            'url' => '//www.udemy.com',
            'icon' => '<i class="fa fa-2x fa-university"></i>',
            'description' => 'Udemy online courses',
        ]);

        Link::create([
            'title' => 'Free Code Camp',
            'url' => '//www.freecodecamp.org',
            'icon' => '<i class="fa fa-2x fa-free-code-camp"></i>',
            'description' => 'Free Code Camp Web Dev learning path',
        ]);

        $this->enableForeignKeys();

    }
}
