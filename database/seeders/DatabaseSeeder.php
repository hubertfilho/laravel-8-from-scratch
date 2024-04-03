<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
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
        $user = User::factory()->create([
            'name' => 'Hubert Filho'
        ]);

        $category = Category::factory()->create();

        Post::factory(3)->create([
            'user_id' => $user,
            'category_id' => $category->id,
        ]);

        Post::factory(2)->create();
    }
}
