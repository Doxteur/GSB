<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Use NoteSeeder
        for ($i = 0; $i < 10; $i++) {
            $this->call(NoteSeeder::class);
        }
    }
}
