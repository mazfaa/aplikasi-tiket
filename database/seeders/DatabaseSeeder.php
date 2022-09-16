<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'username' => 'admin',
            'password' => Hash::make('password'),
            // 'password' => 123,
        ]);

        \App\Models\Ticket::create(
            [
                'id' => 1,
                'name' => 'M Azfa Asykarulloh',
                'address' => 'Cianjur',
                'phone' => '+6281313810593',
                'status' => 'checked',
                'date' => date('Y-m-d'),
                'time' => date("s:i:h"),    
            ],

            [
                'id' => 2,
                'name' => 'Alifa Tazkia Irdani',
                'address' => 'Cikidang',
                'phone' => '+628998657077',
                'status' => 'unchecked',
                'date' => date('Y-m-d'),
                'time' => date("s:i:h"),
            ],

            [
                'id' => 3,
                'name' => 'Fathu Rabbaniyah',
                'address' => 'Cipatat',
                'phone' => '+628570932839',
                'status' => 'checked',
                'date' => date('Y-m-d'),
                'time' => date("s:i:h"),
            ],

            [
                'id' => 4,
                'name' => 'Rizqi Novita Fitriana',
                'address' => 'Cianjur',
                'phone' => '+6281519832938',
                'status' => 'checked',
                'date' => date('Y-m-d'),
                'time' => date("s:i:h"),
            ]
        );
    }
}
