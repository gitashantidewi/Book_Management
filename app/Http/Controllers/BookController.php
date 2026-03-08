<?php

namespace App\Http\Controllers;

use App\Repositories\RepositoryInterface;
use Illuminate\Http\Request;

/**
 * Class BookController
 * Manages the CRUD operations for books.
 */
class BookController extends Controller
{
    /**
     * @var RepositoryInterface
     */
    protected $bookRepository;

    /**
     * BookController constructor.
     *
     * @param RepositoryInterface $bookRepository
     */
    public function __construct(RepositoryInterface $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    /**
     * Display a listing of books.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $books = $this->bookRepository->all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new book.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Example of categories in an array as requested
        $categories = ['Fiksi', 'Non-Fiksi', 'Pendidikan', 'Teknologi', 'Sejarah'];
        return view('books.create', compact('categories'));
    }

    /**
     * Store a newly created book in the database.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer|min:1000|max:' . date('Y'),
            'category' => 'required|string',
        ]);

        $this->bookRepository->create($validated);

        return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    /**
     * Display the specified book.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $book = $this->bookRepository->find($id);
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified book.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $book = $this->bookRepository->find($id);
        $categories = ['Fiksi', 'Non-Fiksi', 'Pendidikan', 'Teknologi', 'Sejarah'];
        return view('books.edit', compact('book', 'categories'));
    }

    /**
     * Update the specified book in the database.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer|min:1000|max:' . date('Y'),
            'category' => 'required|string',
        ]);

        $this->bookRepository->update($id, $validated);

        return redirect()->route('books.index')->with('success', 'Buku berhasil diperbarui!');
    }

    /**
     * Remove the specified book from the database.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->bookRepository->delete($id);
        return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus!');
    }
}
