<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookListTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_without_filters(): void
    {
        $response = $this->get('/api/books');

        $response->assertStatus(200);
    }

    public function test_get_with_all_filters(): void
    {
        $response = $this->get('/api/books?page=1&per_page=10&search=Harry&sort_column=genre&sort_direction=asc');

        $response->assertStatus(200);
    }
}
