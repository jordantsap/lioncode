<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        $user->name = 'jordantsap';
        $user->email = 'jordantsap@hotmail.gr';
        $user->api_token = 'User Api token'.random_int(0, 999999999999999);
        $user->password = bcrypt('123456');
        $user->save();
//        $user->api_token = $user->id.rand();
    }
}
