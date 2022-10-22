<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'test';
        $user->email = 'test@test.gr';
        $user->api_token = 'User_Api_token'.now().rand().Hash::make('lioncode');
        $user->password = bcrypt('123456');
        $user->save();
    }
}
