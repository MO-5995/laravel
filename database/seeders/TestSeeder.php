<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->insert([
            [
                'test' => 'aaa',
                'created_at' => Now()
            ],
            [
                'test' => 'bbb',
                'created_at' => Now()
            ]
        ]);
    }
}