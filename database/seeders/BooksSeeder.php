<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'To Kill a Mockingbird',
                'publisher' => 'HarperCollins',
                'author' => 'Harper Lee',
                'genre' => 'Fiction',
                'date_publication' => '1960-07-11',
                'count_words' => 100000,
                'price' => 15.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '1984',
                'publisher' => 'Secker & Warburg',
                'author' => 'George Orwell',
                'genre' => 'Dystopian',
                'date_publication' => '1949-06-08',
                'count_words' => 88000,
                'price' => 12.49,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pride and Prejudice',
                'publisher' => 'T. Egerton, Whitehall',
                'author' => 'Jane Austen',
                'genre' => 'Romance',
                'date_publication' => '1813-01-28',
                'count_words' => 120000,
                'price' => 10.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Great Gatsby',
                'publisher' => 'Charles Scribner\'s Sons',
                'author' => 'F. Scott Fitzgerald',
                'genre' => 'Novel',
                'date_publication' => '1925-04-10',
                'count_words' => 47000,
                'price' => 14.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Harry Potter and the Philosopher\'s Stone',
                'publisher' => 'Bloomsbury',
                'author' => 'J.K. Rowling',
                'genre' => 'Fantasy',
                'date_publication' => '1997-06-26',
                'count_words' => 77000,
                'price' => 19.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
