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
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'title' => 'Personal',
            'slug' => 'personal',
        ]);
        $work = Category::create([
            'title' => 'Work',
            'slug' => 'work',
        ]);
        $hobbies = Category::create([
            'title' => 'Hobbies',
            'slug' => 'hobbies',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My personal post',
            'slug' => 'my-personal-post',
            'excerpt' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis nibh sed tellus rhoncus feugiat ut eget nunc. Praesent vestibulum efficitur orci, sit amet auctor risus malesuada non. Donec accumsan congue nunc, at placerat enim volutpat id. Donec a pulvinar quam. Praesent purus nunc, tempus ut massa tincidunt, sollicitudin condimentum odio. Mauris euismod vulputate mi quis tincidunt. Maecenas quis porta felis. Nam sed orci et quam rhoncus imperdiet facilisis nec nisl. Integer non lectus nulla. Sed bibendum lacus nec sapien porttitor cursus. Duis id volutpat leo, vitae eleifend ex. Aliquam nec imperdiet lectus. Etiam augue ligula, rhoncus sit amet lectus eu, gravida pulvinar ligula. Phasellus nec velit at risus ultricies vehicula vitae nec ipsum. Duis aliquam varius mauris quis scelerisque.</p>',
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My work post',
            'slug' => 'my-work-post',
            'excerpt' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis nibh sed tellus rhoncus feugiat ut eget nunc. Praesent vestibulum efficitur orci, sit amet auctor risus malesuada non. Donec accumsan congue nunc, at placerat enim volutpat id. Donec a pulvinar quam. Praesent purus nunc, tempus ut massa tincidunt, sollicitudin condimentum odio. Mauris euismod vulputate mi quis tincidunt. Maecenas quis porta felis. Nam sed orci et quam rhoncus imperdiet facilisis nec nisl. Integer non lectus nulla. Sed bibendum lacus nec sapien porttitor cursus. Duis id volutpat leo, vitae eleifend ex. Aliquam nec imperdiet lectus. Etiam augue ligula, rhoncus sit amet lectus eu, gravida pulvinar ligula. Phasellus nec velit at risus ultricies vehicula vitae nec ipsum. Duis aliquam varius mauris quis scelerisque.</p>',
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $hobbies->id,
            'title' => 'My hobbies post',
            'slug' => 'my-hobbies-post',
            'excerpt' => 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis nibh sed tellus rhoncus feugiat ut eget nunc. Praesent vestibulum efficitur orci, sit amet auctor risus malesuada non. Donec accumsan congue nunc, at placerat enim volutpat id. Donec a pulvinar quam. Praesent purus nunc, tempus ut massa tincidunt, sollicitudin condimentum odio. Mauris euismod vulputate mi quis tincidunt. Maecenas quis porta felis. Nam sed orci et quam rhoncus imperdiet facilisis nec nisl. Integer non lectus nulla. Sed bibendum lacus nec sapien porttitor cursus. Duis id volutpat leo, vitae eleifend ex. Aliquam nec imperdiet lectus. Etiam augue ligula, rhoncus sit amet lectus eu, gravida pulvinar ligula. Phasellus nec velit at risus ultricies vehicula vitae nec ipsum. Duis aliquam varius mauris quis scelerisque.</p>',
        ]);
    }
}
