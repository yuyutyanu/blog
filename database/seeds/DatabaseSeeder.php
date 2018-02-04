<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Blog')->insert([
            'title' => 'ほげほげ',
            'article' => 'ほげほげ',
        ]);
        DB::table('Blog')->insert([
            'title' => '誰でも書けるよ',
            'article' => 'ほげほげ',
        ]);
    }
}
