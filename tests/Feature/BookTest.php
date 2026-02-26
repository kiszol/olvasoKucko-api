<?php

namespace Tests\Feature;

use App\Models\Book;
use App\Models\Loan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookTest extends TestCase
{
    use RefreshDatabase;
    public function test_index_shows_all(): void
    {
        //arrange
        Book::factory()->count(5)->create();
        //act
        $response = $this->get('/api/books');
        //assert
        $response->assertStatus(200);
        $response->assertJsonCount(5);
    }
}
