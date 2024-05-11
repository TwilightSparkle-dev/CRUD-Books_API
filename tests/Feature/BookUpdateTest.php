<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class BookUpdateTest extends TestCase
{
    use RefreshDatabase;

    public function test_update_book(): void
    {
        $book = DB::table('books')->first();

        $this->putJson('/api/books/'.$book->id, [
            'title' => $book->title . '123',
            'publisher' => $book->publisher . '123',
            'author' => $book->author . '123',
            'genre' =>  $book->genre . '123',
            'date_publication' => Carbon::now()->format('Y-m-d'),
            'count_words' => $book->count_words + 100,
            'price' => $book->price + 5.55,
        ]);

        $this->assertDatabaseHas('books', [
            'title' => $book->title . '123',
        ]);
    }
}
