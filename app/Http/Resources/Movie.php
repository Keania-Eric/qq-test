<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Movie extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'name'=> $this->name,
            'rating'=> $this->avg_rating,
            'tags'=> $this->tags->pluck('name')->all(),
            'desc'=> $this->desc,
            'image'=> $this->cover_img,
            'tag_line'=> $this->tag_line,
            'duration'=> $this->duration,
            //'version_categories'=> new MovieVersionCategory::collection($this->categories)
        ];
    }
}
