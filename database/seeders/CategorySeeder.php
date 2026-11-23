<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Novela']);
        Category::create(['name' => 'Ciencia Ficción']);
        Category::create(['name' => 'Historia']);
        Category::create(['name' => 'Programación']);
        Category::create(['name' => 'Fantasía']);
    }
}
