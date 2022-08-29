<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
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
        \App\Models\User::factory(5)->create();

        Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel, JavaSript',
            'company' => 'Acme Corp',
            'location' => 'Boston, MA',
            'email' => 'email@email.com',
            'website' => 'https://www.acme.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis voluptas magnam itaque quisquam, ut eius perferendis officiis dolorem reiciendis. Voluptas quod corporis vel architecto, sunt in eligendi accusamus modi deleniti.'
        ]);

        Listing::create([
            'title' => 'Full-Stack Engineer',
            'tags' => 'laravel, JavaSript',
            'company' => 'Acme Corp',
            'location' => 'Nigeria',
            'email' => 'email@email.com',
            'website' => 'https://www.acme.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis voluptas magnam itaque quisquam, ut eius perferendis officiis dolorem reiciendis. Voluptas quod corporis vel architecto, sunt in eligendi accusamus modi deleniti.'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
