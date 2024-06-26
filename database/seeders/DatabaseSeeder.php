<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = [
            ['name'=>'International', 'order'=>1, 'showmenu'=>true],
            ['name'=>'Provincial', 'order'=>1, 'showmenu'=>true],
            ['name'=>'Sports', 'order'=>1, 'showmenu'=>true],
            ['name'=>'Opinion', 'order'=>1, 'showmenu'=>true],
            ['name'=>'Business', 'order'=>1, 'showmenu'=>true],
            ['name'=>'Health', 'order'=>1, 'showmenu'=>true],
            ['name'=>'Live', 'order'=>1, 'showmenu'=>true],
            ['name'=>'Entertainment', 'order'=>1, 'showmenu'=>true],
            ['name'=>'Music', 'order'=>1, 'showmenu'=>true],
            ['name'=>'Exclusive', 'order'=>1, 'showmenu'=>true],
            ['name'=>'Breaking News', 'order'=>1, 'showmenu'=>true],
            ['name'=>'Technology', 'order'=>1, 'showmenu'=>true],
            ['name'=>'News Programs', 'order'=>1, 'showmenu'=>true],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
