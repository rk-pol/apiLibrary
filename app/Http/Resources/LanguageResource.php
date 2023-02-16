<?php

namespace App\Http\Resources;

use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class LanguageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'type' => 'languages',
            'id' => $this->id,
            'name' => $this->name,
            'short_name' => $this->short_name,
            'created_at' => Carbon::parse($this->created_at)->format('Y-m-d H:m:s'),
            'updated_at' => Carbon::parse($this->updated_at)->format('Y-m-d H:m:s'),
            'data' => $this->whenHas('all_books', BookResource::collection(Book::all()->where('lang_id', $this->id)))
        ];
    }

    public function withResponse($request, $response)
    {
        $response->header('Cache-control', 'no-cache');
    }
}
