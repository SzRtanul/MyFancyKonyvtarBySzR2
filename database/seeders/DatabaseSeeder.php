<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Copy;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory()->create([
            'name' => 'K1',
            'email' => 'nincs@nemislesz.na',
        ]);

        Book::factory()->create([
            'szerzo' => "y",
            'cim'=>"y",
            'kiadas'=>"1946"
        ]);

        Book::factory()->create([
            'szerzo' => "z",
            'cim'=>"z",
            'kiadas'=>"1946"
        ]);

        Copy::factory()->create([
            'bookID' => "1",
            'userID'=> "1",
        ]);

        Copy::factory()->create([
            'bookID' => "2",
            'userID'=> "1",
        ]);

        User::factory(100)->create();
        Book::factory(2)->create();
        Copy::factory(100)->create();
    }
}
