<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
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
                'type' => 'books',
                'id' => $this->id,
                'author_id' => $this->author_id,
                'genre_id' => $this->genre_id,
                'lang_id' => $this->lang_id,
                'attributes' => $this->attributes,
                'created_at' => Carbon::parse($this->created_at)->format('Y-m-d H:m:s'),
                'updated_at' => Carbon::parse($this->updated_at)->format('Y-m-d H:m:s'),
        ];
    }

    public function withResponse($request, $response)
    {
        $response->header('Cache-control', 'no-cache');
    }
}
