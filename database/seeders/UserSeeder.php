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
            [
                'username' => 'elonmusk',
                'email' => 'elon@xspace.com',
                'password' => Hash::make('elon123'),
            ],
        ];
        
        foreach ($users as $userItem) {
            User::create($userItem);
        }
    }
}
