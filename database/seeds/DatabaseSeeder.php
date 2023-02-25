<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        User::create([
            'first_name' => 'Larissa',
            'last_name'=> 'Moana',
            'username' => 'Admin102',
            'address' => '2F Dexcon Bldg. Aguirre Ave. BF Homes. Paranaque',
            'contact' => '098723747823',
            'type' => 'admin',
            'email'=> 'frankgesmundo@gmx.com' ,
            'password' => Hash::make('BK2X#*A9daB@4fwdSG&Z')
        ]);
    }
}
