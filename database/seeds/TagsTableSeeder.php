<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$tag = new Tag();
    	$tag->name = 'Home';
    	$tag-> save();
    	$tag = new Tag();
    	$tag->name = 'Car';
    	$tag-> save();
    	$tag = new Tag();
    	$tag->name = 'Sport';
    	$tag-> save();
    	$tag = new Tag();
    	$tag->name = 'Movie';
    	$tag-> save();
    }
}
