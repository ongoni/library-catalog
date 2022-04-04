<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Author;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        $authors = Author::all();

        /**
         * @var Author $author
         */
        foreach ($authors as $author) {
            $author->setBookCountAttribute();
        }

        return new Response([
            'authors' => $authors
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAuthorRequest $request
     * @return Response
     */
    public function store(StoreAuthorRequest $request): Response
    {
        $author = Author::create($request->all());

        return new Response($author, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param Author $author
     * @return Response
     */
    public function show(Author $author): Response
    {
        $author->setBooksAttribute();

        return new Response($author);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateAuthorRequest $request
     * @param Author $author
     * @return Response
     */
    public function update(UpdateAuthorRequest $request, Author $author): Response
    {
        $author->update($request->all());

        return new Response($author);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Author $author
     * @return Response
     */
    public function destroy(Author $author): Response
    {
        $author->delete();

        return new Response();
    }

}
