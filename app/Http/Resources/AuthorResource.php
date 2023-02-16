<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthorResource extends JsonResource
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
            'type' => 'authors',
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'year_of_birth' => $this->year_of_birth,
            'created_at' => Carbon::parse($this->created_at)->format('Y-m-d H:m:s'),
            'updated_at' => Carbon::parse($this->updated_at)->format('Y-m-d H:m:s'),
            'data' => $this->whenHas('all_books', new AuthorsCollection($this->books))
        ];
    }

    public function withResponse($request, $response)
    {
        $response->header('Cache-control', 'no-cache');
    }
}
