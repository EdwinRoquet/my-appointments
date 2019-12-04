<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Edwin Roquet',
            'email' => 'eroquetf@gmail.com',
            'password' => bcrypt('roquet07'),
            'dni'=> '12345678',
            'address'=>'',
            'phone'=> '',
            'role' => 'admin',
        ]);

        factory(User::class,50)->create();
    }
}
