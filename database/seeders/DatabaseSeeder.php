<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Testing user',
            'email' => 'test@example.com',
            'password' => Hash::make('Pass@2022')
        ]);

        Post::factory(12)->create();
    }
}
