<?php

use App\Blog;
use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = new Blog();
        $blog->id = 1;
        $blog->title = 'blog 1';
        $blog->description = 'blog 1';
        $blog->content = 'blog 1';
        $blog->image = '12312';
        $blog->save();

        $blog = new Blog();
        $blog->id = 2;
        $blog->title = 'blog 2';
        $blog->description = 'blog 2';
        $blog->content = 'blog 2';
        $blog->image = '12312';
        $blog->save();

        $blog = new Blog();
        $blog->id = 3;
        $blog->title = 'blog 3';
        $blog->description = 'blog 3';
        $blog->content = 'blog 3';
        $blog->image = '12312';
        $blog->save();
    }
}
