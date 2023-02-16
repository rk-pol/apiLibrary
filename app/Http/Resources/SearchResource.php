<?php

namespace App\Http\Resources;

use App\Models\Book;
use Illuminate\Http\Resources\Json\JsonResource;

class SearchResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $books = Book::where('attributes->title', 'like', '%'. $this->resource . '%')
            ->orWhere('attributes->description', 'like', '%' . $this->resource . '%')
            ->get();

       return [
           'data' => BookResource::collection($books)
       ];
    }
}
