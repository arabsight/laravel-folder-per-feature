<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Users\UserRoles;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Users\User::factory(10)->create();
        \App\Users\User::factory()->create([
            'name' => 'Rabah Ghodbane',
            'email' => 'arabsight@gmail.com',
            'role' => UserRoles::SUPERADMIN->value,
        ]);
    }
}
