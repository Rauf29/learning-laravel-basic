<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        $user = User::factory()->create([
            'name' => 'Rauf'
        ]);
        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

        // $user = User::factory()->create();

        //    $personal = Category::create([
        //         'name' => 'Personal',
        //         'slug' => 'personal'
        //     ]);
        //    $work = Category::create([
        //         'name' => 'Work',
        //         'slug' => 'work'
        //     ]);
        //    $family = Category::create([
        //         'name' => 'Family',
        //         'slug' => 'family '
        //     ]);

        //     Post::create([
        //         'user_id' => $user->id,
        //         'category_id' => $family->id,
        //         'title' => 'My Family Post',
        //         'slug' => 'my-family-post',
        //         'excerpt' => 'This post all about my personal story',
        //         'body' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.'
        //     ]);
        //     Post::create([
        //         'user_id' => $user->id,
        //         'category_id' => $work->id,
        //         'title' => 'My Work Post',
        //         'slug' => 'my-work-post',
        //         'excerpt' => 'This post all about my personal story',
        //         'body' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.'
        //     ]);
        //     Post::create([
        //         'user_id' => $user->id,
        //         'category_id' => $personal->id,
        //         'title' => 'My Personal Post',
        //         'slug' => 'my-personal-post',
        //         'excerpt' => 'This post all about my personal story',
        //         'body' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.'
        //     ]);

    }
}
