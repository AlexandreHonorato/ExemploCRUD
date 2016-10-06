<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersSeeder::class);
    }
}


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(\App\User::all()->count() == 0){
            \App\User::create([
                "name"=>"Adm",
                "email"=>"adm@adm",
                "password"=>\Illuminate\Support\Facades\Hash::make("1234")
            ]);
        }
    }
}
