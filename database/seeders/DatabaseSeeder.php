<?php

namespace Database\Seeders;
require __DIR__ . '../config/comics.php';
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    
    
    public function run(): void
    {
        $comics = config('comics');

        foreach ($comics as $comic){
            var_dump($comic);

        }
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
