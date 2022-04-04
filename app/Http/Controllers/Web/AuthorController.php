<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Author;
use Illuminate\View\View;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $authors = Author::orderBy('last_name')->paginate(10);

        /**
         * @var Author $author
         */
        foreach ($authors as $author) {
            $author->setBookCountAttribute();
        }

        return view('author/table', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('author/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request)
    {
        Author::create($request->all());

        return redirect()->route('author.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id): View
    {
        $author = Author::query()->find($id);

        return view('author/show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit($id): View
    {
        $author = Author::query()->find($id);

        return view('author/edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     */
    public function update(UpdateAuthorRequest $request, $id)
    {
        $author = Author::query()->find($id);
        $author->update($request->all());

        return redirect()->route('author.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $author = Author::query()->find($id);
        $author->delete();

        return redirect()->route('author.index');
    }
}
