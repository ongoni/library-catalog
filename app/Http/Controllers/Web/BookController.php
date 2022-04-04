<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookRequest;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $books = Book::orderBy('title')->paginate(10);

        /**
         * @var Book $book
         */
        foreach ($books as $book) {
            $book->setAuthorShortNameAttribute(
                $book->author()->getResults()->short_name
            );
        }

        return view('book/table', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $authors = Author::all();

        return view('book/create', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        Book::create($request->all());

        return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id): View
    {
        $book = Book::query()->find($id);

        return view('book/show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit($id): View
    {
        $book = Book::query()->find($id);
        $authors = Author::all();

        return view('book/edit', compact('book', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        $book = Book::query()->find($id);
        $book->update($request->all());

        return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $book = Book::query()->find($id);
        $book->delete();

        return redirect()->route('book.index');
    }
}
