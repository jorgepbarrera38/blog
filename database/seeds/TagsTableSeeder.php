<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag_name = 'Historia';
        Tag::create([
            'name' => $tag_name,
            'slug' => str_slug($tag_name)
        ]);
        $tag_name = 'Naturaleza';
        Tag::create([
            'name' => $tag_name,
            'slug' => str_slug($tag_name)
        ]);
        $tag_name = 'Tecnología';
        Tag::create([
            'name' => $tag_name,
            'slug' => str_slug($tag_name)
        ]);
        $tag_name = 'Amor';
        Tag::create([
            'name' => $tag_name,
            'slug' => str_slug($tag_name)
        ]);
        $tag_name = 'Vida';
        Tag::create([
            'name' => $tag_name,
            'slug' => str_slug($tag_name)
        ]);
        $tag_name = 'Universo';
        Tag::create([
            'name' => $tag_name,
            'slug' => str_slug($tag_name)
        ]);
        $tag_name = 'Ciencia';
        Tag::create([
            'name' => $tag_name,
            'slug' => str_slug($tag_name)
        ]);
        $tag_name = 'Viajar';
        Tag::create([
            'name' => $tag_name,
            'slug' => str_slug($tag_name)
        ]);
        $tag_name = 'Estudiar';
        Tag::create([
            'name' => $tag_name,
            'slug' => str_slug($tag_name)
        ]);
    }
}
