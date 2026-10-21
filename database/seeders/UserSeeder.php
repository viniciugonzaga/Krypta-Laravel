<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Importante importar o Model User

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Cria 10 usuários com dados aleatórios (fake)
        User::factory()->count(10)->create();
    }
}