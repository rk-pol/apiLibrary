<?php

namespace App\Http\Controllers;

use App\Http\Resources\LanguageResource;
use App\Models\Language;

class LanguageController extends Controller
{
    public function show($id)
    {
        return new LanguageResource(Language::find($id));
    }

    public function all()
    {
        return LanguageResource::collection(Language::all());
    }

    public function books($id)
    {
        return new LanguageResource(Language::find(1)->setAttribute('all_books', '1'));
    }
}
