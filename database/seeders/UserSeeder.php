<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Usuários iniciais
        User::create([
            'name' => 'admin',
            'password' => 'password',
        ]);

        User::create([
            'name' => 'demo',
            'password' => 'demo123',
        ]);
    }
}
