<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Post;
use Database\Factories\PostFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents, HasFactory;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        PostFactory::new()->count(20)->create();
        // User::factory(10)->create();


    
        
    }
}
