<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $this->callSeeders();

        $user = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
        ]);

        
        $user->assignRole('super_admin');
    }

    private function callSeeders(): void
    {
        
        $this->call([
            FakultasSeeder::class,   
            RoleSeeder::class,       
        ]);
    }
}