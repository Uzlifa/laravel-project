<?php

namespace Database\Seeders;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'admin',
            'email'=>'uuz@gmail.com',
            'password'=>bcrypt('rahasia')
        ]);
        User::create([
            'name'=>'admin',
            'email'=>'uuz@gmail.com',
            'password'=>bcrypt('cebelapa')
        ]);
    }
}
