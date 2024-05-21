<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
            'email' => 'user@example.com',
            'password' => Hash::make('password123'),
        ]);

        $this->call([
            UsersTableSeeder::class,
        ]);
    }
}
