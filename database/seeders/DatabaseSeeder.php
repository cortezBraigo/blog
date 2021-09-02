<?php

namespace Database\Seeders;

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
        User::truncate();
        Post::truncate();
        Category::truncate();
        
        Post::factory(5)->create();
        //you can specify which attribute dont want random
        User::factory()->create([
            'name' => 'John Doe'
        ]);
        // $user = User::factory()->create();
        
        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-family-post',
        //     'excerpt' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos tenetur</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus lacus, solliciudin id auctor sed, congue ut turpis. Curabitur sit amet tortor elit. Donec lacinia, ante faucibus auctor ultricies, odio eros dapibus quam, ac euismod est quam at urna. Aenean rutrum condimentum ultricies. Nunc faucibus pellentesque ornare. Phasellus ac faucibus dui. Mauris venenatis mauris urna, id interdum quam facilisis vel. Etiam mauris augue, mollis ut magna in, tincidunt finibus neque. Ut imperdiet felis rhoncus, rutrum dolor ut, imperdiet mi. Donec at orci purus.</p>'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-word-post',
        //     'excerpt' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos tenetur</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus lacus, solliciudin id auctor sed, congue ut turpis. Curabitur sit amet tortor elit. Donec lacinia, ante faucibus auctor ultricies, odio eros dapibus quam, ac euismod est quam at urna. Aenean rutrum condimentum ultricies. Nunc faucibus pellentesque ornare. Phasellus ac faucibus dui. Mauris venenatis mauris urna, id interdum quam facilisis vel. Etiam mauris augue, mollis ut magna in, tincidunt finibus neque. Ut imperdiet felis rhoncus, rutrum dolor ut, imperdiet mi. Donec at orci purus.</p>'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My Personal Post',
        //     'slug' => 'my-personal-post',
        //     'excerpt' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos tenetur</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lectus lacus, solliciudin id auctor sed, congue ut turpis. Curabitur sit amet tortor elit. Donec lacinia, ante faucibus auctor ultricies, odio eros dapibus quam, ac euismod est quam at urna. Aenean rutrum condimentum ultricies. Nunc faucibus pellentesque ornare. Phasellus ac faucibus dui. Mauris venenatis mauris urna, id interdum quam facilisis vel. Etiam mauris augue, mollis ut magna in, tincidunt finibus neque. Ut imperdiet felis rhoncus, rutrum dolor ut, imperdiet mi. Donec at orci purus.</p>'
        // ]);
    }
}
