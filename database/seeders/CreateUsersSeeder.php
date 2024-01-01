<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
               'image'=>'null',
               'name'=>'Admin User',
               'job_desc'=>'Project Manager',
               'email'=>'admin@itsolutionstuff.com',
               'phone'=>'081321874638',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'image'=>'null',
               'name'=>'User',
               'job_desc'=>'Designer',
               'email'=>'user@itsolutionstuff.com',
               'phone'=>'081827493829',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
