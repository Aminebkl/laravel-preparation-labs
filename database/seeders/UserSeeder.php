<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name"=>"Walter White",
            "email"=>"walter@gmail.com",
            "password"=>Hash::make("testtest"),
            "photo"=>"team-1.jpg",
            "job"=>"Chief Executive Officer",
            "created_at"=>now()
        ]);
    }
}