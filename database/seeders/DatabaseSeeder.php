<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Department;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'name' => 'Information System',
            'code' => 'IS'
        ]);


        Department::create([
            'name' => 'Information Technology',
            'code' => 'IT'
        ]);


        Department::create([
            'name' => 'Computr Science',
            'code' => 'CS'
        ]);
    }
}