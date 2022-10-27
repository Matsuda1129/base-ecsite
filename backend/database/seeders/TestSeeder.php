<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->insert(
            [
                [
                    'name' => 'test',
                    'email' => 'test@test.com',
                    'memo' => 'testtesttest',
                ],
                [
                    'name' => 'test2',
                    'email' => 'test2@test.com',
                    'memo' => 'test2test2test2',
                ],
                [
                    'name' => 'test3',
                    'email' => 'test3@test.com',
                    'memo' => 'test3test3test3',
                ],
            ]
        );
    }
}
