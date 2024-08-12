<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $regis = User::create([
        //     'name' => 'Regis Syawaludin Rifaldi',
        //     'username' => 'regissyawaludinrifaldi',
        //     'email' => 'regisrifaldi44@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ]);

        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming'
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Artikel 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-artikel-1',
        //     'body' => 'Blockchain, teknologi yang mendasari cryptocurrency seperti Bitcoin, menawarkan potensi transformatif yang jauh melampaui dunia keuangan. Teknologi ini menciptakan catatan digital yang aman, transparan, dan terdesentralisasi, sehingga dapat diterapkan dalam berbagai bidang seperti rantai pasok, manajemen identitas, dan voting. Dengan blockchain, kita dapat meningkatkan transparansi, mengurangi risiko penipuan, dan mempercepat proses bisnis.'
        // ]); 

        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
