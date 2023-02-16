<?php

namespace App\Http\Controllers;

use App\Http\Resources\SearchResource;

class SearchController extends Controller
{
    public function search($context)
    {
        return new SearchResource($context);
    }
}

