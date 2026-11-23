<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Book::create([
             'title' => 'Cien años de soledad',
             'author' => 'Gabriel García Márquez',
             'description' => 'Obra maestra del realismo mágico',
             'published_year' => 1967,
             'category_id' => 1,
         ]);

         Book::create([
             'title' => '1984',
             'author' => 'George Orwell',
             'description' => 'Distopía clásica',
             'published_year' => 1949,
             'category_id' => 2,
         ]);

         Book::create([
             'title' => 'Clean Code',
             'author' => 'Robert C. Martin',
             'description' => 'Guía para escribir código limpio',
             'published_year' => 2008,
             'category_id' => 4,
         ]);

         Book::create([
             'title' => 'El Señor de los Anillos',
             'author' => 'J.R.R. Tolkien',
             'description' => 'Épica de fantasía',
             'published_year' => 1954,
             'category_id' => 5,
         ]);
    }
}
