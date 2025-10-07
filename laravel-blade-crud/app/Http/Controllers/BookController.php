<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Contracts\View\View;

class BookController extends Controller
{

    public function list(): View
    {
        $books = Book::all();
        return view('books.list', ['bookList' => $books]);
    }

    public function show(string $id): View
    {
        // $book = Book::find($id);
        return view('books.show', [
            'book' => Book::findOrFail($id)
        ]);
    }

    public function create(): View
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        //  protected $fillable = [
        //         'author',
        //         'title',
        //         'genre',
        //         'year',
        //         'description'
        //     ];
        $validated = $request->validate([
            'author' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'year' => 'required|integer|min:0',
            'description' => 'required|string'
        ]);
        // $data = [
        //     'author' => $request->author,
        // ]
        // $book = Book::create($data)
        // Book::create([
        //     'author' => $validated['author'],
        //     'title' => $validated['title'],
        //     'genre' => $validated['genre'],
        //     'year' => $validated['year'],
        //     'description' => $validated['description']
        // ]);
        $book = Book::create($validated);
        // return redirect('/list');
        return redirect()->route('books.list');
    }

    public function edit(string $id): View
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'author' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'year' => 'required|integer|min:0',
            'description' => 'required|string'
        ]);
        $book = Book::findOrFail($id);
        $book->update($validated);
        return redirect('/list');

        // SOFT UPDATE

    }

    public function delete(): View
    {
        return view('books.delete');
    }

    public function destroy(Request $request)
    {

        // SOFT DELETE


        // HARD DELETE
        $book = Book::findOrFail($request->bookid);
        $book->delete();

        return redirect('/list');
    }
}
