<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('posts')->delete();
        DB::table('users')->delete();

        User::create([
            'name' => 'test',
            'email' => 'example@google.com',
            'password' => Hash::make(12345678),
        ]);

        $defaultData = [
            ['title' => 'test title 1', 'likes' => '15'],
            ['title' => 'test title 2', 'likes' => '25'],
            ['title' => 'test title 3', 'likes' => '35'],
            ['title' => 'test title 4', 'likes' => '45'],
            ['title' => 'test title 5', 'likes' => '55'],
        ];

        foreach ($defaultData as $value){
            DB::table('posts')->insert(['title' => $value['title'], 'likes'=>$value['likes']]);
        }
    }
}
