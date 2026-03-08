<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test to check if a book can be created.
     *
     * @return void
     */
    public function test_can_create_book()
    {
        $bookData = [
            'title' => 'Test Book',
            'author' => 'Test Author',
            'year' => 2021,
            'category' => 'Fiksi'
        ];

        $book = Book::create($bookData);

        $this->assertInstanceOf(Book::class, $book);
        $this->assertEquals('Test Book', $book->title);
        $this->assertEquals('Test Author', $book->author);
    }
}
