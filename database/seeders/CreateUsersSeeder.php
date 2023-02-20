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
               'full_name'=>'Admin',
               'email'=>'admin@gmail.com',
               'type'=>'ADMIN',
               'password'=> bcrypt('123456'),
            ],
            [
               'full_name'=>'reservation_emp',
               'email'=>'reservation_emp@gmail.com',
               'type'=> 'RESERVATION_EMP',
               'password'=> bcrypt('123456'),
            ],
            [
                'full_name'=>'kitchen_emp',
                'email'=>'kitchen_emp@gmail.com',
                'type'=> 'KITCHEN_EMP',
                'password'=> bcrypt('123456'),
             ],
            [
               'full_name'=>'client 2',
               'email'=>'client2@gmail.com',
               'type'=>'CLIENT',
               'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
