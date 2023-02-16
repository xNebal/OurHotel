<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'full name'=>'Admin User',
               'email'=>'admin@tutsmake.com',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'full name'=>'reservation_emp User',
               'email'=>'reservation_emp@tutsmake.com',
               'type'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
                'full name'=>'kitchen_emp User',
                'email'=>'kitchen_emp@tutsmake.com',
                'type'=> 3,
                'password'=> bcrypt('123456'),
             ],
            [
               'full name'=>'User',
               'email'=>'user@tutsmake.com',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
