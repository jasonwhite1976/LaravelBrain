<?php

use App\Models\Auth\User;
use Illuminate\Database\Seeder;

/**
 * Class UserTableSeeder.
 */
class UserTableSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();

        // Master administrator - id of 1
        User::create([
            'first_name'        => 'Jason',
            'last_name'         => 'White',
            'email'             => 'jasonwhite1976@yahoo.co.uk',
            'password'          => bcrypt('FoxcubSG19'),
            'confirmation_code' => md5(uniqid(mt_rand(), true)),
            'confirmed'         => true,
        ]);

        // Basic user - id of 2
        User::create([
            'first_name'        => 'Simple',
            'last_name'         => 'User',
            'email'             => 'simple@user.com',
            'password'          => bcrypt('Simple'),
            'confirmation_code' => md5(uniqid(mt_rand(), true)),
            'confirmed'         => true,
        ]);

        $this->enableForeignKeys();
    }
}
