<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sources')->insert([
            'name' 	=> 'mashable',
            'url'	=> 'http://feeds.mashable.com/Mashable',
            'status'=> true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('sources')->insert([
            'name' 	=> 'techcrunch',
            'url'	=> 'http://feeds.feedburner.com/TechCrunch/',
            'status'=> true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
