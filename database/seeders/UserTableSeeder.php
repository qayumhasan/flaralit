<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_id'     => Str::uuid(),
            'name'     => 'Superadmin',
            'email'    => 'admin@mail.com',
            'password' => Hash::make('123456'),
            'image'    => 'assets/backend/images/user_avatar.png',
            'role'     => '1',
            'status'   => '1',
        ]);
    }
}
