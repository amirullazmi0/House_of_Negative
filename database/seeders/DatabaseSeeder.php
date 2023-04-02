<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(3)->create();
        // \App\Models\Release::factory(5)->create();
        // \App\Models\Category::factory(3)->create();
        // \App\Models\Talent::factory(3)->create();



        \App\Models\User::factory()->create(
            [
                'name' => 'Amirull Azmi',
                'username' => 'AMIROO',
                'password' => bcrypt('11111'),
                'email' => 'amirullazmi0@gmail.com'
            ],
        );
        // CATEGORY
        \App\Models\Category::factory()->create(
            [
                'name' => 'Single',
                'slug' => 'single',
            ],
        );
        \App\Models\Category::factory()->create(
            [
                'name' => 'EP',
                'slug' => 'ep',
            ],
        );
        \App\Models\Category::factory()->create(
            [
                'name' => 'Album',
                'slug' => 'album',
            ],
        );

        // Talent
        \App\Models\Talent::factory()->create(
            [
                'name' => 'Solo',
                'slug' => 'solo',
            ],
        );
        \App\Models\Talent::factory()->create(
            [
                'name' => 'Group Band',
                'slug' => 'group-band',
            ],
        );
        \App\Models\Talent::factory()->create(
            [
                'name' => 'Group Rap',
                'slug' => 'group-rap',
            ],
        );
    }
}
