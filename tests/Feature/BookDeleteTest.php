<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class BookDeleteTest extends TestCase
{
    use RefreshDatabase;

    public function test_delete_book(): void
    {
        $response = $this->delete('/api/books/' . DB::table('books')->first()?->id);

        $response->assertStatus(200);
    }
}
