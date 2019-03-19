<?php

use App\Model\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //   'name'     => 'Kênia Alves',
        //   'email'    => 'keniaguitar@gmail.com',
        //   'password' => bcrypt(123456),
        // ]);
        factory(User::class, 10)->create();

    }
}
