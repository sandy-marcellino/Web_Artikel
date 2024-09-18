<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Sandy',
            'username' => 'sandy',
            'email' => 'sandytest@gmail.com',
            'password' => bcrypt('sandy')
        ]);

        User::factory(3)->create();

        Category::create([
            'nama' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'nama' => 'Personal',
            'slug' => 'personal',
        ]);

        Category::create([
            'nama' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Post::factory(20)->create();

        

        // User::create([
        //     'name' => 'Rupini',
        //     'email' => 'rupinitest@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Category::create([
        //     'nama' => 'Web Programming',
        //     'slug' => 'web-programming',
        // ]);

        // Category::create([
        //     'nama' => 'Personal',
        //     'slug' => 'personal',
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi porro explicabo sed dolore ratione, fuga nisi odit ullam animi eius voluptatum ut, quia voluptates unde repudiandae iste quibusdam, quos quo error magnam praesentium dolorem veniam enim.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi porro explicabo sed dolore ratione, fuga nisi odit ullam animi eius voluptatum ut, quia voluptates unde repudiandae iste quibusdam, quos quo error magnam praesentium dolorem veniam enim. Fugit dolorum saepe nulla, illo praesentium repellendus cum debitis doloremque dolore ratione veritatis commodi illum facere qui, veniam mollitia possimus, officiis aperiam. Quia, recusandae eius dolorem id omnis saepe officia corrupti, ducimus, neque amet dolor. Sint quasi quam saepe debitis quibusdam odio velit, beatae, repudiandae culpa doloribus expedita, fugiat explicabo iure ab? Qui quam earum deleniti doloribus, doloremque dicta incidunt mollitia, eius ullam similique assumenda magni facilis necessitatibus tempora placeat, eveniet ex iure eligendi blanditiis debitis? Sit nisi quo numquam perspiciatis tempore non praesentium.'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi porro explicabo sed dolore ratione, fuga nisi odit ullam animi eius voluptatum ut, quia voluptates unde repudiandae iste quibusdam, quos quo error magnam praesentium dolorem veniam enim.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi porro explicabo sed dolore ratione, fuga nisi odit ullam animi eius voluptatum ut, quia voluptates unde repudiandae iste quibusdam, quos quo error magnam praesentium dolorem veniam enim. Fugit dolorum saepe nulla, illo praesentium repellendus cum debitis doloremque dolore ratione veritatis commodi illum facere qui, veniam mollitia possimus, officiis aperiam. Quia, recusandae eius dolorem id omnis saepe officia corrupti, ducimus, neque amet dolor. Sint quasi quam saepe debitis quibusdam odio velit, beatae, repudiandae culpa doloribus expedita, fugiat explicabo iure ab? Qui quam earum deleniti doloribus, doloremque dicta incidunt mollitia, eius ullam similique assumenda magni facilis necessitatibus tempora placeat, eveniet ex iure eligendi blanditiis debitis? Sit nisi quo numquam perspiciatis tempore non praesentium.'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi porro explicabo sed dolore ratione, fuga nisi odit ullam animi eius voluptatum ut, quia voluptates unde repudiandae iste quibusdam, quos quo error magnam praesentium dolorem veniam enim.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi porro explicabo sed dolore ratione, fuga nisi odit ullam animi eius voluptatum ut, quia voluptates unde repudiandae iste quibusdam, quos quo error magnam praesentium dolorem veniam enim. Fugit dolorum saepe nulla, illo praesentium repellendus cum debitis doloremque dolore ratione veritatis commodi illum facere qui, veniam mollitia possimus, officiis aperiam. Quia, recusandae eius dolorem id omnis saepe officia corrupti, ducimus, neque amet dolor. Sint quasi quam saepe debitis quibusdam odio velit, beatae, repudiandae culpa doloribus expedita, fugiat explicabo iure ab? Qui quam earum deleniti doloribus, doloremque dicta incidunt mollitia, eius ullam similique assumenda magni facilis necessitatibus tempora placeat, eveniet ex iure eligendi blanditiis debitis? Sit nisi quo numquam perspiciatis tempore non praesentium.'
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi porro explicabo sed dolore ratione, fuga nisi odit ullam animi eius voluptatum ut, quia voluptates unde repudiandae iste quibusdam, quos quo error magnam praesentium dolorem veniam enim.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi porro explicabo sed dolore ratione, fuga nisi odit ullam animi eius voluptatum ut, quia voluptates unde repudiandae iste quibusdam, quos quo error magnam praesentium dolorem veniam enim. Fugit dolorum saepe nulla, illo praesentium repellendus cum debitis doloremque dolore ratione veritatis commodi illum facere qui, veniam mollitia possimus, officiis aperiam. Quia, recusandae eius dolorem id omnis saepe officia corrupti, ducimus, neque amet dolor. Sint quasi quam saepe debitis quibusdam odio velit, beatae, repudiandae culpa doloribus expedita, fugiat explicabo iure ab? Qui quam earum deleniti doloribus, doloremque dicta incidunt mollitia, eius ullam similique assumenda magni facilis necessitatibus tempora placeat, eveniet ex iure eligendi blanditiis debitis? Sit nisi quo numquam perspiciatis tempore non praesentium.'
        // ]);


    }
}
