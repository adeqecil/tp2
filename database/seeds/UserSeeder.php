<?php

use Illuminate\Database\Seeder;

use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = [

            [

               'name'=>'Admin',

               'email'=>'admin@admin.com',

                //'is_admin'=>'1',

               'password'=> Hash::make('admin#2020'),

            ],

            [

               'name'=>'User',

               'email'=>'user@user.com',

                //'is_admin'=>'0',

               'password'=> Hash::make('user#2020'),

            ],

        ];

  

        foreach ($user as $key => $value) {

            User::create($value);

        }

    }

}