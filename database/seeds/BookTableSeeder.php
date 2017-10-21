<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('category')->insert(['name' => 'Science fiction','description' => '']);
    	DB::table('category')->insert(['name' => 'Satire','description' => '']);
    	DB::table('category')->insert(['name' => 'Drama','description' => '']);
    	DB::table('category')->insert(['name' => 'Action and Adventure','description' => '']);
    	DB::table('category')->insert(['name' => 'Romance','description' => '']);
    	DB::table('category')->insert(['name' => 'Mystery','description' => '']);
    	DB::table('category')->insert(['name' => 'Business','description' => '']);
    	DB::table('category')->insert(['name' => 'Self help','description' => '']);

  
        DB::table('book')->insert(['name' => 'Lean Startup', 'author' => 'Eric Ries', 'category_id' => 8, 'user' => 'Alejandro', 'available'=>0,'published_date'=>'2017-10-03']);
        DB::table('book')->insert(['name' => 'The ultimate sales machine', 'author' => 'Chet Holmes', 'category_id' => 8, 'user' => '', 'available'=>1,'published_date'=>'2017-09-01']);
        DB::table('book')->insert(['name' => 'Grant', 'author' => 'Ron Chernor', 'category_id' => 3, 'user' => '', 'available'=>1,'published_date'=>'2017-08-01']);
        DB::table('book')->insert(['name' => 'The Ministry of Utmost Happiness', 'author' => 'Arundhati Roy', 'category_id' => 4, 'user' => '', 'available'=>1,'published_date'=>'2017-07-01']);
        DB::table('book')->insert(['name' => 'Miss Julia Hits the Road', 'author' => 'Ann B. Ross', 'category_id' => 2, 'user' => '', 'available'=>1,'published_date'=>'2017-01-01']);
    }
}
