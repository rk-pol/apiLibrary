<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Models\Book;

class BookController extends Controller
{
    public function show($id)
    {
        return new BookResource(Book::find($id));
    }

    public function all()
    {
        return BookResource::collection(Book::all());
    }

    public function books($id)
    {
        return new BookResource(Book::find(1)->setAttribute('all_books', '1'));
    }
}
