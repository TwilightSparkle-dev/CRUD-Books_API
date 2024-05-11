<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookAddTest extends TestCase
{
    use RefreshDatabase;

    public function test_add_book(): void
    {
        $response = $this->postJson('/api/books', [
            'title' => 'Empty World',
            'publisher' => 'None',
            'author' => 'No Name',
            'genre' => 'Drum',
            'date_publication' => '2020-07-11',
            'count_words' => 1,
            'price' => 999.99
        ]);

        $response->assertStatus(200);
    }
}
