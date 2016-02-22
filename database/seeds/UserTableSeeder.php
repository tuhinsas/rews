<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' 	=> 'Fahim Shahriyer',
            'email'	=> 'shahriyers@gmail.com',
            'password' => bcrypt('123456'),
            'type' => 'admin',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
