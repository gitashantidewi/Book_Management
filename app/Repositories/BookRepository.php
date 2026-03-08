<?php

namespace App\Repositories;

use App\Models\Book;

/**
 * Class BookRepository
 * Handles the data operations for the Book model.
 */
class BookRepository implements RepositoryInterface
{
    /**
     * Get all books.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return Book::all();
    }

    /**
     * Find a book by ID.
     *
     * @param int $id
     * @return Book|null
     */
    public function find($id)
    {
        return Book::findOrFail($id);
    }

    /**
     * Create a new book.
     *
     * @param array $data
     * @return Book
     */
    public function create(array $data)
    {
        return Book::create($data);
    }

    /**
     * Update an existing book.
     *
     * @param int $id
     * @param array $data
     * @return Book
     */
    public function update($id, array $data)
    {
        $book = $this->find($id);
        $book->update($data);
        return $book;
    }

    /**
     * Delete a book by ID.
     *
     * @param int $id
     * @return bool
     */
    public function delete($id)
    {
        $book = $this->find($id);
        return $book->delete();
    }
}
