<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuthorResource;
use App\Models\Author;

class AuthorController extends Controller
{
    public function show($id)
    {
        return new AuthorResource(Author::find($id));
    }

    public function all()
    {
        return AuthorResource::collection(Author::all());
    }

    public function books($id)
    {
        return new AuthorResource(Author::find(1)->setAttribute('all_books', '1'));
    }
}
