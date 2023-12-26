<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'role_name' => 'SuperAdmin',
        ]);

        Role::create([
            'role_name' => 'Penulis',
        ]);

        Role::create([
            'role_name' => 'User',
        ]);

        User::factory(5)->create();
        $this->call(DatabaseSeeder::class);
    }
}
