<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class BookShowTest extends TestCase
{
    use RefreshDatabase;

    public function test_show_book(): void
    {
        $response = $this->get('/api/books/' . DB::table('books')->first()?->id);

        $response->assertStatus(200);
    }
}
