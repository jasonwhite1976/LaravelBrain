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
        //factory(App\Link::class, 5)->create();

        $this->disableForeignKeys();

        Link::create([
            'title' => 'BBC',
            'url' => '//www.bbc.co.uk',
            'icon' => '<i class="fa fa-2x fa-link"></i>',
            'description' => 'The BBC',
        ]);

        $this->enableForeignKeys();

    }
}
