<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'dhani@gmail.com',
            'password' => bcrypt('12345678'),
        ]); 
    
        $web = Categoryies::create([
            'name_cat' => 'WebDevelopment',
            'slug   ' => 'web-design',
        ]);

        $mobile = Categoryies::create([
            'name_cat' => 'MobileDevelopment',
            'slug   ' => 'mobile-   design',
        ]);

        karyas::create([
            'id_category' => $web->id_category,
            'title' => 'Web Development',
            'content' => 'Web Development',
            'image_karya' => 'web-development.jpg',
        ]);

        karyas::create([
            'id_category' => $mobile->id_category,
            'title' => 'Mobile Development',
            'content' => 'Mobile Development',
            'image_karya' => 'mobile-development.jpg',
        ]);

        
    }
}
