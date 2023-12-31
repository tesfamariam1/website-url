<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            (object) [
            'name' => 'Super Admin',
            'email' => 'superadmin@websiteurl.com'
            ],
            (object) [
                'name' => 'Admin',
                'email' => 'admin@websiteurl.com'
            ]
        ];
        foreach ($users as $user) {
            User::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => Hash::make('Password'),
            ]);
        }
    }
}
