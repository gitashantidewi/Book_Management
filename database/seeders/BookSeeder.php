<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title' => 'Laskar Pelangi',
                'author' => 'Andrea Hirata',
                'year' => 2005,
                'category' => 'Fiksi'
            ],
            [
                'title' => 'Filosofi Teras',
                'author' => 'Henry Manampiring',
                'year' => 2018,
                'category' => 'Non-Fiksi'
            ],
            [
                'title' => 'Bumi',
                'author' => 'Tere Liye',
                'year' => 2014,
                'category' => 'Fiksi'
            ],
            [
                'title' => 'Sapiens',
                'author' => 'Yuval Noah Harari',
                'year' => 2011,
                'category' => 'Non-Fiksi'
            ],
            [
                'title' => 'Atomic Habits',
                'author' => 'James Clear',
                'year' => 2018,
                'category' => 'Non-Fiksi'
            ]
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
