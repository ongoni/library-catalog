<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use Illuminate\Http\Response;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        $books = Book::all();

        /**
         * @var Book $book
         */
        foreach ($books as $book) {
            $book->setAuthorAttribute();
        }

        return new Response([
            'books' => $books
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBookRequest $request
     * @return Response
     */
    public function store(StoreBookRequest $request): Response
    {
        $book = (new Book())->create([
            'title' => $request->input('title'),
            'edition' => $request-> input('edition'),
            'author_id' => $request->input('author_id')
        ]);

        return new Response($book, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param Book $book
     * @return Response
     */
    public function show(Book $book): Response
    {
        $book->setAuthorAttribute();

        return new Response($book);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBookRequest $request
     * @param Book $book
     * @return Response
     */
    public function update(UpdateBookRequest $request, Book $book): Response
    {
        $book->update($request->all());

        return new Response($book);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Book $book
     * @return Response
     */
    public function destroy(Book $book): Response
    {
        $book->delete();

        return new Response();
    }
}
