<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=507; $i < 9550; $i++) {
            User::create([
                'name' => 'User Ke'.$i,
                'email' => 'user'.$i.'@gmail.com',
                'password' => Hash::make('inipassword'),
            ]);
        }
    }
}
