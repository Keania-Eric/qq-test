<?php

namespace App\Http\Resources;

use App\Http\Resources\MovieVersionResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MovieVersionCategoryResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'name'=> $this->name,
            'movie_versions'=> new MovieVersionResource($this->movie_versions)
        ];
    }
}
