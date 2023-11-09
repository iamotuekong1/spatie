<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Database\Seeders\UserSeeder;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected static $password;

    public function run(): void
    {
        static::$password = Hash::make('password');
        
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => static::$password,
        ])->assignRole('writer', 'admin'); 
    }
}
