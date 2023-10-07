<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

// 追記開始
\App\Models\User::create([
    'name' => 'テストユーザ',
    'email' => 'test@example.com',
    'password' => bcrypt('password'),
]);
\App\Models\User::create([
    'name' => 'ぼやき太郎',
    'email' => 'boyaki@example.com',
    'password' => bcrypt('password'),
]);
\App\Models\Project::create([
    'status' => '見積準備中',
    'customer' => 'ACCIL',
    'start' => '2023 10 -01',
    'end' => '2023 10 -30',
    'number' => '2',
    'user_id' => 1
]);
\App\Models\project::create([
    'status' => '見積準備中',
    'customer' => 'ACCIL',
    'start' => '2023 10 -01',
    'end' => '2023 10 -30',
    'number' => '2',
    'user_id' => 1
]);
// 追記終了



    }
}
