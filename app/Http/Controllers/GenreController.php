<?php

namespace App\Http\Controllers;

use App\Http\Resources\GenreResource;
use App\Models\Genre;

class GenreController extends Controller
{
    public function show($id)
    {
        return new GenreResource(Genre::find($id));
    }

    public function all()
    {
        return GenreResource::collection(Genre::all());
    }

    public function books($id)
    {
        return new GenreResource(Genre::find(1)->setAttribute('all_books', '1'));
    }
}
